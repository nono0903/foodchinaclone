<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta property="qc:admins" content="10660160706551301301616375" />
<title>美食天下|美食|菜谱大全|家常菜谱|美食社区-最大的中文美食网站</title>
<meta name="keywords" content="美食天下,美食网,家常菜菜谱大全,美食社区,家常菜" />
<meta name="description" content="美食天下是最大的中文美食网站与厨艺交流社区，拥有最多的美食做法、菜谱、食谱大全以及家常菜菜谱，同时美食天下是聚集百万美食爱好者的美食家社区，欢迎您的加入！" />
<meta name="msapplication-tooltip" content="美食天下-全球最大的中文美食网站" />
<meta name="renderer" content="webkit">
<meta name="msapplication-task" content="name=美食天下;icon-uri=/Public/Home/images/faviconi.ico" />
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?php echo U('Index/index');?>">
<link rel="apple-touch-icon" href="__PUBLIC/Home/images/wapico.png" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css"/>
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
		<a href="<?php echo U('Index/index');?>" title="美食天下">美食天下</a>
	</div>
	
	<div class="logo_search right">
		<form id="form_search" action="<?php echo U('Search/index');?>" method="post" target="_blank">
			<div class="searchBox J_search"><a href="javascript:;" title="搜索" class="search_Btn J_searchBTN right" id="search" >搜索</a><input type="text" id="q" class="search_Text J_searchTxt right gay" data-first="on" >
			</div>
		</form>
	</div>
	
	<div class="logo_nav">
		<a title="首页" href="<?php echo U('Index/index');?>" class="on" target="_blank">首页</a>
		<a title="菜谱" href="<?php echo U('Recipe/index');?>" target="_blank">菜谱</a>
		<a title="食材" href="<?php echo U('Sc/index');?>" target="_blank">食材</a>
		<a title="健康" href="<?php echo U('Health/index');?>" target="_blank">健康</a>
		<a title="专题" href="<?php echo U('Zhuanti/index');?>" target="_blank">专题</a>
		<a title="社区" href="<?php echo U('Shequ/index');?>" target="_blank">社区</a>
		<a title="话题" href="<?php echo U('Huati/index');?>" target="_blank">话题</a>
	</div>

</div>
	

<div class="wrap">
<div class="w clear">

<div class="w1">
<div  id="home_index_slider">
<ul>
<li> 
<a title="寒风瑟瑟，不如干了这碗“鸡汤”" href="http://www.meishichina.com/mofang/yiwanjitang/" target="_blank">
	<img src="http://i3.meishichina.com/attachment/magic/2016/11/01/20161101147796532776613.jpg" srcset="http://i3.meishichina.com/attachment/magic/2016/11/01/20161101147796532757113.jpg 2x">
</a>
</li>
<li> 
<a title="告别手脚冰凉，御寒食物要多吃" href="http://www.meishichina.com/mofang/shoujiaobingliang/" target="_blank">
	<img src="http://i3.meishichina.com/attachment/magic/2016/10/27/20161027147753420526813.jpg" srcset="http://i3.meishichina.com/attachment/magic/2016/10/27/20161027147753420558213.jpg 2x">
</a>
</li>
<li> 
<a title="柏翠2-6" href="http://home.meishichina.com/watch.php?id=113" target="_blank">
	<img src="http://i3.meishichina.com/attachment/magic/2016/11/02/20161102147805772849213.jpg" srcset="http://i3.meishichina.com/attachment/magic/2016/11/02/20161102147805772840713.jpg 2x">
</a>
</li>
<li> 
<a title="雅致早午餐 好吃、管饱、有情调" href="http://www.meishichina.com/mofang/zaowucan/" target="_blank">
	<img src="http://i3.meishichina.com/attachment/magic/2016/10/20/20161020147694779399413.jpg" srcset="http://i3.meishichina.com/attachment/magic/2016/10/20/20161020147694779365213.jpg 2x">
</a>
</li>
<li> 
<a title="[话题征集] 魔法立方料理，造型大赛" href="http://home.meishichina.com/event-354.html" target="_blank">
	<img src="http://i3.meishichina.com/attachment/magic/2016/10/27/20161027147753154129913.jpg" srcset="http://i3.meishichina.com/attachment/magic/2016/10/27/20161027147753154122013.jpg 2x">
</a>
</li>
<li> 
<a title="秋风微凉，抗感冒食物GET" href="http://www.meishichina.com/mofang/kangganmao/" target="_blank">
	<img src="http://i3.meishichina.com/attachment/magic/2016/10/18/20161018147676754163713.jpg" srcset="http://i3.meishichina.com/attachment/magic/2016/10/18/20161018147676754362613.jpg 2x">
</a>
</li>
</ul>
</div>


<div class="w1_1">
<ul>
<li class="i1"><a class="la" href="<?php echo U('Home/Recipe/index');?>" target="_blank"><i></i>菜谱大全<b></b></a>
<ul class="sub">
<?php if(is_array($recipe)): foreach($recipe as $key=>$rec): ?><li><a href="<?php echo U('Home/Recipe/recipefl',array('cid'=>$rec[cid]));?>" target="_blank"><?php echo ($rec['c_name']); ?></a></li><?php endforeach; endif; ?>
<li><a href="<?php echo U('Home/Recipe/recipecat');?>" target="_blank">所有分类<span>美天的神奇饭盒</span></a></li>
</ul>
</li>
<li class="i2"><a class="la"  href="http://www.meishichina.com/YuanLiao/" target="_blank"><i></i>食材大全<b></b></a>
<ul class="sub">

<?php if(is_array($sc)): foreach($sc as $key=>$sc): ?><li><a href="<?php echo U('Home/Sc/index',array('sid'=>$sc['sid']));?>" target="_blank"><?php echo ($sc['s_name']); ?></a></li><?php endforeach; endif; ?>
<li><a href="#" target="_blank">营养排行<span>看看谁TOP!</span></a></li>
</ul>
</li>
<!-- <li class="i3"><a class="la"  href="http://zhen.meishichina.com/" target="_blank"><i></i>品质珍选<b></b></a>
<ul class="sub">
<li><a href="http://zhen.meishichina.com/listing/4954814/" target="_blank">浪漫七夕<span>为他挑选一份小礼物</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4917758/" target="_blank">葡萄酒<span>亚马逊海外直采</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4859552/" target="_blank">咖啡<span>和生活约会</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4834215/" target="_blank">限时秒杀<span>抢到就是赚到，手慢无</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4834212/" target="_blank">白菜价<span>超值爆款</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4834211/" target="_blank">买了又买<span>买了又双叒叕买</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4834217/" target="_blank">厨房神器<span>神器在手，美食无忧</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4834219/" target="_blank">镇店之宝<span>不可错过的明星产品</span></a></li>
<li><a href="http://zhen.meishichina.com/listing/4836164/" target="_blank">海淘食光<span>搜罗全世界的好东西</span></a></li>
</ul>
</li> -->

<li class="i4"><a class="la"  href="http://www.meishichina.com/mofang/" target="_blank"><i></i>专题专区<b></b></a>
<ul class="sub">
<li><a href="<?php echo U('Home/Recipe/caidan');?>" target="_blank">菜单</a></li>
<li><a href="<?php echo U('Home/Recipe/jiachangcaipu');?>" target="_blank">家常菜谱</a></li>

<li class="pic"><a style="margin-top:60px;" href="http://mamapai.meishichina.com/" target="_blank"><img src="http://static.meishichina.com/v6/img/model/mamapai.jpg" width="165" /></a></li>
<li class="pic"><a style="margin-top:60px;" href="http://hongbei.meishichina.com/" target="_blank"><img src="http://static.meishichina.com/v6/img/model/hongbei.jpg" width="165" /></a></li>
</ul>
</li>
<li class="i5"><a class="la"  href="<?php echo U('Home/Index/mobile');?>" target="_blank"><i></i>一起红<b></b></a>
<ul class="sub">
<li class="pic2"><a href="<?php echo U('Home/Index/mobile');?>" target="_blank"><img src="/Public/Home/mobile/ying.jpg" width="120" /></a></li>
<li class="pic2"><a style="margin-top:10px;" href="<?php echo U('Home/Index/mobile');?>" target="_blank"><img src="http://static.meishichina.com/v6/img/model/tu.jpg" width="390" /></a></li>
</ul>
</li>
</ul>
</div>

</div>


<div class="w2">
<div  id="w2_slider">
<ul>
	<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5075487.html">好吃到爆的菜
