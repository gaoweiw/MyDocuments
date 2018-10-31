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

				<blockquote class="text-quote mt20">
					浏览器引擎前缀
                </blockquote>
				<figure class="code-box mt20">
<pre>
-moz-     	/* 火狐等使用Mozilla浏览器引擎的浏览器 */

-webkit-  	/* Safari, 谷歌浏览器等使用Webkit引擎的浏览器 */

-o-       		/* Opera浏览器(早期) */

-ms-      	/* Internet Explorer (不一定) */ 
</pre>
				</figure>

				<blockquote class="text-quote mt20">
					条件注释判断浏览器版本
                </blockquote>
				<figure class="code-box mt20">
<pre>
&lt;!--[if !IE]&gt; 除IE外都可识别 &lt;![endif]--&gt;

&lt;!--[if IE]&gt; 所有的IE可识别 &lt;![endif]--&gt;

&lt;!--[if IE 6]&gt; 仅IE6可识别 &lt;![endif]--&gt;

&lt;!--[if lt IE 6]&gt; IE6以及IE6以下版本可识别 &lt;![endif]--&gt;

&lt;!--[if gte IE 6]&gt; IE6以及IE6以上版本可识别 &lt;![endif]--&gt;

&lt;!--[if IE 7]&gt; 仅IE7可识别 &lt;![endif]--&gt;

&lt;!--[if lt IE 7]&gt; IE7以及IE7以下版本可识别 &lt;![endif]--&gt;

&lt;!--[if gte IE 7]&gt; IE7以及IE7以上版本可识别 &lt;![endif]--&gt;

