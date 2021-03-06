<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美食话题_美食论坛_美食社区-美食天下</title>
<meta name="keywords" content="话题,美食话题, 美食论坛,美食社区" />
<meta name="description" content="美食天下话题社区是中文最大的美食分享、美食话题讨论的权威社区，在这里您可以随时随地晒美食，随时随地与美食达人互动交流。" />
<meta name="renderer" content="webkit">
<meta http-equiv="mobile-agent" content="format=xhtml; url=http://m.meishichina.com/pai/">
<link rel="apple-touch-icon" href="/Public/Home/images/wapico.png" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/pai2.css?a=2016-08-29" />
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
<h1><a href="#" title="社区">社区</a></h1>
</div>
<div class="logo_search right">
<form id="form_search" action="#search/" method="post" target="_blank">
<div class="searchBox J_search"><a href="javascript:;" title="搜索" class="search_Btn J_searchBTN right" id="search">搜索</a><input type="text" id="q" class="search_Text J_searchTxt right gay" data-first="on">
</div>
</form>
</div>
<div class="logo_nav">
<a href="#" title="社区广场">社区广场<i></i><b></b></a>
<a class="on" href="#pai.html" title="话题">话题<i></i><b></b></a>
<a href="#blog/" title="日志">日志<i></i><b></b></a>
<a href="#event/" title="活动">活动<i></i><b></b></a>
</div>
</div>
<div class="nav_wrap2">
<ul>
<li><a class="on" href="#pai.html" title="全部">全部</a></li>
<li><a href="#pai-meishi.html" title="美食随手拍">美食随手拍</a></li>
<li><a href="#pai-hongbei.html" title="烘焙圈">烘焙圈</a></li>
<li><a href="#pai-mama.html" title="妈妈派">妈妈派</a></li>
<li><a href="#pai-yinshi.html" title="饮食健康">饮食健康</a></li>
<li><a href="#pai-chuyi.html" title="厨艺交流">厨艺交流</a></li>
<li><a href="#pai-zuimei.html" title="最美之物">最美之物</a></li>
<li><a href="#pai-shiguang.html" title="美好时光">美好时光</a></li>
<li><a href="#pai-help.html" title="帮助与反馈">帮助与反馈</a></li>
</ul>
</div>
<div class="w mt10 clear">
<iframe width="100%" height="90" frameborder="0" scrolling="no" src="/Public/Home/images/9906.jpg"></iframe>
</div>
<div class="wrap">
<div class="w clear">
<div class="space_left">
<div class="ui_title">
<div class="ui_title_wrap clear ">
<h2 class="on">
话题</h2>
<a class="right " href="#pai-elite.html" rel="nofollow">精华</a>
<a class="right " href="#pai-hot.html" rel="nofollow">热门</a>
<a class="right " href="#pai-new.html">最新</a>
<a class="right on" href="#pai.html">全部</a>
</div>
</div>
<div class="pin_list clear" id="J_list">
<ul>

<?php if(is_array($res)): foreach($res as $key=>$ht): ?><li>
<div class="u">
<a href="#" target="_blank" title="<?php echo ($ht['title']); ?>"><img width="40" height="40" class="imgLoad" src="/Public/Home/images/yhimg.jpg" ></a>
<div>
<a href="<?php echo u('huatione',['id'=>$ht['htid']]);?>" class="t" target="_blank" title="<?php echo ($ht['title']); ?>"><?php echo ($ht['title']); ?></a>
<span><?php echo (date("Y/m/d H:i:s",$ht['pubtime'])); ?></span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="<?php echo u('huatione',['id'=>$ht['htid']]);?>" target="_blank"><?php echo ($ht['message']); ?></a></div>
<a class="clear" href="" target="_blank">
<?php if(is_array($ht['thumb'])): foreach($ht['thumb'] as $key=>$img): ?><img class="imgLoad" src="<?php echo ($img['thumb_img']); ?>" ><?php endforeach; endif; ?>
</a>
<div data-id="724839" class="f"></div>
<div class="num"><span></span></div>
</div>
</li><?php endforeach; endif; ?>

