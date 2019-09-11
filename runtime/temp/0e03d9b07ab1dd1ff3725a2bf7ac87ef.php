<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:63:"D:\www\zhaoshang\application\..\public\tpl\index\fang\info.html";i:1543909352;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1543567337;s:36:"../public/tpl/index/include_nav.html";i:1545630620;s:31:"../public/tpl/index/zs_nav.html";i:1543566957;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    
<title><?php echo $info['title']; ?></title>
<link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
<script src="/images/zhaoshang/js/jquery.validate.min.js"></script>
<script src="/images/zhaoshang/js/validateAddMethods.js"></script>
<script src="/images/zhaoshang/js/jquery.messages_cn.js"></script>

</head>
<body>


        <a href="<?php echo url('index/zhaoshang/index'); ?>" id="shitizhaoshang"  >实体招商

        </a>
        <a href="<?php echo url('index/zht/index'); ?>" id="zhtzht">综合体</a>
        <a href="<?php echo url('index/dj/index'); ?>" id="djdj">项目对接</a>
        <!-- <a href="<?php echo url('index/chouhua/index'); ?>" id="chouhua">税务筹划</a> -->
        <a href="<?php echo url('index/xz/index'); ?>" id="xzxz">行政办公</a>
        <a href="<?php echo url('index/teshe/index'); ?>" id="tese">特色项目</a>
        <a href="<?php echo url('index/zc/index'); ?>" id="zczc">政策动态</a>
        <a href="<?php echo url('index/about/index'); ?>" id="about">关于我们</a>








    <?php echo url('user/index/index'); ?>

    <div><a href="<?php echo url('user/index/index'); ?>"></div>
    <a href="<?php echo url('user/index/index'); ?>" class="active">个人中心</a>
    <a href="<?php echo url('user/cang/index'); ?>">我的收藏</a>
    <a href="<?php echo url('user/index/index'); ?>">个人设置</a>
    <a href="<?php echo url('user/index/logout'); ?>">安全退出</a>


<?php echo url('index/zht/index'); ?>   综合体
<?php echo url('index/dj/index'); ?> 项目对接
<?php echo url('index/chouhua/index'); ?>  税务筹划
<?php echo url('index/xz/index'); ?>  行政办公
<?php echo url('index/teshe/index'); ?>  特色项目
<?php echo url('index/zc/index'); ?>  政策动态
<?php echo url('index/chouhua/sixin'); ?>  四新经济
<?php echo url('index/index/search'); ?>   搜索   title
<a href="<?php echo url('index/zhaoshang/index'); ?>">实体招商</a>
<a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" >土地</a>
<a href="<?php echo url('index/zhaoshang/fang_index'); ?>" >厂房</a>
<a href="<?php echo url('index/zhaoshang/lou_index'); ?>" >写字楼</a>
<a href="<?php echo url('index/hcy/index'); ?>">惠创优产业联盟</a>




<div class="biaoti">
    <article>专业&nbsp;&nbsp;&nbsp;&nbsp;精准&nbsp;&nbsp;&nbsp;&nbsp;高效<br/></article>
    <section>
        <article>PROFESSIONAL</article>
        <div>
            <p>Professional, accurate, efficient and continuous</p>
            <p>Professional people do professional things</p>
        </div>
    </section>
    <div style="width: 1200px;margin: 0 auto;position: relative;top:-125px "><a href="<?php echo url('index/zhaoshang/xuqiu',['type'=>'lou']); ?>" style="position: absolute;right: 0" class="btn btn-danger">免费发布资讯</a></div>
</div>


<div class="mainwrap">
    <div id="main">

        <div class="link">
            <a href="<?php echo url('index/zhaoshang/index'); ?>" id="zhaoshang_index" >首页</a>
