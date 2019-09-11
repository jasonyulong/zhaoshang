<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:63:"D:\www\zhaoshang\application\..\public\tpl\index\zht\index.html";i:1544165068;s:42:"D:\www\zhaoshang\public\tpl\index\zht.html";i:1543569094;s:36:"../public/tpl/index/include_nav.html";i:1545630620;s:32:"../public/tpl/index/zht_nav.html";i:1543566954;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
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
    
<link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
<link rel="stylesheet" href="/images/zhaoshang/css/zh-fuhuaindex.css">
<title>孵化器</title>

    <base href="zh-newsinfo.html">
</head>
<body>
<input type="hidden" value="navts" data-active="">
<input type="hidden" value="tslink4" data-active="">



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
    <div id="btnlink"><a href="<?php echo url('index/zhaoshang/xuqiu',['type'=>'lou']); ?>" style="position: absolute;right: 0" class="btn btn-danger">免费发布资讯</a></div>
</div>







<div class="mainwrap">
    <div id="main">
        <div class="link">
            <a href="<?php echo url('index/zht/index'); ?>" id="zhlink1" ><img src="/images/zhaoshang/img/shitizhaoshang/90.png" alt=""><h1>孵化器</h1></a>
<a href="<?php echo url('index/zht/zc'); ?>" id="zhlink2"><img src="/images/zhaoshang/img/shitizhaoshang/91.png" alt=""><h1>众创空间</h1></a>
<a href="<?php echo url('index/zht/t'); ?>" id="zhlink3"><img src="/images/zhaoshang/img/shitizhaoshang/92.png" alt=""><h1>商业综合体</h1></a>
        </div>
        <div id="zh-main">
            <section id="zh-fuhua">
                <div class="fuhua-left flex">
                    <h1>最新资讯</h1>
                    <?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): $k = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                            <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>" class="dis-href "><img src="<?php echo $vo['pic']; ?>" width="524" height="310" alt=""><p class="abs-rgba " style="padding:  12px 0;font-size: 16px" ><?php echo $vo['title']; ?></p></a>
                        <?php else: ?>
                            <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>" class="dis-href"><img src="<?php echo $vo['pic']; ?>" width="260" height="158" alt=""><p class="abs-rgba "><?php echo $vo['title']; ?></p></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="fuhua-rigth">
                    <p class="flex">
                        <a href="javascript:void(0)"  class="active" >新闻资讯</a>
                        <a href="javascript:void(0)">法规政策</a>
                        <a href="javascript:void(0)">行业动态</a>
                    </p>
                    <article class="article" style="display: block">
                        <?php if(is_array($t1) || $t1 instanceof \think\Collection || $t1 instanceof \think\Paginator): $k = 0; $__LIST__ = $t1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                                <div class="hotnews">
                                    <section>
                                        <div class="data"><?php echo date('d',$vo['time']); ?><br><?php echo date('Y-m',$vo['time']); ?></div>
                                        <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                                        <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>">更多</a>
                                    </section>
                                    <blockquote length="100"><?php echo mb_substr(remove_html($vo['content']),0,200,'utf-8'); ?></blockquote>
                                </div>
                            <?php else: ?>
                                <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>"><p><img src="/images/zhaoshang/img/shitizhaoshang/93.png" alt=""><?php echo $vo['title']; ?></p><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </article>
                    <article class="article">
                        <?php if(is_array($t2) || $t2 instanceof \think\Collection || $t2 instanceof \think\Paginator): $k = 0; $__LIST__ = $t2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                        <div class="hotnews">
                            <section>
                                <div class="data"><?php echo date('d',$vo['time']); ?><br><?php echo date('Y-m',$vo['time']); ?></div>
                                <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                                <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>">更多</a>
                            </section>
                            <blockquote length="100"><?php echo mb_substr(remove_html($vo['content']),0,200,'utf-8'); ?></blockquote>
                        </div>
                        <?php else: ?>
                        <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>"><p><img src="/images/zhaoshang/img/shitizhaoshang/93.png" alt=""><?php echo $vo['title']; ?></p><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </article>
                    <article class="article">
                        <?php if(is_array($t3) || $t3 instanceof \think\Collection || $t3 instanceof \think\Paginator): $k = 0; $__LIST__ = $t3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                        <div class="hotnews">
                            <section>
                                <div class="data"><?php echo date('d',$vo['time']); ?><br><?php echo date('Y-m',$vo['time']); ?></div>
                                <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                                <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>">更多</a>
                            </section>
                            <blockquote length="100"><?php echo mb_substr(remove_html($vo['content']),0,200,'utf-8'); ?></blockquote>
                        </div>
                        <?php else: ?>
                        <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>"><p><img src="/images/zhaoshang/img/shitizhaoshang/93.png" alt=""><?php echo $vo['title']; ?></p><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </article>

                </div>

            </section>
            <article class="title">
                招商中心<br>
                我们为您提供专业的服务
            </article>
            <!--新闻start-->
            <a href="<?php echo url('index/chouhua/zhaoshang'); ?>" class="flex text-right" style="text-align: right;position: relative;display: block;top: -25px;"><img
                    src="/images/zhaoshang/img/shitizhaoshang/94.png" alt=""></a>
            <!--新闻end-->
            <!--案例start-->
            <div class="anli">
                <div class="flex">
                    <?php if(is_array($zt) || $zt instanceof \think\Collection || $zt instanceof \think\Paginator): $i = 0; $__LIST__ = $zt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/chouhua/zheng',['id'=>$vo['id']]); ?>">
                        <img src="<?php echo $vo['pic']; ?>" width="260" height="168" alt="">
                        <h4><?php echo $vo['title']; ?></h4>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!--案例end-->
            <article class="title">
                我们的服务<br>
                我们为您提供专业的服务
            </article>
            <!--服务start-->
            <div id="fuhua-fuwu" class="flex">
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
                <section>
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/95.png" alt="">
                    </div>
                    <div>
                        <h1>商业策划</h1>
                        <p>我们提供7X24小时的占率策划 方便您及时掌握</p>
                    </div>
                </section>
            </div>
            <!--服务end-->
            <article class="title">
                成功案例<br>
                我们为您提供专业的服务
            </article>
            <!--案例start-->
            <div id="fuhua-anli" style="position: relative">
                <div style="position: absolute;width: 300px;height: 100%;border: 3px solid #005196;left: 100px;top: 0px"></div>
                <div class="lunbowrap">
                    <div></div>
                    <div></div>
                    <section>
                        <div id="myCarousels">
                            <div id="myCarousel" class="carousel slide">
                                <p id="myCarouselrigth"><img src="/images/zhaoshang/img/shitizhaoshang/96.png" alt=""></p>
                                <!--  &lt;!&ndash; 轮播（Carousel）指标 &ndash;&gt;
                                  <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                  </ol>-->
                                <!-- 轮播（Carousel）项目 -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div>
                                            <article>
                                                <h2>武汉产业园</h2>
                                                <blockquote length="150">
                                                    产业园是指由政府或企业为实现产业发展目标而创立的特殊区位环境。它的类型十分丰富，包括高新技术开发区、经济技术开发区、科技园、工
                                                    产业园是指由政府或企业为实现产业发展目标而创立的特殊区位环境。它的类型十分丰富，包括高新技术开发区、经济技术开发区、科技园、工
                                                </blockquote>
                                                <a href="<?php echo url('index/zht/anli'); ?>">查看详情</a>
                                            </article>
                                            <a href="<?php echo url('index/zht/anli'); ?>">
                                                <img src="/images/zhaoshang/img/shitizhaoshang/71.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <article>
                                                <h2>武汉产业园</h2>
                                                <blockquote>
                                                    产业园是指由政府或企业为实现产业发展目标而创立的特殊区位环境。它的类型十分丰富，包括高新技术开发区、经济技术开发区、科技园、工
                                                </blockquote>
                                                <a href="<?php echo url('index/zht/anli'); ?>">查看详情</a>
                                            </article>
                                            <a href="<?php echo url('index/zht/anli'); ?>">
                                                <img src="/images/zhaoshang/img/shitizhaoshang/71.jpg" alt="">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <div>
                                            <article>
                                                <h2>武汉产业园</h2>
                                                <blockquote>
                                                    产业园是指由政府或企业为实现产业发展目标而创立的特殊区位环境。它的类型十分丰富，包括高新技术开发区、经济技术开发区、科技园、工
                                                </blockquote>
                                                <a href="<?php echo url('index/zht/anli'); ?>">查看详情</a>
                                            </article>
                                            <a href="<?php echo url('index/zht/anli'); ?>">
                                                <img src="/images/zhaoshang/img/shitizhaoshang/71.jpg" alt="">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!--案例end-->
            <article class="title">
                热门活动<br>
                我们为您提供专业的服务
            </article>
            <div id="zh-huodong">
                <a href="" >
                    <img src="/images/zhaoshang/img/shitizhaoshang/70.jpg" alt="">
                    <article>
                        <h2 >活动活动活动活动</h2>
                        <p>2018-11-25</p>
                        <blockquote length="40">
                            活动活动活动活动活动活动活动活动活动活动活动活动活动活动活动活动活动活动活动活动
                        </blockquote>
                    </article>
                </a>
                <?php if(is_array($huoding) || $huoding instanceof \think\Collection || $huoding instanceof \think\Paginator): $i = 0; $__LIST__ = $huoding;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="pro">
                    <h3>
                        <p><?php echo date('m/d',$vo['time']); ?></p>
                        <p><?php echo date('Y',$vo['time']); ?></p>
                    </h3>
                    <p><?php echo $vo['title']; ?></p>
                    <blockquote length="40"><?php echo mb_substr(remove_html($vo['content']),0,40,'utf-8'); ?></blockquote>
                    <a href="<?php echo url('index/zht/newsinfo',['id'=>$vo['id']]); ?>">了解更多>></a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <article class="title">
                合作伙伴<br>
                我们为您提供专业的服务
            </article>
            <!--合作伙伴start-->
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
            <!--合作伙伴end-->
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
        $("#myCarousel").hover(function () {
            $("#myCarouselrigth").show()
        },function () {
            $("#myCarouselrigth").hide()
        })
        /*     $("#myCarousel").carousel({interval:3000})*/
        $("#myCarouselrigth").click(function () {
            $("#myCarousel").carousel('next')
        })
        $(".fuhua-rigth>p>a").click(function () {
            var $index = $(this).index()
            $(this).addClass("active").siblings().removeClass("active")
            $(".article").eq($index).fadeIn().siblings(".article").hide()
        })
    })


    $("#zhtzht").addClass("active");
    $("#zhlink1").addClass("active");
</script>

</body>
</html>