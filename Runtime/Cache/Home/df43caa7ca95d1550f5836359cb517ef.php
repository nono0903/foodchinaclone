<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<style type="text/css">
  .b-page {
 background: #fff;
 box-shadow: 0px 1px 2px 0px #E2E2E2;
}
.page {
  width: 100%;
  padding: 30px 15px;
  background: #FFF;
  text-align: center;
  overflow: hidden;
}
.page .first,
.page .prev,
.page .current,
.page .num,
.page .current,
.page .next,
.page .end {
  padding: 8px 16px;
  margin: 0px 5px;
  display: inline-block;
  color: #008CBA;
  border: 1px solid #F2F2F2;
  border-radius: 5px;
}
.page .first:hover,
.page .prev:hover,
.page .current:hover,
.page .num:hover,
.page .current:hover,
.page .next:hover,
.page .end:hover {
  text-decoration: none;
  background: #F8F5F5;
}
.page .current {
  background-color: #008CBA;
  color: #FFF;
  border-radius: 5px;
  border: 1px solid #008CBA;
}
.page .current:hover {
  text-decoration: none;
  background: #008CBA;
}
.page .not-allowed {
  cursor: not-allowed;
}
</style>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>【菜谱】家常菜图片做法大全_精选孕妇简单营养健康菜谱_中西餐快餐饭店电子菜谱-美食天下</title>
<meta name="keywords" content="【菜谱】家常菜图片做法大全,精选孕妇简单营养健康菜谱,中西餐快餐饭店电子菜谱" />
<meta name="description" content="美食天下为您提供【菜谱】家常菜图片做法大全,精选孕妇简单营养健康菜谱,中西餐快餐饭店电子菜谱等菜谱信息,分享美食图片视频、尽享生活乐趣。" />
<meta name="renderer" content="webkit">
<meta http-equiv="mobile-agent" content="format=xhtml"; url=http://m.meishichina.com/recipe/">
<link rel="shortcut icon" href="http://static.meishichina.com/v6/img/lib/f.ico"/>
<link rel="apple-touch-icon" href="http://static.meishichina.com/v6/img/lib/wapico.png" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/recipe.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/page.css">
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
<a href="http://www.meishichina.com/" title="美食天下">美食天下</a>
</div>
<div class="logo_current left">
<h1><a href="http://home.meishichina.com/recipe.html" title="菜谱">菜谱</a></h1>
</div>
<div class="logo_search right">
<form id="form_search" action="http://home.meishichina.com/search/" method="post" target="_blank">
<div class="searchBox J_search"><a href="javascript:;" title="搜索" class="search_Btn J_searchBTN right" id="search">搜索</a><input type="text" id="q" class="search_Text J_searchTxt right gay" data-first="on">
</div>
</form>
</div>
<div class="logo_nav">
<a class=on href="<?php echo U('Home/Recipe/recipeIndex');?>">菜谱首页<i></i><b></b></a>
<a href="<?php echo U('Home/Recipe/recipecat');?>">分类<i></i><b></b></a>
<a href="<?php echo U('Home/Recipe/caidan');?>">菜单<i></i><b></b></a>
<a href="http://home.meishichina.com/show-top-type-recipe.html">排行<i></i><b></b></a>
<span style="float: left; height:18px; margin:23px 4px 0; border-right: 1px solid #ddd;"></span>
<a target="_blank" href="<?php echo U('Home/Sc/Index');?>" title="食材">食材</a>
<a target="_blank" href="http://www.meishichina.com/YuanLiao/gongxiao/" title="食疗食补">食疗食补</a>
</div>
</div>
<div class="nav_wrap2">
<ul>
<li><a href="http://home.meishichina.com/recipe.html" class="on">首页</a></li>
<li><a title="热菜" href="http://home.meishichina.com/recipe/recai/">热菜</a></li>
<li><a title="凉菜" href="http://home.meishichina.com/recipe/liangcai/">凉菜</a></li>
<li><a title="汤羹" href="http://home.meishichina.com/recipe/tanggeng/">汤羹</a></li>
<li><a title="主食" href="http://home.meishichina.com/recipe/zhushi/">主食</a></li>
<li><a title="小吃" href="http://home.meishichina.com/recipe/xiaochi/">小吃</a></li>
<li><a title="西餐" href="http://home.meishichina.com/recipe/xican/">西餐</a></li>
<li><a title="烘焙" href="http://home.meishichina.com/recipe/hongbei/">烘焙</a></li>
<li><a title="饮品" href="http://home.meishichina.com/recipe/yinpin/">饮品</a></li>
<li><a title="零食" href="http://home.meishichina.com/recipe/lingshi/">零食</a></li>
<li><a title="泡酱腌菜" href="http://home.meishichina.com/recipe/jiangpaoyancai/">泡酱腌菜</a></li>
<li><a title="自制食材" href="http://home.meishichina.com/recipe/zizhishicai/">自制食材</a></li>
<li><a title="最新菜谱" href="http://home.meishichina.com/recipe-list.html">最新菜谱</a></li>
<li id="navlist" class="right"><a class="navlist_a" href="javascript:void(0);">浏览全部菜谱<i></i><b></b></a></li>
</ul>
</div>
<div class="wrap">
<div class="w clear">
<div class="home_index_slider mt10">
<div id="home_index_slider">
<ul>
<li>
<a title="咕嘟咕嘟 最迷砂锅菜" href="http://home.meishichina.com/collect-2882566.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/collect/2015/01/09/c320_201501091420789603796.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">咕嘟咕嘟 最迷砂锅菜<br><span>38篇菜谱</span></p>
</a>
</li>
<li>
<a title="迷人烘焙---饼干" href="http://home.meishichina.com/collect-4970139.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/collect/2016/08/03/c320_201608031470201187741532464.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">迷人烘焙---饼干<br><span>21篇菜谱</span></p>
</a>
</li>
<li>
<a title="对抗雾霾菜谱" href="http://home.meishichina.com/collect-4738020.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/collect/2015/03/10/c320_201503101425960095873.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">对抗雾霾菜谱<br><span>67篇菜谱</span></p>
</a>
</li>
<li>
<a title="滋补好时节，补冬不如补霜降" href="http://home.meishichina.com/collect-5095941.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/collect/2016/10/18/c320_20161018147678044669313.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">滋补好时节，补冬不如补霜降<br><span>33篇菜谱</span></p>
</a>
</li>
<li>
<a title="煲汤" href="http://home.meishichina.com/collect-5097867.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/recipe/2015/02/06/c320_201502062bb7f635a52900aa.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">煲汤<br><span>67篇菜谱</span></p>
</a>
</li>
<li>
<a title="群英荟萃？萝卜开会！" href="http://home.meishichina.com/collect-5096013.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/collect/2016/10/18/c320_2016101814767825963998199430.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">群英荟萃？萝卜开会！<br><span>30篇菜谱</span></p>
</a>
</li>
<li>
<a title="素菜花式菜品攻略" href="http://home.meishichina.com/collect-5094136.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/recipe/2016/10/15/c320_20161015qjvote5ttrxh3unv.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">素菜花式菜品攻略<br><span>53篇菜谱</span></p>
</a>
</li>
<li>
<a title="酸汤菜：回味悠长，久久难忘" href="http://home.meishichina.com/collect-4894142.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/r/2012/08/14/c320_20120814235658151549352.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">酸汤菜：回味悠长，久久难忘<br><span>31篇菜谱</span></p>
</a>
</li>
<li>
<a title="“菌中之冠”－银耳" href="http://home.meishichina.com/collect-5096098.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/r/2012/07/26/c320_20120726224259413712470.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">“菌中之冠”－银耳<br><span>40篇菜谱</span></p>
</a>
</li>
<li>
<a title="布丁喵呜的食疗厨房" href="http://home.meishichina.com/collect-56118.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/collect/2016/10/18/c320_20161018147675459684513.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">布丁喵呜的食疗厨房<br><span>23篇菜谱</span></p>
</a>
</li>
<li>
<a title="花式菜样攻略" href="http://home.meishichina.com/collect-5088724.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/recipe/2016/10/10/c320_201610109srvo8fw2ize4xuu.png" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">花式菜样攻略<br><span>68篇菜谱</span></p>
</a>
</li>
<li>
<a title="栗子养生是个宝" href="http://home.meishichina.com/collect-5088845.html" target="_blank">
<i><img data-src="http://i3.meishichina.com/attachment/r/2014/04/07/c320_20140407092656810467282.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"></i>
<div class="os"></div>
<p class="line2">栗子养生是个宝<br><span>31篇菜谱</span></p>
</a>
</li>
</ul>
</div>
</div>
<div class="recipe_index_n10 mt20 clear jtl">
<a href="http://home.meishichina.com/show-top-type-recipe.html" target="_blank" title="一周最热">
<img data-src="http://static.meishichina.com/v6/img/zhen/r01.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
一周最热
</a>
<a href="http://home.meishichina.com/show-top-type-recipe-order-pop.html" target="_blank" title="人气菜肴">
<img data-src="http://static.meishichina.com/v6/img/zhen/r02.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
人气菜肴
</a>
<a href="http://home.meishichina.com/recipe/xiaji/" target="_blank" title="夏季食谱">
<img data-src="http://static.meishichina.com/v6/img/zhen/r03.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
夏季食谱
</a>
<a href="http://home.meishichina.com/recipe/gaoyanzhi/" target="_blank" title="高颜值">
<img data-src="http://static.meishichina.com/v6/img/zhen/r04.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
高颜值
</a>
<a href="http://home.meishichina.com/recipe/kuaishoucai/" target="_blank" title="快手菜">
<img data-src="http://static.meishichina.com/v6/img/zhen/r05.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
快手菜
</a>
<a href="http://home.meishichina.com/recipe/zaocan/" target="_blank" title="早餐">
<img data-src="http://static.meishichina.com/v6/img/zhen/r06.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
早餐
</a>
<a href="http://home.meishichina.com/recipe-menu.html" target="_blank" title="家常菜谱">
<img data-src="http://static.meishichina.com/v6/img/zhen/r07.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
家常菜谱
</a>
<a href="http://hongbei.meishichina.com/" target="_blank" title="烘焙大全">
<img data-src="http://static.meishichina.com/v6/img/zhen/r08.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
烘焙大全
</a>
<a href="http://mamapai.meishichina.com/" target="_blank" title="亲子专区">
<img data-src="http://static.meishichina.com/v6/img/zhen/r09.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
亲子专区
</a>
<a href="http://home.meishichina.com/recipe-list.html" target="_blank" title="所有菜谱">
<img data-src="http://static.meishichina.com/v6/img/zhen/r10.jpg" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif">
所有菜谱
</a>
</div>
<div id="recipeindex_info">
<div id="recipeindex_info_wrap">
<div class="ui_title">
<div class="ui_title_wrap clear">
<h3 class="on"><a href="<?php echo U('Home/Recipe/index');?>" page="2" data="0" order="hot">最新推荐</a></h3>
<h3><a href="javascript:void(0);" page="2" data="0" order="new">最新发布</a></h3>
<h3><a href="javascript:void(0);" page="2" data="102" order="tag">热菜</a></h3>
<h3><a href="javascript:void(0);" page="2" data="202" order="tag">凉菜</a></h3>
<h3><a href="javascript:void(0);" page="2" data="57" order="tag">汤羹</a></h3>
<h3><a href="javascript:void(0);" page="2" data="59" order="tag">主食</a></h3>
<h3><a href="javascript:void(0);" page="2" data="62" order="tag">小吃</a></h3>
<h3><a href="javascript:void(0);" page="2" data="160" order="tag">西餐</a></h3>
<h3><a href="javascript:void(0);" page="2" data="60" order="tag">烘焙</a></h3>
<h3><a href="javascript:void(0);" page="2" data="69" order="tag">自制食材</a></h3>
<a title="全部分类" class="right" href="http://home.meishichina.com/recipe-type.html">全部分类</a>
</div>
</div>
</div>
</div>
<div class="big4_list clear mt10" id="recipeindex_living">
<ul class="on"  ">

