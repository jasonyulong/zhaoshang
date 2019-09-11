<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:71:"D:\www\zhaoshang\application\..\public\tpl\index\chouhua\zhaoshang.html";i:1542767486;s:46:"D:\www\zhaoshang\public\tpl\index\chouhua.html";i:1543567388;s:36:"../public/tpl/index/include_nav.html";i:1545630620;s:37:"../public/tpl/index/chouhua_nav2.html";i:1543566955;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
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
    
<link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
<style>
    .anli{margin-top: 80px;}
    .flex{justify-content: flex-start}
    .flex>a{margin-bottom: 26px;margin-right: 25px}
    .flex>a>div{overflow: hidden;width: 260px;height: 168px}
    .flex>a img{display: block;transition: 0.2s ease-in-out}
    .flex>a img:hover{transform: scale(1.05)}
    .anli>.flex h4 {
        color: #111111;
        padding: 5px 0;
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


<div class="mainwrap mainbox-shadow">
    <div id="main">

        <div class="link">
            <a href="<?php echo url('index/chouhua/index'); ?>" id="swlink10">首页</a>
<a href="<?php echo url('index/chouhua/news'); ?>" id="swlink11">新闻中心</a>
<a href="<?php echo url('index/chouhua/zhaoshang'); ?>" id="swlink12">招商中心</a>
<a href="<?php echo url('index/chouhua/fuwu'); ?>" id="swlink13" >园区服务</a>
<a href="<?php echo url('index/chouhua/anli'); ?>" id="swlink14" >成功案例</a>
<a href="<?php echo url('index/chouhua/huoban'); ?>" id="swlink15" >合作伙伴</a>
        </div>

        <div id="zhaoshang">
            <div class="anli" style="margin-top: 10px;">
                <div class="flex">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/chouhua/zheng',['id'=>$vo['id']]); ?>">
                        <div>
                            <img src="<?php echo $vo['pic']; ?>" width="260" height="168" alt="">
                        </div>
                        <h4><?php echo $vo['title']; ?></h4>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="pageoption"><?php echo $list->render(); ?></div>
            </div>
        </div>
        <div class="listright">

        </div>
        <div class="listleft">

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
    $("#swlink12").addClass("active");
</script>

</body>
</html>