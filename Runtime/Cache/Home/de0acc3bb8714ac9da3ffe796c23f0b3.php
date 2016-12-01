<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>食材_食材大全_热门特色食材做法大全-美食天下</title>
<meta name="keywords" content="食材,食材大全,热门特色食材做法大全" />
<meta name="description" content="美食天下食材频道为您提供食材，食材大全，热门特色食材做法大全等最详细的图文介绍，简单食材，玩转各种花样，每一道菜都有滋有味！" />
<meta name="renderer" content="webkit">
<meta http-equiv="mobile-agent" content="format=xhtml;">
<link rel="apple-touch-icon" href="/Public/Home/images/wapico.png" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/shicai.css">
<script type="text/javascript" src="/Public/Home/js/shicai.js"></script>
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

<div class="w logo_wrap2">
<div class="logo_inner left">
<a href="<?php echo U('Home/Index/index');?>" title="美食天下">美食天下</a>
</div>
<div class="logo_current left">
<h1><a href="<?php echo U('Home/Sc/index');?>" title="食材">食材</a></h1>
</div>
<div class="logo_search right">
<form id="form_search" action="http://home.meishichina.com/search/" method="post" target="_blank">
<div class="searchBox J_search"><a href="javascript:;" title="搜索" class="search_Btn J_searchBTN right" id="search">搜索</a><input type="text" id="q" class="search_Text J_searchTxt right gay" data-first="on">
</div>
</form>
</div>
<div class="logo_nav">
<a class=on href="http://www.meishichina.com/YuanLiao/" title="食材分类">食材分类<i></i><b></b></a>
<a href="http://www.meishichina.com/YuanLiao/yingyang/" title="营养排行">营养排行<i></i><b></b></a>
<span style="float: left; height:18px; margin:23px 4px 0; border-right: 1px solid #ddd;"></span>
<a target="_blank" href="http://www.meishichina.com/YuanLiao/gongxiao/" title="食疗食补">食疗食补</a>
</div>
</div>
<div class="w nav_wrap2">
<ul>
<li><a class="on" href="<?php echo U('Home/Sc/index');?>" title="首页">首页</a></li>


<?php if(is_array($cat)): foreach($cat as $key=>$scl): ?><li><a href="<?php echo U('Home/Sc/flcx',['id'=>$scl['sid']]);?>" title=""><?php echo ($scl["s_name"]); ?></a></li><?php endforeach; endif; ?>

<li><a href="" title="按字母A-Z检索">按字母A-Z检索</a></li>
</ul>
</div>
<div class="w mt10 clear">
<img  width="100%" height="110"  src="/Public/Home/images/h2.jpg">
</div>
<div class="wrap">
<div class="w clear">
<div class="category_box mt20">

<?php if(is_array($scs)): foreach($scs as $key=>$v): ?><div class="category_sub clear">
<h3><?php echo ($key); ?></h3>
<ul>
	<?php if(is_array($v)): foreach($v as $key=>$sc): ?><li><a title="<?php echo ($sc['s_name']); ?>的做法" href="http://www.meishichina.com/YuanLiao/JiRou/" target="_blank"><?php echo ($sc['s_name']); ?></a></li><?php endforeach; endif; ?>
</ul>
</div><?php endforeach; endif; ?>

</div>
</div>
</div>
<div class="w" style="padding:10px 0">
<script type="text/javascript">
    var cpro_psid = "1000010";
    var cpro_pswidth = 990;
    var cpro_psheight = 120;
