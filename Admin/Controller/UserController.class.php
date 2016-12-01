<?php 
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller{

/**
 * 后台管理员注册
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-05T17:48:47+0800
 * 
 */
	public function reg(){
		/*实例化数据库对象*/
		$user = D('adminuser');
		/*判断是否有数据提交*/
		if (!IS_POST) {
			/*没有,显示模版*/
			$this->display('reg');

		}else{
			/*有提交则执行验证*/
			if(!$user->create()){
				/*验证出错,返回出错信息*/
				echo $user->getError();

			}else{
				/*密码入库数据改为md5码*/
				$salt = md5('Wk0P9jgz'.time());
				$data['salt'] =substr($salt, 0,8);
				$data['pwd'] = md5(I('post.pwd').$data['salt']);
				$data['name'] = I('post.name');
				$data['regtime'] = time();
				/*验证成功提交数据,提交成功,跳转登录页面*/
				if($user->data($data)->add()){

				$this->redirect('login');
					
				}else{
					/*录入数据出错返回注册页面*/
					$this->error('注册失败');
				}
			}
		}
	}
/**
 * 后台管理员登录
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-05T21:02:51+0800
 * 
 */
	public function login(){
		/*判断是否有提交没有显示模版*/
		if(!IS_POST){
			$this->display('login');

		}else{
			/*从数据库以name匹配对象*/
			if(!$user = D('adminuser')->where('name="'.I('name').'"')->find()){
			/*匹配不成功输出信息*/	
			exit('用户名不存在');

			}else{
			/*匹配成功,继续匹配pwd字段*/				
				if($user['pwd']==md5(I('pwd').$user['salt'])){
					/*匹配pwd成功,设置cookie*/
					cookie('name',I('name'));
					cookie('code',md5(I('name').C('salt')));
					cookie('uid',$user['id']);
					/*做页面跳转*/
					$this->redirect('Index/index');
					
				}else{
					/*匹配pwd失败,输出错误信息*/
					$this->error('用户名或者密码错误');
				}
			}
		}
	}
/**
 * 修改密码
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T16:25:33+0800
 */
	public function userlist(){
		/*登录验证*/
		if(cookie_chk()===0){
			$this->redirect('user/login');
		}
		/*提交验证,没有提交展示模版*/
		if(!IS_POST){
		$this->display('user/userlist');

		/*有提交*/
		}else{
			/*通过cookie取uid*/
			$uid = cookie('uid');
			/*实列化user对象,通过uid取值*/
			$user = D('adminuser');
			$userinfo=$user->find($uid);

		/*当输入密码与存储密码匹配成功才能修改*/
		if($userinfo['pwd']!==
			/*匹配失败,报错退出*/
			md5(I('post.ypwd').$userinfo['salt'])){
				$this->error('原密码错误');
		}else{
				
			/*匹配成功,做提交验证*/
			if(!$user->create()){
				/*验证失败提示出错信息*/
				echo $user->getError();

			}else{
				/*验证通过,修改密码,*/
				$_POST['pwd']=md5(I('post.pwd').$userinfo['salt']);
				/*修改成功删除cookie,跳转*/
				if($user->where('id='.$uid)->save($_POST)){
					cookie('name',null);
					cookie('code',null);
					cookie('uid',null);
					$this->success('修改成功','logout');
				/*失败,提示出错信息*/	
				}else{
					$this->error('修改失败');
				}
			}
		}
		
		}

	}


/**
 * 用户退出登录
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T09:49:22+0800
 * 
 */
	public function logout(){
		cookie('name',null);
		cookie('code',null);
		cookie('uid',null);
		$this->redirect('Admin/user/login');
	}

}