</a>
</h2>
<p>
<span>柠萌黄的菜单&nbsp;&nbsp;</span>
<br>
这些菜光是看看就让人不禁食指大动呢！一起看看如何在家中体验舌尖上的美味吧～</p>
</li>
<li class="mm">
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5112840.html">秋之食•白果
</a>
</h2>
<p>
<span>藜树花的菜单&nbsp;&nbsp;</span>
<br>
白果是银杏的种仁，可益肺气、治咳喘，促进血液循环之功效。是秋季养肺食补佳品。</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4970139.html">迷人烘焙---饼干
</a>
</h2>
<p>
<span>sunshinewinnie的菜单&nbsp;&nbsp;</span>
<br>
满屏画风清新的手工小饼干，你的少女心蹦出来了吗？看起来就觉得香酥好吃呢～</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4983333.html">秋食猪肝，吃出好气色
</a>
</h2>
<p>
<span>冰冷之吻_iTNFbf的菜单&nbsp;&nbsp;</span>
<br>
秋天天气干燥，这时候宜食养阳养肝的食物，不妨喝些猪肝汤，让你在秋天拥有好气色。</p>
</li>
<li class="mm">
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-2882566.html">咕嘟咕嘟，暖身砂锅菜
</a>
</h2>
<p>
<span>小美的菜单&nbsp;&nbsp;</span>
<br>
砂锅借着自己的暖暖身体，为菜菜们送上最温暖的关怀，也让我们在寒冷中的感到一股暖流。</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5107485.html">养生汤羹
</a>
</h2>
<p>
<span>清水淡竹的菜单&nbsp;&nbsp;</span>
<br>
秋季气候干燥，很容易引起肺部不适，养生汤羹推荐给你，滋润又暖身哦～</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4879627.html">妈妈的爱心食谱清单
</a>
</h2>
<p>
<span>阿黛_chef的菜单&nbsp;&nbsp;</span>
<br>
生长发育中的孩子,每一餐都应该好好吃。妈妈也为此伤透了脑筋，如何让宝宝爱上吃饭呢？</p>
</li>
<li class="mm">
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4907920.html">五谷杂粮
</a>
</h2>
<p>
<span>沉默的吸血鬼的菜单&nbsp;&nbsp;</span>
<br>
五谷杂粮是日常生活饮食的基石，它们具有补中益气，滋阴润肺，健脾开胃的作用。</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4985831.html">秋日养生小粥
</a>
</h2>
<p>
<span>w浪漫巴黎的菜单&nbsp;&nbsp;</span>
<br>
各个季节有不同的养生粥,尤其是秋季养生,不如寻找适合自己的粥品,以温养温,以味养胃!</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4859050.html">素食最养人
</a>
</h2>
<p>
<span>瑶％妈妈的菜单&nbsp;&nbsp;</span>
<br>
素菜其实也很有营养的，而且素菜的做法大都简单，吃惯了大鱼大肉，不妨来试试哦！</p>
</li>
<li class="mm">
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5106229.html">绝不能错过的牡蛎吃法
</a>
</h2>
<p>
<span>给点紫色阳光的菜单&nbsp;&nbsp;</span>
<br>
牡蛎又叫蚝，是所有食物中含锌最丰富的。能壮阳、防衰老，有“海底牛奶”的美称。</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5091538.html">健康营养汤煲
</a>
</h2>
<p>
<span>爱淇媛的菜单&nbsp;&nbsp;</span>
<br>
秋季是为身体进补的好时机，做些汤水为您和您的家人送去一份温暖和健康～</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5105021.html">厉害了我的坚果
</a>
</h2>
<p>
<span>花开花落57的菜单&nbsp;&nbsp;</span>
<br>
秋季，各种坚果纷纷登场，平时多吃一点，对身体具有很好的补益养生作用～</p>
</li>
<li class="mm">
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5104556.html">跳动的味蕾
</a>
</h2>
<p>
<span>低姿态✨的菜单&nbsp;&nbsp;</span>
<br>
细细品味一道菜为你带来的感觉，那些滋味在味蕾的每一次绽放，都是幸福的～</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4951781.html">秋季吃菇，鲜美养生
</a>
</h2>
<p>
<span>减肥不吃只解馋的菜单&nbsp;&nbsp;</span>
<br>
每个人的身边都有个爱吃菌菇的童鞋，菌菇吃的就是那股鲜劲儿，天凉了炖个汤也不错！</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5098253.html">稀奇菜品
</a>
</h2>
<p>
<span>美食吃货喵的菜单&nbsp;&nbsp;</span>
<br>
美味的鸡蛋原来你还能炸着吃，问了同学他们全部都没吃过，好想吃哦～</p>
</li>
<li class="mm">
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-4738020.html">防御雾霾，打响食物保肺战
</a>
</h2>
<p>
<span>小美的菜单&nbsp;&nbsp;</span>
<br>
霾影响最大的就是人的呼吸系统，雾霾天气出门要戴口罩，抗雾霾食材推荐给大家～</p>
</li>
<li >
<h2>
	<a target="_blank" href="http://home.meishichina.com/collect-5095941.html">霜降，滋补好时节
</a>
</h2>
<p>
<span>小美的菜单&nbsp;&nbsp;</span>
<br>
“一年补透透,不如补霜降”。霜降意味着马上就进入冬天了，所以秋冬季养生特别重要。</p>
</li>
</ul>
</div>
</div>


<div class="w3 clear">
	
	<div class="w3_1 w3live">
		<div class="ui_title">
			<div class="ui_title_wrap">
				<h2 class="on"><a href="javascript:void(0);" >健康</a></h2>
				<h2><a href="javascript:void(0);">食疗</a></h2>
				<a title="健康首页" href="http://www.meishichina.com/Health/" class="right" target="_blank">健康首页</a>
			</div>
		</div>
		<div class="live on">
			<a title="唇纹"泄露"年龄 娇嫩双唇要这么护理" href="http://www.meishichina.com/mofang/huchunmeishi/" class="w3a" target="_blank"><img src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/magic/2016/10/31/20161031147787953388913.jpg" width="310" height="124" class="imgLoad" /></a>
			<ul class="tuijian">
								<li><a title="祛湿重吃这15种食物" href="http://www.meishichina.com/Health/JianKang/201611/190871.html" target="_blank">祛湿重吃这15种食物</a></li>
								<li><a title="收藏！20个实用的烹饪技巧" href="http://www.meishichina.com/Health/CommonSense/201611/190413.html" target="_blank">收藏！20个实用的烹饪技巧</a></li>
								<li><a title="超有营养的6种食物 专家给出正确吃法" href="http://www.meishichina.com/Health/Nutrition/201611/190636.html" target="_blank">超有营养的6种食物 专家给出正确吃法</a></li>
								<li><a title="吃水果能滋养肌肤 13种养肤水果别错过" href="http://www.meishichina.com/Health/Pulchritude/201611/190482.html" target="_blank">吃水果能滋养肌肤 13种养肤水果别错过</a></li>
								<li><a title="那些美颜食物的神级吃法" href=" http://www.meishichina.com/mofang/meiyanshiwu/" target="_blank">专题┊那些美颜食物的神级吃法</a></li>
