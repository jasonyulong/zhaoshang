<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"D:\www\zhaoshang\application\..\public\tpl\index\chouhua\sixin.html";i:1543390909;s:46:"D:\www\zhaoshang\public\tpl\index\chouhua.html";i:1542695373;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:36:"../public/tpl/index/chouhua_nav.html";i:1542695987;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>四新经济</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
<style>
    .title section{width: 130%}
    .title article{width: 130%;display: flex;justify-content: space-between}
    .title article>span{font-family: "Heiti SC";color: #015293;font-weight: bold;font-size: 15px}
    #ts-main{min-height: 1px;display: flex;justify-content: space-between}
    .sw-boxleft{width:780px; }
    .sw-boxleft>h1{line-height: 35px;font-size: 24px;font-weight: bold;color: #333333}
    .sw-boxleft>.line{padding: 0 }
    .sw-boxleft>section{display: flex;justify-content: space-between;border-bottom: 2px solid #dcdcdc;align-items: center}
    .sw-boxleft>section>div:first-of-type a{display: flex;flex-direction: column;justify-content: space-around;padding-top: 20px;width: 320px;height: 95px;padding-bottom: 20px;border-bottom: 1px solid #dcdcdc}
    .sw-boxleft>section>div:first-of-type a:last-of-type{border-bottom: 0}
    .sw-boxleft>section>div:first-of-type a>h2{font-size: 18px;font-weight: bold;;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;}
    .sw-boxleft>section>div:first-of-type a>p{color: #666666;font-size: 15px;}
    .sw-boxrigth{width: 325px;}
    .carousel-caption {
        position: absolute;
        right: 0%;
        bottom: 0px;
        left: 0%;
        z-index: 13;
        padding-top: 20px;
        padding-bottom: 40px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0,0,0,.6);
        background-color: rgba(0,0,0,0.3);
        width: 130%;
        font-size: 15px;
        text-align: center;
        padding-left: 9px;

    }
    .carousel-indicators {
        position: absolute;
        bottom: 18px;
        z-index: 15;
        width: 65px;
        padding-left: 0;
        margin-left: 0%;
        left:50%;
        margin-left: -32px;
        text-align: center;
        list-style: none;

    }
    .carousel-indicators li {
        display: inline-block;
        width: 8px;
        height: 8px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #dddddd;
        border: 0;
        margin: 0;
        border-radius: 0px;

    }
    .carousel-indicators .active {
        width: 8px;
        height: 8px;
        margin: 0;
        background-color: #ff0000;
    }
    a{color: #333333}
    a:hover{color:#ff5400}
    .sw-newslist{display: flex;flex-direction: column}
    .sw-newslist>.project{display: flex;justify-content: space-between;padding: 20px 5px;border-bottom: 1px solid #dcdcdc}
    .sw-newslist>.project:last-child{border: 0}
    .sw-newslist>.project>article{display: flex;flex-direction: column;justify-content: space-around;width: 560px}
    .sw-newslist>.project>article>a{font-size: 18px;font-weight: bold;}
    .sw-newslist>.project>article>blockquote{color: #666666;font-size: 14px}
    .sw-newslist>.project>article>p{color: #666666;font-size: 14px}
    .sw-newslist>.project>article>p>span{border: 1px solid #E71C19;color: #E71C19;margin-right: 15px;padding: 0 5px}
    .sw-boxrigth h1{display: flex;justify-content: space-between;padding: 20px 0;font-weight: bold;align-items: center;}
    .sw-boxrigth h1>p{display: flex;align-items: center}
    .sw-boxrigth h1>p:before{content: "";width: 5px;height: 15px;background-color:#E71C19;display: inline-block;margin-right: 13px }
    .sw-boxrigth h1>a{font-size: 16px;font-weight: bold;}
    .sw-boxrigth .project{display: flex;justify-content: space-between;margin: 20px 0}
    .sw-boxrigth .project img{margin-right: 20px}
    .sw-boxrigth .project>article{width: 195px;font-size: 14px;flex-grow: 1;position: relative;margin: 0px 0;display: flex;flex-direction: column;align-content: space-between;justify-content: space-between}
    .sw-boxrigth .project>article>a{;font-weight: bold;display: block}
    .sw-boxrigth .project>article>p{text-align: right;;right: 0;top: 22px}
    .sw-boxrigth .line{padding: 0;height: 2px}
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
            <div class="sw-boxleft">
                <h1>今日头条</h1>
                <div class="line"></div>
                <section>
                    <div>
                        <?php if(is_array($toutiao) || $toutiao instanceof \think\Collection || $toutiao instanceof \think\Paginator): $i = 0; $__LIST__ = $toutiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>">
                            <h2><?php echo $vo['title']; ?></h2>
                            <p><?php echo date('Y年m月d日',$vo['time']); ?></p>
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
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
                                    <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" width="390" height="272" alt="First slide"></a>
                                    <div class="carousel-caption"><?php echo $vo['title']; ?></div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="sw-newslist">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="project">
                        <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" width="184" height="104" alt=""></a>
                        <article>
                            <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                            <blockquote><?php echo $vo['des']; ?></blockquote>
                            <p>
                                <span><?php echo $vo['sortname']; ?></span><small><?php echo $vo['time']; ?></small>
                            </p>
                        </article>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="sw-boxrigth">
                <h1><p>业内新闻</p><a href="<?php echo url('index/chouhua/news'); ?>">更多</a></h1>
                <div class="line"></div>
                <?php if(is_array($nei) || $nei instanceof \think\Collection || $nei instanceof \think\Paginator): $i = 0; $__LIST__ = $nei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="project">
                    <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" width="115" height="59" alt=""></a>
                    <article>
                        <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>" length="20"><?php echo $vo['title']; ?></a>
                        <p>
                            <small><?php echo date('Y年m月d日',$vo['time']); ?></small>
                        </p>
                    </article>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <h1><p>法规政策</p><a href="">更多</a></h1>
                <div class="line"></div>
                <?php if(is_array($fagui) || $fagui instanceof \think\Collection || $fagui instanceof \think\Paginator): $i = 0; $__LIST__ = $fagui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="project">
                    <article>
                        <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>" length="27"><?php echo $vo['title']; ?></a>
                        <p>
                            <small><?php echo date('Y年m月d日',$vo['time']); ?></small>
                        </p>

                    </article>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <h1><p>投资指南</p><a href="<?php echo url('index/chouhua/news'); ?>">更多</a></h1>
                <div class="line"></div>
                <?php if(is_array($touzhi) || $touzhi instanceof \think\Collection || $touzhi instanceof \think\Paginator): $i = 0; $__LIST__ = $touzhi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="project">
                    <article>
                        <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>" length="27"><?php echo $vo['title']; ?></a>
                        <p>
                            <small><?php echo date('Y年m月d日',$vo['time']); ?></small>
                        </p>

                    </article>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <h1><p>热点新闻</p><a href="<?php echo url('index/chouhua/news'); ?>">更多</a></h1>
                <div class="line"></div>
                <?php if(is_array($look) || $look instanceof \think\Collection || $look instanceof \think\Paginator): $i = 0; $__LIST__ = $look;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="project">
                    <article>
                        <a href="<?php echo url('index/chouhua/newsinfo',['id'=>$vo['id']]); ?>" length="27"><?php echo $vo['title']; ?></a>
                        <p>
                            <small><?php echo date('Y年m月d日',$vo['time']); ?></small>
                        </p>

                    </article>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
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
    $("#swlink2").addClass("active");
</script>

</body>
</html>