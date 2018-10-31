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
			<div class="centre-content centre-content-footer p-0-30">
				<!--本页样式-->
				<style>

				</style>
				<!--本页样式-->
				<blockquote class="text-quote mt20">
					webstorm
			    </blockquote>
				<figure class="code-box mt20">
<pre><h2 class="text-bold">快捷键</h2>
文件重命名：shift+F6
</pre>
				</figure>

			</div>
		</div>
		<!--底部-->
		<div class="footer br-s text-12 p-10-0">底部{{now_id}}</div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>