<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
	<div class="content ">
		<div class="body-inner br-s">
			<!--面包屑-->
			<div id="crumb" class="crumb br-s">
				<ul class="s-n text-12 text-l-s-1 gray6">
					<li><ng ng-bind="crumbsOne"></ng><i ng-if="crumbsTwo?true:false" class="fa fa-angle-right m-0-5"></i></li>
					<li><ng ng-bind="crumbsTwo"></ng><i ng-if="crumbsThree?true:false" class="fa fa-angle-right m-0-5"></i></li>		
					<li><ng ng-bind="crumbsThree"></ng></li>		
				</ul>
			</div>
			<!--内容-->
			<div class="centre-content p-0-30 check-on">
				<blockquote class="text-quote mt20">
			                	当浏览器的窗口大小被改变时触发的事件
			                </blockquote>
				<figure class="code-box mt20">
<pre>
window.onresize = function(){
    
}
</pre>
                			</figure>


                			<blockquote class="text-quote mt20">
			                	阻止浏览器右键
			                </blockquote>
				<figure class="code-box mt20">
<pre>
$(document).bind('contextmenu',function(e){return false;});
</pre>
                			</figure>


                			<blockquote class="text-quote mt20">
			                	js onmouseenter onmouseleave事件
			                </blockquote>
				<figure class="code-box mt20 clearfix">
<pre>

	<script type="text/javascript">
	$(document).ready(function(){
	  $("p").mouseenter(function(){
	    $("p").css("background-color","yellow");
	  });
	  $("p").mouseleave(function(){
	    $("p").css("background-color","#E9E9E4");
	  });
	});
	</script>
	
	<p style="background-color:#E9E9E4">请把鼠标指针移动到这个段落上。</p>
	<style>
.mouseenter-example {
    margin: 10px;
    float: left;
    text-align: center;
    background-color: lightgray;
}
.mouseenter-example p {
    background-color: white;
}
</style>
	<h3>该实例演示了 onmousemove, onmouseenter 和 onmouseover 的不同。</h3>
		<p> onmousemove 事件在鼠标移动到 div 元素上时触发。</p>
		<p> mouseenter 事件中有在鼠标指针进入 div 元素时触发。 </p>
		<p> onmouseover 事件在鼠标指针进入 div 元素时触发,在子元素上也会触发(p 和 span)。</p>
		<div class="clearfix">
			<div class="mouseenter-example" onmousemove="myMoveFunction()">
			  <p>onmousemove: <br> <span id="demo">鼠标移动到我这!</span></p>
			</div>
			<div class="mouseenter-example" onmouseenter="myEnterFunction()">
			  <p>onmouseenter: <br> <span id="demo2">鼠标移动到我这!</span></p>
			</div>
			<div class="mouseenter-example" onmouseover="myOverFunction()">
			  <p>onmouseover: <br> <span id="demo3">鼠标移动到我这!</span></p>
			</div>
		</div>
		
		<script>
		x = 0;
		y = 0;
		z = 0;
		function myMoveFunction() {
		    document.getElementById("demo").innerHTML = z+=1;
		}
		function myEnterFunction() {
		    document.getElementById("demo2").innerHTML = x+=1;
		}
		function myOverFunction() {
		    document.getElementById("demo3").innerHTML = y+=1;
		}
		</script>
	
</pre>
                			</figure>

			</div>
		</div>
		<!--底部-->
	</div>
<?php include('tpl/footer.php'); ?>
<script>
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
	window.onresize = function(){
		document.getElementById("info_jb51_net").innerHTML="宽度："+document.documentElement.clientWidth+"，高度："+document.documentElement.clientHeight;
	}
</script>
</body>
</html>