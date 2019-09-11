<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"/opt/web/zhaoshang/application/../public/tpl/admin/member/index.html";i:1528875062;s:47:"/opt/web/zhaoshang/public/tpl/admin/layout.html";i:1547602823;}*/ ?>
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
<link rel="stylesheet" href="/images/page_thinkphp.css">

</head>
<body class="childrenBody">

<div class="layui-inline">
    <div class="layui-input-inline">
        <h3>会员列表</h3>
    </div>
</div>
<blockquote class="layui-elem-quote news_search">
    <form method="get">
        <div class="layui-inline">
            <div class="layui-input-inline">
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="输入用户名" class="layui-input search_input">
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
            <th>会员账号</th>
            <th>状态</th>
            <th>手机号</th>
            <th>最后活动时间</th>
            <th>注册时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody class="links_content">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="center"><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['username']; ?></td>
            <td class="center"><?php if($vo['state'] == '1'): ?>正常<?php else: ?>禁用<?php endif; ?></td>
            <td class="center"><?php echo $vo['phone']; ?></td>
            <td class="center"><?php echo date('Y-m-d H:i',$vo['lasttime']); ?></td>
            <td class="center"><?php echo date('Y-m-d H:i',$vo['regtime']); ?></td>
            <td>
                <?php if($vo['state'] == '1'): ?>
                <a href="<?php echo url('state?id='.$vo['id'].'&state=no'); ?>" class="layui-btn layui-btn-mini news_edit"> 标记为禁用</a>
                <?php else: ?>
                <a href="<?php echo url('state?id='.$vo['id'].'&state=yes'); ?>" class="layui-btn layui-btn-mini news_edit"> 标记为正常</a>
                <?php endif; ?>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="8" href="javascript:if(confirm('确实要删除吗?'))location='<?php echo url('del?id='.$vo['id']); ?>'"><i class="layui-icon"></i> 删除</a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<?php echo $list->render(); ?>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '不能为空',
        fields: {
            isname: 'required|length(3,12)',
        }
    });
</script>

</body>
</html>