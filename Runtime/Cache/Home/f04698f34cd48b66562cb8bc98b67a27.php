<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0047)http://member.meishichina.com/mycenter/pai-add/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>上传话题-美食天下</title>
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
		<a href="#">日志</a>
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
					当前位置：<a href="<?php echo U('Home/user/usercenter');?>">会员中心</a> &gt; <a href="<?php echo U('Home/huati/index');?>">话题 </a> &gt; <span>发布话题</span>
				</div>

				<div class="ui_title mt20">
					<div class="ui_title_wrap">
						<a href="#" class="on">发布话题</a>
					</div>
					
				</div>

<!-- 内容开始 -->
      <div class="content">
        <h3 style="display:none">爱生活，享话题，美好生活等待你的发现。更可 <a target="_blank" href="" style="color:#ba2020">下载美食天下客户端</a> 随时随地发话题。</h3>
        <form action="" enctype="multipart/form-data" method="post">
		  <dl class="classid">
            <dt> <span class="x">*</span> <span class="lable">分类：</span> </dt>
            <dd style="padding:8px 0 0;">
			<label><input type="radio" name="classify" value="1" checked="">&nbsp;美食随手拍</label>&nbsp;&nbsp;
			<label><input type="radio" name="classify" value="2">&nbsp;烘焙圈</label>&nbsp;&nbsp;
			<label><input type="radio" name="classify" value="3">&nbsp;妈妈派</label>&nbsp;&nbsp;
              <label><input type="radio" name="classify" value="4">&nbsp;饮食健康</label>&nbsp;&nbsp;
			  <label><input type="radio" name="classify" value="5">&nbsp;厨艺交流</label>&nbsp;&nbsp;
			  <label><input type="radio" name="classify" value="6">&nbsp;最美之物</label>&nbsp;&nbsp;
			  <label><input type="radio" name="classify" value="7">&nbsp;美好时光</label>&nbsp;&nbsp;
			  <label><input type="radio" name="classify" value="99">&nbsp;帮助与反馈</label>
            </dd>
          </dl>
          <dl class="uploadImagel">
            <dt> <span class="x">*</span> <span class="lable">话题图片：</span> </dt>
            <dd>
			<div style="padding:6px 0px;color:#ba2020;">最多上传9张，第一张为封面图</div>
			<ul id="fileup">
				<li>
              		<input type="file" name="pic[]" id=""class="btn37 color_5b">
				</li>
			</ul>
				<img src="/Public/Home/images/jia.png" alt="" class="jia">
				<img src="/Public/Home/images/ios.jpg" alt="" id="jian">
              
             
            </dd>
          </dl>
		  <dl class="cp_title">
            <dt><span class="lable">话题标题：</span> </dt>
            <dd>
				<input name="title" value="" style="width:546px" class="btn37 color_5b" type="text">
            </dd>
          </dl>

		  <dl class="cp_name">
            <dt> <span class="x">*</span> <span class="lable">话题描述：</span> </dt>
            <dd>
              <textarea class="textAreaMain J_input J_swfDisc" name="message" placeholder="写下你的想法吧!"></textarea>
            </dd>
          </dl>

          <!--<dl class="addElem" >
            <dt> <span class="lable">添加标签：</span> </dt>
            <dd>
              <div class="addElem_box J_addElem_box"> <span class="li1" value="15">烘焙</span> <span class="li1" value="5">一人食</span> <span class="li1" value="6">家庭聚会</span> <span class="li1" value="8">二人世界</span> <span class="li1" value="23">小吃</span> <span class="li1" value="13">创意菜</span> <span class="li1" value="9">想吃</span> <span class="li1" value="7">儿童餐</span> <span class="li1" value="22">朋友聚会</span> <span class="li1" value="19">西餐</span> <span class="li1" value="12">川菜</span> <span class="li1" value="20">粤菜</span> <span class="li1" value="17">日料</span> <span class="li1" value="18">烧烤</span> <span class="li1" value="14">韩料</span> <span class="li1" value="11">冰淇凌</span> <span class="li1" value="16">巧克力</span> <span class="li1" value="21">自助餐 </span> <span class="li1" value="10">想买</span> </div>
              <a href="javascript:;" class="more" data-statu="0" style="display:none">更多</a>
              <div class="checkBox"> <span class="gay">已选标签：</span>
                <p class="J_eleBox"> </p>
              </div>
              <input type="hidden" class="J_addElem_box_value" name="pai_tips" value="">
            </dd>
          </dl>
		  -->
		  <dl class="selectcheckBox">                                                                                                                                                       
			  <dt>验证码：</dt>
			  <dd>
			  		<input type="text" name="yzm" id="yzm"><img src="<?php echo U('yzm');?>" alt="点击刷新"id="scyzm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ref"style = "color:red"></span>
		 	  </dd>
		  </dl>
		  	      <dl>
			<dt>参加活动：</dt>
			<dd style="padding:8px 0 0;"><label><input type="radio" name="eventid" value="0" checked="">&nbsp;不参加</label></dd>
									<dt>　</dt>
			<dd style="padding:8px 0 0;"><label><input type="radio" name="eventid" value="354">&nbsp;参加“魔法立方料理，造型大赛”</label></dd>
			
		  </dl>	  
		  		  <!--<label><strong style="font-size:14px;">菜谱活动预告：</strong><a href="http://home.meishichina.com/minisite/bocui2016/" target="_blank" style="color:red;font-size:14px;">【柏翠第六届烘焙大赛邀请函】柏翠第六届烘焙大赛开赛啦！10月9日全面上线！赶快提前准备你的烘焙作品吧，万元现金大奖等你拿！（海选赛作品要求不限，只要是自己原创的美食烘焙作品均可）</strong></a></label>-->

	  <dl class="selectcheckBox">
		  <dt>&nbsp; </dt>
		  <dd>

		  <div class="submitdiv">

			  
                <input class="postbtn" id="postsub" name="submit" type="submit" value="发布话题">
              </div>
            </dd>
          </dl>
        </form>
      </div>
      <!-- 内容结束 -->
</body>

					
<script src="/Public/Home/js/jquery.js"></script>
<script>
	$('.jia').click(function(){
		$('#fileup').append('<li><input type="file" name="pic[]" class="btn37 color_5b"></li>');	
	});

	$('#jian').click(function(){
		$('#fileup li:last-of-type').remove();
	});



// 点击刷新验证图片
	$('#scyzm').click(function(){
		$('#scyzm')[0].src = '<?php echo U('yzm');?>'
	});

// 自动验证验证码
	$('#yzm').blur(function(){
		var val = this.value;
		
		 $.get('<?php echo U('checkyzm');?>',{
		 	'yzm': val
		 },function(data){

		 	if(data==1){
		 		$('#ref').html('<img src="/Public/Home/images/succ.gif" alt="通过验证">');
		 		jqyz='ok';

		 	}else{
		 		$('#ref').html('验证码错误');
		 		jqyz='error';
		 	}
		 },false);
	});

	$('form').submit(function(){
		if(jqyz=='error'){
			alert('验证码错误!');
			return false;
		}
	});
	

</script>


			</div>
			<!-- 右侧结束 -->

		</div>
	</div>

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

</html>