<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\www\zhaoshang\application\..\public\tpl\admin\link\index.html";i:1528875060;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
            <th>链接名称</th>
            <th>链接地址</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody class="links_content">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['url']; ?></td>
            <td>
                <a href="<?php echo url('edit?id='.$vo['id']); ?>" class="layui-btn layui-btn-mini news_edit"><i class="iconfont icon-edit"></i> 编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="8" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('del?id='.$vo['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>



</body>
</html>