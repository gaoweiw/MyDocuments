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
			<div class="centre-content centre-content-footer p-0-30 check-on">
                
                <blockquote class="text-quote mt20">
                    刷新页面
                </blockquote>
				<figure class="code-box mt20">
<pre>1：reload 方法，该方法强迫浏览器刷新当前页面。

    语法：location.reload([bForceGet])  

    参数： bForceGet， 可选参数， 默认为 false，从客户端缓存里取当前页。true, 则以 GET 方式，从服务端取最新的页面, 相当于客户端点击 F5("刷新")
    <hr>
2：replace 方法，该方法通过指定URL替换当前缓存在历史里（客户端）的项目，因此当使用replace方法之后，你不能通过“前进”和“后退”来访问已经被替换的URL。

    语法： location.replace(URL)  

    通常使用： location.reload() 或者是 history.go(0) 来做。
    
    此方法类似客户端点F5刷新页面，所以页面method="post"时，会出现"网页过期"的提示。

    因为Session的安全保护机制。

    当调用 location.reload() 方法时， aspx页面此时在服务端内存里已经存在， 因此必定是 IsPostback 的。

    如果有这种应用： 需要重新加载该页面，也就是说期望页面能够在服务端重新被创建，期望是 Not IsPostback 的。

    这里，location.replace() 就可以完成此任务。被replace的页面每次都在服务端重新生成。

    代码： location.replace(location.href);

    返回并刷新页面：

        location.replace(document.referrer);
    <hr>
3：自动刷新页面的方法:

    页面自动刷新：把如下代码加入&lt;head&gt;区域中 &lt;meta http-equiv="refresh" content="20"&gt;

    页面自动跳转：把如下代码加入&lt;head&gt;区域中 &lt;meta http-equiv="refresh" content="20;url=www.baidu.com"&gt;
    <hr>
4：页面自动刷新js版

    function myrefresh()
    {
        window.location.reload();
    }
    setTimeout('myrefresh()',1000); //指定1秒刷新一次

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