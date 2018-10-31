<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php');?>
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

		                <blockquote class="text-quote red mt20">
		                    angular js 数组清空后，视图没有马上更新
		                </blockquote>
			<figure class="code-box mt20 gray3 no-unl">
				<pre>$scope.$apply();//需要手动刷新</pre>
                		</figure>


                		 <blockquote class="text-quote red mt20">
		                    存储旧数据，提交的时候新旧数据一起提交
		                </blockquote>
			<figure class="code-box mt20 gray3 no-unl">
				<pre>可以先 =》json对象转json字符串：JSON.stringify(jsonObj);    提交时候  在json字符串转json对象 JSON.parse(jsonstr);  </pre>
                		</figure>

				
                
			</div>
		</div>
		<!--底部-->
		
	</div>
<?php include('tpl/footer.php'); ?>
<script>
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>