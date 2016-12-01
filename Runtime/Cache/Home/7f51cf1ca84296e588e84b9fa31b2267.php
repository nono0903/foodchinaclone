<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://member.meishichina.com/mycenter/recipe-editnew-id-297131/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>编辑上传菜谱-美食天下</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<link rel="shortcut icon" href="/Public/Home/images/f.ico">
<link rel="apple-touch-icon" href="/Public/Home/images/wapico.png">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/center.css">
	<link rel="stylesheet" href="/Public/Home/css/blog_upload.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all_member.css">
	<link rel="stylesheet" href="/Public/Home/css/my_newmenu.css">
<link rel="stylesheet" href="/Public/Home/css/pai_upload.css">
<script src="/Public/Home/js/push.js"></script><script src="/Public/Home/js/hm.js"></script><script type="text/javascript" async="" src="/Public/Home/js/ga.js"></script><script charset="UTF-8" src="./上传话题-美食天下_files/get.php"></script><link rel="stylesheet" href="/Public/Home/css/style.3.0.23.css"></head>
<body>
	﻿<!-- top导航 -->
  <div class="top-bar" id="J_top_bar"> 
   <ul class="bar-left left"> 
    <li><a title="美食天下" href="<?php echo U('Home/Index/index');?>" target="_blank" class="top_bar_logo"><i>美食天下</i>首页</a></li> 
    <li> <a title="菜谱" href="<?php echo U('Recipe/index');?>" target="_blank">菜谱</a></li> 
    <li> <a title="食材" href="<?php echo U('Shicai/index');?>" target="_blank">食材</a></li> 
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
		<a class="on" href="http://member.meishichina.com/mycenter/my_recipe_me/">菜谱</a>
		</li>
		<li>
		<a href="http://member.meishichina.com/mycenter/my_blog_list/">日志</a>
		</li>
		<li><a href="http://member.meishichina.com/mycenter/my_pai_list/">话题</a></li>
				<li><a href="http://member.meishichina.com/mycenter/my_collect_me/">菜单</a></li>
				<li>
		<h2>珍选</h2>
		</li>  
		<!--<li><a  href="http://member.meishichina.com/mycenter/my_quan/">优惠券</a></li> -->
		<!--<li><a  href="http://member.meishichina.com/mycenter/my_quan/shai/1/9855766/">优惠券</a></li>-->
		<li><a href="http://member.meishichina.com/mycenter/my_try/">免费试用</a></li>
		<li><a href="http://member.meishichina.com/mycenter/my_lottery/">免费抽奖</a></li>
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
					当前位置：<a href="http://member.meishichina.com/mycenter/recipe-editnew-id-297131/#">会员中心</a> &gt; <a href="http://member.meishichina.com/mycenter/recipe-editnew-id-297131/#">菜谱管理</a> &gt; <span>编辑菜谱</span>
				</div>

				<div class="ui_title mt20">
					<div class="ui_title_wrap">
						<a href="http://member.meishichina.com/mycenter/my_recipe_me/" class="on">编辑菜谱</a>
					</div>
					<div class="ui_title_right">
						 <a style="position:absolute;top:10px;right:0px;font-size:13px;color:#666" target="_blank" href="http://home.meishichina.com/space-13-do-blog-id-588885.html">如何打造一篇精华菜谱</a>
					</div>
				</div>

			<!-- 内容开始 -->

					<div class="content">
						  
						 
						
						<input type="hidden" id="recipeinfo_id" value="297131">
							<dl class="cp_name">
								<dt>
									<span class="x">*</span>
									<span class="lable">菜谱名称：</span>
									
								</dt>
								<dd><input type="text" class="btn37 J_Title color_5b" name="subject" value="aa"></dd>
							</dl>
							<dl class="uploadImage2">
								<dt>
									<span class="x">*</span>
									<span class="lable">成品图片：</span>
								</dt>

								
								<dd>
								<div class="J_uploadflash J_swf" style="position: relative; left: 0px;">点击上传成品图</div>
<span style="font-size: 12px; color:#999; float: left; padding: 8px 0px 0px 10px;">最多上传9张，第一张为菜谱封面图，支持调整顺序。</span>

