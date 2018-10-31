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
				
				<div class="text-16 m-20-0">
					<h2 class="m-10-0 gray3 text-24">简单自适应网站</h2>
					<p class="lh-32 m-10-0"></p>
					<a href="./formwork/formwork_1/" target="_blank" class="mt20"><img src="../image/project/collect/$1.png" alt="" class="w500"></a>
				</div>
				<hr class="hr-bg-orange">

				<div class="text-16 m-20-0">
					<h2 class="m-10-0 gray3 text-24">简易网站</h2>
					<p class="lh-32 m-10-0"></p>
					<a href="./formwork/formwork_2/" target="_blank" class="mt20"><img src="../image/project/collect/$2.png" alt="" class="w500"></a>
				</div>
				<hr class="hr-bg-orange">

				<div class="text-16 m-20-0">
					<h2 class="m-10-0 gray3 text-24">个人简历网站</h2>
					<p class="lh-32 m-10-0"></p>
					<a href="./formwork/formwork_3/" target="_blank" class="mt20"><img src="../image/project/collect/$3.png" alt="" class="w500"></a>
				</div>
				<hr class="hr-bg-orange">

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