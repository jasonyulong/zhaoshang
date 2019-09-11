<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\www\zhaoshang\application\..\public\tpl\index\index\index.html";i:1547015682;s:45:"D:\www\zhaoshang\public\tpl\index\layout.html";i:1546391391;s:34:"../public/tpl/index/allfooter.html";i:1546391299;}*/ ?>


<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="hello">
    <meta name="keywords" content="a,b,c">
    <mata name="renderer" content="webkit"></mata>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_931982_d4mxcdhlux.css">
    <link rel="stylesheet" href="/images/newzs/css/bootstrap.css">
    <link rel="stylesheet" href="/images/newzs/css/public.css">
    <link rel="stylesheet" href="/images/newzs/css/index.css">
    <script src="/images/newzs/js/jquery-3.3.1.min.js"></script>
    <script src="/images/newzs/js/bootstrap.js"></script>
    
<title>招商政策网</title>

</head>
<body class="bg-fafafa position-relative">

<!--侧边栏-->
<aside id="mainaside" class="position-fixed" style="width: 65px;right: 0px">
    <a href="<?php echo url('404'); ?>" class="text-white d-block d-flex flex-column justify-content-around" style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe670;</p>
        <?php if($islogin == 'no'): ?>
        <p class="px-1 font-size-12 text-center mb-1">登陆注册</p>
        <?php endif; if($islogin == 'yes'): ?>
        <p class="px-1 font-size-12 text-center mb-1">会员中心</p>
        <?php endif; ?>
    </a>
    <a href="<?php echo url('404'); ?>" class="text-white d-block " style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe63d;</p>
        <p class="px-1 font-size-12 text-center mb-1">免费发布</p>
    </a>
    <a href="tencent://message/?uin=52203910&amp;Site=http://vps.shuidazhe.com&amp;Menu=yes" class="text-white d-block position-relative" style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe662;</p>
        <p class="px-1 font-size-12 text-center mb-1">免费咨询</p>

    </a>
    <a href="tencent://message/?uin=52203910&amp;Site=http://vps.shuidazhe.com&amp;Menu=yes" class="text-white d-block position-relative" style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe62c;</p>
        <p class="px-1 font-size-12 text-center mb-1">二维码</p>
        <article class=" justify-content-center align-items-center flex-column bg-white pt-3" style="position: absolute;right: 65px;top: 0px;border: 2px solid #dd0000;width: 110px;height: 129px;z-index: 1000" >
            <div class="d-flex justify-content-center">
                <img src="/images/newzs/img/1.png" width="84" height="84" class="d-block  tp-4 " alt="图片">
            </div>

            <p class="text-center text-333">微信公众号</p>
        </article>
    </a>
    <a  class="text-white d-block position-relative" style="width: 65px;height: 65px;margin-bottom: 1px;cursor: pointer">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe62f;</p>
        <p class="px-1 font-size-12 text-center mb-1">联系我们</p>
        <article class=" align-items-center flex-column  px-2 font-size-24 font-weight-bold" style="position: absolute;right: 65px;top: 0px;border: 2px solid #dd0000;height: 65px;z-index: 1000;background-color:#dd0000 " >
            <div class="d-flex align-items-center h-100">13307133879</div>
        </article>
    </a>
    <a href="javascript:backtop()"  class="text-white d-block " style="width: 65px;height: 65px;margin-bottom: 1px">
        <p class="m-0 pt-1 iconfont font-size-24 text-center">&#xe665;</p>
        <p class="px-1 font-size-12 text-center mb-1">返回顶部</p>
    </a>
</aside>
<!-- <aside id="maingao" class="alert alert-dismissible position-fixed" style="width: 202px;left: 93px;top: 30%">
     <p  class="text-right text-333 font-size-14 mb-0 close"  data-dismiss="alert" style="cursor: pointer;right: -42px;top: -19px" onclick="close()">关闭</p>
     <a href="newsinfo.html" class="d-block "  >
         <img src="/images/newzs/img/9.jpg" width="202" height="337"  alt="图片">
     </a>
 </aside>-->


