<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/opt/web/zhaoshang/application/../public/tpl/index/index/adminlogin.html";i:1543567716;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width">
    <link href="/images/adminlogin/css/base.css" rel="stylesheet" type="text/css">
    <link href="/images/adminlogin/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">
    <form action="" method="post" id="form">
        <div class="logo"></div>
        <div class="login_form">
            <div class="user">
                <input class="text_value" value="" name="username" type="text" id="username"  autocomplete="off">
                <input class="text_value" value="" name="password" type="password" id="password" autocomplete="off">
            </div>
            <button class="button" id="submit" type="submit">登录</button>
        </div>

        <div id="tip"></div>
        <div class="foot">
            Copyright © 2011-2018 瑟维思商务服务有限公司 All Rights Reserved.
        </div>
    </form>
</div>
</body>
</html>