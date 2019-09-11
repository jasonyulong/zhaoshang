<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\www\zhaoshang\application\..\public\tpl\admin\index\home.html";i:1545099615;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/images/layui/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/images/layui/css/font_eolqem241z66flxr.css" media="all" />
    
<link rel="stylesheet" href="/images/layui/css/main.css" media="all" />

</head>
<body class="childrenBody">

<div class="row">
 <div class="sysNotice col">
  <blockquote class="layui-elem-quote title">最新文章</blockquote>
  <table class="layui-table" lay-skin="line">
   <colgroup>
    <col>
    <col width="110">
   </colgroup>
   <tbody class="hot_news">
   <?php if(is_array($artlist) || $artlist instanceof \think\Collection || $artlist instanceof \think\Paginator): $i = 0; $__LIST__ = $artlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
   <tr><td align="left"><a href="<?php echo url('index/article/info?id='.$vo['id']); ?>" target="_blank"><?php echo $vo['title']; ?></a></td></tr>
   <?php endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
  </table>
 </div>
 <div class="sysNotice col">
  <blockquote class="layui-elem-quote title">基本信息</blockquote>
  <table class="layui-table">
   <colgroup>
    <col width="150">
    <col>
   </colgroup>
   <tbody>

   <tr>
    <td>会员总数</td>
    <td class="author"><?php echo $member_all; ?></td>
   </tr>
   <tr>
    <td>文章总数</td>
    <td class="homePage"><?php echo $article_all; ?></td>
   </tr>
   <tr>
    <td>链接总数</td>
    <td class="dataBase"><?php echo $link_sum; ?></td>
   </tr>
   </tbody>
  </table>
  <blockquote class="layui-elem-quote title">热门<i class="iconfont icon-new1"></i></blockquote>
  <table class="layui-table" lay-skin="line">
   <colgroup>
    <col>
    <col width="110">
   </colgroup>
   <tbody class="hot_news">
   <?php if(is_array($hotlist) || $hotlist instanceof \think\Collection || $hotlist instanceof \think\Paginator): $i = 0; $__LIST__ = $hotlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
   <tr><td align="left"><a href="<?php echo url('index/zc/newsinfo?id='.$vo['id']); ?>" target="_blank"><?php echo $vo['title']; ?></a></td><td><?php echo date('Y-m-d',$vo['time']); ?></td></tr>
   <?php endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
  </table>
 </div>
</div>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script type="text/javascript" src="/images/layui/js/main.js"></script>

</body>
</html>