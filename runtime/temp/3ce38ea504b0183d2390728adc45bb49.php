<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"D:\www\zhaoshang\public\tpl\dispatch_jump_error.tpl";i:1528875057;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css" rel="stylesheet">
        .div1 {
            position:relative;
            margin: 0 auto;
            width:200px;
            height:200px;
            border:2px solid red;
            border-radius:50%;
            text-align:center;
            line-height:200px;
            font-size:24px;
            font-family:"微软雅黑";
        }


        .bounceinDown {
            -webkit-animation:bounceinDownAnimate 1s ease .5s ;
            animation:bounceinDownAnimate 1.5s ease .5s ;
        }
        @-webkit-keyframes bounceinDownAnimate {
            0% {
                -webkit-transform:translateY(-200px);
            }
            100% {
                -webkit-transform:translateY(0px);
            }
        }
        #top{
            height: 50px;
            width: 100%;
            text-align: center  ;
            box-sizing: border-box;
            line-height: 50px;
            font-size: 30px;
            font-weight: bolder;
            font-family: 幼圆;
            color:cornflowerblue;
        }
        #postion{
            margin: 200px auto;
        }
        #foot{
            height: 100px;width: 100%;text-align: center; font-size: 16px;
            font-weight: bolder;margin-top: 20px;
            font-family: 幼圆; color:cornflowerblue;}
    </style>
</head>
<body>
<div id="postion">
    <div id="top"><?php echo(strip_tags($msg));?></div>
    <div id="test1" class="div1"><span style="color: red">操作失败</span></div>
    <div id="foot"><p>将在<span id="wait"><?php echo($wait);?></span> 秒钟后<a id="href" href="<?php echo($url);?>">跳转</a ></p></div>
</div>

    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>