<li><a title="聪明女人都在吃的养生菜" href="http://www.meishichina.com/mofang/congmingnvrenchideyangshengcai/" target="_blank">专题┊聪明女人都在吃的养生菜</a></li>
			</ul>
		</div>
		<div class="live">

			<ul class="La3 clear">
				<li><a title="瘦身" href="http://www.meishichina.com/YuanLiao/gongxiao/shoushen/" target="_blank">瘦身</a></li>
				<li><a title="丰胸" href="http://www.meishichina.com/YuanLiao/gongxiao/fengxiong/" target="_blank">丰胸</a></li>
				<li><a title="养颜" href="http://www.meishichina.com/YuanLiao/gongxiao/yangyan/" target="_blank">养颜</a></li>
				<li><a title="排毒" href="http://www.meishichina.com/YuanLiao/gongxiao/paidu/" target="_blank">排毒</a></li>
				<li><a title="补钙" href="http://www.meishichina.com/YuanLiao/gongxiao/bugai/" target="_blank">补钙</a></li>
				<li><a title="贫血" href="http://www.meishichina.com/YuanLiao/gongxiao/pinxue/" target="_blank">贫血</a></li>			
				<li><a title="滋阴" href="http://www.meishichina.com/YuanLiao/gongxiao/ziyin/" target="_blank">滋阴</a></li>
				<li><a title="壮阳" href="http://www.meishichina.com/YuanLiao/gongxiao/zhuangyang/" target="_blank">壮阳</a></li>
				<li><a title="失眠" href="http://www.meishichina.com/YuanLiao/gongxiao/shimian/" target="_blank">失眠</a></li>
				<li><a title="消暑解渴" href="http://www.meishichina.com/YuanLiao/gongxiao/xiaoshujieke/" target="_blank">消暑</a></li>
				<li><a title="免疫力" href="http://www.meishichina.com/YuanLiao/gongxiao/tigaomianyili/" target="_blank">免疫力</a></li>
				<li><a title="养胃" href="http://www.meishichina.com/YuanLiao/gongxiao/yangwei/" target="_blank">养胃</a></li>
				<li><a title="痛经" href="http://www.meishichina.com/YuanLiao/gongxiao/tongjing/" target="_blank">痛经</a></li>
				<li><a title="月经不调" href="http://www.meishichina.com/YuanLiao/gongxiao/yuejingbutiao/" target="_blank">月经不调</a></li>
				<li><a title="前列腺炎" href="http://www.meishichina.com/YuanLiao/gongxiao/qianliexianyan/" target="_blank">前列腺</a></li>
				<li><a title="抗衰老" href="http://www.meishichina.com/YuanLiao/gongxiao/kangshuailao/" target="_blank">抗衰老</a></li>
				<li><a title="防辐射" href="http://www.meishichina.com/YuanLiao/gongxiao/fangfushe/" target="_blank">防辐射</a></li>
				<li><a title="抗雾霾" href="http://www.meishichina.com/YuanLiao/gongxiao/duikangwumai/" target="_blank">抗雾霾</a></li>
			</ul>
		</div>
	</div>

	<div class="w3_2 w3live">
		<div class="ui_title">
			<div class="ui_title_wrap">
				<h2 class="on"><a href="javascript:void(0);">烘焙</a></h2>
				<h2><a href="javascript:void(0);">食谱</a></h2>
				<a title="烘焙专区" href="http://hongbei.meishichina.com/" class="right" target="_blank">烘焙专区</a>
			</div>
		</div>
		<div class="live on">
			<a title="秋食坚果，养生又养颜" href="http://www.meishichina.com/mofang/jianguohb/" class="w3a" target="_blank"><img src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/magic/2016/10/31/20161031147787943181313.jpg" width="310" height="124" class="imgLoad" /></a>
			<ul class="tuijian">
				<li><a title="创意无限 - 翻糖拼图饼干" href="http://home.meishichina.com/pai-724194.html" target="_blank">创意无限 - 翻糖拼图饼干</a></li>
<li><a title="立方料理－飞饼版苹果派" href="http://home.meishichina.com/pai-722011.html" target="_blank">立方料理－飞饼版苹果派</a></li>
<li><a title="米奇翻糖蛋糕制作" href="http://home.meishichina.com/pai-722813.html" target="_blank">米奇翻糖蛋糕制作 </a></li>
<li><a title="让人难以抗拒的国货糕点" href="http://home.meishichina.com/pai-715241.html" target="_blank">让人难以抗拒的国货糕点 </a></li>
<li><a title="平底锅甜点——千层蛋糕" href="http://home.meishichina.com/collect-4743405.html" target="_blank">菜单┊平底锅甜点——千层蛋糕</a></li>
<li><a title="杯子甜品，手捧着吃的快乐" href=" http://www.meishichina.com/mofang/beizitianpin/" target="_blank">专题┊杯子甜品，手捧着吃的快乐</a></li>
			</ul>
		</div>
		<div class="live">
			<ul class="La3 clear">
				<li><a title="吐司" href="http://hongbei.meishichina.com/recipe/4201565/" target="_blank">吐司</a></li>
				<li><a title="三明治" href="http://hongbei.meishichina.com/recipe/4732307/" target="_blank">三明治</a></li>
				<li><a title="马芬" href="http://hongbei.meishichina.com/recipe/4732369/" target="_blank">马芬</a></li>
				<li><a title="布朗尼" href="http://hongbei.meishichina.com/recipe/4732362/" target="_blank">布朗尼</a></li>
				<li><a title="蛋糕卷" href="http://hongbei.meishichina.com/recipe/4201566/" target="_blank">蛋糕卷</a></li>
				<li><a title="玛德琳" href="http://hongbei.meishichina.com/recipe/4732218/" target="_blank">玛德琳</a></li>
				<li><a title="舒芙蕾" href="http://hongbei.meishichina.com/recipe/4732360/" target="_blank">舒芙蕾</a></li>
				<li><a title="纸杯蛋糕" href="http://hongbei.meishichina.com/recipe/4732207/" target="_blank">纸杯蛋糕</a></li>
				<li><a title="戚风" href="http://hongbei.meishichina.com/recipe/4201563/" target="_blank">戚风</a></li>
				<li><a title="马卡龙" href="http://hongbei.meishichina.com/recipe/4732728/" target="_blank">马卡龙</a></li>
				<li><a title="糖霜饼干" href="http://hongbei.meishichina.com/recipe/4735148/" target="_blank">糖霜饼干</a></li>
				<li><a title="曲奇" href="http://hongbei.meishichina.com/recipe/4732727/" target="_blank">曲奇</a></li>
				<li><a title="披萨" href="http://hongbei.meishichina.com/recipe/4732743/" target="_blank">披萨</a></li>
				<li><a title="泡芙" href="http://hongbei.meishichina.com/recipe/4732317/" target="_blank">泡芙</a></li>
				<li><a title="蛋挞" href="http://hongbei.meishichina.com/recipe/4732311/" target="_blank">蛋挞</a></li>
				<li><a title="派塔" href="http://hongbei.meishichina.com/recipe/4735023/" target="_blank">派塔</a></li>
				<li><a title="中式糕点" href="http://hongbei.meishichina.com/recipe/4732738/" target="_blank">中式糕点</a></li>
				<li><a title="酥" href="http://hongbei.meishichina.com/recipe/4732375/" target="_blank">酥</a></li>
			</ul>
		</div>
	</div>

	<div class="w3_3">
		<div class="ui_title">
			<div class="ui_title_wrap">
				<h2 class="on">为您推荐</h2>
				<a href="http://member.meishichina.com/mycenter/my_fav_recipe/" title="我的收藏" class="right" target="_blank">我的收藏</a>
			</div>
		</div>
		<div class="live on">
			<a title="[菜谱征集] 柏翠烘焙大赛－【四城联动】主题赛" href="http://home.meishichina.com/minisite/bocui2016/zhutisai/" class="w3a" target="_blank"><img src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/magic/2016/10/31/20161031147788004278513.jpg" width="310" height="124" class="imgLoad" /></a>
			<ul class="tuijian">
				<li><a title="海鲜大趴，燃爆你的味蕾" href="http://www.meishichina.com/mofang/haixiandapa/" target="_blank">海鲜大趴，燃爆你的味蕾</a></li>
