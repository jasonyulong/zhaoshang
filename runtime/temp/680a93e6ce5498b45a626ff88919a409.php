<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\www\zhaoshang\application\..\public\tpl\admin\tudi\edit.html";i:1545709569;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
    
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/css/fileinput.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
<script type="text/javascript" src="/static/vali/dist/SMValidator.min.js"></script>
<script type="text/javascript" src="/static/vali/src/config.js"></script>
<script type="text/javascript" src="/static/wangeditor/release/wangEditor.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/js/locales/zh.min.js"></script>

</head>
<body class="childrenBody">

<form class="layui-form" method="post" enctype="multipart/form-data" id="form" >
    <div class="layui-form-item">
        <label class="layui-form-label">名称</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="title" placeholder="名称" value="<?php echo $info['title']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">联系人</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="name" placeholder="联系人" value="<?php echo $info['name']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">电话</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="tel" placeholder="电话" value="<?php echo $info['tel']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">图片</label>
        <div class="layui-input-block">
            <div class="layui-box layui-upload-button">
                <input type="file" name="pic" class="layui-upload-file" lay-title="上传图片">
                <span class="layui-upload-icon"><i class="layui-icon">+</i>上传图片</span></div>
            <?php if($info['pic'] != ''): ?><img src="<?php echo $info['pic']; ?>" width="200" height="200"><?php endif; ?>
            <div class="layui-form-item">
            </div>
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
        <label class="layui-form-label">方式</label>
        <div class="layui-input-block">
            <input type="radio" name="uptype" value="出租" title="出租">
            <input type="radio" name="uptype" value="出售" title="出售">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">附加属性</label>
        <div class="layui-input-block">
            <?php if(is_array($dic['duti_liang']) || $dic['duti_liang'] instanceof \think\Collection || $dic['duti_liang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['duti_liang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <input type="checkbox" name="liang[]" value="<?php echo $vo; ?>" title="<?php echo $vo; ?>">
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">图集</label>
        <div class="layui-input-block">
            <div class="file-loading">
                <input type="file" id="input-dim-1" name="input-dim-1 []" accept="image/*" multiple>
            </div>
        </div>
    </div>
    <input type="hidden" name="picsid" value="<?php echo $picsid; ?>">



    <div class="layui-form-item">
        <label class="layui-form-label">土地租金</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="zujing" placeholder="元" value="<?php echo $info['zujing']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">面积</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="area" placeholder="亩" value="<?php echo $info['area']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">使用年限</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="year" placeholder="年" value="<?php echo $info['year']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">行业</label>
        <div class="layui-input-block">
            <select name="hangye" id="hangye" class="isselect" lay-ignore>
                <?php if(is_array($dic['duti_hangye']) || $dic['duti_hangye'] instanceof \think\Collection || $dic['duti_hangye'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['duti_hangye'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">土地性质</label>
        <div class="layui-input-block">
            <input type="radio" name="xingzhi" value="0" title="集体">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">土地证</label>
        <div class="layui-input-block">
            <input type="radio" name="zheng" value="0" title="无">
            <input type="radio" name="zheng" value="1" title="有">
        </div>
    </div>



    <div class="layui-form-item">
        <label class="layui-form-label">介绍</label>
        <div class="layui-input-block">
            <div id="editor"><?php echo $info['des']; ?></div><input type="hidden" id="content" name="des">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" id="btn1">修改</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
</form>


<script type="text/javascript" src="/images/layui/layui/layui.js"></script>

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
<script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    editor.customConfig.uploadImgServer = '<?php echo url("admin/index/upload"); ?>'
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

        $("#hangye").val("<?php echo $info['hangye']; ?>");
        $(":radio[name='xingzhi'][value='<?php echo $info['xingzhi']; ?>']").prop("checked", "checked");
        $(":radio[name='zheng'][value='<?php echo $info['zheng']; ?>']").prop("checked", "checked");
        $(":radio[name='uptype'][value='<?php echo $info['uptype']; ?>']").prop("checked", "checked");

        <?php if(is_array($info['liang']) || $info['liang'] instanceof \think\Collection || $info['liang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['liang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        $("input[name='liang[]'][value='<?php echo $vo; ?>']").attr("checked", true);
        <?php endforeach; endif; else: echo "" ;endif; ?>

    })

</script>
<script type="text/javascript" src="/images/layui/page/links/linksAdd.js"></script>
<script>
    $(document).ready(function () {
        $("#input-dim-1").fileinput({

            language:"zh",
            'uploadUrl': '/admin/index/picup/picsid/<?php echo $picsid; ?>.html',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                <?php if(is_array($piclist) || $piclist instanceof \think\Collection || $piclist instanceof \think\Paginator): $i = 0; $__LIST__ = $piclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                "<?php echo $vo['pic']; ?>",
                <?php endforeach; endif; else: echo "" ;endif; ?>
            ],
            initialPreviewConfig: [
                <?php if(is_array($piclist) || $piclist instanceof \think\Collection || $piclist instanceof \think\Paginator): $k = 0; $__LIST__ = $piclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                {caption: "nature-1.jpg",  width: "120px", url: "/admin/index/picdel/id/<?php echo $vo['id']; ?>.html", key: <?php echo $k; ?>},
                <?php endforeach; endif; else: echo "" ;endif; ?>
            ]

         })
    })

</script>

</body>
</html>