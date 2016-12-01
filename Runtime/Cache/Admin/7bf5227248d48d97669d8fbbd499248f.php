<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>美食天下 管理中心 - 商品列表 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U('sc/slscadd');?>">添加新食材</a></span>
    <span class="action-span1"><a href="<?php echo U('index/index');?>">美食天下 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 食材列表 </span>
    <div style="clear:both"></div>
</h1>
<div class="form-div">
    <form action="" name="searchForm" method="post">
        <img src="/Public/admin/img/icon_search.gif" width="26" height="22" border="0" alt="search" />
        <!-- 分类 -->
        <select name="parent_sid">
            <option value="0">所有分类</option>
            <?php if(is_array($sc)): foreach($sc as $key=>$val): if($val["parent_sid"] == 0): ?><option value="<?php echo ($val["sid"]); ?>"><?php echo (str_repeat('&nbsp;&nbsp;',$val["lev"])); echo ($val["s_name"]); ?></option><?php endif; endforeach; endif; ?>
        </select>
        
        关键字 <input type="text" name="s_name" size="15" />
        <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>

<!-- 商品列表 -->

    <div class="list-div" id="listDiv"style="width:100%;height:500px;overflow:auto;">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th>编号</th>
                <th>食材名称</th>
                <th>备注</th>
                <th>图片地址</th>
                <th>食材类id</th>
                <th>编辑</th>
                <th>删除</th>
            </tr>
            <?php if(is_array($sc)): foreach($sc as $key=>$s): ?><tr>
                <td><?php echo ($s["slid"]); ?></td>
                <td class="first-cell"><?php echo ($s["name"]); ?></td>
                <td class="first-cell"><?php echo ($s["content"]); ?></td>
                <td class="first-cell"><?php echo ($s["img"]); ?></td>
                <td class="first-cell"><?php echo ($s["sid"]); ?></td>
                <td align="center" ><a href="">编辑</a></td>
                <td align="center" ><a href="<?php echo U('sc/slscdel',array('id'=>$s['slid']));?>"onclick="return del()">删除</a></td>
            
            </tr><?php endforeach; endif; ?>
        </table>

    
    </div>

<div id="footer">
共执行 7 个查询，用时 0.028849 秒，Gzip 已禁用，内存占用 3.219 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
<script>
    function del(){
        if(!confirm('是否确定删除')){
            return false;
        }
        return true;
    }
</script>
</html>