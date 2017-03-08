<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excel导入导出</title>

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

<form method="post" action="/TP_EXCEL/Home/Index/import" class="form-signin" enctype="multipart/form-data" >
    <input name="file_stu" type="file" class="form-control">
    <button class="btn btn-lg btn-primary btn-block">导入</button>
</form>
</body>
</html>