<?php if(is_array($newrecipe)): foreach($newrecipe as $key=>$new): ?><li>
<a title="<?php echo ($new['recipe_title']); ?>" href="#" target="_blank">
<i>
<img alt="<?php echo ($new['recipe_title']); ?>" class="imgLoad" src="/<?php echo ($new['thumb_img']); ?>" data-src="/<?php echo ($new['thumb_img']); ?>">
</i>
<p><?php echo ($new['recipe_title']); ?></p>
</a>
<a title="<?php echo ($new['user_name']); ?>" href="#" target="_blank" class="u"><?php echo ($new['user_name']); ?></a>
</li><?php endforeach; endif; ?>
</ul>
</div>
</div>
<!-- 分页显示 -->
<?php echo ($page); ?>
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

<script type="text/javascript" src="http://static.meishichina.com/v6/js/lib/all.js?v=20161025"></script>
<script type="text/javascript" src="http://static.meishichina.com/v6/js/lib/get_num.js"></script>
<script type="text/javascript" src="http://static.meishichina.com/v6/js/app/newrecipe/recipe_navlist.js?v=1"></script>
<script type="text/javascript">	
msc.goTop.init();
msc.user.init();
$("img.imgLoad").imgLoad();
//搜索
$(".search_Text").click(function(){var f=$(this).attr("data-first");if(f=="on"){$(this).val("");$(this).attr("data-first","off")}$(this).removeClass("gay")});$("#search").click(function(){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}$("#form_search").submit()});$("#q").keydown(function(event){if(event.keyCode==13){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}}});
</script>
<script src="http://static.meishichina.com/res/web/scripts/slider2.js" type="text/javascript"></script>
<script type="text/javascript">
var sudoSlider = $("#home_index_slider").sudoSlider({speed:600,slideCount:3,movecount:3,prevHtml:'<a class="prevBtn" href="javascript:void(0);"><i>&nbsp;</i></a>',nextHtml:'<a class="nextBtn" href="javascript:void(0);"><i>&nbsp;</i></a>',continuous: true});