<li>
<div class="u">
<a href="#space-9138744.html" target="_blank" title="紫嫣秀儿"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/13/87/44_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9138744.html" class="t" target="_blank" title="紫嫣秀儿">紫嫣秀儿</a>
<span>36秒前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<i>精</i><a href="#pai-724625.html" target="_blank"><strong>肉松面包</strong><br>#ACA魔法立方料理大赛，我的立方料理，造型独特更立体#
透......</a></div>
<a class="clear" href="#pai-724625.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/2016110207121016.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102071215937.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/2016110207122312.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102071232926.jpg@!c180">
</a>
<div data-id="724625" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-9138744.html" target="_blank" title="紫嫣秀儿"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/13/87/44_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9138744.html" class="t" target="_blank" title="紫嫣秀儿">紫嫣秀儿</a>
<span>4分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724340.html" target="_blank"><strong>暖餐</strong><br>继续暖餐，手抓饼夹鱼酱，黑米八宝粥，卤鸡蛋，卤鸡胗，苹果，牛......</a></div>
<a class="clear" href="#pai-724340.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/01/20161101073556942.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/01/20161101073600389.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/01/20161101073605635.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/01/20161101073608877.jpg@!c180">
</a>
<div data-id="724340" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-9722792.html" target="_blank" title="爱漂亮"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/72/27/92_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9722792.html" class="t" target="_blank" title="爱漂亮">爱漂亮</a>
<span>4分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724778.html" target="_blank">猜猜是啥</a></div>
<a class="clear" href="#pai-724778.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102151639333.jpg@!c180">
</a>
<div data-id="724778" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-9138744.html" target="_blank" title="紫嫣秀儿"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/13/87/44_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9138744.html" class="t" target="_blank" title="紫嫣秀儿">紫嫣秀儿</a>
<span>4分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724061.html" target="_blank"><strong>冷了</strong><br>天冷了来点热乎乎的，贴秋膘了，这鬼天气上周还是短袖这周立马进......</a></div>
<a class="clear" href="#pai-724061.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031074544109.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031074549242.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031074553146.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031074557974.JPG@!c180">
<b>5</b></a>
<div data-id="724061" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-7028172.html" target="_blank" title="爱笑的女人"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/007/02/81/72_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-7028172.html" class="t" target="_blank" title="爱笑的女人">爱笑的女人</a>
<span>4分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724808.html" target="_blank">今天太高兴啦，一不小心做了四个菜，糯小米粉蒸羊肉，海鲜菇煮肉丝汤，米豆腐，炒白菜。吃完饭收拾好厨房就去学校，下......</a></div>
<a class="clear" href="#pai-724808.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102173251909.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102173254370.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102173256614.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102173300868.jpg@!c180">
<b>5</b></a>
<div data-id="724808" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-7432474.html" target="_blank" title="吴家出品"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/007/43/24/74_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-7432474.html" class="t" target="_blank" title="吴家出品">吴家出品</a>
<span>4分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724842.html" target="_blank">三菜一汤，第一次煮豆瓣酱茄子，味道还好</a></div>
<a class="clear" href="#pai-724842.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102185041790.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/2016110218504495.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102185048407.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/2016110218505292.jpg@!c180">
</a>
<div data-id="724842" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-9500419.html" target="_blank" title="zhang墩儿"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/50/04/19_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9500419.html" class="t" target="_blank" title="zhang墩儿">zhang墩儿</a>
<span>6分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724246.html" target="_blank">今天生日，老公做的牛排，我们是纯正的东北人，家里从来没有做过西餐，老公特意在网上搜的做法，下班后又去买的刀叉和......</a></div>
<a class="clear" href="#pai-724246.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031194535145.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031194541837.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/10/31/20161031194545826.jpg@!c180">
</a>
<div data-id="724246" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-9764830.html" target="_blank" title="龍龍家的吃货"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="#/u2/res/noavatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9764830.html" class="t" target="_blank" title="龍龍家的吃货">龍龍家的吃货</a>
<span>6分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724825.html" target="_blank"><strong>晚餐</strong><br>臭宝和她爸的晚餐，俺减肥不敢吃，还有下午做的山楂糕</a></div>
<a class="clear" href="#pai-724825.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102182348971.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102182354174.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102182358230.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102182403234.jpg@!c180">
</a>
<div data-id="724825" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
<li>
<div class="u">
<a href="#space-9215106.html" target="_blank" title="元晨妈妈"><img width="40" height="40" class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/21/51/06_avatar_middle.jpg?v=20161102"></a>
<div>
<a href="#space-9215106.html" class="t" target="_blank" title="元晨妈妈">元晨妈妈</a>
<span>6分钟前</span>
</div>
</div>
<div class="c clear">
<div class="pp">
<a href="#pai-724841.html" target="_blank">小小喜头鱼,用盐,水面粉,香葱末腌好,油炸了吃,焦香美味!</a></div>
<a class="clear" href="#pai-724841.html" target="_blank">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102184833255.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102184837617.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102184842209.jpg@!c180">
<img class="imgLoad" src="#/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102184847540.jpg@!c180">
</a>
<div data-id="724841" class="f"></div>
<div class="num"><span></span></div>
</div>
</li>
</ul>
</div>
<div class="ui-page mt20">
<div class="ui-page-inner"><a class='now_page'>1</a>
<a href="#pai-index-page-2.html">2</a>
<a href="#pai-index-page-3.html">3</a>
<a href="#pai-index-page-4.html">4</a>
<a href="#pai-index-page-5.html">5</a>
<span>...</span>
<a href="#pai-index-page-2.html">下一页</a>
</div>
</div>
</div>
<div class="space_right">
<a class="r_pai-add" target="_blank" href="<?php echo U('huatiadd');?>">发布话题</a>
<div class="mt20">
<a title="美食天下客户端" href="#/Mobile/" target="_blank">
<script>
document.write('<img width="1" height="1" src="#/v6/img/blank.gif" data-src="#/v6/img/center/r'+Math.floor(Math.random()*5)+'.jpg" class="imgLoad">')
</script>
</a>
</div>
</div>
</div>
</div>
<div class="w" style="padding:10px 0">
<script type="text/javascript">
    var cpro_psid = "1000010";
    var cpro_pswidth = 990;
    var cpro_psheight = 120;
