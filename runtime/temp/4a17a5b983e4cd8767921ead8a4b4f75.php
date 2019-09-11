<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\www\zhaoshang\application\..\public\tpl\index\zc\news.html";i:1542866614;s:46:"D:\www\zhaoshang\public\tpl\index\chouhua.html";i:1542695373;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/footer.html";i:1542695334;}*/ ?>
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
    
<title>新闻列表</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
<style>
    .mainwrap {

        padding-bottom: 30px;
        margin-bottom: 30px;
    }
    .mainwrap>h6{width: 1200px;margin: 0px auto;padding: 15px 0;display: flex;align-items: center}
    #main{padding: 0px 25px;padding-top: 20px}
    #aside{margin: 20px 0px;height: 52px;border: 1px solid #dcdcdc;margin-top: 60px;margin-bottom: 40px;border-radius: 26px;display: flex;padding: 0px 80px;justify-content: space-between}
    #aside>a{height: 100%;line-height: 100%;display: flex;align-items: center;}
    #aside>a.active{border-bottom: 3px solid #e71c19}
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
        <aside id="aside">
            <a href="<?php echo url('index/zc/news',array('sort'=>'42')); ?>" id="id42"><span>政策速递</span></a>
            <a href="<?php echo url('index/zc/news',array('sort'=>'43')); ?>" id="id43">行业动态</a>
            <a href="<?php echo url('index/zc/news',array('sort'=>'44')); ?>" id="id44">服务资讯</a>
        </aside>
        <hr>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="ts-list">
            <div class="data">
                <h2><?php echo $vo['time2']; ?></h2>
                <?php echo $vo['time1']; ?>
            </div>
            <div class="content">
                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                <article length="60"><?php echo $vo['des']; ?></article>
            </div>
        </div>
        <hr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="pageoption"><?php echo $list->render(); ?></div>
        <section class="main-tuijian">
            <h3 class="active">相关推荐</h3>
            <div>
                <section>
                    <h3 class="have"><span>新闻资讯</span></h3>
                    <?php if(is_array($newszi) || $newszi instanceof \think\Collection || $newszi instanceof \think\Paginator): $i = 0; $__LIST__ = $newszi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="have"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
                <article>
                    <h3 class="have"><span>图文资讯</span></h3>
                    <div class="flex">
                        <?php if(is_array($newstu) || $newstu instanceof \think\Collection || $newstu instanceof \think\Paginator): $i = 0; $__LIST__ = $newstu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dis-href"><img src="<?php echo $vo['pic']; ?>" width="140" height="106" alt=""><p class="abs-rgba"><?php echo $vo['title']; ?></p></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </article>
            </div>
        </section>
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
    $("#zczc").addClass("active");
    $("#zclink1").addClass("active");
    $("#id<?php echo $sort; ?>").addClass("active");
</script>

</body>
</html>