<li><a title="下午茶，品味惬意的午后时光" href="http://www.meishichina.com/mofang/xiawucha/" target="_blank">下午茶，品味惬意的午后时光</a></li>
<li><a title="秋季补水护肤，想美趁早" href="http://www.meishichina.com/mofang/qiujibushui/" target="_blank">秋季补水护肤，想美趁早</a></li>
<li><a title="4-6个月的宝宝流质型辅食" href="http://mamapai.meishichina.com/yinger/" target="_blank">妈妈派┊4-6个月的宝宝流质型辅食</a></li>
<li><a title="1-1.5岁宝宝软烂型营养餐" href="http://mamapai.meishichina.com/youer/1-1.5/" target="_blank">妈妈派┊1-1.5岁宝宝软烂型营养餐</a></li>
<li><a title="ACA自投果料面包机" href="http://zhen.meishichina.com/3210/lottery/" target="_blank">免费抽奖┊ACA自投果料面包机</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="w5">
	<div class="ui_title">
		<div class="ui_title_wrap clear">
			<h3 class="on"><a href="javascript:void(0);">新秀菜谱</a></h3>
			<h3><a href="javascript:void(0);">一周热门</a></h3>
			<h3><a href="javascript:void(0);">最受欢迎的家常菜</a></h3>

			<a href="http://home.meishichina.com/recipe.html" class="right" target="_blank">菜谱首页</a>
			<a href="http://home.meishichina.com/recipe/xican/" title="西餐" class="right" target="_blank">西餐</a>
			<a href="http://home.meishichina.com/recipe/xiaochi/" title="小吃" class="right" target="_blank">小吃</a>
			<a href="http://home.meishichina.com/recipe/zhushi/" title="主食" class="right" target="_blank">主食</a>
			<a href="http://home.meishichina.com/recipe/tanggeng/" title="汤羹" class="right" target="_blank">汤羹</a>
			<a href="http://home.meishichina.com/recipe/liangcai/" title="凉菜" class="right" target="_blank">凉菜</a>
			<a href="http://home.meishichina.com/recipe/recai/" title="热菜" class="right" target="_blank">热菜</a>

		</div>
	</div>

	<div class="big4_list clear mt10">
		<ul class="on">
						<li>
			<a title="暖胃又养胃的大米小米南瓜粥" href="http://home.meishichina.com/recipe-296789.html" target="_blank">
				<i>
					<img alt="暖胃又养胃的大米小米南瓜粥" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147808163073213.jpg">
				</i>
				<p>暖胃又养胃的大米小米南瓜粥</p>
			</a>
			<a title="黄豆豆的一家" href="http://home.meishichina.com/space-549055.html" target="_blank" class="u">黄豆豆的一家</a>
			</li>
						<li>
			<a title=" 雪梨莲藕露" href="http://home.meishichina.com/recipe-296783.html" target="_blank">
				<i>
					<img alt=" 雪梨莲藕露" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147808087769813.jpg">
				</i>
				<p> 雪梨莲藕露</p>
			</a>
			<a title="宝妈小厨." href="http://home.meishichina.com/space-8357090.html" target="_blank" class="u">宝妈小厨.</a>
			</li>
						<li>
			<a title="酥粒排包" href="http://home.meishichina.com/recipe-296737.html" target="_blank">
				<i>
					<img alt="酥粒排包" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147808064938713.jpg">
				</i>
				<p>酥粒排包</p>
			</a>
			<a title="黑猫警长kitchen" href="http://home.meishichina.com/space-8643489.html" target="_blank" class="u">黑猫警长kitchen</a>
			</li>
						<li>
			<a title="糯米肉丸" href="http://home.meishichina.com/recipe-296777.html" target="_blank">
				<i>
					<img alt="糯米肉丸" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147808074959513.jpg">
				</i>
				<p>糯米肉丸</p>
			</a>
			<a title="潮汕大妈" href="http://home.meishichina.com/space-2234654.html" target="_blank" class="u">潮汕大妈</a>
			</li>
						<li>
			<a title="瘦肉灼菜心" href="http://home.meishichina.com/recipe-296780.html" target="_blank">
				<i>
					<img alt="瘦肉灼菜心" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147808061813113.jpg">
				</i>
				<p>瘦肉灼菜心</p>
			</a>
			<a title="sourcehe" href="http://home.meishichina.com/space-8819358.html" target="_blank" class="u">sourcehe</a>
			</li>
						<li>
			<a title="【上烘焙】香草布丁" href="http://home.meishichina.com/recipe-296768.html" target="_blank">
				<i>
					<img alt="【上烘焙】香草布丁" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147808003021613.jpg">
				</i>
				<p>香草布丁</p>
			</a>
			<a title="上烘焙" href="http://home.meishichina.com/space-9563779.html" target="_blank" class="u">上烘焙</a>
			</li>
						<li>
			<a title="鱿鲜土豆泥" href="http://home.meishichina.com/recipe-296755.html" target="_blank">
				<i>
					<img alt="鱿鲜土豆泥" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807995131713.jpg">
				</i>
				<p>鱿鲜土豆泥</p>
			</a>
			<a title="祯祯宝贝" href="http://home.meishichina.com/space-6673714.html" target="_blank" class="u">祯祯宝贝</a>
			</li>
						<li>
			<a title="【上烘焙】奶油泡芙" href="http://home.meishichina.com/recipe-296765.html" target="_blank">
				<i>
					<img alt="【上烘焙】奶油泡芙" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807991698513.jpg">
				</i>
				<p>奶油泡芙</p>
			</a>
			<a title="上烘焙" href="http://home.meishichina.com/space-9563779.html" target="_blank" class="u">上烘焙</a>
			</li>
						<li>
			<a title="港式叉烧" href="http://home.meishichina.com/recipe-296761.html" target="_blank">
				<i>
					<img alt="港式叉烧" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807652883013.jpg">
				</i>
				<p>港式叉烧</p>
			</a>
			<a title="爱漂亮" href="http://home.meishichina.com/space-9722792.html" target="_blank" class="u">爱漂亮</a>
			</li>
						<li>
			<a title="【上烘焙】柠檬磅蛋糕" href="http://home.meishichina.com/recipe-296762.html" target="_blank">
				<i>
					<img alt="【上烘焙】柠檬磅蛋糕" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807388617713.jpg">
				</i>
				<p>柠檬磅蛋糕</p>
			</a>
			<a title="上烘焙" href="http://home.meishichina.com/space-9563779.html" target="_blank" class="u">上烘焙</a>
			</li>
						<li>
			<a title="曲奇挞" href="http://home.meishichina.com/recipe-296757.html" target="_blank">
				<i>
					<img alt="曲奇挞" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807366617313.jpg">
				</i>
				<p>曲奇挞</p>
			</a>
			<a title="juju私厨" href="http://home.meishichina.com/space-8825309.html" target="_blank" class="u">juju私厨</a>
			</li>
						<li>
			<a title="鸡汁双薯泥" href="http://home.meishichina.com/recipe-296756.html" target="_blank">
				<i>
					<img alt="鸡汁双薯泥" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807299014713.jpg">
				</i>
				<p>鸡汁双薯泥</p>
			</a>
			<a title="情一诺" href="http://home.meishichina.com/space-6941259.html" target="_blank" class="u">情一诺</a>
			</li>
						<li>
			<a title="自制美味花菇调味鸡精粉" href="http://home.meishichina.com/recipe-259494.html" target="_blank">
				<i>
					<img alt="自制美味花菇调味鸡精粉" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807275487313.jpg">
				</i>
				<p>自制美味花菇调味鸡精粉</p>
			</a>
			<a title="炫润丝巾" href="http://home.meishichina.com/space-7738856.html" target="_blank" class="u">炫润丝巾</a>
			</li>
						<li>
			<a title="【上烘焙】戚风蛋糕" href="http://home.meishichina.com/recipe-296750.html" target="_blank">
				<i>
					<img alt="【上烘焙】戚风蛋糕" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807272112513.jpg">
				</i>
				<p>戚风蛋糕</p>
			</a>
			<a title="上烘焙" href="http://home.meishichina.com/space-9563779.html" target="_blank" class="u">上烘焙</a>
			</li>
						<li>
			<a title="宝宝爱吃的免烤蛋糕——火龙果慕斯" href="http://home.meishichina.com/recipe-296751.html" target="_blank">
				<i>
					<img alt="宝宝爱吃的免烤蛋糕——火龙果慕斯" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807286299113.jpg">
				</i>
				<p>宝宝爱吃的免烤蛋糕—火龙果慕斯</p>
			</a>
			<a title="一块烘焙App" href="http://home.meishichina.com/space-9716193.html" target="_blank" class="u">一块烘焙App</a>
			</li>
						<li>
			<a title="莴笋炒鸡蛋" href="http://home.meishichina.com/recipe-296747.html" target="_blank">
				<i>
					<img alt="莴笋炒鸡蛋" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807253073713.jpg">
				</i>
				<p>莴笋炒鸡蛋</p>
			</a>
			<a title="悦悦玉食" href="http://home.meishichina.com/space-2272341.html" target="_blank" class="u">悦悦玉食</a>
			</li>
						<li>
			<a title="凉拌牛筋" href="http://home.meishichina.com/recipe-296742.html" target="_blank">
				<i>
					<img alt="凉拌牛筋" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147807250373613.jpg">
				</i>
				<p>凉拌牛筋</p>
			</a>
			<a title="悦悦玉食" href="http://home.meishichina.com/space-2272341.html" target="_blank" class="u">悦悦玉食</a>
			</li>
						<li>
			<a title="【上烘焙】牛奶蘑菇小餐包" href="http://home.meishichina.com/recipe-296738.html" target="_blank">
				<i>
					<img alt="【上烘焙】牛奶蘑菇小餐包" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147806962633813.jpg">
				</i>
				<p>牛奶蘑菇小餐包</p>
			</a>
			<a title="上烘焙" href="http://home.meishichina.com/space-9563779.html" target="_blank" class="u">上烘焙</a>
			</li>
						<li>
			<a title="家常淮南牛肉汤" href="http://home.meishichina.com/recipe-295080.html" target="_blank">
				<i>
					<img alt="家常淮南牛肉汤" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/201611021478066614725110319.jpg@!c320">
				</i>
				<p>家常淮南牛肉汤</p>
			</a>
			<a title="掀帘晨曦datura" href="http://home.meishichina.com/space-110319.html" target="_blank" class="u">掀帘晨曦datura</a>
			</li>
						<li>
			<a title="甘梅口味地瓜片" href="http://home.meishichina.com/recipe-296727.html" target="_blank">
				<i>
					<img alt="甘梅口味地瓜片" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/02/20161102147806745632113.jpg">
				</i>
				<p>甘梅口味地瓜片</p>
			</a>
			<a title="YasueTin" href="http://home.meishichina.com/space-9815048.html" target="_blank" class="u">YasueTin</a>
			</li>
					</ul>
		<ul>
						<li>
			<a title="酱汁金针菇" href="http://home.meishichina.com/recipe-278492.html" target="_blank">
				<i>
					<img alt="酱汁金针菇" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/01/20161101147799282661213.jpg">
				</i>
				<p>酱汁金针菇</p>
			</a>
			<a title="零下一度0511" href="http://home.meishichina.com/space-9541848.html" target="_blank" class="u">零下一度0511</a>
			</li>
						<li>
			<a title="香酥土豆条" href="http://home.meishichina.com/recipe-290992.html" target="_blank">
				<i>
					<img alt="香酥土豆条" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/09/29/c640_20160929147514252912113.jpg">
				</i>
				<p>香酥土豆条</p>
			</a>
			<a title="狸小胖" href="http://home.meishichina.com/space-9650652.html" target="_blank" class="u">狸小胖</a>
			</li>
						<li>
			<a title="红烧茄子" href="http://home.meishichina.com/recipe-277159.html" target="_blank">
				<i>
					<img alt="红烧茄子" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/19/c640_20161019147686472676413.jpg">
				</i>
				<p>红烧茄子</p>
			</a>
			<a title="零下一度0511" href="http://home.meishichina.com/space-9541848.html" target="_blank" class="u">零下一度0511</a>
			</li>
						<li>
			<a title="椒盐虾" href="http://home.meishichina.com/recipe-276961.html" target="_blank">
				<i>
					<img alt="椒盐虾" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/11/01/20161101147799512035213.jpg">
				</i>
				<p>椒盐虾</p>
			</a>
			<a title="零下一度0511" href="http://home.meishichina.com/space-9541848.html" target="_blank" class="u">零下一度0511</a>
			</li>
						<li>
			<a title="豆豉蒸排骨" href="http://home.meishichina.com/recipe-286470.html" target="_blank">
				<i>
					<img alt="豆豉蒸排骨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/09/21/c640_20160921147442633927513.jpg">
				</i>
				<p>豆豉蒸排骨</p>
			</a>
			<a title="零下一度0511" href="http://home.meishichina.com/space-9541848.html" target="_blank" class="u">零下一度0511</a>
			</li>
						<li>
			<a title="酸辣土豆丝" href="http://home.meishichina.com/recipe-293676.html" target="_blank">
				<i>
					<img alt="酸辣土豆丝" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/16/c640_20161016147661248259313.jpg">
				</i>
				<p>酸辣土豆丝</p>
			</a>
			<a title="丝柔内衣馆" href="http://home.meishichina.com/space-9445532.html" target="_blank" class="u">丝柔内衣馆</a>
			</li>
						<li>
			<a title="南瓜蒸排骨" href="http://home.meishichina.com/recipe-295844.html" target="_blank">
				<i>
					<img alt="南瓜蒸排骨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/27/20161027147756438676713.jpg">
				</i>
				<p>南瓜蒸排骨</p>
			</a>
			<a title="零下一度0511" href="http://home.meishichina.com/space-9541848.html" target="_blank" class="u">零下一度0511</a>
			</li>
						<li>
			<a title="糖醋排骨" href="http://home.meishichina.com/recipe-296165.html" target="_blank">
				<i>
					<img alt="糖醋排骨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/29/20161029147775083346713.jpg">
				</i>
				<p>糖醋排骨</p>
			</a>
			<a title="一尾鱼虾" href="http://home.meishichina.com/space-9320028.html" target="_blank" class="u">一尾鱼虾</a>
			</li>
						<li>
			<a title="水煎饺" href="http://home.meishichina.com/recipe-295620.html" target="_blank">
				<i>
					<img alt="水煎饺" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/26/20161026147748714285613.jpg">
				</i>
				<p>水煎饺</p>
			</a>
			<a title="英英菜谱" href="http://home.meishichina.com/space-6968441.html" target="_blank" class="u">英英菜谱</a>
			</li>
						<li>
			<a title="超级酥脆的安心早餐油条！" href="http://home.meishichina.com/recipe-296077.html" target="_blank">
				<i>
					<img alt="超级酥脆的安心早餐油条！" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/29/20161029147772417014513.jpg">
				</i>
				<p>超级酥脆的安心早餐油条</p>
			</a>
			<a title="涟漪点点0" href="http://home.meishichina.com/space-9763454.html" target="_blank" class="u">涟漪点点0</a>
			</li>
						<li>
			<a title="椒盐葱抓饼" href="http://home.meishichina.com/recipe-295376.html" target="_blank">
				<i>
					<img alt="椒盐葱抓饼" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/28/20161028147762110412313.jpg">
				</i>
				<p>椒盐葱抓饼</p>
			</a>
			<a title="天国的女儿" href="http://home.meishichina.com/space-9764821.html" target="_blank" class="u">天国的女儿</a>
			</li>
						<li>
			<a title="【桃李厨艺】现在流行在家用西餐，先做个小小的培根金针菇卷" href="http://home.meishichina.com/recipe-295828.html" target="_blank">
				<i>
					<img alt="【桃李厨艺】现在流行在家用西餐，先做个小小的培根金针菇卷" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/27/20161027147755839253113.jpg">
				</i>
				<p>培根金针菇卷</p>
			</a>
			<a title="桃李烹饪" href="http://home.meishichina.com/space-8893689.html" target="_blank" class="u">桃李烹饪</a>
			</li>
						<li>
			<a title="葱油脆酥饼" href="http://home.meishichina.com/recipe-293566.html" target="_blank">
				<i>
					<img alt="葱油脆酥饼" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/29/20161029147770708514213.jpg">
				</i>
				<p>葱油脆酥饼</p>
			</a>
			<a title="?不爱吃糖的糖糖糖?" href="http://home.meishichina.com/space-7574473.html" target="_blank" class="u">?不爱吃糖的糖糖糖?</a>
			</li>
						<li>
			<a title="盘丝饼" href="http://home.meishichina.com/recipe-296294.html" target="_blank">
				<i>
					<img alt="盘丝饼" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/30/20161030147783427041413.jpg">
				</i>
				<p>盘丝饼</p>
			</a>
			<a title="star时光" href="http://home.meishichina.com/space-9750926.html" target="_blank" class="u">star时光</a>
			</li>
						<li>
			<a title="蒜蓉粉丝蒸虾" href="http://home.meishichina.com/recipe-295806.html" target="_blank">
				<i>
					<img alt="蒜蓉粉丝蒸虾" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/27/20161027147755678982413.jpg">
				</i>
				<p>蒜蓉粉丝蒸虾</p>
			</a>
			<a title="看不到日出、却" href="http://home.meishichina.com/space-6477378.html" target="_blank" class="u">看不到日出、却</a>
			</li>
						<li>
			<a title="红烧猪蹄#肉肉厨" href="http://home.meishichina.com/recipe-296375.html" target="_blank">
				<i>
					<img alt="红烧猪蹄#肉肉厨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/31/20161031147788722833013.jpg">
				</i>
				<p>红烧猪蹄</p>
			</a>
			<a title="肉肉厨" href="http://home.meishichina.com/space-9732672.html" target="_blank" class="u">肉肉厨</a>
			</li>
						<li>
			<a title="黄金鱼柳" href="http://home.meishichina.com/recipe-295679.html" target="_blank">
				<i>
					<img alt="黄金鱼柳" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/27/20161027147753642025313.jpg">
				</i>
				<p>黄金鱼柳</p>
			</a>
			<a title="天国的女儿" href="http://home.meishichina.com/space-9764821.html" target="_blank" class="u">天国的女儿</a>
			</li>
						<li>
			<a title="香烤五花肉——德普烘焙实验室" href="http://home.meishichina.com/recipe-295831.html" target="_blank">
				<i>
					<img alt="香烤五花肉——德普烘焙实验室" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/27/20161027147755928028813.jpg">
				</i>
				<p>香烤五花肉</p>
			</a>
			<a title="Depelec德普" href="http://home.meishichina.com/space-8198941.html" target="_blank" class="u">Depelec德普</a>
			</li>
						<li>
			<a title="糯米藕" href="http://home.meishichina.com/recipe-295685.html" target="_blank">
				<i>
					<img alt="糯米藕" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/26/20161026147748691213313.jpg">
				</i>
				<p>糯米藕</p>
			</a>
			<a title="我是一只幸福猪" href="http://home.meishichina.com/space-324666.html" target="_blank" class="u">我是一只幸福猪</a>
			</li>
						<li>
			<a title="酱香鸡翅" href="http://home.meishichina.com/recipe-296106.html" target="_blank">
				<i>
					<img alt="酱香鸡翅" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/recipe/2016/10/29/20161029147774899330713.jpg">
				</i>
				<p>酱香鸡翅</p>
			</a>
			<a title="用爱心做美食" href="http://home.meishichina.com/space-9765254.html" target="_blank" class="u">用爱心做美食</a>
			</li>
			
		</ul>
		<ul>
			<li>
