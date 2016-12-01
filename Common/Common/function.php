<?php 
/**
 * 无限极分类 整理有层级关系的数组
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T17:41:30+0800
 * @param     array()  $arr待分类数据
 * @param     integer  $parent_sid 父id 默认为0
 * @param     integer  $lev 生成的层级 值默认为0
 * @return    array() 
 */
    function getTree($arr,$parent_sid = 0,$lev = 0){

		$tree = array();

		foreach ($arr as $v) {

			if($v['parent_sid']==$parent_sid){

				$v['lev'] = $lev;

				$tree[] = $v;

				$tree = array_merge($tree,getTree($arr,$v['sid'],$lev+1));

			}
		}

		return $tree;
	}

/**
 * cookie验证登录用户
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T17:40:44+0800
 * @return int
 */
function chkcookie(){
	if(md5(cookie('user_name').C('salt')) === cookie('names')){
		return 1;
	}else{
		return 0;
	}
}


 ?>