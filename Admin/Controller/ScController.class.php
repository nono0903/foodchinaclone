<?php 
namespace Admin\Controller;
use Think\Controller;
class ScController extends Controller{
/**
 * 食材类添加
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-06T19:25:44+0800
 * 
 */
	public function sccatadd(){
		/*登录验证*/
		if(cookie_chk()===0){
			$this->redirect('user/login');
		}

		/*提交判定*/
		if(!IS_POST){
			$this->display('sc/sccatadd');
		}else{
		/*有提交,实列化对象*/
			$sc = D('sc');
			if(!$sc->create()){
			/*提交信息验证*/
				echo $sc->getError();

			/*添加提交内容,跳转页面*/
			}else{
			$sc->add();
			$this->redirect('sccatadd');

			}
		}
	}
/**
 * 食材添加
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-06T19:28:25+0800
 * 
 */
	public function scadd(){
		/*登录验证*/
		if(cookie_chk()===0){
			$this->redirect('user/login');
		}

		/*提交验证*/
		if(!IS_POST){
			/*没有提交,查出顶级栏目输出到模版*/
			$sc = D('sc')->where('parent_sid=0')->select();
			$this->assign('sc',$sc);
			$this->display('Sc/scadd');

		}else{
			/*有提交实例化对象*/
			$sc = D('sc');

			/*提交信息验证*/
			if(!$sc->create()){
				echo $sc->getError();
			}else{
			/*添加提交信息,跳转页面*/
				$sc->add();
				$this->redirect('scadd');
			}			
		}

	}

/**
 * 以无限极分类展示分类查询
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-06T19:32:59+0800
 * 
 */
	public function sclist(){
		/*登录验证*/
		if(cookie_chk()===0){
			$this->redirect('user/login');
		}
		/*判断是否有提交数据,没有提交执行内容*/
		if(!IS_POST){
			/*实例化对象*/
			$sc = M('sc')->select();
			/*无限极分类取值并发送到模版*/
			$sc = getTree($sc);
			$this->assign('sc',$sc);
			$this->display();
		/*有提交数据,执行查询,并发送到模版*/
		}else{
			// $sc = D('sc')->where('s_name="'.I('post.s_name').'"')->select();
			 
		/*wxy修改--start*/
			$index = I('post.index');
	        $search = I('post.search');
	        //搜索菜式分类
	        $scmodel = M('Sc');
	        $sc = $scmodel->where("$index='$search'")->find();
			      if($sc['parent_sid'] > 0){
			          $sc['lev'] = 2;
			      }else{
			          $sc['lev'] = 1;
			      }
			      $data[0] = $sc;
		/*wxy修改内容--end*/      
			$this->assign('sc',$data);
			$this->display();
		}		
	}

/**
 * 食材分类编辑,以及食材编辑
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T14:47:23+0800
 * 
 */
	public function scedit(){
		/*登录验证*/
		if(cookie_chk()===0){
			$this->redirect('user/login');
		}

		/*实列化对象*/
		$sc = D('sc');
		/*获取传参*/
		$sid = I('get.id');
		/*通过传参查询是否为顶级分类,且分类下是否有内容*/
		$num = $sc->where("parent_sid=$sid")->count();
		/*有内容输出提示,禁止编辑,删除*/
		if($num>0){
			$this->error('分类下有内容');
		/*没有内容,执行跳转到编辑页面*/

		}else{
			/*做提交判断*/
			if(!IS_POST){
				/*没有提交,查出顶级栏目parent_sid=0的内容输出到模版*/
				$row = $sc->find($sid); 
				$sccat = D('sc')->where('parent_sid=0')->select();
				$this->assign('sc',$sccat);
				/*通过传参查询出主键对应的参数发送到模版,在模版上跟
				之前的查询比对,生成所属栏目默认值*/
				$this->assign('row',$row);
				$this->display('Sc/scedit');

			}else{
				/*有提交内容实例化对象,通过tpcreate()方法验证*/
				$data = D('sc');
				if(!$data ->create()){
				/*验证出错输出错误信息*/
					echo $data->getError();
				}else{
				/*验证成功,通过隐藏域post传参过来的主键id
				做update修改操作*/					
					if($data->where('sid='.I('post.sid'))->save($_POST)){
					/*成功*/
						$this->success('修改成功'); 					
					}else{
					/*失败*/
						$this->error('修改失败');
					}
				}
			}
		}
	}


/**
 * 食材分类,以及食材删除,在模版页面做confirm确认删除操作
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T15:02:23+0800
 * 
 */
	public function scdel(){
		/*实列化对象,通过跳转前页面传参做父id查询数据*/
		$sc = D('sc');
		$sid = I('get.id');
		$num = $sc->where("parent_sid=$sid")->count();
		/*通过查询做判断,
		如果该查询有子栏目,输出提示信息,禁止删除*/
		if($num>0){
			$this->error('分类下有内容');
		/*该查询没有子栏目,删除主键对应数据*/
		}else{
			$sc->delete($sid);
			$this->success('删除成功');
		}
	}
/**
 * 时令食材添加
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-09T09:54:14+0800
 * @return int插入成功返回的键
 */
	public function slscadd(){
		/*登录验证*/
		if(cookie_chk()===0){
			$this->redirect('user/login');
		}

		/*提交判断*/
		if(!IS_POST){
		$this->display();
		/*有提交实列化对象,做提交验证*/
		}else{
			$slsc = D('slsc');
			/*验证失败,提示信息退出*/
			if(!$slsc->create()){
				echo $slsc->getError();
				exit;
			/*验证成功,上传文件*/
			}else{
				$up = new \Think\Upload();
				$up->exts = array('jpg', 'gif', 'png', 'jpeg');
				$up->rootPath = '/public/Home/Upload/';
				$info = $up->upload();
				/*上传信息验证*/
				if(!$info){
					echo $up->getError();
				/*验证通过,将存储路径入库*/
				}else{					
					$path = $up->rootPath.$info['img']['savepath'].$info['img']['savename'];
					$_POST['img'] = $path;
				}
				/*查找食材在sc食材表的id*/
				$sc = D('sc')->where('s_name="'.I('post.name').'"')->find();
				/*如果能找到,则写入id,不能找到值默认为空*/
				if ($sc) {
					$_POST['sid']=$sc['sid'];
				}

				/*数据入库*/
				$slsc->add($_POST);
				$this->success('添加成功');
			}
		}
	}
/**
 * 后台展示时令食材列表
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-09T10:28:26+0800
 * 
 */
	public function slsclist(){
		$res = M('slsc')->select();
		$this->assign('sc',$res);
		$this->display();
	}
/**
 * 时令食材删除
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-09T10:45:00+0800
 * @param  int $id 模版跳转get传参
 * @return  int 删除产生的主键id     
 */
	public function slscdel($id){
		if(D('slsc')->delete($id)){
			$this->success('删除成功');
		}

	}
}