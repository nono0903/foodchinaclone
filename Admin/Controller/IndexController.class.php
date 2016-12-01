<?php 
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index(){
		if (!cookie_chk()) {
			$this->redirect('user/login');
		}	
		$this->display();
	} 
}
?>