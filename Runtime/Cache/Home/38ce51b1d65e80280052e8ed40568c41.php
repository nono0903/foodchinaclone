<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0044)http://home.meishichina.com/recipe-type.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>最新菜品口味大全_特色高档菜谱制作工艺_特殊人群食疗菜谱_八大菜系烹饪难度时间-美食天下</title>
<meta name="keywords" content="最新菜品口味大全,特色高档菜谱制作工艺,特殊人群食疗菜谱,八大菜系烹饪难度时间">
<meta name="description" content="美食天下为您提供最新菜品口味大全,特色高档菜谱制作工艺,特殊人群食疗菜谱,八大菜系烹饪难度时间等菜谱信息,分享美食图片视频、尽享生活乐趣。">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="http://static.meishichina.com/v6/img/lib/f.ico">
<link rel="apple-touch-icon" href="http://static.meishichina.com/v6/img/lib/wapico.png">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/recipe2.css">
<script src="/Public/Home/js/push.js"></script><script src="/Public/Home/js/hm.js"></script><script type="text/javascript" async="" src="/Public/Home/js/ga.js"></script></head>
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
<a href="<?php echo U('Home/Recipe/recipeIndex');?>">菜谱首页<i></i><b></b></a>
<a class="on" href="<?php echo U('Home/Recipe/recipeIndex');?>">分类<i></i><b></b></a>
<a href="<?php echo U('Home/Recipe/caidan');?>">菜单<i></i><b></b></a>
<a href="http://home.meishichina.com/show-top-type-recipe.html">排行<i></i><b></b></a>
<span style="float: left; height:18px; margin:23px 4px 0; border-right: 1px solid #ddd;"></span>
<a target="_blank" href="<?php echo U('Home/Sc/Index');?>" title="食材">食材</a>
<a target="_blank" href="http://www.meishichina.com/YuanLiao/gongxiao/" title="食疗食补">食疗食补</a>
</div>
</div>
<div class="nav_wrap2">
<ul>
<li><a href="#" class="on">全部</a></li>
<?php if(is_array($nav)): foreach($nav as $key=>$rnav): ?><li><a title="#" href="#"><?php echo ($rnav['c_name']); ?></a></li><?php endforeach; endif; ?>
<li id="navlist" class="right"><a class="navlist_a" href="javascript:void(0);">浏览全部菜谱<i></i><b></b></a><div id="navlist_sub"><div><h5>主食/小吃/饮品</h5><ul><li><a title="米饭" href="http://home.meishichina.com/recipe/mifan/" target="_blank">米饭</a></li><li><a title="炒饭" href="http://home.meishichina.com/recipe/chaofan/" target="_blank">炒饭</a></li><li><a title="包子" href="http://home.meishichina.com/recipe/baozi/" target="_blank">包子</a></li><li><a title="饺子" href="http://home.meishichina.com/recipe/jiaozi/" target="_blank">饺子</a></li><li><a title="馒头花卷" href="http://home.meishichina.com/recipe/mantou/" target="_blank">馒头花卷</a></li><li><a title="面条" href="http://home.meishichina.com/recipe/miantiao/" target="_blank">面条</a></li><li><a title="饼" href="http://home.meishichina.com/recipe/bing/" target="_blank">饼</a></li><li><a title="粥" href="http://home.meishichina.com/recipe/zhou/" target="_blank">粥</a></li><li><a title="冰品" href="http://home.meishichina.com/recipe/bingpin/" target="_blank">冰品</a></li></ul></div><div><h5>场景/饮食方式</h5><ul><li><a title="早餐" href="http://home.meishichina.com/recipe/zaocan/" target="_blank">早餐</a></li><li><a title="快手菜" href="http://home.meishichina.com/recipe/kuaishoucai/" target="_blank">快手菜</a></li><li><a title="下午茶" href="http://home.meishichina.com/recipe/xiawucha/" target="_blank">下午茶</a></li><li><a title="中式宴请" href="http://home.meishichina.com/recipe/zhongshiyanqing/" target="_blank">中式宴请</a></li><li><a title="西式宴请" href="http://home.meishichina.com/recipe/xishiyanqing/" target="_blank">西式宴请</a></li><li><a title="夏季食谱" href="http://home.meishichina.com/recipe/xiaji/" target="_blank">夏季食谱</a></li><li><a title="高颜值" href="http://home.meishichina.com/recipe/gaoyanzhi/" target="_blank">高颜值</a></li><li><a title="宿舍时代" href="http://home.meishichina.com/recipe/susheshidai/" target="_blank">宿舍时代</a></li><li><a title="二人世界" href="http://home.meishichina.com/recipe/erren/" target="_blank">二人世界</a></li><li><a title="儿童" href="http://home.meishichina.com/recipe/ertong/" target="_blank">儿童</a></li><li><a title="孕妇" href="http://home.meishichina.com/recipe/yunfu/" target="_blank">孕妇</a></li><li><a title="产妇" href="http://home.meishichina.com/recipe/chanfu/" target="_blank">产妇</a></li></ul></div><div><h5>中西菜系</h5><ul><li><a title="川菜" href="http://home.meishichina.com/recipe/chuancai/" target="_blank">川菜</a></li><li><a title="鲁菜" href="http://home.meishichina.com/recipe/lucai/" target="_blank">鲁菜</a></li><li><a title="闽菜" href="http://home.meishichina.com/recipe/mincai/" target="_blank">闽菜</a></li><li><a title="粤菜" href="http://home.meishichina.com/recipe/yuecai/" target="_blank">粤菜</a></li><li><a title="湘菜" href="http://home.meishichina.com/recipe/xiangcai/" target="_blank">湘菜</a></li><li><a title="日料" href="http://home.meishichina.com/recipe/ribencai/" target="_blank">日料</a></li><li><a title="韩餐" href="http://home.meishichina.com/recipe/hanguocai/" target="_blank">韩餐</a></li><li><a title="泰国菜" href="http://home.meishichina.com/recipe/taiguocai/" target="_blank">泰国菜</a></li><li><a title="法国菜" href="http://home.meishichina.com/recipe/faguocai/" target="_blank">法国菜</a></li></ul></div><div><h5>烘焙</h5><ul><li><a title="面包" href="http://home.meishichina.com/recipe/mianbao/" target="_blank">面包</a></li><li><a title="蛋糕" href="http://home.meishichina.com/recipe/dangao/" target="_blank">蛋糕</a></li><li><a title="派塔" href="http://home.meishichina.com/recipe/paita/" target="_blank">派塔</a></li><li><a title="吐司" href="http://home.meishichina.com/recipe/tusi/" target="_blank">吐司</a></li><li><a title="批萨" href="http://home.meishichina.com/recipe/pisa/" target="_blank">批萨</a></li><li><a title="慕斯" href="http://home.meishichina.com/recipe/musi/" target="_blank">慕斯</a></li><li><a title="饼干" href="http://home.meishichina.com/recipe/binggan/" target="_blank">饼干</a></li><li><a title="曲奇" href="http://home.meishichina.com/recipe/quqi/" target="_blank">曲奇</a></li><li><a title="布丁" href="http://home.meishichina.com/recipe/buding/" target="_blank">布丁</a></li></ul></div><div><h5>常见菜式</h5><ul><li><a title="热菜" href="http://home.meishichina.com/recipe/recai/" target="_blank">热菜</a></li><li><a title="凉菜" href="http://home.meishichina.com/recipe/liangcai/" target="_blank">凉菜</a></li><li><a title="主食" href="http://home.meishichina.com/recipe/zhushi/" target="_blank">主食</a></li><li><a title="小吃" href="http://home.meishichina.com/recipe/xiaochi/" target="_blank">小吃</a></li><li><a title="汤羹" href="http://home.meishichina.com/recipe/tanggeng/" target="_blank">汤羹</a></li><li><a title="烘焙" href="http://home.meishichina.com/recipe/hongbei/" target="_blank">烘焙</a></li><li><a title="饮品" href="http://home.meishichina.com/recipe/yinpin/" target="_blank">饮品</a></li><li><a title="家常菜" href="http://home.meishichina.com/recipe/jiachang/" target="_blank">家常菜</a></li><li><a title="开胃菜" href="http://home.meishichina.com/recipe/kaiweicai/" target="_blank">开胃菜</a></li></ul></div><div><h5>所有菜谱</h5><ul><li><a title="最新发布" href="http://home.meishichina.com/recipe-list.html" target="_blank">最新发布</a></li><li><a title="最新推荐" href="http://home.meishichina.com/recipe-list-view-elite.html" target="_blank">最新推荐</a></li><li><a title="最热菜谱" href="http://home.meishichina.com/recipe-list-view-collection.html" target="_blank">最热菜谱</a></li><li><a title="家常菜谱" href="http://home.meishichina.com/recipe-menu.html" target="_blank" style="color:#ff6767;">家常菜谱</a></li></ul><h5>食疗食补</h5><ul><li><a title="补钙" href="http://www.meishichina.com/YuanLiao/gongxiao/bugai/" target="_blank">补钙</a></li><li><a title="贫血" href="http://www.meishichina.com/YuanLiao/gongxiao/pinxue/" target="_blank">贫血</a></li><li><a title="免疫力" href="http://www.meishichina.com/YuanLiao/gongxiao/tigaomianyili/" target="_blank">免疫力</a></li><li><a title="养胃" href="http://www.meishichina.com/YuanLiao/gongxiao/yangwei/" target="_blank">养胃</a></li><li><a title="对抗雾霾" href="http://www.meishichina.com/YuanLiao/gongxiao/duikangwumai/" target="_blank">对抗雾霾</a></li><li><a title="润肺止咳" href="http://www.meishichina.com/YuanLiao/gongxiao/runfeizhike/" target="_blank">润肺止咳</a></li><li><a title="滋阴" href="http://www.meishichina.com/YuanLiao/gongxiao/ziyin/" target="_blank">滋阴</a></li><li><a title="壮阳" href="http://www.meishichina.com/YuanLiao/gongxiao/zhuangyang/" target="_blank">壮阳</a></li><li><a title="失眠" href="http://www.meishichina.com/YuanLiao/gongxiao/shimian/" target="_blank">失眠</a></li><li><a title="养颜" href="http://www.meishichina.com/YuanLiao/gongxiao/yangyan/" target="_blank">养颜</a></li><li><a title="排毒" href="http://www.meishichina.com/YuanLiao/gongxiao/paidu/" target="_blank">排毒</a></li><li><a title="便秘" href="http://www.meishichina.com/YuanLiao/gongxiao/bianmi/" target="_blank">便秘</a></li><li><a title="瘦身" href="http://www.meishichina.com/YuanLiao/gongxiao/shoushen/" target="_blank">瘦身</a></li><li><a title="丰胸" href="http://www.meishichina.com/YuanLiao/gongxiao/fengxiong/" target="_blank">丰胸</a></li><li><a title="痛经" href="http://www.meishichina.com/YuanLiao/gongxiao/tongjing/" target="_blank">痛经</a></li><li><a title="月经不调" href="http://www.meishichina.com/YuanLiao/gongxiao/yuejingbutiao/" target="_blank">月经不调</a></li></ul></div></div></li>
</ul>
</div>
<div class="wrap">
<div class="w clear">
<div class="category_box mt20">

