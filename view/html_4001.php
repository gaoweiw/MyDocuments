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
					html5笔记
				</blockquote>
				<figure class="code-box mt20">
					<pre>
<h2 class="text-bold text-18">HTML5全局属性</h2>
	1.accesskey 带有指定快捷的超链接

		<a href="http://www.baidu.com" target="_blank" accesskey="b">百度</a><br/>
		<a href="https://www.ftxmall.com" target="_blank" accesskey="f">福天下</a>

		<b>注释</b>：请使用Alt + accessKey (或者 Shift + Alt + accessKey) 来访问带有指定快捷键的元素。

	2.contenteditable 让用户哪修改页面上的内容

		<span contenteditable="true">你可以修改这里的文字</span>

		<span contenteditable="false">你不可以修改这里的文字</span>

<h2 class="text-bold text-18">常用元素及其说明</h2>
	1.  文本元素
	<table class="table-responsive" border="1">
	<tbody>
		<tr>
			<th>元素</th>
			<th>说明</th>
			<th>类型</th>
			<th>是否新增</th>
		</tr>
		<tr>
			<td>a</td>
			<td>生成超链接</td>
			<td>短语，流</td>
			<td></td>
		</tr>
		<tr>
			<td>a</td>
			<td>生成超链接</td>
			<td>短语，流</td>
			<td></td>
		</tr>
		<tr>
			<td>abbr</td>
			<td>缩略语</td>
			<td>短语</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>b</td>
			<td>不带强调或着重意味的标记一段文字</td>
			<td>短语</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			 <td>br</td>
			 <td>换行</td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>cite</td>
			 <td> 表示其他作品的标题 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>code</td>
			 <td> 表示计算机代码片段 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>del</td>
			 <td> 表示从文档中删除的文字 </td>
			 <td> 短语，流 </td>
			 <td> 是 </td>
			</tr>
			<tr>
			 <td>dfn</td>
			 <td> 表示术语定义 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>em</td>
			 <td> 标志着重强调一段文字 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>i</td>
			 <td> 表示与周边内容兼容不同的一段文字，比如来自另一种语言 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>ins</td>
			 <td> 表示加入文档的文字 </td>
			 <td> 短语，流 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>kbd</td>
			 <td> 表示用户输入内容 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>mark</td>
			 <td> 表示一段因为与上下文中另一词语相关而突出的现实的内容 </td>
			 <td> 短语 </td>
			 <td> 是 </td>
			</tr>
			<tr>
			 <td>q</td>
			 <td> 表示引自他处的内容 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>rp</td>
			 <td> 与ruby元素结合使用，标记括号 </td>
			 <td> 短语 </td>
			 <td> 是 </td>
			</tr>
			<tr>
			 <td>rt</td>
			 <td> 与ruby元素结合使用，标记注音符号 </td>
			 <td> 短语 </td>
			 <td> 是 </td>
			</tr>
			<tr>
			 <td>ruby</td>
			 <td> 表示位于表意文字上方或右方的注音符号 </td>
			 <td> 短语 </td>
			 <td> 是 </td>
			</tr>
			<tr>
			 <td>s</td>
			 <td> 表示文字已不在准确 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>samp</td>
			 <td> 表示计算机程序输出内容 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>small</td>
			 <td> 表示小号字体内容 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>span</td>
			 <td> 一个没有自己语意的通用元素，可以用在希望引入一些全局属性却又不想引入额外语义的情况 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>strong</td>
			 <td> 表示重要内容 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>sub</td>
			 <td> 表示下标文字 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>sup</td>
			 <td> 表示上标文字 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>time</td>
			 <td> 表示时间或日期 </td>
			 <td> 短语 </td>
			 <td> 是 </td>
			</tr>
			<tr>
			 <td>u</td>
			 <td> 不带强调或者着重意味的标记一段文字 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>var</td>
			 <td> 表示程序或计算机系统中的变量 </td>
			 <td> 短语 </td>
			 <td> &nbsp; </td>
			</tr>
			<tr>
			 <td>wbr</td>
			 <td> 表示可安全换行的地方 </td>
			 <td> 短语 </td>
			 <td> 是 </td>
			</tr>
		</tbody>
	</table>

	2.对内容分组

	<table class="table-responsive" border="1">
		<tbody>
			<tr>
			 <td> 元素 </td>
			 <td> 说明 </td>
			 <td> 类型 </td>
			 <td> 是否新增 </td>
			</tr>
			<tr>
			 <td> blockquote </td>
			 <td>表示引自他处的大段内容</td>
			 <td>流</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> dd </td>
			 <td>在dl元素之中表示定义</td>
			 <td>无</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> div </td>
			 <td>一个没有任何既定含义的通用元素，是span元素在流元素中的对应物</td>
			 <td>流</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> dl </td>
			 <td>表示包含一系列术语和定义的说明列表</td>
			 <td>流</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> dt </td>
			 <td>在dl之中表示术语</td>
			 <td>无</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> figcaption </td>
			 <td>表示figure元素的标题</td>
			 <td>无</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> figure </td>
			 <td>表示图片</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> pre </td>
			 <td>表示其格式应被保留的内容</td>
			 <td>流</td>
			 <td> </td>
			</tr>
		</tbody>
	</table>

	3.划分内容

	<table class="table-responsive" border="1">
		<tbody>
			<tr>
			 <td> 元素 </td>
			 <td> 说明 </td>
			 <td> 类型 </td>
			 <td> 是否新增 </td>
			</tr>
			<tr>
			 <td> address </td>
			 <td>表示文档或artice的联系信息</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> artice </td>
			 <td>表示一段独立的内容</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> aside </td>
			 <td>表示与周边内容稍有牵扯的内容</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> details </td>
			 <td>生成一块区域，用户将其展开可以获取更多细节知识</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> footer </td>
			 <td>表示尾部</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> header </td>
			 <td>表示首部</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> hgroup </td>
			 <td>将一组标题组织一起，以便文档大纲只显示其中的一个标题</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> nav </td>
			 <td>表示有意集中一起的导航元素</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> section </td>
			 <td>表示一个重要的概念或主题</td>
			 <td>流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> summary </td>
			 <td>用在details元素中，表示该元素内容的标题或说明</td>
			 <td>无</td>
			 <td>是</td>
			</tr>
		</tbody>
	</table>

	4.嵌入内容
	
	<table class="table-responsive" border="1">
		<tbody>
			<tr>
			 <td> 元素 </td>
			 <td> 说明 </td>
			 <td> 类型 </td>
			 <td> 是否新增 </td>
			</tr>
			<tr>
			 <td> area </td>
			 <td>表示一个用于客户端分区相应的区域</td>
			 <td>短语</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> audio </td>
			 <td>表示一个音频资源</td>
			 <td>无</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> canvas </td>
			 <td>生成一个动态的图形画布</td>
			 <td>短语，流</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> embed </td>
			 <td>用插件在HTML文档中嵌入内容</td>
			 <td>短语</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> iframe </td>
			 <td>通过创建一个浏览上下文在一个文档中嵌入另一个文档</td>
			 <td>短语</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> map </td>
			 <td>定义客户端分区响应图</td>
			 <td>短语，流</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> meter </td>
			 <td>嵌入数值在许可值范围背景中的图形表示</td>
			 <td>短语</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> object </td>
			 <td>在HTML文档中嵌入内容，也可用于生产浏览上下文和生成客户端分区响应图</td>
			 <td>短语，流</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> param </td>
			 <td>表示将通过object元素传递给插件的参数</td>
			 <td>无</td>
			 <td>&nbsp;</td>
			</tr>
			<tr>
			 <td> progress </td>
			 <td>嵌入目标进展或任务情况的图形表示</td>
			 <td>短语</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> source </td>
			 <td>表示媒体资源</td>
			 <td>无</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> svg </td>
			 <td>表示结构化矢量内容</td>
			 <td>无</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> track </td>
			 <td>表示媒体的附加轨道（例如字幕）</td>
			 <td>无</td>
			 <td>是</td>
			</tr>
			<tr>
			 <td> video </td>
			 <td>表示视频资源</td>
			 <td>无 </td>
			 <td>是</td>
			</tr>
		</tbody>
	</table>
	
