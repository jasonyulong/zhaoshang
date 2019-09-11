<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"D:\www\zhaoshang\application\..\public\tpl\index\chouhua\zheng.html";i:1542768194;s:46:"D:\www\zhaoshang\public\tpl\index\chouhua.html";i:1543567388;s:36:"../public/tpl/index/include_nav.html";i:1545630620;s:37:"../public/tpl/index/chouhua_nav2.html";i:1543566955;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
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
    
<title><?php echo $info['title']; ?></title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
<style>
    #main {
        width: 1200px;
        background-color: white;
        padding: 65px 30px 55px 10px;
        margin: 0 auto;
        position: relative;
    }
</style>

</head>
<body>
<input type="hidden" value="navsw" data-active="">
<input type="hidden" value="swlink1" data-active="">



        <a href="<?php echo url('index/zhaoshang/index'); ?>" id="shitizhaoshang"  >实体招商

        </a>
        <a href="<?php echo url('index/zht/index'); ?>" id="zhtzht">综合体</a>
        <a href="<?php echo url('index/dj/index'); ?>" id="djdj">项目对接</a>
        <!-- <a href="<?php echo url('index/chouhua/index'); ?>" id="chouhua">税务筹划</a> -->
        <a href="<?php echo url('index/xz/index'); ?>" id="xzxz">行政办公</a>
        <a href="<?php echo url('index/teshe/index'); ?>" id="tese">特色项目</a>
        <a href="<?php echo url('index/zc/index'); ?>" id="zczc">政策动态</a>
        <a href="<?php echo url('index/about/index'); ?>" id="about">关于我们</a>








    <?php echo url('user/index/index'); ?>

    <div><a href="<?php echo url('user/index/index'); ?>"></div>
    <a href="<?php echo url('user/index/index'); ?>" class="active">个人中心</a>
    <a href="<?php echo url('user/cang/index'); ?>">我的收藏</a>
    <a href="<?php echo url('user/index/index'); ?>">个人设置</a>
    <a href="<?php echo url('user/index/logout'); ?>">安全退出</a>


<?php echo url('index/zht/index'); ?>   综合体
<?php echo url('index/dj/index'); ?> 项目对接
<?php echo url('index/chouhua/index'); ?>  税务筹划
<?php echo url('index/xz/index'); ?>  行政办公
<?php echo url('index/teshe/index'); ?>  特色项目
<?php echo url('index/zc/index'); ?>  政策动态
<?php echo url('index/chouhua/sixin'); ?>  四新经济
<?php echo url('index/index/search'); ?>   搜索   title
<a href="<?php echo url('index/zhaoshang/index'); ?>">实体招商</a>
<a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" >土地</a>
<a href="<?php echo url('index/zhaoshang/fang_index'); ?>" >厂房</a>
<a href="<?php echo url('index/zhaoshang/lou_index'); ?>" >写字楼</a>
<a href="<?php echo url('index/hcy/index'); ?>">惠创优产业联盟</a>




<div class="biaoti">
    <article>专业&nbsp;&nbsp;&nbsp;&nbsp;精准&nbsp;&nbsp;&nbsp;&nbsp;高效<br/></article>
    <section>
        <article>PROFESSIONAL</article>
        <div>
            <p>Professional, accurate, efficient and continuous</p>
            <p>Professional people do professional things</p>
        </div>
    </section>
    <div style="width: 1200px;margin: 0 auto;position: relative;top:-125px "><a href="<?php echo url('index/zhaoshang/xuqiu',['type'=>'lou']); ?>" style="position: absolute;right: 0" class="btn btn-danger">免费发布资讯</a></div>
</div>

<script src="/images/zhaoshang/js/niti.js"></script>


<div class="mainwrap">
    <div id="main">

        <div class="link">
            <a href="<?php echo url('index/chouhua/index'); ?>" id="swlink10">首页</a>
