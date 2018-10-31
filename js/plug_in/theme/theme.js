var appTheme = angular.module('theme', []);

appTheme.directive('themeChange', ['$q', function($q) {
	return {
		restrice: 'EM',
		templateUrl: base.tplUrl + 'theme.tpl',
		transclude: true,
		replace: true,
		link: function (scope, element, attrs, accordionController) {

			//angular 阻止冒泡
			scope.themeclick = function ($event) {
				$event.stopPropagation();
			}
			document.addEventListener('click', function(){
				scope.hide();
			}, false);

			scope.width = $('#tChoice').width() + 2;//dom宽度

			//显示皮肤
			scope.show = function(){
				$('#tChoice').css({
					'right': '0px',
					'transition': 'all 0.5s'
				});
			}

			//隐藏皮肤
			scope.hide = function(){
				$('#tChoice').css({
					'right': '-' + scope.width + 'px',
					'transition': 'all 0.5s'
				});
			}

			scope.isShow = 0;
			scope.themeChange = function () {
				if (scope.isShow == 0) {
					scope.show();
					scope.isShow += 1;
				}else{
					scope.hide();
					scope.isShow = 0;
				}
			}

			//默认皮肤
			scope.defaultTheme = function () {
				var loadurl = localStorage.getItem("g_Theme");
				var theme_url = base.cssUrl + 'theme_default/css/style.css';
				if (!loadurl) {
					$('#themeCss').attr('href', theme_url);
				} else {
					$('#themeCss').attr('href', loadurl);
				}
			}
			scope.defaultTheme();


			scope.clickTheme = function (id) {
				var theme_url = base.cssUrl + id + '/css/style.css';
				$('#themeCss').attr('href', theme_url);

				//存localStorage
				localStorage.setItem("g_Theme", theme_url);
			}


			scope.themeList = [{
				"id": "theme_default",
				"name": "默认背景",
				"imgurl": base.cssUrl + "theme_default/img/ico.jpg"
			}, {
				"id": "theme_1",
				"name": "星河",
				"imgurl": base.cssUrl + "theme_1/img/ico.png"
			}, {
				"id": "theme_2",
				"name": "蓝天白云",
				"imgurl": base.cssUrl + "theme_2/img/ico.jpg"
			}, {
				"id": "theme_3",
				"name": "海天一线",
				"imgurl": base.cssUrl + "theme_3/img/ico.jpg"
			}, {
				"id": "theme_4",
				"name": "火影忍者",
				"imgurl": base.cssUrl + "theme_4/img/ico.jpg"
			}];

			//退出
			scope.exit = function(){
				layer.confirm('确定退出么？',{icon:3,anim: 6,title:'提示',},function(){
					window.location.href = base.wwwUrl + 'login.php';
				})
			}
		}
	}
}])