<a title="红烧肉" href="http://www.meishichina.com/mofang/hongshaorou/" target="_blank">
	<i><img alt="红烧肉" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/11/26/201511261448511476963.jpg" /></i>
	<p>红烧肉</p>
</a>
</li>
<li>
<a title="红烧茄子" href="http://www.meishichina.com/mofang/hongshaoqiezi/" target="_blank">
	<i><img alt="红烧茄子" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/16/201412161418708820256.jpg" /></i>
	<p>红烧茄子</p>
</a>
</li>
<li>
<a title="宫保鸡丁" href="http://www.meishichina.com/mofang/gongbaojiding/" target="_blank">
	<i><img alt="宫保鸡丁" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/17/201412171418792288850.jpg" /></i>
	<p>宫保鸡丁</p>
</a>
</li>
<li>
<a title="麻辣香锅" href="http://www.meishichina.com/mofang/malaxiangguo/" target="_blank">
	<i><img alt="麻辣香锅" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/17/201412171418794418131.jpg" /></i>
	<p>麻辣香锅</p>
</a>
</li>
<li>
<a title="红烧排骨" href="http://www.meishichina.com/mofang/hongshaopaigu/" target="_blank">
	<i><img alt="红烧排骨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418633910888.jpg" /></i>
	<p>红烧排骨</p>
