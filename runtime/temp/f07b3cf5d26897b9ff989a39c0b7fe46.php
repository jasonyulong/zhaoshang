<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"/opt/web/zhaoshang/application/../public/tpl/admin/article/edit.html";i:1565773494;s:47:"/opt/web/zhaoshang/public/tpl/admin/layout.html";i:1547602823;}*/ ?>
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
<script type="text/javascript" src="/static/vali/dist/SMValidator.min.js"></script>
<script type="text/javascript" src="/static/vali/src/config.js"></script>
<script type="text/javascript" src="/static/wangeditor/release/wangEditor.min.js"></script>

</head>
<body class="childrenBody">

<form class="layui-form" method="post" id="form" enctype="multipart/form-data">
    <div class="layui-form-item">
        <label class="layui-form-label">文章标题</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" lay-verify="required" name="title" value="<?php echo $info['title']; ?>" placeholder="请输入文章标题">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">SEO关键词</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="seo_key" value="<?php echo $info['seo_key']; ?>" placeholder="SEO关键词">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">SEO描述</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="seo_des" value="<?php echo $info['seo_des']; ?>" placeholder="SEO描述">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">推荐</label>
        <div class="layui-input-block">
            <input type="radio" name="hot" value="0" title="否" <?php if($info['hot'] == '0'): ?>checked<?php endif; ?>>
            <input type="radio" name="hot" value="1" title="是" <?php if($info['hot'] == '1'): ?>checked<?php endif; ?>>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">省级</label>
        <div class="layui-input-block">
            <input type="radio" name="is_pro" value="0" title="否">
            <input type="radio" name="is_pro" value="1" title="是">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">市级</label>
        <div class="layui-input-block">
            <input type="radio" name="is_city" value="0" title="否">
            <input type="radio" name="is_city" value="1" title="是">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">图片</label>
        <div class="layui-input-block">
            <div class="layui-box layui-upload-button">
                <input type="file" name="picfile" class="layui-upload-file" lay-title="上传图片">
                <span class="layui-upload-icon"><i class="layui-icon">+</i>上传图片</span></div>
                <?php if($info['pic'] != ''): ?>
                <img src="<?php echo pic_suo($info['pic'],true); ?>">
                <?php endif; ?>
            <div class="layui-form-item">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文件</label>
        <div class="layui-input-block">
            <div class="layui-box layui-upload-button">
                <input type="file" name="file" class="layui-upload-file" lay-title="上传文件">
                <span class="layui-upload-icon"><i class="layui-icon">+</i>上传文件</span></div>
                <?php if($info['file'] != ''): ?>
                <a href="<?php echo $info['file']; ?>"><?php echo basename($info['file']); ?></a>
                <?php endif; ?>
            <div class="layui-form-item">
            </div>
        </div>
        <label class="layui-form-label">文章内容</label>
        <div class="layui-input-block">
            <div id="editor"><?php echo $info['content']; ?></div><input type="hidden" id="content" name="content">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">预算</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="p_yusuan" value="<?php echo $info['p_yusuan']; ?>" placeholder="万元">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">对接状态</label>
        <div class="layui-input-block">
            <input type="radio" name="p_type" value="已发布" title="已发布">
            <input type="radio" name="p_type" value="已确定" title="已确定">
            <input type="radio" name="p_type" value="已完成" title="已完成">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">片区</label>
        <div class="layui-input-block">
            <select id="p_area" name="p_area" class="isselect">
                <option value="">请选择</option>
                <?php if(is_array($dic['art_area']) || $dic['art_area'] instanceof \think\Collection || $dic['art_area'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['art_area'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">行业分类</label>
        <div class="layui-input-block">
            <select id="p_sort" name="p_sort" class="isselect">
                <option value="">请选择</option>
                <?php if(is_array($dic['art_hy']) || $dic['art_hy'] instanceof \think\Collection || $dic['art_hy'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['art_hy'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文章分类</label>
        <div class="layui-input-block">
            <select name="sort" id="sort" class="isselect">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo['id']; ?>">│<?php echo $vo['name']; ?></option>
                <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$z): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $z['id']; ?>">├──<?php echo $z['name']; ?></option>
                <?php if(is_array($z['sub']) || $z['sub'] instanceof \think\Collection || $z['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $z['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$y): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $y['id']; ?>">├────<?php echo $y['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">所属省</label>
        <div class="layui-input-block">
            <select name="pro" lay-ignore class="isselect" id="sheng">
                <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo['code']; ?>"><?php echo $vo['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">所属市</label>
        <div class="layui-input-block">
            <select name="city"  lay-ignore class="isselect" id="shi">
                <option value="">请选择</option>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" id="btn1" lay-filter="addNews">修改文章</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
</form>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

<script type="text/javascript" src="/images/layui/page/links/linksAdd.js"></script>

<script language="javascript">
    new SMValidator('form', {
        submit: function(valid, form) {
            if(valid) form.submit();
        },
        required: '不能为空',
        fields: {
            title: 'required|length(1,48)',
        }
    });
</script>
<script type="text/javascript" src="/static/wangeditor/release/wangEditor.min.js"></script>
<script type="text/javascript">
    document.getElementById('sort').value="<?php echo $info['sort']; ?>";
    document.getElementById('p_area').value="<?php echo $info['p_area']; ?>";
    document.getElementById('p_sort').value="<?php echo $info['p_sort']; ?>";

    var E = window.wangEditor;
    var editor = new E('#editor');
    editor.customConfig.uploadImgHeaders = {
        'Accept': 'text/x-json'
    }
    editor.customConfig.uploadImgServer = '<?php echo url("admin/article/upload"); ?>'
    editor.customConfig.uploadImgMaxSize = 2 * 1024 * 1024
    editor.customConfig.uploadImgMaxLength = 20
    editor.create()

    $("#btn1").click(function(){
        $("#content").val(editor.txt.html());
        $("#form").submit();
    });
</script>

<script>
    $(function () {
        /*alert($("#sheng").val())*/
        console.log()
        $("#sheng").on("change",function () {
            var $value = $(this).val();
            console.log($value)
            $.post("/admin/index/area/id/"+$value+".html",
                    function(data){
                        console.log( data);
                        $("#shi").empty()
                        data.forEach(function (item,value) {
                            $("#shi").prepend("<option value='"+item.code+"'>"+item.name+"</option>");
                        })
                    });
        })



        $("#sheng").val("<?php echo $info['pro']; ?>");
        $("#sheng").trigger("change");
        $("#shi").val("<?php echo $info['city']; ?>");

        $(":radio[name='is_pro'][value='<?php echo $info['is_pro']; ?>']").prop("checked", "checked");
        $(":radio[name='is_city'][value='<?php echo $info['is_city']; ?>']").prop("checked", "checked");
        $(":radio[name='p_type'][value='<?php echo $info['p_type']; ?>']").prop("checked", "checked");

    })

</script>


</body>
</html>