</pre>
				</figure>
		<p>例子：</p><br>

		<label> abbr: </label><p>The <abbr title="People's Republic of China">PRC</abbr> was founded in 1949.</p>
		<br>


		<label> b: </label><p>这是普通文本 - <b>这是粗体文本</b>。</p>
		<br>


		<label> cite: </label><p><cite>《富春山居图》</cite>由黄公望始画于至正七年(1347)，于至正十年完成。</p>
		<br>


		<label> code: </label><p>
		下面是代码，等宽文字显示。
		<code>
			function helloworld(){
				alert("Hello World!");
			}
		</code>
		</p>
		<br>


		<label> del: </label><p><del>我是被删掉的话</del>，文字上会有条线。</p>
		<br>


		<label> i: </label><p>汉语：你好。 俄语：<i> Привет </i>。现实上为斜体。</p>
		<br>


		<label> ins: </label><p>这件商品现在是 <del>100元</del> <ins>50元</ins> 一件。搭配del使用</p>
		<br>


		<label> kbd: </label><p>常用来显示计算机输出<kbd>Keyboard input</kbd>。现实上是等宽字体。</p>
		<br>


		<label> mark: </label><p>Do not forget to buy <mark>milk</mark> today.</p>
		<br>


		<label> ruby: </label><p>在东亚使用，显示的是东亚字符的发音。</p>
		<ruby>
		 漢 <rt>ㄏㄢˋ </rt>
		</ruby>
		<br>


		<label> samp: </label><p>常用来显示计算机输出<samp>Sample input</samp>。现实上是等宽字体。</p>
		<br>


		<label> small: </label><p><small>This text is small</small></p>
		<br>


		<label> sub: </label><p>This text contains
		<sub>subscript</sub>. ex: H<sub>2</sub>O</p>
		<br>


		<label> sup: </label><p>This text contains
		<sup>superscript</sup>. ex: 1230 = 1.23 * 10<sup>3</sup>.</p>
		<br>


		<label> time: </label>
		<p>我们在每天早上 <time>9:00</time> 开始营业。</p>
		<p>
		我在 <time datetime="2008-02-14">情人节</time> 有个约会。
		</p>
		<br>


		<label> var&pre: </label>
		<p>pre 标签很适合显示计算机代码：</p>
		<p>var 标签斜体显示变量：</p>
