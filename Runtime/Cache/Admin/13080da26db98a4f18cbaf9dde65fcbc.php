<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>美食天下-管理菜谱列表</title>
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
    }
    #big font{
        font-size:16px;
        color: orange;
    }
    #tb{
        border-collapse: collapse;
        width: 340px;
        margin:50px auto;
        font-size: 12px;
    }
    #tb td{
      font-size: 18px;
      color: gray;
      text-align:center;

    }
    a{
      font-size:16px;
      text-decoration: none;
    }
    a:hover{
      font-size:18x;
      text-decoration: underline;
    }
   #pic{
    width: 150px;
    height:150px;
    border:1px solid red;
    margin-left: 18%;
   }
   
  
</style>
<body>
<div id='wai'><br><br>
  <div id='big'><br><br>
   <form action="" method="post">
        <table id='tb'>
            <tr>
                <td>食材名称:</td>
                <td><input type="text"name ="s_name" placeholder="食材名称" /></td>
            </tr>
            <tr>
                <td>所属分类:</td>
                <td>
                    <select name="parent_sid">
                        <option value="0">请选择分类</option>
                        <?php if(is_array($sc)): foreach($sc as $key=>$s): ?><option value="<?php echo ($s["sid"]); ?>"><?php echo ($s["s_name"]); ?></option><?php endforeach; endif; ?>   
                    </select>  <a href="<?php echo U('Admin/Sc/sccatadd');?>">添加顶级菜式分类</a>
                </td>
            </tr> 
            <tr>
                <td colspan="2">
                    <input type="image" src='/Public/Admin/img/btn_ok.jpg' width="120"  height="60"/> 
                </td>
            </tr>       
        </table>
       
       
    </form>   
  </div>
</div>
</body>
</html>