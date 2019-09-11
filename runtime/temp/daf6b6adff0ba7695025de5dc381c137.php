<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\www\zhaoshang\application\..\public\tpl\index\zc\index.html";i:1542866232;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>政策动态</title>
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
    <style>
        .ts-newlist>section>h3{border-bottom: 1px solid #dcdcdc;padding-bottom: 10px;margin-bottom: 10px}
        .ts-newlist h3>span{display: flex;align-items: center;color: #005196; }
        .ts-newlist h3>span>strong{width: 5px;height: 15px;background-color: #005196;display: inline-block;margin-right: 10px}
        .ts-project:first-child .ts-newlist:last-child>section>a:before{
            width: 0px;
            height: 0px;
            background-color: #666666;}
        .ts-newlist:last-child>section>a>span{background-color: #E71C19;color: white;margin-right: 10px;height: 20px;line-height: 20px;width: 40px;text-align: center;font-size: 14px}
    </style>
</head>
<body>
<input type="hidden" value="navzc" data-active="">
<input type="hidden" value="zclink1" data-active="">
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
<div class="mainwrap mainbox-shadow">
    <div id="main">

        <div class="link">
            <a href="<?php echo url('index/zc/index'); ?>" id="zclink1" >首页</a>
            <a href="<?php echo url('index/chouhua/index'); ?>"  id="zclink2">总部经济</a>
            <a href="<?php echo url('index/chouhua/yuan'); ?>"  id="zclink3">产业园</a>
            <a href="<?php echo url('index/chouhua/index'); ?>"  id="zclink6">税务筹划</a>
            <a href="<?php echo url('index/xz/index'); ?>"  id="zclink7">行政办公</a>
            <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>"  id="zclink8">土地</a>
            <a href="<?php echo url('index/zhaoshang/fang_index'); ?>"  id="zclink9">厂房</a>
            <a href="<?php echo url('index/zhaoshang/lou_index'); ?>"  id="zclink10">写字楼</a>
            <a href="<?php echo url('index/teshe/index'); ?>"  id="zclink11">特色项目</a>
        </div>
        <div id="ts-main">
            <div class="ts-project">
                <div id="myCarousels">
                    <div id="myCarousel" class="carousel slide">
                        <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): $k = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                <div class="item <?php if($k == '1'): ?>active<?php endif; ?>">
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" width="390" height="272" alt="First slide"></a>
                                <div class="carousel-caption"><?php echo $vo['title']; ?></div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <div class="ts-newlist">
                    <section>
                        <h3><span><strong></strong>最新资讯</span><a href="<?php echo url('index/zc/news'); ?>">更多</a></h3>
                        <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </section>
                </div>
                <div class="ts-newlist">
                    <section>
                        <h3><span><strong></strong>随机推荐</span><a href="<?php echo url('index/zc/news'); ?>">更多</a></h3>
                        <?php if(is_array($ran) || $ran instanceof \think\Collection || $ran instanceof \think\Paginator): $i = 0; $__LIST__ = $ran;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </section>
                </div>
            </div>
            <a href="" id="guanggao"><img src="/images/zhaoshang/img/shitizhaoshang/53.jpg" alt=""></a>
            <div class="ts-project">
                <div class="ts-newlist">
                    <section>
                        <h3><span><strong></strong>政策速递</span><a href="<?php echo url('index/zc/news'); ?>">更多</a></h3>
                        <?php if(is_array($t1) || $t1 instanceof \think\Collection || $t1 instanceof \think\Paginator): $i = 0; $__LIST__ = $t1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </section>
                </div>
                <div class="ts-newlist">
                    <section>
                        <h3><span><strong></strong>行业动态</span><a href="<?php echo url('index/zc/news'); ?>">更多</a></h3>
                        <?php if(is_array($t2) || $t2 instanceof \think\Collection || $t2 instanceof \think\Paginator): $i = 0; $__LIST__ = $t2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </section>
                </div>
                <div class="ts-newlist">
                    <section>
                        <h3><span><strong></strong>服务资讯</span><a href="<?php echo url('index/zc/news'); ?>">更多</a></h3>
                        <?php if(is_array($t3) || $t3 instanceof \think\Collection || $t3 instanceof \think\Paginator): $i = 0; $__LIST__ = $t3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </section>
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
<script>
    $(function () {
        $("#myCarousels .carousel-caption").text(function () {
            return $(this).text().substring(0,20)+"..."
        })
    })
</script>

<script language="javascript">
    $("#zczc").addClass("active");
    $("#zclink1").addClass("active");
</script>
</body>
</html>