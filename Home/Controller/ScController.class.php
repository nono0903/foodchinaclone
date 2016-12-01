<?php
/**
 * Created by PhpStorm.
 * User: Ning
 * Date: 2016/11/8
 * Time: 11:20
 */
namespace Home\Controller;
use Think\Controller;

class ScController extends Controller{
  /**
   * 主页展示食材分类
   * @Authorhtl {Ning<nk11@qq.com>}
   * @DateTime  2016-11-08T20:29:09+0800
   * @return 多为数组(3维)
   */
    public function index(){
        $scmodel = D('sc');
        /*食材类导航导航*/
        $cat = $scmodel->where('parent_sid=0')->select();
        $this->assign('cat',$cat);




        /*肉禽类*/
        $rl = $scmodel->where('parent_sid=2')->limit('19')->select();
        $ql = $scmodel->where('parent_sid=3')->limit('10')->select();
        $yw = $scmodel->where('parent_sid=4')->limit('4')->select();
        $arr[]=array(
            "sid" => "1",
            "s_name" => "更多",
            "parent_sid" => "0"
        );
        $rql = array_merge($rl,$ql,$arr);
        
        
        
        /*水产品类*/
        $yl = $scmodel->where('parent_sid=237')->limit('10')->select();
        $xal = $scmodel->where('parent_sid=238')->limit('10')->select();
        $xl = $scmodel->where('parent_sid=239')->limit('10')->select();
        $bl = $scmodel->where('parent_sid=240')->limit('9')->select();
        $ql = $scmodel->where('parent_sid=240')->limit('8')->select();
        $arr1[]=array(
            "sid" => "236",
            "s_name" => "更多",
            "parent_sid" => "0"
        );
        $scp = array_merge($yl,$xal,$xl,$bl,$ql,$arr1);

        /*蔬菜类*/
        $jyl = $scmodel->where('parent_sid=531')->limit('7')->select();
        $gjl = $scmodel->where('parent_sid=532')->limit('7')->select();
        $gsl = $scmodel->where('parent_sid=533')->limit('7')->select();
        $gcl = $scmodel->where('parent_sid=534')->limit('7')->select();
        $njl = $scmodel->where('parent_sid=535')->limit('7')->select();
        $jl = $scmodel->where('parent_sid=536')->limit('6')->select();
        $arr2[]=array(
            "sid" => "530",
            "s_name" => "更多",
            "parent_sid" => "0"
        );

        $scl = array_merge($jyl,$gjl,$gsl,$gcl,$njl,$jl,$arr2);

        /*果品类*/

        $xgl = $scmodel->where('parent_sid=1013')->limit('10')->select();
        $ggl = $scmodel->where('parent_sid=1014')->limit('7')->select();
        $arr3[]=array(
            "sid" => "1012",
            "s_name" => "更多",
            "parent_sid" => "0"
        );

        $gpl = array_merge($xgl,$ggl,$arr3);

        /*米面豆乳类*/

        $ml = $scmodel->where('parent_sid=1212')->limit('8')->select();
        $mial = $scmodel->where('parent_sid=1213')->limit('8')->select();
        $dl = $scmodel->where('parent_sid=1215')->limit('8')->select();
        $dgl = $scmodel->where('parent_sid=1214')->limit('7')->select();
        $rl = $scmodel->where('parent_sid=1216')->limit('10')->select();
        $arr4[]=array(
            "sid" => "1211",
            "s_name" => "更多",
            "parent_sid" => "0"
        );

        $mmdr = array_merge($ml,$mial,$dl,$dgl,$rl,$arr4);

        /*调味品类*/
        $twp = $scmodel->where('parent_sid=1396')->limit('11')->select();
         $arr5[]=array(
            "sid" => "1658",
            "s_name" => "更多",
            "parent_sid" => "0"
        );
         $twp = array_merge($twp,$arr5);

        /*药食*/

        $ys = $scmodel->where('parent_sid=1577')->limit('11')->select();
         $arr6[]=array(
            "sid" => "1576",
            "s_name" => "更多",
            "parent_sid" => "0"
        );
         $ys = array_merge($ys,$arr6);

        // print_r($rql);
        // print_r($ys);

       
       $scs=['肉禽类'=>$rql,'水产品类'=>$scp,'蔬菜类'=>$scl,'果品类'=>$gpl,'米面豆乳类'=>$mmdr,'调味品类'=>$twp,'药食'=>$ys] ;
         // print_r($scs); 
        // exit();
        

        $this->assign('scs',$scs);


       $this->display('shicaiIndex');



        /*取出为四位,达不到想要结果
        $catid0=$scmodel->where('parent_sid=0')->select();

       foreach ($catid0 as $key => $v) {

       			static $a = array();

       			$n = $v['s_name'];

       			$a[$n]=array();

       			$c=$scmodel->where("parent_sid = $v[sid]")->select();

       			foreach($c as $v2){

       				$n2=$v2['sid'];

       				$a[$n][$n2]=array();

       				$d=$scmodel->where("parent_sid = $v2[sid]")->limit(0,10)->select();

       				foreach($d as $v3){

       				$a[$n][]=$v3['s_name'];}
       				//var_dump($a[$n]);die;
       			}                                 
       }
        var_dump($a);die;
        //同样取出4维数组达不到想要结果
        foreach ($catid0 as $v) {
        	$catid1[]= $scmodel->where('parent_sid='.$v['sid'])->select();
        	}
        	foreach($catid1 as $v1){
        		
        		for ($i=0; $i <count($v1) ; $i++) { 
        		$catid2[] = $scmodel->where('parent_sid='.$v1[$i]['sid'])->limit(10)->select();	        		
        		}

          }
        		$cats[]=$catid2;
        	// print_r($cats);
*/
        	

          
        }

/**
 * 食材分类查询
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-08T22:31:14+0800
 * @param  $id 模版页面a链接传值
 * @return    多为数组(3维)
 */
    public function flcx($id){
      /*食材类导航导航*/
      $cat = D('sc')->where('parent_sid=0')->select();
      $this->assign('cat',$cat);

      /*通过传值,找子分类*/
      $data = D('sc')->where('parent_sid='.$id)->select();
      /*设置静态变量,用来设计数组的键*/
      static $arr= array();
      /*循环子分类,通过子分类找到第三级分类*/
      foreach($data as $v){
        /*设定第二位数组的键,方便模版展示*/
        $b=$v['s_name'];
        $arr[$b]=array();
        /*取值*/
        $arr[$b] = D('sc')->where('parent_sid='.$v['sid'])->select();
      
      }
      /*发送展示到模版*/
      $this->assign('scs',$arr);
      $this->display('flcx');
    }

    
    
    
}