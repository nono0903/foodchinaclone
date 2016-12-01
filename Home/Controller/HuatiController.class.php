<?php 
namespace Home\Controller;
use Think\Controller;
class HuatiController extends Controller{
	/**
	 * 话题主页面话题列表
	 * @Authorhtl {Ning<nk11@qq.com>}
	 * @DateTime  2016-11-11T01:44:39+0800
	 */
	public function index(){
		$htinfo = D('huati')->order('pubtime desc')->select();
		$res = array();
		foreach ($htinfo as  $v) {
			$row = array_merge($v,D('user')->field('user_name')->where('uid='.$v['uid'])->find());
			$row['thumb']=D('htimg')->field('thumb_img')->where('htid ='.$v['htid'])->select();
			$res[] = $row;
		}
		$this->assign('res',$res);
		$this->display('huatiIndex');
	}
/**
 * 话题添加,图片上传,生成缩略图
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-10T21:45:46+0800
 * 
 */
	public function huatiadd(){
		/*检测是否有提交,没有展示模版*/
		if(!IS_POST){
			$this->display();

		/*有提交做相关验证*/			
		}else{
			/*图片验证,没有提图片不算话题,提示信息退出*/
			 if(!$_FILES['pic']['name'][0]){
				$this->error('至少选择一张图片');
			}

			/*实例化对象,做提交验证*/
			  $huatis = D('huati');
			  $imgs = D('htimg');
			  /*验证出错,报错退出*/
			  if(!$huatis->create()){
			  	echo $huatis->getError();
			  	exit;
			  }

			/*tp貌似不能2次验证*/
     		//$ck = new \Think\Verify();
			// if(!$ck->check($_POST['yzm'])){
			// 		$this->error('验证码错误!');
			// 		exit;
			// }
			// echo 123;exit;


		  
/*主表入库信息*/
// dump(cookie());
// exit;	
			/*从post取主表插入字段,
			从cookie提取主表所需用户信息*/
			$data['uid'] = cookie('user_id');
			$data['user_name'] = cookie('user_name');
			$data['classify'] = $_POST['classify'];
			$data['title'] = $_POST['title'];
			$data['message'] = $_POST['message'];
			$data['eventid'] = $_POST['eventid'];
			$data['pubtime'] = time();
			/*执行添加,并取添加返回id*/
			$htid = $huatis->add($data);
			/*如果没有产生id,则说明插入失败,报错退出*/
			if(!isset($htid)){
				$this->error('添加失败');
				exit;
			}

/*附表入库信息*/
			/*图片上传,这个前台模版有点小丑*/
			$upload = new \Think\Upload();
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
			$upload->rootPath = 'public/Upload/Htimage/';
			$info = $upload->upload();

			// /*验证上传是否成功,如过不成功,删除插入数据*/
			// if(isset($info)){
			//  	$huatis->delete($htid);
			// 	echo $upload->getError(); 
			// }


			/*实例化对象,生成缩略图*/
			$image = new \Think\Image();
			/*多文件上传,用循环添加*/
			foreach($info as $v){
				/*附表入库信息*/
				$img['htid'] = $htid;
				$img['img'] = '/'.$upload->rootPath.$v['savepath'].$v['savename'];
				/*缩略图路径*/
				$thumb = 'public/Upload/Htimage/thumb/'.$v['savename'];
				/*生成缩略图*/
				$thopen = $upload->rootPath.$v['savepath'].$v['savename'];
				$asa=$image->open($thopen)->thumb(200,200,2)->save($thumb);
				
				$img['thumb_img'] = '/'.$thumb;
				/*执行添加*/
				$imgs->add($img);
			}

			/*插入失败没有返回id,则附表上传操作无法进行
			上传失败,则报错切,删除插入,故这里直接提示成功*/
			$this->success('提交成功','huatione?id='.$htid);
		}
	}

/**
 * 模版验证码,返回字符串展示到模版上
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-10T02:07:51+0800
 * @return  string
 */
	public function yzm(){
		$yzm = new \Think\Verify();
		$yzm->imageH = 120;
		$yzm->imageH = 30;
		$yzm->length = 4;
		$yzm->fontSize=16;
		$yzm->useCurve=false;
		$yzm->entry();
	}
/**
 * 前台模版ajax验证验证码
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-10T02:09:14+0800
 * @return 
 */
	public function checkyzm(){

        $yzm=I('get.yzm');
        $Verify = new \Think\Verify();
        if ($Verify->check($yzm)){
           echo 1;
        }else{
            echo 0;        
        }
    }

    /**
     * 查询单个话题
     * @Authorhtl {Ning<nk11@qq.com>}
     * @DateTime  2016-11-12T09:36:54+0800
     */
    public function huatione(){

    	$ht = D('huati')->find(I('get.id'));
		$this->assign('row',$ht);


    	$img = D('htimg')->where('htid='.I('get.id'))->select();
    	$this->assign('imgs',$img);

    	$comm = D('htcomm')->where('htid='.I('get.id'))->select();
    	$this->assign('comms',$comm);



    	// $data = D('huati')->field('huati.htid,title,message,pubtime,img,user_name')->join('left join htimg as t1 on huati.htid=t1.htid')->where('huati.htid='.I('get.id'))->select();
    	// dump($data);

    	$this->display();
    }


/**
 * 话题留言模块,ajaxpost提交,后天接收验证入库
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-12T09:35:35+0800
 * @return 
 */
    public function htcomm(){
	
    	$commo = D('htcomm');
    	if(!$commo->create()){
    		echo $commo->getError();
    		exit;
    	}

    	$_POST['pubtime'] = time();

    	if($commo->add($_POST)){
    		echo '留言成功';
    		exit;
    	}else{
    		echo '留言失败';
    		exit;
    	}

    	

    }
 
}
