$(function () {
    $(window).on("scroll",function () {
        setInterval(function () {
            if($(window).scrollTop() > 1300){
                $("#second_Head").slideDown(500)
                $("#indexNav").hide()
            }else{
                $("#second_Head").hide()
                $("#indexNav").show()
            }
        },30)
    })
})
window.onload=function () {
    $("#news_head").addClass("a-bouncein")
}
