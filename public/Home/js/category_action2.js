

//百度分享
window._bd_share_config = {
	"common": {
		"bdSnsKey": {
			"tsina": "3258795188",
			"tqq": "208157"
		},
		"bdUrl": $('#category_title').attr("href"),
		"bdText": $('#category_title').html()+"的做法大全_"+$('#category_title').html()+"怎么做好吃_"+$('#category_title').html()+"的家常菜做法-美食天下",
		"bdMini": "2",
		"bdMiniList": false,
		"bdPic": $("#category_pic").attr("data-src"),
		"bdStyle": "0",
		"bdSize": "16",
		"bdWbuid": "1642625033"
	},
	"share": {}
};
with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];

$(".shar a").click(function(){
var id=$(this).attr('data');
document.getElementById(id).click();
});