<a href="<?php echo url('index/zhaoshang/news'); ?>" id="zhaoshang_news" >新闻中心</a>
<a href="<?php echo url('index/zhaoshang/fang_index'); ?>" id="zhaoshang_fang" >厂房租售</a>
<a href="<?php echo url('index/zhaoshang/tudi_index'); ?>" id="zhaoshang_tudi">土地租售</a>
<a href="<?php echo url('index/zhaoshang/lou_index'); ?>" id="zhaoshang_lou">写字楼出租</a>
<a href="<?php echo url('index/zhaoshang/friend'); ?>" id="zhaoshang_friend">合作名企</a>
        </div>
        <div id="tudi" class="mainbox-shadow">
            <div><img src="/images/zhaoshang/img/shitizhaoshang/27.jpg" width="510" height="340" alt=""></div>
            <div>
                <h1><?php echo $info['title']; ?></h1>
                <p>信息编号：<?php echo $info['id']; ?> 时间：<?php echo date('Y-m-d H:i:s',$info['time']); ?></p>
                <h2><strong><?php echo $info['area']; ?></strong>㎡</h2>
                <h3><?php echo $info['pro']; ?>-<?php echo $info['city']; ?></h3>
                <div><span class="key">类型: </span><span class="value"><?php echo $info['type']; ?></span><span class="key">结构：</span><span class="value"><?php echo $info['gou']; ?></span></div>
                <div><span class="key">办公面积：</span><span class="value"><?php echo $info['ji']; ?>㎡</span><span class="key">新旧程度：</span><span class="value"><?php echo $info['new']; ?>成</span></div>
                <div><span class="key">适用行业：</span><span class="value"><?php echo $info['hang']; ?></span><span class="key">地址：</span><span class="value"><?php echo $info['address']; ?></span></div>
            </div>
        </div>
        <a href="" id="guanggao"><img src="/images/zhaoshang/img/shitizhaoshang/104.jpg" alt=""></a>

        <div class="prolist">
            <div class="listleft">
                <div class="wrap mainbox-shadow">
                    <div class="ico-heng"><img src="/images/zhaoshang/img/shitizhaoshang/23.png" width="24" height="24" alt="">土地描述</div>
                    <div class="tit"><?php echo $info['des']; ?></div>
                </div>
                <div style="height: 20px"></div>
                <div class="wrap mainbox-shadow">
                    <div class="ico-heng"><img src="/images/zhaoshang/img/shitizhaoshang/23.png" width="24" height="24" alt="">土地相册</div>
                    <div class="tit">
                        <div class="imglist">
                            <?php if(is_array($piclist) || $piclist instanceof \think\Collection || $piclist instanceof \think\Paginator): $i = 0; $__LIST__ = $piclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <img src="<?php echo $vo['pic']; ?>" width="400" height="230">
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listright">
                <form class="weituo mainbox-shadow" id="weituo" method="post">
                    <?php if($islogin == 'yes'): ?>
                    <input type="hidden" name="member_id" value="<?php echo $memberinfo['id']; ?>">
                    <?php endif; ?>
                    <div class="form-group">
                        <textarea placeholder="输入您的需求" name="需求说明" required="true" maxlength="200"></textarea>
                    </div>
                    <div class="errormsg"></div>
                    <div class="form-group">
                        <div class="selectFater">
                            <div class="select" >
                                <select id="province" name="省" required="true">
                                </select>
                            </div>
                            <div class="select" >
                                <select id="city" name="市" required="true">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="errormsg"></div>

                    <div class="form-group">
                        <input type="text" placeholder="请输入您的称呼方式" name="姓名"  required="true" maxlength="20" />
                    </div>
                    <div class="errormsg"></div>
                    <div class="form-group">
                        <input type="text" placeholder="请输入您的联系方式" name="电话"  required="true" maxlength="20"/>
                    </div>
                    <div class="errormsg"></div>

                    <div class="form-group"><input type="submit" value="立即委托"></div>
                </form>
                <a href="" ><img src="/images/zhaoshang/img/shitizhaoshang/26.jpg" alt=""></a>
                <a href="" ><img src="/images/zhaoshang/img/shitizhaoshang/26.jpg" alt=""></a>
                <a href="" ><img src="/images/zhaoshang/img/shitizhaoshang/26.jpg" alt=""></a>
            </div>
        </div>
        <div id="tuijian" class="mainbox-shadow">
            <h2><img src="/images/zhaoshang/img/shitizhaoshang/25.png" alt="">看过该土地的用户还看过</h2>
            <div>
                <?php if(is_array($ran) || $ran instanceof \think\Collection || $ran instanceof \think\Paginator): $i = 0; $__LIST__ = $ran;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/Tudi/info',['id'=>$vo['id']]); ?>">
                    <img src="/images/zhaoshang/img/shitizhaoshang/34.jpg" alt="">
                    <h4><?php echo $vo['title']; ?></h4>
                    <p><span><strong><?php echo $vo['price']; ?></strong>元</span><span><?php echo $vo['pro']; ?>-<?php echo $vo['city']; ?></span></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <a href="">点击查看更多</a>
        </div>
    </div>
