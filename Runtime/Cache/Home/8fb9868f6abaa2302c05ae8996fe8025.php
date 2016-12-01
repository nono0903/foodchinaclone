<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>煎土司合_随拍-美食天下</title> 
  <meta name="keywords" content="" /> 
  <meta name="description" content="" /> 
  <meta name="renderer" content="webkit" /> 
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/all.css" /> 
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/pai2.css" /> 
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/comment.css" /> 
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
    <h1><a href="http://home.meishichina.com/" title="社区">社区</a></h1> 
   </div> 
   <div class="logo_search right"> 
    <!-- <form id="form_search" action="http://home.meishichina.com/search/" method="post" target="_blank">  -->
    <!--  <div class="searchBox J_search">
      <a href="javascript:;" title="搜索" class="search_Btn J_searchBTN right" id="search">搜索</a>
      <input type="text" id="q" class="search_Text J_searchTxt right gay" data-first="on" /> 
     </div>  -->
    <!-- </form> --> 
   </div> 
   <div class="logo_nav"> 
    <a href="http://home.meishichina.com/" title="社区广场">社区广场<i></i><b></b></a> 
    <a class="on" href="http://home.meishichina.com/pai.html" title="话题">话题<i></i><b></b></a> 
    <a href="http://home.meishichina.com/blog/" title="日志">日志<i></i><b></b></a> 
    <a href="http://home.meishichina.com/event/" title="活动">活动<i></i><b></b></a> 
   </div> 
  </div> 
  <div class="nav_wrap2"> 
   <ul> 
    <li><a href="http://home.meishichina.com/pai.html" title="全部">全部</a></li> 
    <li><a class="on" href="http://home.meishichina.com/pai-meishi.html" title="美食随手拍">美食随手拍</a></li> 
    <li><a href="http://home.meishichina.com/pai-hongbei.html" title="烘焙圈">烘焙圈</a></li> 
    <li><a href="http://home.meishichina.com/pai-mama.html" title="妈妈派">妈妈派</a></li> 
    <li><a href="http://home.meishichina.com/pai-yinshi.html" title="饮食健康">饮食健康</a></li> 
    <li><a href="http://home.meishichina.com/pai-chuyi.html" title="厨艺交流">厨艺交流</a></li> 
    <li><a href="http://home.meishichina.com/pai-zuimei.html" title="最美之物">最美之物</a></li> 
    <li><a href="http://home.meishichina.com/pai-shiguang.html" title="美好时光">美好时光</a></li> 
    <li><a href="http://home.meishichina.com/pai-help.html" title="帮助与反馈">帮助与反馈</a></li> 
   </ul> 
  </div> 
  <div class="w mt10 clear"> 
   <iframe width="100%" height="90" frameborder="0" scrolling="no" src="/Public/Home/images/9905.jpg"></iframe> 
  </div> 
  <div class="wrap"> 
   <div class="w clear"> 
    <div class="space_left"> 
     <div class="ui_title"> 
      <div class="ui_title_wrap clear "> 
       <h2 class="on">美食随手拍</h2> 
       <a title="精华" href="#" class="right" rel="nofollow">精华</a> 
       <a title="热门" href="#" class="right" rel="nofollow">热门</a> 
       <a title="最新" href="#" class="right">最新</a> 
       <a title="全部" href="#" class="right">全部</a> 
       
      </div> 
     </div> 
     <div class="pai_box"> 

      <a class="img" title="<?php echo ($row['user_name']); ?>" href="" target="_blank"><img src="/Public/Home/images/yhimg.jpg" class="imgLoad" width="48" height="48" style="display: block;" /></a> 
      <p class="u"> <a target="_blank" href="" class="t"><?php echo ($row['user_name']); ?></a>　　 2016-11-10 09:21:09 </p> 
      <p class="c"> <span class="s2">精</span> <strong><?php echo ($row['title']); ?></strong> <br /> <span class="subject"><?php echo ($row['message']); ?></span> </p>
      <div class="pic"> 
      <?php if(is_array($imgs)): foreach($imgs as $key=>$img): ?><img src="<?php echo ($img['img']); ?>" class="imgLoad" style="display: block;" /><?php endforeach; endif; ?>

      </div> 
     </div> 
     <div class="pai_event"> 
      <img src="/Public/Home/images/pai_event.png" /> 已参加&nbsp;
      <a href="#" target="_blank" title="魔法立方料理，造型大赛">魔法立方料理，造型大赛</a> 
     </div> 
     <div class="recipeArction mt10 clear"> 
      <ul class="collect_da"> 
       <li class="lik"><a title="喜欢" href="javascript:void(0);" class="J_lik  " data=""><i></i><span>29</span>人喜欢</a></li> 
       <li class="fav"><a title="收藏" href="javascript:void(0);" class="J_fav  " data=""><i></i><span>0</span>人收藏</a></li> 
       <li style="width:1px;border-right: 1px solid #ddd; height: 30px; margin: 2px 10px; overflow: hidden;"></li> 
       <li class="shar"><a title="分享到微信" href="javascript:void(0);" class="J_s4" data="bds_weixin"><i></i>微信</a></li> 
       <li class="shar"><a title="分享到QQ好友" href="javascript:void(0);" class="J_s2" data="bds_sqq"><i></i>QQ好友</a></li> 
       <li class="shar"><a title="分享到QQ空间" href="javascript:void(0);" class="J_s3" data="bds_qzone"><i></i>QQ空间</a></li> 
       <li class="shar"><a title="分享到新浪微博" href="javascript:void(0);" class="J_s1" data="bds_tsina"><i></i>新浪微博</a></li> 
      </ul> 
      <div class="bdsharebuttonbox bdshare-button-style0-16" id="bdshare" data-bd-bind="1478835921558"> 
       <a title="分享到新浪微博" href="#" class="bds_tsina" id="bds_tsina" data-cmd="tsina"></a>
       <a title="分享到QQ空间" href="#" class="bds_qzone" id="bds_qzone" data-cmd="qzone"></a>
       <a title="分享到QQ好友" href="#" class="bds_sqq" id="bds_sqq" data-cmd="sqq"></a>
       <a data-cmd="weixin" id="bds_weixin" class="bds_weixin" href="#" title="分享到微信"></a> 
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
     <div id="comment"> 
      <div class="comment-wrap clear" data-dom="wrap"> 
       <div class="comment-list "> 
        <div data-dom="list"> 
         <ul style=""> 
         
        <?php if(is_array($comms)): foreach($comms as $key=>$comm): ?><li data-id="14044651"> 
           <div class="pic">
            <a title="点击进入 <?php echo ($comm["user_name"]); ?> 的主页" target="_blank" href="#"><img height="48" width="48" src="/Public/Home/images/avatar.jpg" /></a>
           </div> 
           <div class="detail"> 
            <div class="tools"> 
             <div class="left">
              <a target="_blank" href="" title="点击进入 <?php echo ($comm["user_name"]); ?> 的主页"><?php echo ($comm["user_name"]); ?></a>
              <span data-time="<?php echo ($comm["pubtime"]); ?>" class="subtime"><?php echo (date('Y/m/d',$comm["pubtime"])); ?></span>
             </div> 
            </div> 
            <div class="content">
              <?php echo ($comm["comm"]); ?> 
            </div> 
           </div> </li><?php endforeach; endif; ?>

          

         </ul> 
        </div> 
       </div> 
       <div class="comment-pai" > 
        <img src="/Public/Home/images/noavatar_small.jpg" class="comment-pai-img" /> 
        <div data-dom="add" class="comment-post comment-add"> 
         <div class="comment-post-text"> 
          <div class="comment-post-text-inner">

            <form action="" method="post" id="comment">
            <textarea name="comm" id="comm" cols="50" rows="10"class="text ui-webkit-scrollbar"></textarea><br/>
            <input type="hidden" name="user_name" id="un" value="<?php echo (cookie('user_name')); ?>">
            <input type="hidden" name="user_id" id="ui" value="<?php echo (cookie('user_id')); ?>">
            <input type="hidden" name="htid" id="hti" value="<?php echo ($row['htid']); ?>">
            

          </div>

         </div>  
         <input type="submit" value="提交留言"style="margin-left: 90%;margin-top: 5px;">
          </form> 
       
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
    </div>
   </div>
  </div>

 </body>
<script src="/Public/Home/js/jquery.js"></script>
<script>
  $('#comment').submit(function(){
        var data = {
            user_id:$('#ui').val(),
            user_name:$('#un').val(),
            htid:$('#hti').val(),
            comm:$('#comm').val()
        };  
        
        $.post('<?php echo U("htcomm");?>',data,function(res){
           alert(res);
        });
        return false;
  });



</script>


</html>