<!--搜索框-->
<div class="container" style="max-width: 1230px;padding-top: 135px">
    <div class="row" >
        <div class="col-6" >
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
                    <input name="title" type="search" id="search" class="form-control rounded-0 h-100 border-left-0" >
                    <div class="input-group-append  ">
                        <button class="btn bg-red text-white font-size-18 rounded-0" style="padding: 0 30px;" >搜索</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--导航栏-->
<nav id="nav" class="container bg-linered d-flex justify-content-around  position-relative align-items-center " style="max-width: 1200px;margin-top: 145px;margin-bottom: 20px;height: 75px">
    <div class="navhover h-100">
        <a href="<?php echo url('index/index/index'); ?>" class="text-white font-size-22  bold  h-100 d-block px-3" style="line-height: 75px;">首页</a>
    </div>
    <div class="navhover h-100">
        <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">实体招商</a>
        <div class="secondnav position-absolute   col-12" >
            <div class="col-12 " style="padding-left: 200px">
                <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" class="text-333 mr-5">厂房出租</a>
                <a href="<?php echo url('index/zhaoshang/fang_index'); ?>" class="text-333 mr-5">土地租售</a>
                <a href="<?php echo url('index/zhaoshang/lou_index'); ?>" class="text-333 mr-5">写字楼出租</a>
            </div>
        </div>
    </div>
    <div class="navhover h-100">
        <a href="http://www.i35wang.com/hcy/index.html" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">税务筹划</a>
    </div>
    <div class="navhover h-100">
        <a href="<?php echo url('404'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">政策动态</a>
        <div class="secondnav position-absolute   col-12" >
            <div class="col-12 " style="padding-left: 200px">
                <?php if(is_array($zcdt) || $zcdt instanceof \think\Collection || $zcdt instanceof \think\Paginator): $i = 0; $__LIST__ = $zcdt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newslist',array('id'=>$vo["id"])); ?>" class="text-333 mr-5"><?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <div class="navhover h-100">
        <a href="<?php echo url('404'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">综合体</a>
        <div class="secondnav position-absolute   col-12" >
            <div class="col-12 " style="padding-left: 200px">
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5">孵化器</a>
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5">众创空间</a>
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5">商业综合体</a>
            </div>
        </div>
    </div>
    <div class="navhover h-100">
        <a href="<?php echo url('404'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">项目对接</a>
        <div class="secondnav position-absolute   col-12" >
            <div class="col-12 " style="padding-left: 200px">
                <?php if(is_array($xmdj) || $xmdj instanceof \think\Collection || $xmdj instanceof \think\Paginator): $i = 0; $__LIST__ = $xmdj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newslist',array('id'=>$vo["id"])); ?>" class="text-333 mr-5"><?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>

    <div class="navhover h-100">
        <a href="#" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">行政办公</a>
        <div class="secondnav position-absolute   col-12" >
            <div class="col-12 " style="padding-left: 200px">
                <?php if(is_array($xzbg) || $xzbg instanceof \think\Collection || $xzbg instanceof \think\Paginator): $i = 0; $__LIST__ = $xzbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/zc/newslist',array('id'=>$vo["id"])); ?>" class="text-333 mr-5"><?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>

    <div class="navhover h-100">
        <a href="<?php echo url('404'); ?>" class="text-white font-size-18 font-weight-light h-100 d-block px-3" style="line-height: 75px">特色项目</a>
        <div class="secondnav position-absolute   col-12" >
            <div class="col-12 p-0" >
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5 ">工业</a>
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5">农业</a>
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5">AI</a>
                <a href="<?php echo url('404'); ?>" class="text-333 mr-5">特色小镇</a>
            </div>
        </div>
    </div>

</nav>


