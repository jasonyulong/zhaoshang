<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\www\zhaoshang\application\..\public\tpl\index\zhaoshang\xuqiu.html";i:1542611049;s:41:"D:\www\zhaoshang\public\tpl\index\zs.html";i:1542253052;s:36:"../public/tpl/index/include_nav.html";i:1542265791;s:31:"../public/tpl/index/zs_nav.html";i:1542594492;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/images/zhaoshang/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/zhaoshang/css/reset.css">
    <script src="/images/zhaoshang/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="/images/zhaoshang/css/public.css">
    
<title><?php echo $type_ch; ?>需求发布</title>
<link rel="stylesheet" href="/images/zhaoshang/css/shitizhaoshang.css">
<script src="/images/zhaoshang/js/jquery.validate.min.js"></script>
<script src="/images/zhaoshang/js/validateAddMethods.js"></script>
<script src="/images/zhaoshang/js/jquery.messages_cn.js"></script>
<script src="/images/zhaoshang/js/distpicker.data.js"></script>
<script src="/images/zhaoshang/js/distpicker.js"></script>
<style>
    .errormsg{padding-left: 240px}
</style>

</head>
<body>
<div id="nav">
    <a href="/"><img src="/images/zhaoshang/img/log_reg_pwd/logo.png" width="220" alt=""></a>
    <div id="navbar">
        <a href="/">首页</a>
        <a href="<?php echo url('index/zhaoshang/index'); ?>" id="shitizhaoshang"  >实体招商</a>
        <a href="">综合体</a>
        <a href="">项目对接</a>
        <a href="">税务筹划</a>
        <a href="">行政办公</a>
        <a href="ts-index.html">特色项目</a>
        <a href="zc-index.html">政策动态</a>
        <a href="about-index.html">关于我们</a>
    </div>
    <div id="user">
        <?php if($islogin == 'no'): ?>
        <!--登陆前-->
        <div class="login">
            <a href="<?php echo url('index/index/userlogin'); ?>"><span>登陆</span></a><p>|</p><a href="<?php echo url('index/index/userregister'); ?>"><span>注册</span></a>
        </div>
        <?php endif; if($islogin == 'yes'): ?>
        <!--登录后-->
        <div class="ico" style="padding: 0 5px">
            <!--没有新消息-->
            <a href="<?php echo url('user/cang/index'); ?>"><img src="/images/zhaoshang/img/shitizhaoshang/2.png" alt=""></a>
            <!--有新消息-->
            <!--<a href="<?php echo url('user/cang/index'); ?>"><img src="/images/zhaoshang/img/shitizhaoshang/2.png" alt="新消息" title="新消息"><span> </span></a>-->
        </div>
        <div class="ico" style="padding-left: 15px">
            <a href="<?php echo url('user/index/index'); ?>">
                <img src="<?php echo $memberinfo['face']; ?>" width="28" height="28" style="border-radius:15px" alt="个人中心" title="个人中心" >
            </a>
        </div>
        <div id="setbox">
            <section>
                <div><a href="<?php echo url('user/index/index'); ?>"><img src="<?php echo $memberinfo['face']; ?>" width="50" height="50" style="border-radius:15px" alt=""></a></div>
                <article>
                    <p><?php echo $memberinfo['username']; ?></p>
                    <p>经验1,634 积分0</p>
                </article>
            </section>
            <section>
                <a href="<?php echo url('user/index/index'); ?>" class="active">个人中心</a>
                <a href="<?php echo url('user/cang/index'); ?>">我的收藏</a>
                <a href="<?php echo url('user/index/index'); ?>">个人设置</a>
                <a href="<?php echo url('user/index/logout'); ?>">安全退出</a>
            </section>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="biaoti">
    <article>专业&nbsp;&nbsp;&nbsp;&nbsp;精准&nbsp;&nbsp;&nbsp;&nbsp;高效<br/></article>
    <section>
        <article>PROFESSIONAL</article>
        <div>
            <p>Professional, accurate, efficient and continuous</p>
            <p>Professional people do professional things</p>
        </div>
    </section>
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
        <form id="form" method="post">
            <input type="hidden" name="需求类型" value="<?php echo $type_ch; ?>">
            <nav>
                <a href="<?php echo url('index/zhaoshang/fabu',['type'=>$type]); ?>"><span>免费发布<?php echo $type_ch; ?></span></a>
                <a href="<?php echo url('index/zhaoshang/xuqiu',['type'=>$type]); ?>" class="active"><span>登记<?php echo $type_ch; ?>需求</span></a>
            </nav>
            <div class="form-group">
                <div class="name"><span>标题：</span></div>
                <div class="value">
                    <input type="text" name="title" required="true" maxlength="50"  autocomplete="off">
                </div>
            </div>
            <div class="errormsg"></div>

            <div class="form-group">
                <div class="name"><span>流转类型：</span></div>
                <div class="value">
                    <div class="radiobox">
                        <input type="radio" checked name="流转类型" value="求租" id="zu" >
                        <label for="zu">求租</label>
                    </div>
                    <div class="radiobox">
                        <input type="radio" name="流转类型" value="求购" id="gou">
                        <label for="gou">求购</label>
                    </div>
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"><span>区域：</span></div>
                <div class="value">
                    <div data-toggle="distpicker" >
                        <div class="select" >
                            <select   name="省"  id="province1" required="true"></select>
                        </div>
                        <div class="select" >
                            <select name="市" id="city1" required="true"></select>
                        </div>
                        <div class="select" >
                            <select name="区"  id="district1" ></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"><span>详细地址：</span></div>
                <div class="value">
                    <input name="详细地址" type="text" required="true" maxlength="50"  autocomplete="off">
                </div>
            </div>
            <div class="errormsg"></div>

            <div class="form-group">
                <div class="name"><span><?php echo $type_ch; ?>面积：</span></div>
                <div class="value">
                    <input name="面积" type="text" required="true">
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"><span>租金：</span></div>
                <div class="value">
                    <input type="text" name="租金" required="true"><span>元/月</span>
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"><span>单价：</span></div>
                <div class="value">
                    <input type="text" name="单价" required="true"><span>元</span>
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name" ><span>补充说明：</span></div>
                <div class="value">
                    <textarea name="补充说明" maxlength="200"></textarea>
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"><span>联系人：</span></div>
                <div class="value">
                    <input name="联系人" type="text" required="true" maxlength="20"  autocomplete="off">
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"><span>联系电话：</span></div>
                <div class="value">
                    <input name="联系电话" type="text" required="true"  autocomplete="off">
                </div>
            </div>
            <div class="errormsg"></div>
            <div class="form-group">
                <div class="name"></div>
                <div class="value">
                    <input type="submit" value="立即发布">
                </div>
            </div>

        </form>
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
        <a href="">关于我们</a>
        <span ></span>
        <a href="">服务项目 </a>
        <span ></span>
        <a href="">企业荣耀 </a>
        <span ></span>
        <a href="">联系我们 </a>
        <span ></span>
        <a href="">诚聘精英 </a>
    </div>
    <p>COPYRIGHT 9 2017 LEJU HOLDING LIMITED. All RIGHTS RESERVED<br>
        京ICP证080057号电信业务审批【2010】字第296号京公网安备11010102002148号增值电信业务经营许可证B2-20100312<br>
        武汉市中国产业园招商服务有限公司湖北省武汉市研口区南国大家装H18楼</p>
</footer>


<script>
    $(function () {
        $("#form").validate({
            errorPlacement:function(error,element){
                $(element).closest(".form-group").next(".errormsg").append(error)
            },
        })
    })
</script>

<script language="javascript">
    $("#shitizhaoshang").addClass("active");
    $("#zhaoshang_<?php echo $type; ?>").addClass("active");
</script>

</body>
</html>