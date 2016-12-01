<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0051)http://member.meishichina.com/mycenter/my_pai_list/ -->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>我发布的话题_话题管理-美食天下-美食天下</title>
<meta name="keywords" content="我发布的话题">
<meta name="description" content="我发布的话题列表。">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<link rel="shortcut icon" href="/Public/home/css/f.ico">
<link rel="apple-touch-icon" href="/Public/Home/images/wapico.png">
<link rel="stylesheet" type="text/css" href="/Public/home/css/all.css">
<link rel="stylesheet" type="text/css" href="/Public/home/css/center.css">

<script src="/Public/home/js/push.js"></script>
<script src="/Public/home/js/hm.js"></script>
<script type="text/javascript" async="" src="/Public/home/js/ga.js"></script>
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

<!-- logo+nav -->
<div class="right" id="J_top_bar_user"><ul class="clear bar-info right bar-isLogin" id="J_barUser"><li class="bar-tips bar-sign-tips" id="J_barSignTips"><i class="arrow"></i><b class="arrow"></b><a href="javascript:;" class="close">×</a>签到即可参加 0元购</li><li class="bar-tips bar-message-tips" id="J_barMessageTips"><i class="arrow"></i><b class="arrow"></b><a href="javascript:;" class="close">×</a><p><span></span>条新消息, <a href="http://member.meishichina.com/mycenter/privately_list/" class="J_tips_look" target="_blank">查看</a></p><p><span></span>条通知, <a href="http://member.meishichina.com/mycenter/my_notice_list/" class="J_tips_look" target="_blank">查看</a></p></li><li class="bar-item bar-loading images-loading bar-link"></li><li class="bar-link bar-item bar-reg"><a href="http://member.meishichina.com/user/register/" target="_blank">注册</a></li><li class="bar-link bar-item bar-login"><a href="http://member.meishichina.com/user/login/" target="_blank">登录</a></li><li class="bar-login J_down bar-item"><div class="bar-text"><a href="http://home.meishichina.com/app/qq/login.php"><img width="18" height="18" src="./编辑上传菜谱-美食天下_files/nir1.png">QQ登录</a></div><div class="bar-box"><ul><li class="bar-box-item-0"><a href="http://home.meishichina.com/app/sinav2/login.php"><img width="18" height="18" src="./编辑上传菜谱-美食天下_files/nir2.png">微博登录</a></li><li><a href="http://home.meishichina.com/meishi2.php?ac=wechatlogin&op=login"><img width="18" height="18" src="./编辑上传菜谱-美食天下_files/nir3.png">微信登录</a></li></ul></div></li><li class="bar-center J_down bar-item"><div class="bar-text">会员中心<i class="arrow"></i></div><div class="bar-box"><ul><li class="bar-box-item-0"><a href="http://member.meishichina.com/mycenter/recipe-editnew-id-297131/#" class="J_barLogin">会员中心</a></li><li><a href="http://member.meishichina.com/mycenter/recipe-editnew-id-297131/#" class="J_barLogin">我的主页</a></li></ul></div></li><li class="bar-user J_down bar-item"><div class="bar-text"><i class="arrow"></i></div><div class="bar-box"><ul><li class="bar-box-item-0 bar-box-item-fav"><a title="我的收藏" href="http://home.meishichina.com/space-9855766-do-favrecipe.html" target="_blank">收藏</a></li><li class="bar-box-item-1"><a title="管理中心" href="http://member.meishichina.com/home/" target="_blank">管理</a></li><li class="bar-box-item-2"><a title="私信" href="http://member.meishichina.com/mycenter/privately_list/" target="_blank" id="privately_list">私信<span></span></a></li><li class="bar-box-item-3"><a title="通知" href="http://member.meishichina.com/mycenter/my_notice_list/" target="_blank" id="my_notice_list">通知<span></span></a></li><li class="bar-box-item-4"><a title="退出" href="http://member.meishichina.com/mycenter/recipe-editnew-id-297131/#" class="J_barExit">退出</a></li></ul></div></li><li class="bar-add J_down bar-item"><div class="bar-box"><ul><li class="bar-box-item-0"><a href="http://member.meishichina.com/mycenter/recipe-addnew/" target="_blank" class="J_barLogin">发菜谱</a></li><li class="bar-box-item-1"><a href="http://member.meishichina.com/mycenter/pai-add/" target="_blank" class="J_barLogin">发话题</a></li><li class="bar-box-item-2"><a href="http://member.meishichina.com/mycenter/blog-add/" target="_blank" class="J_barLogin">发日志</a></li></ul></div></li><li class="bar-item bar-sign J_down" id="J_barSign"><a href="javascript:void(0);" class="bar-sign-text J_barLogin"><img width="18" height="18" src="./编辑上传菜谱-美食天下_files/nr2.png">签到有礼</a><div class="bar-sign-box"><h3>签到 <b>0</b> 天</h3><p><b>0</b></p><a target="_blank" href="http://home.meishichina.com/event/lottery/">去抽奖</a></div></li></ul></div>
				<img src="./编辑上传菜谱-美食天下_files/count.php" style="display:none;">
