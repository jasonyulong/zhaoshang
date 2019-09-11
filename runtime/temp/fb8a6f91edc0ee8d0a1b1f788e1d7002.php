<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\www\zhaoshang\application\..\public\tpl\admin\index\index.html";i:1542954668;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/images/layui/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/images/layui/css/font_eolqem241z66flxr.css" media="all" />
    <link rel="stylesheet" href="/images/layui/css/main.css" media="all" />
</head>
<body class="main_body">
<div class="layui-layout layui-layout-admin">
    <!-- 顶部 -->
    <div class="layui-header header">
        <div class="layui-main">
            <a href="/" class="logo" target="_blank"><?php echo $setinfo['title']; ?></a>
            <!-- 顶部右侧菜单 -->
            <ul class="layui-nav top_menu">
                <li class="layui-nav-item" pc>
                    <a href="javascript:;">
                        <img src="<?php echo $userinfo['face']; ?>" class="layui-circle" width="35" height="35">
                        <cite><?php echo $userinfo['username']; ?></cite>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/user/info'); ?>"><i class="iconfont icon-zhanghu" data-icon="icon-zhanghu"></i><cite>个人资料</cite></a></dd>
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/user/repwd'); ?>"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>修改密码</cite></a></dd>
                        <dd><a href="<?php echo url('admin/index/logout'); ?>"><i class="iconfont icon-loginout"></i><cite>退出</cite></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <!-- 左侧导航 -->
    <div class="layui-side layui-bg-black">
        <div class="user-photo">
            <a class="img" title="我的头像" ><img src="<?php echo $userinfo['face']; ?>"></a>
            <p>你好！<span class="userName"><?php echo $userinfo['username']; ?></span></p>
        </div>
        <div class="navBar layui-side-scroll">


            <ul class="layui-nav layui-nav-tree">
                <li class="layui-nav-item"><a href="javascript:;" data-url="<?php echo url('admin/index/home'); ?>"><cite>后台首页</cite></a></li>

                <?php if(in_array((01), is_array($userinfo['role'])?$userinfo['role']:explode(',',$userinfo['role']))): ?>
                <li class="layui-nav-item" style=""><a href="javascript:;"><cite>文章管理</cite><span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/article/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>文章列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/article/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>文章添加</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/article/rep_index'); ?>"><i class="layui-icon" data-icon=""></i><cite>文章评论</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/article/sort_index'); ?>"><i class="layui-icon" data-icon=""></i><cite>文章分类</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/article/sort_add'); ?>"><i class="layui-icon" data-icon=""></i><cite>添加文章分类</cite></a>
                        </dd>
                    </dl></li>
                <?php endif; ?>

                <li class="layui-nav-item" style=""><a href="javascript:;"><cite>产品管理</cite><span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/tudi/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>土地管理</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/tudi/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>土地添加</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/fang/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>厂房管理</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/fang/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>厂房添加</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/lou/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>写字楼管理</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/lou/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>写字楼添加</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/zheng/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>特色小镇管理</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/zheng/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>特色小镇添加</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/mall/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>商业体管理</cite></a>
                            <a href="javascript:;" data-url="<?php echo url('admin/mall/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>商业体添加</cite></a>
                        </dd>
                    </dl></li>

                <?php if(in_array((03), is_array($userinfo['role'])?$userinfo['role']:explode(',',$userinfo['role']))): ?>
                <li class="layui-nav-item" style=""><a href="javascript:;"><cite>案例库</cite><span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/ce/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>案例列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/ce/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>添加案例</cite></a>
                        </dd>
                    </dl></li>
                <?php endif; if(in_array((04), is_array($userinfo['role'])?$userinfo['role']:explode(',',$userinfo['role']))): ?>
                <li class="layui-nav-item" style=""><a href="javascript:;"><cite>友情链接</cite><span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/link/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>友情链接列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/link/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>添加友情链接</cite></a>
                        </dd>
                    </dl></li>
                <?php endif; if(in_array((05), is_array($userinfo['role'])?$userinfo['role']:explode(',',$userinfo['role']))): ?>
                <li class="layui-nav-item" style=""><a href="javascript:;"><cite>广告管理</cite><span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/da/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>广告列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/da/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>广告添加</cite></a>
                        </dd>
                    </dl></li>
                <?php endif; if(in_array((99), is_array($userinfo['role'])?$userinfo['role']:explode(',',$userinfo['role']))): ?>
                <li class="layui-nav-item" style=""><a href="javascript:;"><cite>系统管理</cite><span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <?php if($userinfo['issup'] == '1'): ?>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/adminuser/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>管理员列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/adminuser/add'); ?>"><i class="layui-icon" data-icon=""></i><cite>管理员添加</cite></a>
                        </dd>
                        <?php endif; ?>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/member/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>会员列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/message/index'); ?>"><i class="layui-icon" data-icon=""></i><cite>留言列表</cite></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/sys/set'); ?>"><i class="layui-icon" data-icon=""></i><cite>网站设置</cite></a>
                        </dd>
                    </dl></li>
                <?php endif; ?>

                <span class="layui-nav-bar" style="top: 157.5px; height: 0px; opacity: 0;"></span>
            </ul>



        </div>
    </div>
    <!-- 右侧内容 -->
    <div class="layui-body layui-form">
        <div class="layui-tab marg0" lay-filter="bodyTab">
            <ul class="layui-tab-title top_tab">
                <li class="layui-this" lay-id=""><i class="iconfont icon-computer"></i> <cite>后台首页</cite></li>
            </ul>
            <div class="layui-tab-content clildFrame">
                <div class="layui-tab-item layui-show">
                    <iframe src="<?php echo url('admin/index/home'); ?>"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- 移动导航 -->
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>

<script type="text/javascript" src="/images/layui/layui/layui.js"></script>
<!-- <script type="text/javascript" src="/images/layui/js/nav.js"></script> -->
<script type="text/javascript" src="/images/layui/js/leftNav.js"></script>
<script type="text/javascript" src="/images/layui/js/index.js"></script>
</body>
</html>