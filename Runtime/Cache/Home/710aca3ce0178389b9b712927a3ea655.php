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

<div class="w logo_wrap2">
<div class="logo_inner left">
<a href="<?php echo U('Home/Index/index');?>" title="美食天下">美食天下</a>
</div>
<div class="logo_current left">
<h1><a href="<?php echo U('Home/Shicai/index');?>" title="食材">食材</a></h1>
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
<li><a class="on" href="<?php echo U('Home/Shicai/index');?>" title="首页">首页</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/rql/" title="肉禽类">肉禽类</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/scl/" title="水产品">水产品</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/shucailei/" title="蔬菜">蔬菜</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/guopinlei/" title="果品">果品</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/mmdr/" title="米面豆乳">米面豆乳</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/tiaoweipinl/" title="调味品">调味品</a></li>
<li><a href="http://www.meishichina.com/YuanLiao/category/yaoshiqita/" title="药食及其他">药食及其他</a></li>
<li><a href="http://www.meishichina.com/yuanliao-search/" title="按字母A-Z检索">按字母A-Z检索</a></li>
</ul>
</div>
<div class="w mt10 clear">
<iframe width="100%" height="90" frameborder="0" scrolling="no" src="http://static.meishichina.com/v3/t1_1.html"></iframe>
</div>
<div class="wrap">
<div class="w clear">
<div class="category_box mt20">
<div class="category_sub clear">
<h3>时令与热门</h3>
<ul>
<li><a title="鸡肉的做法" href="http://www.meishichina.com/YuanLiao/JiRou/" target="_blank">鸡肉</a></li>
<li><a title="鸡翅的做法" href="http://www.meishichina.com/YuanLiao/JiChi/" target="_blank">鸡翅</a></li>
<li><a title="鸡蛋的做法" href="http://www.meishichina.com/YuanLiao/JiDan/" target="_blank">鸡蛋</a></li>
<li><a title="牛肉的做法" href="http://www.meishichina.com/YuanLiao/NiuRou/" target="_blank">牛肉</a></li>
<li><a title="猪肉的做法" href="http://www.meishichina.com/YuanLiao/ZhuRou/" target="_blank">猪肉</a></li>
<li><a title="排骨的做法" href="http://www.meishichina.com/YuanLiao/PaiGu/" target="_blank">排骨</a></li>
<li><a title="小龙虾的做法" href="http://www.meishichina.com/YuanLiao/XiaoLongXia/" target="_blank">小龙虾</a></li>
<li><a title="皮皮虾的做法" href="http://www.meishichina.com/YuanLiao/PiPiXia/" target="_blank">皮皮虾</a></li>
<li><a title="螃蟹的做法" href="http://www.meishichina.com/YuanLiao/PangXie/" target="_blank">螃蟹</a></li>
<li><a title="虾的做法" href="http://www.meishichina.com/YuanLiao/Xia/" target="_blank">虾</a></li>
<li><a title="扇贝的做法" href="http://www.meishichina.com/YuanLiao/ShanBei/" target="_blank">扇贝</a></li>
<li><a title="生蚝的做法" href="http://www.meishichina.com/YuanLiao/ShengHao/" target="_blank">生蚝</a></li>
<li><a title="黄瓜的做法" href="http://www.meishichina.com/YuanLiao/HuangGua/" target="_blank">黄瓜</a></li>
<li><a title="茄子的做法" href="http://www.meishichina.com/YuanLiao/QieZi/" target="_blank">茄子</a></li>
<li><a title="西红柿的做法" href="http://www.meishichina.com/YuanLiao/XiHongShi/" target="_blank">西红柿</a></li>
<li><a title="土豆的做法" href="http://www.meishichina.com/YuanLiao/TuDou/" target="_blank">土豆</a></li>
<li><a title="黑木耳的做法" href="http://www.meishichina.com/YuanLiao/HeiMuEr/" target="_blank">黑木耳</a><span>百搭配菜</span></li>
<li><a title="秋葵的做法" href="http://www.meishichina.com/YuanLiao/QiuKui/" target="_blank">秋葵</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>肉禽类</h3>
<b>共231种</b>
<ul>
<li><a title="猪肉的做法" href="http://www.meishichina.com/YuanLiao/ZhuRou/" target="_blank">猪肉</a></li>
<li><a title="排骨的做法" href="http://www.meishichina.com/YuanLiao/PaiGu/" target="_blank">排骨</a></li>
<li><a title="里脊的做法" href="http://www.meishichina.com/YuanLiao/LiJi/" target="_blank">里脊</a></li>
<li><a title="猪蹄的做法" href="http://www.meishichina.com/YuanLiao/ZhuTi/" target="_blank">猪蹄</a></li>
<li><a title="五花肉的做法" href="http://www.meishichina.com/YuanLiao/WuHuaRou/" target="_blank">五花肉</a></li>
<li><a title="肋排的做法" href="http://www.meishichina.com/YuanLiao/LeiPai/" target="_blank">肋排</a></li>
<li><a title="牛肉的做法" href="http://www.meishichina.com/YuanLiao/NiuRou/" target="_blank">牛肉</a></li>
<li><a title="牛排的做法" href="http://www.meishichina.com/YuanLiao/NiuPai/" target="_blank">牛排</a></li>
<li><a title="肥牛的做法" href="http://www.meishichina.com/YuanLiao/FeiNiu/" target="_blank">肥牛</a></li>
<li><a title="羊肉的做法" href="http://www.meishichina.com/YuanLiao/YangRou/" target="_blank">羊肉</a></li>
<li><a title="猪肝的做法" href="http://www.meishichina.com/YuanLiao/ZhuGan/" target="_blank">猪肝</a></li>
<li><a title="猪肘的做法" href="http://www.meishichina.com/YuanLiao/ZhuZhou/" target="_blank">猪肘</a></li>
<li><a title="火腿的做法" href="http://www.meishichina.com/YuanLiao/HuoTui/" target="_blank">火腿</a></li>
<li><a title="香肠的做法" href="http://www.meishichina.com/YuanLiao/XiangChang/" target="_blank">香肠</a></li>
<li><a title="培根的做法" href="http://www.meishichina.com/YuanLiao/PeiGen/" target="_blank">培根</a></li>
<li><a title="腊肉的做法" href="http://www.meishichina.com/YuanLiao/LaRou/" target="_blank">腊肉</a></li>
<li><a title="肉松的做法" href="http://www.meishichina.com/YuanLiao/RouSong/" target="_blank">肉松</a></li>
<li><a title="整鸡的做法" href="http://www.meishichina.com/YuanLiao/ZhengJi/" target="_blank">整鸡</a></li>
<li><a title="鸡肉的做法" href="http://www.meishichina.com/YuanLiao/JiRou/" target="_blank">鸡肉</a></li>
<li><a title="鸡翅的做法" href="http://www.meishichina.com/YuanLiao/JiChi/" target="_blank">鸡翅</a></li>
<li><a title="鸡腿的做法" href="http://www.meishichina.com/YuanLiao/JiTui/" target="_blank">鸡腿</a></li>
<li><a title="乌鸡的做法" href="http://www.meishichina.com/YuanLiao/WuJi/" target="_blank">乌鸡</a></li>
<li><a title="鸭肉的做法" href="http://www.meishichina.com/YuanLiao/YaRou/" target="_blank">鸭肉</a></li>
<li><a title="乳鸽的做法" href="http://www.meishichina.com/YuanLiao/RuGe/" target="_blank">乳鸽</a></li>
<li><a title="鸡蛋的做法" href="http://www.meishichina.com/YuanLiao/JiDan/" target="_blank">鸡蛋</a></li>
<li><a title="鸭蛋的做法" href="http://www.meishichina.com/YuanLiao/YaDan/" target="_blank">鸭蛋</a></li>
<li><a title="鸭脖的做法" href="http://www.meishichina.com/YuanLiao/YaBo/" target="_blank">鸭脖</a></li>
<li><a title="鹅肝的做法" href="http://www.meishichina.com/YuanLiao/EGan/" target="_blank">鹅肝</a></li>
<li><a title="鹌鹑的做法" href="http://www.meishichina.com/YuanLiao/AnChun/" target="_blank">鹌鹑</a></li>
<li><a title="更多肉禽类" href="http://www.meishichina.com/YuanLiao/category/rql/" target="_blank">更多</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>水产品类</h3>
<b>共288种</b>
<ul>
<li><a title="草鱼的做法" href="http://www.meishichina.com/YuanLiao/CaoYu/" target="_blank">草鱼</a></li>
<li><a title="鲤鱼的做法" href="http://www.meishichina.com/YuanLiao/LiYu/" target="_blank">鲤鱼</a></li>
<li><a title="鲫鱼的做法" href="http://www.meishichina.com/YuanLiao/JiYu/" target="_blank">鲫鱼</a></li>
<li><a title="带鱼的做法" href="http://www.meishichina.com/YuanLiao/DaiYu/" target="_blank">带鱼</a></li>
<li><a title="鲈鱼的做法" href="http://www.meishichina.com/YuanLiao/LuYu/" target="_blank">鲈鱼</a></li>
<li><a title="黄花鱼的做法" href="http://www.meishichina.com/YuanLiao/HuangHuaYu/" target="_blank">黄花鱼</a></li>
<li><a title="鳕鱼的做法" href="http://www.meishichina.com/YuanLiao/XueYu/" target="_blank">鳕鱼</a></li>
<li><a title="鲅鱼的做法" href="http://www.meishichina.com/YuanLiao/BoYu/" target="_blank">鲅鱼</a></li>
<li><a title="鲳鱼的做法" href="http://www.meishichina.com/YuanLiao/ChangYu/" target="_blank">鲳鱼</a></li>
<li><a title="鳗鱼的做法" href="http://www.meishichina.com/YuanLiao/ManYu/" target="_blank">鳗鱼</a></li>
<li><a title="三文鱼的做法" href="http://www.meishichina.com/YuanLiao/SanWenYu/" target="_blank">三文鱼</a></li>
<li><a title="胖头鱼的做法" href="http://www.meishichina.com/YuanLiao/PangTouYu/" target="_blank">胖头鱼</a></li>
<li><a title="罗非鱼的做法" href="http://www.meishichina.com/YuanLiao/LuoFeiYu/" target="_blank">罗非鱼</a></li>
<li><a title="秋刀鱼的做法" href="http://www.meishichina.com/YuanLiao/QiuDaoYu/" target="_blank">秋刀鱼</a></li>
<li><a title="多宝鱼的做法" href="http://www.meishichina.com/YuanLiao/DuoBaoYu/" target="_blank">多宝鱼</a></li>
<li><a title="鱼籽的做法" href="http://www.meishichina.com/YuanLiao/YuZi/" target="_blank">鱼籽</a></li>
<li><a title="鱼尾的做法" href="http://www.meishichina.com/YuanLiao/YuWei/" target="_blank">鱼尾</a></li>
<li><a title="鱼丸的做法" href="http://www.meishichina.com/YuanLiao/YuWan/" target="_blank">鱼丸</a></li>
<li><a title="小龙虾的做法" href="http://www.meishichina.com/YuanLiao/XiaoLongXia/" target="_blank">小龙虾</a></li>
<li><a title="虾的做法" href="http://www.meishichina.com/YuanLiao/Xia/" target="_blank">虾</a></li>
<li><a title="龙虾的做法" href="http://www.meishichina.com/YuanLiao/LongXia/" target="_blank">龙虾</a></li>
<li><a title="螃蟹的做法" href="http://www.meishichina.com/YuanLiao/PangXie/" target="_blank">螃蟹</a></li>
<li><a title="大闸蟹的做法" href="http://www.meishichina.com/YuanLiao/DaZhaXie/" target="_blank">大闸蟹</a></li>
<li><a title="皮皮虾的做法" href="http://www.meishichina.com/YuanLiao/PiPiXia/" target="_blank">皮皮虾</a></li>
<li><a title="牡蛎的做法" href="http://www.meishichina.com/YuanLiao/MuLi/" target="_blank">牡蛎</a></li>
<li><a title="扇贝的做法" href="http://www.meishichina.com/YuanLiao/ShanBei/" target="_blank">扇贝</a></li>
<li><a title="生蚝的做法" href="http://www.meishichina.com/YuanLiao/ShengHao/" target="_blank">生蚝</a></li>
<li><a title="蛤蜊的做法" href="http://www.meishichina.com/YuanLiao/HaLi/" target="_blank">蛤蜊</a></li>
<li><a title="蛏子的做法" href="http://www.meishichina.com/YuanLiao/ChengZi/" target="_blank">蛏子</a></li>
<li><a title="鲍鱼的做法" href="http://www.meishichina.com/YuanLiao/BaoYu/" target="_blank">鲍鱼</a></li>
<li><a title="海蜇的做法" href="http://www.meishichina.com/YuanLiao/HaiZhe/" target="_blank">海蜇</a></li>
<li><a title="鱿鱼的做法" href="http://www.meishichina.com/YuanLiao/YouYu/" target="_blank">鱿鱼</a></li>
<li><a title="海参的做法" href="http://www.meishichina.com/YuanLiao/HaiSen/" target="_blank">海参</a></li>
<li><a title="海带的做法" href="http://www.meishichina.com/YuanLiao/HaiDai/" target="_blank">海带</a></li>
<li><a title="紫菜的做法" href="http://www.meishichina.com/YuanLiao/ZiCai/" target="_blank">紫菜</a></li>
<li><a title="更多水产品" href="http://www.meishichina.com/YuanLiao/category/scl/" target="_blank">更多</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>蔬菜类</h3>
<b>共473种</b>
<ul>
<li><a title="白菜的做法" href="http://www.meishichina.com/YuanLiao/BaiCai/" target="_blank">白菜</a></li>
<li><a title="油菜的做法" href="http://www.meishichina.com/YuanLiao/YouCai/" target="_blank">油菜</a></li>
<li><a title="青菜的做法" href="http://www.meishichina.com/YuanLiao/QingCai/" target="_blank">青菜</a></li>
<li><a title="芹菜的做法" href="http://www.meishichina.com/YuanLiao/QinCai/" target="_blank">芹菜</a></li>
<li><a title="菠菜的做法" href="http://www.meishichina.com/YuanLiao/BoCai/" target="_blank">菠菜</a></li>
<li><a title="韭菜的做法" href="http://www.meishichina.com/YuanLiao/JiuCai/" target="_blank">韭菜</a></li>
<li><a title="大白菜的做法" href="http://www.meishichina.com/YuanLiao/DaBaiCai/" target="_blank">大白菜</a></li>
<li><a title="娃娃菜的做法" href="http://www.meishichina.com/YuanLiao/WaWaCai/" target="_blank">娃娃菜</a></li>
<li><a title="芦蒿的做法" href="http://www.meishichina.com/YuanLiao/LuHao/" target="_blank">芦蒿</a></li>
<li><a title="莴笋的做法" href="http://www.meishichina.com/YuanLiao/WoSun/" target="_blank">莴笋</a></li>
<li><a title="油麦菜的做法" href="http://www.meishichina.com/YuanLiao/YouMaiCai/" target="_blank">油麦菜</a></li>
<li><a title="芦笋的做法" href="http://www.meishichina.com/YuanLiao/LuSun/" target="_blank">芦笋</a></li>
<li><a title="土豆的做法" href="http://www.meishichina.com/YuanLiao/TuDou/" target="_blank">土豆</a></li>
<li><a title="红薯的做法" href="http://www.meishichina.com/YuanLiao/HongShu/" target="_blank">红薯</a></li>
<li><a title="芋头的做法" href="http://www.meishichina.com/YuanLiao/YuTou/" target="_blank">芋头</a></li>
<li><a title="洋葱的做法" href="http://www.meishichina.com/YuanLiao/YangCong/" target="_blank">洋葱</a></li>
<li><a title="萝卜的做法" href="http://www.meishichina.com/YuanLiao/LuoBo/" target="_blank">萝卜</a></li>
<li><a title="山药的做法" href="http://www.meishichina.com/YuanLiao/ShanYao/" target="_blank">山药</a></li>
<li><a title="西红柿的做法" href="http://www.meishichina.com/YuanLiao/XiHongShi/" target="_blank">西红柿</a></li>
<li><a title="藕的做法" href="http://www.meishichina.com/YuanLiao/Ou/" target="_blank">藕</a></li>
<li><a title="豆角的做法" href="http://www.meishichina.com/YuanLiao/DouJiao/" target="_blank">豆角</a></li>
<li><a title="茄子的做法" href="http://www.meishichina.com/YuanLiao/QieZi/" target="_blank">茄子</a></li>
<li><a title="青椒的做法" href="http://www.meishichina.com/YuanLiao/QingJiao/" target="_blank">青椒</a></li>
<li><a title="菜花的做法" href="http://www.meishichina.com/YuanLiao/CaiHua/" target="_blank">菜花</a></li>
<li><a title="豇豆的做法" href="http://www.meishichina.com/YuanLiao/JiangDou/" target="_blank">豇豆</a></li>
<li><a title="秋葵的做法" href="http://www.meishichina.com/YuanLiao/QiuKui/" target="_blank">秋葵</a></li>
<li><a title="毛豆的做法" href="http://www.meishichina.com/YuanLiao/MaoDou/" target="_blank">毛豆</a></li>
<li><a title="四季豆的做法" href="http://www.meishichina.com/YuanLiao/SiJiDou/" target="_blank">四季豆</a></li>
<li><a title="黄瓜的做法" href="http://www.meishichina.com/YuanLiao/HuangGua/" target="_blank">黄瓜</a></li>
<li><a title="冬瓜的做法" href="http://www.meishichina.com/YuanLiao/DongGua/" target="_blank">冬瓜</a></li>
<li><a title="西葫芦的做法" href="http://www.meishichina.com/YuanLiao/XiHuLu/" target="_blank">西葫芦</a></li>
<li><a title="黑木耳的做法" href="http://www.meishichina.com/YuanLiao/HeiMuEr/" target="_blank">黑木耳</a></li>
<li><a title="蘑菇的做法" href="http://www.meishichina.com/YuanLiao/MoGu/" target="_blank">蘑菇</a></li>
<li><a title="香菇的做法" href="http://www.meishichina.com/YuanLiao/XiangGu/" target="_blank">香菇</a></li>
<li><a title="金针菇的做法" href="http://www.meishichina.com/YuanLiao/JinZhenGu/" target="_blank">金针菇</a></li>
<li><a title="杏鲍菇的做法" href="http://www.meishichina.com/YuanLiao/XingBaoGu/" target="_blank">杏鲍菇</a></li>
<li><a title="茭白的做法" href="http://www.meishichina.com/YuanLiao/JiaoBai/" target="_blank">茭白</a></li>
<li><a title="竹笋的做法" href="http://www.meishichina.com/YuanLiao/ZhuSun/" target="_blank">竹笋</a></li>
<li><a title="荠菜的做法" href="http://www.meishichina.com/YuanLiao/JiCai/" target="_blank">荠菜</a></li>
<li><a title="香椿的做法" href="http://www.meishichina.com/YuanLiao/XiangChun/" target="_blank">香椿</a></li>
<li><a title="马兰头的做法" href="http://www.meishichina.com/YuanLiao/MaLanTou/" target="_blank">马兰头</a></li>
<li><a title="更多蔬菜" href="http://www.meishichina.com/YuanLiao/category/shucailei/" target="_blank">更多</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>果品类</h3>
<b>共196种</b>
<ul>
<li><a title="菠萝的做法" href="http://www.meishichina.com/YuanLiao/BoLuo/" target="_blank">菠萝</a></li>
<li><a title="草莓的做法" href="http://www.meishichina.com/YuanLiao/CaoMei/" target="_blank">草莓</a></li>
<li><a title="芒果的做法" href="http://www.meishichina.com/YuanLiao/MangGuo/" target="_blank">芒果</a></li>
<li><a title="木瓜的做法" href="http://www.meishichina.com/YuanLiao/MuGua/" target="_blank">木瓜</a></li>
<li><a title="牛油果的做法" href="http://www.meishichina.com/YuanLiao/NiuYouGuo/" target="_blank">牛油果</a></li>
<li><a title="百香果的做法" href="http://www.meishichina.com/YuanLiao/BaiXiangGuo/" target="_blank">百香果</a></li>
<li><a title="栗子的做法" href="http://www.meishichina.com/YuanLiao/LiZi/" target="_blank">栗子</a></li>
<li><a title="花生的做法" href="http://www.meishichina.com/YuanLiao/HuaSheng/" target="_blank">花生</a></li>
<li><a title="腰果的做法" href="http://www.meishichina.com/YuanLiao/YaoGuo/" target="_blank">腰果</a></li>
<li><a title="核桃的做法" href="http://www.meishichina.com/YuanLiao/HeTao/" target="_blank">核桃</a></li>
<li><a title="芝麻的做法" href="http://www.meishichina.com/YuanLiao/ZhiMa/" target="_blank">芝麻</a></li>
<li><a title="莲子的做法" href="http://www.meishichina.com/YuanLiao/LianZi/" target="_blank">莲子</a></li>
<li><a title="枸杞的做法" href="http://www.meishichina.com/YuanLiao/GouQi/" target="_blank">枸杞</a></li>
<li><a title="桂圆的做法" href="http://www.meishichina.com/YuanLiao/GuiYuan/" target="_blank">桂圆</a></li>
<li><a title="黑芝麻的做法" href="http://www.meishichina.com/YuanLiao/HeiZhiMa/" target="_blank">黑芝麻</a></li>
<li><a title="红枣的做法" href="http://www.meishichina.com/YuanLiao/HongZao/" target="_blank">红枣</a></li>
<li><a title="蓝莓的做法" href="http://www.meishichina.com/YuanLiao/LanMei/" target="_blank">蓝莓</a></li>
<li><a title="更多果品" href="http://www.meishichina.com/YuanLiao/category/guopinlei/" target="_blank">更多</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>米面豆乳</h3>
<b>共180种</b>
<ul>
<li><a title="糯米的做法" href="http://www.meishichina.com/YuanLiao/NuoMi/" target="_blank">糯米</a></li>
<li><a title="小米的做法" href="http://www.meishichina.com/YuanLiao/XiaoMi/" target="_blank">小米</a></li>
<li><a title="荞麦米的做法" href="http://www.meishichina.com/YuanLiao/QiaoMaiMi/" target="_blank">荞麦米</a></li>
<li><a title="玉米的做法" href="http://www.meishichina.com/YuanLiao/YuMi/" target="_blank">玉米</a></li>
<li><a title="燕麦的做法" href="http://www.meishichina.com/YuanLiao/YanMai/" target="_blank">燕麦</a></li>
<li><a title="米粉的做法" href="http://www.meishichina.com/YuanLiao/MiFen/" target="_blank">米粉</a></li>
<li><a title="面条的做法" href="http://www.meishichina.com/YuanLiao/MianTiao/" target="_blank">面条</a></li>
<li><a title="意大利面的做法" href="http://www.meishichina.com/YuanLiao/YiDaLiMian/" target="_blank">意大利面</a></li>
<li><a title="糯米粉的做法" href="http://www.meishichina.com/YuanLiao/NuoMiFen/" target="_blank">糯米粉</a></li>
<li><a title="红豆的做法" href="http://www.meishichina.com/YuanLiao/HongDou/" target="_blank">红豆</a></li>
<li><a title="绿豆的做法" href="http://www.meishichina.com/YuanLiao/LvDou/" target="_blank">绿豆</a></li>
<li><a title="黄豆的做法" href="http://www.meishichina.com/YuanLiao/HuangDou/" target="_blank">黄豆</a></li>
<li><a title="豆腐的做法" href="http://www.meishichina.com/YuanLiao/DouFu/" target="_blank">豆腐</a></li>
<li><a title="豆浆的做法" href="http://www.meishichina.com/YuanLiao/DouJiang/" target="_blank">豆浆</a></li>
<li><a title="腐竹的做法" href="http://www.meishichina.com/YuanLiao/FuZhu/" target="_blank">腐竹</a></li>
<li><a title="油豆腐的做法" href="http://www.meishichina.com/YuanLiao/YouDouFu/" target="_blank">油豆腐</a></li>
<li><a title="烤麸的做法" href="http://www.meishichina.com/YuanLiao/KaoFu/" target="_blank">烤麸</a></li>
<li><a title="豆皮的做法" href="http://www.meishichina.com/YuanLiao/DouPi/" target="_blank">豆皮</a></li>
<li><a title="淡奶油的做法" href="http://www.meishichina.com/YuanLiao/DanNaiYou/" target="_blank">淡奶油</a></li>
<li><a title="奶酪的做法" href="http://www.meishichina.com/YuanLiao/NaiLao/" target="_blank">奶酪</a></li>
<li><a title="酸奶的做法" href="http://www.meishichina.com/YuanLiao/SuanNai/" target="_blank">酸奶</a></li>
<li><a title="牛奶的做法" href="http://www.meishichina.com/YuanLiao/NiuNai/" target="_blank">牛奶</a></li>
<li><a title="芝士的做法" href="http://www.meishichina.com/YuanLiao/ZhiShi/" target="_blank">芝士</a></li>
<li><a title="巧克力的做法" href="http://www.meishichina.com/YuanLiao/QiaoKeLi/" target="_blank">巧克力</a></li>
<li><a title="粉皮的做法" href="http://www.meishichina.com/YuanLiao/FenPi/" target="_blank">粉皮</a></li>
<li><a title="粉丝的做法" href="http://www.meishichina.com/YuanLiao/FenSi/" target="_blank">粉丝</a></li>
<li><a title="年糕的做法" href="http://www.meishichina.com/YuanLiao/NianGao/" target="_blank">年糕</a></li>
<li><a title="粉条的做法" href="http://www.meishichina.com/YuanLiao/FenTiao/" target="_blank">粉条</a></li>
<li><a title="河粉的做法" href="http://www.meishichina.com/YuanLiao/HeFen/" target="_blank">河粉</a></li>
<li><a title="更多米面豆乳" href="http://www.meishichina.com/YuanLiao/category/mmdr/" target="_blank">更多</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>调味品</h3>
<b>共178种</b>
<ul>
<li><a title="番茄酱的做法" href="http://www.meishichina.com/YuanLiao/FanQieJiang/" target="_blank">番茄酱</a></li>
<li><a title="番茄沙司的做法" href="http://www.meishichina.com/YuanLiao/FanQieShaSi/" target="_blank">番茄沙司</a></li>
<li><a title="豆瓣酱的做法" href="http://www.meishichina.com/YuanLiao/DouBanJiang/" target="_blank">豆瓣酱</a></li>
<li><a title="豆瓣的做法" href="http://www.meishichina.com/YuanLiao/DouBan/" target="_blank">豆瓣</a></li>
<li><a title="豆豉的做法" href="http://www.meishichina.com/YuanLiao/DouChi/" target="_blank">豆豉</a></li>
<li><a title="芥末酱的做法" href="http://www.meishichina.com/YuanLiao/JieMoJiang/" target="_blank">芥末酱</a></li>
<li><a title="蜂蜜的做法" href="http://www.meishichina.com/YuanLiao/FengMi/" target="_blank">蜂蜜</a></li>
<li><a title="醪糟的做法" href="http://www.meishichina.com/YuanLiao/LaoZao/" target="_blank">醪糟</a></li>
<li><a title="酱油的做法" href="http://www.meishichina.com/YuanLiao/JiangYou/" target="_blank">酱油</a></li>
<li><a title="鸡精的做法" href="http://www.meishichina.com/YuanLiao/JiJing/" target="_blank">鸡精</a></li>
<li><a title="干黄酱的做法" href="http://www.meishichina.com/YuanLiao/GanHuangJiang/" target="_blank">干黄酱</a></li>
<li><a title="更多调味品" href="http://www.meishichina.com/YuanLiao/category/tiaoweipinl/" target="_blank">更多</a></li>
</ul>
</div>
<div class="category_sub clear">
<h3>药食</h3>
<b>共80种</b>
<ul>
<li><a title="燕窝的做法" href="http://www.meishichina.com/YuanLiao/YaWo/" target="_blank">燕窝</a></li>
<li><a title="阿胶的做法" href="http://www.meishichina.com/YuanLiao/EJiao/" target="_blank">阿胶</a></li>
<li><a title="雪蛤的做法" href="http://www.meishichina.com/YuanLiao/XueHa/" target="_blank">雪蛤</a></li>
<li><a title="茯苓的做法" href="http://www.meishichina.com/YuanLiao/FuLing/" target="_blank">茯苓</a></li>
<li><a title="党参的做法" href="http://www.meishichina.com/YuanLiao/DangShen/" target="_blank">党参</a></li>
<li><a title="当归的做法" href="http://www.meishichina.com/YuanLiao/DangGui/" target="_blank">当归</a></li>
<li><a title="银耳的做法" href="http://www.meishichina.com/YuanLiao/YinEr/" target="_blank">银耳</a></li>
<li><a title="枣的做法" href="http://www.meishichina.com/YuanLiao/Zao/" target="_blank">枣</a></li>
<li><a title="百合的做法" href="http://www.meishichina.com/YuanLiao/BaiHe/" target="_blank">百合</a></li>
<li><a title="黄芪的做法" href="http://www.meishichina.com/YuanLiao/HuangQi/" target="_blank">黄芪</a></li>
<li><a title="花胶的做法" href="http://www.meishichina.com/YuanLiao/HuaJiao/" target="_blank">花胶</a></li>
<li><a title="更多药食" href="http://www.meishichina.com/YuanLiao/category/yaoshiqita/" target="_blank">更多</a></li>
</ul>
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
<script src="http://su.bdimg.com/static/dspui/js/ue.js" type="text/javascript"></script>
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