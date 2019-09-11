$(document).ready(function () {
    for(let i = 0;i<$("div[data-name]").length;i++){
        let $mel=$("div[data-name]").eq(i)
        $mel.load($mel.attr("data-name"),function () {
           for(var j=0;j<$("[data-active]").length;j++){
               var a = $("[data-active]").eq(j).val()
               var eml = document.getElementById(a)
               $(eml).addClass("active")
           }
        })
    }
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
})