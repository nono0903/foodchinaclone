<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<style>
#big{
  width:280px;
  border-left:2px dashed green;
  border-right:2px dashed green;
  border-radius:30px;
  background:#F0F0F0;

}
  #left{
    margin:10px 13px;
    border:2px solid gray;
    width:250px;
    height:155px;
    border-radius:30px;
    padding: 12px 25px;
    box-sizing:border-box;
    background:url('/Public/Admin/img/left-menu.jpg');
  }
  #left ul li{
      height:25px; 
      font-size:15px;
      font-weight: bold;
      margin-left: 25px;
  }
</style>
</head>
<body>
 <div id="big">
   <div id='left'>
    <h2>菜谱管理</h2>
    <hr/>
       <ul>
          <li class="menu-item"><a href="<?php echo U('Recipe/checkRecipe');?>" target="main-frame">审查菜谱</a></li>
          <li class="menu-item"><a href="<?php echo U('Recipe/repList');?>" target="main-frame">菜谱列表</a></li>
      </ul>
   </div>
   <div id='left'>
    <h2>菜式管理</h2>
    <hr/>
     <ul>
        <li class="menu-item"><a href="<?php echo U('Cai/caiAdd');?>" target="main-frame">添加菜式</a></li>
        <li class="menu-item"><a href="<?php echo U('Cai/caiList');?>" target="main-frame">菜式列表</a></li>
     </ul>

   </div>
   <div id='left'>
     <h3>食材管理</h3>
     <hr/>
      <ul>
          <li class="menu-item"><a href="<?php echo U('Sc/scadd');?>" target="main-frame">添加食材</a></li>
          <li class="menu-item"><a href="<?php echo U('Sc/sclist');?>" target="main-frame">食材列表</a></li>
          <li class="menu-item"><a href="<?php echo U('Sc/slscadd');?>" target="main-frame">添加时令食材</a></li>
          <li class="menu-item"><a href="<?php echo U('Sc/slsclist');?>" target="main-frame">食材列表</a></li>
      </ul>

   </div>
   <div id='left'>
     <h3>用户管理</h3>
     <hr/>
       <ul>
            <li class="menu-item"><a href="<?php echo U('user/userlist');?>" target="main-frame">修改密码</a></li>
       </ul>


   </div>
</div>
</body>
</html>