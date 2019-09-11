<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\www\zhaoshang\application\..\public\tpl\index\hcy\zhaoshang.html";i:1545276201;s:42:"D:\www\zhaoshang\public\tpl\index\hcy.html";i:1545272364;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="hello">
    <meta name="keywords" content="a,b,c">
    <mata name="renderer" content="webkit"></mata>
    <link rel="Shortcut Icon" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/images/hcy/css/bootstrap.css">
    <link rel="stylesheet" href="/images/hcy/css/iconfont.css">
    <script src="/images/hcy/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="/images/hcy/css/public.css">
    <link rel="stylesheet" href="/images/hcy/css/index.css">

    
<title>招商</title>
<style>
    .error{margin-right: 10px;font-size: 14px}
    .msg{position: absolute;right: 0px;top: -10px;z-index: 100;background-color: red}
</style>
<script src="/images/hcy/js/bootstrap.js"></script>
<script src="/images/hcy/js/valied.js"></script>
<script src="https://cdn.staticfile.org/angular.js/1.4.6/angular.min.js"></script>

</head>

<body>
<!--导航-->
<nav >
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end py-1 font-size-14 text-666 align-items-center" >
                <a href="http://www.i35wang.com"><span class="iconfont icon-zuanshi mr-1 font-weight-normal"></span>中国招商网</a>
            </div>
            <div class="w-100"></div>
        </div>
        <div class="row justify-content-between mt-2">
            <div class="col-md-4 d-flex justify-content-sm-between" >
                <a href="<?php echo url('index/hcy/index'); ?>"  class="font-size-18 " id="index">首页</a>
                <a href="<?php echo url('index/hcy/about'); ?>"  class="font-size-18" id="about">关于联盟</a>
                <a href="<?php echo url('index/hcy/zhengce'); ?>"  class="font-size-18" id="zhengce">扶持政策</a>
                <a href="<?php echo url('index/hcy/anli'); ?>"  class="font-size-18" id="anli">筹划案例</a>
            </div>
            <div class="col-md-4 d-flex justify-content-sm-between">
                <a href="<?php echo url('index/hcy/chanye'); ?>"  class="font-size-18"  id="chanye">鼓励产业</a>
                <a href="<?php echo url('index/hcy/xiangmu'); ?>"   class="font-size-18" id="xiangmu">服务项目</a>
                <a href="<?php echo url('index/hcy/ruzhu'); ?>"  class="font-size-18" id="ruzhu">入驻流程</a>
                <a href="<?php echo url('index/hcy/content'); ?>"   class="font-size-18" id="content">联系我们</a>
            </div>
        </div>
        <div class="position-absolute">
            <img src="/images/hcy/img/logo.png" width="130" height="130" alt="logo" title="logo">
        </div>
    </div>
</nav>


<div class="container-fluid p-0 mt-4" style="background: url(/images/hcy/img/32.jpg)no-repeat;height: 946px;">
    <div class="container " style="padding-top: 120px">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white " style="letter-spacing: 12px;font-size: 60px">全国委托招商</h1>
                <h1 class="text-center text-white iconfont " style="letter-spacing: 3px;font-size: 48px">&#xe608;010-53345721</h1>
            </div>
        </div>
        <div class="row justify-content-center  " style="margin-top: 95px">
            <div class="col-9 bg-white " style="padding: 50px 190px 25px 190px;border-radius: 10px">
                <form id="form"   class="row no-gutters align-items-center " >
                    <div class="form-group w-100 d-flex no-gutters align-items-center">
                        <div class="col-2 text-right font-weight-bold font-size-14"><span class="text-red">*</span>公司名称：</div>
                        <div class="col-10">
                            <input type="text" autocomplete="off" name="company"  class="form-control rounded-0 p-1" >
                        </div>
                    </div>
                    <div class="errormsg text-red"></div>
                    <div class="form-group w-100 d-flex no-gutters align-items-center">
                        <div class="col-2 text-right font-weight-bold font-size-14"><span class="text-red">*</span>姓名：</div>
                        <div class="col-4">
                            <input type="text" required name="name" autocomplete="off" class="form-control rounded-0 p-1" >
                        </div>
                        <div class="col-2 text-right font-weight-bold font-size-14"><span class="text-red">*</span>职位：</div>
                        <div class="col-4">
                            <input type="text" autocomplete="off" autocomplete="off" name="job" class="form-control rounded-0 p-1" >
                        </div>
                    </div>
                    <div class="errormsg text-red"></div>
                    <div class="form-group w-100 d-flex no-gutters align-items-center">
                        <div class="col-2 text-right font-weight-bold font-size-14"><span class="text-red">*</span>意向城市：</div>
                        <div class="col-4">
                            <input type="text" name="city" autocomplete="off" class="form-control rounded-0 p-1" required>
                        </div>
                        <div class="col-2 text-right font-weight-bold font-size-14"><span class="text-red">*</span>联系方式：</div>
                        <div class="col-4">
                            <input type="text" name="phone" autocomplete="off" class="form-control rounded-0 p-1" >
                        </div>
                    </div>
                    <div class="errormsg text-red"></div>
                    <div class="form-group w-100 d-flex no-gutters align-items-center">
                        <div class="col-2 text-right font-weight-bold font-size-14"><span class="text-red">*</span>公司描述：</div>
                        <div class="col-10">
                            <textarea name="company_d" autocomplete="off" style="resize: none" class="form-control rounded-0"></textarea >
                        </div>
                    </div>
                    <div class="errormsg text-red"></div>
                    <div class="form-group w-100 d-flex no-gutters align-items-center">
                        <div class="col-2 text-right font-weight-bold font-size-14 font-size-14"><span class="text-red">*</span>自身优势：</div>
                        <div class="col-10">
                            <textarea name="oneself"  autocomplete="off" style="resize: none" class="form-control rounded-0"></textarea>
                        </div>
                    </div>
                    <div class="errormsg text-red"></div>
                    <div class="d-flex justify-content-center w-100">
                        <input type="submit" class="btn btn-secondary " value="立即加入">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!--分割线-->
