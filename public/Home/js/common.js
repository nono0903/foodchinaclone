<<<<<<< HEAD
/**
 * @name 用户中心js
 * @namespace msc
 * @date 20140317
 * @description 用户中心js,debug
 */
(function($, msc) {

	

		var my = msc.register("msc.my");


		/**
		 * 前端用户主入口
		 */
		my.run = function(arr) {
			if (arguments.length > 1) {
				arr = Array.prototype.slice.call(arguments, 0);
			}
			if ("string" === typeof(arr)) {
				arr = [arr];
			}
			for (var i = 0; i < arr.length; i++) {
				if ("function" === typeof(my["_" + arr[i]])) {
					my["_" + arr[i]]();
					my["_" + arr[i]] = $.noop;
				}
			}
			return my;
		}

		/**
		 * 加载公用的
		 */
		my._common = function() {
			msc.user.init();
			msc.goTop.footerEle = $("#J_help_wrap");
			msc.goTop.init();
		}

		/**
		 * 图片加载
		 */
		my._imgLoad = function() {
			$("img.imgLoad[data-src!='']").imgLoad();
		}


		/**
		 * 关注
		 */
		my._follow = function() {

			//必须在用户初始完后才执行
			msc.user.ready(function() {
				$("#J_follow_list").on("click", '.substatus a', function() {
					var that = this;

					//如果标识不存在
					if (that.className !== 'on') {
						that.className = 'on';
						that.getElementsByTagName("span")[0].innerHTML = '关注中';
						msc.user.set_follow_mei(that.getAttribute("data-uid"), function() {
							that.getElementsByTagName("span")[0].innerHTML = '已关注';
						}, function(res) {
							that.getElementsByTagName("span")[0].innerHTML = '关注';
							that.className = '';
							res.error !== 10001 && msc.ui.dialog.error(res.msg || '一会再关注吧');
						});
					}

					return false;
				});

				$("#J_follow_reload").click(function() {
					var that = this;

					if (that.innerHTML === '换一换') {
						that.innerHTML = '请稍等';

						msc.user.get_follow_mei({
							size: 6,
							page: msc.tools.random(1, 50),
							success: function(res) {
								var i, len, str,
									data = res.data;
								if (data && data.length) {
									for (i = 0, len = data.length, str = ''; i < len; i++) {
										str += '<li><a href="http://home.meishichina.com/space-' + data[i].uid + '.html" target="_blank"><img class="imgLoad" src="' + data[i].avatar + '" alt="' + data[i].username + '" width="120" height="120"></a><p class="subline"><a target="_blank" href="http://home.meishichina.com/space-' + data[i].uid + '.html">' + data[i].username + '</a></p><p class="substatus" style="display:none"><a href="#" data-uid="' + data[i].uid + '"><i class="icon1"></i><span>关注</span></a></p></li>';
									}

									$("#J_follow_list").html(str);
								} else {
									msc.ui.dialog.error('一会再试吧');
								}
								that.innerHTML = '换一换';
							},
							error: function() { //如果出错或者没有登录
								that.innerHTML = '换一换';
							}
						});
					}

					return false;
				});

			});

		}

		/*用户搜索*/
//搜索
$(".search_Text").click(function(){$(this).stop("true").animate({width:"296px"},200,function(){var f=$(this).attr("data-first");if(f=="on"){$(this).val("");$(this).attr("data-first","off")}return}).removeClass("gay")});$("#search").click(function(){if($("#q").val().replace(/\s+/g,"").replace("　","")!='')$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/");$("#form_search").submit()});$('#q').keydown(function(event){if(event.keyCode==13){if($("#q").val().replace(/\s+/g,"").replace("　","")!='')$("#form_search").attr("action","http://home.meishichina.com/search/"+$("#q").val()+"/")}});


		}(jQuery, msc));
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>系统发生错误</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
html{ overflow-y: scroll; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
img{ border: 0; }
.error{ padding: 24px 48px; }
.face{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
h1{ font-size: 32px; line-height: 48px; }
.error .content{ padding-top: 10px}
.error .info{ margin-bottom: 12px; }
.error .info .title{ margin-bottom: 3px; }
.error .info .title h3{ color: #000; font-weight: 700; font-size: 16px; }
.error .info .text{ line-height: 24px; }
.copyright{ padding: 12px 48px; color: #999; }
.copyright a{ color: #000; text-decoration: none; }
</style>
</head>
<body>
<div class="error">
<p class="face">:(</p>
<h1>无法加载控制器:Home</h1>
<div class="content">
	<div class="info">
		<div class="title">
			<h3>错误位置</h3>
		</div>
		<div class="text">
			<p>FILE: C:\xampp\htdocs\tpfood\meishi\Think\Library\Think\App.class.php &#12288;LINE: 92</p>
		</div>
	</div>
	<div class="info">
		<div class="title">
			<h3>TRACE</h3>
		</div>
		<div class="text">
			<p>#0 C:\xampp\htdocs\tpfood\meishi\Think\Library\Think\App.class.php(92): E('\xE6\x97\xA0\xE6\xB3\x95\xE5\x8A\xA0\xE8\xBD\xBD\xE6\x8E\xA7...')<br />
#1 C:\xampp\htdocs\tpfood\meishi\Think\Library\Think\App.class.php(193): Think\App::exec()<br />
#2 C:\xampp\htdocs\tpfood\meishi\Think\Library\Think\Think.class.php(120): Think\App::run()<br />
#3 C:\xampp\htdocs\tpfood\meishi\Think\ThinkPHP.php(96): Think\Think::start()<br />
#4 C:\xampp\htdocs\tpfood\meishi\food\index.php(5): require('C:\\xampp\\htdocs...')<br />
#5 {main}</p>
		</div>
	</div>
</div>
</div>
<div class="copyright">
<p><a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a><sup>3.2.2</sup> { Fast & Simple OOP PHP Framework } -- [ WE CAN DO IT JUST THINK ]</p>
</div>
</body>
</html>
>>>>>>> 83ac0e1b8e9518744efa814e5fbf77af293987c4