</div>

<footer class="panel-footer">
    <div class="footmain">
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/8.png"  alt=""></p>
            <h5>
                OVOC<br>
                互联网+无界招商平台
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/9.png"  alt=""></p>
            <h5>
                大数据<br>
                数百万条信息积累
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/10.png"  alt=""></p>
            <h5>
                360°<br>
                一站式解决方案
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/11.png"  alt=""></p>
            <h5>
                大平台<br>
                覆盖全国省市县
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/13.png"  alt=""></p>
            <h5>
                专业服务<br>
                全面服务让您入驻无忧
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/15.png"  alt=""></p>
            <h5>
                资源广<br>
                千家产业园组合联盟
            </h5>
        </div>
        <div class="footerpro">
            <p><img src="/images/zhaoshang/img/shitizhaoshang/14.png"  alt=""></p>
            <h5>
                落地重<br>
                促成多个上亿项目
            </h5>
        </div>
    </div>
</footer>
<div style="width: 100%;height: 1px;background-color: #80A8CB"></div>
<footer class="panel-footer" style="border: 0px">
    <div class="friend" >
        <a href="<?php echo url('index/about/index'); ?>">关于我们</a>
        <span ></span>
        <a href="<?php echo url('index/about/guimo'); ?>">集团规模</a>
        <span ></span>
        <a href="<?php echo url('index/about/wenhua'); ?>">企业文化</a>
        <span ></span>
        <a href="<?php echo url('index/about/link'); ?>">联系我们 </a>
        <span ></span>
        <a href="<?php echo url('index/about/yuangong'); ?>">员工风采</a>
    </div>
    <p>COPYRIGHT 9 2017 LEJU HOLDING LIMITED. All RIGHTS RESERVED<br>
        京ICP证080057号电信业务审批【2010】字第296号京公网安备11010102002148号增值电信业务经营许可证B2-20100312<br>
        武汉市中国产业园招商服务有限公司湖北省武汉市研口区南国大家装H18楼</p>
</footer>

<script>
    $("#searchform").submit(function (ev) {
        var $startnum= document.getElementById("startnum").value;
        var $endnum= document.getElementById("endnum").value;
        var reg=/^[0-9]+.?[0-9]*$/
        if($startnum==""||$endnum==""){
            alert("请输入搜索范围")
        }else if(!reg.test($startnum)||!reg.test($endnum)){
            alert("请输入数字")
        }else if(parseInt($startnum)>parseInt($endnum)){
            alert("请输入正确的搜索范围")
        }
    })
