<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
 #tuichu{
     margin-right:60px;
     margin-top:15px;
     float: right;
 }
 #icon{
     float: left;
 }
</style>

</head>
<body>
<div>
    <div id="icon">
        <img src="/Public/Admin/img/adminlogo.jpg" alt="美食天下" width=500 height=90 />
    </div>
    <div id="tuichu">

            欢迎您 <?php echo (cookie('name')); ?>
            <a href="<?php echo U('User/logout');?>" target="_top" class="fix-submenu">退出</a>

        
    </div>
</div>
</body>
</html>