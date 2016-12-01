<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>美食天下-管理菜谱列表</title>
    <script type="text/javascript" src='/Public/Home/js/jQuery.js'></script>
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
    #big font{
        font-size:16px;
        color: orange;
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
      text-align:center;
      border-bottom: 1px solid gray;

    }
    #tb a{
      font-size:16px;
      text-decoration: none;
    }
    #tb a:hover{
      font-size:18x;
      text-decoration: underline;
    }
   #pic{
    width: 150px;
    height:150px;
    border:1px solid red;
    margin-left: 18%;
   }
   #search{
     display: inline;
     float: right;
      width: 480px;
      height: 60px;
      margin-left: 200px;
   }
   #index,#searchInput{
    width:100px;
    height: 20px;
    border-color: #8194AA;
   }
   #searchInput{
    width: 150px;
    border-color: #CBD6E5;
   }
   input,img{vertical-align:middle;}
</style>
<body>
<div id='wai'><br><br>
  <div id='big'><br><br>
  <h2 style='margin-left: 20px;'><font >以下菜品均为审核通过菜品：</h2>
  <div id='search'>

  <!-- 索引字段 -->
  <form method="" action="<?php echo U('Admin/Recipe/search');?>">
    <span>搜索:</span>
  <select name='index' id='index'>
      <option value="rid">菜品ID</option>
      <option value="recipe_title">菜品名称</option>
      <option value="user_name">发布人</option>
  </select>
  <input type='text' name='search' placeholder="请输入要搜索的内容" id='searchInput'>   
  <input type='image' src="/Public/Admin/img/search-icon.jpg" width='40' height='25' id='btn_img'/>
</form>
  </div>
     <table id='tb'>
            <tr>
                <td>菜品ID</td>
                <td>菜品名称</td>
                <td>菜品图片</td>
                <td>发布人</td>
                <td>发布时间</td>
                <td>操作</td>
            </tr>
            <?php if(is_array($recipe)): foreach($recipe as $key=>$l): ?><tr>
                <td><?php echo ($l['rid']); ?></td>
                <td><?php echo ($l['recipe_title']); ?></td>
                <td><div id='pic'><?php echo ($l['thumb_img']); ?></div></td>
                <td><?php echo ($l['user_name']); ?></td>
                <td><?php echo date('Y-m-d H:i:s',$l['pubtime']);?></td>
                <td align="center"><a href="<?php echo U('Recipe/delReason',array('rid'=>$l['rid']));?>">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </table>    
  </div>
</div>
</body>
<script>
  /*  function del(){
        if(!confirm('是否确定删除该菜品？')){
            return false;
        }else{
            return window.location.href = "<?php echo U('Recipe/delReson');?>";
        }
    }*/
    // 点击搜索按钮搜索
       
      /* $('#btn_img').click(function(){
        var index = $('#index').val();
        var search = $('#searchInput').val();
        var url = 'http://food.com/index.php/Admin/Recipe/search?index='+index+'&search='+search;
            $.get(url,function(msg){
                  $.each(msg,function($k,$v){
                       document.write(JSON_parse($v));
                  });
            },'html');
        });*/

    
</script>

</html>