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
        width: 700px;
        margin:50px auto;
   
        font-size: 12px;
    }
    #tb td,th{
      font-size: 18px;
      color: gray;
      text-align:center;
      height: 30px;

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
   /*搜索div*/
   #search{
      width: 500px;
      height: 40px;
      float:right;
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
    <div id='search'>
    <form method="post" action="<?php echo U('Admin/Cai/search');?>" name="listForm">
        <!-- 分类 -->
        <select name="index">
            <option value="cid">菜式ID</option>
            <option value="c_name">菜式名称</option>
         </select>
        <input type='text' name='search' placeholder="请输入要搜索的内容" id='searchInput'>   
        <input type='image' src="/Public/Admin/img/search-icon.jpg" width='40' height='25' id='btn_img'/>
    </form>
 
    </div>
    <br/>
        <table id='tb' border=1>
            <tr>
                <th>菜式分类Id</th>
                <th>菜式分类名称</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($list)): foreach($list as $key=>$l): ?><tr>
                <td class="first-cell">
                    <span align="center"><?php echo ($l[cid]); ?></span>
                </td>
                <td align="center">
                   <span style="float: left;"><?php echo (str_repeat('&nbsp;',$l['lev']*2)); echo ($l['lev']+1); ?>--<?php echo ($l['c_name']); ?></span><!-- <?php echo str_repeat('',$l.lev);?> -->
                </td>
                <td align="center">
                <a href="<?php echo U('Admin/Cai/caiEdit',array('cid'=>$l[cid]));?>" title="编辑">编辑</a> |
                <a href="<?php echo U('Admin/Cai/caidel',array('cid'=>$l[cid]));?>" title="删除" onclick='return del()'>删除</a> 
                </td>
            </tr><?php endforeach; endif; ?>
            <tr>
                <td colspan='3' align='right'><a href="<?php echo U('Cai/caiList');?>">显示全部</a></td>
            </tr>
        </table>

  </div>

</div>
</body>
<script type="text/javascript">
    function del(){
        if(!confirm("是否删除该分类？")){
             return false;
        }
        return true
    }
</script>
</html>