<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\www\zhaoshang\application\..\public\tpl\admin\adminuser\add.html";i:1540861616;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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

<form class="layui-form" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">账号</label>
        <div class="layui-input-block">
            <input type="text" id="username" name="username" class="layui-input linksName" lay-verify="required" placeholder="请输入账号">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" name="password" id="password"  placeholder="请输入新密码" class="layui-input pwd">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">确认密码</label>
        <div class="layui-input-block">
            <input type="password" placeholder="请确认密码" id="repassword" name="password2" class="layui-input pwd">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">用户权限</label>
        <div class="layui-input-block">
            <input type="checkbox" name="role[01]" title="文章管理">
            <input type="checkbox" name="role[03]" title="案例库">
            <input type="checkbox" name="role[04]" title="友情链接">
            <input type="checkbox" name="role[05]" title="广告管理">
            <input type="checkbox" name="role[99]" title="系统管理">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">状态</label>
        <div class="layui-input-block">
            <input type="radio" name="state" value="1" title="正常" checked>
            <input type="radio" name="state" value="0" title="禁用">
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
        required: '请输入内容',
        fields: {
            username: 'required|length(3,12)',
            password: 'required|length(5,12)',
            password2: 'equal(#password)',
        }
    });
</script>

</body>
</html>