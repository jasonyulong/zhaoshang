(function () {
    for(let i = 0;i<$("[length]").length;i++){
        let $mel=$("[length]").eq(i)
        $mel.text(function () {
            if($mel.text().trim().length<$mel.attr("length")){
                return $mel.text().trim().substring(0,$mel.attr("length"))
            }else {
                return $mel.text().trim().substring(0,$mel.attr("length"))+"..."
            }
        })
    }
})()
$(document).ready(function(){
        $(".navhover a").each(function(){
            $this = $(this);
            if(String(window.location).indexOf($this[0].href)!=-1){
                $this.addClass("font-weight-bold ");
            }
        });
});
function backtop() {
    $('body,html').animate({scrollTop:0},$(window).scrollTop()/4);
}
function close() {
    $("#maingao").hidden
}
var outerHeight=function (eml) {
    eml.eq(0).addClass("text-over")
    console.log(eml.eq(0).outerHeight(true))
    var $outerHeight = eml.eq(0).outerHeight(true)
    return $outerHeight
}
$(function () {
    (function ($) {
        let emllist = $(".shaixuan").prev(".col-10");
      /*  if($(".shaixuan").prev(".col-10").find("a").hasClass("text-red")==true){
            console.log($(".shaixuan").prev(".col-10").find("a").position().top<outerHeight(emllist))
        }*/
        for(var a=0;a<emllist.length;a++){
            if(emllist.eq(a).outerHeight()>outerHeight(emllist)){
                emllist.eq(a).addClass("text-over")
                emllist.eq(a).next(".col-1").text("展开+")
            }else{
                emllist.eq(a).next(".col-1").text(" ")
            }
        }
    })($)


    $(".shaixuan").click(function () {
        $(this).prev(".col-10").toggleClass("text-over")
        if(!$(this).prev(".col-10").hasClass("text-over")){
            $(this).text("收起 -")
        }else{
            $(this).text("展开 +")
        }
    })
})