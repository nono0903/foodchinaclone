<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>美食管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="Text/Javascript" language="JavaScript">

if (window.top != window) {
    window.top.location.href = document.location.href;
}
</script>
<style type="text/css">
#big{
	background-image: url('/Public/Admin/img/back.jpg');
}
</style>

<frameset rows="85,*" framespacing="0" border="0" id='big'>
    <frame src="/index.php/Admin/Index/top.html" id="header-frame" name="header-frame" frameborder="no" scrolling="no">
    <frameset cols="300,*" framespacing="0" border="0" id="frame-body">
        <frame src="/index.php/Admin/Index/menu.html" id="menu-frame" name="menu-frame" frameborder="no">
        <frame src="/index.php/Admin/Index/main.html" id="main-frame" name="main-frame" frameborder="no">
    </frameset>
</frameset>
</head>
<body >
</body>
</html>