<pre>	function HelloWorld(){
		return "Hello World";
	}
	var <var style="color:red" >test</var> = HelloWorld();
	alert(test);</pre>
		<br>


		<label> wbr: </label><p>
		如果想学习 AJAX，那么您必须熟悉 XML<wbr>Http<wbr>Request 对象。
		</p>
		<p>当正常情况下英文宽度过小，不足以在行末书写完一个词时，就将行末整个词放到下一行，实现换行，但是加入上面位置的<wbr>时，软换行就能收主动拆分单词.（IE系列除了9都不支持，其他都支持）。</p>
		<br>

			<label> blockquote:</label>
			<p>
			Here comes a long quotation:
			<blockquote>
			This is a long quotation. This is a long quotation. This is a long quotation. This is a long quotation. This is a long quotation.
			</blockquote>
			请注意，浏览器在 blockquote 元素前后添加了换行，并增加了外边距。
			</p>
			<br>


			<label> figure:</label>
			<p>上海卢浦大桥是当今世界第一钢结构拱桥，是世界上跨度最大的拱形桥。它也是世界上首座完全采用焊接工艺连接的大型拱桥（除合拢接口采用栓接外），现场焊接焊缝总长度达4万多米，接近上海市内环高架路的总长度。卢浦大桥像澳大利亚悉尼的海湾大桥一样具有旅游观光的功能。</p>

			<figure>
				<figcaption>黄浦江上的的卢浦大桥</figcaption>
				<img src="http://www.w3school.com.cn/i/shanghai_lupu_bridge.jpg" width="350" height="234" />
			</figure>
			<br>

			
			<label> address:</label>
			<address>
				Written by <a href="mailto:webmaster@example.com">Donald Duck</a>.<br>
				Visit us at:<br>
				Example.com<br>
				Box 564, Disneyland<br>
				USA
			</address>
			<br>


			<label> artice:</label>
			<article>
				<h1>Internet Explorer 9</h1>
				<p>Windows Internet Explorer 9（简称 IE9）于 2011 年 3 月 14 日发布.....</p>
			</article>
			<br>


			<label> aside:</label>
			<p>Me and my family visited The Epcot center this summer.</p>
			<aside>
			<h4>Epcot Center</h4>
			The Epcot Center is a theme park in Disney World, Florida.
			</aside>
			<br>


			<label> details:<small>（仅chrome&Safari支持）</small></label>
			<details>
				<summary class="mouse-hand">Copyright 2011.</summary>
				<p>All pages and graphics on this web site are the property of W3School.</p>
			</details>
			<br>


			<label> footer:</label>
			<footer>
				<p>Posted by: W3School</p>
				<p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
			</footer>
			<br>
			
			
			<p>这是常识：</p><br/>

			<ol start="1" class="mb50">
				<li>ico小图标<br>
					<xmp><link rel="stylesheet" type="text/css" href="https://s.ftx8.cn/favicon.ico" type="image/ico" sizes="16*16"></xmp>
				</li>
				<li>base：本网页超链接  如果不是http:// 开头 都会给它加上 base的href <br>
					<xmp><base href="http://gaowei.com/" target="_blank"></xmp>
				</li>
				<li>script 引入的  defer(页面加载完后执行) & async（异步同时执行）<br>
