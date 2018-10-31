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
					sublime Text 快捷键
			                    	<span class="fr mouse-hand text-12" onclick="jQuery('#printText').print()"><i class="fa fa-print" aria-hidden="true"></i> 打印</span>
			                </blockquote>
				<section class="nodebook-4A" id="printText">
					<div class="nodebook-text font-ks" id="sublimeText"></div>
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
	seajs.use([base.jsUrl + 'plug_in/print/js/jQuery.print.js',base.jsUrl + 'base/api_jquery',base.jsUrl + 'word_50002001',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>