<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\www\zhaoshang\application\..\public\tpl\admin\user\info.html";i:1528875061;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
    
<link rel="stylesheet" href="/images/layui/css/user.css" media="all" />
<script type="text/javascript" src="/images/jquery.min.js"></script>
<script type="text/javascript" src="/static/vali/dist/SMValidator.min.js"></script>
<script type="text/javascript" src="/static/vali/src/config.js"></script>

</head>
<body class="childrenBody">

<form class="layui-form changePwd" method="post" enctype="multipart/form-data" id="form">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-block">
            <input type="text" value="<?php echo $userinfo['username']; ?>" disabled class="layui-input layui-disabled">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">昵称</label>
        <div class="layui-input-block">
            <input type="text" name="nickname" id="nickname" value="<?php echo $info['nickname']; ?>" class="layui-input pwd">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">头像</label>
        <div class="layui-input-block">
            <?php if($info['face'] != ''): ?>
            <img src="<?php echo $info['face']; ?>" style="width: 200px; height: 200px;">
            <?php else: ?>
            <img src="<?php echo $userinfo['face']; ?>" style="width: 200px; height: 200px;">
            <?php endif; ?>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">更换头像</label>
        <div class="layui-input-block">
            <div class="layui-box layui-upload-button">
                <input type="file" name="face" class="layui-upload-file" lay-title="上传图片">
                <span class="layui-upload-icon"><i class="layui-icon">+</i>上传图片</span></div>
            <div class="layui-form-item">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="changePwd">立即修改</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $userinfo['id']; ?>">
</form>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '请输入内容',
        fields: {
            password: 'required|length(3,12)',
            password2: 'equal(#password)',
        }
    });
</script>

</body>
</html>