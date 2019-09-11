<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\www\zhaoshang\application\..\public\tpl\admin\article\rep_index.html";i:1528875058;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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

<blockquote class="layui-elem-quote news_search">
    <form method="get">
        <div class="layui-inline">
            <div class="layui-input-inline">
                <input type="text" name="title" value="<?php echo $title; ?>" placeholder="输入文章标题" class="layui-input search_input">
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
            <th width="5%">ID</th>
            <th width="10%">评论人</th>
            <th width="20%">文章</th>
            <th>评论内容</th>
            <th width="12%">时间</th>
            <th width="12%">操作</th>
        </tr>
        </thead>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="center pic-area"><?php echo $vo['id']; ?></td>
            <td class="td-name"><?php echo $vo['member']['username']; ?></td>
            <td class="td-name"><a href="<?php echo url('index/article/info',['id'=>$vo['article']['id']]); ?>" target="_blank"><?php echo $vo['article']['title']; ?></a></td>
            <td class="td-name"><?php echo $vo['content']; ?></td>
            <td class="center"><?php echo date('Y-m-d H:i:s',$vo['time']); ?></td>
            <td>
                <?php if($vo['view'] == '0'): ?><a href="<?php echo url('rep_view?id='.$vo['id']); ?>" class="layui-btn layui-btn-mini news_edit">显示</a><?php endif; ?>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="8" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('rep_del?id='.$vo['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>



</body>
</html>