<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\www\zhaoshang\application\..\public\tpl\admin\article\index.html";i:1543561358;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
    
<link rel="stylesheet" href="/images/layui/css/news.css" media="all" />
<link rel="stylesheet" href="/images/layui/css/bootstrap.css">

<script type="text/javascript" src="/images/jquery.min.js"></script>
<script type="text/javascript" src="/static/vali/dist/SMValidator.min.js"></script>
<script type="text/javascript" src="/static/vali/src/config.js"></script>

</head>
<body class="childrenBody">

<div class="layui-inline">
    <div class="layui-input-inline">
        <h3>文章列表</h3>
    </div>
</div>
<blockquote class="layui-elem-quote news_search">
    <form method="get">
    <div class="layui-inline">
        <div class="layui-input-inline">
            <input type="text" name="title" value="<?php echo $title; ?>" placeholder="输入文章名称" class="layui-input search_input">
        </div>
        <div class="layui-input-inline">
            <input type="text" name="id" value="<?php echo $id; ?>" placeholder="输入文章ID" class="layui-input search_input">
        </div>
        <input type="submit" class="layui-btn search_btn" value="查询">
    </div>
    </form>
</blockquote>
<div class="layui-form news_list">
    <table class="layui-table">
        <thead>
        <tr>
            <th>ID</th>
            <th width="30%">标题</th>
            <th>查看</th>
            <th>分类</th>
            <th>发布时间</th>
            <th width="15%">操作</th>
        </tr>
        </thead>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="center"><?php echo $vo['id']; ?></td>
            <td class="center"><a href="<?php echo url('index/zc/newsinfo?id='.$vo['id']); ?>" target="_blank"><?php echo $vo['title']; ?></a></td>
            <td class="center"><?php echo $vo['look']; ?></td>
            <td class="center"><?php echo $vo['sortname']; ?></td>
            <td class="center"><?php echo date('Y-m-d H:i:s',$vo['time']); ?></td>
            <td>
                <a href="<?php echo url('edit?id='.$vo['id']); ?>" class="layui-btn layui-btn-mini news_edit"><i class="iconfont icon-edit"></i> 编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('del?id='.$vo['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
<?php echo $list->render(); ?>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '请输入内容',
    });
</script>

</body>
</html>