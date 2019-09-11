<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"D:\www\zhaoshang\application\..\public\tpl\index\zht\huodong.html";i:1543283207;s:42:"D:\www\zhaoshang\public\tpl\index\zht.html";i:1542936272;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:33:"../public/tpl/index/zht_nav2.html";i:1542956280;s:31:"../public/tpl/index/footer.html";i:1542695334;}*/ ?>
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
    
<title>案例</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
<style>
    .anli{margin-top: 80px;}
    .flex{justify-content: flex-start}
    .flex>a{margin-bottom: 26px;margin-right: 25px}
    .flex>a>div{overflow: hidden;width: 260px;height: 168px}
    .flex>a img{display: block;transition: 0.2s ease-in-out}
    .flex>a img:hover{transform: scale(1.05)}
    .anli{display: none;}
    .anli>.flex h4 {
        color: #111111;
        padding: 5px 0;

    }

    #chooes{width: 480px;margin: 0 auto;height: 50px;border-radius: 25px;background-color: #f8f8f8;display: flex;justify-content: space-between;line-height: 50px}
    #chooes>div{cursor: pointer;width: 50%;height: 50px;color: #666666;text-align: center}
    #chooes>div.active{background-color: #3d87d1;color: white}
    #chooes>div:first-child{border-radius: 25px 0 0 25px}
    #chooes>div:last-child{border-radius: 0px 25px 25px 0px}
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


        <div id="zhaoshang">
            <div id="chooes" style="">
                <div class="active">最新活动</div>
                <div>热门活动</div>
            </div>

            <div class="anli" style="display: block" >
                <div class="flex">
                    <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>">
                        <div>
                            <img src="<?php echo $vo['pic']; ?>" width="260" height="168" alt="">
                        </div>
                        <h4><?php echo mb_substr($vo['title'],0,15,'utf-8'); ?>...</h4>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="anli">
                <div class="flex">
                    <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>">
                        <div>
                            <img src="<?php echo $vo['pic']; ?>" width="260" height="168" alt="">
                        </div>
                        <h4><?php echo mb_substr($vo['title'],0,15,'utf-8'); ?>...</h4>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
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
        <a href="">关于我们</a>
        <span ></span>
        <a href="">服务项目 </a>
        <span ></span>
        <a href="">企业荣耀 </a>
        <span ></span>
        <a href="">联系我们 </a>
        <span ></span>
        <a href="">诚聘精英 </a>
    </div>
    <p>COPYRIGHT 9 2017 LEJU HOLDING LIMITED. All RIGHTS RESERVED<br>
        京ICP证080057号电信业务审批【2010】字第296号京公网安备11010102002148号增值电信业务经营许可证B2-20100312<br>
        武汉市中国产业园招商服务有限公司湖北省武汉市研口区南国大家装H18楼</p>
</footer>

<script language="javascript">
    $("#zhtzht").addClass("active");
    $("#zhlink5").addClass("active");
</script>
<script>
    $(function () {
        $("#chooes>div").click(function () {
            var $index =$(this).index();
            $(this).addClass("active").siblings().removeClass("active")
            $(".anli").eq($index).fadeIn().siblings(".anli").fadeOut()
        })
    })
</script>

</body>
</html>