<!--轮播-->
<main class="container mb-50" style="max-width: 1220px;height: 425px;">
    <div class="row h-100">
        <div class="col-auto h-100" style="padding: 0 10px;">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel"  data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): $k = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <div class="carousel-item <?php if($k == '1'): ?>active<?php endif; ?>">
                        <a href="<?php echo $vo['url']; ?>">
                            <img class="d-block " src="<?php echo $vo['pic']; ?>" width="669"  height="424" alt="<?php echo $vo['title']; ?>">
                        </a>
                        <div class="carousel-caption d-none d-md-block w-100">
                            <p class="m-0 text-left pl-3 font-size-18 w-75 text-over"><?php echo $vo['title']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
        <div class="col h-100 align-content-between d-flex flex-column justify-content-between" style="padding: 0 10px; ">
            <div class="row align-items-center">
                <div class="col-6 font-size-18 text-red font-weight-bold">今日要闻 <img src="/images/newzs/img/18.jpg" width="19" height="19" alt="徽章"></div>
                <div class="col-6 text-right align-item--center"><a href="<?php echo url('about/wenhua'); ?>" class="text-red font-size-14">更多&gt;</a></div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($news) ? array_slice($news,0,1, true) : $news->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class=" text-black font-size-18 font-weight-bold line-height-30" length="20"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($news) ? array_slice($news,1,3, true) : $news->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-666 font-size-14 d-block w-100 p-1" length="30"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 border-bottom" ></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($news) ? array_slice($news,4,3, true) : $news->slice(4,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-666 font-size-14 d-block w-100 p-1" length="30"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 border-bottom" ></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($news) ? array_slice($news,7,3, true) : $news->slice(7,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-666 font-size-14 d-block w-100 p-1" length="30"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<!--政策解读-->
<div class="container mb-50" style="max-width: 1230px;height: 307px;">
    <div class="row">
        <div class="col-8">
            <div class="border-red w-100"></div>
            <div class="row">
                <div class="col-8">
                    <ul class="nav nav-tabs border-bottom-0 mb-1" style="height: 50px">
                        <li class="nav-item">
                            <a href="#block1" class="nav-link active text-333  rounded-0 text-left px-0 mr-4 border-top" data-toggle="tab" >政策解读</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block2" class="nav-link text-333 rounded-0 text-left px-0  mr-4" data-toggle="tab" >政策速递</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block3" class="nav-link text-333  rounded-0 text-left px-0  mr-4" data-toggle="tab" >行业规划</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block4" class="nav-link text-333 rounded-0 text-left px-0 mr-4" data-toggle="tab" >土地招拍</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-right justify-content-center d-flex flex-column">
                    <a href="/zc/newslist/id/42.html" class="text-red font-size-14 line-height-35">更多&gt;</a>
                </div>
            </div>
            <div class="tab-content row" style="height: 257px;">
                <div class="col-12 h-100">
                    <div class="tab-content h-100">
                        <div class="tab-pane  h-100 fade active show" id="block1"  >
                            <div class="row h-100 " >
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_all) || $zc_all instanceof \think\Collection || $zc_all instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_all) ? array_slice($zc_all,0,1, true) : $zc_all->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_all) || $zc_all instanceof \think\Collection || $zc_all instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_all) ? array_slice($zc_all,1,3, true) : $zc_all->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_all) || $zc_all instanceof \think\Collection || $zc_all instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_all) ? array_slice($zc_all,4,1, true) : $zc_all->slice(4,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_all) || $zc_all instanceof \think\Collection || $zc_all instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_all) ? array_slice($zc_all,5,3, true) : $zc_all->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  h-100 fade " id="block2"  >
                            <div class="row h-100 " >
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_gs) || $zc_gs instanceof \think\Collection || $zc_gs instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_gs) ? array_slice($zc_gs,0,1, true) : $zc_gs->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_gs) || $zc_gs instanceof \think\Collection || $zc_gs instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_gs) ? array_slice($zc_gs,1,3, true) : $zc_gs->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_gs) || $zc_gs instanceof \think\Collection || $zc_gs instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_gs) ? array_slice($zc_gs,4,1, true) : $zc_gs->slice(4,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_gs) || $zc_gs instanceof \think\Collection || $zc_gs instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_gs) ? array_slice($zc_gs,5,3, true) : $zc_gs->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  h-100 fade"  id="block3"  >
                            <div class="row h-100 " >
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_sw) || $zc_sw instanceof \think\Collection || $zc_sw instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_sw) ? array_slice($zc_sw,0,1, true) : $zc_sw->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_sw) || $zc_sw instanceof \think\Collection || $zc_sw instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_sw) ? array_slice($zc_sw,1,3, true) : $zc_sw->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_sw) || $zc_sw instanceof \think\Collection || $zc_sw instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_sw) ? array_slice($zc_sw,4,1, true) : $zc_sw->slice(4,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_sw) || $zc_sw instanceof \think\Collection || $zc_sw instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_sw) ? array_slice($zc_sw,5,3, true) : $zc_sw->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  h-100 fade " id="block4"  >
                            <div class="row h-100 " >
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_cq) || $zc_cq instanceof \think\Collection || $zc_cq instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_cq) ? array_slice($zc_cq,0,1, true) : $zc_cq->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_cq) || $zc_cq instanceof \think\Collection || $zc_cq instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_cq) ? array_slice($zc_cq,1,3, true) : $zc_cq->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="col-6 d-flex flex-column align-content-between justify-content-between " >
                                    <?php if(is_array($zc_cq) || $zc_cq instanceof \think\Collection || $zc_cq instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_cq) ? array_slice($zc_cq,4,1, true) : $zc_cq->slice(4,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" length="22" class="text-333 w-100 "><?php echo $vo['title']; ?></a>
                                    <div class="row align-content-stretch" >
                                        <div class="col-6">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>"  class="link-overflow d-block"><img src="<?php if($vo['pic'] != ''): ?><?php echo $vo['pic']; else: ?>/images/notpic.jpg<?php endif; ?>"  width="100%"  height="94" class="d-block" alt="图片"></a>
                                        </div>
                                        <div class="col-6 font-size-12 pl-1 text-666  line-height-24" length="55"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($zc_cq) || $zc_cq instanceof \think\Collection || $zc_cq instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($zc_cq) ? array_slice($zc_cq,5,3, true) : $zc_cq->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="row">
                                        <div class="col-12 line-height-30">
                                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14 w-100" length="25"><?php echo $vo['title']; ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="border-red w-100 mb-1"></div>
            <div class="bg-red w-100" style="height: 3px"></div>
            <div class="row" >
                <div class="col-12 d-flex flex-column  justify-content-between " id="nav-xz">
                    <h3 class="text-red text-center font-size-18 font-weight-bold mt-2 pt-4 mb-0" style="letter-spacing: 3px" ><span class="iconfont ">&#xe630;</span >&nbsp;四新经济&nbsp;<span class="iconfont ">&#xe630;</span></h3>
                    <div class="row  "style="padding: 0 30px;margin: 0 -10px;" >
                        <div class="col-4  text-center mb-2 " style="padding: 0 5px;">
                            <a href="<?php echo url('hcy/index'); ?>" class="w-100 d-block bg-red text-white py-2 font-size-14">免费选址</a>
                        </div>
                        <div class="col-4  text-center mb-2 " style="padding: 0 5px;">
                            <a href="<?php echo url('hcy/index'); ?>" class="w-100 d-block bg-red text-white py-2 font-size-14">公司注册</a>
                        </div>
                        <div class="col-4  text-center mb-2  " style="padding: 0 5px;">
                            <a href="<?php echo url('hcy/index'); ?>" class="w-100 d-block bg-red text-white py-2 font-size-14">税务筹划</a>
                        </div>
                        <div class="col-4  text-center " style="padding: 0 5px;">
                            <a href="<?php echo url('hcy/index'); ?>" class="w-100 d-block bg-red text-white py-2 font-size-14">法律顾问</a>
                        </div>
                        <div class="col-4  text-center " style="padding: 0 5px;">
                            <a href="<?php echo url('hcy/index'); ?>" class="w-100 d-block bg-red text-white py-2 font-size-14">知识产权</a>
                        </div>
                        <div class="col-4  text-center " style="padding: 0 5px;">
                            <a href="<?php echo url('about/wenhua'); ?>" class="w-100 d-block bg-red text-white py-2 font-size-14">入园申请</a>
                        </div>
                    </div>
                    <div class="row  flex-column " style="padding: 0 30px;margin: 0 -10px;height: 103px">
                        <div class="col-12 d-flex flex-column justify-content-between" style="padding: 0 5px;">
                            <?php if(is_array($zc_ran) || $zc_ran instanceof \think\Collection || $zc_ran instanceof \think\Paginator): $i = 0; $__LIST__ = $zc_ran;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="text-333 d-block font-size-14" length="18"><?php echo $vo['title']; ?> </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-50" style="max-width: 1230px;height: 469px">
    <div class="row">
        <div class="col-12">
            <div class="border-red w-100"></div>
            <div class="row">
                <div class="col-8 align-item-center">
                    <ul class="nav nav-tabs border-bottom-0 mb-1" style="height: 50px">
                        <li class="nav-item">
                            <a href="#block5" class="nav-link active text-333 border-top rounded-0 px-0 mr-4 text-left" data-toggle="tab">实体招商</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block6" class="nav-link text-333 font-size-18 rounded-0 px-0 mr-4 text-left" data-toggle="tab" >厂房租售</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block7" class="nav-link text-333 font-size-18 rounded-0 px-0 mr-4 text-left" data-toggle="tab" >土地租售</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block8" class="nav-link text-333 font-size-18 rounded-0 px-0 mr-4 text-left" data-toggle="tab" >写字楼租售</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-right justify-content-center d-flex flex-column"><a href="<?php echo url('index/zhaoshang/fang_index'); ?>" class="text-red font-size-14 ">更多&gt;</a></div>
            </div>
            <div class="row" style="height: 390px">
                <div class="col-12 h-100">
                    <div class="tab-content h-100" role="tablist">
                        <div class="tab-pane  h-100 fade show active" id="block5" >
                            <div class="row h-100"  style="margin: 0 -25px">
                                <?php if(is_array($zs_fang) || $zs_fang instanceof \think\Collection || $zs_fang instanceof \think\Paginator): $i = 0; $__LIST__ = $zs_fang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="col-3 h-100 " style="padding: 0 25px">
                                    <div class="w-100 h-100 d-flex flex-column justify-content-between" >
                                        <a href="<?php echo url('index/Fang/info',['id'=>$vo['id']]); ?>" class="link-overflow">
                                            <img src="<?php echo $vo['pic']; ?>" width="265" height="222" alt="265">
                                        </a>
                                        <p class="font-size-18 mb-2" length="12"><?php echo $vo['title']; ?></p>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-dizhi2 mr-1 "></span><span length="13"><span length="13">项目地址：<?php echo $vo['address']; ?></span>}</span></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-riqi mr-1"></span>发布日期：<?php echo date('Y年m月d日',$vo['time']); ?></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-mianji mr-1"></span>项目面积：<span class="text-red"><?php echo $vo['area']; ?>m²</span></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-zujin mr-1"></span>项目租金：<span class="text-red"><?php echo $vo['price']; ?>元/月</span></article>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div class="tab-pane  h-100 fade " id="block6" >
                            <div class="row h-100"  style="margin: 0 -25px">
                                <?php if(is_array($zs_fang) || $zs_fang instanceof \think\Collection || $zs_fang instanceof \think\Paginator): $i = 0; $__LIST__ = $zs_fang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="col-3 h-100 " style="padding: 0 25px">
                                    <div class="w-100 h-100 d-flex flex-column justify-content-between" >
                                        <a href="<?php echo url('index/Fang/info',['id'=>$vo['id']]); ?>" class="link-overflow">
                                            <img src="<?php echo $vo['pic']; ?>" width="265" height="222" alt="265">
                                        </a>
                                        <p class="font-size-18 mb-2" length="12"><?php echo $vo['title']; ?></p>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-dizhi2 mr-1"></span><span length="13">项目地址：<?php echo $vo['address']; ?></span>}</article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-riqi mr-1"></span>发布日期：<?php echo date('Y年m月d日',$vo['time']); ?></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-mianji mr-1"></span>项目面积：<span class="text-red"><?php echo $vo['area']; ?>m²</span></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-zujin mr-1"></span>项目租金：<span class="text-red"><?php echo $vo['price']; ?>元/月</span></article>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div class="tab-pane  h-100 fade " id="block7" >
                            <div class="row h-100"  style="margin: 0 -25px">
                                <?php if(is_array($zs_tudi) || $zs_tudi instanceof \think\Collection || $zs_tudi instanceof \think\Paginator): $i = 0; $__LIST__ = $zs_tudi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="col-3 h-100 " style="padding: 0 25px">
                                    <div class="w-100 h-100 d-flex flex-column justify-content-between" >
                                        <a href="<?php echo url('index/Tudi/info',['id'=>$vo['id']]); ?>" class="link-overflow">
                                            <img src="<?php echo $vo['pic']; ?>" width="265" height="222" alt="265">
                                        </a>
                                        <p class="font-size-18 mb-2" length="12"><?php echo $vo['title']; ?></p>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-push mr-1"></span>发布方式：<?php echo $vo['uptype']; ?></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-riqi mr-1"></span>发布日期：<?php echo date('Y年m月d日',$vo['time']); ?></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-mianji mr-1"></span>项目面积：<span class="text-red"><?php echo $vo['area']; ?>m²</span></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-zujin mr-1"></span>项目租金：<span class="text-red"><?php echo $vo['zujing']; ?>元</span></article>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div class="tab-pane  h-100 fade " id="block8" >
                            <div class="row h-100"  style="margin: 0 -25px">
                                <?php if(is_array($zs_lou) || $zs_lou instanceof \think\Collection || $zs_lou instanceof \think\Paginator): $i = 0; $__LIST__ = $zs_lou;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="col-3 h-100 " style="padding: 0 25px">
                                    <div class="w-100 h-100 d-flex flex-column justify-content-between" >
                                        <a href="<?php echo url('index/Lou/info',['id'=>$vo['id']]); ?>" class="link-overflow">
                                            <img src="/images/newzs/img/jiazai.png" class="lazyload" data-src="<?php echo $vo['pic']; ?>" width="265" height="222" alt="265">
                                        </a>
                                        <p class="font-size-18 mb-2" length="12"><?php echo $vo['title']; ?></p>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-mingcheng mr-1"></span>楼盘名称：<?php echo $vo['panname']; ?></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-riqi mr-1"></span>发布日期：<?php echo date('Y年m月d日',$vo['time']); ?></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-mianji mr-1"></span>项目面积：<span class="text-red"><?php echo $vo['area']; ?>m²</span></article>
                                        <article class="text-666 d-flex align-items-center font-size-14"><span class="iconfont icon-zujin mr-1"></span>项目租金：<span class="text-red"><?php echo $vo['zujing']; ?>元</span></article>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-50" style="max-width: 1230px;height: 380px">
    <div class="row">
        <div class="col-12">
            <div class="border-red w-100"></div>
            <div class="row">
                <div class="col-8">
                    <ul class="nav nav-tabs border-bottom-0 mb-1" style="height: 50px">
                        <li class="nav-item">
                            <a href="#block9" class="nav-link active text-333 font-size-18 rounded-0 px-0 mr-3 text-left border-top" data-toggle="tab">综合体</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block10" class="nav-link text-333 font-size-18 rounded-0 px-0 mr-3 text-left" data-toggle="tab" >孵化器</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block11" class="nav-link text-333 font-size-18 rounded-0 px-0 mr-3 text-left" data-toggle="tab" >众创空间</a>
                        </li>
                        <li class="nav-item">
                            <a href="#block12" class="nav-link text-333 font-size-18 rounded-0 px-0 mr-3 text-left" data-toggle="tab" >商业综合体</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-right justify-content-center d-flex flex-column "><a href="<?php echo url('about/wenhua'); ?>" class="text-red font-size-14">更多&gt;</a></div>
            </div>
        </div>
    </div>
    <div class="row" style="">
        <div class="col-12 h-100">
            <div class="tab-content h-100" >
                <div class="tab-pane  h-100 fade show active" id="block9" >
                    <div class="row h-100"  >
                        <?php if(is_array($zht_all) || $zht_all instanceof \think\Collection || $zht_all instanceof \think\Paginator): $i = 0; $__LIST__ = $zht_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="col-4 h-100 flex-column  d-flex" >
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="link-overflow d-block"> <img src="/images/newzs/img/jiazai.png" class="lazyload" data-src="<?php echo $vo['pic']; ?>" width="380" height="197" alt="<?php echo $vo['title']; ?>"></a>
                            <article class="text-333 line-height-30 font-size-14" length="75" ><?php echo mb_substr(remove_html($vo['content']),0,80); ?></article>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="tab-pane  h-100 fade " id="block10" >
                    <div class="row h-100"  >
                        <?php if(is_array($zht_fhq) || $zht_fhq instanceof \think\Collection || $zht_fhq instanceof \think\Paginator): $i = 0; $__LIST__ = $zht_fhq;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="col-4 h-100 flex-column justify-content-between d-flex" >
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="link-overflow d-block"> <img src="/images/newzs/img/jiazai.png" class="lazyload" data-src="<?php echo $vo['pic']; ?>" width="380" height="197" alt="<?php echo $vo['title']; ?>"></a>
                            <article class="text-333 line-height-30 font-size-14" length="75"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></article>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="tab-pane  h-100 fade " id="block11" >
                    <div class="row h-100"  >
                        <?php if(is_array($zht_zckj) || $zht_zckj instanceof \think\Collection || $zht_zckj instanceof \think\Paginator): $i = 0; $__LIST__ = $zht_zckj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="col-4 h-100 flex-column justify-content-between d-flex" >
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="link-overflow d-block"> <img src="/images/newzs/img/jiazai.png" class="lazyload" data-src="<?php echo $vo['pic']; ?>" width="380" height="197" alt="<?php echo $vo['title']; ?>"></a>
                            <article class="text-333 line-height-30 font-size-14" length="75"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></article>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="tab-pane  h-100 fade " id="block12" >
                    <div class="row h-100"  >
                        <?php if(is_array($zht_zckj) || $zht_zckj instanceof \think\Collection || $zht_zckj instanceof \think\Paginator): $i = 0; $__LIST__ = $zht_zckj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="col-4 h-100 flex-column justify-content-between d-flex" >
                            <a href="<?php echo url('index/zc/newsinfo',['id'=>$vo['id']]); ?>" class="link-overflow d-block"> <img src="/images/newzs/img/jiazai.png" class="lazyload" data-src="<?php echo $vo['pic']; ?>" width="380" height="197" alt="<?php echo $vo['title']; ?>"></a>
                            <article class="text-333 line-height-30 font-size-14" length="75"><?php echo mb_substr(remove_html($vo['content']),0,80); ?></article>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-50" style="max-width: 1230px;height: 260px;">
    <div class="row">
        <div class="col-12">
            <div class="border-red w-100"></div>
            <div class="row">
                <div class="col-8">
                    <ul class="nav nav-tabs border-bottom-0 mb-1" style="height: 50px">
                        <li class="nav-item">
                            <a href="#block13" class="nav-link active text-333 rounded-0 px-0 mr-3 text-left border-top" data-toggle="tab">特色小镇</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-right justify-content-center d-flex flex-column"><a href="<?php echo url('about/wenhua'); ?>" class="text-red font-size-14 ">更多&gt;</a></div>
            </div>
            <div class="row" style="">
                <div class="col-12">
                    <div class="row" style="height: 290px">
                        <div class="col-12 h-100">
                            <div class="tab-content h-100" >
                                <div class="tab-pane  h-100 fade show active" id="block13" >
                                    <div class="row h-100"  style="max-width: 1246px;margin: 0 -23px">
                                        <?php if(is_array($zheng) || $zheng instanceof \think\Collection || $zheng instanceof \think\Paginator): $i = 0; $__LIST__ = $zheng;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <div class="col-4 h-100 flex-column justify-content-between d-flex"  style="padding: 0 23px">
                                            <a href="#" class="d-block position-relative">
                                                <img  src="/images/newzs/img/jiazai.png" class="lazyload" data-src="<?php echo $vo['pic']; ?>" width="100%" height="193" alt="图片"/>
                                                <article class="position-absolute w-100 h-100 pl-5 py-5 text-white line-height-28" style="left: 0;top: 0;background: rgba(221, 81, 81,0.9)">
                                                    <h3 class="font-size-18" length="6"><?php echo $vo['title']; ?></h3>
                                                    <p class="m-0 font-size-14" style=""><img src="/images/newzs/img/18.png" width="20" class="mr-1" height="20" alt="图片"><span length="8">面积:<?php echo $vo['area']; ?>km²</span></p>
                                                    <p class="m-0 font-size-14"><img src="/images/newzs/img/19.png" width="20" class="mr-1" height="20" alt="图片"><span length="8">入驻企业:<?php echo $vo['qiye']; ?>家</span></p>
                                                    <p class="m-0 font-size-14"><img src="/images/newzs/img/20.png" width="20" class="mr-1" height="20" alt="图片"><span length="8">产业集群:<?php echo $vo['hangye']; ?></span></p>
                                                </article>
                                            </a>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                    <a href="" class="text-333 font-size-14 text-right d-block ">展开&gt;&gt;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1230px;height: 140px">
        <div class="row align-items-center justify-content-between h-100">
            <div class="col-2 d-flex" style="height: 50px" >
                <img src="/images/newzs/img/11.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">400-150-9896</p>
                    <p class="mb-0 text-white font-size-14">平台服务热线</p>
                </div>
            </div>
            <div class="col-2 d-flex" style="height: 50px" >
                <img src="/images/newzs/img/12.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">xxx@xx.com</p>
                    <p class="mb-0 text-white font-size-14">邮箱</p>
                </div>
            </div>
            <div class="col-2 d-flex" style="height: 50px" >
                <img src="/images/newzs/img/13.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">08:30-18:00 </p>
                    <p class="mb-0 text-white font-size-14">服务时间</p>
                </div>
            </div>
            <div class="col-auto  d-flex  " style="height: 50px" >
                <img src="/images/newzs/img/14.png" width="50" height="50" class="d-block" alt="图片">
                <div class="col-auto d-flex flex-column justify-content-between">
                    <p class="mb-0 text-white font-size-18">027-88888888</p>
                    <p class="mb-0 text-white font-size-14">意见反馈</p>
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
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">帮助中心</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">免费发布信息</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">常见问题</a>
                    </div>
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">平台服务</p>
                        <a href="<?php echo url('index/zhaoshang/fang_index'); ?>" class="d-block text-white font-size-12 line-height-24">厂房租售</a>
                        <a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" class="d-block text-white font-size-12 line-height-24">土地租售</a>
                        <a href="<?php echo url('index/zhaoshang/lou_index'); ?>" class="d-block text-white font-size-12 line-height-24">写字楼出租</a>
                        <a href="<?php echo url('index/teshe/index'); ?>" class="d-block text-white font-size-12 line-height-24">特色小镇</a>
                        <a href="<?php echo url('index/zht/index'); ?>" class="d-block text-white font-size-12 line-height-24">商业综合体</a>
                    </div>
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">招商服务</p>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">免费选址</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">公司注册</a>
                        <a href="" class="d-block text-white font-size-12 line-height-24">税务筹划</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">法律顾问</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">知识产权</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">入园申请</a>
                    </div>
                    <div class="col-3 text-white" style="padding-left: 70px">
                        <p   class="d-block font-size-16">关于平台</p>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">招商政策网介绍</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">联系我们</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">网站公告</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">隐私条款</a>
                        <a href="<?php echo url('404'); ?>" class="d-block text-white font-size-12 line-height-24">网站地图</a>
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

</body>
<script>
    $(function () {
        $(":submit").click(function (event) {
            event.preventDefault();
            var seo =$("#search").val();
            debugger;
            if(seo){
                $("form")[0].submit();
            }
        })
        /*   $(".navhover").hover(function (){
         let $index=$(this).index();
         console.log($index);
         $(".secondnav").eq($index).fadeIn()
         },function () {
         let $index=$(this).index();
         $(".secondnav").eq($index).hide()
         })*/
    })
</script>
<script src="/images/newzs/js/pub.js"></script>



</html>