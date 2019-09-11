<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\www\zhaoshang\application\..\public\tpl\index\index\userregister.html";i:1541728511;}*/ ?>
<!DOCTYPE html>
<html lang="UTF8">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/log_reg_pwd.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/jquery.validate.min.js"></script>
    <script src="/images/zhaoshang/js/additional-methods.min.js"></script>
    <script src="/images/zhaoshang/js/jquery.messages_cn.js"></script>

</head>
<body>
<div id="main">
    <a href=""><img src="/images/zhaoshang/img/log_reg_pwd/logo.png" width="21%" alt=""></a>
    <h1>登录中国招商网 <br/>享受终身VIP服务，全程免费咨询服务！</h1>
    <form id="login" method="post">
        <p><span>专业</span><span>精准</span><span>高效</span></p>
        <article>Professional, accurate and efficient</article>
        <div class="form-group">
            <div class="ico">
                <img src="/images/zhaoshang/img/log_reg_pwd/2.png" alt="">
            </div>
            <input type="text" placeholder="输入用户名" name="username" autocomplete="off" required="true" password="true" maxlength="20">
        </div>
        <div class="errormsg"></div>
        <div class="form-group">
            <div class="ico">
                <img src="/images/zhaoshang/img/log_reg_pwd/3.png" alt="">
            </div>
            <input type="password" placeholder="输入密码" name="password" autocomplete="off" required="true" password="true" maxlength="20">
        </div>
        <div class="errormsg"></div>
        <div class="form-group">
            <div class="ico">
                <img src="/images/zhaoshang/img/log_reg_pwd/4.png" alt="">
            </div>
            <input type="email" placeholder="输入邮箱" name="email" autocomplete="off" email="true" maxlength="30" required="true">
        </div>
        <div class="errormsg"></div>
        <div class="form-group">
            <div class="ico">
                <img src="/images/zhaoshang/img/log_reg_pwd/5.png" alt="">
            </div>
            <input type="text" class="yanz"  placeholder="输入验证码" name="captcha" autocomplete="off" required="true" maxlength="10">
            <div class="yanzimg">
                <img src="<?php echo captcha_src(); ?>" alt="">
            </div>
        </div>
        <div class="errormsg"></div>
        <div class="form-group" style="justify-content: space-between">
            <p><span>以有账号，直接<a href="<?php echo url('index/index/userlogin'); ?>" style="display: inline">登陆></a></span></p>
            <article style="width: 30%;display: flex;align-items: center"><input type="submit" value="注册"></article>
        </div>
    </form>
    <footer>
        <p>京ICP备11017824号-4 / 京ICP证130164号 北京市公安局朝阳分局备案编号:110105000501</p>
        <p>0164号 北京市公安局朝阳分局备案编号:110105000501</p>
    </footer>
</div>
<script>
    $().ready(function () {
        $("#login").validate({
            errorPlacement:function(error,element){
                $(element).closest(".form-group").next(".errormsg").append(error)
            },
        })
    })
</script>
</body>
</html>