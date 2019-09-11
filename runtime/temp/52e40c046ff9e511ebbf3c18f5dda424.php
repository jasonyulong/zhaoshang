<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:60:"D:\www\zhaoshang\application\..\public\tpl\index\zht\zc.html";i:1543470865;s:42:"D:\www\zhaoshang\public\tpl\index\zht.html";i:1542936272;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:32:"../public/tpl/index/zht_nav.html";i:1543470818;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>众创空间</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
<link rel="stylesheet" href="/images/zhaoshang/css/zh-fuhuaindex.css">
<base href="zh-newsinfo.html">
<link rel="stylesheet" href="/images/zhaoshang/css/zh-zongchuang.css">

    <base href="zh-newsinfo.html">
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
            <a href="<?php echo url('index/zht/index'); ?>" id="zhlink1" ><img src="/images/zhaoshang/img/shitizhaoshang/90.png" alt=""><h1>孵化器</h1></a>
<a href="<?php echo url('index/zht/zc'); ?>" id="zhlink2"><img src="/images/zhaoshang/img/shitizhaoshang/91.png" alt=""><h1>众创空间</h1></a>
<a href="<?php echo url('index/zht/t'); ?>" id="zhlink3"><img src="/images/zhaoshang/img/shitizhaoshang/92.png" alt=""><h1>商业综合体</h1></a>
        </div>
        <div id="zh-main">
            <div class="section1">
                <section >
                    <h1 class="title flex"><span class="abs-line"></span>新闻资讯 </h1>
                    <div class="flex">
                        <div>
                            <?php if(is_array($t1) || $t1 instanceof \think\Collection || $t1 instanceof \think\Paginator): $i = 0; $__LIST__ = $t1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dian" length="20"><?php echo $vo['title']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <a href="">
                            <img src="/images/zhaoshang/img/shitizhaoshang/74.jpg" alt="">
                        </a>
                    </div>
                    <a href="" class="flex"><img src="/images/zhaoshang/img/shitizhaoshang/75.jpg" alt=""></a>
                </section>
                <section>
                    <h2 style="font-weight: bold;font-size: 22px">空间类型</h2>
                    <div class="zh-kongjian">
                        <p><span class="active">启迪之星</span><span>启迪之星</span><span>启迪之星</span></p>
                        <div class="wrap active">
                            <div class="content">
                                <img src="/images/zhaoshang/img/shitizhaoshang/76.jpg" width="250" height="171"  alt="">
                                <blockquote>
                                    <p>1务代服务代服务务代服...</p>
                                    <article>务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服</article>
                                    <a href="">查看详情</a>
                                </blockquote>
                            </div>
                        </div>
                        <div class="wrap">
                            <div class="content">
                                <img src="/images/zhaoshang/img/shitizhaoshang/76.jpg" width="250" height="171"  alt="">
                                <blockquote>
                                    <p>务2代服务代服务务代服...</p>
                                    <article>务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服</article>
                                    <a href="">查看详情</a>
                                </blockquote>
                            </div>
                        </div>
                        <div class="wrap">
                            <div class="content">
                                <img src="/images/zhaoshang/img/shitizhaoshang/76.jpg" width="250" height="171"  alt="">
                                <blockquote>
                                    <p>33务代服务代服务务代服...</p>
                                    <article>务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服务代服务代服务务代服</article>
                                    <a href="">查看详情</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="section2">
                <section>
                    <h1 class="title flex"><span class="abs-line"></span>图文资讯 </h1>
                    <div id="section2" style="">
                    <?php if(is_array($t1) || $t1 instanceof \think\Collection || $t1 instanceof \think\Paginator): $k = 0; $__LIST__ = $t1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                        <div>
                            <img src="<?php echo $vo['pic']; ?>" width="210" height="140" alt="">
                        </div>
                        <section >
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                            <blockquote style="" length="100"><?php echo mb_substr(remove_html($vo['content']),0,60,'utf-8'); ?></blockquote>
                        </section>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div style="">
                        <?php if(is_array($t1) || $t1 instanceof \think\Collection || $t1 instanceof \think\Paginator): $k = 0; $__LIST__ = $t1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k != '1'): ?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dian"><?php echo $vo['title']; ?><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </section>
                <section >
                    <div id="zh-list" >
                        <a href="" style=" ">
                            <img src="/images/zhaoshang/img/shitizhaoshang/97.png" alt="">
                            <span>免费选址</span>
                        </a>
                        <a href="" style=" ">
                            <img src="/images/zhaoshang/img/shitizhaoshang/98.png" alt="">
                            <span>免费选址</span>
                        </a>
                        <a href="" style=" ">
                            <img src="/images/zhaoshang/img/shitizhaoshang/99.png" alt="">
                            <span>免费选址</span>
                        </a>
                        <a href="" style=" ">
                            <img src="/images/zhaoshang/img/shitizhaoshang/100.png" alt="">
                            <span>免费选址</span>
                        </a>
                        <a href="" style=" ">
                            <img src="/images/zhaoshang/img/shitizhaoshang/101.png" alt="">
                            <span>免费选址</span>
                        </a>
                        <a href="" style=" ">
                            <img src="/images/zhaoshang/img/shitizhaoshang/102.png" alt="">
                            <span>免费选址</span>
                        </a>
                    </div>
                    <a href="" class="flex" style="padding-left: 10px"><img src="/images/zhaoshang/img/shitizhaoshang/78.jpg" width="531" height="97" alt=""></a>
                </section>
            </div>
            <div class="section3">
                <section>
                    <h1 class="title flex"><span class="abs-line"></span>法规政策 </h1>
                    <?php if(is_array($t3) || $t3 instanceof \think\Collection || $t3 instanceof \think\Paginator): $i = 0; $__LIST__ = $t3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dian"><?php echo $vo['title']; ?><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
                <section>
                    <h1 class="title flex"><span class="abs-line"></span>行业动态 </h1>
                    <?php if(is_array($t4) || $t4 instanceof \think\Collection || $t4 instanceof \think\Paginator): $i = 0; $__LIST__ = $t4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dian"><?php echo $vo['title']; ?><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
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
    $(".zh-kongjian>p>span").click(function () {
        var $index = $(this).index()
        $(this).addClass("active").siblings("span").removeClass("active")
        $(".wrap").eq($index).fadeIn().siblings(".wrap").hide()
    })
</script>
<script language="javascript">
    $("#zhlink2").addClass("active");
    $("#zhtzht").addClass("active");
</script>

</body>
</html>