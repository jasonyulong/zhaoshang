<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\www\zhaoshang\application\..\public\tpl\admin\fang\edit.html";i:1543387785;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
        <label class="layui-form-label">图集</label>
        <div class="layui-input-block">
            <div class="file-loading">
                <input type="file" id="input-dim-1" name="input-dim-1 []" accept="image/*" multiple>
            </div>
        </div>
    </div>
    <input type="hidden" name="picsid" value="<?php echo $picsid; ?>">



    <div class="layui-form-item">
        <label class="layui-form-label">意向</label>
        <div class="layui-input-block">
            <select name="yixiang" id="yixiang" class="isselect" lay-ignore>
                <?php if(is_array($dic['duti_yixiang']) || $dic['duti_yixiang'] instanceof \think\Collection || $dic['duti_yixiang'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['duti_yixiang'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">类型</label>
        <div class="layui-input-block">
            <select name="type" id="type" class="isselect" lay-ignore>
                <?php if(is_array($dic['fang_type']) || $dic['fang_type'] instanceof \think\Collection || $dic['fang_type'] instanceof \think\Paginator): $i = 0; $__LIST__ = $dic['fang_type'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">面积</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="area" placeholder="㎡" value="<?php echo $info['area']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">单价</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="price" placeholder="元" value="<?php echo $info['price']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">结构</label>
        <div class="layui-input-block">
            <input type="radio" name="gou" id="gou" value="标准厂房" title="标准厂房">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">办公面积</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="ji" placeholder="按需分配" value="<?php echo $info['ji']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">新旧程度</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="new" placeholder="1-9" value="<?php echo $info['new']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">宿舍面积</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="shu" placeholder="按需分配" value="<?php echo $info['shu']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">适用行业</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="hang" placeholder="" value="<?php echo $info['hang']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">地址</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="address" placeholder="" value="<?php echo $info['address']; ?>">
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

        $("#yixiang").val("<?php echo $info['yixiang']; ?>");
        $("#type").val("<?php echo $info['type']; ?>");
        $(":radio[name='gou'][value='<?php echo $info['gou']; ?>']").prop("checked", "checked");

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