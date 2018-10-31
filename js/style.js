//input 样式
var input = $('body').find('.ui-input input');

for (var i = 0; i < input.length; i++) {
	$('.ui-input input').eq(i).focus(function() {
		this.parentNode.className += ' focus';
	})
	$('.ui-input input').eq(i).blur(function() {
		this.parentNode.className = this.parentNode.className.replace(' focus', '');
	})
}
