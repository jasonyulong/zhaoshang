$(function () {
    var a = location.href;
    for(var i = 0;i<$("nav a").length;i++){
        var id=$("nav a").eq(i).attr("id")
        console.log(id)
        if(a.indexOf(id)!=-1){
            $("nav a").eq(i).addClass("active")
        }
    }
})