</script>
<!-- <script src="http://su.bdimg.com/static/dspui/js/ue.js" type="text/javascript"></script> -->
</div>
<style type="text/css">
.footer-area{padding:10px 0;}
.footer-area .w {padding-top:10px;border-top: 1px solid #e8e8e8;}
.footer-area a {color: #666;}
.footer-area a:hover {color: #ba2020;}
.ft1{clear:none;float:left;font-size:11px;color:#666;width:680px;padding-top:10px;}
.ft1 .c3b {color:#c90;font-size:14px;font-weight:bold;margin-bottom:6px;}
.ft1 .c3b a {color:#f50;}
.ft1 .c3c {color:#aaa;font-size:12px;margin-bottom:6px;}
.ft2,.ft3,.ft4{clear:none;float:right;text-align:center;}
.ft3{margin:0 25px;*display:inline;}
</style>
<div class="footer-area clear" >
<!-- <div class="w">
  <div class="ft1">
    <p class="c3b"><a title="美食天下 - 让吃更美好" href="http://www.meishichina.com/" target="_blank">美食天下 - 让吃更美好！</a></p>
    <p class="c3c"><a href="http://www.meishichina.com/Docs/ContactUs/" title="联系我们" target="_blank">认识美天</a> · <a href="http://home.meishichina.com/mods/job/" title="在美天工作" target="_blank">在美天工作</a> · <a href="http://www.meishichina.com/Docs/Cooperate/" title="广告与合作" target="_blank">广告与合作</a> · <a href="http://www.meishichina.com/Docs/Copyright/" title="版权与免责" target="_blank">版权与免责</a> · <a href="http://home.meishichina.com/help.php" title="帮助中心" target="_blank">帮助中心</a> · <a href="http://www.meishichina.com/sitemap.html" title="网站地图" target="_blank">网站地图</a> · <a href="http://www.meishichina.com/Mobile/" title="移动应用" target="_blank">移动应用</a></p>
<p style="line-height: 22px; padding: 18px 0px 0px;"><strong style="color:#000">合作媒体：</strong> <a href="http://www.yidianzixun.com/" target="_blank"><img src="/Public/Home/images/yidianzixun.gif" style="height: 22px; margin: 0px 0px 0px 10px;"></a>
  </p> -->
  </div>
<div id="J_footer_box" class="footer-info">
  <div class="w">
    <p>
      版权所有 &copy; 2004-2016 <a target="_blank" href="http://www.meishichina.com/" title="美食天下 - 让吃更美好！">美食天下</a> 保留所有权利 - <img height="14" src="/Public/Home/images/beian.png"> <a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502031041">京公网安备 11010502031041号</a> / 京ICP证090244号 / <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn">京ICP备10020153号</a>
    </p>

    <div class="right">
     <a href="https://ss.knet.cn/verifyseal.dll?sn=2010110200100002761&amp;ct=df&amp;a=1&amp;pa=0.1362082236943738" target="_blank"><img width="64" height="23" src="/Public/Home/images/cnnic.png"></a></div>


  </div>
</div>
<script type="text/javascript" src="http://static.meishichina.com/v6/js/lib/all.js?v=20161025"></script>
<script type="text/javascript">	
msc.goTop.init();
msc.user.init();
$("img.imgLoad").imgLoad();

	$(window).scroll(function() {
		var omng = $(".keyshow").eq(0).offset();
		var jtl = $("#smnbk").offset();
		 if(omng){
		if (omng.top < $(document).scrollTop() + 40) {
			$(".keyshow").css({
				position: "fixed",
				top: 40,
				margin: 0,
				left: omng.left
			});
		} else if (omng.top < jtl.top + 200) {
			$(".keyshow").css({
				position: "static",
				margin: "5px 0 0 0"
			});
		}
		}
	});
$(".search_Text").click(function(){var f=$(this).attr("data-first");if(f=="on"){$(this).val("");$(this).attr("data-first","off")}$(this).removeClass("gay")});$("#search").click(function(){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}$("#form_search").submit()});$("#q").keydown(function(event){if(event.keyCode==13){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}}});</script>
<script>
$(".category_sub").hoverDelay(function(){
$(this).find("b").fadeIn();
},function(){
$(this).find("b").fadeOut();
},200,200);
</script>
<script>

$("li.top_bar_more").hoverDelay(function(){
$("li.top_bar_more div").show();
},function(){
$("li.top_bar_more div").hide();
},200,200);

var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fb9cd9dcdda23cee0c7357db9be24acb";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script> </body>
</html>