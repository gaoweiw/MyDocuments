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
			<div class="centre-content p-0-30">
				<figure class="code-box mt20 text-22">
					<a href="min/media.html" target="_blank" class="gray6 no-unl">自适应页面布局</a><br/><br/>
					<a href="min/nav.html" target="_blank" class="gray6 no-unl">顶部菜单自适应</a><br/><br/>
					<a href="min/adaptive-design-demo/final.html" target="_blank" class="gray6 no-unl">自适应网页模板</a><br/><br/>
					<a href="min/pagination" target="_blank" class="gray6 no-unl">jquery 分页插件</a><br/><br/>
					<a href="min/jquery_fn" target="_blank" class="gray6 no-unl">jquery  fn 写法</a><br/><br/>
					<hr>

					<a href="min/fixed_scroll/index.html" target="_blank" class="gray6 no-unl">滚动固定</a><br/><br/>
					<a href="min/lazyload/" target="_blank" class="gray6 no-unl">lazyload</a><br/><br/>
				</figure>
			</div>
		</div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">
	// document.write('<script type="text/javascript" src="js文件地址">');

	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>