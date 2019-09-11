<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\www\zhaoshang\application\..\public\tpl\user\cang\fang.html";i:1541991305;s:44:"D:\www\zhaoshang\public\tpl\user\layout.html";i:1542251356;}*/ ?>
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
    
<style>
    .setingrigth>p {
        padding-left: 0px;
        background-color:transparent;
        font-size: 18px;
        font-weight: bold;
        line-height: 30px;
        color: black;
        padding-bottom: 15px;
        display: flex;
        align-items: center;
        margin: 8px 0 0px 0;
    }
</style>

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
            <a href="<?php echo url('user/index/index'); ?>" >个人设置</a>
            <a href="<?php echo url('user/cang/article'); ?>" class="active">收藏中兴</a>
            <a href="<?php echo url('user/index/find'); ?>" >求租购物</a>
        </div>
        <section style="padding: 30px 15px 0px 15px;display: flex">
            <div class="setingleft">
                <p class="pFirst">个人设置</p>
                <a href="<?php echo url('user/cang/article'); ?>" class="p-link ">新闻收藏</a>
                <a href="<?php echo url('user/cang/fang'); ?>" class="p-link active">厂房收藏</a>
                <a href="<?php echo url('user/cang/tudi'); ?>" class="p-link ">土地收藏</a>
                <a href="<?php echo url('user/cang/lou'); ?>" class="p-link ">写字楼收藏</a>
            </div>
            <div class="setingrigth" style="background-color: white">

                <p><span></span>关注的厂房</p>
                <!--如果还没关注的类容-->
                <!--  <div style="width: 100%;height: 165px;display: flex;align-items: center;justify-content: center;background-color: #f8f8f8">
                   <div style="display: flex;align-items: center;">
                       <img src="/images/zhaoshang/img/seting/70.png" alt="" style="margin-right: 10px">
                       <p style="color: #999999;line-height: 45px">
                           您还没有关注新闻，<a href="" style="color:#fe7140;text-decoration: underline">关注去> </a><br>
                           我们为您精选出一些推荐文章
                       </p>
                   </div>
               </div>-->
                <div class="new-wrap">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="super">
                        <a href="" class="porject">
                            <img src="<?php echo $vo['pic']; ?>" alt="">
                            <p><?php echo $vo['title']; ?></p>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <p style="position: relative">
                    <span></span><strong>为您推荐</strong>
                    <em style="color: black;position: absolute;right: 0;top: 0px"><a href="" style=";display: inline-block;" class="bangding">换一换</a></em>
                </p>
                <div class="new-wrap">
                    <?php if(is_array($ran) || $ran instanceof \think\Collection || $ran instanceof \think\Paginator): $i = 0; $__LIST__ = $ran;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="super">
                        <a href="" class="porject">
                            <img src="<?php echo $vo['pic']; ?>" alt="">
                            <p><?php echo $vo['title']; ?></p>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
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


</body>
</html>