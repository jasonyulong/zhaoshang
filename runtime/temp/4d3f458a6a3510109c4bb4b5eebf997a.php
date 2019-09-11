<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\www\zhaoshang\application\..\public\tpl\index\teshe\gongye.html";i:1542784721;s:41:"D:\www\zhaoshang\public\tpl\index\ts.html";i:1542781315;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/ts_nav.html";i:1542780282;s:31:"../public/tpl/index/footer.html";i:1542695334;}*/ ?>
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
    
<title>特色小镇 - 工业</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
<link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
<style>
    #main{padding-bottom: 0px}
</style>

</head>
<body>
<input type="hidden" value="navts" data-active="">
<input type="hidden" value="tslink4" data-active="">

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


<div class="mainwrap">
    <div id="main">
        <div class="link">
            <a href="<?php echo url('index/teshe/nongye'); ?>" id="tslink1" ><img src="/images/zhaoshang/img/shitizhaoshang/37.png" alt=""><h1>农业</h1></a>
<a href="<?php echo url('index/teshe/gongye'); ?>" id="tslink2"><img src="/images/zhaoshang/img/shitizhaoshang/38.png" alt=""><h1>工业</h1></a>
<a href="<?php echo url('index/teshe/ai'); ?>"  id="tslink3"><img src="/images/zhaoshang/img/shitizhaoshang/39.png" alt=""><h1>AI</h1></a>
<a href="<?php echo url('index/teshe/index'); ?>"  id="tslink4"><img src="/images/zhaoshang/img/shitizhaoshang/40.png" alt=""><h1>特色小镇</h1></a>
        </div>



        <div id="ts-main">
            <div id="newsinfo">
                <div class="newscontent">
                    主要包括煤炭、石油与天然气和电力三个部门。由于这三者的开发与生产条件、生产工艺和运输条件均不同,故生产布局各员特点。煤炭资源的数呈、质呈
                    品种和开发条件、分布状况,决定其开发规模和增长效益,制约着煤炭工业发展的可能性和在地区及全国的地位。一个煤田是否能开发或优先布局,除资派条件外
                    经济地理位置也有重要影响。地理位置优越,如煤田靠近能源消费中心,拥有大规模建设的交通运输条件,靠近能源产销最佳区位和易于获得必要的技术经济支援
                    常得到优先开发。石油工业主要包括来油、气和油气炼制。石油与天然气的开发与布同取决于油气资源益藏星与赋存条件,油田的地理位置,对油气田的开发先后
                    有重要影啊。若油气田交通位置好,又靠近经济发达地区,其开发价值更大。相反,开发那些边远地区、交通不便的油气田,困难很大,炼油工业布局既受资源条件
                    影响,又受市场吸引。因石油产品品种复杂,对运输条件要求较高,运成品油不如运原油经济。随着炼油工业日益发展成为石油化工联合企业,炼油工业多趋向于在
                    消费区设厂。电力工业主要包括火电、水电和核电。火电厂布局首先要考志燃料来源和负荷位置,水源也是很压要的条件。水电站布局受水力资源制约,其建设与河
                    流综合开发利用密切相关。核电站使用的核料数是很少,其布局不受资源条件限制,但受水源条件影响较大。宜布局在靠近充足水源、又远离桐密居民点的消费地<br>

                    <img src="/images/zhaoshang/img/shitizhaoshang/43.jpg" alt="">
                    <span></span>中国是世界最大产煤国。煤炭在中国经济社会发展中占有极重要的地位,全国70%的工业料和动力、80%的民用商品能源、60%的化工原料是由煤炭提供的
                    原期产量达10874Mt,其中统配煤矿占44.2%,地方国营煤矿占18.7%,乡镇和个体煤矿占36.7%。年产10Mt以上的大型矿区有山西大同、西山、阳泉、
                    河北开滦、峰峰,河南平顶山、义马,黑龙江鹌岗、鸡西、双鸭山,安徽淮北,江苏徐州,辽宁阜新、铁法,山东兖州。<br><br>
                    中国是世界上最早发现和利用石油的国家之一。它是燃料工业之一。从勘探、开采到加工石油一系列过程是由石油部门所完成,为国民经济各部门提供各种燃
                    料油,包括天然石油和油页岩的樹探、开采、炼制、储运等生产单位。中国的石油工业分布与石油资源的分布甚本上一致。中囯的石油工业主要分布于中国北方居多
                    如黑龙江大庆,山东胜利,新克拉玛依,塔中塔北地区等。<br><br>
                    <span></span>电力工业是将煤炭、石油、天然气、核煞料、水能、海洋能、风能、太阳能、生物质能等一次能源经发电设施转换成电能,再诵过辋电、变电与配电系统供给
                    用户作为能源的工业部门。是专门从事生产、输送和分面电能的工业部门。包括发电、翰电、变电、配电等环节。电能的生产过程和消费过程是同时进行的,既不能
                    中断,又不能储存,需要统一调度和分配。电力工业为工业和国民经济其他部门提供基本动力,随后在条件具备的地区建设了一批大、中型水电站,是国民经济发属
                    的先行部门。电力工业主要包括5个生产环节。①发电,包括火力发电、水力发电、核能和其他能源发电例如中国火电主要集中分布在中国北方产煤区,以利用煤炭
                    为主。水电主要集中分布于南方水能丰富的河源区。核电分布还不是很典型。②电,包括交流輪电和直流翰电例如,中国最大的輪电工程有西电东送工程等。<br>

                </div>

            </div>



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

<script language="javascript">
    $("#tese").addClass("active");
    $("#tslink2").addClass("active");
</script>

</body>
</html>