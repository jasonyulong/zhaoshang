<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\www\zhaoshang\application\..\public\tpl\index\dj\index.html";i:1542789818;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
    <base href="xm-indexfuinfo.html">
    <style>
        .title section{width: 100%}
        .title article{width: 100%;display: flex;justify-content: space-between}
        .title article>span{font-family: "Heiti SC";color: #015293;font-weight: bold;font-size: 15px}
        #search {
            width: 100%;
            height: 80px;
            box-shadow: 0px 3px 5px rgba(0,0,0,0.0);
            margin-top: 0px;
            padding: 20px 56px;
        }
        .diqu {
            width: 100%;
            padding: 0px 26px;
            box-shadow: 0px 3px 5px rgba(0,0,0,0.0);
            margin-top: 0px;
        }
        #newsrigth>h3, #newsrigth~.page>h3 {
            font-weight: bold;
            color: black;
            font-size: 18px;
            padding: 40px 0 0 0 ;
        }
        .listleft>h1{font-size: 16px;color: #333333;font-weight: bold;padding-bottom: 10px}
        .line {
            width: 100%;
            height: 3px;
            background-color: #005196;
            padding: 0 0px;
            background-clip: content-box;
        }
        .zh-porject{padding: 20px 0;display: flex;justify-content: space-between;border-bottom: 1px solid #dcdcdc}
        .zh-porject>.data {
            font-size: 14px;
        }
        .zh-porject>.data>h2 {
            text-align: center;
            font-size: 30px;
            font-weight: bolder;
        }
        .zh-porject>.data {
            width: 80px;
            height: 80px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #005196;
            color: white;
            align-content: center;
        }
        .zh-porject>.content{display: flex;flex-wrap: wrap;padding-left: 20px;align-content: space-between;width: 670px;margin-right: 150px}
        .zh-porject>.content>a{width: 100%;display: block;color: #333333;font-weight: bold;padding-left: 12px}
        .zh-porject>.content>.key{width: 13%;text-align: right;color: #666666;font-size: 14px}
        .zh-porject>.content>.vlaue{width: 20%;color: #666666;font-size: 14px}
    </style>
</head>
<body>
<input type="hidden" value="navxm" data-active="">
<input type="hidden" value="xmlink1" data-active="">

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
            <a href="<?php echo url('index/dj/index',array('sort'=>'zf')); ?>" id="xmlink_zf" ><img src="../img/shitizhaoshang/87.png" alt=""><h1>政府采购</h1></a>
            <a href="<?php echo url('index/dj/index',array('sort'=>'gc')); ?>" id="xmlink_gc"><img src="../img/shitizhaoshang/88.png" alt=""><h1>工程项目</h1></a>
            <a href="<?php echo url('index/dj/index',array('sort'=>'js')); ?>" id="xmlink_js"><img src="../img/shitizhaoshang/89.png" alt=""><h1>城市建设</h1></a>
        </div>
        <div id="ts-main">
            <div class="diqu">
                <div class="product">
                    <div class="tit"><span>地</span><span>区:</span></div>
                    <div class="addr">
                        <a href="javascript:void(0);" id="setarea_" onclick="setarea('')">不限</a>
                        <?php if(is_array($prolist) || $prolist instanceof \think\Collection || $prolist instanceof \think\Paginator): $i = 0; $__LIST__ = $prolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="javascript:void(0);" id="setarea_<?php echo $vo['code']; ?>" onclick="setarea('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="product">
                    <div class="tit"><span>城</span><span>市:</span></div>
                    <div class="addr">
                        <a href="javascript:void(0);" id="setcity_" onclick="setcity('')">不限</a>
                        <?php if(is_array($ct) || $ct instanceof \think\Collection || $ct instanceof \think\Paginator): $i = 0; $__LIST__ = $ct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="javascript:void(0);" id="setcity_<?php echo $vo['code']; ?>" onclick="setcity('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
            <form id="search" method="post">
                <input type="hidden" id="area" name="area" value="<?php echo $area; ?>">
                <input type="hidden" id="city" name="city" value="<?php echo $city; ?>">
                <div class="search">
                    <input type="text" name="title" value="<?php echo $title; ?>" placeholder="输入关键字搜索"><input type="submit" value="搜索">
                </div>
            </form>
        </div>
        <div class="prolist">
            <div class="listleft">
                <h1>全部信息</h1>
                <div class="line"></div>

                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="zh-porject">
                    <div class="data">
                        <h2><?php echo $vo['time2']; ?></h2>
                        <?php echo $vo['time1']; ?>
                    </div>
                    <div class="content">
                        <a href="<?php echo url('index/dj/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                        <span class="key">地址：</span>
                        <span class="vlaue"> <?php echo $vo['pro']; ?> - <?php echo $vo['city']; ?></span>
                        <span class="key">发布时间： </span>
                        <span class="vlaue">  <?php echo date('Y-m-d',$vo['time']); ?></span>
                        <span class="key">浏览量：</span>
                        <span class="vlaue"><?php echo $vo['look']; ?></span>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="pageoption"><?php echo $list->render(); ?></div>
            </div>
            <div class="listright">
                <aside class="aside mainbox-shadow" id="aside">
                    <img src="/images/zhaoshang/img/shitizhaoshang/28.png" alt="">
                    <!--<small>张山</small>-->
                    <input type="text" autocomplete="off" placeholder="请输入电话号码">
                    <div class="send" ><img src="/images/zhaoshang/img/shitizhaoshang/31.png" alt=""><span>立即联系</span></div>
                    <p class="tit">使用加密技术，不会泄密您的手机</p>
                    <hr>
                    <div class="flex">
                        <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/29.png" alt="">预约参观</a>
                        <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/30.png" alt="">留言咨询</a>
                    </div>
                </aside>

                <div id="newsrigth">
                    <h3 >对接资讯</h3>
                    <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/37.jpg" alt=""><p class="abs-rgba">xxxxx</p></a>
                    <?php if(is_array($tuijian) || $tuijian instanceof \think\Collection || $tuijian instanceof \think\Paginator): $k = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <a href="<?php echo url('index/dj/newsinfo',['id'=>$vo['id']]); ?>"><span><?php echo $k; ?></span><span><?php echo $vo['title']; ?></span></a>
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
    $("#djdj").addClass("active");
    $("#xmlink_<?php echo $sort; ?>").addClass("active");


    function setarea(v){
        $("#area").val(v);
        $("#search").submit()
    }
    $("#setarea_"+$("#area").val()).addClass("active");

    function setcity(v){
        $("#city").val(v);
        $("#search").submit()
    }
    $("#setcity_"+$("#city").val()).addClass("active");
</script>
</body>
</html>