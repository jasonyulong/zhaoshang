<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\www\zhaoshang\application\..\public\tpl\index\xz\index.html";i:1544163826;s:36:"../public/tpl/index/include_nav.html";i:1545630620;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>行政办公</title>
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
    <style>
        .have{margin-bottom: 30px;margin-right: 30px;overflow: hidden}
        .have img{transition: 0.2s ease-in-out;display: block}
        .have img:hover{transform: scale(1.05)}
        .flex{justify-content: flex-start;margin-top: 40px}
        p.abs-rgba{height: 40px;background-color:rgba(0,0,0,0.4);display: flex;align-items: center;justify-content: center}
    </style>
</head>
<body>
<!--选中效果-->
<input type="hidden" value="navxz" data-active="">
<input type="hidden" value="xzlink1" data-active="">
<!--导航start-->



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
    <div style="width: 1200px;margin: 0 auto;position: relative;top:-125px "><a href="/zhaoshang/xuqiu/type/lou.html" style="position: absolute;right: 0" class="btn btn-danger">免费发布资讯</a></div>
</div>
<div class="mainwrap mainbox-shadow">
    <div id="main">
        <div class="link">
            <a href="<?php echo url('index/xz/index',array('sort'=>'gs')); ?>" id="xzlink_gs">工商</a>
            <a href="<?php echo url('index/xz/index',array('sort'=>'sw')); ?>" id="xzlink_sw">税务</a>
            <a href="<?php echo url('index/xz/index',array('sort'=>'zs')); ?>" id="xzlink_zs">知识产权</a>
            <a href="<?php echo url('index/xz/index',array('sort'=>'fl')); ?>" id="xzlink_fl">产权法律</a>
        </div>
        <div class="diqu">
            <div class="product">
                <div class="tit"><span>地</span><span>区:</span></div>
                <div class="addr">
                    <a href="javascript:void(0);" id="setarea_" onclick="setarea('')">不限</a>
                    <?php if(is_array($prolist) || $prolist instanceof \think\Collection || $prolist instanceof \think\Paginator): $i = 0; $__LIST__ = $prolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="javascript:void(0);" id="setarea_<?php echo $vo['code']; ?>" onclick="setarea('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="product">
                <div class="tit"><span>城</span><span>市:</span></div>
                <div class="addr">
                    <a href="javascript:void(0);" id="setcity_" onclick="setcity('')">不限</a>
                    <?php if(is_array($ct) || $ct instanceof \think\Collection || $ct instanceof \think\Paginator): $i = 0; $__LIST__ = $ct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="javascript:void(0);" id="setcity_<?php echo $vo['code']; ?>" onclick="setcity('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
        <form id="formid" method="post">
            <input type="hidden" id="area" name="area" value="<?php echo $area; ?>">
            <input type="hidden" id="city" name="city" value="<?php echo $city; ?>">
        </form>
        <div class="anli">
            <div class="flex">

                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/xz/newsinfo',['id'=>$vo['id']]); ?>" class="have">
                    <div>
                        <img src="<?php echo $vo['pic']; ?>" width="196" height="198" alt="">
                    </div>
                    <p class="abs-rgba"><?php echo $vo['title']; ?></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <div class="pageoption"><?php echo $list->render(); ?></div>
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
    $("#xzxz").addClass("active");
    $("#xzlink_<?php echo $sort; ?>").addClass("active");

    function setarea(v){
        $("#area").val(v);
        $("#formid").submit()
    }
    $("#setarea_"+$("#area").val()).addClass("active");

    function setcity(v){
        $("#city").val(v);
        $("#formid").submit()
    }
    $("#setcity_"+$("#city").val()).addClass("active");
</script>

</body>
</html>