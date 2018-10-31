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
					string/json类型转换
               				 </blockquote>
				<figure class="code-box mt20">
<pre>
json字符串转json对象：JSON.parse(jsonstr);

json对象转json字符串：JSON.stringify(jsonObj); 
</pre>
				</figure>

				<blockquote class="text-quote mt20">
					js 传递 json
				</blockquote>
				<figure class="code-box mt20">
<pre>
如：想ss('obj')结果变成了ss('[onject object]')这样的情况处理办法

1.先JSON.stringify(json)

2.将双引号变成单引号replace(/\"/g,"'")

3.将括号里的单引号除掉

4.function 直接获取到json对象，且不需要evel

例如：

拼接html部分：

<xmp>btn += '<a class="delecls" onclick="deleRow('+JSON.stringify(rowData).replace(/\"/g,"'")+')" href="javascript:void(0)" title="删除"></a>'；</xmp>
</pre>
				</figure>

				<blockquote class="text-quote mt20">
					判断图片是否加载完成
               				 </blockquote>
				<figure class="code-box mt20">
<pre>
<xmp><img id="id_image" src=""></xmp>
$('#id_image').attr('src','ad.jpg').load(function(){

	alert('This image had been loaded');

})
</pre>
				</figure>

				<blockquote class="text-quote mt20">
					某个元素是否可见
               				 </blockquote>
				<figure class="code-box mt20">
<pre>
<xmp><img id="id_image" src=""></xmp>
if($('#textClone').is(':visible')){
	console.log(111);
}
</pre>
				</figure>

				<blockquote class="text-quote mt20">
					某个元素是否可见
               				 </blockquote>
				<figure class="code-box mt20">
<pre>
<xmp><img id="id_image" src=""></xmp>
if($('#textClone').is(':visible')){
	console.log(111);
}
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