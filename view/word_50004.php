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
			                    windows快捷键
			                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
					<pre class="lh-32">透明化所有窗口，快速查看桌面：Window+" "
使当前使用的窗口最大化：Window+“向上箭头”
使当前使用中的窗口贴向屏幕左侧：Window+"向左的箭头"
跨显示器右移窗口：Windows+Shift+"向右的箭头"
突出显示当前窗口，最小化其他的非当前使用中的窗口：Windows+Home
最小化所有窗口：Windows+d</pre>
				</figure>

                <blockquote class="text-quote darkgreen mt20">
                        &lt;meta&gt;
                </blockquote>
                <figure class="code-box mt20 gray3 no-unl">
<pre>
<ol start = '10' reversed class="pl30">
<li>禁止缩放: &lt;meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"&gt;</li>
<li>禁止缓存: &lt;meta htpp-equiv="pragam" content="no-cache"&gt;</li>
</ol></pre>

                </figure>

                <blockquote class="text-quote darkgreen mt20">
                        Git使用-.gitignore文件(使一些文件不上传到git)
                </blockquote>
                <figure class="code-box mt20 gray3 no-unl">
<pre>
<ol start = '1' class="pl30">
<li>cd desktop ///切换到桌面</li>
<li>touch .gitignore    ///创建.gitignore</li>
<li>vim  .gitignore     ///进入编辑.gitignore</li>
</ol>
<h2>下面是一些gitignore文件的写法分享：</h2>
	(1)所有空行或者以注释符号 ＃ 开头的行都会被 Git 忽略。 
	(2)可以使用标准的 glob 模式匹配。 
	(3)匹配模式最后跟反斜杠（/）说明要忽略的是目录。 
	(4)要忽略指定模式以外的文件或目录，可以在模式前加上惊叹号（!）取反。 
		所谓的 glob 模式是指 shell 所使用的简化了的正则表达式。星号（*）匹配零个或多个任意字符；[abc] 匹配任何一个列在方括号中的字符（这个例子要么匹配一个 a，要么匹配一个 b，要么匹配一个 c）；问号（?）只匹配一个任意字符；如果在方括号中使用短划线分隔两个字符，表示所有在这两个字符范围内的都可以匹配（比如 [0-9] 表示匹配所有 0 到 9 的数字）。

<ol start = '1' class="pl30">
<li># 此为注释 – 将被 Git 忽略</li>
<li>*.a       # 忽略所有 .a 结尾的文件</li>
<li>!lib.a    # 但 lib.a 除外</li>
<li>/TODO     # 仅仅忽略项目根目录下的 TODO 文件，不包括 subdir/TODO</li>
<li>build/    # 忽略 build/ 目录下的所有文件</li>
<li>doc/*.txt # 会忽略 doc/notes.txt 但不包括 doc/server/arch.txt</li>
</ol>
</pre>

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