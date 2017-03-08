<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表格展示</title>

    <!--引入文件-->
    <link href="/TP_EXCEL/Public/CSS/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="/TP_EXCEL/Public/CSS/signin.css" rel="stylesheet">
</head>
<body>
<div class="page-header">
    <h1>TP DEMO
        <small>Excel导入导出练习</small>
    </h1>
</div>

<table class="table">
    <tr>
        <td><h4><b>平台名称</b></h4></td>
        <td><h4><b>帐号</b></h4></td>
        <td><h4><b>密码</b></h4></td>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["account"]); ?></td>
            <td><?php echo ($vo["password"]); ?></td>
        </tr><?php endforeach; endif; ?>
</table>



<form action="/TP_EXCEL/index.php/Home/Index/export" class="form-signin">
    <button class="btn btn-lg btn-primary btn-block">导出数据库数据</button>
</form>

</body>
</html>