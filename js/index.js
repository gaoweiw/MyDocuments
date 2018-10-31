define(function(require, exports, module) {
	/**
	var a = require('a'); //引入a模块
	var b = require('b'); //引入b模块

	var data1 = 1; //私有数据

	var func1 = function() { //私有方法
		return a.run(data1);
	}

	exports.data2 = 2; //公共数据

	exports.func2 = function() { //公共方法
        		return 'hello';
	}
	 */


	var app = angular.module('myApp', ['theme', 'nav']);

	app.controller('myCtrl', function($scope) {
		$scope.page_title = '首页';

		$scope.page = function() {
			JqueryAjax.post({
				url: base.wwwUrl + 'tpl/page.js',
			}, function(data) {
				$('.footer').html(data);
			}, function(data) {
				console.log('request error');
			})
		}



		//文字描边
		$scope.textAntiom = function() {
			$scope.selctText = [{
				'id': 1,
				'type': '样式一',
				'className': 'effect01',
			}, {
				'id': 2,
				'type': '样式二',
				'className': 'effect02',
			}, {
				'id': 3,
				'type': '样式三',
				'className': 'effect03',
			}, {
				'id': 4,
				'type': '样式四',
				'className': 'effect04',
			}, {
				'id': 5,
				'type': '样式五',
				'className': 'effect05',
			}];

			$scope.selctTextOn = $scope.selctText[0];
		}
		$scope.textAntiom();

		//分页
		$scope.getData = function(page) {
			$scope.current = parseInt(page); //当前页
			$scope.per_page = parseInt(10); //每页多少条
			$scope.last_page = parseInt(50); //总页数
			$scope.array_page = [];
			for (var i = 0; i < $scope.last_page; i++) {
				$scope.array_page.push(i + 1);
			}
		}
		$scope.getData(1);


		//输入页码跳转
		$scope.jump = function(last, num, cur) {
			if (!num || num <= 0) {
				$scope.jumpNumber = cur;
				layer.msg("请输入有效页码");
				return;
			}
			if ((Number(num) > Number(last))) {
				$scope.jumpNumber = cur;
				layer.msg('输入错误,共' + last + '页');
				return;
			}
			if (!/^\+?[1-9][0-9]*$/.test(num)) {
				$scope.jumpNumber = cur;
				layer.msg('页码输入错误');
				return;
			}

			if (cur != num) {
				$scope.getData(num);
			}
		}

		//上一页
		$scope.prevPage = function(cur) {
			$scope.prev = cur - 1;
			if ($scope.prev != 0) {
				$scope.getData($scope.prev);
			}
		}

		//下一页
		$scope.nextPage = function(cur, last) {
			$scope.next = cur + 1;
			if ($scope.next <= last) {
				$scope.getData($scope.next);
			}
		}

	})

	angular.bootstrap(document, ['myApp']);

});