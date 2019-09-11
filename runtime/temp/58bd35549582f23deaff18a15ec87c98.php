<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\www\zhaoshang\application\..\public\tpl\admin\article\sort_add.html";i:1528875058;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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

<form method="post" class="layui-form">
    <div class="layui-form-item">
        <label class="layui-form-label">添加分类</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName"  name="name" placeholder="输入分类名">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="addNews">立即添加</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
    <input type="hidden" name="pid" value="<?php echo $pid; ?>">
</form>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '不能为空',
        fields: {
            name: 'required|length(1,12)',
        }
    });
</script>

</body>
</html>