/**
 * 异步获取列表中阅读、收藏、喜欢等数量
 * @todo 鼠标hoverDelay时，异步get数据，显示在列表中
 参数：type:recipe(菜谱)、collect(菜单)、blog(日志)。。。
       id
 * @example
 *     $(".get_num li").get_num('recipe');
 */


(function($){$.fn.get_num=function(type){

$(this).hoverDelay(function(){
if($(this).find(".get_nums").html()==''){ //判断为空获取，否则不请求数据
	var id=$(this).attr("data-id");//所需获取id
//	msc.ui.dialog.warning("获取数据"+id);

var that =$(this);	
	var url =  msc.tools.getAjaxUrl({
            ac:"commondata",
            op:"get_common_data_num"
        });
        $.ajax({
            type: "GET",
            url: url,
            data: {id:id,type:type},
            dataType: "json",
            success: function(data){
                //console.log(data);
				// var html = "";
               
                if(data.error===0){
				that.find(".get_nums").html(data.data.collnum+"人收藏，"+data.data.readnum+"次阅读").fadeIn();
					//if(type == "collect"){
					//	that.find("div.collect_num").show();	
					//	that.find("span.collect_num_span").html(data.data.recipenum+"篇菜谱").show();
					//};
                }

            }
        });



}else{
$(this).find(".get_nums").fadeIn();
//if(type == "collect"){
//$(this).find("span.collect_num_span").show();
//$(this).find("div.collect_num").show();
//}

	
}

},function(){
$(this).find(".get_nums").fadeOut();
//if(type == "collect"){
//$(this).find("span.collect_num_span").hide();
//$(this).find("div.collect_num").hide();
//}

},150,100);

};})(jQuery);