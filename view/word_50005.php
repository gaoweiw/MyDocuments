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
					让cookie 过期
               				 </blockquote>
				<figure class="code-box mt20">
<pre>
	var date = new Date();

	date.setTime(date.getTime()+(1*60*1000));    <span class="green">//n*60*1000  n=分钟</span>

	$.cookie('cookiet','foo',{expires:date});
</pre>
				</figure>
				<blockquote class="text-quote mt20">
					本地存储的比较
               				 </blockquote>
				<div class="gray3 text-14 m-20-0 text-l-s-1" style="line-height: 1.6">

					<h3 id="articleHeader1" class="text-20 m-20-0">Cookie</h3>

					<p>Cookie 是小甜饼的意思。顾名思义，cookie 确实非常小，它的大小限制为4KB左右，是网景公司的前雇员 Lou Montulli 在1993年3月的发明。它的主要用途有保存登录信息，比如你登录某个网站市场可以看到“记住密码”，这通常就是通过在 Cookie 中存入一段辨别用户身份的数据来实现的。</p>

					<h3 id="articleHeader2" class="text-20 m-20-0">localStorage</h3>

					<p>localStorage 是 HTML5 标准中新加入的技术，它并不是什么划时代的新东西。早在 IE 6 时代，就有一个叫 userData 的东西用于本地存储，而当时考虑到浏览器兼容性，更通用的方案是使用 Flash。而如今，localStorage 被大多数浏览器所支持，如果你的网站需要支持 IE6+，那以 userData 作为你的 polyfill 的方案是种不错的选择。</p>

					<div class="table-wrap m-10-0">
						<table>
							<thead>
								<tr>
									<th>特性</th>
									<th>Chrome</th>
									<th>Firefox (Gecko)</th>
									<th>Internet Explorer</th>
									<th>Opera</th>
									<th>Safari (WebKit)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>localStorage</td>
									<td>4</td>
									<td>3.5</td>
									<td>8</td>
									<td>10.50</td>
									<td>4</td>
								</tr>
								<tr>
									<td>sessionStorage</td>
									<td>5</td>
									<td>2</td>
									<td>8</td>
									<td>10.50</td>
									<td>4</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 id="articleHeader3" class="text-20 m-20-0">sessionStorage</h3>

					<p>sessionStorage 与 localStorage 的接口类似，但保存数据的生命周期与 localStorage 不同。做过后端开发的同学应该知道 Session 这个词的意思，直译过来是“会话”。而 sessionStorage 是一个前端的概念，它只是可以将一部分数据在当前会话中保存下来，刷新页面数据依旧存在。但当页面关闭后，sessionStorage 中的数据就会被清空。</p>

					<h2 id="articleHeader4" class="text-20 m-20-0">三者的异同</h2>

					<div class="table-wrap m-10-0">
						<table>
							<thead>
								<tr>
									<th>特性</th>
									<th>Cookie</th>
									<th>localStorage</th>
									<th>sessionStorage</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>数据的生命期</td>
									            <td>可设置失效时间，默认是关闭浏览器后失效</td>
									            <td>除非被清除，否则永久保存</td>
									            <td>仅在当前会话下有效，关闭页面或浏览器后被清除</td>
									</tr>
									<tr>
										<td>存放数据大小</td>
										<td>4K左右</td>
										<td>一般为5MB</td>
										<td>一般为5MB</td>
									</tr>
									<tr>
										<td>与服务器端通信</td>
										<td>每次都会携带在HTTP头中，如果使用cookie保存过多数据会带来性能问题</td>
										<td>仅在客户端（即浏览器）中保存，不参与和服务器的通信</td>
										<td>仅在客户端（即浏览器）中保存，不参与和服务器的通信</td>
									</tr>
									<tr>
										<td>易用性</td>
									            	<td>需要程序员自己封装，源生的Cookie接口不友好</td>
									            	<td>源生接口可以接受，亦可再次封装来对Object和Array有更好的支持</td>
									<td>源生接口可以接受，亦可再次封装来对Object和Array有更好的支持</td>
							        	</tr>
							</tbody>
						</table>
					</div>
					<h3 id="articleHeader5" class="text-22">应用场景</h3>

					<p>有了对上面这些差别的直观理解，我们就可以讨论三者的应用场景了。</p>

					<p>因为考虑到每个 HTTP 请求都会带着 Cookie 的信息，所以 Cookie 当然是能精简就精简啦，比较常用的一个应用场景就是判断用户是否登录。针对登录过的用户，服务器端会在他登录时往 Cookie 中插入一段加密过的唯一辨识单一用户的辨识码，下次只要读取这个值就可以判断当前用户是否登录啦。曾经还使用 Cookie 来保存用户在电商网站的购物车信息，如今有了 localStorage，似乎在这个方面也可以给 Cookie 放个假了~</p>

					<p>而另一方面 localStorage 接替了 Cookie 管理购物车的工作，同时也能胜任其他一些工作。比如HTML5游戏通常会产生一些本地数据，localStorage 也是非常适用的。如果遇到一些内容特别多的表单，为了优化用户体验，我们可能要把表单页面拆分成多个子页面，然后按步骤引导用户填写。这时候 sessionStorage 的作用就发挥出来了。</p>

					<h2 id="articleHeader6">安全性的考虑</h2>

					<p>需要注意的是，不是什么数据都适合放在 Cookie、localStorage 和 sessionStorage 中的。使用它们的时候，需要时刻注意是否有代码存在 XSS 注入的风险。因为只要打开控制台，你就随意修改它们的值，也就是说如果你的网站中有 XSS 的风险，它们就能对你的 localStorage 肆意妄为。所以千万不要用它们存储你系统中的敏感数据。</p>
				</div>
				<blockquote class="text-quote mt20">
					localStorage和sessionStorage的方法
               				 </blockquote>
				<figure class="code-box mt20">
