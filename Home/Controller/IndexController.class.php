<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){

        /*时令食材模块n*/
    	/*时令食材上方食材导航*/
	    $scs = D('sc')->where('parent_sid=0')->limit(4)->select();
	    $this->assign('scs',$scs);
	    
	    /*时令食材图文展示信息*/
	    $slsc = D('slsc')->select();   
	    $this->assign('slscs',$slsc);
	    /*n --end*/

        //首页菜谱大全
        $recipedata = D('recipecat')->where('parent_cid != 0')->limit('11')->select();
        //食材大全
        $scdata = D('sc')->where('parent_sid = 0')->limit('11')->select();
        $this->assign('recipe',$recipedata);
        $this->assign('sc',$scdata);

       /*首页话题展示*/

       $htinfo=D('huati')->order('pubtime desc')->limit(10)->select();
       $htres=[];
       foreach ($htinfo as $v) {
       $img = D('htimg')->field('thumb_img')->where('htid='.$v['htid'])->limit(4)->select();
       $v['thumb']=$img;
       $com = D('htcomm')->where('htid='.$v['htid'])->count();
       $v['commnum']=$com;
       $htres[]= $v;   
       }
       $this->assign('htinfo',$htres);






/*展示模版,所有代码在之前写入*/
$this->display();
    }

    public function mobile(){
        $this->display();    
    }


}