$(window).scroll(function() {
		var omng = $('#recipeindex_info_wrap').offset();
		var jtl = $('.recipe_index_n10').offset();



		if (omng.top < $(document).scrollTop() + 40) {
		$('#recipeindex_info_wrap').css({
position: 'fixed',
top:40,
'z-index':1111,
left:omng.left
})
		} else if (omng.top < jtl.top + 75  ) {
		$("#recipeindex_info_wrap").css({
position: 'static' 
})
		}

		});

$("#recipeindex_info_wrap a").click(function(){
		if($(this).parent().hasClass('on'))
		return false;
		else{
		$("#recipeindex_info_wrap h3").removeClass('on');
		$(this).parent().addClass('on');
		$("#recipeindex_living ul").removeClass('on').hide();
		$("#recipeindex_living ul:eq("+$(this).parent().index()+")").fadeIn().addClass("on");
		}
		});

$("#recipeindex_living_loading a").click(function(){
		if($(this).hasClass('on')||$(this).hasClass('on2'))
		return false;
		else{
		$(this).addClass("on");

		var classid = $("#recipeindex_info_wrap h3.on a").attr("data"),
		orderby = $("#recipeindex_info_wrap h3.on a").attr("order"),
		page = $("#recipeindex_info_wrap h3.on a").attr("page");

		$.get('/ajax/ajax.php?ac=recipe&op=getMoreDiffStateRecipeList', {
classid:classid,
orderby:orderby,
page:page
},
function(d) {
var i,html='';
if (d.error == 0) {
for(i=0;i<d.data.length;i++)
html+='<li class="feed"><a title="'+d.data[i]["title"]+'" href="http://home.meishichina.com/recipe-'+d.data[i]["id"]+'.html" target="_blank"><i><img alt="'+d.data[i]["title"]+'" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="'+d.data[i]["fcover"]+'"></i><p>'+d.data[i]["title"]+'</p></a><a title="'+d.data[i]["username"]+'" href="http://home.meishichina.com/space-'+d.data[i]["uid"]+'.html" target="_blank" class="u">'+d.data[i]["username"]+'</a></li>';

$("#recipeindex_living ul.on").append(html);
$("#recipeindex_living ul li.feed").fadeIn();
$("#recipeindex_living ul li.feed img.imgLoad").imgLoad();
$("#recipeindex_info_wrap h3.on a").attr("page",parseInt(page)+1);
$("#recipeindex_living_loading a").removeClass("on");
}else if (d.error == -2) {
$("#recipeindex_living_loading a").html("没有了~").removeClass("on").addClass("on2");
}
else{
msc.ui.dialog.error("发生异常，请重试");
$("#recipeindex_living_loading a").removeClass("on");
		}
	},
	"json");


}
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
 </body>
</html>