function getPage(num,$sortid,appendEml) {
    $.post("/index/article/index_json/page/"+num+".html", { sort: $sortid, page: num },function (data) {
        if(data == "" || data.length == 0){
            $("#more").text("没有更多了")
        }
        var html;
        data.forEach(function (value,index) {
            html+=" <div class=\"col-auto p-0 d-flex \" style=\"height: 120px;margin-bottom: 10px\">\n" +
                "                      <a href=\"\" class=\"d-block link-overflow  h-100\" style=\"min-width: 180px;\">\n" +
                "                          <img src=\"../img/23.jpg\" width=\"180\" height=\"120\" alt=\"插图\" class=\"d-block\">\n" +
                "                      </a>\n" +
                "                      <div class=\"h-100 d-flex flex-column justify-content-between \" style=\"padding:0 25px;\">\n" +
                "                          <a href=\"newsinfo.html\" class=\"text-black font-size-18 font-weight-bold\" length=\"20\">探索特色小镇的未来之路探索特色小镇的未来之路探索特色小镇的未来之路探索特色小镇的未来之路</a>\n" +
                "                          <article class=\"font-size-12 text-666 line-height-24 mb-1 w-75\" length=\"60\">党的十九大报告明确提出要“建立健全城乡融合发展体制机制和政策体系”为更好推进城乡融合发展，须破解经济社会发展中要素更织间载须破解经济社会发展中要素更织间载须破解经济社会发展中要素更织间载须破解经济社会发展中要素更织间载</article>\n" +
                "                          <p class=\"d-flex font-size-12 text-666 m-0 justify-content-between\"><span>887次浏览</span><sapn>7小时前</sapn></p>\n" +
                "                      </div>\n" +
                "                  </div>"
        })
        appendEml.append(html)
    })
}