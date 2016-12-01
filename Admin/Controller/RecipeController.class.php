<?php 
namespace Admin\Controller;
use Think\Controller;
/**
	 * 菜谱管理
	 * @Author {Mrs.wang<1035875857@qq.com>}
	 * @DateTime  2016-11-05T20:47:54
	 */
class RecipeController extends Controller{
	public $recipeModel = array();
	public function __construct(){
		parent::__construct();
		$this->recipeModel = M('Recipe');
	}
	/**
	 * 菜品列表展示页面  可以进行删除操作
	 */
	public function repList(){
			$data = $this->recipeModel->field('recipe.rid,recipe_title,pubtime,atts.thumb_img,atts.recipe_content,u.user_name')->join("left join recipeatts as atts on recipe.rid=atts.rid")->join("left join user as u on recipe.uid=u.uid")->where('recipe.status=1')->select();

			$this->assign('recipe',$data);
			$this->display();						
	}

    /**
     *  搜索菜谱
     *  
     */
	public function search(){	
			// 搜索菜品 并且status=1
			$index = I('get.index');
			$search = I('get.search');
			if($index == 'rid'){
				//根据菜品ID查找
						$data = $this->recipeModel->where('recipe.rid='.$search,' and recipe.status=1')->field('recipe.rid,recipe_title,pubtime,atts.thumb_img,u.user_name')->join('left join recipeatts as atts on recipe.rid=atts.rid')->join('left join user as u on recipe.uid=u.uid')->select();
						//echo json_encode($data);
						$this->assign('recipe',$data);
						$this->display('repList');
				// 根据菜品名查找
				}else if($index == 'recipe_title'){ 
					$data = $this->recipeModel->where('recipe_title="'.$search.'" and recipe.status=1')->field('recipe.rid,recipe_title,pubtime,atts.thumb_img,u.user_name')->join('left join recipeatts as atts on recipe.rid=atts.rid')->join('left join user as u on recipe.uid=u.uid')->select();
						$this->assign('recipe',$data);
						$this->display('repList');
			   // 根据发布人查找
				}else if($index == 'user_name'){  
					$userModel = M('User');
					$uid = $userModel->field('uid')->where("user_name='$search'")->find();
					$data = $this->recipeModel->where('recipe.uid='.$uid['uid'].' and status=1')->field('recipe.rid,recipe_title,pubtime,thumb_img,user_name')->join('left join recipeatts as atts on recipe.rid=atts.rid')->join('left join user as u on recipe.uid=u.uid')->select();
				
						$this->assign('recipe',$data);
						$this->display('repList');						
			}else{
					return false;
			}
		}
		
	/**
	 * 初始化审查列表
	 * @return  array $list  待审查菜谱列表
	 */
	public function checkRecipe(){
		 if(!$IS_POST){
		 	$data = $this->recipeModel->field('recipe.rid,recipe_title,pubtime,atts.thumb_img,atts.recipe_content,u.user_name')->join("left join recipeatts as atts on recipe.rid=atts.rid")->join("left join user as u on recipe.uid=u.uid")->where('recipe.status=0')->select();	
            $this->assign('list',$data); 
            $this->display();
		 }
	}
	/**
	 * 查看菜品详细内容
	 */
	public function reDetails(){

		if(!IS_POST){
		$rid = I('get.rid');
		$attsModel = M('Recipeatts');
		$tagModel = M('Tag');
		$recipestepModel = M('Recipestep');
		$recipe = $this->recipeModel->field('rid,cid,recipe_title,pubtime')->where('rid='.$rid)->find();

		$atts = $attsModel->field('recipe_img,recipe_content')->where('rid='.$recipe['rid'])->find();

		$tag = $tagModel->field('tag_name,yl')->where('rid='.$recipe['rid'])->find();

		$sc_name = explode(',', $tag['tag_name']);
		$sc_yl = explode(',', $tag['yl']);
		$sc = array_combine($sc_name,$sc_yl);
		$step = $recipestepModel->field('step_img,step_content')->where('rid='.$recipe['rid'])->find();
		$step_img = explode(',', $step['step_img']);
		$step_content = explode('!@!', $step['step_content']);
		$step = array_combine($step_img,$step_content);
		$this->assign('recipe',$recipe);
		$this->assign('atts',$atts);
		$this->assign('sc',$sc);
		$this->assign('step',$step);
		$this->display();
		}else{
			//通过=1 不通过=2
			$shenhe = I('post.shenhe');
			$rid = I('post.rid');
            $a =$this->recipeModel->find($rid);
            if($shenhe == 0){
				$this->recipeModel->status = 2;
            }else{
            	$this->recipeModel->status = 1;
            }

	            if($this->recipeModel->save()){
	            	$this->redirect('Recipe/checkRecipe');
	            }else{
	            	//$this->error('审核失败，请重新审核！','checkRecipe',3);
	            	echo $this->recipeModel->getError();
	            }
            
		}
		
	}
	/**
	 * 删除菜品
	 */
	public function recipeDel($rid){
	$recipedata = $this->recipeModel->find($rid);
       if($this->recipeModel->delete($rid)){
	       	$attsdata = M('Recipeatts')->where('rid='.$rid)->find();
	       	 if(M('Recipeatts')->where('rid='.$rid)->delete()){
		           $stepdata = M('Recipestep')->where('rid='.$rid)->find();
		       		if(M('Recipestep')->where('rid='.$rid)->delete()){
							$tagdata = M('Tag')->where('rid='.$rid)->find();
			       			if(M('Tag')->where('rid='.$rid)->delete()){
			                     $this->success('菜谱删除成功！','repList',2);
			       			}else{
			       				$this->error('菜谱删除失败！4','repList',2);
			       				M('Tag')->add($tagdata);
			       			}
		       		}else{
		       			$this->error('菜谱删除失败！3','repList',2);
		       			// M('Recipeatts')->add($attsdata);
		       			M('Recipestep')->add($stepdata);
		       		}
	       	}else{
	       		$this->error('菜谱删除失败！2','repList',2);
	       		$this->recipeModel->add($recipedata);
	       	}
       }else{
         $this->error('菜谱删除失败！1','repList',2);
       }

 
       
	}
	/**
	 * 删除该菜品 填写原因界面
	 */
	public function delReason(){
		 $rid = I('get.rid');
         $this->assign('rid',$rid);
         if(!IS_POST){
         	$this->display();
         }else{
         	$reasonModel = D('Reason');
         	if($reasonModel->create()){
         		$reasonModel->id = cookie('uid');
         	    $reasonModel->delTime = time();
         	    if($reasonModel->add()){
         	    	//$this->success('添加信息成功！','repList',2);
         	    	$this->recipeDel($rid);
         	    }else{
         	    	//echo $reasonModel->getError();
         	    	$this->error($reasonModel->getError(),'repList',2);
         	    }
         	}else{
         		//return false;
         		echo "<script>alert('".$reasonModel->getError()."');history.back();</script>";
         		exit;
         		
         	}


         }
	}
}
 ?>
