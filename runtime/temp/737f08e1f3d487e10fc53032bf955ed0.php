<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:62:"D:\www\zhaoshang\application\..\public\tpl\index\zht\mall.html";i:1543280131;s:42:"D:\www\zhaoshang\public\tpl\index\zht.html";i:1542936272;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:33:"../public/tpl/index/zht_nav2.html";i:1542956280;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>商业mall</title>

<style>
    #main{background-color: #f8f8f8}
    #paixubar{width: 100%;background-color: white;display: flex;margin: 30px 0;box-shadow: 0 2px 2px rgba(0,0,0,0.2)}
    #paixubar>div{padding: 0 15px;height: 40px;line-height: 40px;position: relative;cursor: pointer}
    #paixubar>div.active{background-color: #E71C19;color: white;}
    #paixubar>div img{transition: 0.2s ease-in-out}
    #paixubar>div:hover img{transform: rotate(180deg)}
    #paixubar>div:hover  .absbox{display: block}
    .absbox{width: 158px;position: absolute;left: 45%;top: 35px;padding-top: 10px;margin-left:-80px;display: none;z-index: 100}
    .absbox>span{width: 0;
        height: 0;
        font-size: 0;
        line-height: 0;
        display: block;
        position: absolute;
        left: 50%;
        top: -5px;
        margin-left: -4px;
        border: 8px solid transparent;
        border-style: dashed dashed solid;    border-bottom-color: white}
    .absbox>div{border: 1px solid white;background-color: white;padding:5px 20px;display: flex;flex-direction: column;justify-content: space-around}
    .absbox>div>a{display: block}
    .dis-href{margin-bottom: 30px;line-height: 0px;margin-right: 40px}
    .flex{justify-content: flex-start;width: 1250px}
    p.abs-rgba {
        display: flex;
        background-color: rgba(0,0,0,0.5);
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 10px;
    }
    p.abs-rgba>strong{width: 100%;display: inline-block;text-align: left;line-height: 25px}
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
        <div  id="paixubar" >
            <div class="active">综合排序</div>
            <div class="">最新发布</div>
            <!--
            <div class="">商业面积 <img src="/images/zhaoshang/img/2.svg" width="14" height="14" alt="">
                <div class="absbox" style="">
                    <span style=""> </span>
                    <div style="">
                        <a href="" >面积重高到低</a>
                        <a href="">面积从低到高</a>
                    </div>
                </div>
            </div>
            <div class="">
                开业时间 <img src="/images/zhaoshang/img/2.svg" width="14" height="14" alt="">
                <div class="absbox" style="">
                    <span style=""> </span>
                    <div style="">
                        <a href="" >面积重高到低</a>
                        <a href="">面积从低到高</a>
                    </div>
                </div>
            </div>
            -->
        </div>
        <form id="formid" method="post">
            <input type="hidden" id="area" name="area" value="<?php echo $area; ?>">
            <input type="hidden" id="city" name="city" value="<?php echo $city; ?>">
        </form>
        <div class="flex">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('index/zht/mallinfo',['id'=>$vo['id']]); ?>" class="dis-href">
                <img src="<?php echo $vo['pic']; ?>" width="196" height="203" alt="">
                <p class="abs-rgba">
                    <strong><?php echo $vo['title']; ?></strong>
                    <span>开业<?php echo $vo['addtime']; ?>年</span><span><?php echo $vo['jianzhu']; ?>万平米</span>
                </p>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="pageoption"><?php echo $list->render(); ?></div>

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
    $("#zhtzht").addClass("active");
    $("#zhlink7").addClass("active");
</script>

<script language="javascript">
    function setarea(v){
        $("#area").val(v);
        $("#formid").submit()
    }
    $("#setarea_"+$("#area").val()).addClass("active");

    function setcity(v){
        $("#city").val(v);
        $("#formid").submit()
    }
    $("#setcity_"+$("#city").val()).addClass("active");
</script>

</body>
</html>