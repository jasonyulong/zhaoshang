<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\www\zhaoshang\application\..\public\tpl\index\chouhua\fuwu.html";i:1542769402;s:46:"D:\www\zhaoshang\public\tpl\index\chouhua.html";i:1542695373;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:37:"../public/tpl/index/chouhua_nav2.html";i:1542769260;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>园区服务</title>
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
        box-shadow: 0px 0px 4px rgba(0,0,0,0.1);
    }
    #table td img:last-of-type{display: none}
    #table td{background-color: white;z-index:100;transition: 0.2s ease-in-out}
    #table td:hover{transform: scale(1.05);z-index: 999;box-shadow: 0px 0px 4px rgba(0,0,0,0.1)}
    #table td:hover h1{color: red; }
    #table td:hover img:last-of-type{display: block}
    #table td:hover img:first-of-type{display: none}
    #table tr{display: flex;flex-wrap: wrap; }
    #table td{flex-grow: 1;width: 224px;height: 224px;padding: 0;display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: space-evenly}
    #table td img{display: block;justify-content: center}
    #table td h1{font-size: 18px;color: #333333;text-align: center;margin-bottom: 20px;}
    #table td blockquote{font-size: 14px;color: #666666;text-align: center;padding: 0 15px}
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
            <a href="<?php echo url('index/chouhua/index'); ?>" id="swlink10">首页</a>
<a href="<?php echo url('index/chouhua/news'); ?>" id="swlink11">新闻中心</a>
<a href="<?php echo url('index/chouhua/zhaoshang'); ?>" id="swlink12">招商中心</a>
<a href="<?php echo url('index/chouhua/fuwu'); ?>" id="swlink13" >园区服务</a>
<a href="<?php echo url('index/chouhua/anli'); ?>" id="swlink14" >成功案例</a>
<a href="<?php echo url('index/chouhua/huoban'); ?>" id="swlink15" >合作伙伴</a>
        </div>



        <div id="friend">
            <h1>合作名企</h1>
            <table id="table" border="1">
                <tr>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/76.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/76X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/77.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/77X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/78.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/78X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/79.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/79X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/80.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/80X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/81.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/81X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/82.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/82X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/83.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/83X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/84.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/84X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/76.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/76X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/76.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/76X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/77.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/77X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/78.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/78X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/79.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/79X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/80.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/80X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/81.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/81X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/82.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/82X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/83.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/83X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/84.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/84X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
                    <td>
                        <img src="/images/zhaoshang/img/shitizhaoshang/76.png" alt="">
                        <img src="/images/zhaoshang/img/shitizhaoshang/76X.png" alt="">
                        <div>
                            <h1>委托招商</h1>
                            <blockquote >精准对接企业项目、解决 招商经济指标</blockquote>
                        </div>
                    </td>
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
    $("#chouhua").addClass("active");
    $("#swlink13").addClass("active");
</script>

</body>
</html>