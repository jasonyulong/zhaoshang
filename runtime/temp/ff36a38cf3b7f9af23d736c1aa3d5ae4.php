<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:74:"D:\www\zhaoshang\application\..\public\tpl\index\zhaoshang\tudi_index.html";i:1543905359;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1543567337;s:36:"../public/tpl/index/include_nav.html";i:1545622199;s:31:"../public/tpl/index/zs_nav.html";i:1543566957;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    
<title>实体招商厂房</title>
<link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">

</head>
<body>


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
    <?php echo $memberinfo['face']; ?>
    <div><a href="<?php echo url('user/index/index'); ?>"><img src="<?php echo $memberinfo['face']; ?>" width="50" height="50" style="border-radius:15px" alt=""></a></div>
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
    <div style="width: 1200px;margin: 0 auto;position: relative;top:-125px "><a href="<?php echo url('index/zhaoshang/xuqiu',['type'=>'lou']); ?>" style="position: absolute;right: 0" class="btn btn-danger">免费发布资讯</a></div>
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
            <div>
                <div style="">地区</div>
                <div id="c-addr">
                    <div><?php echo $city_name; ?> <span><img src="/images/zhaoshang/img/shitizhaoshang/21X.png" alt=""></span></div>
                    <section >
                        <div class="mainbox-shadow" >
                            <article style="">
                                <div class="pop">
                                    <div><span>广东</span></div>
                                    <div style=" ">
                                        <?php if(is_array($proguangdong) || $proguangdong instanceof \think\Collection || $proguangdong instanceof \think\Paginator): $i = 0; $__LIST__ = $proguangdong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <a href="javascript:void(0);" onclick="setcityclear('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <div class="pop">
                                    <div><span>湖北</span></div>
                                    <div style=" ">
                                        <?php if(is_array($prohubei) || $prohubei instanceof \think\Collection || $prohubei instanceof \think\Paginator): $i = 0; $__LIST__ = $prohubei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <a href="javascript:void(0);" onclick="setcityclear('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <div class="pop">
                                    <div><span>浙江</span></div>
                                    <div style=" ">
                                        <?php if(is_array($prozhejiang) || $prozhejiang instanceof \think\Collection || $prozhejiang instanceof \think\Paginator): $i = 0; $__LIST__ = $prozhejiang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <a href="javascript:void(0);" onclick="setcityclear('<?php echo $vo['code']; ?>')"><?php echo $vo['name']; ?></a>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </article>
                            <a href="">更多城市&lt;&lt;</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="diqu">
            <div class="product">
                <div class="tit"><span>地</span><span>区:</span></div>
                <div class="addr">
                    <a href="javascript:void(0);" id="setarea_" onclick="setarea('')">不限</a>
                    <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
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
            <div class="product">
                <div class="tit"><span>面</span><span>积:</span></div>
                <div class="addr">
                    <a href="javascript:void(0);" id="setmou_" onclick="setmou('')">不限</a>
                    <a href="javascript:void(0);" id="setmou_a" onclick="setmou('a')">0亩-100亩</a>
                    <a href="javascript:void(0);" id="setmou_b" onclick="setmou('b')">100亩-500亩</a>
                    <a href="javascript:void(0);" id="setmou_c" onclick="setmou('c')">500亩-1000亩</a>
                    <a href="javascript:void(0);" id="setmou_d" onclick="setmou('d')">1000亩以上</a>
                </div>
            </div>
            <div class="product">
                <div class="tit"><span>行</span><span>业:</span></div>
                <div class="addr">
                    <a href="javascript:void(0);" id="sethy_" onclick="sethy('')">不限</a>
                    <?php if(is_array($dic['duti_hangye']) || $dic['duti_hangye'] instanceof \think\Collection || $dic['duti_hangye'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['duti_hangye'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="javascript:void(0);" id="sethy_<?php echo $vo; ?>" onclick="sethy('<?php echo $vo; ?>')"><?php echo $vo; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="product">
                <div class="tit"><span>方</span><span>式:</span></div>
                <div class="addr">
                    <a href="javascript:void(0);" id="setfs_" onclick="setfs('')">不限</a>
                    <?php if(is_array($dic['duti_fangshi']) || $dic['duti_fangshi'] instanceof \think\Collection || $dic['duti_fangshi'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['duti_fangshi'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="javascript:void(0);" id="setfs_<?php echo $vo; ?>" onclick="setfs('<?php echo $vo; ?>')"><?php echo $vo; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <form id="formid" method="post">
                        <input type="hidden" id="area" name="area" value="<?php echo $area; ?>">
                        <input type="hidden" id="city" name="city" value="<?php echo $city; ?>">
                        <input type="hidden" id="mou" name="mou" value="<?php echo $mou; ?>">
                        <input type="hidden" id="hy" name="hy" value="<?php echo $hy; ?>">
                        <input type="hidden" id="fs" name="fs" value="<?php echo $fs; ?>">
                        <input type="text" id="startnum" autocomplete="off" name="startnum" value="<?php echo $startnum; ?>">-<input type="text" id="endnum" autocomplete="off" name="endnum" value="<?php echo $endnum; ?>"><span>元/平米•天</span><input type="submit" value="查询">
                    </form>
                </div>
            </div>
        </div>
        <div class="prolist">
            <div class="listleft">
                <p style="line-height: 30px;text-indent: 15px;padding:0 20px ">为您找到<span style="color:#FF5400;padding: 0 10px ">全国</span>土地</p>
                <div class="line"> </div>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/Tudi/info',['id'=>$vo['id']]); ?>" class="items">
                    <div class="img-box">
                        <img src="<?php echo $vo['pic']; ?>" alt="">
                    </div>
                    <div class="msg">
                        <p><b><?php echo $vo['title']; ?></b></p>
                        <article>
                            <div>
                                <img src="/images/zhaoshang/img/shitizhaoshang/16.png" alt="">
                                <span>地址：<?php echo $vo['pro']; ?>-<?php echo $vo['city']; ?></span>
                            </div>
                            <div>
                                <img src="/images/zhaoshang/img/shitizhaoshang/17.png" alt="">
                                <span>租金：<?php if($vo['zujing'] == '0'): ?>面议<?php else: ?><?php echo $vo['zujing']; ?>元<?php endif; ?></span>

                            </div>
                            <div>
                                <img src="/images/zhaoshang/img/shitizhaoshang/18.png" alt="">
                                <span>时间：<?php echo date('Y-m-d',$vo['time']); ?></span>
                            </div>
                        </article>
                    </div>
                    <div class="price">
                        <span><?php echo $vo['area']; ?></span>亩
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php echo $list->render(); ?>
            </div>
            <div class="listright">
                <div class="weituo">
                    <a href="<?php echo url('index/zhaoshang/xuqiu',['type'=>'tudi']); ?>">
                        <img src="/images/zhaoshang/img/shitizhaoshang/19.png" alt="">
                        <p>
                            委托找厂房<br>
                            填写需求，免费为您找地
                        </p>
                    </a>
                    <a href="<?php echo url('index/zhaoshang/fabu',['type'=>'tudi']); ?>">
                        <img src="/images/zhaoshang/img/shitizhaoshang/20.png" alt="">
                        <p>
                            发布信息<br>
                            高质量供求信息有补贴
                        </p>
                    </a>
                </div>
                <a href="" ><img src="/images/zhaoshang/img/shitizhaoshang/101.jpg" alt=""></a>
                <a href="" ><img src="/images/zhaoshang/img/shitizhaoshang/102.jpg" alt=""></a>
                <a href="" ><img src="/images/zhaoshang/img/shitizhaoshang/103.jpg" alt=""></a>
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

<script>
    function setcityclear(v){
        $("#area").val("");
        setcity(v);
    }

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

    function setmou(v){
        $("#mou").val(v);
        $("#formid").submit()
    }
    $("#setmou_"+$("#mou").val()).addClass("active");

    function sethy(v){
        $("#hy").val(v);
        $("#formid").submit()
    }
    $("#sethy_"+$("#hy").val()).addClass("active");

    function setfs(v){
        $("#fs").val(v);
        $("#formid").submit()
    }
    $("#setfs_"+$("#fs").val()).addClass("active");
</script>

<script>
    $("#searchform").submit(function (ev) {
        var $startnum= document.getElementById("startnum").value;
        var $endnum= document.getElementById("endnum").value;
        var reg=/^[0-9]+.?[0-9]*$/
        if($startnum==""||$endnum==""){
            alert("请输入搜索范围")
        }else if(!reg.test($startnum)||!reg.test($endnum)){
            alert("请输入数字")
        }else if(parseInt($startnum)>parseInt($endnum)){
            alert("请输入正确的搜索范围")
        }
    })
</script>

<script language="javascript">
    $("#shitizhaoshang").addClass("active");
    $("#zhaoshang_tudi").addClass("active");
</script>

</body>
</html>