<div style="height: 1px ;background-color: black"></div>
<!--页未-->
<div class="container-fluid p-0 background py-4 foot-border" >
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-around text-ddd">
                <a href="<?php echo url('index/hcy/about'); ?>" class="text-ddd ">关于我们</a>
                <a href="<?php echo url('index/hcy/jiagou'); ?>" class="text-ddd ">组织架构</a>
                <a href="<?php echo url('index/hcy/content'); ?>" class="text-ddd ">联系我们</a>
                <a href="<?php echo url('index/hcy/fuwu'); ?>" class="text-ddd ">服务项目</a>
                <a href="<?php echo url('index/hcy/anli'); ?>" class="text-ddd ">经典案例</a>
                <a href="http://www.i35wang.com/" class=" text-ddd ">中国招商网</a>
                <a href="http://www.35service.com/" class="text-ddd  ">瑟维思商务服务</a>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid p-0 background  border-bottom"  >
    <div class="container" style="max-width: 1100px">
        <div class="row align-items-center py-5 align-content-stretch">
            <div class="col d-flex flex-column align-items-center align-content-between justify-content-between" style="height: 125px">
                <img src="/images/hcy/img/6.png" width="64" height="64" alt="">
                <h1  class="display-5 text-ddd m-0" >慧创优</h1>
            </div>
            <div class="col d-flex flex-column align-content-between justify-content-between text-nowrap"  style="height: 125px">
                <p class="text-left text-ddd m-0">电话：000-555-888</p>
                <p class="text-left text-ddd m-0">传真：4864845645454 </p>
                <p class="text-left text-ddd m-0">邮箱：158@163.COM </p>
                <p class="text-left text-ddd m-0">地址：武汉市硚口区南国大家装H座20楼</p>
            </div>
            <div class="col d-flex justify-content-center  " >
                <img class="p-1 bg-white"  src="/images/hcy/img/3.png" class="" width="125" height="125" alt="二维码" title="扫一扫关注">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a  href="tencent://message/?uin=52203910&Site=http://vps.shuidazhe.com&Menu=yes" class="px-4 py-1 text-ddd  border border-danger" style="cursor: pointer;border-radius: 14px" >在线咨询</a>
            </div>
        </div>
        <div class="row background pt-1 pb-4">
            <div class="col">
                <p class="text-center text-ddd">Copyright © 2014 Tanikawa . 津ICP备14005177号</p>
            </div>
        </div>
    </div>
</footer>

<script>
    $(function () {
        $("#xiangmu").addClass("active")
    })
    $(document).ready(function () {
        $("#form").validate({
            errorPlacement: function(error, element) {
                $(element)
                        .closest( ".form-group" ).next(".errormsg").append(error)

            },
            rules:{
                company:{required:true},
                name:{required:true},
                job:{required:true},
                city:{required:true},
                phone:{required:true,maxlength:11,number:true},
                company_d:{maxlength:200},
                oneself:{maxlength:200},
            },
            messages:{
                company:{required:"请填写公司名称"},
                name:{required:"请填写姓名"},
                job:{required:"请填写职位"},
                city:{required:"请填写城市"},
                phone:{required:"请填写电话号码",maxlength:"最大长度为11",number:"电话号码由数字组成"},
                company_d:{maxlength:"超出可提交的最大长度"},
                oneself:{maxlength:"超出可提交的最大长度"},
            }

        })
    })
</script>

</body>

</html>