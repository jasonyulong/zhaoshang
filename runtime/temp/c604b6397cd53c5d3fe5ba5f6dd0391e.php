<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\www\zhaoshang\application\..\public\tpl\admin\index\area.html";i:1541407657;}*/ ?>
<select id="province" name="province"></select>
<select id="city" name="city"></select>



<script language="javascript">
    function loadPro() {
        $.ajax({
            url: "<?php echo url('admin/index/area_pro); ?>",
            dataType: "binary",
            type: 'POST',
            dataType: 'JSON',
            timeout: 5000,
            error: function(XMLHttpRequest, textStatus, errorThrown) {alert(XMLHttpRequest.status);alert(XMLHttpRequest.readyState);alert(textStatus);},
            success: function(msg) {
                $("#province").empty();
                $.each(eval(msg), function(i, item) {
                    $("<option value='" + item.provinceid + "'>" + item.province + "</option>").appendTo($("#province"));
                });
                //原有值
                $("#province option[value='<?php echo($row['pro_id']); ?>']").attr("selected","selected");
                //下级
                loadCity($("#province").val());
            }
        });
    }

    function loadCity(parentid) {
        $.ajax({
            url: 'mode_jd_list.php?action=c&id='+ parentid,
            dataType: "binary",
            type: 'POST',
            dataType: 'JSON',
            timeout: 5000,
            error: function(XMLHttpRequest, textStatus, errorThrown) {alert(XMLHttpRequest.status);alert(XMLHttpRequest.readyState);alert(textStatus);},
            success: function(msg) {
                $("#city").empty();
                $.each(eval(msg), function(i, item) {
                    $("<option value='" + item.cityid + "'>" + item.city + "</option>").appendTo($("#city"));
                });
                //原有值
                $("#city option[value='<?php echo($row['city_id']); ?>']").attr("selected","selected");
                //下级
                loadArea($("#city").val());
            }
        });
    }

    $("#province").change(function() {
        loadCity($("#province").val());
    });

    $("#city").change(function() {
        loadArea($("#city").val());
    });

    loadPro();
</script>