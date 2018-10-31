define(function(require, exports, module) {

	var app = angular.module('myApp', ['theme', 'nav']);

	app.controller('myCtrl', function($scope) {

		JqueryAjax.get({url:'http://www.gaowei.com/MyDocuments/php/50002001.php',data:{a:'b'}}, function(data) {
			if(data && data.code == '0000'){
				var html = '';
				var bdata = data.data;
				html +='<p class="text-16 tc gray3">'+bdata.title+'</p>';

				for (var j = 0; j < bdata.text.length; j++) {
					
					if(j == bdata.text.length-1){
						html +='<p class="text-14 tr gray3">'+bdata.text[j]+'</p>';
					}else{
						if(!bdata.text[j].split('：')[1]){
							html +='<p class="text-14 gray3 text-l-s-1"><span class="w130 block text-bold red">'+bdata.text[j].split('：')[0]+'</span>';
						}else{
							html +='<p class="text-14 gray3 text-l-s-1"><span class="w130 block text-bold">'+bdata.text[j].split('：')[0]+'</span>：<span>'+ bdata.text[j].split('：')[1]+'</span></p>';
						}
					}
				}
				$('#sublimeText').html(html);
			}
		});
	})

	angular.bootstrap(document, ['myApp']);

});