</div>
<!-- logo+nav -->
<div class="w logo_wrap">
	<div class="logo_inner left">
		<a href="http://www.meishichina.com/" title="美食天下">美食天下</a>
	</div>
	<div class="logo_current left">
		<h1><a href="http://member.meishichina.com/home/" title="会员中心">会员中心</a></h1>
	</div>
	
	<div class="logo_search right">
		<form id="form_search" action="http://home.meishichina.com/search/" method="post" target="_blank">
			<div class="searchBox J_search"><a href="javascript:;" title="搜索" class="search_Btn J_searchBTN right" id="search">搜索</a><input type="text" id="q" class="search_Text J_searchTxt right gay" data-first="on">
			</div>
		</form>

	</div>

</div>
<div class="w nav_wrap">
	<ul>
		<!-- 给当前导航a标签上添加  class="on" -->
		<li><a class="on" href="http://member.meishichina.com/home/">首页</a></li>
		<li><a href="http://member.meishichina.com/mycenter/my_relation_fans/">关系</a></li>
		<li><a href="http://member.meishichina.com/mycenter/my_fav_recipe/">收藏</a></li>
		<!-- <li><a href="#">评论</a></li> -->
		<li><a href="http://member.meishichina.com/mycenter/my_settings_profile/">帐户信息</a></li>
		<li><a href="http://member.meishichina.com/mycenter/my_notice_list/">消息中心</a></li>
		<li><a href="http://member.meishichina.com/mycenter/my_credit_rule/">积分</a></li>
		<li class="right">
			<a href="http://home.meishichina.com/space-9855766.html" target="_blank">
				查看我的主页
				<i></i>
			</a>
		</li>
	</ul>
</div>


	
	<!-- 主框架 -->
	<div class="wrap">
		<div class="w clear mod">
			
			<div class="mod_left">

				<!-- 
	个人中心首页左侧菜单;
	给当前分类的a标签上添加 class="on";
 -->
<div class="menu_wrap">
	<ul>
		<li>
		<h2>美食天下</h2>
		</li>
		<li>
		<a href="<?php echo U('Home/recipe/index');?>">菜谱</a>
		</li>
		<li>
		<a href="">日志</a>
		</li>
		<li>
		<a href="<?php echo U('Home/huati/index');?>">话题</a>
		</li>
		<li>
		<a href="">菜单</a>
		</li>
		<li>
		<h2>珍选</h2>
		</li>  
		<!--<li><a  href="http://member.meishichina.com/mycenter/my_quan/">优惠券</a></li> -->
		<!--<li><a  href="http://member.meishichina.com/mycenter/my_quan/shai/1/9855766/">优惠券</a></li>-->
		<li><a href="">免费试用</a></li>
		<li><a href="">免费抽奖</a></li>
		<!--		<li>
			<h2>先食鲜</h2>
		</li>
		<li><a href="http://member.meishichina.com/mycenter/my_wish_me/">心愿单</a></li>-->
		<!-- <li><a href="#">美食天下行</a></li> -->
	</ul>
