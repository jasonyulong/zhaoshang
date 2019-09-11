<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\www\zhaoshang\application\..\public\tpl\index\teshe\nongye.html";i:1542784589;s:41:"D:\www\zhaoshang\public\tpl\index\ts.html";i:1542781315;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/ts_nav.html";i:1542780282;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>特色小镇</title>
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
                    农业分布范围十分辽阔。地球表面除两极和沙漠外,几乎都可用于农业生产。在近1.31亿平方公里的实际陆地面积中,约11%是可耕地和多年生作物地
                    24%是草原和牧场,31%是森林和林地。海洋和内陆水域则是水产业生产的场所。衣业自然资源的分布很不平衡。可耕地主要集中在亚洲、欧洲和北美。北美
                    欧洲和大洋洲的经济发达国家为0.56公顷,而亚洲、非洲和拉丁美洲的发展中国家仅为0.22公顷,其中亚洲仅0.16公顷(1984年)。森林以欧洲和拉丁美
                    洲的分布面积较大;草原面积则非洲居首位,亚洲其次;其中不同国家、地区之间也有很大差异,当代世界农业发展的基本趋势和特征是高度的商业化、资本化
                    规模化、专业化、区域化、工厂化、知识化、社会化、国际化交织在一起,极大地提高了土地产出率、农业劳动生产率、农产品商品率和国际市场竞争力
                    有关中国农业起源的问题,是学术界十分关心的课题。中国考古学界几十年来一直把它作为一个重要的学术课题进行探索,在江淮河汉诸流域及广大地域
                    内进行调查、发掘,发现了一批遗址,如广西桂林齲皮岩、江西万年仙人洞、河北武安磁山、河南新郑裴李岗、河北徐水南庄头、湖南澧县彭头山等地点。前
                    两处遗址的年代距今约八、九干年。武安磁山遗址和新郑装李岗遗址的年代,也比中原地区的仰韶文化年代要早,距今已有七八千年之久。其中最令人注目的
                    是1986年在河北省徐水县发现的南庄头遗址。
                    <img src="/images/zhaoshang/img/shitizhaoshang/42.jpg" alt="">
                    是指国民经济中一个重要产业部门,是以土地资源为生产对象的部门,它是通过培育动植物产品从而生产食品及工业原料的产业。农业属于第一产业。利
                    用土地资源进行种植生产的部门是种植业,利用土地上水域空间进行水产养殖的是水产业,又叫渔业,利用土地资源培育采伐林木的部门,是林业,利用土地
                    资源培育或者直接利用草地发展畜牧的是畜牧业。对这些产品进行小模加工或者制作的是副业,它们都是农业的有机组成部分。对这些景观或者所在地域资
                    源进行开发并展示的是观光农业,又称休闲农业,这是新时期随着人们的业余时间富余而产生的新型农业形式。
                    广义农业是指包括种植业、林业、畜牧业、渔业、副业五种产业形式;狭义农业是指种植业。包括生产粮食作物、经济作物、饲料作物和绿肥等农作物的

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
    $("#tese").addClass("active");
    $("#tslink1").addClass("active");
</script>

</body>
</html>