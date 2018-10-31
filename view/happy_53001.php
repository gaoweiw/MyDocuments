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
			                <blockquote class="text-quote darkgreen mt20">
			                	张家界
			                    	<span class="fr mouse-hand text-12" onclick="jQuery('#printText').print()"><i class="fa fa-print" aria-hidden="true"></i> 打印</span>
			                </blockquote>
				<section class="nodebook-4A white-bgk" id="printText">
					<div class="nodebook-text font-ks">
						<p class="text-16 tc gray3">湖南张家界</p>
						<p class="text-12 gray3 text-l-s-1">10.1</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">成都-怀化（9月30号17:50-10月1号6:40）	<!-- ￥258 -->    </p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">怀化-张家界（10月1号10:30-10月1号14:30）	<!-- ￥95 --> </p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">住宿：张家界起飞线青年旅社  			<!-- ￥465 --> 四晚</p>
						<p class="text-12 gray3 text-l-s-1">10.2</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">休息</p>
						<p class="text-12 gray3 text-l-s-1">10.3</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">张家界天门山（7:00-15:00）	<!-- ￥245 --></p>
						<p class="text-12 gray3 text-l-s-1">10.4</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">张家界大峡谷（7:00-18:00）	<!-- ￥335 --></p>
						<p class="text-12 gray3 text-l-s-1">10.5</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">张家界-凤凰古镇（10月5号9:30）	<!-- ￥115 --></p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">住宿：凤凰WS太空舱青年旅社	<!-- ￥155 --></p>
						<p class="text-12 gray3 text-l-s-1">10.6</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">凤凰古镇-常德 (10月6号9:30)	<!-- ￥122 --></p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">住宿：普罗旺斯		<!-- ￥218 -->	两晚</p>
						<p class="text-12 gray3 text-l-s-1">10.7</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">常德瞎逛</p>
						<p class="text-12 gray3 text-l-s-1">10.8</p>
						<p class="text-14 gray3 text-l-s-1 t-in-2">常德-成都（10月8号20:47-10月9号13:30）<!-- ￥290 --></p>
						<?php  echo '<p class="text-14 gray3 tr text-l-s-1">'.date("Y-m-d").'</p>'?>
					</div>
				</section>
			</div>
		</div>
		<!--底部-->
	</div>
<?php include('tpl/footer.php'); ?>
<script>
	$(function(){
		$('#customCSS').attr('href','http://www.gaowei.com/MyDocuments/css/notebook/notebook.css');
	})
	seajs.use([base.jsUrl + 'plug_in/print/js/jQuery.print.js',base.jsUrl + 'base/api_jquery',base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>