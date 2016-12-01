<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	#wai{
		width: 100%;
		height:650px;
		background-image: url('/Public/Admin/img/back.png');
		border-radius:20px;
		box-sizing:border-box;
	}
    #big{
    	margin:0 auto;
    	width:85%;
    	height:550px;
    	background-color:#fff; 
      border-top: 2px dashed gray;
      box-sizing:border-box;
      padding-bottom: 20px;
      overflow: auto;
    }
    #tb{
    	border-collapse: collapse;
    	width: 80%;
      margin: auto;
    	font-size: 12px;
    }
    #tb td{
      font-size: 18px;
      color: gray;
    }
    #tb a{
      font-size:16px;
      text-decoration: none;
    }
    #tb a:hover{
      font-size:18x;
      text-decoration: underline;
    }
</style>
<body>
<div id='wai'><br><br>
  <div id='big'><br><br>
  	 <table border='1' id='tb'>
  	  		<tr>
  	  			<td>菜品ID</td>
  	  			<td>菜品名称</td>
  	  			<td>菜品图片</td>
  	  			<td>菜品简介</td>
  	  			<td>发布人</td>
  	  			<td>发布时间</td>
  	  			<td>详细</td>
  	  		</tr>
  	  		<?php if(is_array($list)): foreach($list as $key=>$l): ?><tr>
  	  			<td><?php echo ($l['rid']); ?></td>
  	  			<td><?php echo ($l['recipe_title']); ?></td>
  	  			<td><?php echo ($l['recipe_img']); ?></td>
            
  	  			<td><?php echo ($l['recipe_content']); ?></td>
  	  			<td><?php echo ($l['user_name']); ?></td>
  	  			<td><?php echo date('Y-m-d H:i:s',$l['pubtime']);?></td>
  	  			<td><a href="<?php echo U('Recipe/reDetails',array('rid'=>$l['rid']));?>">查看详细</a></td>
  	  		</tr><?php endforeach; endif; ?>
  	  	</table> 	
  </div>
</div>
</body>
</html>