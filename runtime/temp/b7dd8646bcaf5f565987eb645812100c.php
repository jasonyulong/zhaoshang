<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:59:"D:\www\zhaoshang\application\..\public\tpl\index\zht\t.html";i:1543470888;s:42:"D:\www\zhaoshang\public\tpl\index\zht.html";i:1542936272;s:36:"../public/tpl/index/include_nav.html";i:1542852579;s:32:"../public/tpl/index/zht_nav.html";i:1543470818;s:31:"../public/tpl/index/footer.html";i:1543285728;}*/ ?>
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
    
<title>商业综合体</title>
<link rel="stylesheet" href="/images/zhaoshang/css/teseprojectX.css">
<link rel="stylesheet" href="/images/zhaoshang/css/zh-fuhuaindex.css">
<base href="zh-newsinfo.html">
<style>
    #zh-tixi>.content{ width: 360px;height: 540px;padding-bottom: 33px;display: flex;flex-direction: column;align-content: center;justify-content: space-between;border-radius: 3px}
    #zh-tixi>.content>div{}
    #zh-tixi>.content>div>span{font-size: 24px;font-weight: bold;text-align: center;width: 100%;display: block}
    #zh-tixi>.content>div>small{width: 100px;height: 3px;background-color: #1d223f;margin: 5px auto;display: block}
    #zh-tixi>.content>blockquote{font-size: 14px;color: #666666;padding: 0 20px}
    #zh-tixi>.content>a{width: 160px;height: 40px;border-radius: 20px;border: 2px solid #005196;text-align: center;line-height: 40px;margin: 0 auto}
    .wrap{
        width:1100px;
        height:500px;
        margin:0 auto;
        background-color:transparent;
        position:relative;
        padding: 0;
    }
    .wrap ul{
        position:relative;
    }
    .wrap ul li{
        position: absolute;
        top:0;
        left:0;
    }
    .wrap ul li img{
        width:100%;
        border-radius: 5px;
    }
    .ctrl{
        display:block;
        width:100%;
        position:absolute;
        z-index:99;
        top:220px;
    }
    .ctrl button{
        width: 42px;
        height: 42px;
        background-color: transparent;border: 0px;
        outline: 0;
    }
    .prev{
        float:left;
        margin-left:15px;
    }
    .next{
        float:right;
        margin-right:15px;
    }
    .carouseltit{width: 100%;text-align: center;display: inline-block;text-align: center;;font-size: 24px;color: #333333;padding: 20px 0 }

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
            <a href="<?php echo url('index/zht/index'); ?>" id="zhlink1" ><img src="/images/zhaoshang/img/shitizhaoshang/90.png" alt=""><h1>孵化器</h1></a>
<a href="<?php echo url('index/zht/zc'); ?>" id="zhlink2"><img src="/images/zhaoshang/img/shitizhaoshang/91.png" alt=""><h1>众创空间</h1></a>
<a href="<?php echo url('index/zht/t'); ?>" id="zhlink3"><img src="/images/zhaoshang/img/shitizhaoshang/92.png" alt=""><h1>商业综合体</h1></a>
        </div>
        <div id="zh-main">
            <section id="zh-fuhua">
                <div class="fuhua-left flex">
                    <h1>最新资讯</h1>
                    <?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): $k = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dis-href "><img src="<?php echo $vo['pic']; ?>" width="524" height="310" alt=""><p class="abs-rgba "><?php echo $vo['title']; ?></p></a>
                    <?php else: ?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="dis-href"><img src="<?php echo $vo['pic']; ?>" width="260" height="158" alt=""><p class="abs-rgba "><?php echo $vo['title']; ?></p></a>
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
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>">更多</a>
                            </section>
                            <blockquote length="100"><?php echo mb_substr(remove_html($vo['content']),0,200,'utf-8'); ?></blockquote>
                        </div>
                        <?php else: ?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><p><img src="/images/zhaoshang/img/shitizhaoshang/93.png" alt=""><?php echo $vo['title']; ?></p><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </article>
                    <article class="article">
                        <?php if(is_array($t2) || $t2 instanceof \think\Collection || $t2 instanceof \think\Paginator): $k = 0; $__LIST__ = $t2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                        <div class="hotnews">
                            <section>
                                <div class="data"><?php echo date('d',$vo['time']); ?><br><?php echo date('Y-m',$vo['time']); ?></div>
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>">更多</a>
                            </section>
                            <blockquote length="100"><?php echo mb_substr(remove_html($vo['content']),0,200,'utf-8'); ?></blockquote>
                        </div>
                        <?php else: ?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><p><img src="/images/zhaoshang/img/shitizhaoshang/93.png" alt=""><?php echo $vo['title']; ?></p><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </article>
                    <article class="article">
                        <?php if(is_array($t3) || $t3 instanceof \think\Collection || $t3 instanceof \think\Paginator): $k = 0; $__LIST__ = $t3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == '1'): ?>
                        <div class="hotnews">
                            <section>
                                <div class="data"><?php echo date('d',$vo['time']); ?><br><?php echo date('Y-m',$vo['time']); ?></div>
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>">更多</a>
                            </section>
                            <blockquote length="100"><?php echo mb_substr(remove_html($vo['content']),0,200,'utf-8'); ?></blockquote>
                        </div>
                        <?php else: ?>
                        <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"><p><img src="/images/zhaoshang/img/shitizhaoshang/93.png" alt=""><?php echo $vo['title']; ?></p><span><?php echo date('Y-m-d',$vo['time']); ?></span></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </article>
                </div>

            </section>
            <article class="title">
                招商中心<br>
                我们为您提供专业的服务
            </article>
            <!--新闻start-->
            <a href="<?php echo url('index/chouhua/zhaoshang'); ?>"  class="flex text-right" style="text-align: right;position: relative;display: block;top: -25px;"><img
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
                服务体系<br>
                我们为您提供专业的服务
            </article>
            <a href="<?php echo url('index/zht/mall'); ?>" class="flex text-right" style="text-align: right;position: relative;display: block;top: -25px;"><img
                    src="/images/zhaoshang/img/shitizhaoshang/94.png" alt=""></a>
            <!--服务体系start-->
            <div id="zh-tixi" class="flex">
                <div class="content mainbox-shadow">
                    <div><img src="/images/zhaoshang/img/shitizhaoshang/72.jpg" alt=""></div>
                    <div>
                        <span>产业招商</span>
                        <small></small>
                    </div>
                    <blockquote>中国人气设计师互动平台。深耕设计领域十年,站酷聚集了470万优秀设计师、摄影师、插画师、艺术家、创意人,设计创意群体中具有较高</blockquote>
                    <a href="<?php echo url('index/zht/mall'); ?>">查看更多</a>
                </div>
                <div class="content mainbox-shadow">
                    <div><img src="/images/zhaoshang/img/shitizhaoshang/72.jpg" alt=""></div>
                    <div>
                        <span>产业招商</span>
                        <small></small>
                    </div>
                    <blockquote>中国人气设计师互动平台。深耕设计领域十年,站酷聚集了470万优秀设计师、摄影师、插画师、艺术家、创意人,设计创意群体中具有较高</blockquote>
                    <a href="<?php echo url('index/zht/mall'); ?>">查看更多</a>
                </div>
                <div class="content mainbox-shadow">
                    <div><img src="/images/zhaoshang/img/shitizhaoshang/72.jpg" alt=""></div>
                    <div>
                        <span>产业招商</span>
                        <small></small>
                    </div>
                    <blockquote>中国人气设计师互动平台。深耕设计领域十年,站酷聚集了470万优秀设计师、摄影师、插画师、艺术家、创意人,设计创意群体中具有较高</blockquote>
                    <a href="<?php echo url('index/zht/mall'); ?>">查看更多</a>
                </div>

            </div>
            <!--服务体系end-->
            <article class="title">
                成功案例<br>
                我们为您提供专业的服务
            </article>
            <a href="<?php echo url('index/zht/mall'); ?>" class="flex text-right" style="text-align: right;position: relative;display: block;top: -25px;"><img
                    src="/images/zhaoshang/img/shitizhaoshang/94.png" alt=""></a>
            <div class="wrap" id="wrap">
                <ul>
                    <?php if(is_array($anli) || $anli instanceof \think\Collection || $anli instanceof \think\Paginator): $i = 0; $__LIST__ = $anli;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/zht/mallinfo',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['pic']; ?>" alt=""><span class="carouseltit" ><?php echo $vo['title']; ?></span></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <span class="ctrl">
                    <button class="prev"><img src="/images/zhaoshang/img/shitizhaoshang/left.png" width="42" height="42" alt=""></button>
                    <button class="next"><img src="/images/zhaoshang/img/shitizhaoshang/rigth.png" alt=""></button>
                </span>
            </div>

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

    $(function(){
        var json=[
            {
                top:'0px',
                left:'200px',
                width:'300px',
                height:'187px',
                zIndex:6,
                opacity:0
            },
            {
                top:'88px',
                left:'75px',
                width:'400px',
                height:'250px',
                zIndex:8,
                opacity:0.8
            },
            {
                top:'60px',
                left:'300px',
                width:'500px',
                height:'404px',
                zIndex:10,
                opacity:1
            },
            {
                top:'88px',
                left:'625px',
                width:'400px',
                height:'250px',
                zIndex:8,
                opacity:0.8
            },
            {
                top:'0px',
                left:'600px',
                width:'300px',
                height:'187px',
                zIndex:6,
                opacity:0
            }
        ];
        var jieliu=true;
//          封装一个函数，将json每个数据通过遍历加在每个'li'容器上
        function addCss(){
            for(var i in json){
                $('#wrap ul li').eq(i).css({zIndex:json[i].zIndex});
                $('#wrap ul li').eq(i).animate({
                    top:json[i].top,
                    left:json[i].left,
                    width:json[i].width,
                    height:json[i].height,
                    opacity:json[i].opacity
                },'slow',function(){
                    jieliu=true;
                    console.log($(this).index())
                    var $index = $(this).index()
                    console.log($('#wrap ul li').eq($index).css("opacity"))
                    if($('#wrap ul li').eq($index).css("opacity")==1){
                        $('#wrap ul li').eq($index).find("span").fadeIn().end().siblings("li").find("span").hide()
                    }
                });

            }
        }

        /*      if($('#wrap ul li').eq(i).css("opacity")==1){
         console.log($('#wrap ul li').eq(i).css("opacity"))
         $('#wrap ul li').eq(i).find("span").show().siblings("li").hide()
         }*/
        //页面打开先调用一次，页面不会乱
        addCss();
        $('.prev').click(function(){
            if(jieliu==true){
                jieliu=false;
                //json.shift(),删除数组的第一个值，并返回第一个值
                //json.push(json.shift())将返回的第一个值追加到数组末尾
                json.push(json.shift());
                //重新遍历
                addCss();
            }


        });
        $('.next').click(function(){
            if(jieliu==true){
                jieliu=false;
                //json.pop(),删除数组的最后个值，并返回最后一个值
                //json.unshift(json.pop())将返回的最后一个值添加到数组最前面
                json.unshift(json.pop());
                //重新遍历
                addCss();
            }
        });
        $(".fuhua-rigth>p>a").click(function () {
            var $index = $(this).index()
            $(this).addClass("active").siblings().removeClass("active")
            $(".article").eq($index).fadeIn().siblings(".article").hide()
        })
    });
</script>

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
    })
</script>

<script language="javascript">
    $("#zhlink3").addClass("active");
    $("#zhtzht").addClass("active");
</script>

</body>
</html>