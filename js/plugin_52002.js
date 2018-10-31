define(function(require, exports, module) {

	var app = angular.module('myApp', ['theme', 'nav']);


	app.controller('myCtrl', function($scope) {
		$.Gsms({
			smsBtn: $('#send_sms'),
			requestUrl: base.jsonUrl + 'sms/sms.json',
			requestData:{
				name:'张三',
				age:12
			}
		});

		$.Gsms({
			smsBtn: $('#send_sms_1'),
			requestUrl: base.jsonUrl + 'sms/sms.json',
		});

		console.log($.Guuid(2));
	})
	angular.bootstrap(document, ['myApp']);
});