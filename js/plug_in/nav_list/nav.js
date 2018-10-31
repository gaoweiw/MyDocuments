var appNav = angular.module('nav', []);

appNav.directive('navList', ['$q', function($q) {
	var nav_html = '<nav class="gray3">' +
		'<div class="br-s shrink-nav noselect mouse-hand color-cc" ng-click="isNav(1)"><div class="nav-contraction-btn"><i class="shrink-ico fa fa-angle-double-left" ></i></div></div>' +
		'<div id="navList" class="br-s navlist p5">' +
		'<ul class="br-s text-14 no-unl" ng-repeat="a in navList">' +
		'<li class="nav-big-li"><a ng-click="openListOne(a.url,a.id)" id="nav{{a.id}}" href="javascript:void(0)"><div class="nav-one-title {{a.id == now_aid?navA_active:&quot;&quot;}}"><i ng-class="a.ico" class="fl"></i><ng ng-bind="a.title"></ng><i ng-show="a.next?true:false" id="ico_r_{{a.id}}" class="fa {{a.id == now_aid?faAopen:faAclose}} {{a.id == now_aid?&quot;red&quot;:&quot;&quot;}} fr"></i></div></a>' +
		'<ul ng-repeat="b in a.next" class="nextTow {{now_aid == a.id?&quot;&quot;:&quot;hide&quot;}}">' +
		'<li><a ng-click="openListTwo(b.url,a.id,b.id)" id="nav{{b.id}}" href="javascript:void(0)"><div class="nav-two-title {{b.id == now_bid?navB_active:&quot;&quot;}}"><ng ng-bind="b.title"></ng><i ng-show="b.next?true:false" id="ico_r_{{b.id}}" class="fa {{b.id == now_bid?faBopen:faBclose}} {{b.id == now_bid?&quot;red&quot;:&quot;&quot;}}  fr"></i></div></a>' +
		'<ul ng-repeat="c in b.next" class="nextThree {{now_bid == b.id?&quot;&quot;:&quot;hide&quot;}}">' +
		'<li><a ng-click="openListThree(c.url,a.id,b.id,c.id)" href="javascript:void(0)"><div class="nav-three-title {{c.id == now_cid?navC_active:&quot;&quot;}}"><ng ng-bind="c.title"></ng></div></a>' + '</li>' +
		'</ul>' +
		'</li>' +
		'</ul>' +
		'</li>' +
		'</ul>' +
		'</div>' +
		'</nav>';
	return {
		restrice: 'EM',
		template: nav_html,
		transclude: true,
		replace: true,
		link: function(scope, element, attrs, accordionController) {
			scope.nav_width = $('#nav').outerWidth(); //菜单总宽度
			scope.nav_list_width = $('#navList').outerWidth(); //菜单列表宽度
			scope.shrink_width = $('.shrink-nav').outerWidth(); //收缩条宽度

			//隐藏菜单
			scope.navHide = function(t) {
				t ? t = t : t = '0.5';
				$('#nav').css({
					'left': '-' + scope.nav_list_width + 'px',
					'transition': 'all ' + t + 's'
				});
				$('.shrink-ico').removeClass('fa-angle-double-left').addClass('fa-angle-double-right');
				$('.content').css({
					'left': scope.shrink_width + 'px',
					'transition': 'all ' + t + 's'
				});
				$('#crumb').css({
					'left': scope.shrink_width + 'px',
					'transition': 'all ' + t + 's'
				}); //面包屑
			};

			//显示菜单
			scope.navShow = function(t) {
				t ? t = t : t = '0.5';
				$('#nav').css({
					'left': '0px',
					'transition': 'all ' + t + 's'
				});
				$('.shrink-ico').removeClass('fa-angle-double-right').addClass('fa-angle-double-left');
				$('.content').css({
					'left': scope.nav_width + 'px',
					'transition': 'all ' + t + 's'
				});
				$('#crumb').css({
					'left': scope.nav_width + 'px',
					'transition': 'all ' + t + 's'
				}); //面包屑
			};

			//根据localStorage判断初始是否显示或隐藏菜单栏
			scope.is_click = 0;
			scope.isNav = function(what) {
				scope.is_show = localStorage.getItem('g_nav_status'); //localStorage(1：显示 0：影藏)
				if (what && what == 1) {
					if (!scope.is_show) { //第一次
						scope.navHide();
						localStorage.setItem("g_nav_status", 0);
						scope.is_click += 1;
					}
					if (scope.is_show == 1 && scope.is_click == 0) {
						scope.navHide();
						localStorage.setItem("g_nav_status", 0);
						scope.is_click += 1;
					}
					if (scope.is_show == 0) {
						scope.navShow();
						localStorage.setItem("g_nav_status", 1);
						scope.is_click = 0;
					}
				} else {
					if (scope.is_show == 0) {
						scope.navHide('0');
					} else {
						scope.navShow();
					}
				}
			};
			scope.isNav();

			//判断当前浏览器的宽度 如果<700就隐藏左侧栏
			var isRun = true;
			window.onresize = function() {
				var now_body_width = $('body').width();
				if (isRun && now_body_width < 700) {
					isRun = false;
					scope.navHide();
				}
				if (!isRun && now_body_width > 900) {
					isRun = true;
					scope.navShow();
				}
			}


			//菜单列表(第一层)
			scope.openListOne = function(url, aid) { //id:菜单id   url:菜单url
				var next_nav = $('#nav' + aid).parent().find('.nextTow');
				var down_ico = $('#ico_r_' + aid); //右侧按钮

				if (down_ico.is('.fa-caret-left')) {
					down_ico.removeClass('fa-caret-left').addClass('fa-caret-down');
					next_nav.removeClass('hide');
				} else {
					down_ico.removeClass('fa-caret-down').addClass('fa-caret-left');
					next_nav.addClass('hide');
				}
				//储存当前选中页
				if (url != '#') {
					scope.storageUrl(url, aid);
					window.location.href=url;
				}
			};


			//菜单列表(第二层)
			scope.openListTwo = function(url, aid, bid) {
				var next_nav = $('#nav' + bid).parent().find('.nextThree');
				var down_ico = $('#ico_r_' + bid); //右侧按钮

				if (down_ico.is('.fa-angle-left')) {
					down_ico.removeClass('fa-angle-left').addClass('fa-angle-down');
					next_nav.removeClass('hide');
				} else {
					down_ico.removeClass('fa-angle-down').addClass('fa-angle-left');
					next_nav.addClass('hide');
				}

				//储存当前选中页
				if (url != '#') {
					scope.storageUrl(url, aid, bid);
					window.location.href=url;
				}
			};


			//菜单列表(第三层)
			scope.openListThree = function(url, aid, bid, cid) {
				if (url != '#') {
					scope.storageUrl(url, aid, bid, cid);
					window.location.href=url;
				}
			};

			//如果nav localStorage不存在 或者 url 不存在,设置为首页
			scope.goHome = function() {

				scope.now_nav = JSON.parse(localStorage.getItem('g_nav_active')); //获取nav localStorage

				if (!scope.now_nav || scope.now_nav == '' || scope.now_nav == null || scope.now_nav == 'null' || scope.now_nav == '{}') { //如果没有localstorage就存储首页
					var nav_this = {
						aid: 1,
						url: 'index.php'
					};
					var nav_parse = JSON.stringify(nav_this);
					localStorage.setItem('g_nav_active', nav_parse);
					window.location.href = base.homeUrl;
				}


				var thisUrl = window.location.pathname,
					arrUrl = thisUrl.split('/'); //判断当前页面是不是选中的页面
				if (!arrUrl[3] || arrUrl[3] != scope.now_nav.url) {
					var nav_this = {
						aid: 1,
						url: 'index.php'
					};
					var nav_parse = JSON.stringify(nav_this);
					localStorage.setItem('g_nav_active', nav_parse);
					window.location.href = base.homeUrl;
				}

			}

			//不把储存页和当前页作比较
			// scope.goNow = function(){
			// 	scope.now_nav = JSON.parse(localStorage.getItem('g_nav_active')); //获取nav localStorage
			// }



			//储存当前选中页
			scope.storageUrl = function(url, aid, bid, cid) {
				if (url != '#') {
					var nav_this = {
						aid: aid,
						bid: bid,
						cid: cid,
						url: url
					};
					var nav_parse = JSON.stringify(nav_this);
					localStorage.setItem('g_nav_active', nav_parse);
				}
			};



			//菜单默认选中上次访问地址
			scope.navChecked = function() {

				scope.goHome(); //判断
				// scope.goNow();

				if (scope.now_nav) {
					scope.now_aid = scope.now_nav.aid;
					scope.now_bid = scope.now_nav.bid;
					scope.now_cid = scope.now_nav.cid;
					scope.now_url = scope.now_nav.url;
				}

				//右侧图标判断
				scope.faAopen = 'fa-caret-down';
				scope.faAclose = 'fa-caret-left';
				scope.faBopen = 'fa-angle-down';
				scope.faBclose = 'fa-angle-left';

				if (scope.now_aid && !scope.now_bid && !scope.now_cid) { //没有第二层第三层选中第一层
					scope.navA_active = 'nav-li-active';
				} else {
					scope.navA_active = '';
				}

				if (scope.now_aid && scope.now_bid && !scope.now_cid) { //没有第三层选中第二层
					scope.navB_active = 'nav-li-active';
				} else {
					scope.navB_active = '';
				}

				if (scope.now_aid && scope.now_bid && scope.now_cid) { //选中第三层
					scope.navC_active = 'nav-li-active';
				}


			}
			scope.navChecked();


			scope.navList = [{
				"id": "1",
				"ico": "",
				"title": "欢迎页",
				"url": 'index.php',
				"next": ''
			}, {
				"id": "2",
				"ico": '',
				"url": '#',
				"title": "css",
				"next": [{
					"id": '2001',
					"ico": "",
					"title": "记不住",
					"url": 'css_2001.php',
					"next": ''
				}, {
					"id": '2002',
					"ico": "",
					"title": "动画",
					"url": '#',
					"next": [{
						"id": '2002001',
						"ico": '',
						"title": "文字提示框",
						"url": 'css_2002001.php',
						"next": ''
					}, {
						"id": '2002002',
						"ico": '',
						"title": "文字描边",
						"url": 'css_2002002.php',
						"next": ''
					}]
				}, {
					"id": '2003',
					"ico": "",
					"title": "效果",
					"url": '#',
					"next": [{
						"id": '2003001',
						"ico": '',
						"title": "input",
						"url": 'css_2003001.php',
						"next": ''
					}]
				}]
			}, {
				"id": "3",
				"ico": '',
				"url": '#',
				"title": "js",
				"next": [{
					"id": '3001',
					"ico": "",
					"title": "方法",
					"url": '#',
					"next": [{
						"id": '3001001',
						"ico": "",
						"title": "常用方法",
						"url": 'js_3001001.php',
						"next": ''
					}, {
						"id": '3001002',
						"ico": "",
						"title": "刷新",
						"url": 'js_3001002.php',
						"next": ''
					}, {
						"id": '3001003',
						"ico": "",
						"title": "延迟防连点",
						"url": 'js_3001003.php',
						"next": ''
					}, {
						"id": '3001004',
						"ico": "",
						"title": "字符串处理",
						"url": 'js_3001004.php',
						"next": ''
					}]
				}, {
					"id": '3002',
					"ico": "",
					"title": "事件",
					"url": '#',
					"next": [{
						"id": '3002001',
						"ico": "",
						"title": "常用事件",
						"url": 'js_3002001.php',
						"next": ''
					}, {
						"id": '3002002',
						"ico": "",
						"title": "刷新&关闭触发事件",
						"url": 'js_3002002.php',
						"next": ''
					}, {
						"id": '3002003',
						"ico": "",
						"title": "一些键盘事件",
						"url": 'js_3002003.php',
						"next": ''
					}]
				}]
			}, {
				"id": "4",
				"ico": '',
				"url": '#',
				"title": "html",
				"next": [{
					"id": '4001',
					"ico": "",
					"title": "html5笔记",
					"url": 'html_4001.php',
					"next": ''
				}, {
					"id": '4002',
					"ico": "",
					"title": "常用特殊字符",
					"url": 'html_4002.php',
					"next": ''
				}]
			}, {
				"id": "5",
				"ico": '',
				"url": '#',
				"title": "color",
				"next": [{
					"id": '5001',
					"ico": "",
					"title": "常用色",
					"url": 'color_5001.php',
					"next": ''
				}]
			}, {
				"id": "6",
				"ico": '',
				"url": '#',
				"title": "type script",
				"next": [{
					"id": '6001',
					"ico": "",
					"title": "ts入门笔记",
					"url": 'ts_6001.php',
					"next": ''
				}]
			}, {
				"id": "7",
				"ico": '',
				"url": '#',
				"title": "angular 4",
				"next": [{
					"id": '7001',
					"ico": "",
					"title": "angular 4 笔记",
					"url": 'angular_7001.php',
					"next": ''
				}]
			},{
				"id": "8",
				"ico": '',
				"url": '#',
				"title": "vue",
				"next": [{
					"id": '8001',
					"ico": "",
					"title": "vue 笔记",
					"url": 'vue_8001.php',
					"next": ''
				}]
			}, {
				"id": "50",
				"ico": '',
				"title": "notes",
				"url": '#',
				"next": [{
					"id": '50001',
					"ico": "",
					"title": "常用地址",
					"url": 'word_50001.php',
					"next": ''
				}, {
					"id": '50002',
					"ico": "",
					"title": "IDE",
					"url": '#',
					"next": [{
						"id": '50002001',
						"ico": "",
						"title": "sublime Text",
						"url": 'word_50002001.php',
						"next": ''
					}, {
						"id": '50002002',
						"ico": "",
						"title": "webStorm",
						"url": 'word_50002002.php',
						"next": ''
					}]
				}, {
					"id": '50003',
					"ico": "",
					"title": "My account",
					"url": 'word_50003.php',
					"next": ''
				}, {
					"id": '50004',
					"ico": "",
					"title": "笔记",
					"url": 'word_50004.php',
					"next": ''
				}, {
					"id": '50005',
					"ico": "",
					"title": "关于本地存储",
					"url": 'word_50005.php',
					"next": ''
				}, {
					"id": '50006',
					"ico": "",
					"title": "随机数",
					"url": 'word_50006.php',
					"next": ''
				}]
			}, {
				"id": "51",
				"ico": '',
				"title": "question",
				"url": '#',
				"next": [{
					"id": '51001',
					"ico": "",
					"title": "node",
					"url": 'question_51001.php',
					"next": ''
				}, {
					"id": '51002',
					"ico": "",
					"title": "angular js",
					"url": 'question_51002.php',
					"next": ''
				}]
			}, {
				"id": "52",
				"ico": '',
				"title": "my plugin",
				"url": '#',
				"next": [{
					"id": '52001',
					"ico": "",
					"title": "省市区镇四级联动",
					"url": 'plugin_52001.php',
					"next": ''
				}, {
					"id": '52002',
					"ico": "",
					"title": "各种正则判断",
					"url": 'plugin_52002.php',
					"next": ''
				}, {
					"id": '52003',
					"ico": "",
					"title": "jquery fn 插件",
					"url": 'plugin_52003.php',
					"next": ''
				}]
			}, {
				"id": "53",
				"ico": '',
				"title": "my layout",
				"url": '#',
				"next": [{
					"id": '53001',
					"ico": "",
					"title": "张家界",
					"url": 'happy_53001.php',
					"next": ''
				},{
					"id": '53002',
					"ico": "",
					"title": "常用页面",
					"url": 'happy_53002.php',
					"next": ''
				}]
			}, {
				"id": "54",
				"ico": '',
				"title": "收集",
				"url": '#',
				"next": [{
					"id": '54001',
					"ico": "",
					"title": "html5 & css3 效果",
					"url": 'collect_54001.php',
					"next": ''
				},{
					"id": '54002',
					"ico": "",
					"title": "网站模板",
					"url": 'collect_54002.php',
					"next": ''
				}]
			}];

			//面包屑
			scope.breadCrumbs = function() {
				var list_big = scope.navList;
				for (var i = 0; i < list_big.length; i++) {
					list_big[i].id == scope.now_nav.aid ? scope.crumbsOne = list_big[i].title : '';

					var list_next = list_big[i].next;
					for (var j = 0; j < list_next.length; j++) {
						list_next[j].id == scope.now_nav.bid ? scope.crumbsTwo = list_next[j].title : '';

						var list_min = list_next[j].next;
						for (var k = 0; k < list_min.length; k++) {
							list_min[k].id == scope.now_nav.cid ? scope.crumbsThree = list_min[k].title : '';
						}
					}
				}
			}
			scope.breadCrumbs();



		}
	}
}])