<pre>
<b>setItem存储value</b>

用途：将value存储到key字段
用法：.setItem( key, value)
代码示例：

	<span class="red">sessionStorage.setItem("key", "value"); 	localStorage.setItem("site", "js8.in");</span>

<b>getItem获取value</b>

用途：获取指定key本地存储的值
用法：.getItem(key)
代码示例：

	<span class="red">var value = sessionStorage.getItem("key"); 	var site = localStorage.getItem("site");</span>

<b>removeItem删除key</b>

用途：删除指定key本地存储的值
用法：.removeItem(key)
代码示例：

	<span class="red">sessionStorage.removeItem("key"); 	localStorage.removeItem("site");</span>

<b>clear清除所有的key/value</b>

用途：清除所有的key/value
用法：.clear()
代码示例：

	<span class="red">sessionStorage.clear(); 	localStorage.clear();</span>

<b>其他操作方法：点操作和[]</b>

web Storage不但可以用自身的setItem,getItem等方便存取，也可以像普通对象一样用点(.)操作符，及[]的方式进行数据存储，像如下的代码：

var storage = window.localStorage; storage.key1 = "hello"; storage["key2"] = "world"; console.log(storage.key1); console.log(storage["key2"]);

localStorage和sessionStorage的key和length属性实现遍历

sessionStorage和localStorage提供的key()和length可以方便的实现存储的数据遍历，例如下面的代码：

var storage = window.localStorage; for (var i=0, len = storage.length; i  <  len; i++){     var key = storage.key(i);     var value = storage.getItem(key);     console.log(key + "=" + value); }

<b>storage事件</b>

storage还提供了storage事件，当键值改变或者clear的时候，就可以触发storage事件，如下面的代码就添加了一个storage事件改变的监听：

if(window.addEventListener){ 	window.addEventListener("storage",handle_storage,false); }else if(window.attachEvent){ 	window.attachEvent("onstorage",handle_storage); } function handle_storage(e){ 	if(!e){e=window.event;}	 }
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