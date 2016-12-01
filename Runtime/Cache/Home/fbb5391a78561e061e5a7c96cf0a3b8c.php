<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户登录-美食天下</title>
<meta name="keywords" content="用户登录">
<meta name="description" content="" />
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="/Public/Home/images/f.ico"/>
<link rel="apple-touch-icon" href="/Public/Home/images/wapico.png" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css?a=7">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/user.css?a=2016-08-10">


</head>
<body>
﻿<!-- top导航 -->
  <div class="top-bar" id="J_top_bar"> 
   <ul class="bar-left left"> 
    <li><a title="美食天下" href="<?php echo U('Home/Index/index');?>" target="_blank" class="top_bar_logo"><i>美食天下</i>首页</a></li> 
    <li> <a title="菜谱" href="<?php echo U('Recipe/index');?>" target="_blank">菜谱</a></li> 
    <li> <a title="食材" href="<?php echo U('Sc/index');?>" target="_blank">食材</a></li> 
    <li> <a title="健康" href="<?php echo U('Health/index');?>" target="_blank">健康</a></li> 
    <li> <a title="专题" href="<?php echo U('Zhuanti/index');?>" target="_blank">专题</a></li> 
    <li> <a title="社区" href="<?php echo U('Shequ/index');?>" target="_blank">社区</a></li> 
    <li> <a title="话题" href="<?php echo U('Huati/index');?>" target="_blank">话题</a></li> 
    <li> <a title="活动" href="<?php echo U('Active/index');?>" target="_blank">活动</a></li>

    <?php if(chkcookie() == 0 ): ?><li style='margin-left: 800px;'>
    <!-- if判断 -->
        <a href="<?php echo U('Home/User/login');?>">登录</a>
    <!-- 欢迎您 <a ><?php echo (cookie('name')); ?></a> -->
    </li>
    <li><a href="<?php echo U('Home/User/register');?>">注册</a></li> 
    <?php else: ?>
        <li style='margin-left: 700px;'>
            <?php echo (cookie('user_name')); ?> |
            <li><a href="<?php echo U('Home/User/logout');?>">退出登录</a></li> 
        </li><?php endif; ?>
    <!-- <li><a href='#'>退出</a></li>  -->
   </ul>
  </div>

	
<div class="loginbox">
<div class="loginbox_h">
<a href="<?php echo U('Home/User/login');?>" >登录</a>
</div>
<div class="loginbox_c">
<form id="loginform" name="loginform" action="" method="post">
    <div class="loginbox_l">
      <ul class="mform_r">            
        <li>
          <label for="username" >用户名：</label>
          <input type="text" name="user_name" id="user_name"   />
        </li>
        <li style="border:0;">
          <label for="password" >密　码：</label>
          <input type="password" name="password" id="password" />
        </li>
      </ul>
    <p class="clear">
    <label for="cookietime" ><input type="checkbox" id="cookietime" name="cookietime" value=""  />&nbsp;下次自动登录</label>
    <a href="http://member.meishichina.com/user/findpwd/" class="right">忘记密码？</a>
    </p>
    <input type="submit" id="loginbtn" class="loginbtn" value="登&nbsp;录"/>
    </div>
</form>

</div>
</div>

	

<!-- 引用全站js -->
<script type="text/javascript" src="http://static.meishichina.com/v6/js/lib/all.js?v=20161025"></script>

<script type="text/javascript" src="http://static.meishichina.com/v6/js/lib/jquery.vegas.min.js"></script>
<script type="text/javascript">	
var ibgs=['/Public/Home/images/20160720146900157818213.jpg','/Public/Home/images/20160116145293986916713.jpg','/Public/Home/images/201512081449543644253.jpg','/Public/Home/images/201511241448337585505.jpg','/Public/Home/images/20151013111553208843446.jpg','/Public/Home/images/20150917103921456209891.jpg','/Public/Home/images/20150831141046186920980.jpg','/Public/Home/images/20150828110842781495373.jpg','/Public/Home/images/20161102173333.jpg'];
var ibgs_ie='/Public/Home/images/20161102173333.jpg';
</script>

<script type="text/javascript">	
msc.user.init();


$("#username").focus();
var IE6 = navigator.appVersion.search(/MSIE 6/i) != -1;
var IE7 = navigator.appVersion.search(/MSIE 7/i) != -1;
if (IE6 || IE7) {
$('body').attr('style','background:url('+ibgs_ie+') no-repeat center')
}
else{
$.vegas( 'slideshow', {
		delay: 8000,
		backgrounds: [
			{ src: ibgs[0], fade: 2000 },
			{ src: ibgs[1], fade: 2000 },
      { src: ibgs[2], fade: 2000 },
			{ src: ibgs[8], fade: 2000 },
			{ src: ibgs[3], fade: 2000 }
		],
		 walk:function(step) {
//console.log( 'N°' +step+ ' is now displayed' );
}
	} )('overlay');
}

// $("#loginform").submit(function(){
// if($("#username").val()==''){
// msc.ui.dialog.error("用户名不能为空");
// $("#username").focus();
// return false;
// }
// if($("#password").val()==''){
// msc.ui.dialog.error("密码不能为空");
// $("#password").focus();
// return false;
// }

// return true;
// }
// );
</script>


<script>

// $("li.top_bar_more").hoverDelay(function(){
// $("li.top_bar_more div").show();
// },function(){
// $("li.top_bar_more div").hide();
// },200,200);

// var _hmt = _hmt || [];
// (function() {
//   var hm = document.createElement("script");
//   hm.src = "//hm.baidu.com/hm.js?fb9cd9dcdda23cee0c7357db9be24acb";
//   var s = document.getElementsByTagName("script")[0]; 
//   s.parentNode.insertBefore(hm, s);
// })();
// </script>
// <script>
// (function(){
//     var bp = document.createElement('script');
//     bp.src = '//push.zhanzhang.baidu.com/push.js';
//     var s = document.getElementsByTagName("script")[0];
//     s.parentNode.insertBefore(bp, s);
// })();
</script> 

</body>
</html>