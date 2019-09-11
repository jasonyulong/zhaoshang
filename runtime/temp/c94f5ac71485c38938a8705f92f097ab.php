<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:62:"D:\www\zhaoshang\application\..\public\tpl\index\lou\info.html";i:1544144602;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1543567337;s:36:"../public/tpl/index/include_nav.html";i:1545630620;s:31:"../public/tpl/index/zs_nav.html";i:1543566957;s:31:"../public/tpl/index/footer.html";i:1543566954;}*/ ?>
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

<style>
    div.info-top {
        position: relative;
        background: none repeat scroll 0 0 #F9F9F9;
        border-bottom: 1px solid #CCC;
        border-radius: 5px 5px 0 0;
    }

    div.info-top img {
        position: absolute;
        top: 10px;
        right: 10px;
        transition-duration: 0.25s;
    }

    div.info-top img:hover {
        box-shadow: 0px 0px 5px #000;
    }

    div.info-middle {
        font-size: 16px;
        padding: 5px 10px;
        color: white;
        line-height: 20px;
    }

    div.info-bottom {
        height: 0px;
        width: 100%;
        clear: both;
        text-align: center;
    }

    div.info-bottom img {
        position: relative;
        z-index: 104;
    }
    span {
        margin-left: 5px;
        font-size: 11px;
    }

    .info-middle img {
        float: left;
        margin-right: 6px;
    }
    #ditie,#yinhang,#canyin,#gongyan{display: flex;align-items: center;background-color: #555962;margin-bottom: 10px;cursor: pointer}
    #ditie.active>img{background-color: #01AF9B}
    #canyin.active>img{background-color: #E04D6F}
    #yinhang.active>img{background-color: #D2B84D}
    #gongyan.active>img{background-color: #4DCA7F}
    #ditie>img,#yinhang>img,#canyin>img,#gongyan>img{padding:  5px}
    #ditie>span,#yinhang>span,#canyin>span,#gongyan>span{padding: 5px 10px;background-color: #5D6370;;display: block;margin-left: 0px;color: white}
</style>

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

        <div class="prolist">
            <div class="listleft">
                <div id="mainCF" class="mainbox-shadow">
                    <section>
                        <h1><?php echo $info['title']; ?></h1>
                        <h2><strong>租金 </strong><span><?php if($info['zujing'] == '0'): ?>面议<?php else: ?><?php echo $info['zujing']; ?>元<?php endif; ?></span></h2>
                        <img src="<?php echo $info['pic']; ?>" width="855" height="428" alt="">
                        <div class="flex">
                            <span class="key">地区</span><span class="value"><?php echo $info['zujing']; ?>元</span>
                            <span class="key">面积</span><span class="value"><?php echo $info['area']; ?>㎡</span>
                            <span class="key">物业费</span><span class="value"><?php echo $info['wuye']; ?>元</span>
                            <span class="key">得房率</span><span class="value"><?php echo $info['lx']; ?></span>
                            <span class="key">楼盘名称</span><span class="value"><?php echo $info['panname']; ?></span>
                            <span class="key">地址</span><span class="value"><?php echo $info['address']; ?></span>
                        </div>

                    </section>
                    <div class="wrap mainbox-shadow">
                        <div class="ico-heng"><img src="/images/zhaoshang/img/shitizhaoshang/23.png" width="24" height="24" alt="">写字楼描述</div>
                        <div class="tit"><?php echo $info['des']; ?></div>
                    </div>
                    <div class="wrap mainbox-shadow">
                        <div class="ico-heng"><img src="/images/zhaoshang/img/shitizhaoshang/27.png" width="24" height="24" alt="">写字楼相册</div>
                        <div class="tit">
                            <div class="imglist">
                                <?php if(is_array($piclist) || $piclist instanceof \think\Collection || $piclist instanceof \think\Paginator): $i = 0; $__LIST__ = $piclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <img src="<?php echo $vo['pic']; ?>" width="400" height="230">
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mainbox-shadow">
                        <div class="ico-heng"><img src="/images/zhaoshang/img/shitizhaoshang/26.png" width="24" height="24" alt="">写字楼配套</div>
                        <div class="map" id="map" style="position:relative">
                            <div style="position:absolute;right: 0px;top: 100px;z-index: 100">
                                <div id="ditie" class="active" onclick="searchComplete('地铁')"><img src="/images/zhaoshang/img/ditie.png" alt=""><span >地铁 </span></div>
                                <div id="yinhang" onclick="searchComplete('银行')"><img src="/images/zhaoshang/img/yinhang.png" alt=""><span >银行</span></div>
                                <div id="canyin" onclick="searchComplete('餐饮')"><img src="/images/zhaoshang/img/canying.png" alt=""><span >餐饮</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listright">
                <aside class="aside mainbox-shadow" id="aside">
                    <img src="/images/zhaoshang/img/shitizhaoshang/28.png" alt="">
                    <small><?php echo $info['name']; ?></small>
                    <strong><?php echo $info['tel']; ?></strong>
                    <div class="send" ><img src="/images/zhaoshang/img/shitizhaoshang/31.png" alt=""><a style="color:white" href="tencent://message/?uin=52203910&Site=http://vps.shuidazhe.com&Menu=yes">立即联系</a></div>
                    <hr>
                    <div class="flex">
                        <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/29.png" alt="">预约参观</a>
                        <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/30.png" alt="">留言咨询</a>
                    </div>
                </aside>
                <div href="" class="more mainbox-shadow">
                    <p><span>推荐园区</span><a href="">MORE</a></p>
                    <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/36.jpg" alt=""></a>
                    <article>深圳产业园</article>
                </div>
                <div href="" class="more mainbox-shadow">
                    <p><span>推荐园区</span><a href="">MORE</a></p>
                    <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/36.jpg" alt=""></a>
                    <article>深圳产业园</article>
                </div>
                <div href="" class="more mainbox-shadow">
                    <p><span>推荐园区</span><a href="">MORE</a></p>
                    <a href=""><img src="/images/zhaoshang/img/shitizhaoshang/36.jpg" alt=""></a>
                    <article>深圳产业园</article>
                </div>
            </div>
        </div>
        <div id="tuijian" class="mainbox-shadow">
            <h2><img src="/images/zhaoshang/img/shitizhaoshang/25.png" alt="">看过该写字楼的用户还看过</h2>
            <div>
                <?php if(is_array($ran) || $ran instanceof \think\Collection || $ran instanceof \think\Paginator): $i = 0; $__LIST__ = $ran;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/Fang/info',['id'=>$vo['id']]); ?>">
                    <img src="/images/zhaoshang/img/shitizhaoshang/34.jpg" alt="">
                    <h4><?php echo $vo['title']; ?></h4>
                    <p><span><strong><?php echo $vo['zujing']; ?></strong>元</span><span><?php echo $vo['pro']; ?>-<?php echo $vo['city']; ?></span></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <a href="<?php echo url('index/Zhaoshang/lou_index'); ?>">点击查看更多</a>
        </div>
    </div>