<?php if(is_array($cat)): foreach($cat as $key=>$ca): ?><div class="category_sub clear">
		<h3><?php echo ($ca['c_name']); ?></h3>
		<ul>
			<?php if(is_array($ca['fl'])): foreach($ca['fl'] as $key=>$v): ?><li><a title="" href="#" target="_blank"><?php echo ($v['c_name']); ?></a></li><?php endforeach; endif; ?>
		</ul>
	</div><?php endforeach; endif; ?>


</div>
</div>
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

<script type="text/javascript" src="/Public/Home/js/all.js"></script>
<script type="text/javascript" src="/Public/Home/js/get_num.js"></script>
<script type="text/javascript" src="/Public/Home/js/recipe_navlist.js"></script>
<script type="text/javascript">	
msc.goTop.init();
msc.user.init();
$("img.imgLoad").imgLoad();
//搜索
$(".search_Text").click(function(){var f=$(this).attr("data-first");if(f=="on"){$(this).val("");$(this).attr("data-first","off")}$(this).removeClass("gay")});$("#search").click(function(){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}$("#form_search").submit()});$("#q").keydown(function(event){if(event.keyCode==13){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}}});
</script><div class="fixed-footer" style="left: 1179.5px; right: auto; bottom: 10px;"><a href="javascript:;" title="点击返回页面顶部" onclick="window.scrollTo(0,0);" class="fixed-footer-go"></a></div>
<script type="text/javascript">

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
</body></html>