&lt;!--[if IE 8]&gt; 仅IE8可识别 &lt;![endif]--&gt;
</pre>
				</figure>

				<blockquote class="text-quote mt20">
					CSS3 选择器
				</blockquote>
				
				<table class="table-responsive">
					<tbody>
						<tr>
							<th>选择器</th>
							<th>例子</th>
							<th>例子描述</th>
							<th>CSS</th>
						</tr>

						<tr>
							<td>[attribute]</td>
							<td>[target]</td>
							<td>选择带有 target 属性所有元素。</td>
							<td>2</td>
						</tr>

						<tr>
							<td>[attribute=value]</td>
							<td>[target=_blank]</td>
							<td>选择 target="_blank" 的所有元素。</td>
							<td>2</td>
						</tr>

						<tr>
							<td>[attribute~=value]</td>
							<td>[title~=flower]</td>
							<td>选择 title 属性包含单词 "flower" 的所有元素。</td>
							<td>2</td>
						</tr>

						<tr>
							<td>[attribute|=value]</td>
							<td>[lang|=en]</td>
							<td>选择 lang 属性值以 "en" 开头的所有元素。</td>
							<td>2</td>
						</tr>

						<tr>
							<td>:first-letter</td>
							<td>p:first-letter</td>
							<td>选择每个 &lt;p&gt; 元素的首字母。</td>
							<td>1</td>
						</tr>

						<tr>
							<td>:link</td>
							<td>a:link</td>
							<td>选择所有未被访问的链接。</td>
							<td>1</td>
						</tr>
						
						<tr>
							<td>:visited</td>
							<td>a:visited</td>
							<td>选择所有已被访问的链接。</td>
							<td>1</td>
						</tr>
						
						<tr>
							<td>:active</td>
							<td>a:active</td>
							<td>选择活动链接。</td>
							<td>1</td>
						</tr>
						
						<tr>
							<td>:hover</td>
							<td>a:hover</td>
							<td>选择鼠标指针位于其上的链接。</td>
							<td>1</td>
						</tr>
						
						<tr>
							<td>:focus</td>
							<td>input:focus</td>
							<td>选择获得焦点的 input 元素。</td>
							<td>2</td>
						</tr>
						
						<tr>
							<td>:first-letter</td>
							<td>p:first-letter</td>
							<td>选择每个 &lt;p&gt; 元素的首字母。</td>
							<td>1</td>
						</tr>
						
						<tr>
							<td>:first-line</td>
							<td>p:first-line</td>
							<td>选择每个 &lt;p&gt; 元素的首行。</td>
							<td>1</td>
						</tr>
						
						<tr>
							<td>:first-child</td>
							<td>p:first-child</td>
							<td>选择属于父元素的第一个子元素的每个 &lt;p&gt; 元素。</td>
							<td>2</td>
						</tr>
						
						<tr>
							<td>:before</td>
							<td>p:before</td>
							<td>在每个 &lt;p&gt; 元素的内容之前插入内容。</td>
							<td>2</td>
						</tr>
						
						<tr>
							<td>:after</td>
							<td>p:after</td>
							<td>在每个 &lt;p&gt; 元素的内容之后插入内容。</td>
							<td>2</td>
						</tr>
						
						<tr>
							<td>:lang(<i>language</i>)</td>
							<td>p:lang(it)</td>
							<td>选择带有以 "it" 开头的 lang 属性值的每个 &lt;p&gt; 元素。</td>
							<td>2</td>
						</tr>
						
						<tr>
							<td><i>element1</i>~<i>element2</i></td>
							<td>p~ul</td>
							<td>选择前面有 &lt;p&gt; 元素的每个 &lt;ul&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>[<i>attribute</i>^=<i>value</i>]</td>
							<td>a[src^="https"]</td>
							<td>选择其 src 属性值以 "https" 开头的每个 &lt;a&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>[<i>attribute</i>$=<i>value</i>]</td>
							<td>a[src$=".pdf"]</td>
							<td>选择其 src 属性以 ".pdf" 结尾的所有 &lt;a&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>[<i>attribute</i>*=<i>value</i>]</td>
							<td>a[src*="abc"]</td>
							<td>选择其 src 属性中包含 "abc" 子串的每个 &lt;a&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:first-of-type</td>
							<td>p:first-of-type</td>
							<td>选择属于其父元素的首个 &lt;p&gt; 元素的每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:last-of-type</td>
							<td>p:last-of-type</td>
							<td>选择属于其父元素的最后 &lt;p&gt; 元素的每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:only-of-type</td>
							<td>p:only-of-type</td>
							<td>选择属于其父元素唯一的 &lt;p&gt; 元素的每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:only-child</td>
							<td>p:only-child</td>
							<td>选择属于其父元素的唯一子元素的每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:nth-child(<i>n</i>)</td>
							<td>p:nth-child(2)</td>
							<td>选择属于其父元素的第二个子元素的每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:nth-last-child(<i>n</i>)</td>
							<td>p:nth-last-child(2)</td>
							<td>同上，从最后一个子元素开始计数。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:nth-of-type(<i>n</i>)</td>
							<td>p:nth-of-type(2)</td>
							<td>选择属于其父元素第二个 &lt;p&gt; 元素的每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:nth-last-of-type(<i>n</i>)</td>
							<td>p:nth-last-of-type(2)</td>
							<td>同上，但是从最后一个子元素开始计数。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:last-child</td>
							<td>p:last-child</td>
							<td>选择属于其父元素最后一个子元素每个 &lt;p&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:empty</td>
							<td>p:empty</td>
							<td>选择没有子元素的每个 &lt;p&gt; 元素（包括文本节点）。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:target</td>
							<td>#news:target</td>
							<td>选择当前活动的 #news 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:enabled</td>
							<td>input:enabled</td>
							<td>选择每个启用的 &lt;input&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:disabled</td>
							<td>input:disabled</td>
							<td>选择每个禁用的 &lt;input&gt; 元素</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:checked</td>
							<td>input:checked</td>
							<td>选择每个被选中的 &lt;input&gt; 元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>:not(<i>selector</i>)</td>
							<td>:not(p)</td>
							<td>选择非 &lt;p&gt; 元素的每个元素。</td>
							<td>3</td>
						</tr>
						
						<tr>
							<td>::selection</td>
							<td>::selection</td>
							<td>选择被用户选取的元素部分。</td>
							<td>3</td>
						</tr>
					</tbody>
				</table>

				<blockquote class="text-quote mt20">
					@media
				</blockquote>
				<figure class="code-box mt20">
<pre>
@media screen and (max-width: 600px) { /*幕尺寸小于600px*/
	.class {
		css-code;
	}
}

<p class="text-18 text-bold">常用的几种屏幕宽度设定</p>
	<span class="red">用min-width时，小的放上面大的在下面，同理如果是用max-width那么就是大的在上面，小的在下面</span>

	@media screen and (min-width: 1200px) { 
		css-code; 
	}

	@media screen and(min-width: 960px) and (max-width: 1199px) { /*大于960px，小于1199px*/
		css-code; 
	} 

	@media screen and(min-width: 768px) and (max-width: 959px) { 
		css-code; 
	} 

	@media screen and(min-width: 480px) and (max-width: 767px) { 
		css-code; 
	} 

	@media screen and (max-width: 479px) { 
		css-code; 
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