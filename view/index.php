<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
	<script src="https://unpkg.com/vue"></script>
	<style type="text/css">
	/*翻页*/
	.paging-box{width:auto;height:40px;float:right;letter-spacing:1px; margin-right: 50px;}
	.paging-box .p-btn{margin-right:10px;padding:3px 8px;background:#fff;margin-top:10px;cursor:pointer;}
	.paging-box .p-list{margin-top:10px;}
	.paging-box .p-list ul li{margin-right:10px;padding:3px 12px;background:#fff;cursor:pointer; float:left;list-style: none}
	.paging-box .p-jump{margin-top:10px; padding:3px 8px;}
	.paging-box .page-inp{border:1px solid #d2d2d2;width:30px;padding:0px 6px;line-height: normal;margin:0 10px;vertical-align:top;}
	.paging-box a.p-jump-btn{padding: 6px 8px; background:#fff;cursor:pointer; color:#666; text-decoration:none;}
	.paging-box a.p-jump-btn:hover{color:#333;}

	.paging-box .now-page{background-color:#009688 !important; color:#fff;}
	.paging-box .not-page{background-color:#cccccc; pointer-events: none;cursor: default; opacity: 0.6;}
	.paging-box .pading{padding:6px 8px;}
	</style>
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
					This is the home page
			                </blockquote>

				<figure class="code-box mt20">
				<img src="http://placehold.it/100x40">
				<pre>图片占位：http://placehold.it/100x40</pre>
				</figure>

			</div>
		</div>
		<!--底部-->
		<div class="footer br-s text-12">
			<div class="paging-box" ng-cloak>
				<div class="fl p-btn" ng-class="current == 1 || !current?'not-page':''" ng-click="current != 1?getData(1):''">首页</div>
				<div class="fl p-btn" ng-class="current == 1 || !current?'not-page':''" ng-click="current != 1?prevPage(current):''">上一页</div>
				<div class="fl p-list">
					<!--小于=5页-->
					<ul ng-show="last_page<=5">
						<li ng-repeat="p in array_page" ng-bind="p" ng-class="current == p?'now-page':''" ng-click="current != p?getData(p):''"></li>
					</ul>
					<!--大于5页-->
					<ul ng-show="last_page>5">
						<li ng-show="current>3">...</li>
						<li ng-show="p==current+2||p==current+1||p==current||p==current-1||p==current-2" ng-repeat="p in array_page" ng-bind="p" ng-class="current == p?'now-page':''" ng-click="current != p?getData(p):''"></li>
						<li ng-show="current<last_page-2">...</li>
					</ul>
				</div>
				<div class="fl p-btn" ng-class="current == last_page || last_page == 0?'not-page':''" ng-click="current != last_page?nextPage(current,last_page):''">下一页</div>
				<div class="fl p-btn" ng-class="current == last_page || last_page == 0?'not-page':''" ng-click = "getData(last_page)">尾页</div>
				<div class="fl p-jump">共<ng ng-bind="last_page"></ng>页,跳转至<input class="page-inp" type="text" ng-value="current" ng-model="jumpNumber" /><a href="javascript:void(0)" ng-class="last_page == 0 || !current?'not-page pading':'p-jump-btn'" ng-click="jump(last_page,jumpNumber,current)">确定</a></div>
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