define(function(require, exports, module) {
	
	var app = angular.module('myApp', []);

	app.controller('myCtrl', function($scope) {
		$scope.login = function(){
			window.location.href = base.wwwUrl + 'index.php';
		}
	})
	angular.bootstrap(document, ['myApp']);
});

