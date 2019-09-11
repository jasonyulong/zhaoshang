<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\www\zhaoshang\application\..\public\tpl\user\index\face.html";i:1541749578;s:44:"D:\www\zhaoshang\public\tpl\user\layout.html";i:1542251356;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/jquery.validate.min.js"></script>
    <script src="/images/zhaoshang/js/jquery.messages_cn.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/seting.css">
    
</head>
<body>
<!--导航start-->
<div id="nav">
    <a href=""><img src="/images/zhaoshang/img/log_reg_pwd/logo.png" width="220" alt=""></a>
    <div id="navbar" style="justify-content: flex-end">
        <a href="<?php echo url('index/index/index'); ?>">首页</a>
        <a href="<?php echo url('user/index/index'); ?>" class="active">个人中心</a>
    </div>
    <div id="user">
        <div class="ico" style="padding: 0 5px">
            <!--<a href=""><img src="/images/zhaoshang/img/shitizhaoshang/2.png" alt=""></a>-->
            <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/2.png" alt=""></a>
        </div>
        <div class="ico" style="padding-left: 15px">
            <a href="">
                <img src="<?php echo $userinfo['face']; ?>" width="28" height="28" style="border-radius:10px" alt="">
            </a>
        </div>
    </div>
</div>
<!--导航end-->
<div class="biaoti">
    <article>专业&nbsp;&nbsp;&nbsp;&nbsp;精准&nbsp;&nbsp;&nbsp;&nbsp;高效<br/></article>
    <section>
        <article>PROFESSIONAL</article>
        <div>
            <p>Professional, accurate, efficient and continuous</p>
            <p>Professional people do professional things</p>
        </div>
    </section>
</div>



<div class="mainwrap">
    <div id="main">
        <div class="link">
            <a href="<?php echo url('user/index/index'); ?>" class="active">个人设置</a>
            <a href="<?php echo url('user/cang/article'); ?>">收藏中兴</a>
            <a href="<?php echo url('user/index/find'); ?>" >求租购物</a>
        </div>
        <section style="padding: 30px 15px 0px 15px;display: flex">
            <div class="setingleft">
                <p class="pFirst">个人设置</p>
                <a href="<?php echo url('user/index/index'); ?>" class="p-link ">信息修改</a>
                <a href="<?php echo url('user/index/face'); ?>" class="p-link active">头像设置</a>
            </div>
            <div class="setingrigth">
                <p><span></span>头像修改</p>
                <form id="head" method="post" enctype="multipart/form-data">
                    <div style="display: flex">
                        <div class="wrap-left">
                            <div class="form-group">
                                <input type="file" accept="image/*" id="imgfile" name="face">
                                <div class="wrap text-center">请选择要上传的头像
                                </div>
                            </div>
                            <p class="imgtip">建议图片尺寸不小于200×200：支持JPG、PNG、JPEG、 GIF格式的图片，大小不超过2M</p>
                            <div class="headbox">
                                <img src="<?php echo $userinfo['face']; ?>" id="img" width="100%" height="100%" alt="">
                            </div>
                        </div>
                        <div class="wrap-rigth">
                            <p>
                                效果预览。<br>
                                您上传的图片会自动生成两种尺寸，<br>请注意小尺寸 的图像是否清晰
                            </p>
                            <div style="display: flex">
                                <div class="img100">
                                    <img src="<?php echo $userinfo['face']; ?>"  id="img2" alt="">
                                </div>
                                <p>100x100</p>
                            </div>
                            <div style="display: flex;padding-left: 10%;margin-top: 5%">
                                <div class="img50">
                                    <img src="<?php echo $userinfo['face']; ?>" id="img3" alt="">
                                </div>
                                <p>50x50</p>
                            </div>
                        </div>
                    </div>
                    <div class="errormsg"></div>
                    <input type="submit" class="btn btn-primary" value="保存">
                </form>
            </div>
        </section>
    </div>
</div>


<footer class="panel-footer">
    <div class="footmain">
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/8.png"  alt=""></p>
            <h5>
                OVOC<br>
                互联网+无界招商平台
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/9.png"  alt=""></p>
            <h5>
                大数据<br>
                数百万条信息积累
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/10.png"  alt=""></p>
            <h5>
                360°<br>
                一站式解决方案
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/11.png"  alt=""></p>
            <h5>
                大平台<br>
                覆盖全国省市县
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/13.png"  alt=""></p>
            <h5>
                专业服务<br>
                全面服务让您入驻无忧
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/15.png"  alt=""></p>
            <h5>
                资源广<br>
                千家产业园组合联盟
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/14.png"  alt=""></p>
            <h5>
                落地重<br>
                促成多个上亿项目
            </h5>
        </div>
    </div>
</footer>
<div style="width: 100%;height: 1px;background-color: #80A8CB"></div>
<footer class="panel-footer" style="border: 0px">
    <div class="friend" >
        <a href="">关于我们</a>
        <span ></span>
        <a href="">服务项目 </a>
        <span ></span>
        <a href="">企业荣耀 </a>
        <span ></span>
        <a href="">联系我们 </a>
        <span ></span>
        <a href="">诚聘精英 </a>
    </div>
    <p>COPYRIGHT 9 2017 LEJU HOLDING LIMITED. All RIGHTS RESERVED<br>
        京ICP证080057号电信业务审批【2010】字第296号京公网安备11010102002148号增值电信业务经营许可证B2-20100312<br>
        武汉市中国产业园招商服务有限公司湖北省武汉市研口区南国大家装H18楼</p>
</footer>


<script>
    $("input[type=file]").on("change",function () {
        var url;
        url = window.URL.createObjectURL(document.getElementById("imgfile").files.item(0));
        $("#img,#img2,#img3").attr("src",url)
    })
    $("#head").validate({
        errorPlacement: function(error, element) {
            // Append error within linked label
            $( element )
                    .closest( "form" )
                    .find( ".errormsg" )
                    .append( error );
        },
        rules:{
            imgfile:{required:true,accept:"image/*",fileSize:1}
        },
        messages:{
            imgfile:{required:"上传文件不能为空",accept:"上传文件类型必须为图片",fileSize:"图片大小不能超过{0}M"}
        }
    })


    $("#action_face").addClass("active")
</script>

</body>
</html>