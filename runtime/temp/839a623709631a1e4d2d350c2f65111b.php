<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\www\zhaoshang\application\..\public\tpl\admin\lou\edit.html";i:1543388967;s:45:"D:\www\zhaoshang\public\tpl\admin\layout.html";i:1528875057;}*/ ?>
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
<script type="text/javascript" src="/images/zzz/js/lib/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/static/vali/dist/SMValidator.min.js"></script>
<script type="text/javascript" src="/static/vali/src/config.js"></script>
<script type="text/javascript" src="/static/wangeditor/release/wangEditor.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/css/fileinput.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
<script type="text/javascript" src="/static/vali/src/zh.js"></script>
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.10&key=578609e98b59a3e97345b5edaaa3861b&plugin=AMap.Geocoder"></script>
<style>

    html {
        font-size: 12px;
    }
    .amap-copyright{
        box-sizing: content-box
    }
    * {
        box-sizing: border-box
    }
    .input-textarea{
        color:grey;
        height:8em;
        overflow:auto;
        border-radius:0.4rem;
        border:1px solid #ced4da;
        margin-bottom:1rem;
    }
    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        line-height: 1.5;
        font-weight: 300;
        color: #111213;
    }

    hr {
        margin: 0.5rem 0;
        box-sizing: content-box;
        height: 0;
        overflow: visible;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    p {
        margin-top: 0;
        margin-bottom: 0;
    }

    label {
        display: inline-block;
        margin-bottom: 0.4rem;
    }

    label, .btn {
        margin-left: 0;
        font-size: 1rem;
    }

    button, input, select {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        overflow: visible;
        text-transform: none
    }

    [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type=checkbox], input[type=radio] {
        box-sizing: border-box;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0;
        margin: 0 0.5rem 0 0;
    }

    h4 {
        font-family: inherit;
        line-height: 1.8;
        font-weight: 300;
        color: inherit;
        font-size: 1.1rem;
        margin-top: 0;
        margin-bottom: .5rem
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        background-color: transparent;
        background-image: none;
        color: #25A5F7;
        border-color: #25A5F7;
        padding: .25rem .5rem;
        line-height: 1.5;
        border-radius: 1rem;
        -webkit-appearance: button;
        cursor:pointer;
    }

    .btn:hover {
        color: #fff;
        background-color: #25A5F7;
        border-color: #25A5F7
    }

    .btn:hover {
        text-decoration: none
    }

    .input-item {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        height: 3rem;
    }

    .input-item:last-child {
        margin-bottom: 0;
    }

    .input-item>select, .input-item>input[type=text], .input-item>input[type=date] {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0;
    }

    .input-item>select:not(:last-child), .input-item>input[type=text]:not(:last-child), .input-item>input[type=date]:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-item>select:not(:first-child), .input-item>input[type=text]:not(:first-child), .input-item>input[type=date]:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-item-prepend {
        margin-right: -1px;
    }

    .input-item-text, input[type=text],input[type=date], select {
        height: calc(2.2rem + 2px);
    }

    .input-item-text {
        width: 6rem;
        text-align: justify;
        padding: 0.4rem 0.7rem;
        display: inline-block;
        text-justify: distribute-all-lines;
        /*ie6-8*/
        text-align-last: justify;
        /* ie9*/
        -moz-text-align-last: justify;
        /*ff*/
        -webkit-text-align-last: justify;
        /*chrome 20+*/
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
    }

    .input-item-text input[type=checkbox], .input-item-text input[type=radio] {
        margin-top: 0
    }

    .input-card {
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border-radius: .25rem;
        width: 22rem;
        border-width: 0;
        border-radius: 0.4rem;
        box-shadow: 0 2px 6px 0 rgba(114, 124, 245, .5);
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 0.75rem 1.25rem;
    }

    .input-text {
        line-height: 2rem;
        margin-right: 2rem;
    }

    .info hr {
        margin-right: 0;
        margin-left: 0;
        border-top-color: grey;
    }

    .info {
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border-radius: .25rem;
        position: fixed;
        top: 1rem;
        background-color: white;
        width: auto;
        min-width: 22rem;
        border-width: 0;
        right: 1rem;
        box-shadow: 0 2px 6px 0 rgba(114, 124, 245, .5);
    }

    .code {
        left: 1.5rem;
        right: 1.5rem;
        top: 1.5rem;
        bottom: 1.5rem;
        overflow: auto;
        margin-bottom: 0rem;
    }

    .code .btn {
        top: 1rem;
        position: absolute;
        right: 1rem;
    }

    .code .result {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        padding: 1rem;
        bottom: 1rem;
        position: absolute;
        top: 5.5rem;
        right: 1rem;
        left: 1rem;
        overflow: auto;
    }

    .code .status {
        color: #80adff;
        display: inline-block;
        font-size: 14px;
    }

    .code h4 {
        display: inline-block;
        max-width: 20rem;
        margin-right: 1rem;
        margin-bottom: 1rem;
    }

    select, input[type=text], input[type=date] {
        display: inline-block;
        width: 100%;
        padding: .375rem 1.75rem .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
        background-size: 8px 10px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    input[type=text],input[type=date] {
        background: #fff;
        padding: .375rem .75rem;
    }

    select:focus, input[type=text]:focus, input[type=date]:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 .1rem rgba(128, 189, 255, .1)
    }

    .btn:focus {
        outline: 0;
        box-shadow: none;
    }

    select:focus::-ms-value, input[type=text]:focus::-ms-value,input[type=date]:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }


    /* native toastr */
    .native-toast {
        position: fixed;
        background-color: rgba(50, 50, 50, .8);
        border-radius: 33px;
        color: white;
        left: 50%;
        text-align: center;
        padding: 6px 12px;
        opacity: 0;
        z-index: 99999;
        transition: transform .25s, opacity .25s, top .25s;
        box-sizing: border-box;
    }

    .native-toast-bottom {
        bottom: 50px;
        -ms-transform: translateX(-50%) translateY(50px);
        transform: translateX(-50%) translateY(50px)
    }

    .native-toast-bottom.native-toast-shown {
        opacity: 1;
        -ms-transform: translateX(-50%) translateY(0);
        transform: translateX(-50%) translateY(0);
    }

    .native-toast-bottom.native-toast-edge {
        bottom: 0;
    }

    .native-toast-top {
        top: 50px;
        -ms-transform: translateX(-50%) translateY(-50px);
        transform: translateX(-50%) translateY(-50px)
    }

    .native-toast-top.native-toast-shown {
        opacity: 1;
        -ms-transform: translateX(-50%) translateY(0);
        transform: translateX(-50%) translateY(0);
    }

    .native-toast-top.native-toast-edge {
        top: 0;
    }

    .native-toast-center {
        top: 0;
        -ms-transform: translateX(-50%) translateY(-50px);
        transform: translateX(-50%) translateY(-50px)
    }

    .native-toast-center.native-toast-shown {
        opacity: 1;
        top: 50%;
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .native-toast-edge {
        border-radius: 0;
        width: 100%;
        text-align: left;
    }

    @media screen and (min-width: 40rem) {
        .native-toast:not(.native-toast-edge) {
            max-width: 18rem;
        }
    }

    /*
      max-width does not seem to work in small screen?
    */

    /*@media screen and (max-width: 768px) {
      .native-toast:not(.native-toast-edge) {
        max-width: 400px;
      }
    }

    @media screen and (max-width: 468px) {
      .native-toast:not(.native-toast-edge) {
        max-width: 300px;
      }
    }*/

    /* types */

    .native-toast-error {
        background-color: #d92727;
        color: white;
    }

    .native-toast-success {
        background-color: #62a465;
        color: white;
    }

    .native-toast-warning {
        background-color: #fdaf17;
        color: white;
    }

    .native-toast-info {
        background-color: #5060ba;
        color: white;
    }

    [class^="native-toast-icon-"] {
        vertical-align: middle;
        margin-right: 8px
    }

    [class^="native-toast-icon-"] svg {
        width: 16px;
        height: 16px;
    }
    #container{width: 800px;height: 500px;padding-left: 50px;margin: 0 auto}
</style>

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
        <label class="layui-form-label">项目坐标</label>
        <div class="layui-input-block">
            <input id='lnglat' type="text" name="map" value="<?php echo $info['mapx']; ?>,<?php echo $info['mapy']; ?>">
        </div>
    </div>
    <div id="container"></div>


    <div class="layui-form-item">
        <label class="layui-form-label">面积</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="area" placeholder="㎡" value="<?php echo $info['area']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">租金</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="zujing" placeholder="元" value="<?php echo $info['zujing']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">得房率</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="lx" placeholder="%" value="<?php echo $info['lx']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">物业费</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="wuye" placeholder="㎡" value="<?php echo $info['wuye']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">楼盘名称</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="panname" placeholder="楼盘名称" value="<?php echo $info['panname']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">地址</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input newsName" name="address" placeholder="地址" value="<?php echo $info['address']; ?>">
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

<script type="text/javascript">
    (function () {
        var map = new AMap.Map("container", {
            resizeEnable: true
        });

        var $ = function(elementId){
            return document.getElementById(elementId);
        };
        var lnglatInput = $('lnglat');
        var pixelInput = $('pixel');

        // 经纬度坐标转成容器像素坐标
        function lnglat2container() {
            if(!lnglatInput.value) return
            var inputVal = lnglatInput.value.split(',');
            var lnglat = new AMap.LngLat(inputVal[0], inputVal[1]);
            var pixel = map.lnglatTocontainer(lnglat);
            pixelInput.value = pixel.round();
        }

        // 容器像素坐标转成经纬度坐标
        function container2lnglat() {
            if(!pixelInput.value) return
            var inputVal = pixelInput.value.split(',');
            var pixel = new AMap.Pixel(inputVal[0],inputVal[1]);
            var lnglat = map.containerToLngLat(pixel);
            lnglatInput.value = lnglat;
        }

        map.on( 'click',  function (e) {
            lnglatInput.value = e.lnglat.toString();
        });
        lnglat2container();
        // 绑定点击事件
        document.getElementById("lnglat2container").onclick = lnglat2container;
        document.getElementById("container2lnglat").onclick = container2lnglat;
    })()

</script>

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
    })

</script>
<script type="text/javascript" src="/images/layui/page/links/linksAdd.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
<script type="text/javascript" src="/static/vali/src/zh.js"></script>
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