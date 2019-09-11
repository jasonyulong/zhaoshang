<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:64:"D:\www\zhaoshang\application\..\public\tpl\index\about\link.html";i:1542681994;s:44:"D:\www\zhaoshang\public\tpl\index\about.html";i:1542695396;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:34:"../public/tpl/index/about_nav.html";i:1542681618;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
    
<title>联系我们</title>
<link rel="stylesheet" href="/images/zhaoshang/css/about.css">

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=y9XrqIdFduE2IxUeu10pKhsCf5kNEXUv"></script>
<style>
    #main {
        width: 1200px;
        background-color: white;
        padding: 45px 95px 55px 95px;
        margin: 0 auto;
        position: relative;
    }
    #newslist>.pro>article {
        display: flex;
        flex-direction: column;
        align-content: space-between;
        padding-left: 25px;
        flex-direction: column;
        justify-content: space-evenly;
        padding: 10px 25px;
        flex-grow: 1;
    }
    #newslist>.pro {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 10px 0;
        padding-left: 5px;
        position: relative;
        transition: top 1s ease-in-out;
        -webkit-transition: top 1s ease-in-out;
        margin-top: 20px;
    }
</style>

</head>
<body>
<!--选中效果-->
<input type="hidden" value="navgy" data-active="">
<input type="hidden" value="abtoujiesao" data-active="">

<div id="nav">
    <a href="/"><img src="/images/zhaoshang/img/log_reg_pwd/logo.png" width="220" alt=""></a>
    <div id="navbar">
        <a href="/">首页</a>
        <a href="<?php echo url('index/zhaoshang/index'); ?>" id="shitizhaoshang"  >实体招商</a>
        <a href="<?php echo url('index/zht/index'); ?>" id="zhtzht">综合体</a>
        <a href="<?php echo url('index/dj/index'); ?>" id="djdj">项目对接</a>
        <a href="<?php echo url('index/chouhua/index'); ?>" id="chouhua">税务筹划</a>
        <a href="<?php echo url('index/xz/index'); ?>" id="xzxz">行政办公</a>
        <a href="<?php echo url('index/teshe/index'); ?>" id="tese">特色项目</a>
        <a href="<?php echo url('index/zc/index'); ?>" id="zczc">政策动态</a>
        <a href="<?php echo url('index/about/index'); ?>" id="about">关于我们</a>
    </div>
    <div id="user">
        <?php if($islogin == 'no'): ?>
        <!--登陆前-->
        <div class="login">
            <a href="<?php echo url('index/index/userlogin'); ?>"><span>登陆</span></a><p>|</p><a href="<?php echo url('index/index/userregister'); ?>"><span>注册</span></a>
        </div>
        <?php endif; if($islogin == 'yes'): ?>
        <!--登录后-->
        <div class="ico" style="padding: 0 5px">
            <!--没有新消息-->
            <a href="<?php echo url('user/cang/index'); ?>"><img src="/images/zhaoshang/img/shitizhaoshang/2.png" alt=""></a>
            <!--有新消息-->
            <!--<a href="<?php echo url('user/cang/index'); ?>"><img src="/images/zhaoshang/img/shitizhaoshang/2.png" alt="新消息" title="新消息"><span> </span></a>-->
        </div>
        <div class="ico" style="padding-left: 15px">
            <a href="<?php echo url('user/index/index'); ?>">
                <img src="<?php echo $memberinfo['face']; ?>" width="28" height="28" style="border-radius:15px" alt="个人中心" title="个人中心" >
            </a>
        </div>
        <div id="setbox">
            <section>
                <div><a href="<?php echo url('user/index/index'); ?>"><img src="<?php echo $memberinfo['face']; ?>" width="50" height="50" style="border-radius:15px" alt=""></a></div>
                <article>
                    <p><?php echo $memberinfo['username']; ?></p>
                    <p>经验1,634 积分0</p>
                </article>
            </section>
            <section>
                <a href="<?php echo url('user/index/index'); ?>" class="active">个人中心</a>
                <a href="<?php echo url('user/cang/index'); ?>">我的收藏</a>
                <a href="<?php echo url('user/index/index'); ?>">个人设置</a>
                <a href="<?php echo url('user/index/logout'); ?>">安全退出</a>
            </section>
        </div>
        <?php endif; ?>
    </div>
</div>

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

<script src="/images/zhaoshang/js/niti.js"></script>


<div class="mainwrap mainbox-shadow">
    <div id="main">
        <div class="link">
            <a href="<?php echo url('index/about/index'); ?>" id="abtoujiesao">集团介绍</a>
<a href="<?php echo url('index/about/guimo'); ?>" id="abtouguimo">集团规模</a>
<a href="<?php echo url('index/about/wenhua'); ?>" id="abtouwenhua" >企业文化</a>
<a href="<?php echo url('index/about/yuangong'); ?>" id="abtoufengcai">员工风采</a>
<a href="<?php echo url('index/about/link'); ?>" id="abtoulianxi">联系我们</a>
        </div>
        <div id="address">
            <div class="pro">
                <img src="/images/zhaoshang/img/shitizhaoshang/66.png" alt="">
                <p > 全国热线<br>400-000-0000</p>
            </div>
            <div class="pro">
                <img src="/images/zhaoshang/img/shitizhaoshang/67.png" alt="">
                <p >座机热线 <br>400-000-0000</p>
            </div>
            <div class="pro">
                <img src="/images/zhaoshang/img/shitizhaoshang/68.png" alt="">
                <p >电子邮箱 <br> zgzsw@163.com</p>
            </div>
            <div class="pro">
                <img src="/images/zhaoshang/img/shitizhaoshang/69.png" alt="">
                <p >总部地址 <br>北京市海淀区</p>
            </div>
        </div>
        <div id="baidumap"></div>
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
        <a href="<?php echo url('index/about/index'); ?>">关于我们</a>
        <span ></span>
        <a href="<?php echo url('index/about/guimo'); ?>">集团规模</a>
        <span ></span>
        <a href="<?php echo url('index/about/wenhua'); ?>">企业文化</a>
        <span ></span>
        <a href="<?php echo url('index/about/link'); ?>">联系我们 </a>
        <span ></span>
        <a href="<?php echo url('index/about/yuangong'); ?>">员工风采</a>
    </div>
    <p>COPYRIGHT 9 2017 LEJU HOLDING LIMITED. All RIGHTS RESERVED<br>
        京ICP证080057号电信业务审批【2010】字第296号京公网安备11010102002148号增值电信业务经营许可证B2-20100312<br>
        武汉市中国产业园招商服务有限公司湖北省武汉市研口区南国大家装H18楼</p>
</footer>

<script language="javascript">
    $("#about").addClass("active");
    $("#abtoulianxi").addClass("active");
</script>
<script>
    // 百度地图API功能
    var map = new BMap.Map("baidumap");
    var point = new BMap.Point(114.23088,30.59439);
    map.centerAndZoom(point, 15);
    var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
    var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); //右上角
    map.addControl(top_left_control);
    map.addControl(top_left_navigation);
    map.addControl(top_right_navigation);
    //创建小狐狸/*http://lbsyun.baidu.com/jsdemo/img/fox.    gif*/
    var pt = new BMap.Point(114.2311,30.5945);
    var myIcon = new BMap.Icon("/images/zhaoshang/img/shitizhaoshang/70.png", new BMap.Size(300,157));
    var marker2 = new BMap.Marker(pt,{icon:myIcon});  // 创建标注
    map.addOverlay(marker2);
</script>

</body>
</html>