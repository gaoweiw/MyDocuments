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
			                    	火狐浏览器下载地址
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="http://ftp.mozilla.org/pub/firefox/releases/" target="_blank">http://ftp.mozilla.org/pub/firefox/releases/</a></pre>
			                </figure>

			                <blockquote class="text-quote darkgreen mt20">
			                    Font Awesome 一套绝佳的图标字体库和CSS框架
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="http://fontawesome.dashgame.com/" target="_blank">http://fontawesome.dashgame.com</a></pre>
					<pre><a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a></pre>
			                </figure>

			                <blockquote class="text-quote darkgreen mt20">
			                    前端在线工具站（文件转 Base64）
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="http://www.css-js.com/tools/compressor.html" target="_blank">http://www.css-js.com/tools/compressor.html</a></pre>
				</figure>

				<blockquote class="text-quote darkgreen mt20">
			                    css3PIE(解决IE6到IE9不支持CSS3)
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="http://css3pie.com/download/" target="_blank">http://css3pie.com/download/</a></pre>
				</figure>

				<blockquote class="text-quote darkgreen mt20">
			                   Buttons 是一个高度可定制的、免费并且开源的按钮 CSS 样式库。
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="http://www.bootcss.com/p/buttons/" target="_blank">http://www.bootcss.com/p/buttons/</a></pre>
				</figure>
							
				<blockquote class="text-quote darkgreen mt20">
			                    Layui
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre class="lh-32">layui：<a href="http://www.layui.com/doc/" target="_blank">http://www.layui.com/doc/</a></pre>
					<pre class="lh-32">弹窗layer：<a href="http://layer.layui.com/" target="_blank">http://layer.layui.com/</a></pre>
					<pre class="lh-32">日期laydate：<a href="http://www.layui.com/laydate/" target="_blank">http://www.layui.com/laydate/</a></pre>
				</figure>
				
				<blockquote class="text-quote darkgreen mt20">
			                    Highcharts图表
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="https://www.hcharts.cn/demo/highcharts" target="_blank">https://www.hcharts.cn/demo/highcharts</a></pre>
				</figure>

				<blockquote class="text-quote darkgreen mt20">
			                    node下载
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="https://nodejs.org/dist/" target="_blank">https://nodejs.org/dist/</a></pre>
				</figure>

				<blockquote class="text-quote darkgreen mt20">
			                    typeScript入门视频
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="http://www.imooc.com/learn/763" target="_blank">http://www.imooc.com/learn/763</a></pre>
				</figure>

				<blockquote class="text-quote darkgreen mt20">
			                    angular下载地址
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre class="lh-32">版本下载：<a href="https://code.angularjs.org/" target="_blank">https://code.angularjs.org/</a></pre>
					<pre class="lh-32">英文文档：<a href="https://docs.angularjs.org/api/ng/service/" target="_blank">https://docs.angularjs.org/api/ng/service/</a></pre>
				</figure>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href="https://segmentfault.com/a/1190000009733649" target="_blank">angualr4学习地址：https://segmentfault.com/a/1190000009733649</a></pre>
			                </figure>

			                <blockquote class="text-quote darkgreen mt20">
			                    火狐浏览器版本下载
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre><a href=" http://ftp.mozilla.org/pub/firefox/releases/" target="_blank"> http://ftp.mozilla.org/pub/firefox/releases/</a></pre>
				</figure>
			</div>
		</div>
		<!--底部-->
		
	</div>
<?php include('tpl/footer.php');?>
<script>
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>