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
   <form method="post" action="">
        <table id='tb'>

            <tr>
                <td class="label">菜式分类</td>
                <td align='left'>
                    <input type="text" name="c_name" maxlength="60" size="28" value="" style="height: 25px;" />
                </td>
            </tr>
            <tr>
                <td colspan="2"><br/></td>
            </tr>
            <tr>
                <td class="label">上级分类</td>
                <td align="left">
                    <select  style="width: 100px;height: 29px;"  name="parent_cid">
                        <?php if(is_array($cat)): foreach($cat as $key=>$c): ?><option value ="<?php echo ($c['cid']); ?>"><?php echo ($c['c_name']); ?></option><?php endforeach; endif; ?>
                    </select>
                    <a href="<?php echo U('Admin/Cai/caiCat');?>">添加顶级菜式分类</a>
                </td>
            </tr>
             <tr>
                <td colspan="2"><br/></td>
            </tr>
            <tr>
                <td class="label"></td>
                <td>
                    <input type="image" src='/Public/Admin/img/btn_ok.jpg' width="120"  height="60" />
                </td>
            </tr>
        </table>
    </form>    
  </div>
</div>
</body>
</html>