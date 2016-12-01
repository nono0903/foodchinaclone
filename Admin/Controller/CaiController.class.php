<?php
namespace Admin\Controller;
use Think\Controller;

class CaiController extends Controller{
    //添加菜品的上级分类
    public function caiCat(){
        if (!IS_POST) {//判断用户进入页面后是否执行过添加操作
            $this->display();
            exit();
        }else{
            //实例化对象
            $cat = D('recipecat');
            //自动验证添加的字段是否符合要求
            if (!$cat->create()) {
                var_dump($cat->getError());
            }else{
                if ($cat->add()) {//判断添加操作是否执行成功
                    $this->redirect('/Admin/Cai/caiAdd');
                }
            }    
        }    
    }
    //菜品分类添加
    public function caiAdd(){
        //用户验证
        if(cookie_chk()===0){
            $this->redirect('user/login');
        }
        if (!IS_POST) {
            //实例化对象，查询出顶级分类的数据显示在上级分类列表中
            $cat = D('recipecat')->where('parent_cid=0')->select();
            $this->assign('cat',$cat);
            $this->display('caiAdd');
        }else{
             $cai = D('recipecat');

             //判断自动验证是否调用成功
             if (!$cai->create()) {
                $this->error($cai->getError());
             }else{
                if($cai->add()){
                  $this->success('添加成功！');
                }else{
                   $this->error('添加失败！'); 
                }
               
             }
        }    
    }
    //菜品分类列表
    public function caiList(){
            $recipecat = D('recipecat');
            //调用无限极分类getTree
            $recipecatlist = $recipecat->getTree();
            $this->assign('list',$recipecatlist);
            $this->display();    
    }    
      
    //修改
    public function caiEdit(){
        //接收cid
        $cid = I('get.cid');
        //实例化对象
        $recipecatmodel = D('recipecat');
        //查看该条数据所属的父ID下有几条数据
        $count = $recipecatmodel->where("parent_cid=$cid")->find();
        //如果计数大于0说明该栏目下存在子分类（注：本身就没有子分类的顶级分类的默认值为0）
            if (!IS_POST) {
                       if ($count) {
                      // $this->error('该栏目下存在内容');
                       $row = $recipecatmodel->find($cid); 
                       $this->assign('row',$row);
                       $this->display();
                    }else{
                        
                       //查出parent_cid为0的所有数据
                        $recipecat = $recipecatmodel->where('parent_cid=0')->select();

                        foreach ($recipecat as $k=>$v){
                            if($v['cid'] == $cid){
                                unset($recipecat[$k]);
                                break;
                            }
                        }                        //查出根据cid获取到的数据
                        $row = $recipecatmodel->find($cid); 
                        $this->assign('rec',$recipecat);
                        $this->assign('row',$row);
                        $this->display();
                    }
                  
            }else{
                //修改成功后进行保存
               
                $recipecatmodel->create(I('post.'));
                $row = $recipecatmodel->save();
                if ($row >= 0) {
                    //保存成功跳转到caiList页面
                    $this->success('修改成功！',U('caiList'),2);
                }else{
                    $this->error('修改失败',U('caiList'),2);
                }        
           }
        } 
    

    //删除  后期优化删除判断
    public function caidel(){
        $cid = I('get.cid');
        $recipecatmodel = D('recipecat');
        //根据接收到的ID查询该条数据
        $recipecat = $recipecatmodel->find($cid); 
        if ($recipecat['parent_cid'] == 0) {//判断该条数据是否为顶级分类
            $recipecat = $recipecatmodel->where("parent_cid=".$cid)->find(); 
            if ($recipecat) {//判断在所属分类下是否能找到该条数据
                $this->error('该栏目下存在内容');
            }else{//找到，直接删除
                $recipecatmodel->delete($cid);
                $this->redirect('Admin/Cai/caiList');
            }
        }else{
          $recipecatmodel->delete($cid);
          $this->redirect('Admin/Cai/caiList');
        }
    }
    public function search(){
        $index = I('post.index');
        $search = I('post.search');
        //搜索菜式分类
      $recipecatmodel = M('Recipecat');
      $cat = $recipecatmodel->where("$index='$search'")->find();
      if($cat['parent_cid'] > 0){
          $cat['lev'] = 2;
      }else{
         $cat['lev'] = 1;
      }
      $data[0] = $cat;
      $this->assign('list',$data);
      $this->display('caiList');

    }
}