<xmp>
	<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async></script>
	<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" defer></script>
</xmp>
				</li>
				<li>menu:<br>
<xmp>
	<menu type="toolbar" label="Munu">
		<li>red</li>
		<li>blue</li>
	</menu>
	<menu type="contextmenu" label="Munu">
		<li>red</li>
		<li>blue</li>
	</menu>
	<menu type="list" label="Munu">
		<li>red</li>
		<li>blue</li>
	</menu>
</xmp>
				</li>
				<li>内嵌css<br>
<xmp>
	<div>
		<style type="text/css" scoped>
			h1{color:red;}
			p{color:blue;}
		</style>
		<h1> test 内嵌css</h1>
		<p> test 内嵌css</p>
	</div>
</xmp>
				</li>
				<li>iframe:  seamless 用于iframe不会产生边框和边距；  sandbox:内嵌框架的安全级别;1.会禁止提交表单 2.会禁止javascript 脚本 3.内嵌的页面为异源<br>
<!-- <xmp> -->
	<iframe seamless srcdoc="<h1>helloworld</h1>" sandbox src="http://www.baidu.com"></iframe>
<!-- </xmp> -->
				</li>

				<li>一些全局属性：  tabindex  = "1" (Tab切换的顺序)  spellcheck = "true"(适用于textarea  用于纠错)  contenteditable = "true"（可修改的）<br>
					<script type="text/javascript">
						// window.document.designMode = 'on';//js允许也变可进行修改
					</script>
					<form  action="html_4001_submit" data-type="comment" method="get" accept-charset="utf-8">
						<label hidden><input type="text" name="" value="这个隐藏的"></label>

						<p class="mb10">
							<label><span>姓名：</span><input type="text" name="" tabindex="1"></label>
						</p>
						<p class="mb10">
							<label><span>电话：</span><input type="text" name="" tabindex="4"></label>
						</p>
						<p class="mb10">
							<label><span>邮箱：</span><input type="text" name="" tabindex="3"></label>
						</p>
						<p class="mb10">
							<span style="vertical-align: top">留言：</span>
							<textarea  tabindex="2" spellcheck="true" cols="60" rows="10"></textarea>
						</p>
						<p class="mb10">
							<table contenteditable="true">
								<caption>table</caption>
								<thead>
									<tr>
										<th>header</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>data</td>
									</tr>
								</tbody>
							</table>
						</p>
					</form>
				</li>
				<li>html5代码基本结构<br>
<xmp>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>html5代码基本结构</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<header id="header" class="">
			<nav>
				<ul>
					<li><a href="" title=""></a></li>
				</ul>
			</nav>
		</header>
		<section>
			
		</section>

		<section>
			
		</section>

		<section>
			
		</section>

		<footer>
			
		</footer>
	</body>
	</html>
</xmp>
				</li>
			</ol>

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