<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\www\zhaoshang\application\..\public\tpl\index\chouhua\yuan.html";i:1542703218;s:46:"D:\www\zhaoshang\public\tpl\index\chouhua.html";i:1542695373;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:36:"../public/tpl/index/chouhua_nav.html";i:1542695987;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>惠创优产业园联盟</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
<style>
    #ts-main{padding: 0 20px;min-height: 1px}
    #ts-main>h1{font-size: 18px;color:#E71C19;display: flex;justify-content: space-between ;align-items: flex-start;margin:30px 0;font-weight: bold}
    #ts-main>h1>a{display: block;padding:10px 5px;background-color:#E71C19;color: white;border-radius: 3px ;}
    #ts-main img{margin: 20px auto;display: block }
    #ts-main blockquote{line-height: 30px}
    #ts-main blockquote span{width: 20px;display: inline-block}
</style>

</head>
<body>
<input type="hidden" value="navsw" data-active="">
<input type="hidden" value="swlink1" data-active="">

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


<div class="mainwrap">
    <div id="main">
        <div class="link">
            <a href="<?php echo url('index/chouhua/index'); ?>" id="swlink1" ><img src="/images/zhaoshang/img/shitizhaoshang/73.png" alt=""><h1>总部经济</h1></a>
<a href="<?php echo url('index/chouhua/sixin'); ?>" id="swlink2"><img src="/images/zhaoshang/img/shitizhaoshang/74.png" alt=""><h1>四新经济</h1></a>
<a href="<?php echo url('index/chouhua/yuan'); ?>" id="swlink3"><img src="/images/zhaoshang/img/shitizhaoshang/75.png" alt=""><h1>惠创优产业园联盟</h1></a>
        </div>
        <div id="ts-main">
            <h1><p>联盟简介</p> <a href=""> 前往惠创优产业园联盟官网</a></h1>
            <blockquote>
                <span></span>湖北惠创优产业园发展联盟(以下简称恵创优联盟)是由湖北省政府及省内地方政府和省内各地区产业园区管委会共同发起成立的政府产
                业园综合服务联盟,联盟理事会和相关委员会成员由地方政府和产业园管委会负责人兼任。<br>
            </blockquote>
            <img src="/images/zhaoshang/img/shitizhaoshang/86.png" alt="" width="783" height="373" style="">
            <blockquote>
                <span></span>联盟为企业成员和园区提供产业定位、产业规划、投融资策划、财政奖励、商事服务、产融结合、政企互联、总部经济、人才引进、项目对接
                资源整合等服务,打造政企共赢共同体!同时联盟汇集了湖北省内最优的招商引资优恵政策,凡是入驻联盟的企业均可享受到全省各地市、县
                政府提供的招商引资优惠政策,并且还可享受到四大行业+四新经济所属:二十三个产业八十多种类型的企业量身定制精准有效的财税筹划方
                案,联盟从创世至今致力于一站式招商服务,为方便企业入驻简化政务流程,开通绿色办公通道,为解除企业的入驻后的忧患,联盟作为地方
                政府及其产业园的综合服务和统筹协调机构,通过高效服务精准患企,打造地方政府产业园星级服努新典范和省级产业园联盟招商新形式;<br>
            </blockquote>
            <h1><p>联盟宗旨和特色</p></h1>
            <blockquote>
                <span></span>为坚决贯彻湖北省委、省政府《关于新形势下进一步加大招商引资力度的若干意见》(鄂政发[2017]14号),践行政府职能转变新思想
                优化营商环境,建设让企业和人民满意的服务型政府<br>
                <span></span>恵创优联盟发挥政府顶层协调、政策整合、服务落地等优势,为毎家企业精准提供订制化解决方案,并髙效对接政府窗口,全过程落实惠
                企政策并及时解决相关问题,实现从解决方案提供到执行落地的一条龙政务服务!<br>
                <span></span>在产业联盟中除可享受国家、省制定的优惠政策外,还可在项目立项、计划、信贷、土地使用、税收、劳动人事等方面享受当地所订的优
                患政策,同时通过资源整合和资本对接等增值服务,帮助企业实现跨越式发展和裂变式增长!<br>
            </blockquote>

        </div>

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
    $("#chouhua").addClass("active");
    $("#swlink3").addClass("active");
</script>

</body>
</html>