</div>
<!-- 左侧分类导航结束 -->


			</div>
			
			<!-- 右侧 -->
			<div class="mod_right">

				<div class="mod_location">
					当前位置：<a href="/">会员中心</a> &gt; <a href="/">话题管理</a> &gt; <span>我的话题</span>
				</div>

				<div class="ui_title mt20">
					<div class="ui_title_wrap">
						<a href="" class="on">我的话题</a>
						<a href="">我的精华</a>
					</div>

					<div class="ui_title_right">

					</div>
					<div class="ui_title_right">
						<a href="<?php echo U('Home/huati/huatiadd');?>" class="ui_btn_blue" target="_blank">发表新话题</a>
					</div>

				</div>


												<div class="ui_no_data">
					<p>您还未发表话题</p>
				</div>
								

			</div>
			<!-- 右侧结束 -->

		</div>
	</div>

		<div id="J_help_wrap" class="w_help">
  <div class="w clear">
    <div class="w_help_1">
    	<h5>关于美天</h5>
    	<ul>
    	    <li><a target="_blank" href="http://home.meishichina.com/mods/job/" title="加入我们">加入我们</a></li>
            <li><a target="_blank" href="http://www.meishichina.com/Docs/ContactUs/" title="联系我们">联系我们</a></li>
            <li><a target="_blank" href="http://www.meishichina.com/sitemap.html" title="网站地图">网站地图</a></li>
            <li><a target="_blank" href="http://home.meishichina.com/help.php" title="帮助中心">帮助</a> / <a target="_blank" href="http://home.meishichina.com/feedback.php?ac=add" title="意见与反馈">反馈</a></li>
            <li><a target="_blank" href="http://www.meishichina.com/Docs/Copyright/" title="版权与免责">版权与免责</a></li>
		</ul>
    </div>
    <div class="w_help_2">
    	<h5><a style="color:#000;" target="_blank" title="菜谱大全" href="http://home.meishichina.com/recipe.html">菜谱大全</a></h5>
    	<ul>
	  		<li><a target="_blank" title="最常见的家常菜" href="http://home.meishichina.com/recipe-menu.html">千道家常菜</a></li>
            <li><a target="_blank" title="所有菜谱分类" href="http://home.meishichina.com/recipe-type.html">所有分类</a></li>           
            <li><a target="_blank" title="热菜菜谱" href="http://home.meishichina.com/recipe/recai/">热菜</a></li>
            <li><a target="_blank" title="凉菜菜谱" href="http://home.meishichina.com/recipe/liangcai/">凉菜</a></li>
            <li><a target="_blank" title="汤羹菜谱" href="http://home.meishichina.com/recipe/tanggeng/">汤羹</a></li>
            <li><a target="_blank" title="小吃菜谱" href="http://home.meishichina.com/recipe/xiaochi/">小吃</a></li>
            <li><a target="_blank" title="儿童菜" href="http://home.meishichina.com/recipe/ertong/">儿童菜</a></li>
            <li><a target="_blank" title="开胃菜" href="http://home.meishichina.com/recipe/kaiweicai/">开胃菜</a></li>
            <li><a target="_blank" title="自制食材" href="http://home.meishichina.com/recipe/zizhishicai/">自制食材</a></li>
            <li><a target="_blank" title="泡酱腌菜" href="http://home.meishichina.com/recipe/jiangpaoyancai/">泡酱腌菜</a></li>
		</ul>
    </div>
    <div class="w_help_3">
		<h5>时下最热</h5>
        <ul>  
            <li class="short"><a target="_blank" title="土豆的做法" href="http://www.meishichina.com/YuanLiao/TuDou/">土豆</a></li>
            <li><a target="_blank" title="花样米饭" href="http://home.meishichina.com/topic-640.html">花样米饭</a></li>
            <li><a target="_blank" title="秋天吃什么" href="http://home.meishichina.com/topic-736.html">秋天吃什么</a></li>

            <li class="short"><a target="_blank" title="面条的做法" href="http://www.meishichina.com/YuanLiao/MianTiao/">面条</a></li>
            <li><a target="_blank" title="牛肉面" href="http://home.meishichina.com/topic-719.html">牛肉面</a></li>
            <li><a target="_blank" title="国王般的早餐" href="http://home.meishichina.com/topic-416.html">国王般的早餐</a></li>

            <li class="short"><a target="_blank" title="豆腐的做法" href="http://www.meishichina.com/YuanLiao/DouFu/">豆腐</a></li>
            <li><a target="_blank" title="抗雾霾" href="http://home.meishichina.com/topic-742.html">抗雾霾</a></li>
            <li><a target="_blank" title="抓住男人胃" href="http://home.meishichina.com/topic-727.html">抓住男人胃</a></li>

            <li class="short"><a target="_blank" title="芋头的做法" href="http://www.meishichina.com/YuanLiao/YuTou/">芋头</a></li>
            <li><a target="_blank" title="烘焙大全" href="http://home.meishichina.com/topic-59.html">烘焙大全</a></li>
            <li><a target="_blank" title="烤箱做的菜" href="http://home.meishichina.com/topic-743.html">烤箱做的菜</a></li>

            <li class="short"><a target="_blank" title="山药的做法" href="http://www.meishichina.com/YuanLiao/ShanYao/">山药</a></li>
            <li><a target="_blank" title="经典川菜" href="http://home.meishichina.com/topic-711.html">经典川菜</a></li>
            <li><a target="_blank" title="无辣不欢" href="http://home.meishichina.com/topic-651.html">无辣不欢</a></li>
      </ul>
	</div>
    <div class="w_help_4" style="margin:0;">
      <h5>随时随地，美食天下</h5>
	  <ul>  
        <li><img title="iPhone客户端" width="82" class="imgLoad" src="/Public/Home/images/app_iphone.png"><div>iPhone客户端</div></li>
		<li style="margin:0 25px;display:inline;width:auto"><img title="Android客户端" width="82" class="imgLoad" src="/Public/Home/images/app_all.png"><div>Android客户端</div></li>
        <li><img title="微信公众号" width="82" class="imgLoad" src="/Public/Home/images/weixin.png"><div>微信公众号</div></li>
      </ul>
    </div>
  </div>
  

</div>
<div class="footer-info" id="J_footer_box">
	<div class="w">
		<p>
			GPL © 2004-2016 飓风小组,荣誉出品,仿造仅作技术参考
		</p>
	</div>
</div>

	


</body></html>