</a>
</li>
<li>
<a title="糖醋排骨" href="http://www.meishichina.com/mofang/tangcupaigu/" target="_blank">
	<i><img alt="糖醋排骨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418633722494.jpg" /></i>
	<p>糖醋排骨</p>
</a>
</li>
<li>
<a title="鱼香肉丝" href="http://www.meishichina.com/mofang/yuxiangrousi/" target="_blank">
	<i><img alt="鱼香肉丝" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418637339893.jpg" /></i>
	<p>鱼香肉丝</p>
</a>
</li>
<li>
<a title="可乐鸡翅" href="http://www.meishichina.com/mofang/kelejichi/" target="_blank">
	<i><img alt="可乐鸡翅" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418629886725.jpg" /></i>
	<p>可乐鸡翅</p>
</a>
</li>
<li>
<a title="麻婆豆腐" href="http://www.meishichina.com/mofang/mapodoufu/" target="_blank">
	<i><img alt="麻婆豆腐" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/10/201501101420860049389.jpg" /></i>
	<p>麻婆豆腐</p>
</a>
</li>
<li>
<a title="佛跳墙" href="http://www.meishichina.com/mofang/fotiaoqiang/" target="_blank">
	<i><img alt="佛跳墙" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/10/201501101420857970771.jpg" /></i>
	<p>佛跳墙</p>
</a>
</li>
<li>
<a title="水煮肉片" href="http://www.meishichina.com/mofang/shuizhuroupian/" target="_blank">
	<i><img alt="水煮肉片" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418632855242.jpg" /></i>
	<p>水煮肉片</p>
</a>
</li>
<li>
<a title="红烧鱼" href="http://www.meishichina.com/mofang/hongshaoyu/" target="_blank">
	<i><img alt="红烧鱼" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418636937711.jpg" /></i>
	<p>红烧鱼</p>
</a>
</li>
<li>
<a title="沙拉" href="http://www.meishichina.com/mofang/shala/" target="_blank">
	<i><img alt="沙拉" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/10/201501101420879222287.jpg" /></i>
	<p>沙拉</p>
</a>
</li>
<li>
<a title="西红柿炒鸡蛋" href="http://www.meishichina.com/mofang/xihongshichaojidan/" target="_blank">
	<i><img alt="西红柿炒鸡蛋" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418631294204.jpg" /></i>
	<p>西红柿炒鸡蛋</p>
</a>
</li>
<li>
<a title="蛋炒饭" href="http://www.meishichina.com/mofang/danchaofan/" target="_blank">
	<i><img alt="蛋炒饭" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/29/201501291422521713355.jpg" /></i>
	<p>蛋炒饭</p>
</a>
</li>
<li>
<a title="鸡蛋饼" href="http://www.meishichina.com/mofang/jidanbing/" target="_blank">
	<i><img alt="鸡蛋饼" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/10/201501101420869487206.jpg" /></i>
	<p>鸡蛋饼</p>
</a>
</li>
<li>
<a title="口水鸡" href="http://www.meishichina.com/mofang/koushuiji/" target="_blank">
	<i><img alt="口水鸡" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418634904516.jpg" /></i>
	<p>口水鸡</p>
</a>
</li>
<li>
<a title="水煮鱼" href="http://www.meishichina.com/mofang/shuizhuyu/" target="_blank">
	<i><img alt="水煮鱼" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/10/201501101420856398745.jpg" /></i>
	<p>水煮鱼</p>
</a>
</li>
<li>
<a title="啤酒鸭" href="http://www.meishichina.com/mofang/pijiuya/" target="_blank">
	<i><img alt="啤酒鸭" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2015/01/10/201501101420859859839.jpg" /></i>
	<p>啤酒鸭</p>
</a>
</li>
<li>
<a title="麻辣烫" href="http://www.meishichina.com/mofang/malatang/" target="_blank">
	<i><img alt="麻辣烫" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/attachment/mofang/2014/12/15/201412151418639576351.jpg" /></i>
	<p>麻辣烫</p>
</a>
</li>
		</ul>
	</div>

</div>

<!-- 时令食材模块 start-->
<div class="w4">
	<div class="ui_title">
		<div class="ui_title_wrap">
			<h2 class="on"><a title="时令食材" href="<?php echo U('Home/sc/index');?>" target="_blank">时令食材</a></h2>
			<a title="食材首页" href="<?php echo U('Home/sc/index');?>" target="_blank" class="right">食材首页</a>
			<?php if(is_array($scs)): foreach($scs as $key=>$scv): ?><a title="<?php echo ($scv['s_name']); ?>" href="<?php echo U('Home/sc/flcx',['id'=>$scv['sid']]);?>" target="_blank" class="right"><?php echo ($scv['s_name']); ?></a><?php endforeach; endif; ?>
		</div>
	</div>

	<div class="tui_c">
		<ul>
			<?php if(is_array($slscs)): foreach($slscs as $key=>$slsc): ?><li><a title="<?php echo ($slsc['name']); ?>" href="#" target="_blank"><img class="imgLoad" src="<?php echo ($slsc['img']); ?>"  /><?php echo ($slsc['name']); ?></a><span><?php echo ($slsc['content']); ?></span></li><?php endforeach; endif; ?>
		</ul>
	</div>
</div>
<!-- 时令食材模块 end-->


