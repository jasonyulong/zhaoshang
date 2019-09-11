<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\www\zhaoshang\application\..\public\tpl\index\index\search.html";i:1543457557;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>搜索</title>
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <script src="/images/zhaoshang/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/teseproject.css">
    <style>
        #main{
            padding: 30px 30px 55px 30px;
        }
        .mainwrap {
            padding-bottom: 30px;
            margin-bottom: 30px;
            padding: 0px 30px 55px 30px;
        }

    </style>
</head>
<body>
<!--选中效果-->
<input type="hidden" value="navzh" data-active="">
<input type="hidden" value="zhlink2" data-active="">
<!--导航start-->

<div id="nav" data-name="model-head.html"></div>
<div class="biaoti" data-name="model-biaoti.html"></div>
<div class="mainwrap mainbox-shadow">
    <h6 style="padding:30px 20px; display: flex;align-items: center"><img src="/images/zhaoshang/img/shitizhaoshang/65.png " style="margin-right: 10px"  alt="">首页&gt;搜索</h6>
    <div id="main">

        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="ts-list">
            <div class="data" style="background-color: #ffffff;width: 96px; height: 96px;">
                <img src="<?php echo $vo['pic']; ?>" width="96" height="96" style="width: 96px; height: 96px;">
            </div>
            <div class="content">
                <a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
                <article length="60"><?php echo $vo['title']; ?></article>
            </div>
        </div>
        <hr>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>

</div>

<div id="footer" data-name="model-foot.html"></div>

<script src="/images/zhaoshang/js/niti.js"></script>


</body>
</html>