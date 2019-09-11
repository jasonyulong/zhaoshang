<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"D:\www\zhaoshang\application\..\public\tpl\index\zhaoshang\news.html";i:1542607224;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1542695363;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/zs_nav.html";i:1542594492;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
        <div id="news">
            <section>
                <h3>土地</h3>
                <article>
                    <?php if(is_array($sort_tudi) || $sort_tudi instanceof \think\Collection || $sort_tudi instanceof \think\Paginator): $i = 0; $__LIST__ = $sort_tudi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/news',['sort'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </article>
            </section>
            <section>
                <h3>厂房</h3>
                <article>
                    <?php if(is_array($sort_fang) || $sort_fang instanceof \think\Collection || $sort_fang instanceof \think\Paginator): $i = 0; $__LIST__ = $sort_fang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/news',['sort'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </article>
            </section>
            <section>
                <h3>写字楼</h3>
                <article>
                    <?php if(is_array($sort_lou) || $sort_lou instanceof \think\Collection || $sort_lou instanceof \think\Paginator): $i = 0; $__LIST__ = $sort_lou;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/Zhaoshang/news',['sort'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </article>
            </section>
        </div>
        <div class="link">
            <a href="<?php echo url('index/zhaoshang/index'); ?>" id="zhaoshang_index" >首页</a>
<a href="<?php echo url('index/zhaoshang/news'); ?>" id="zhaoshang_news" >新闻中心</a>
<a href="<?php echo url('index/zhaoshang/fang_index'); ?>" id="zhaoshang_fang" >厂房租售</a>
<a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" id="zhaoshang_tudi">土地租售</a>
<a href="<?php echo url('index/zhaoshang/lou_index'); ?>" id="zhaoshang_lou">写字楼出租</a>
<a href="<?php echo url('index/zhaoshang/friend'); ?>" id="zhaoshang_friend">合作名企</a>
        </div>

        <a href="" id="guanggao"><img src="/images/zhaoshang/img/shitizhaoshang/28.jpg" alt=""></a>

        <div class="prolist">
            <div class="listleft">
                <section class="title">
                    <span>最新信息</span>
                    <div style="height: 3px"></div>
                </section>
                <div id="newslist">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="pro">
                        <a href="<?php echo url('index/Zhaoshang/news',['sort'=>$vo['sort']]); ?>"><img src="<?php echo $vo['pic']; ?>" width="294" height="171" alt=""><span><?php echo $vo['sortname']; ?></span></a>
                        <article>
                            <h3><a href="<?php echo url('index/zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a></h3>
                            <blockquote><?php echo $vo['des']; ?></blockquote>
                            <p><span>发布时间：<?php echo $vo['time']; ?></span><span><img src="/images/zhaoshang/img/shitizhaoshang/32.png" alt=""><?php echo $vo['look']; ?></span></p>
                        </article>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="pageoption"><?php echo $list->render(); ?></div>
                </div>
            </div>
            <div class="listright">

                <div id="newsrigth">
                    <h3 >今日头条</h3>
                    <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/37.jpg" alt=""><p></p></a>
                    <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $k = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <a href="<?php echo url('index/zhaoshang/newsinfo',['id'=>$vo['id']]); ?>"><span><?php echo $k; ?></span><span><?php echo $vo['title']; ?></span></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <div class="page">
                    <h3>优质土地</h3>
                    <?php if(is_array($tuijiantudi) || $tuijiantudi instanceof \think\Collection || $tuijiantudi instanceof \think\Paginator): $i = 0; $__LIST__ = $tuijiantudi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="project">
                        <a href="<?php echo url('index/tudi/info',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" style=" width:240px; height: 138px;"><p class="bantouming"><?php echo $vo['title']; ?></p></a>
                        <p class="flex"><span><?php echo $vo['zujing']; ?>元</span><span><?php echo $vo['area']; ?>亩</span></p>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
        <div id="tuijian" class="mainbox-shadow">
            <h2><img src="/images/zhaoshang/img/shitizhaoshang/25.png" alt="">看过该土地的用户还看过</h2>
            <div>
                <?php if(is_array($bomtudi) || $bomtudi instanceof \think\Collection || $bomtudi instanceof \think\Paginator): $i = 0; $__LIST__ = $bomtudi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/tudi/info',['id'=>$vo['id']]); ?>">
                    <img src="<?php echo $vo['pic']; ?>" width="235" height="182" alt="">
                    <h4><?php echo $vo['title']; ?></h4>
                    <p><span><strong><?php echo $vo['area']; ?></strong>亩</span><span><?php echo $vo['pro']; ?>-<?php echo $vo['city']; ?></span></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>">点击查看更多</a>
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
        $("#newslist>.pro>article>blockquote").text(function () {
            return $(this).text().substring(0,60)+"...."
        })
    })
</script>
<script language="javascript">
    $("#shitizhaoshang").addClass("active");
    $("#zhaoshang_news").addClass("active");
</script>

</body>
</html>