<a href="<?php echo url('index/chouhua/news'); ?>" id="swlink11">新闻中心</a>
<a href="<?php echo url('index/chouhua/zhaoshang'); ?>" id="swlink12">招商中心</a>
<a href="<?php echo url('index/chouhua/fuwu'); ?>" id="swlink13" >园区服务</a>
<a href="<?php echo url('index/chouhua/anli'); ?>" id="swlink14" >成功案例</a>
<a href="<?php echo url('index/chouhua/huoban'); ?>" id="swlink15" >合作伙伴</a>
        </div>
        <div class="mainbox-shadow" id="ts-xiaozhen">
            <img src="<?php echo $info['pic']; ?>" width="671" height="434" alt="">
            <div>
                <h1><?php echo $info['title']; ?></h1>
                <section><img src="/images/zhaoshang/img/shitizhaoshang/55.png" alt=""><p><span>所</span><span>属</span><span>产</span><span>业:</span></p><article><?php echo $info['hangye']; ?></article></section>
                <section><img src="/images/zhaoshang/img/shitizhaoshang/56.png" alt=""><p><span>投</span><span>资</span><span>规</span><span>模:</span></p><article><?php echo $info['guimo']; ?></article></section>
                <section><img src="/images/zhaoshang/img/shitizhaoshang/57.png" alt=""><p><span>入</span><span>驻</span><span>企</span><span>业:</span></p><article><?php echo $info['qiye']; ?>家</article></section>
                <section><img src="/images/zhaoshang/img/shitizhaoshang/58.png" alt=""><p><span>规</span><span>划</span><span>面</span><span>积:</span></p><article><?php echo $info['area']; ?>km²</article></section>
                <section><img src="/images/zhaoshang/img/shitizhaoshang/59.png" width="16" height="20" alt=""><p><span>小</span><span>镇</span><span>位</span><span>置:</span></p><article><?php echo $info['pro']; ?>-<?php echo $info['city']; ?></article></section>
            </div>
        </div>
        <div class="prolist">
            <div class="listleft">
                <div id="menu">
                    <div class="active">
                        <img src="/images/zhaoshang/img/shitizhaoshang/60.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/60X.png" alt="">
                        <p>小镇简介</p>
                        <span>▼</span>
                    </div>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/61.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/61X.png" alt="">
                        <p>发展环境</p>
                        <span>▼</span>
                    </div>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/62.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/62X.png" alt="">
                        <p>优惠政策</p>
                        <span>▼</span>
                    </div>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/63.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/63X.png" alt="">
                        <p>地理优势</p>
                        <span>▼</span>
                    </div>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/64.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/64X.png" alt="">
                        <p>企业风采</p>
                        <span>▼</span>
                    </div>
                </div>
                <div class="ts-content mainbox-shadow"><?php echo $info['des']; ?></div>
                <div class="ts-content mainbox-shadow"><?php echo $info['huanjing']; ?></div>
                <div class="ts-content mainbox-shadow"><?php echo $info['zhengche']; ?></div>
                <div class="ts-content mainbox-shadow"><?php echo $info['dili']; ?></div>
                <div class="ts-content mainbox-shadow"><?php echo $info['fengcai']; ?></div>
            </div>
            <div class="listright">
                <aside class="aside mainbox-shadow" id="aside">
                    <img src="/images/zhaoshang/img/shitizhaoshang/28.png" alt="">
                    <!--<small>张山</small>-->
                    <input type="text" autocomplete="off" placeholder="请输入电话号码">
                    <div class="send" ><img src="/images/zhaoshang/img/shitizhaoshang/31.png" alt=""><span>立即联系</span></div>
                    <p class="tit">使用加密技术，不会泄密您的手机</p>
                    <hr>
                    <div class="flex">
                        <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/29.png" alt="">预约参观</a>
                        <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/30.png" alt="">留言咨询</a>
                    </div>
                </aside>
                <?php if(is_array($tuijian) || $tuijian instanceof \think\Collection || $tuijian instanceof \think\Paginator): $i = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div href="<?php echo url('index/chouhua/zheng',['id'=>$vo['id']]); ?>" class="more mainbox-shadow">
                    <p><span>推荐园区</span><a href="<?php echo url('index/chouhua/zhaoshang'); ?>">MORE</a></p>
                    <a href="<?php echo url('index/chouhua/zheng',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" width="206" height="135" alt=""></a>
                    <article><?php echo $vo['title']; ?></article>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
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

<script>
    $(function () {
        $(".ts-content").first().show()
        $("#menu>div").click(function () {
            $(this).addClass("active").siblings("div").removeClass("active")
            var $index =$(this).index()
            $(".ts-content").eq($index).show("slow").siblings(".ts-content").hide()
        })
    })
</script>
<script language="javascript">
    $("#chouhua").addClass("active");
    $("#swlink12").addClass("active");
</script>

</body>
</html>