<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"/opt/web/zhaoshang/application/../public/tpl/admin/sys/set.html";i:1534835458;s:47:"/opt/web/zhaoshang/public/tpl/admin/layout.html";i:1547602823;}*/ ?>
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
        <label class="layui-form-label">网站名称</label>
        <div class="layui-input-block">
            <input type="text" name="title" value="<?php echo $info['title']; ?>" class="layui-input linksName" lay-verify="required" placeholder="请输入网站名称">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">固定电话</label>
        <div class="layui-input-block">
            <input type="text" name="tel" value="<?php echo $info['tel']; ?>" class="layui-input linksName" lay-verify="required" placeholder="请输入固定电话">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">统计代码</label>
        <div class="layui-input-block">
            <input type="tel" name="tongji" value="<?php echo $info['tongji']; ?>" class="layui-input linksUrl" lay-verify="required|url" placeholder="请输入统计代码">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">ICP备案号</label>
        <div class="layui-input-block">
            <input type="tel" name="icp" value="<?php echo $info['icp']; ?>" class="layui-input linksUrl" lay-verify="required|url" placeholder="请输入ICP备案号">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="addLinks">提交</button>
        </div>
    </div>
</form>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '不能为空',
        fields: {
            title: 'length(1,36)',
            tongji: 'length(6,50)',
            icp: 'length(3,18)',
        }
    });
</script>

</body>
</html>