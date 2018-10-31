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

			  <blockquote class="text-quote mt20">
				My	account
			  </blockquote>
			  <figure class="code-box mt20 gray3 no-unl">
<pre>
GitHub <a href="https://github.com/login">https://github.com/login</a>  user:   gaowi  password:   gaowei79

Oracle <a href="https://www.oracle.com/index.html">https://www.oracle.com/index.html</a>  user:   1104943970@qq.com password:   Gaowei93521

百度统计<a href="https://https://tongji.baidu.com">https://tongji.baidu.com</a>  user:   gw93523 password:   GaoWei426934
<br>
<br>
网易账号：944599867@qq.com    password: gaowei426934

</pre>
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