</script>
<script>

    (function () {
        function initcity(city) {
            switch (document.getElementById('province').value) {
                case "安徽":
                    var cityOptions = new Array("选择地区","null","合肥(*)","合肥","安庆","安庆","蚌埠","蚌埠","亳州","亳州","巢湖","巢湖","滁州","滁州","阜阳","阜阳","贵池","贵池","淮北","淮北","淮化","淮化","淮南","淮南","黄山","黄山","九华山","九华山","六安","六安","马鞍山","马鞍山","宿州","宿州","铜陵","铜陵","屯溪","屯溪","芜湖","芜湖","宣城","宣城");
                    break;
                case "北京":
                    var cityOptions = new Array("选择地区","null","东城","东城","西城","西城","崇文","崇文","宣武","宣武","朝阳","朝阳","丰台","丰台","石景山","石景山","海淀","海淀","门头沟","门头沟","房山","房山","通州","通州","顺义","顺义","昌平","昌平","大兴","大兴","平谷","平谷","怀柔","怀柔","密云","密云","延庆","延庆");
                    break;
                case "重庆":
                    var cityOptions = new Array("选择地区","null","万州","万州","涪陵","涪陵","渝中","渝中","大渡口","大渡口","江北","江北","沙坪坝","沙坪坝","九龙坡","九龙坡","南岸","南岸","北碚","北碚","万盛","万盛","双挢","双挢","渝北","渝北","巴南","巴南","黔江","黔江","长寿","长寿","綦江","綦江","潼南","潼南","铜梁","铜梁","大足","大足","荣昌","荣昌","壁山","壁山","梁平","梁平","城口","城口","丰都","丰都","垫江","垫江","武隆","武隆","忠县","忠县","开县","开县","云阳","云阳","奉节","奉节","巫山","巫山","巫溪","巫溪","石柱","石柱","秀山","秀山","酉阳","酉阳","彭水","彭水","江津","江津","合川","合川","永川","永川","南川","南川");
                    break;
                case "福建":
                    var cityOptions = new Array("选择地区","null","福州(*)","福州","福安","福安","龙岩","龙岩","南平","南平","宁德","宁德","莆田","莆田","泉州","泉州","三明","三明","邵武","邵武","石狮","石狮","永安","永安","武夷山","武夷山","厦门","厦门","漳州","漳州");
                    break;
                case "甘肃":
                    var cityOptions = new Array("选择地区","null","兰州(*)","兰州","白银","白银","定西","定西","敦煌","敦煌","甘南","甘南","金昌","金昌","酒泉","酒泉","临夏","临夏","平凉","平凉","天水","天水","武都","武都","武威","武威","西峰","西峰","张掖","张掖");
                    break;
                case "广东":
                    var cityOptions = new Array("选择地区","null","广州(*)","广州","潮阳","潮阳","潮州","潮州","澄海","澄海","东莞","东莞","佛山","佛山","河源","河源","惠州","惠州","江门","江门","揭阳","揭阳","开平","开平","茂名","茂名","梅州","梅州","清远","清远","汕头","汕头","汕尾","汕尾","韶关","韶关","深圳","深圳","顺德","顺德","阳江","阳江","英德","英德","云浮","云浮","增城","增城","湛江","湛江","肇庆","肇庆","中山","中山","珠海","珠海");
                    break;
                case "广西":
                    var cityOptions = new Array("选择地区","null","南宁(*)","南宁","百色","百色","北海","北海","桂林","桂林","防城港","防城港","河池","河池","贺州","贺州","柳州","柳州","钦州","钦州","梧州","梧州","玉林","玉林");
                    break;
                case "贵州":
                    var cityOptions = new Array("选择地区","null","贵阳(*)","贵阳","安顺","安顺","毕节","毕节","都匀","都匀","凯里","凯里","六盘水","六盘水","铜仁","铜仁","兴义","兴义","玉屏","玉屏","遵义","遵义");
                    break;
                case "海南":
                    var cityOptions = new Array("选择地区","null","海口(*)","海口","儋县","儋县","陵水","陵水","琼海","琼海","三亚","三亚","通什","通什","万宁","万宁");
                    break;
                case "河北":
                    var cityOptions = new Array("选择地区","null","石家庄(*)","石家庄","保定","保定","北戴河","北戴河","沧州","沧州","承德","承德","丰润","丰润","邯郸","邯郸","衡水","衡水","廊坊","廊坊","南戴河","南戴河","秦皇岛","秦皇岛","唐山","唐山","新城","新城","邢台","邢台","张家口","张家口");
                    break;
                case "黑龙江":
                    var cityOptions = new Array("选择地区","null","哈尔滨(*)","哈尔滨","北安","北安","大庆","大庆","大兴安岭","大兴安岭","鹤岗","鹤岗","黑河","黑河","佳木斯","佳木斯","鸡西","鸡西","牡丹江","牡丹江","齐齐哈尔","齐齐哈尔","七台河","七台河","双鸭山","双鸭山","绥化","绥化","伊春","伊春");
                    break;
                case "河南":
                    var cityOptions = new Array("选择地区","null","郑州(*)","郑州","安阳","安阳","鹤壁","鹤壁","潢川","潢川","焦作","焦作","济源","济源","开封","开封","漯河","漯河","洛阳","洛阳","南阳","南阳","平顶山","平顶山","濮阳","濮阳","三门峡","三门峡","商丘","商丘","新乡","新乡","信阳","信阳","许昌","许昌","周口","周口","驻马店","驻马店");
                    break;
                case "香港":
                    var cityOptions = new Array("选择地区","null","香港","香港","九龙","九龙","新界","新界");
                    break;
                case "湖北":
                    var cityOptions = new Array("选择地区","null","武汉(*)","武汉","恩施","恩施","鄂州","鄂州","黄冈","黄冈","黄石","黄石","荆门","荆门","荆州","荆州","潜江","潜江","十堰","十堰","随州","随州","武穴","武穴","仙桃","仙桃","咸宁","咸宁","襄阳","襄阳","襄樊","襄樊","孝感","孝感","宜昌","宜昌");
                    break;
                case "湖南":
                    var cityOptions = new Array("选择地区","null","长沙(*)","长沙","常德","常德","郴州","郴州","衡阳","衡阳","怀化","怀化","吉首","吉首","娄底","娄底","邵阳","邵阳","湘潭","湘潭","益阳","益阳","岳阳","岳阳","永州","永州","张家界","张家界","株洲","株洲");
                    break;
                case "江苏":
                    var cityOptions = new Array("选择地区","null","南京(*)","南京","常熟","常熟","常州","常州","海门","海门","淮安","淮安","江都","江都","江阴","江阴","昆山","昆山","连云港","连云港","南通","南通","启东","启东","沭阳","沭阳","宿迁","宿迁","苏州","苏州","太仓","太仓","泰州","泰州","同里","同里","无锡","无锡","徐州","徐州","盐城","盐城","扬州","扬州","宜兴","宜兴","仪征","仪征","张家港","张家港","镇江","镇江","周庄","周庄");
                    break;
                case "江西":
                    var cityOptions = new Array("选择地区","null","南昌(*)","南昌","抚州","抚州","赣州","赣州","吉安","吉安","景德镇","景德镇","井冈山","井冈山","九江","九江","庐山","庐山","萍乡","萍乡","上饶","上饶","新余","新余","宜春","宜春","鹰潭","鹰潭");
                    break;
                case "吉林":
                    var cityOptions = new Array("选择地区","null","长春(*)","长春","白城","白城","白山","白山","珲春","珲春","辽源","辽源","梅河","梅河","吉林","吉林","四平","四平","松原","松原","通化","通化","延吉","延吉");
                    break;
                case "辽宁":
                    var cityOptions = new Array("选择地区","null","沈阳(*)","沈阳","鞍山","鞍山","本溪","本溪","朝阳","朝阳","大连","大连","丹东","丹东","抚顺","抚顺","阜新","阜新","葫芦岛","葫芦岛","锦州","锦州","辽阳","辽阳","盘锦","盘锦","铁岭","铁岭","营口","营口");
                    break;
                case "澳门":
                    var cityOptions = new Array("选择地区","null","澳门","澳门");
                    break;
                case "内蒙古":
                    var cityOptions = new Array("选择地区","null","呼和浩特(*)","呼和浩特","阿拉善盟","阿拉善盟","包头","包头","赤峰","赤峰","东胜","东胜","海拉尔","海拉尔","集宁","集宁","临河","临河","通辽","通辽","乌海","乌海","乌兰浩特","乌兰浩特","锡林浩特","锡林浩特");
                    break;
                case "宁夏":
                    var cityOptions = new Array("选择地区","null","银川(*)","银川","固源","固源","石嘴山","石嘴山","吴忠","吴忠");
                    break;
                case "青海":
                    var cityOptions = new Array("选择地区","null","西宁(*)","西宁","德令哈","德令哈","格尔木","格尔木","共和","共和","海东","海东","海晏","海晏","玛沁","玛沁","同仁","同仁","玉树","玉树");
                    break;
                case "山东":
                    var cityOptions = new Array("选择地区","null","济南(*)","济南","滨州","滨州","兖州","兖州","德州","德州","东营","东营","菏泽","菏泽","济宁","济宁","莱芜","莱芜","聊城","聊城","临沂","临沂","蓬莱","蓬莱","青岛","青岛","曲阜","曲阜","日照","日照","泰安","泰安","潍坊","潍坊","威海","威海","烟台","烟台","枣庄","枣庄","淄博","淄博");
                    break;
                case "上海":
                    var cityOptions = new Array("选择地区","null","崇明","崇明","黄浦","黄浦","卢湾","卢湾","徐汇","徐汇","长宁","长宁","静安","静安","普陀","普陀","闸北","闸北","虹口","虹口","杨浦","杨浦","闵行","闵行","宝山","宝山","嘉定","嘉定","浦东","浦东","金山","金山","松江","松江","青浦","青浦","南汇","南汇","奉贤","奉贤");
                    break;
                case "山西":
                    var cityOptions = new Array("选择地区","null","太原(*)","太原","长治","长治","大同","大同","候马","候马","晋城","晋城","离石","离石","临汾","临汾","宁武","宁武","朔州","朔州","忻州","忻州","阳泉","阳泉","榆次","榆次","运城","运城");
                    break;
                case "陕西":
                    var cityOptions = new Array("选择地区","null","西安(*)","西安","安康","安康","宝鸡","宝鸡","汉中","汉中","渭南","渭南","商州","商州","绥德","绥德","铜川","铜川","咸阳","咸阳","延安","延安","榆林","榆林");
                    break;
                case "四川":
                    var cityOptions = new Array("选择地区","null","成都(*)","成都","巴中","巴中","达川","达川","德阳","德阳","都江堰","都江堰","峨眉山","峨眉山","涪陵","涪陵","广安","广安","广元","广元","九寨沟","九寨沟","康定","康定","乐山","乐山","泸州","泸州","马尔康","马尔康","绵阳","绵阳","眉山","眉山","南充","南充","内江","内江","攀枝花","攀枝花","遂宁","遂宁","汶川","汶川","西昌","西昌","雅安","雅安","宜宾","宜宾","自贡","自贡","资阳","资阳");
                    break;
                case "台湾":
                    var cityOptions = new Array("选择地区","null","台北(*)","台北","基隆","基隆","台南","台南","台中","台中","高雄","高雄","屏东","屏东","南投","南投","云林","云林","新竹","新竹","彰化","彰化","苗栗","苗栗","嘉义","嘉义","花莲","花莲","桃园","桃园","宜兰","宜兰","台东","台东","金门","金门","马祖","马祖","澎湖","澎湖");
                    break;
                case "天津":
                    var cityOptions = new Array("选择地区","null","天津","天津","和平","和平","东丽","东丽","河东","河东","西青","西青","河西","河西","津南","津南","南开","南开","北辰","北辰","河北","河北","武清","武清","红挢","红挢","塘沽","塘沽","汉沽","汉沽","大港","大港","宁河","宁河","静海","静海","宝坻","宝坻","蓟县","蓟县");
                    break;
                case "新疆":
                    var cityOptions = new Array("选择地区","null","乌鲁木齐(*)","乌鲁木齐","阿克苏","阿克苏","阿勒泰","阿勒泰","阿图什","阿图什","博乐","博乐","昌吉","昌吉","东山","东山","哈密","哈密","和田","和田","喀什","喀什","克拉玛依","克拉玛依","库车","库车","库尔勒","库尔勒","奎屯","奎屯","石河子","石河子","塔城","塔城","吐鲁番","吐鲁番","伊宁","伊宁");
                    break;
                case "西藏":
                    var cityOptions = new Array("选择地区","null","拉萨(*)","拉萨","阿里","阿里","昌都","昌都","林芝","林芝","那曲","那曲","日喀则","日喀则","山南","山南");
                    break;
                case "云南":
                    var cityOptions = new Array("选择地区","null","昆明(*)","昆明","大理","大理","保山","保山","楚雄","楚雄","大理","大理","东川","东川","个旧","个旧","景洪","景洪","开远","开远","临沧","临沧","丽江","丽江","六库","六库","潞西","潞西","曲靖","曲靖","思茅","思茅","文山","文山","西双版纳","西双版纳","玉溪","玉溪","中甸","中甸","昭通","昭通");
                    break;
                case "浙江":
                    var cityOptions = new Array("选择地区","null","杭州(*)","杭州","安吉","安吉","慈溪","慈溪","定海","定海","奉化","奉化","海盐","海盐","黄岩","黄岩","湖州","湖州","嘉兴","嘉兴","金华","金华","临安","临安","临海","临海","丽水","丽水","宁波","宁波","瓯海","瓯海","平湖","平湖","千岛湖","千岛湖","衢州","衢州","江山","江山","瑞安","瑞安","绍兴","绍兴","嵊州","嵊州","台州","台州","温岭","温岭","温州","温州","余姚","余姚","舟山","舟山");
                    break;
                case "海外":
                    var cityOptions = new Array("选择地区","null","欧洲","欧洲","北美","北美","南美","南美","亚洲","亚洲","非洲","非洲","大洋洲","大洋洲");
                    break;
                default:
                    var cityOptions = new Array("选择地区","null");
                    break;
            }

            document.getElementById('city').options.length = 0;
            for (var i = 0; i < cityOptions.length / 2; i++) {
                document.getElementById('city').options[i] = new Option(cityOptions[i * 2],cityOptions[i * 2 + 1]);
                if (document.getElementById('city').options[i].value == city) {
                    document.getElementById('city').selectedIndex = i;
                }
            }
        }
        function creatprovince(province) {
            var provinces = new Array("北京","上海","重庆","安徽","福建","甘肃","广东","广西","贵州","海南","河北","黑龙江","河南","香港","湖北","湖南","江苏","江西","吉林","辽宁","澳门","内蒙古","宁夏","青海","山东","山西","陕西","四川","台湾","天津","新疆","西藏","云南","浙江","海外");
            document.getElementById('province').options[0] = new Option("选择省份","");
            for (var i = 0; i < provinces.length; i++) {
                document.getElementById('province').options[i + 1] = new Option(provinces[i],provinces[i]);
                if (document.getElementById('province').options[i + 1].value == province) {
                    document.getElementById('province').selectedIndex = i + 1;
                }
            }

        }
        window.onload = function() {
            creatprovince();
            document.getElementById('city').options[0] = new Option('选择城市',"")
        }
        /*        document.getElementById('province').addEventListener("change", initcity, false);*/
        $('#province').on('change',initcity);
        /*   document.getElementById('province0').addEventListener("change", initcityFun, false);*/

    })($)
</script>
<script>

    $(document).ready(function () {

        $("#weituo").validate({
            errorPlacement:function(error,element){
                $(element).closest(".form-group").next(".errormsg").append(error)
            },

        })
    })
</script>
<script language="javascript">
    $("#shitizhaoshang").addClass("active");
    $("#zhaoshang_fang").addClass("active");
</script>

</body>
</html>