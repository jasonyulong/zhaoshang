<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:62:"D:\www\zhaoshang\application\..\public\tpl\index\teshe\ai.html";i:1542784725;s:41:"D:\www\zhaoshang\public\tpl\index\ts.html";i:1542781315;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/ts_nav.html";i:1542780282;s:31:"../public/tpl/index/footer.html";i:1542695334;}*/ ?>
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
    
<title>特色小镇 - AI</title>
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
                    人工智的定义可以分为两部分,即人工”和“智能”。“人工”比较好理解,争议性也不大。有时我们会要考虑什么是人力所能及制造的,或者人自身
                    的智能程底有没有高到可以创造人工智能的地步,等等。但总的来说,“人工系统”就是译常恶义下的人工系統。
                    关于什么是“智能”,就问多多了。这涉及到其它诸如意识( CONSCIOUSNESS5)、自我(SELF)、思维(MND)(包括无京识的思维( UNCON
                    SCIOUS MIND))等等问题。人唯了解的智能是人本身的智能,这是普遍认同的观点。但是我们对我们自身智能的理解都非常有限,对构成人的智能的必要元
                    也了解有限,所以就很难定义什么是“人工”制造的“智能”了。因此人工智够的研究往往涉及对人的能本身的硏究。其它关于动物啦其它人造系统的能也
                    普遍被认为是人工智能相关的研究课。
                    <img src="/images/zhaoshang/img/shitizhaoshang/44.jpg" alt="">
                    <span></span>人工智能是计算机学科的一个分支,二十世纪七十年代以来被称为世界三大尖端技术之一(空间技术、能原技术、人工智能)。也被认为是二十一世纪三大
                    尖端技术(基因工程、纳米科学、人工智能)之一。这是因为近三十年来它获得了迅速的发展,在很多学科领域都获得了广泛应用,并取得了丰硕的成果,人工智
                    能已逐步成为个独立的分支,无论在理论和实践上都已自成一个系统<br><br>
                    人工智够是研究使计箅机来模拟人的某些思维过程和智能行为(如学习、推理、考、规划等)的学科,主要包括计錞机实现智能的理、制造似于人脑
                    智能的计算机,使计算机能实现更高层次的应用。人工智能将涉及到计算机科学、心理学、哲学和语言学等学科。可以说几乎是自然科学和社会科学的所有学科
                    其范已远远超出了计算机科学的范畴,人工智能与思维科学的关系是实线和理论的关系,人工智能是处于思维科学的技术应用层次,是它的一个应用分支,从思
                    维观点看,人工智能不仅限于逻细思维,要考虑形象思维、灵感思维才能进人工智能的突破性的发展,数学常被认为是多种学科的基础科学,数学也进入语言
                    维领域,人工智能学科也必须借用数学工,数学不仅在标准逻袒、模糊搬学等范发挥作用.数学进入人工智能学科,它们将互相促进而更快地发展。<br><br>
                    017年3月5日,中华人民共和国第十二届全国人民代表大会第五次会议上,李克总理政府工作报告中提出。<br>

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
    $("#tslink3").addClass("active");
</script>

</body>
</html>