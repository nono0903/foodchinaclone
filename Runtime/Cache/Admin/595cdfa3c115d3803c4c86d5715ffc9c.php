<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>美食天下 管理中心 - 食材添加 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
   
    <span class="action-span"><a href="<?php echo U('Sc/slsclist');?>">食材列表</a></span>
    <span class="action-span1"><a href="__GROUP__">美食天下 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 食材分类添加 </span>
    <div style="clear:both"></div>
</h1>
<div class="form-div">
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>食材名称</td>
                <td><input type="text" name = "name" /></td>
            </tr> 
            <tr>
                <td>食材说明</td>
                <td><input type="text" name = "content" /></td>
            </tr>
            <tr>
                <td>分类名称</td>
                <td><input type="file" name = "img" /></td>
            </tr> 
            
            

        </table>
       <!-- <input type="hidden" name = "parent_sid" value=0 /> -->
        <input type="submit" value=" 添加 " class="button" />
    </form>
</div>


<div id="footer">
&copy; GPL </div>
</body>
</html>