</script>
<script src="/Public/Home/js/ue.js" type="text/javascript"></script>
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
<script type="text/javascript">
msc.goTop.init();
msc.user.init();
$("img.imgLoad").imgLoad();
$(".search_Text").click(function(){var f=$(this).attr("data-first");if(f=="on"){$(this).val("");$(this).attr("data-first","off")}$(this).removeClass("gay")});$("#search").click(function(){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","#search/"+$("#q").val()+"/")}$("#form_search").submit()});$("#q").keydown(function(event){if(event.keyCode==13){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","#search/"+$("#q").val()+"/")}}});
</script>
<script>
var inTimer,outTimer;
//绑定鼠标进入事件
$(".pin_list").on("mouseenter","div.c",function(event){
		var that = $(this);

		inTimer = setTimeout(function() {
			if (that.find("div.f").html() == '') {
			var id = that.find("div.f").attr("data-id");


			$.ajax({
type: "GET",
url: "/ajax/ajax.php?ac=commondata&op=get_common_data_num",
data: {
id: id,
type: "pai"
},
dataType: "json",
success: function(d) {
if (d.error === 0){
var islike =(d.data.islike==1)?" on":"";
var isfav=(d.data.isfav==1)?" on":"";
var islogin=(d.data.loginuid==0)?" nologin":"";
that.find("div.f").html('<a href="javascript:void(0);" class="f1'+islike+islogin+'" title="喜欢"><i></i></a>').fadeIn();
that.find("div.num span").html('<b>'+d.data.likenum+'</b>个喜欢，'+d.data.replynum+'条评论').fadeIn();
}


}
});
} 
else{
that.find("div.f").fadeIn();
that.find("div.num span").fadeIn();
}

}, 150);
});

//绑定鼠标离开事件
$(".pin_list").on("mouseleave","div.c",function(event){
		var that = $(this);
		clearTimeout(inTimer);

		outTimer = setTimeout(function() {
			that.find("div.f").fadeOut();
			that.find("div.num span").fadeOut();
			}, 100);

		});

//列表喜欢
$(".pin_list").on("click",".f1",function(){
if($(this).hasClass("on")){
msc.ui.dialog.error("您已经喜欢过该话题!");
return false;
}
else if($(this).hasClass("nologin")){
msc.user.login();
return false;
}
else{
var that =$(this);
$.post('/ajax/ajax.php?ac=pai&op=add_pai', {
pid:that.parent().attr('data-id')
}, function(e) {
if (e.error === 0) {
msc.ui.dialog.success("添加喜欢成功");
that.parent().parent().find("div.num span b").html(parseInt(that.parent().parent().find("div.num span b").html()) + 1);
that.addClass("on");
}
else if(e.error === -1){
msc.ui.dialog.error(e.data);
}
else{
msc.ui.dialog.error('出现异常，请重试');
}

},"json");
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
</script> </body>
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