<div id="cover" class="clear">
</div>
<input type="hidden" id="upai_bucket" value="">
<input type="hidden" id="upai_policy" value="">
<input type="hidden" id="upai_signature" value="">

 
									<div class="left edit_message">
																			<textarea class="textArea J_input" name="message">请输入菜谱描述</textarea>
																		</div>
								</dd>
								
							</dl>
							<dl class="options">
								<dt>
									<span class="x">*</span>
									<span class="lable">基本参数：</span>
									
								</dt>
								<dd>
									
									<div class="multiselect select_0" style="width: 103px;"><a tar="level" href="javascript:;" check="false" class="multi_txt multi_0" title="难度">难度</a><ul class="" style=""><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="level" value="1">简单</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="level" value="2">普通</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="level" value="3">高级</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="level" value="4">神级</label></a></li></ul></div>
									
									<div class="multiselect select_1" style="width: 103px;"><a tar="cuisine" href="javascript:;" check="false" class="multi_txt multi_1" title="口味">口味</a><ul class="" style=""><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="1">微辣</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="2">中辣</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="3">超辣</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="4">麻辣</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="5">酸辣</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="6">酸甜</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="7">酸咸</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="8">咸鲜</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="9">咸甜</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="10">甜味</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="11">苦味</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="12">原味</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="13">清淡</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="14">五香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="15">鱼香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="16">葱香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="17">蒜香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="18">奶香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="19">酱香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="20">糟香</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="21">咖喱</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="22">孜然</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="23">果味</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="24">香草</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="25">怪味</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="cuisine" value="50">其它</label></a></li></ul></div>

									<div class="multiselect select_2" style="width: 103px;"><a tar="technics" href="javascript:;" check="false" class="multi_txt multi_2" title="工艺">工艺</a><ul class="" style=""><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="1">烧</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="2">炒</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="3">爆</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="4">焖</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="5">炖</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="6">蒸</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="7">煮</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="8">拌</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="9">烤</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="10">炸</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="11">烩</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="12">溜</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="13">氽</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="14">腌</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="15">卤</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="16">炝</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="17">煎</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="18">酥</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="19">扒</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="20">熏</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="21">煨</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="22">酱</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="23">烘焙</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="24">火锅</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="25">砂锅</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="26">拔丝</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="27">生鲜</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="28">调味</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="29">技巧</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="30">煲</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="31">烙</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="32">榨</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="technics" value="50">其他</label></a></li></ul></div>
									<div class="multiselect select_3" style="width: 103px;"><a tar="during" href="javascript:;" check="true" class="multi_txt multi_3 color_5b" title="十分钟">十分钟</a><ul class="" style=""><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="1">十分钟</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="2">廿分钟</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="3">半小时</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="4">三刻钟</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="5">一小时</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="6">数小时</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="7">一天</label></a></li><li><a href="javascript:;"><label class="J_radio"><input type="radio" name="during" value="8">数天</label></a></li></ul></div>
									<div class="multiselect select_4" style="width: 103px;"><input type="hidden" name="cookers" id="J_cookers" value=""><a tar="cookers" href="javascript:;" check="false" class="multi_txt multi_0" title="厨具">厨具</a><ul class="" style=""><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers1" type="checkbox" value="1">炒锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers2" type="checkbox" value="2">煮锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers3" type="checkbox" value="3">平底锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers4" type="checkbox" value="4">蒸锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers5" type="checkbox" value="5">不粘锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers6" type="checkbox" value="6">电烤箱</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers7" type="checkbox" value="7">食物调理机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers8" type="checkbox" value="8">砂锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers9" type="checkbox" value="9">汤锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers10" type="checkbox" value="10">高压锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers11" type="checkbox" value="11">电压力锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers12" type="checkbox" value="12">电饭煲</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers13" type="checkbox" value="13">焖烧锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers14" type="checkbox" value="14">微波炉</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers15" type="checkbox" value="15">搅拌机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers16" type="checkbox" value="16">豆浆机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers17" type="checkbox" value="17">电磁炉</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers18" type="checkbox" value="18">烤炉</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers19" type="checkbox" value="19">炖盅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers20" type="checkbox" value="20">瓦煲</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers21" type="checkbox" value="21">电子瓦煲</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers22" type="checkbox" value="22">面包机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers23" type="checkbox" value="23">吐司炉</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers24" type="checkbox" value="24">酸奶机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers25" type="checkbox" value="25">咖啡机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers26" type="checkbox" value="26">打蛋器</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers27" type="checkbox" value="27">调酒器</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers28" type="checkbox" value="28">果冻模</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers29" type="checkbox" value="29">奶泡机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers30" type="checkbox" value="30">模具锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers31" type="checkbox" value="31">电饼铛</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers32" type="checkbox" value="32">空气炸锅</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers33" type="checkbox" value="33">榨汁机</label></a></li><li><a href="javascript:;"><label class="J_checkbox"><input names="cookers50" type="checkbox" value="50">其它</label></a></li></ul></div>
								</dd>
							</dl>

							<dl class="ingredient">
								<dt>
									<span class="x">*</span>
									<span class="lable">食材明细：</span>
								</dt>
								<dd>
									<blockquote class="Left">
																		<div>
											<input type="text" name="food1" class="zhuliao btn37 J_input" value="主料 (如：猪肉)">
											<input type="text" name="food2" class="yongliang btn37 J_input" value="用量（如100g）">
										</div>
										<div>
											<input type="text" name="food1" class="zhuliao btn37 J_input" value="">
											<input type="text" name="food2" class="yongliang btn37 J_input" value="">
											<a href="javascript:;" class="delete J_delete"></a>
										</div>
										<div class="J_addDiv">
											<input type="text" name="food1" class="zhuliao btn37 J_input" value="">
											<input type="text" name="food2" class="yongliang btn37 J_input" value="">
											<a href="javascript:;" class="delete J_delete"></a>
										</div>
																		</blockquote>

									<blockquote class="Right">
																		<div>
											<input type="text" name="food3" class="zhuliao btn37 J_input" value="调料 (如：盐)">
											<input type="text" name="food4" class="yongliang btn37 J_input" value="用量（如10g）">
										</div>
										<div>
											<input type="text" name="food3" class="zhuliao btn37 J_input" value="">
											<input type="text" name="food4" class="yongliang btn37 J_input" value="">
											<a href="javascript:;" class="delete J_delete"></a>
										</div>
										<div class="J_addDiv">
											<input type="text" name="food3" class="zhuliao btn37 J_input" value="">
											<input type="text" name="food4" class="yongliang btn37 J_input" value="">
											<a href="javascript:;" class="delete J_delete"></a>
										</div>
																		</blockquote>
								</dd>
								
									
								
							</dl>
							<dl class="step">
								<dt>
									<span class="x">*</span>
									<span class="lable">做法步骤：</span>
									
								</dt>
								<dd>
								<div class="multi_step">批量上传</div>
								<div id="dragsort" data-listidx="0">
																<blockquote class="cp_block J_blockQ clear" style="cursor: move;">
									<div class="left addicon J_fileImag" id="J_upload_0">
										<input type="hidden" value="" name="step_img" class="J_imghidden" style="opacity: 0; display: inline-block;">
										<input type="file" name="file" id="userfile_0" value="" style="opacity: 0; display: inline-block;">
										<p class="p1">点击上传步骤图</p>
										<p class="p3">（可不填）</p>
										
									</div>
									<div class="left">
									<input type="hidden" value="" name="stepid">
										<textarea class="textArea J_input" name="note">请输入做法说明菜谱描述，最多输入1000字</textarea>
										<span class="J_step_num">1、</span>
										<a href="javascript:;" class="add J_addTextarea"></a>
										<a href="javascript:;" class="up J_upTextarea"></a>
										<a href="javascript:;" class="down J_downTextarea"></a>
										<a href="javascript:;" class="delete J_delTextarea"></a>
									</div>
									</blockquote>

									<blockquote class="cp_block J_blockQ clear" style="cursor: move;">
									<div class="left addicon J_fileImag" id="J_upload_1">
										<input type="hidden" value="" name="step_img" class="J_imghidden" style="opacity: 0; display: inline-block;">
										<input type="file" name="file" id="userfile_1" value="" style="opacity: 0; display: inline-block;">
										<p class="p1">点击上传步骤图</p>
										<p class="p3">（可不填）</p>
										
									</div>
									<div class="left">
									<input type="hidden" value="" name="stepid">
										<textarea class="textArea J_input" name="note">请输入做法说明菜谱描述，最多输入1000字</textarea>
										<span class="J_step_num">2、</span>
										<a href="javascript:;" class="add J_addTextarea"></a>
										<a href="javascript:;" class="up J_upTextarea"></a>
										<a href="javascript:;" class="down J_downTextarea"></a>
										<a href="javascript:;" class="delete J_delTextarea"></a>
									</div>
									</blockquote>

									<blockquote class="cp_block J_blockQ clear" style="cursor: move;">
									<div class="left addicon J_fileImag" id="J_upload_2">
										<input type="hidden" value="" name="step_img" class="J_imghidden" style="opacity: 0; display: inline-block;">
										<input type="file" name="file" id="userfile_2" value="" style="opacity: 0; display: inline-block;">
									    
										<p class="p1">点击上传步骤图</p>
										<p class="p3">（可不填）</p>
										
									</div>
									<div class="left">
									<input type="hidden" value="" name="stepid">
										<textarea class="textArea J_input" name="note">请输入做法说明菜谱描述，最多输入1000字</textarea>
										<span class="J_step_num">3、</span>
										<a href="javascript:;" class="add J_addTextarea"></a>
										<a href="javascript:;" class="up J_upTextarea"></a>
										<a href="javascript:;" class="down J_downTextarea"></a>
										<a href="javascript:;" class="delete J_delTextarea"></a>
									</div>
									</blockquote>
																</div>
								</dd>
							</dl>
							<dl class="tips">
								<dt>
									<span class="lable">小窍门：</span>
									
								</dt>
								<dd><textarea class="area543 color_5b" name="tips" id="tips"></textarea></dd>
							</dl>
							<dl class="selectcheckBox">
								<dt>&nbsp;
									
								</dt>
								<dd>
								<p><label><input type="checkbox" name="copyright" value="1" checked="checked">原创作品（您自己的原创作品）</label></p>
								<p><label><input type="checkbox" name="verycd" value="1">首发于美食天下（第一次发表本作品，图片上没有其他网站水印或网址）</label></p>


								<p>
									<label><input type="radio" name="eventid" value="" checked="checked">不参加活动</label><br>
																											<label><input type="radio" name="eventid" value="360">参加“信任之美：食物美好——说说你与食物的故事”</label><br>
																		<br>
									<!--<label><strong style="font-size:14px;">菜谱活动预告：</strong><a href="http://home.meishichina.com/minisite/bocui2016/" target="_blank" style="color:red;font-size:14px;">【柏翠第六届烘焙大赛邀请函】柏翠第六届烘焙大赛开赛啦！10月9日全面上线！赶快提前准备你的烘焙作品吧，万元现金大奖等你拿！（海选赛作品要求不限，只要是自己原创的美食烘焙作品均可）</strong></a></label>-->
									</p>




									<div class="submitdiv">
									
									<input type="hidden" id="recipeinfo_id" value="297131">

										<input class="postbtn" id="postbtn" type="button" value="发布菜谱">
										<input class="savebtn" id="savebtn" type="button" value="存为草稿">
										
								<span id="save_tip"></span>
									</div>
								
								</dd>
								
							</dl>

							
						 
					</div>


			<!-- 内容结束 -->
		
					



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
			版权所有 © 2004-2016 <a href="http://www.meishichina.com/" target="_blank" title="美食天下 - 让吃更美好！">美食天下</a> 保留所有权利 - 京公网安备 11010502031041号 / 京ICP证090244号 / 京ICP备10020153号
		</p>
	</div>
</div>


<!-- 引用全站js -->
<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/all.js"></script>
<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/common.js"></script>



		<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/jquery.dragsort.js"></script>
<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/msc-tools-multiselect.js"></script>
<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/msc-ui-select.js"></script>
<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/swfupload.js"></script>
<script type="text/javascript" src="./编辑上传菜谱-美食天下_files/new_recipeadd2.js"></script>
<script type="text/javascript">
jQuery(function($){
				
				jQuery("input[name='level'][value=0]").click();
				jQuery("input[name='cuisine'][value=0]").click();
				jQuery("input[name='technics'][value=]").click();
				jQuery("input[name='during'][value=1]").click();
								jQuery("input[name='copyright']").attr("checked",true);
												jQuery("input[name='verycd']").attr("checked",false);
					jQuery("#level,#cuisine,#technics,#during,#cookers,#J_level,#J_cuisine,#J_technics,#J_during").remove();

pm_data = getdata();
}); 
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
</script> 


</body></html>