<?php 
/**
 * cookie验证登录用户
 * @Authorhtl {Ning<nk11@qq.com>}
 * @DateTime  2016-11-07T17:40:44+0800
 * @return int
 */
function cookie_chk(){
	if(md5(cookie('name').C('salt')) === cookie('code')){
		return 1;
	}else{
		return 0;
	}
}

