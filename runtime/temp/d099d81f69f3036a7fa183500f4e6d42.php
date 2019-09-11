<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:69:"D:\www\zhaoshang\application\..\public\tpl\index\zhaoshang\index.html";i:1543285617;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1542695363;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/zs_nav.html";i:1542594492;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    
<title>实体招商首页</title>
<link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">

</head>
<body>
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

        <div class="link"><a href="<?php echo url('index/zhaoshang/index'); ?>" id="zhaoshang_index" >首页</a>
<a href="<?php echo url('index/zhaoshang/news'); ?>" id="zhaoshang_news" >新闻中心</a>
<a href="<?php echo url('index/zhaoshang/fang_index'); ?>" id="zhaoshang_fang" >厂房租售</a>
<a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" id="zhaoshang_tudi">土地租售</a>
<a href="<?php echo url('index/zhaoshang/lou_index'); ?>" id="zhaoshang_lou">写字楼出租</a>
<a href="<?php echo url('index/zhaoshang/friend'); ?>" id="zhaoshang_friend">合作名企</a></div>

        <h2><span>热门推荐</span><a href=""><img src="/images/zhaoshang/img/shitizhaoshang/3.png" alt=""></a></h2>
        <div class="line"></div>
        <div  id="hot">
            <?php if(is_array($hotbanner) || $hotbanner instanceof \think\Collection || $hotbanner instanceof \think\Paginator): $i = 0; $__LIST__ = $hotbanner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('index/Fang/info',['id'=>$vo['id']]); ?>">
                <img src="<?php echo $vo['pic']; ?>" width="266">
                <p><?php echo $vo['title']; ?></p>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>


        <h2><span>土地出租</span><a href=""><img src="/images/zhaoshang/img/shitizhaoshang/3.png" alt=""></a></h2>
        <div class="line"></div>
        <div class="product">
            <div class="productfirst">
                <h3>土地城市推荐</h3>
                <section>
                    <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $k = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <a href="javascript:tudi_index_area_<?php echo $vo['code']; ?>();" <?php if($k % 3!=0): ?>class="border"<?php endif; ?>><?php echo $vo['name']; ?></a>
                    <form action="<?php echo url('index/Zhaoshang/tudi_index'); ?>" id="tudi_index_area_<?php echo $vo['code']; ?>" method="post"><input type="hidden" name="area" value="<?php echo $vo['code']; ?>"></form>
                    <script>
                        function tudi_index_area_<?php echo $vo['code']; ?>(){
                            $("#tudi_index_area_<?php echo $vo['code']; ?>").val(<?php echo $vo['code']; ?>);
                            $("#tudi_index_area_<?php echo $vo['code']; ?>").submit()
                        }
                    </script>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
                <h3>土地需求推荐</h3>
                <article>
                    <?php if(is_array($tudizi) || $tudizi instanceof \think\Collection || $tudizi instanceof \think\Paginator): $i = 0; $__LIST__ = $tudizi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Tudi/info',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </article>
            </div>
            <div class="productsecond">
                <?php if(is_array($tudipic) || $tudipic instanceof \think\Collection || $tudipic instanceof \think\Paginator): $i = 0; $__LIST__ = $tudipic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="pro">
                    <a href="<?php echo url('index/Tudi/info',['id'=>$vo['id']]); ?>">
                        <img src="<?php echo $vo['pic']; ?>"  width="196" height="127" alt="">
                        <p><?php echo $vo['title']; ?></p>
                        <p><span><img src="/images/zhaoshang/img/shitizhaoshang/5.png" width="11" height="9" alt="">万元</span><strong><span><?php echo $vo['area']; ?></span>亩</strong></p>
                        <p><span><img src="/images/zhaoshang/img/shitizhaoshang/6.png" alt=""><?php echo $vo['pro_name']; ?>-<?php echo $vo['city_name']; ?></span></p>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="productthree">
                <h3><span>政策速递</span><a href="<?php echo url('index/Zhaoshang/news'); ?>">更多</a></h3>
                <div class="newlist">
                    <?php if(is_array($tudiart) || $tudiart instanceof \think\Collection || $tudiart instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($tudiart) ? array_slice($tudiart,0,7, true) : $tudiart->slice(0,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <h3><span>政策速递</span><a href="<?php echo url('index/Zhaoshang/news'); ?>">更多</a></h3>
                <div class="newlist">
                    <?php if(is_array($tudiart) || $tudiart instanceof \think\Collection || $tudiart instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($tudiart) ? array_slice($tudiart,7,7, true) : $tudiart->slice(7,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>


        <h2><span>厂房出租</span><a href=""><img src="/images/zhaoshang/img/shitizhaoshang/3.png" alt=""></a></h2>
        <div class="line"></div>
        <div class="product">
            <div class="productfirst">
                <h3>厂房城市推荐</h3>
                <section>
                    <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $k = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <a href="javascript:fang_index_area_<?php echo $vo['code']; ?>();" <?php if($k % 3!=0): ?>class="border"<?php endif; ?>><?php echo $vo['name']; ?></a>
                    <form action="<?php echo url('index/Zhaoshang/fang_index'); ?>" id="fang_index_area_<?php echo $vo['code']; ?>" method="post"><input type="hidden" name="area" value="<?php echo $vo['code']; ?>"></form>
                    <script>
                        function fang_index_area_<?php echo $vo['code']; ?>(){
                            $("#fang_index_area_<?php echo $vo['code']; ?>").val(<?php echo $vo['code']; ?>);
                            $("#fang_index_area_<?php echo $vo['code']; ?>").submit()
                        }
                    </script>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
                <h3>厂房需求推荐</h3>
                <article>
                    <?php if(is_array($fangzi) || $fangzi instanceof \think\Collection || $fangzi instanceof \think\Paginator): $i = 0; $__LIST__ = $fangzi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Fang/info',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </article>
            </div>
            <div class="productsecond">
                <?php if(is_array($fangpic) || $fangpic instanceof \think\Collection || $fangpic instanceof \think\Paginator): $i = 0; $__LIST__ = $fangpic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="pro">
                    <a href="<?php echo url('index/Fang/info',['id'=>$vo['id']]); ?>">
                        <img src="<?php echo $vo['pic']; ?>"  width="196" height="127" alt="">
                        <p><?php echo $vo['title']; ?></p>
                        <p><span><img src="/images/zhaoshang/img/shitizhaoshang/5.png" width="11" height="9" alt="">万元</span><strong><span><?php echo $vo['area']; ?></span>亩</strong></p>
                        <p><span><img src="/images/zhaoshang/img/shitizhaoshang/6.png" alt=""><?php echo $vo['pro_name']; ?>-<?php echo $vo['city_name']; ?></span></p>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="productthree">
                <h3><span>政策速递</span><a href="<?php echo url('index/Zhaoshang/news'); ?>">更多</a></h3>
                <div class="newlist">
                    <?php if(is_array($fangart) || $fangart instanceof \think\Collection || $fangart instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($fangart) ? array_slice($fangart,0,7, true) : $fangart->slice(0,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <h3><span>政策速递</span><a href="<?php echo url('index/Zhaoshang/news'); ?>">更多</a></h3>
                <div class="newlist">
                    <?php if(is_array($fangart) || $fangart instanceof \think\Collection || $fangart instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($fangart) ? array_slice($fangart,7,7, true) : $fangart->slice(7,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>



        <h2><span>写字楼出租</span><a href=""><img src="/images/zhaoshang/img/shitizhaoshang/3.png" alt=""></a></h2>
        <div class="line"></div>
        <div class="product">
            <div class="productfirst">
                <h3>写字楼城市推荐</h3>
                <section>
                    <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $k = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <a href="javascript:lou_index_area_<?php echo $vo['code']; ?>();" <?php if($k % 3!=0): ?>class="border"<?php endif; ?>><?php echo $vo['name']; ?></a>
                    <form action="<?php echo url('index/Zhaoshang/lou_index'); ?>" id="lou_index_area_<?php echo $vo['code']; ?>" method="post"><input type="hidden" name="area" value="<?php echo $vo['code']; ?>"></form>
                    <script>
                        function lou_index_area_<?php echo $vo['code']; ?>(){
                            $("#lou_index_area_<?php echo $vo['code']; ?>").val(<?php echo $vo['code']; ?>);
                            $("#lou_index_area_<?php echo $vo['code']; ?>").submit()
                        }
                    </script>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
                <h3>写字楼需求推荐</h3>
                <article>
                    <?php if(is_array($louzi) || $louzi instanceof \think\Collection || $louzi instanceof \think\Paginator): $i = 0; $__LIST__ = $louzi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Lou/info',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </article>
            </div>
            <div class="productsecond">
                <?php if(is_array($loupic) || $loupic instanceof \think\Collection || $loupic instanceof \think\Paginator): $i = 0; $__LIST__ = $loupic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="pro">
                    <a href="<?php echo url('index/Lou/info',['id'=>$vo['id']]); ?>">
                        <img src="<?php echo $vo['pic']; ?>"  width="196" height="127" alt="">
                        <p><?php echo $vo['title']; ?></p>
                        <p><span><img src="/images/zhaoshang/img/shitizhaoshang/5.png" width="11" height="9" alt="">万元</span><strong><span><?php echo $vo['area']; ?></span>亩</strong></p>
                        <p><span><img src="/images/zhaoshang/img/shitizhaoshang/6.png" alt=""><?php echo $vo['pro_name']; ?>-<?php echo $vo['city_name']; ?></span></p>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="productthree">
                <h3><span>政策速递</span><a href="<?php echo url('index/Zhaoshang/news'); ?>">更多</a></h3>
                <div class="newlist">
                    <?php if(is_array($louart) || $louart instanceof \think\Collection || $louart instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($louart) ? array_slice($louart,0,7, true) : $louart->slice(0,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <h3><span>政策速递</span><a href="<?php echo url('index/Zhaoshang/news'); ?>">更多</a></h3>
                <div class="newlist">
                    <?php if(is_array($louart) || $louart instanceof \think\Collection || $louart instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($louart) ? array_slice($louart,7,7, true) : $louart->slice(7,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>


        <h2><span>合作名企</span><a href=""><img src="/images/zhaoshang/img/shitizhaoshang/3.png" alt=""></a></h2>
        <div class="line"></div>
        <table class="table">
            <tr>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/2.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/3.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/4.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/5.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/6.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/7.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/8.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/9.jpg" alt=""></td>
            </tr>
            <tr>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/9.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/11.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/12.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/13.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/14.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/15.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/16.jpg" alt=""></td>
                <td><img src="/images/zhaoshang/img/shitizhaoshang/17.jpg" alt=""></td>
            </tr>
        </table>
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
$("#shitizhaoshang").addClass("active");
$("#zhaoshang_index").addClass("active");
</script>

</body>
</html>