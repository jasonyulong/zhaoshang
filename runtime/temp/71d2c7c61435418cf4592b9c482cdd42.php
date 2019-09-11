<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"/opt/web/zhaoshang/application/../public/tpl/index/zc/bg.html";i:1555643908;s:45:"/opt/web/zhaoshang/public/tpl/index/body.html";i:1563929760;s:34:"../public/tpl/index/allfooter.html";i:1551321004;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <mata name="renderer" content="webkit"></mata>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/images/newzs/css/bootstrap.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_931982_3hkhfvaeq6n.css">
    <link rel="stylesheet" href="/images/newzs/css/public.css">
    <script src="/images/newzs/js/jquery-3.3.1.min.js"></script>
    <script src="/images/newzs/js/popper.js"></script>
    <script src="/images/newzs/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js"></script>
    
<style>
    .newcontent img{max-width: 650px;display: block;margin: 20px auto}
    input[type=radio]:checked+label{color: #b80608}
</style>
<title>政策动态_招商政策网|政策解读|税务政策</title>

</head>
<body class="bg-fafafa">
<aside id="mainaside" class="position-fixed" style="width: 65px;right: 0px">
    <!--<a href="<?php echo url('404'); ?>" class="text-white d-block d-flex flex-column justify-content-around" style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe670;</p>
        <?php if($islogin == 'no'): ?>
        <p class="px-1 font-size-12 text-center mb-1">登陆注册</p>
        <?php endif; if($islogin == 'yes'): ?>
        <p class="px-1 font-size-12 text-center mb-1">会员中心</p>
        <?php endif; ?>
    </a>-->
    <!-- <a href="<?php echo url('404'); ?>" class="text-white d-block " style="width: 65px;height: 65px;margin-bottom: 1px">
         <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe63d;</p>
         <p class="px-1 font-size-12 text-center mb-1">免费发布</p>
     </a>-->
    <a href="tencent://message/?uin=52203910&amp;Site=http://vps.shuidazhe.com&amp;Menu=yes" class="text-white d-block position-relative" style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe662;</p>
        <p class="px-1 font-size-12 text-center mb-1">免费咨询</p>
        <article class=" justify-content-center align-items-center flex-column bg-white pt-3" style="position: absolute;right: 65px;top: 0px;border: 2px solid #dd0000;width: 110px;height: 129px;z-index: 1000" >
            <div class="d-flex justify-content-center">
                <img  src="/images/newzs/img/16.jpg" width="84" height="84" class="d-block  tp-4 " alt="图片">
            </div>
            <p class="text-center text-333 font-size-14">添加免费咨询</p>
        </article>

    </a>
    <a href="tencent://message/?uin=52203910&amp;Site=http://vps.shuidazhe.com&amp;Menu=yes" class="text-white d-block position-relative" style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe62c;</p>
        <p class="px-1 font-size-12 text-center mb-1">二维码</p>
        <article class=" justify-content-center align-items-center flex-column bg-white pt-3" style="position: absolute;right: 65px;top: 0px;border: 2px solid #dd0000;width: 110px;height: 129px;z-index: 1000" >
            <div class="d-flex justify-content-center">
                <img  src="/images/newzs/img/16.jpg" width="84" height="84" class="d-block  tp-4 " alt="图片">
            </div>
            <p class="text-center text-333 font-size-14">微信公众号</p>
        </article>
    </a>
    <a  class="text-white d-block position-relative" style="width: 65px;height: 65px;margin-bottom: 1px;cursor: pointer">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe62f;</p>
        <p class="px-1 font-size-12 text-center mb-1">联系我们</p>
        <article class=" align-items-center flex-column  px-2 font-size-24 font-weight-bold" style="position: absolute;right: 65px;top: 0px;border: 2px solid #dd0000;height: 65px;z-index: 1000;background-color:#dd0000 " >
            <div class="d-flex align-items-center h-100 text-nowrap">400-150-9896</div>
        </article>
    </a>
    <a href="javascript:backtop()"  class="text-white d-block " style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe665;</p>
        <p class="px-1 font-size-12 text-center mb-1">返回顶部</p>
    </a>
</aside>
<!--导航&&搜索框-->
<div class="container-fluid p-0 banner"  style="height: 443px">
    <div class="container-fluid bg-linered m-0 " style="background:linear-gradient(#ed444b87,#bf181f)">
        <nav id="nav" class="container-fluid   d-flex justify-content-between  align-items-center " style="max-width: 1200px;height: 75px;">
            <div class="navhover h-100">
                <a href="/" class="text-white font-size-18 h-100 d-block px-4 font-weight-bold font-size-22" style="line-height: 75px">首页</a>
            </div>
            <div class="navhover h-100">
                <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" class="text-white font-size-18 h-100 d-block px-4 " style="line-height: 75px">实体招商</a>
              <!--  <div class="secondnav container-fluid position-absolute col-12" >
                    <div class="container" style="max-width: 1156px">
                        <div class="col-12 p-0" >
                            <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" class="text-333 mr-5">厂房出租</a>
                            <a href="<?php echo url('index/zhaoshang/fang_index'); ?>" class="text-333 mr-5">土地租售</a>
                            <a href="<?php echo url('index/zhaoshang/lou_index'); ?>" class="text-333 mr-5">写字楼出租</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="navhover h-100">
                <a href="/hcy/" class="text-white font-size-18 font-weight-light h-100 d-block px-4" style="line-height: 75px">税务筹划</a>
            </div>
            <div class="navhover h-100">
                <a href="<?php echo url('index/zc/bg'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-4 " style="line-height: 75px">政策动态</a>
               <!-- <div class="secondnav container-fluid position-absolute  col-12" >
                    <div class="container" style="max-width: 1156px">
                        <div class="col-12 p-0" >
                            <?php if(is_array($zcdt) || $zcdt instanceof \think\Collection || $zcdt instanceof \think\Paginator): $i = 0; $__LIST__ = $zcdt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('index/zc/newslist',array('id'=>$vo["id"])); ?>" class="text-333 mr-5"><?php echo $vo['name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="navhover h-100">
                <a href="<?php echo url('index/zht/index'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-4" style="line-height: 75px">综合体</a>
               <!-- <div class="secondnav container-fluid position-absolute col-12" >
                    <div class="container" style="max-width: 1156px">
                        <div class="col-12 p-0" >
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5">孵化器</a>
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5">众创空间</a>
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5">商业综合体</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="navhover h-100">
                <a href="<?php echo url('index/zc/dj'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-4" style="line-height: 75px">项目对接</a>
              <!--  <div class="secondnav container-fluid position-absolute  col-12" >
                    <div class="container" style="max-width: 1156px">
                        <div class="col-12 p-0" >
                            <a href="<?php echo url('index/zc/dj'); ?>" class="text-333 mr-5">项目需求</a>
                            <a href="<?php echo url('index/zc/zx'); ?>" class="text-333 mr-5">专家咨询</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="navhover h-100">
                <a href="<?php echo url('index/index/404'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-4 " style="line-height: 75px">行政办公</a>
            </div>
            <div class="navhover h-100">
                <a href="<?php echo url('index/chouhua/zhaoshang'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-4 " style="line-height: 75px">特色项目</a>
               <!-- <div class="secondnav container-fluid position-absolute  col-12" >
                    <div class="container" style="max-width: 1156px">
                        <div class="col-12 p-0" >
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5 ">工业</a>
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5">农业</a>
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5">AI</a>
                            <a href="<?php echo url('404'); ?>" class="text-333 mr-5">特色小镇</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </nav>
    </div>
    <div class="container " style="max-width: 1230px;padding-top:65px">
        <div class="row mt-5" >
            <div class="col-6">
                <div class="pl-3">
                    <img src="/images/newzs/img/3.png" width="69%"  alt="图片" style="margin-left: 120px">
                </div>
                <div class="mt-3 pl-3"  style="margin-left: 120px">
                    <img src="/images/newzs/img/4.png" width="362" height="33" alt="图片">
                </div>
            </div>
            <div class="col-6 px-5" id="searchbox">
                <p class="text-jin font-size-18">热门搜索：<a class="text-jin" href="<?php echo url('index/index/search',['title'=>'写字楼']); ?>">写字楼</a>   <a class="text-jin" href="<?php echo url('index/index/search',['title'=>'湖北招商政策']); ?>">湖北招商政策</a>   <a class="text-jin" href="<?php echo url('index/index/search',['title'=>'习近平']); ?>">习近平</a></p>
                <form method="get" action="<?php echo url('index/index/search'); ?>">
                    <div class="input-group " style="height: 56px">
                        <div class="input-group-prepend  ">
                            <div class="input-group-text bg-white rounded-0"><span class="iconfont icon-fangdajing font-weight-bold font-size-28 text-red "></span></div>
                        </div>
                        <input name="title" type="search" autocomplete="off" id="search" class="form-control rounded-0 h-100 border-left-0" >
                        <div class="input-group-append  ">
                            <button class="btn bg-red text-white font-size-18 rounded-0" style="padding: 0 30px;" >搜索</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<form  class="container bg-white bg-clip-content" id="form" style="max-width: 1230px">
    <div class="row " >
        <div class="col-12 ">
            <div class="border-top-red-1"></div>
        </div>
        <div class="col-12 d-flex bg-white bg-clip-content" style="">
            <a href="" class="text-white d-block bg-red p-3 font-size-14 px-5">全部</a>
            <a href="" class="text-666 d-block p-3 font-size-14 px-5">国家级</a>
        </div>
    </div>
    <div class="row" style="padding: 34px 36px 0px 36px">
        <div class="col-12">
            <div class="row " style="margin-bottom: 40px">
                <div class="col-1 font-weight-bold text-black">类别</div>
                <div class="col-10">
                    <?php if(is_array($t) || $t instanceof \think\Collection || $t instanceof \think\Paginator): $i = 0; $__LIST__ = $t;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <input type="radio" class="sr-only" name="sortid" value="<?php echo $vo['id']; ?>" id="<?php echo $vo['id']; ?>">
                    <label for="<?php echo $vo['id']; ?>"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer" ><?php echo $vo['name']; ?></label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="col-1 text-999 font-size-14 cursor-pointer align-items-center d-flex shaixuan line-height-24 align-self-start"></div>
            </div>
            <div class="row" style="margin-bottom: 40px">
                <div class="col-1 font-weight-bold text-black">省份</div>
                <div class="col-10 ">
                    <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <input type="radio" class="sr-only" name="pro" value="<?php echo $vo['code']; ?>" id="<?php echo $vo['code']; ?>">
                    <label for="<?php echo $vo['code']; ?>"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline" ><?php echo $vo['name']; ?></label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="col-1 text-999 font-size-14 cursor-pointer align-items-center d-flex shaixuan line-height-24 align-self-start"></div>
            </div>
            <div class="row" style="margin-bottom: 40px">
                <div class="col-1 font-weight-bold text-black">时间</div>
                <div class="col-10 text-over justify-content-between">
                    <input type="radio"  class="sr-only" name="time" id="time1" value="全部">
                    <label for="time1"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline"  >全部</label>
                    <input type="radio" class="sr-only" name="time" id="time2"  value="最近三天">
                    <label for="time2"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline" >最近三天</label>
                    <input type="radio" class="sr-only" name="time" id="time3" value="最近一周">
                    <label for="time3"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline" >最近一周</label>
                    <input type="radio" class="sr-only" name="time" id="time4" value="最近一月">
                    <label for="time4"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline" >最近一月</label>
                    <input type="radio" class="sr-only" name="time" id="time5" value="最近三月">
                    <label for="time5"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline" >最近三月</label>
                    <input type="radio" class="sr-only" name="time" id="time6" value="最近半年">
                    <label for="time6"  class="font-size-14 mr-4 text-666 text-nowrap cursor-pointer d-inline" >最近半年</label>
                </div>
                <div class="col-1 text-999 font-size-14 cursor-pointer align-items-center d-flex shaixuan line-height-24 align-self-start"></div>
            </div>
        </div>
    </div>
</form>
<div class="mb-3"></div>
<!--列表和推荐-->
<div class="container" style="max-width: 1230px" id="new">
    <div class="row no-gutters justify-content-between">
        <div class="col-auto  pb-5" style="margin-right: 10px;width: 830px;margin-bottom: 68px">
            <div class="row mb-3">
                <div class="col-12 bg-white bg-clip-content" id="newlist" >
                  <!--  <div class="col-auto p-0 d-flex " style="height: 120px;margin-bottom: 10px">
                        <a href="" class="d-block link-overflow  h-100" style="min-width: 180px;">
                            <img src="/images/newzs/img/22.jpg" width="180" height="120" title="插图" alt="插图" class="d-block">
                        </a>
                        <div class="h-100 d-flex flex-column justify-content-between " style="padding:0 25px;">
                            <a href="newsinfo.html" class="text-black font-size-18 font-weight-bold" length="20">探索特色小镇的未来之路探索特色小镇的未来之路探索特色小镇的未来之路探索特色小镇的未来之路</a>
                            <article class="font-size-12 text-999 line-height-24 mb-1 w-75" length="60">党的十九大报告明确提出要“建立健全城乡融合发展体制机制和政策体系”为更好推进城乡融合发展，须破解经济社会发展中要素更织间载须破解经济社会发展中要素更织间载须破解经济社会发展中要素更织间载须破解经济社会发展中要素更织间载</article>
                            <p class="d-flex font-size-12 text-999 m-0 justify-content-between"><span>887次浏览</span><sapn>7小时前</sapn></p>
                        </div>
                    </div>-->

                </div>
            </div>
            <div class="row ">
                <div class="bg-white col-12 bg-clip-content">
                    <div class="py-3 text-999 text-center font-size-14 cursor-pointer" id="more">
                        加载更多
                    </div>
                </div>
            </div>
        </div>



        <div class="col-auto " style="width: 360px">
            <?php if(!(empty($hot) || (($hot instanceof \think\Collection || $hot instanceof \think\Paginator ) && $hot->isEmpty()))): ?>
            <a href="<?php echo url('index/zc/newsinfo',['id'=>$hot['id']]); ?>" class="link-overflow w-100 d-block position-relative" style="margin-bottom: 20px">
                <img src="<?php if($hot['pic'] != ''): ?><?php echo $hot['pic']; else: ?>/images/newzs/img/27.jpg<?php endif; ?>" class="w-100" alt="">
                <p class="font-size-14 text-white bg-linered-white-black position-absolute d-block mb-0 w-100 py-2 pl-3" style="bottom: 0px;z-index: 100" length="20 "><?php echo $hot['title']; ?></p>
            </a>
            <?php endif; ?>
            <div class="border-top-red-2"></div>
            <div class="text-red bg-white flex-column d-flex pb-3 justify-content-between mb-3" style="height: 300px">
                <p class="px-4 d-inline-block pt-3 mb-0">热点资讯</p>
                <?php if(is_array($newszi) || $newszi instanceof \think\Collection || $newszi instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($newszi) ? array_slice($newszi,0,1, true) : $newszi->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="font-weight-bold text-black font-size-16 pl-4 my-3" length="18"><?php echo $vo['title']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; if(is_array($newszi) || $newszi instanceof \think\Collection || $newszi instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($newszi) ? array_slice($newszi,1,null, true) : $newszi->slice(1,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="d-block pl-3 text-333 d-flex align-items-center"><span class="iconfont icon-dian font-size-24  mr-1"></span><span class="font-size-14" length="18"><?php echo $vo['title']; ?></span> </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="border-top-red-2"></div>
            <div class="text-red bg-white flex-column d-flex pb-3 justify-content-between mb-3" style="height: 300px">
                <p class="px-4 d-inline-block pt-3 mb-0">行业推荐</p>
                <?php if(is_array($newstu) || $newstu instanceof \think\Collection || $newstu instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($newstu) ? array_slice($newstu,0,1, true) : $newstu->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="font-weight-bold text-black font-size-16 pl-4 my-3" length="18"><?php echo $vo['title']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; if(is_array($newstu) || $newstu instanceof \think\Collection || $newstu instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($newstu) ? array_slice($newstu,1,null, true) : $newstu->slice(1,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="d-block pl-3 text-333 d-flex align-items-center"><span class="iconfont icon-dian font-size-24  mr-1"></span><span class="font-size-14" length="18"><?php echo $vo['title']; ?></span> </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div      class="d-block w-100 position-relative ">
                <div class="row">
                    <div class="col-12">
                        <a href="newsinfo.html" class="d-block"><img src="/images/newzs/img/21.jpg" width="360" height="240" alt="图"></a>
                    </div>
                </div>
                <div     class="font-size-12 px-2 bg-7d7d7d text-white position-absolute d-block" style="right: 10px;top: 15px;z-index: 1000">广告</div>
            </div>
        </div>

    </div>
</div>
<script>
    $(function () {
        (function () {
            var num=1;
            getPage(num,0)
            $("#form input[type=radio]").on("change",function () {
                num=1
                getPage(num,0)
            })
            $("#more").click(function () {
                num++
                getPage(num,1)
            })

        })()

    })
    function  getPage(num,type) {
        var $sortid = $("input[name='sortid']:checked").val()
        var $pro = $("input[name='pro']:checked").val()
        var $time = $("input[name='time']:checked").val()
        var html="";
        $.post("/zc/bgp.html",{sortid:$sortid,pro:$pro,time:$time,page:num},function (data) {
            if(data.data != ""){
                data.data.forEach(function (value,item) {
                    html+="<div class=\"col-auto p-0 d-flex \" style=\"height: 120px;margin-bottom: 10px;margin-top: 10px\">\n" +
                        "                        <a href=\"\" class=\"d-block link-overflow  h-100\" style=\"min-width: 180px;\">\n" +
                        "                            <img src=\""+ value.pic+"\" width=\"180\" height=\"120\" title=\"插图\" alt=\"插图\" class=\"d-block\">\n" +
                        "                        </a>\n" +
                        "                        <div class=\"h-100 d-flex flex-column justify-content-between \" style=\"padding:0 25px;\">\n" +
                        "                            <a href=\""+ value.url+"\" class=\"text-black font-size-18 font-weight-bold\" length=\"20\">"+ value.title+"</a>\n" +
                        "                            <article class=\"font-size-12 text-999 line-height-24 mb-1 w-75\" length=\"60\">"+ value.des.substring(0,60)+"</article>\n" +
                        "                            <p class=\"d-flex font-size-12 text-999 m-0 justify-content-between\"><span>"+ value.sort+"次浏览"+"</span><sapn>"+value.time+"</sapn></p>\n" +
                        "                        </div>\n" +
                        "                    </div>"
                })
                if(type==0){
                    $("#newlist").html(html)
                }else if(type==1){
                    $("#newlist").append(html)
                }
            }else{
                if(type==0){
                    $("#newlist").html("  <div class=\"row\">\n" +
                        "                <div class=\"col-12 py-4\">\n" +
                        "                    <p class=\"iconfont icon-zanwushuju font-size-55 text-center text-999\"></p>\n" +
                        "                    <p class=\"text-999 text-center font-size-18\">暂无数据</p>\n" +
                        "                </div>\n" +
                        "            </div>")
                }else{
                    $("#more").text("没有更多了")
                }


            }

        })
    }
</script>


<footer class="container-fluid p-0" id="footer" style="background-image: url(/images/newzs/img/17.jpg);background-repeat: no-repeat;background-position: center;background-size: 100% 100%">
    <div class="container-fluid p-0 " style="background-color: white">
        <div class="container align-items-center d-flex" style="max-width: 1230px;height: 77px;">
            <div class="row w-100">
                <div class="col-10 d-flex justify-content-between font-size-14 text-333">
                    <span class="text-666 ">友情链接：</span>
                    <?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo $vo['url']; ?>" class="text-333"><?php echo $vo['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="col-2">
                    <!--<a href="" class="text-333 font-size-14 text-right d-block ">展开&gt;&gt;</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1230px;height: 140px">
        <div class="row no-gutters align-items-center justify-content-between h-100">
            <div class="col-auto d-flex" style="height: 50px" >
                <img src="/images/newzs/img/11.png" width="50"  height="50"  class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">400-150-9896</p>
                    <p class="mb-0 text-white font-size-14">平台服务热线</p>
                </div>
            </div>
            <div class="col-auto d-flex" style="height: 50px" >
                <img src="/images/newzs/img/12.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">service@zxrhgb.com</p>
                    <p class="mb-0 text-white font-size-14">邮箱</p>
                </div>
            </div>
            <div class="col-auto d-flex" style="height: 50px" >
                <img src="/images/newzs/img/13.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">08:30-18:00 </p>
                    <p class="mb-0 text-white font-size-14">服务时间</p>
                </div>
            </div>
          <!--  <div class="col-auto  d-flex  " style="height: 50px" >
                <img src="/images/newzs/img/jiazai.png" class="lazyload" data-src="/images/newzs/img/14.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto pr-0 d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">027-88888888</p>
                    <p class="mb-0 text-white font-size-14">意见反馈</p>
                </div>
            </div>-->
        </div>
    </div>
    <div class="container" style="max-width: 1230px">
        <div class="row">
            <div class="col">
                <div class="border-red"></div>
            </div>
        </div>
    </div>
    <div class="container " style=";padding: 58px 0;height: 304px;max-width: 1200px">
        <div class="row h-100" style="">
            <div class="col-2 h-100 d-flex flex-column justify-content-between">
                <img src="/images/newzs/img/5.png" width="143" height="44" class="d-block mb-4" alt="图片">
                <img src="/images/newzs/img/16.jpg" width="78" height="78" class="d-block" alt="图片">
                <span class="text-white font-size-14">扫描二维码，加关注</span>
            </div>
            <div class="col-10">
                <div class="row" style="padding-left: 50px">
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">新手指导</p>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">帮助中心</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">常见问题</a>
                    </div>
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">平台服务</p>
                        <a href="<?php echo url('index/zhaoshang/fang_index'); ?>" class="d-block text-white font-size-12 line-height-24">厂房租售</a>
                        <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" class="d-block text-white font-size-12 line-height-24">土地租售</a>
                        <a href="<?php echo url('index/zhaoshang/lou_index'); ?>" class="d-block text-white font-size-12 line-height-24">写字楼出租</a>
                        <a href="/teshe/" class="d-block text-white font-size-12 line-height-24">特色小镇</a>
                        <a href="/zht/" class="d-block text-white font-size-12 line-height-24">商业综合体</a>
                    </div>
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">招商服务</p>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">免费选址</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">公司注册</a>
                        <a href="<?php echo url('hcy/index'); ?>" class="d-block text-white font-size-12 line-height-24">税务筹划</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">法律顾问</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">知识产权</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">入园申请</a>
                    </div>
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">关于平台</p>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">招商政策网介绍</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">联系我们</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">网站公告</a>
                        <a href="<?php echo url('index/index/404'); ?>" class="d-block text-white font-size-12 line-height-24">隐私条款</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1230px">
        <div class="row">
            <div class="col">
                <div class="border-red"></div>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1230px;height: 146px" >
        <div class="row h-100  flex-column justify-content-around">
            <div class="col-12 text-center font-size-14 text-white align-items-center d-flex justify-content-between flex-column">
                <p class="pt-5">Copyright 2018 惠创优产业园发展（湖北）有限公司(www.i35wang.com)版权所有|鄂ICP备18019387号</p>
                <p class="pb-5"> 地址:湖北省武汉市硚口区汉西南国大家装H座20楼</p>
            </div>
        </div>
    </div>
</footer>


<script src="/images/newzs/js/pub.js"></script>



<div style="display: none;"><script type="text/javascript" src="https://s5.cnzz.com/z_stat.php?id=1275956744&web_id=1275956744"></script></div>
</body>

</html>
