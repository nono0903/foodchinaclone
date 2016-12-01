<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    //登录
    public function login(){
        if (!IS_POST) {
            $this->display();
        }else{
            
            $usermodel = D('user')->where('user_name="'.I('post.user_name').'"')->find();

            if(!$usermodel){
                $this->error('用户不存在');
            }

            if (md5(I('post.password').$usermodel['salt']) !== $usermodel['password']){//如果一致将用户信息写入cookie
                $this->error('用户名或者密码错误');
            }else{
                cookie('user_name',$usermodel['user_name']);
                cookie('user_id',$usermodel['uid']);
                cookie('names',md5($usermodel['user_name'].C('salt')));//将cookie加盐防止篡改
                $this->redirect('Home/Index/index');
            }
    }
}

    //注册
    public function register(){
        if (!IS_POST) {
            $this->display();
            exit();
        }else{
            $usermodel = D('user');
            if (!$usermodel->create()) {
                echo $usermodel->getError();
                exit();
            }else{
                $salt = $this->salt();
                $usermodel->salt = $salt;
                $usermodel->password = md5(I('post.password').$salt);
                
                $user = $usermodel->add();
                if ($user) {      
                    $this->login();
                }
            }   
        }
    }
    
 /**
  * 销毁cookie,退出登录
  * @Authorhtl mengjinjin
  * @DateTime  2016-11-07T20:57:39+0800
  */
    public function logout(){
        cookie('user_name',null);
        cookie('user_id',null);
        cookie('names',null);
        $this->redirect('Home/Index/index');
    }

  /**
   * 生成随机字符串
   * @Authorhtl mengjinjin
   * @DateTime  2016-11-07T20:58:38+0800
   * @return  $salt 随机字符串
   */
    public function salt(){
        $salt = mt_rand(10000,99999);
         return  $salt;
     } 

     //验证码
      public  function  yzm(){
        $Verify = new \Think\Verify();
        $Verify->imageW = 127;
        $Verify->imageH = 30;
        $Verify->fontSize = '15';
        $Verify->length = 4;
        $Verify->useNoise = false;//干扰线
        $Verify->entry();
    }


    //发送验证码
    public function mycheckyzm(){
        $yzm = I('get.b');
        //$arr = [];
        $Verify = new \Think\Verify();
        if ($Verify->check($yzm)){
           echo 1;
        }else{
            echo 2;
        
        }
    }

    public function checkuser(){
        $user = D('user');
        $arr = $user->field('user_name')->select();
        $check = I('get.user_name');
        $names = array_column($arr, 'user_name');
        echo in_array($check,$names)?1:0;
    }

    public function usercenter(){
        $this->display();
    }

}