</div>
<input type="hidden" value="<?php echo $info['mapx']; ?>" id="mapx">
<input type="hidden" value="<?php echo $info['mapy']; ?>" id="mapy">

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

<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.10&key=578609e98b59a3e97345b5edaaa3861b&plugin=AMap.StationSearch"></script>
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.10&key=578609e98b59a3e97345b5edaaa3861b&plugin=AMap.PlaceSearch"></script>
<script type="text/javascript" src="https://cache.amap.com/lbs/static/PlaceSearchRender.js"></script>
<script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
<script type="text/javascript">
    var map = new AMap.Map("map", {
        resizeEnable: true,
        center: [<?php echo $info['mapx']; ?>,<?php echo $info['mapy']; ?>],//地图中心点
        zoom: 10 //地图显示的缩放级别
    });

    (function () {
        var circle = new AMap.Circle({
            center: new AMap.LngLat("<?php echo $info['mapx']; ?>", "<?php echo $info['mapy']; ?>"), // 圆心位置
            radius: 1000,//径
            strokeColor: "#E2DCC4",  //线颜色
            strokeOpacity: 1,  //线透明度
            strokeWeight: 3,  //线粗细度
            fillColor: "#E2DCC4",  //填充颜色
            fillOpacity: 0.35 //填充透明度
        });
        var marker = new AMap.Marker({
            icon: "/images/zhaoshang/img/quan.png",
            position: [<?php echo $info['mapx']; ?>, <?php echo $info['mapy']; ?>],
        });
        map.add(circle);
        map.add(marker);
        map.setFitView();
        //实例化信息窗体
        var title = '',
            content = [];
        content.push("<?php echo $info['title']; ?>");
        var infoWindow = new AMap.InfoWindow({
            isCustom: true,  //使用自定义窗体
            content: createInfoWindow(title, content.join("<br/>")),
            offset: new AMap.Pixel(7, -45)
        });

        //构建自定义信息窗体
        function createInfoWindow(title, content) {
            var info = document.createElement("div");
            info.className = "custom-info input-card content-window-card";

            //可以通过下面的方式修改自定义窗体的宽高
            //info.style.width = "400px";
            // 定义顶部标题
            var top = document.createElement("div");
            var titleD = document.createElement("div");
            /*        var closeX = document.createElement("img");*/
            top.className = "info-top";
            titleD.innerHTML = title;
            /* closeX.src = "https://webapi.amap.com/images/close2.gif";
             closeX.onclick = closeInfoWindow;*/

            top.appendChild(titleD);
            /*    top.appendChild(closeX);*/
            info.appendChild(top);

            // 定义中部内容
            var middle = document.createElement("div");
            middle.className = "info-middle";
            middle.style.backgroundColor = '#F00';
            middle.innerHTML = content;
            info.appendChild(middle);

            // 定义底部内容
            var bottom = document.createElement("div");
            bottom.className = "info-bottom";
            bottom.style.position = 'relative';
            bottom.style.top = '-12px';
            bottom.style.margin = '0 auto';
            var sharp = document.createElement("img");
            sharp.src = "/images/zhaoshang/img/xiabiao.png";
            bottom.appendChild(sharp);
            info.appendChild(bottom);
            return info;
        }


        infoWindow.open(map, marker.getPosition());



        var placeSearch = new AMap.PlaceSearch({
            citylimit:true,
            pageSize:20,
            autoFitView:true,
        })
        function stationSearch(name){
            var cpoint = ["<?php echo $info['mapx']; ?>","<?php echo $info['mapy']; ?>"]; //中心点坐标

            placeSearch.searchNearBy(name, cpoint,1000, function (status, result) {
                // 查询成功时，result即对应匹配的POI信息
                console.log(result)
                var pois = result.poiList.pois;
                for(var i = 0; i < pois.length; i++){
                    var poi = pois[i];
                    var marker = [];
                    marker[i] = new AMap.Marker({
                        icon: "/images/zhaoshang/img/map1.png",
                        position: poi.location,   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
                        title: poi.name
                    });
                    // 将创建的点标记添加到已有的地图实例：
                    map.add(marker[i]);
                }

                map.setFitView();

            })
        }
        stationSearch("银行")
    })()
    function searchComplete(name) {
        map.clearMap();
        var circle = new AMap.Circle({
            center: new AMap.LngLat("<?php echo $info['mapx']; ?>", "<?php echo $info['mapy']; ?>"), // 圆心位置
            radius: 1000,//径
            strokeColor: "#E2DCC4",  //线颜色
            strokeOpacity: 1,  //线透明度
            strokeWeight: 3,  //线粗细度
            fillColor: "#E2DCC4",  //填充颜色
            fillOpacity: 0.5 //填充透明度
        });
        var marker = new AMap.Marker({
            icon: "/images/zhaoshang/img/quan.png",
            position: [<?php echo $info['mapx']; ?>, <?php echo $info['mapy']; ?>],
         });
        map.add(circle);
        map.add(marker);
        map.setFitView();
        //实例化信息窗体
        var title = '',
            content = [];
        content.push("<?php echo $info['title']; ?>");
        var infoWindow = new AMap.InfoWindow({
            isCustom: true,  //使用自定义窗体
            content: createInfoWindow(title, content.join("<br/>")),
            offset: new AMap.Pixel(7, -45)
        });

        //构建自定义信息窗体
        function createInfoWindow(title, content) {
            var info = document.createElement("div");
            info.className = "custom-info input-card content-window-card";

            //可以通过下面的方式修改自定义窗体的宽高
            //info.style.width = "400px";
            // 定义顶部标题
            var top = document.createElement("div");
            var titleD = document.createElement("div");
            /*        var closeX = document.createElement("img");*/
            top.className = "info-top";
            titleD.innerHTML = title;
            /* closeX.src = "https://webapi.amap.com/images/close2.gif";
             closeX.onclick = closeInfoWindow;*/

            top.appendChild(titleD);
            /*    top.appendChild(closeX);*/
            info.appendChild(top);

            // 定义中部内容
            var middle = document.createElement("div");
            middle.className = "info-middle";
            middle.style.backgroundColor = '#F00';
            middle.innerHTML = content;
            info.appendChild(middle);

            // 定义底部内容
            var bottom = document.createElement("div");
            bottom.className = "info-bottom";
            bottom.style.position = 'relative';
            bottom.style.top = '-12px';
            bottom.style.margin = '0 auto';
            var sharp = document.createElement("img");
            sharp.src = "/images/zhaoshang/img/xiabiao.png";
            bottom.appendChild(sharp);
            info.appendChild(bottom);
            return info;
        }


        infoWindow.open(map, marker.getPosition());



        var placeSearch = new AMap.PlaceSearch({
            citylimit:true,
            pageSize:20,
            autoFitView:true,
        })
        function stationSearch(name){
            var icons="";
            if (name=="地铁"){
                icons="/images/zhaoshang/img/map2.png"
            }else if(name=="银行"){
                icons="/images/zhaoshang/img/map5.png"
            }else if(name=="餐饮"){
                icons="/images/zhaoshang/img/map6.png"
            }
            var cpoint = ["<?php echo $info['mapx']; ?>","<?php echo $info['mapy']; ?>"]; //中心点坐标

            placeSearch.searchNearBy(name, cpoint,1000, function (status, result) {
                // 查询成功时，result即对应匹配的POI信息
                console.log(result)
                var pois = result.poiList.pois;
                for(var i = 0; i < pois.length; i++){
                    var poi = pois[i];
                    var marker = [];
                    marker[i] = new AMap.Marker({
                        icon: icons,
                        position: poi.location,   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
                        title: poi.name
                    });
                    // 将创建的点标记添加到已有的地图实例：
                    map.add(marker[i]);
                }

                map.setFitView();

            })
        }
        stationSearch(name)
    }


</script>
<script language="javascript">
    $("#shitizhaoshang").addClass("active");
    $("#zhaoshang_lou").addClass("active");
</script>
<script>
    $(function () {
        $("#ditie,#yinhang,#canyin,#gongyan").click(function () {
            $(this).addClass("active").siblings().removeClass("active")
        })
    })
</script>

</body>
</html>