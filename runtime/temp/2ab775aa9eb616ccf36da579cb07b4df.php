<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\www\zhaoshang\application\..\public\tpl\admin\ce\add.html";i:1531443424;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/images/layui/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/images/layui/css/font_eolqem241z66flxr.css" media="all" />
    
<script type="text/javascript" src="/images/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="/images/page_thinkphp.css" />
<script type="text/javascript" src="/static/vali/dist/SMValidator.min.js"></script>
<script type="text/javascript" src="/static/vali/src/config.js"></script>

</head>
<body class="childrenBody">

<form class="layui-form" method="post" enctype="multipart/form-data">
    <div class="layui-form-item">
        <label class="layui-form-label">名称</label>
        <div class="layui-input-block">
            <input type="text" name="name" class="layui-input linksName" lay-verify="required" placeholder="请输入名称">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">热点</label>
        <div class="layui-input-block">
            <input type="radio" name="hot" value="0" value="正常" title="正常" checked>
            <input type="radio" name="hot" value="1" value="热点" title="热点">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">短简介</label>
        <div class="layui-input-block">
            <textarea name="des" placeholder="请输入短简介" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">长简介</label>
        <div class="layui-input-block">
            <textarea name="l" placeholder="请输入长简介" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">图片</label>
        <div class="layui-input-block">
            <div class="layui-box layui-upload-button">
                <input type="file" name="pic" class="layui-upload-file" lay-title="上传图片">
                <span class="layui-upload-icon"><i class="layui-icon">+</i>上传图片</span></div>
            <div class="layui-form-item">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="addLinks">添加</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script type="text/javascript" src="/images/layui/page/links/linksAdd.js"></script>
<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '不能为空',
        fields: {
            name: 'required|length(1,24)',
            url: 'length(0,500)',
            des: 'length(0,500)',
            l: 'length(0,5000)',
        }
    });
</script>

</body>
</html>