<div class="w6">
	<div class="ui_title">
		<div class="ui_title_wrap clear">
			<h3 class="on"><a href="javascript:void(0);">热门话题</a></h3>
			<h3><a href="javascript:void(0);">精华日志</a></h3>

			<a title="社区首页"  href="/" target="_blank" class="right">社区首页</a>
			<a title="全部日志"  href="" target="_blank" class="right">全部日志</a>
			<a title="全部话题"  href="<?php echo U('Home/huatiindex');?>" target="_blank" class="right">全部话题</a>


		</div>
	</div>

	<div class="pin_list clear live on">
		<ul>

	<?php if(is_array($htinfo)): foreach($htinfo as $key=>$hv): ?><li >
	<div class="u">
		<a href="#" target="_blank"><img width="40" height="40" class="imgLoad" src="/Public/Home/images/avatar.jpg"  ></a>
		<div>
			<a href="#" class="t" target="_blank"><?php echo ($hv['user_name']); ?></a>
			<span><?php echo (date("Y/m/d H:i:s",$hv['pubtime'])); ?></span>
		</div>
	</div>

	<div class="c clear" >
		<div class="pp"><a href="<?php echo U('Home/huati/huatione',['id'=>$hv['htid']]);?>" target="_blank"><strong><?php echo ($hv['title']); ?></strong><br><?php echo ($hv['message']); ?></a></div>
		<a class="clear" href="<?php echo U('huati/huatione',['id'=>$hv['htid']]);?>" target="_blank">
		<?php if(is_array($hv['thumb'])): foreach($hv['thumb'] as $key=>$img): ?><img  class="imgLoad" src="<?php echo ($img['thumb_img']); ?>"  ><?php endforeach; endif; ?>	
		</a>
		<span>19个喜欢，<?php echo ($hv['commnum']); ?>条评论</span>
	</div>

</li><?php endforeach; endif; ?>

	<li >
	<div class="u">
		<a href="http://home.meishichina.com/space-9708878.html" target="_blank"><img width="40" height="40" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/009/70/88/78_avatar_middle.jpg?v=20161102" ></a>
		<div>
			<a href="http://home.meishichina.com/space-9708878.html" class="t" target="_blank">Mon姐</a>
			<span>6小时前</span>
		</div>
	</div>

	<div class="c clear" >
		<div class="pp"><a href="http://home.meishichina.com/pai-724745.html" target="_blank"><strong>Mon红薯脆酥</strong><br>悠闲自得下午茶…（早餐剩余红薯制作）。</a></div>
		<a class="clear" href="http://home.meishichina.com/pai-724745.html" target="_blank">
									<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102123755601.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/201611021237589.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102123804465.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102123808511.jpg@!c180">
						</a>
		<span>19个喜欢，14条评论</span>
	</div>

</li>

	<li class="clear">
	<div class="u">
		<a href="http://home.meishichina.com/space-8643489.html" target="_blank"><img width="40" height="40" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/008/64/34/89_avatar_middle.jpg?v=20161102" ></a>
		<div>
			<a href="http://home.meishichina.com/space-8643489.html" class="t" target="_blank">黑猫警长kitchen</a>
			<span>7小时前</span>
		</div>
	</div>

	<div class="c clear" >
		<div class="pp"><a href="http://home.meishichina.com/pai-724726.html" target="_blank">#ACA魔法立方料理大赛，我的立方料理，造型独特更立体#落枕、👓被妞昨晚不小心压断了😓香菇、难受，早起眯着眼睛......</a></div>
		<a class="clear" href="http://home.meishichina.com/pai-724726.html" target="_blank">
									<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102113100888.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102113104818.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102113114690.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102113116856.jpg@!c180">
												<b>5</b></a>
		<span>18个喜欢，16条评论</span>
	</div>

</li>
	<li >
	<div class="u">
		<a href="http://home.meishichina.com/space-6673714.html" target="_blank"><img width="40" height="40" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif" data-src="http://i3.meishichina.com/data/avatar/006/67/37/14_avatar_middle.jpg?v=20161102" ></a>
		<div>
			<a href="http://home.meishichina.com/space-6673714.html" class="t" target="_blank">祯祯宝贝</a>
			<span>7小时前</span>
		</div>
	</div>

	<div class="c clear" >
		<div class="pp"><a href="http://home.meishichina.com/pai-724721.html" target="_blank">处理好与人的关系，就是：看人长处、容人短处、帮人难处、记人好处 。人最大的修养，是知人不评人！上午好☀️</a></div>
		<a class="clear" href="http://home.meishichina.com/pai-724721.html" target="_blank">
									<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/2016110211273325.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102112739625.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102112744940.jpg@!c180">
												<img  class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/pai/2016/11/02/20161102112749294.jpg@!c180">
																		<b>6</b></a>
		<span>16个喜欢，16条评论</span>
	</div>

</li>


	
	




</ul>
</div>

