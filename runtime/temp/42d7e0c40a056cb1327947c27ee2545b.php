<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\www\zhaoshang\application\..\public\tpl\index\zht\mallinfo.html";i:1543288485;s:42:"D:\www\zhaoshang\public\tpl\index\zht.html";i:1542936272;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:33:"../public/tpl/index/zht_nav2.html";i:1542956280;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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

<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.8&ak=y9XrqIdFduE2IxUeu10pKhsCf5kNEXUv"></script>


<style>
    #project{height: 677px;box-shadow: 0 2px 2px rgba(0,0,0,0.2);padding: 38px;display: flex;flex-direction: column;justify-content: space-around}
    #project>div:first-of-type{height: 70px;display: flex;justify-content: space-between;border-bottom: 2px solid #dcdcdc;align-items: flex-start;padding-right: 30px;margin-bottom: 30px}
    #project>div>h1{color: #666666;}
    #project>div>h1:first-line{color: #333333;font-size: 22px;font-weight: bold;line-height: 35px}
    #project>div>h1+a{height: 38px;line-height: 38px;padding: 0 10px;background-color: #f8f8f8}
    #project  a:hover{background-color: red;color: white}
    .proleft{display: flex;flex-direction: column;justify-content: space-between}
    .proleft>div:last-child{display: flex;justify-content: space-between}
    .proleft>div:last-child>img{cursor: pointer}
    .prorigth{width: 510px;padding-left: 20px}
    .prorigth>div:first-of-type{display: flex;justify-content: space-around;margin-bottom: 50px;}
    .first{font-size: 18px;font-weight: bold;color: #333333}
    .last{font-size: 12px;font-weight: normal;color: #666666}
    .prorigth>div:nth-child(2){display: flex;line-height: 40px;flex-wrap: wrap;color: #888888;margin-bottom: 50px}
    .prorigth>div:nth-child(2) .key{width: 30%}
    .prorigth>div:nth-child(2) .value{width: 70%;padding-left: 20px;color: #333333}
    .prorigth>div:nth-child(3){display: flex;}
    .prorigth>div:nth-child(3)>a{background-color: #f8f8f8;color: #666666;margin-right: 30px;font-size: 14px;height: 38px;line-height: 38px;padding: 0 10px}
    .prorigth>div:nth-child(3)>:hover{background-color: red;color:white}
    .prorigth>div:nth-child(4){display: flex;align-items: center;margin-top: 50px}
    .prorigth>div:nth-child(4)>span{margin-right: 20px;display: flex;align-items: center}
    .prorigth>div:nth-child(4)>span img{margin:  0 5px}
    .bdshare-button-style0-16 a, .bdshare-button-style0-16 .bds_more {
        float: left;
        font-size: 12px;
        padding-left: 17px;
        line-height: 16px;
        height: 16px;
        background-image: url(/images/zhaoshang/img/3.svg) !important;
        background-repeat: no-repeat;
        cursor: pointer;
        margin: 6px 6px 6px 6px;
    }
    bdshare-button-style0-16 a, .bdshare-button-style0-16 .bds_more:hover{background-color: transparent !important;}
    #xuqiu{display: flex;height: 86px;padding-left: 20px;margin-top: 20px;}
    #xuqiu>div{height: 100%;display: flex;border-bottom: 3px solid transparent;margin-right: 30px;align-items: center;cursor: pointer}
    #xuqiu>div:hover{border-bottom: 3px solid #FF3333;}
    #xuqiu>div.active{border-bottom: 3px solid #FF3333;}
    .xuqiu{box-shadow: 0 2px 2px rgba(0,0,0,0.2);min-height: 1px;margin-top: 30px;padding: 15px;display: none}
    .xuqiu>p,.map>p{font-weight: bold;color: #333333;font-size: 18px;display: flex;align-items: center;padding-bottom: 10px;border-bottom: 1px solid #dcdcdc}
    .xuqiu>p>img,.map>p>img{margin-right: 10px}
    .xuqiu>blockquote{padding: 40px 30px;color: #666666;line-height: 30px}
    .map{margin-top: 30px;padding: 0 15px;box-shadow: 0 2px 2px rgba(0,0,0,0.2)}
    .map>blockquote{padding: 40px 0px}
    #baidumap{width: 100%;height: 430px}
    #tuijian{margin-top: 30px}
</style>

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
            <a href="<?php echo url('index/zht/index'); ?>" id="zhlink1">首页</a>
<a href="<?php echo url('index/zht/mall'); ?>" id="zhlink7">商业mall</a>
<a href="<?php echo url('index/chouhua/fuwu'); ?>" id="zhlink3">走进园区</a>
<a href="<?php echo url('index/zht/huodong'); ?>" id="zhlink5" >园区活动</a>
<a href="<?php echo url('index/zht/anli'); ?>" id="zhlink6" >成功案例</a>
        </div>

        <div id="project" style="">
            <div style="">
                <h1>
                    <p><?php echo $info['title']; ?></p>
                    <p><?php echo $info['address']; ?></p>
                </h1>
                <a href="" style="">我要发布项目</a>
            </div>
            <div style="width: 100%;height: 515px;display: flex;justify-content: space-between">
                <div class="proleft">
                    <img src="<?php echo $info['pic']; ?>" width="560" height="400" alt="">
                    <div>
                        <img src="/images/zhaoshang/img/shitizhaoshang/82.jpg" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/81.jpg" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/82.jpg" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/81.jpg" alt="">
                    </div>
                </div>
                <div class="prorigth">
                    <div>
                        <div>
                            <p class="first">项目类型</p>
                            <p class="last text-center" ><?php echo $info['hangye']; ?></p>
                        </div>
                        <div>
                            <p class="first">开业时间</p>
                            <p class="last text-center" ><?php echo $info['addtime']; ?></p>
                        </div>

                    </div>
                    <div style="">
                        <span class="key text-left"    >联系人              </span>
                        <span class="value"   > <?php echo $info['name']; ?></span>
                        <span class="key text-left"    >电话 </span>
                        <span class="value"   > <?php echo $info['tel']; ?></span>
                        <span class="key text-left"     >开业时间</span>
                        <span class="value"   ><?php echo $info['addtime']; ?></span>
                        <span class="key text-left"    >商业楼层</span>
                        <span class="value"   ><?php echo $info['lou']; ?></span>
                        <span class="key text-left"    >商业建筑面积 </span>
                        <span class="value"   > <?php echo $info['jianzhu']; ?></span>
                        <span class="key text-left"     >项目地址</span>
                        <span class="value"   ><?php echo $info['addtime']; ?></span>
                    </div>
                    <div >
                        <a href="" >查看联系方式</a>
                        <a href="" >查看类似项目</a>
                    </div>
                    <div>
                            <span>分享 <div class="bdsharebuttonbox" data-tag="share_1">
                                <a class="bds_more" data-cmd="more" ></a>
                            </div></span>
                        <span>收藏 <img src="/images/zhaoshang/img/4.svg" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="xuqiu" class="mainbox-shadow">
            <div class="active"><span>招商需求</span></div>
            <div><span>项目概况</span></div>
            <div><span>项目分析</span></div>
        </div>
        <div class="xuqiu" style="display: block;">
            <p ><img src="/images/zhaoshang/img/shitizhaoshang/103.png" alt="">招商需求</p>
            <blockquote><?php echo $info['des']; ?></blockquote>
        </div>
        <div class="xuqiu">
            <p ><img src="/images/zhaoshang/img/shitizhaoshang/103.png" alt="">项目概况</p>
            <blockquote><?php echo $info['gaikuang']; ?></blockquote>
        </div>
        <div class="xuqiu">
            <p ><img src="/images/zhaoshang/img/shitizhaoshang/103.png" alt="">项目分析</p>
            <blockquote><?php echo $info['fenxi']; ?></blockquote>
        </div>
        <div class="map">
            <p ><img src="/images/zhaoshang/img/shitizhaoshang/104.png" alt="">项目地图</p>
            <blockquote>
                <div id="baidumap">

                </div>
            </blockquote>
        </div>
        <div id="tuijian" class="mainbox-shadow">
            <h2><img src="/images/zhaoshang/img/shitizhaoshang/25.png" alt="">看过该商业mall的用户还看过</h2>
            <div>
                <?php if(is_array($ran) || $ran instanceof \think\Collection || $ran instanceof \think\Paginator): $i = 0; $__LIST__ = $ran;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="">
                    <img src="<?php echo $vo['pic']; ?>" alt="">
                    <h4><?php echo $vo['title']; ?></h4>
                    <p><span><strong><?php echo $vo['jianzhu']; ?></strong>面积</span><span><?php echo $vo['pro']; ?>-<?php echo $info['city']; ?></span></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <a href="">点击查看更多</a>
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
    var map = new BMap.Map("baidumap");
    var point = new BMap.Point(<?php echo $info['mapx']; ?>,<?php echo $info['mapy']; ?>);
    map.centerAndZoom(point,16);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);               // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

    $(function () {
        $("#xuqiu>div").click(function () {
            var $index = $(this).index()
            $(this).addClass("active").siblings().removeClass("active")
            $(".xuqiu").eq($index).fadeIn(300).siblings(".xuqiu").hide()
        })
        $(".proleft>div:last-child>img").click(function () {
            var $src  = $(this).attr("src")
            $(".proleft>img").attr("src",$src)
        })
    })
</script>
<script>
    window._bd_share_config = {
        common : {
            bdText : $("#project>div>h1").text().trim(),
            bdDesc : $("#project>div>h1>p:last-child").text().trim(),
            bdUrl : location.href,
            bdPic : ""
        },
        share : [{
            "bdSize" : 16
        }],
        slide : [{
            bdImg : 0,
            bdPos : "right",
            bdTop : 100
        }],
        /*image : [{
         viewType : 'list',
         viewPos : 'top',
         viewColor : 'black',
         viewSize : '16',
         viewList : ['qzone','tsina','huaban','tqq','renren']
         }],*/
        selectShare : [{
            "bdselectMiniList" : ['qzone','tqq','kaixin001','bdxc','tqf']
        }]
    }
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
<script language="javascript">
    $("#zhtzht").addClass("active");
    $("#zhlink7").addClass("active");
</script>

</body>
</html>