(function () {
    document.addEventListener("DOMContentLoaded",function () {
        let deviceWidth=document.documentElement.clientWidth;
        document.documentElement.style.fontSize=deviceWidth/6.4+ "px";
    },false);
    window.onresize=function () {
        let deviceWidth = document.documentElement.clientWidth;
        document.documentElement.style.fontSize = deviceWidth / 6.4 + "px";
    }
})()