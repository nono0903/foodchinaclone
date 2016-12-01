<?php
namespace Home\Controller;
use Think\Controller;

class RecipeController extends Controller {
    // 菜谱首页
    public function index(){ 
      $recipemodel = D('recipe');
      //分页与总计
      $count = $recipemodel->count();//计算总页数
      $Page = new \Think\Page($count,8);//实例化分页类 传入总记录数和每页显示的记录数(8)
      $show = $Page->show();//分页显示
      
      //最新推荐;最新发布
      $newrecipe = $recipemodel->join('left join recipeatts as atts on recipe.rid=atts.rid')->join("left join user as u on recipe.uid=u.uid")->field('recipe.rid,cid,recipe.uid,recipe_title,u.user_name,atts.thumb_img')->order('rid desc')->limit($Page->firstRow.','.$Page->listRows)->select();

      $this->assign('page',$show);//模板输出
      $this->assign('newrecipe',$newrecipe);//最新推荐
      $this->display('RecipeIndex');
    }
    
    //菜谱分类图表
    public function recipefl(){
      $recipemodel = D('recipe');
      //接收传过来的分类id 
      $cid = I('get.cid');
      $c_name = D('recipecat')->where("cid=$cid")->select();
      //分页
      $count = $recipemodel->where("cid=$cid")->count();//计算总页数
      $Page = new \Think\Page($count,8);//实例化分页类 传入总记录数和每页显示的记录数(8)
      $show = $Page->show();//分页显示
      //根据接收到的cid查出该分类的所有菜品的信息
      $recipe = $recipemodel->field('recipe.rid,cid,recipe.uid,recipe_title,thumb_img,u.user_name,recipe.sc')->join('left join recipeatts as atts on recipe.rid=atts.rid')->join("left join user as u on recipe.uid=u.uid")->where("cid=$cid")->limit($Page->firstRow.','.$Page->listRows)->select();
      //实例化tag,查出tag表的存储信息
      $tag = D('tag')->field('rid,tag_name')->select();
     foreach ($tag as $k=>$v) {
       $v['tag_name'] = str_replace('!@!','、',$v['tag_name']);
       $tag[$k] =  $v;
     }

      $this->assign('recipe',$recipe);
      $this->assign('tagname',$tag);
      $this->assign('name',$c_name);
      $this->assign('page',$show);//模板输出
      $this->display();
    }
    //推荐
    public function recipe_elite(){
      $this->display();
    }
    //最热
    public function recipehot(){
      $cid = I('get.cid');
      $recipemodel = D('recipe');
      $c_name = D('recipecat')->where("cid=$cid")->select();
      //分页
      $count = $recipemodel->where("cid=$cid")->count();//计算总页数
      $Page = new \Think\Page($count,1);//实例化分页类 传入总记录数和每页显示的记录数(8)
      $show = $Page->show();//分页显示
      $hot = $recipemodel->field('recipe.rid,cid,recipe.uid,recipe_title,thumb_img,u.user_name,recipe.sc')->join('left join recipeatts as atts on recipe.rid=atts.rid')->join("left join user as u on recipe.uid=u.uid")->where("cid=$cid")->order('sc desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      
      //实例化tag,查出tag表的存储信息
      $tag = D('tag')->select();
      foreach ($tag as $k=>$v) {
       $v['tag_name'] = str_replace('!@!','、',$v['tag_name']);
       $tag[$k] =  $v;
     }

      $this->assign('recipe',$hot);
      $this->assign('tagname',$tag);
      $this->assign('name',$c_name);
      $this->assign('cid',$cid);
      $this->assign('page',$show);//模板输出
      $this->display();
    }

    //菜单页
    public function caidan(){
      //分页
      $count = D('recipe')->count();//计算总页数
      $Page = new \Think\Page($count,12);//实例化分页类 传入总记录数和每页显示的记录数(8)
      $show = $Page->show();//分页显示
      $recipe = D('recipe')->field('recipe.rid,recipe.uid,recipe_title,recipe.sc,atts.thumb_img,u.user_name')->join('left join recipeatts as atts on recipe.rid=atts.rid')->join("left join user as u on recipe.uid=u.uid")->order('sc desc')->limit($Page->firstRow.','.$Page->listRows)->select();

      // var_dump($recipe);exit;


      $this->assign('recipe',$recipe);
      $this->assign('page',$show);//模板输出
      $this->display();
    }
   

    // //家常菜谱 
    public function jiachangcaipu(){
      //查出所有菜品的名称,去掉其中重复的数据，返回一个二维数组
      $recipe = D('recipe')->distinct(true)->field('recipe_title,rid')->select();
      $this->assign('recipe_title',$recipe);
      $this->display();
     
    }

    //创建新菜单
   /* public function create_recipe(){
       $this->display();
    }*/

    //创建菜谱
    public function up_recipe(){
      if (!IS_POST) {
        //菜品分类
        $catmodel = D('recipecat')->select();
        $this->assign('cat',$catmodel); 
        $this->display();
      }else{
        //实例化对象recipemodel
        $recipemodel = D('recipe'); 
        //cookie('user_id')
        $data['uid'] = 1;
        $data['recipe_title'] = I('post.recipe_title');
        $data['cid'] = I('post.cid');
        //自动验证
        if ($recipemodel->create($data) ){

           if($rid = $recipemodel->data($data)->add()){
            //实例化attsmodel
            $attsmodel = D('recipeatts');
            //上传文件
            //实例化上传类
            $upload = new \Think\Upload();
            //设置上传文件类型
            $upload->exts = array('jpg','jpeg','png','gif');
            //设置本地存储路径
            $upload->rootPath = 'public/upload/';
            //上传文件
            $info = $upload->upload();
            if (!$info) {
              var_dump($upload->getError());
              return false;
            }else{//上传成功后以 "路径/日期/文件名"的格式保存下来 
              $_POST['recipe_img'] = 'public/upload/'.$info['recipe_img']['savepath'].$info['recipe_img']['savename'];
            }
            //缩略图
            //实例化类
            $thumb = new \Think\Image();
            //打开一张图片
            $thumb->open($_POST['recipe_img']);
            //设置缩略图存放路径
            $thumb_path = 'public/upload/thumb/'.$info['recipe_img']['savename'];
            //将图片按150 x 150的大小缩放，并保存到$thumb_path
            $thumb->thumb(150,150)->save($thumb_path);
            //将图片保存在设定好的路径下
            $_POST['thumb_img'] = $thumb_path;
            //将用户传过来的信息打包整体填入到表recipeatts中
            $data = array();
            $data['rid'] = $rid;
            $data['recipe_img'] = I('post.recipe_img');
            $data['thumb_img'] = I('post.thumb_img');
            $data['recipe_content'] = I('post.recipe_content');
            if (!$attsmodel->add($data)){
                $this->getError();
                exit();
            }else{
                $this->redirect('create_recipe',array('rid'=>$rid));
            }
        }
    }else{
          echo $recipemodel->getError();
    }
  }
}


    //编辑菜谱
    public function create_recipe(){
      //菜品分类
      $catmodel = D('recipecat')->select();
      $this->assign('cat',$catmodel);
      $rid = I('get.rid');
      $img = I('post.img');  
      $txt = I('post.txt');
      $data['rid'] = I('post.rid');
      //实例化对象recipemodel
       $recipemodel = D('recipe');
       //将recipe中的所有数据倒序排列数据，选出最新添加的一条数据
       $reciperow = $recipemodel->find($rid);
       if (!IS_POST) {
        $this->assign('reciperow',$reciperow);
        $this->display();
       }else{
                $data['tag_name'] = implode(',',I('post.sc'));
                $data['yl'] = implode(',',I('post.yl'));
                $tagModel = M('Tag');
               if($tagModel->add($data)){
                   /*上传步骤图片*/
                   $step_img = [];
                       for($i=0;$i<count($img);$i++){
                          list($type, $data) = explode(',', $img[$i]);   
                          // 判断类型  
                          if(strstr($type,'image/jpeg')!==''){  
                              $ext = '.jpg';  
                            }elseif(strstr($type,'image/gif')!==''){  
                                $ext = '.gif';  
                            }elseif(strstr($type,'image/png')!==''){  
                                $ext = '.png';  
                            }  
                            $pic_name = time().mt_rand(10000,999999);
                            //dirname(dirname(__DIR__)).'/public/upload/step/
                            $photo ='F:/step/'.$pic_name.$ext; 
                            //$root = 'public/upload/step/'.$pic_name.$ext;
                            // 生成文件  base64_decode($data)
                            if(file_put_contents($photo,base64_decode($data))){
                                    $step_img[] = $photo;  
                            }
                        }   
                            $step['step_img'] = implode(',',$step_img);
                            $step['step_content'] = implode('!@!',$txt);
                            $step['rid'] = $data['rid'];
                            $step['tips'] = I('post.tips');
                            if(D('Recipestep')->create($step)){
                                if(D('Recipestep')->add()){
                                    echo '添加成功！';
                                }else{
                                   echo M('Recipestep')->getError();
                                   exit;
                              }
                       }
                            
                }else{
                       echo "菜谱发布失败！";
                }
        }//第一个else的结束位置
    }//edit_recipe方法结束

    /*添加食材*/
    

    public function recipecat(){
      $recat = D('recipecat');
      $rnav = $recat->where('parent_cid=0')->select();
      $this->assign('nav',$rnav);
      // print_r($recat);
      // exit;
      $res = $recat->where('ggid=1')->select();
      $cats = array();
      foreach ($res as $v) {
        $info = $recat->where('ggid='.$v['parent_cid'])->select();
        $v['fl'] = $info;
        $cats[]=$v;
      }
      $this->assign('cat',$cats);

      $this->display();
    }
   
    
 }


