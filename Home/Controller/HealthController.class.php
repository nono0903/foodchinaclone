<?php
namespace Home\Controller;
use Think\Controller;

class healthController extends Controller {
    public function index(){
       $this->display('healthIndex');
    }
 
}