<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"D:\www\zhaoshang\application\..\public\tpl\index\zhaoshang\friend.html";i:1542590461;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1542695363;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/zs_nav.html";i:1542594492;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
<script src="/images/zhaoshang/js/jquery.validate.min.js"></script>
<script src="/images/zhaoshang/js/validateAddMethods.js"></script>
<script src="/images/zhaoshang/js/jquery.messages_cn.js"></script>
<style>
    #friend>h1{text-align: center;font-size: 20px;font-weight: bold;margin: 20px auto 50px auto }
    table
    {
        border-collapse:collapse;
        border-radius: 10px;
    }

    table, td, th
    {
        border:1px solid #dcdcdc;
    }
    #table td{width: 219px;height: 224px;position: relative}
    #table td div{position: absolute;left: 0%;top: 0%;background-color:#005196;opacity: 0;
        color: white;width: 0%;height: 0% ;padding: 0 20px;pointer-events: none;transition: 0.25s ease-in-out;}
    #table td div>h1{margin: 45px auto 22px auto;font-size: 18px;font-weight: bold;text-align: center}
    #table td div>blockquote{text-align: center;line-height: 25px;}
    #table td:hover div{top: 0%;opacity: 1;transform: scale(1.05);z-index: 100;width: 100%;height: 100%}
</style>

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
        <div class="link">
            <a href="<?php echo url('index/zhaoshang/index'); ?>" id="zhaoshang_index" >首页</a>
<a href="<?php echo url('index/zhaoshang/news'); ?>" id="zhaoshang_news" >新闻中心</a>
<a href="<?php echo url('index/zhaoshang/fang_index'); ?>" id="zhaoshang_fang" >厂房租售</a>
<a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" id="zhaoshang_tudi">土地租售</a>
<a href="<?php echo url('index/zhaoshang/lou_index'); ?>" id="zhaoshang_lou">写字楼出租</a>
<a href="<?php echo url('index/zhaoshang/friend'); ?>" id="zhaoshang_friend">合作名企</a>
        </div>
        <div id="friend">
            <h1>合作名企</h1>
            <table id="table" border="1">
                <tr>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list) ? array_slice($list,0,5, true) : $list->slice(0,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <td>
                        <img src="<?php echo $vo['pic']; ?>" alt="">
                        <div>
                            <h1><?php echo $vo['title']; ?></h1>
                            <blockquote><?php echo $vo['title']; ?></blockquote>
                        </div>
                    </td>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
                <tr>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list) ? array_slice($list,5,5, true) : $list->slice(5,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <td>
                        <img src="<?php echo $vo['pic']; ?>" alt="">
                        <div>
                            <h1><?php echo $vo['title']; ?></h1>
                            <blockquote><?php echo $vo['title']; ?></blockquote>
                        </div>
                    </td>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
                <tr>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($list) ? array_slice($list,10,5, true) : $list->slice(10,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <td>
                        <img src="<?php echo $vo['pic']; ?>" alt="">
                        <div>
                            <h1><?php echo $vo['title']; ?></h1>
                            <blockquote><?php echo $vo['title']; ?></blockquote>
                        </div>
                    </td>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>

            </table>

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
    $("#shitizhaoshang").addClass("active");
    $("#zhaoshang_friend").addClass("active");
</script>

</body>
</html>