<div class="big4_list big4_list2 live clear mt10">
<ul>
			  		  <li>
				  <a title="培根蒸金针菇" href="http://home.meishichina.com/space-6941259-do-blog-id-975602.html" target="_blank">
			  <i>
				  <img alt="培根蒸金针菇" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/02/20161102147807473627713.jpg">
			  </i>
			  <p>培根蒸金针菇</p>
		  </a>
		  <a title="情一诺" href="http://home.meishichina.com/space-6941259.html" target="_blank" class="u">情一诺</a>
		  </li>
		  		  		  <li>
				  <a title="一直美下去--皂角米紫薯银耳羹" href="http://home.meishichina.com/space-532464-do-blog-id-975601.html" target="_blank">
			  <i>
				  <img alt="一直美下去--皂角米紫薯银耳羹" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/02/20161102147807468690713.jpg">
			  </i>
			  <p>一直美下去--皂角米紫薯银耳羹</p>
		  </a>
		  <a title="sunshinewinnie" href="http://home.meishichina.com/space-532464.html" target="_blank" class="u">sunshinewinnie</a>
		  </li>
		  		  		  <li>
				  <a title="莲蓉花生铜锣烧（无泡打粉）" href="http://home.meishichina.com/space-8843388-do-blog-id-975591.html" target="_blank">
			  <i>
				  <img alt="莲蓉花生铜锣烧（无泡打粉）" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/02/20161102147806491960413.jpg">
			  </i>
			  <p>莲蓉花生铜锣烧（无泡打粉）</p>
		  </a>
		  <a title="美食诱惑馋猫" href="http://home.meishichina.com/space-8843388.html" target="_blank" class="u">美食诱惑馋猫</a>
		  </li>
		  		  		  <li>
				  <a title="香肠炒毛豆" href="http://home.meishichina.com/space-8819358-do-blog-id-975571.html" target="_blank">
			  <i>
				  <img alt="香肠炒毛豆" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147799039939013.jpg">
			  </i>
			  <p>香肠炒毛豆</p>
		  </a>
		  <a title="sourcehe" href="http://home.meishichina.com/space-8819358.html" target="_blank" class="u">sourcehe</a>
		  </li>
		  		  		  <li>
				  <a title="胡萝卜肉包" href="http://home.meishichina.com/space-8819358-do-blog-id-975569.html" target="_blank">
			  <i>
				  <img alt="胡萝卜肉包" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147798952885813.jpg">
			  </i>
			  <p>胡萝卜肉包</p>
		  </a>
		  <a title="sourcehe" href="http://home.meishichina.com/space-8819358.html" target="_blank" class="u">sourcehe</a>
		  </li>
		  		  		  <li>
				  <a title="蟹炒意面" href="http://home.meishichina.com/space-8819358-do-blog-id-975568.html" target="_blank">
			  <i>
				  <img alt="蟹炒意面" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147798860018513.jpg">
			  </i>
			  <p>蟹炒意面</p>
		  </a>
		  <a title="sourcehe" href="http://home.meishichina.com/space-8819358.html" target="_blank" class="u">sourcehe</a>
		  </li>
		  		  		  <li>
				  <a title="烤串" href="http://home.meishichina.com/space-6674146-do-blog-id-975563.html" target="_blank">
			  <i>
				  <img alt="烤串" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147798579873513.jpg">
			  </i>
			  <p>烤串</p>
		  </a>
		  <a title="舞之灵" href="http://home.meishichina.com/space-6674146.html" target="_blank" class="u">舞之灵</a>
		  </li>
		  		  		  <li>
				  <a title="茴香猪肉饺子" href="http://home.meishichina.com/space-8471333-do-blog-id-975559.html" target="_blank">
			  <i>
				  <img alt="茴香猪肉饺子" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147798446378513.jpg">
			  </i>
			  <p>茴香猪肉饺子</p>
		  </a>
		  <a title="緣豆兒" href="http://home.meishichina.com/space-8471333.html" target="_blank" class="u">緣豆兒</a>
		  </li>
		  		  		  <li>
				  <a title="暖暖的果茶陪你过冬-罗汉果冬瓜茶" href="http://home.meishichina.com/space-2119425-do-blog-id-975547.html" target="_blank">
			  <i>
				  <img alt="暖暖的果茶陪你过冬-罗汉果冬瓜茶" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147797010577013.jpg">
			  </i>
			  <p>暖暖的果茶陪你过冬-罗汉果冬瓜茶</p>
		  </a>
		  <a title="依然美食" href="http://home.meishichina.com/space-2119425.html" target="_blank" class="u">依然美食</a>
		  </li>
		  		  		  <li>
				  <a title="香烤五花肉" href="http://home.meishichina.com/space-7513584-do-blog-id-975545.html" target="_blank">
			  <i>
				  <img alt="香烤五花肉" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147796787473713.jpg">
			  </i>
			  <p>香烤五花肉</p>
		  </a>
		  <a title="Meggy跳舞的苹果" href="http://home.meishichina.com/space-7513584.html" target="_blank" class="u">Meggy跳舞的苹果</a>
		  </li>
		  		  		  <li>
				  <a title="美味托斯卡纳牛排" href="http://home.meishichina.com/space-425123-do-blog-id-975538.html" target="_blank">
			  <i>
				  <img alt="美味托斯卡纳牛排" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147796664751813.jpg">
			  </i>
			  <p>美味托斯卡纳牛排</p>
		  </a>
		  <a title="雪峰儿" href="http://home.meishichina.com/space-425123.html" target="_blank" class="u">雪峰儿</a>
		  </li>
		  		  		  <li>
				  <a title="秋葵鸡肉披萨" href="http://home.meishichina.com/space-425123-do-blog-id-975537.html" target="_blank">
			  <i>
				  <img alt="秋葵鸡肉披萨" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147796656596413.jpg">
			  </i>
			  <p>秋葵鸡肉披萨</p>
		  </a>
		  <a title="雪峰儿" href="http://home.meishichina.com/space-425123.html" target="_blank" class="u">雪峰儿</a>
		  </li>
		  		  		  <li>
				  <a title="蔓越莓海绵蛋糕" href="http://home.meishichina.com/space-425123-do-blog-id-975536.html" target="_blank">
			  <i>
				  <img alt="蔓越莓海绵蛋糕" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147796649228213.jpg">
			  </i>
			  <p>蔓越莓海绵蛋糕</p>
		  </a>
		  <a title="雪峰儿" href="http://home.meishichina.com/space-425123.html" target="_blank" class="u">雪峰儿</a>
		  </li>
		  		  		  <li>
				  <a title="红薯小餐包" href="http://home.meishichina.com/space-425123-do-blog-id-975535.html" target="_blank">
			  <i>
				  <img alt="红薯小餐包" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147796640446013.jpg">
			  </i>
			  <p>红薯小餐包</p>
		  </a>
		  <a title="雪峰儿" href="http://home.meishichina.com/space-425123.html" target="_blank" class="u">雪峰儿</a>
		  </li>
		  		  		  <li>
				  <a title="简单易做，一键就可以留住果香与甜蜜" href="http://home.meishichina.com/space-30984-do-blog-id-975527.html" target="_blank">
			  <i>
				  <img alt="简单易做，一键就可以留住果香与甜蜜" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/11/01/20161101147796581981713.jpg">
			  </i>
			  <p>简单易做，一键就可以留住果香与甜蜜</p>
		  </a>
		  <a title="西马栀子" href="http://home.meishichina.com/space-30984.html" target="_blank" class="u">西马栀子</a>
		  </li>
		  		  		  <li>
				  <a title="【蜜汁烤鸡翅】" href="http://home.meishichina.com/space-5986543-do-blog-id-975526.html" target="_blank">
			  <i>
				  <img alt="【蜜汁烤鸡翅】" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/10/31/20161031147792251424113.jpg">
			  </i>
			  <p>蜜汁烤鸡翅</p>
		  </a>
		  <a title="眉儿" href="http://home.meishichina.com/space-5986543.html" target="_blank" class="u">眉儿</a>
		  </li>
		  		  		  <li>
				  <a title="【奶香南瓜派】" href="http://home.meishichina.com/space-5986543-do-blog-id-975525.html" target="_blank">
			  <i>
				  <img alt="【奶香南瓜派】" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/10/31/20161031147792094737913.jpg">
			  </i>
			  <p>奶香南瓜派</p>
		  </a>
		  <a title="眉儿" href="http://home.meishichina.com/space-5986543.html" target="_blank" class="u">眉儿</a>
		  </li>
		  		  		  <li>
				  <a title="【海绵纸杯蛋糕】" href="http://home.meishichina.com/space-5986543-do-blog-id-975524.html" target="_blank">
			  <i>
				  <img alt="【海绵纸杯蛋糕】" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/10/31/20161031147792090668513.jpg">
			  </i>
			  <p>海绵纸杯蛋糕</p>
		  </a>
		  <a title="眉儿" href="http://home.meishichina.com/space-5986543.html" target="_blank" class="u">眉儿</a>
		  </li>
		  		  		  <li>
				  <a title="鲜虾云吞" href="http://home.meishichina.com/space-377703-do-blog-id-975514.html" target="_blank">
			  <i>
				  <img alt="鲜虾云吞" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/10/31/20161031147790905621313.jpg">
			  </i>
			  <p>鲜虾云吞</p>
		  </a>
		  <a title="绿野薄荷" href="http://home.meishichina.com/space-377703.html" target="_blank" class="u">绿野薄荷</a>
		  </li>
		  		  		  <li>
				  <a title="原味豆浆" href="http://home.meishichina.com/space-6674146-do-blog-id-975498.html" target="_blank">
			  <i>
				  <img alt="原味豆浆" class="imgLoad" src="http://static.meishichina.com/v6/img/blank.gif"  data-src="http://i3.meishichina.com/attachment/blog/2016/10/31/20161031147789907686313.jpg">
			  </i>
			  <p>原味豆浆</p>
		  </a>
		  <a title="舞之灵" href="http://home.meishichina.com/space-6674146.html" target="_blank" class="u">舞之灵</a>
		  </li>
		  		  		 </ul>
</div>
</div>
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
<!-- 引用全站js -->
<script type="text/javascript" src="/Public/Home/js/all.js?v=20161025"></script>
<script src="http://static.meishichina.com/v6/js/lib/jquery.sudoSlider.min.js" type="text/javascript" ></script>
<script type="text/javascript">
msc.user.init();
$("img.imgLoad").imgLoad();
msc.goTop.init();
$(".search_Text").click(function(){var f=$(this).attr("data-first");if(f=="on"){$(this).val("");$(this).attr("data-first","off")}$(this).removeClass("gay")});$("#search").click(function(){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}$("#form_search").submit()});$("#q").keydown(function(event){if(event.keyCode==13){if($("#q").val().replace(/\s+/g,"").replace("　","")!=""){$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}}});

var sudoSlider = $("#home_index_slider").sudoSlider({continuous: true,
auto: true,
effect: "fade",
speed: '700',
pause: '3000',
numeric: true,
resumePause: 2000,prevHtml:'<a class="prevBtn" href="javascript:void(0);"><i>&nbsp;</i></a>',nextHtml:'<a class="nextBtn" href="javascript:void(0);"><i>&nbsp;</i></a>'});

var sudoSlider2 = $("#w2_slider").sudoSlider({speed:600,slideCount:3,movecount:3,prevHtml:'<a class="prevBtn" href="javascript:void(0);"><i>&nbsp;</i></a>',nextHtml:'<a class="nextBtn" href="javascript:void(0);"><i>&nbsp;</i></a>',continuous: true});

$(".w1_1 >ul >li").hover(function(){
$(this).addClass("on").find(".sub").show();
},function(){
$(this).removeClass("on").find(".sub").hide();
});

$(".w3live .ui_title_wrap h2 a").click(function(){
		if($(this).parent().hasClass('on'))
		return false;
		else{
		$(this).closest('.w3live').find("h2").removeClass('on');
		$(this).parent().addClass('on');
		$(this).closest('.w3live').find('.live').hide();
		$(this).closest('.w3live').find(".live:eq("+$(this).parent().index()+")").fadeIn();
		}
		});

$(".w5 .ui_title_wrap h3 a").click(function(){
		if($(this).parent().hasClass('on'))
		return false;
		else{
		$(".w5 .ui_title_wrap h3").removeClass('on');
		$(this).parent().addClass('on');
		$(".w5 ul").hide();
		$(".w5 ul:eq("+$(this).parent().index()+")").fadeIn();
		}
		});

$(".w6 .ui_title_wrap h3 a").click(function(){
		if($(this).parent().hasClass('on'))
		return false;
		else{
		$(".w6 .ui_title_wrap h3").removeClass('on');
		$(this).parent().addClass('on');
		$(".w6 .live").hide();
		$(".w6 .live:eq("+$(this).parent().index()+")").fadeIn();
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
</body>
</html>