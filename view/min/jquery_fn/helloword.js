(function($){
	$.fn.myPlugin = function(){//隐藏
		this.fadeOut('normal');
	};

	$.fn.hoverElement = function(){//链式操作
		return this.each(function(){
			$(this).hover(
				function(){
					$(this).addClass('Add');
				},
				function(){
					$(this).removeClass("Remove");
				}

			);
		})
	};

	$.fn.textHover = function(options){//options 经常用这个表示有许多个参数。
		var defaultVal = {
			Text:'Your mouse is over',
			ForeColor:'red',
			BackColor:'gray'
		};

		var obj = $.extend(defaultVal,options);
		return this.each(function(){
			var selObject = $(this);//获取当前对象
			var oldText = selObject.text();//获取当前对象的text值
			var oldBgColor = selObject.css('background-color');//获取当前背景颜色
			var oldColor = selObject.css('color');//获取当前对象的字体颜色
			selObject.hover(
				function(){
					selObject.text(obj.Text);//进行赋值
					selObject.css("background-color", obj.BackColor);//进行赋值
					selObject.css("color", obj.ForeColor);//进行赋值 
				},
				function(){
					selObject.text(oldText);
					selObject.css("background-color", oldBgColor);
					selObject.css("color", oldColor); 
				}
			)

		});
	}

})(jQuery);