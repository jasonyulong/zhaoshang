<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\www\zhaoshang\application\..\public\tpl\admin\article\sort_index.html";i:1528875058;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
    
<script type="text/javascript" src="/images/jquery.min.js"></script>

</head>
<body class="childrenBody">

<div class="layui-form news_list">
    <table class="layui-table">
        <thead>
        <tr>
            <th width="20%">ID</th>
            <th width="50%">名称</th>
            <th>操作</th>
        </tr>
        </thead>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="center pic-area"><?php echo $vo['id']; ?></td>
            <td class="td-name"><img src="/images/folder-yellow-32.png"><?php echo $vo['name']; ?></td>
            <td>
                <a title="添加子类" href="<?php echo url('sort_add?pid='.$vo['id']); ?>" class="layui-btn layui-btn-mini news_edit">添加子类</a>
                <a href="<?php echo url('sort_edit?id='.$vo['id']); ?>" class="layui-btn layui-btn-mini news_edit"><i class="iconfont icon-edit"></i> 编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="8" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('sort_del?id='.$vo['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$z): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="center pic-area"><?php echo $z['id']; ?></td>
            <td class="td-name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/images/folder-yellow-32.png"><?php echo $z['name']; ?></td>
            <td>
                <a title="添加子类" href="<?php echo url('sort_add?pid='.$z['id']); ?>" class="layui-btn layui-btn-mini news_edit">添加子类</a>
                <a href="<?php echo url('sort_edit?id='.$z['id']); ?>" class="layui-btn layui-btn-mini news_edit"><i class="iconfont icon-edit"></i> 编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="8" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('sort_del?id='.$z['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php if(is_array($z['sub']) || $z['sub'] instanceof \think\Collection || $z['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $z['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$y): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="center pic-area"><?php echo $y['id']; ?></td>
            <td class="td-name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/images/folder-yellow-32.png"><?php echo $y['name']; ?></td>
            <td>
                <a title="添加子类" href="<?php echo url('sort_add?pid='.$y['id']); ?>" class="layui-btn layui-btn-mini news_edit">添加子类</a>
                <a href="<?php echo url('sort_edit?id='.$y['id']); ?>" class="layui-btn layui-btn-mini news_edit"><i class="iconfont icon-edit"></i> 编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="8" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('sort_del?id='.$y['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>



</body>
</html>