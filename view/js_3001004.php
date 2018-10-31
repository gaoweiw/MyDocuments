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

                <blockquote class="text-quote red mt20">
                    字符串截取
                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
<pre class="lh-32">
replace() 方法用于在字符串中用一些字符替换另一些字符，或替换一个与正则表达式匹配的子串。

语法：stringObject.replace(regexp/substr,replacement)

第一次发现JavaScript中replace() 方法如果直接用str.replace("-","!") 只会替换第一个匹配的字符.
而str.replace(/\-/g,"!")则可以全部替换掉匹配的字符(g为全局标志)。
</pre>
                </figure>

                <blockquote class="text-quote red mt20">
                    小数截取
                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
<pre class="lh-32">
1.丢弃小数部分,保留整数部分
js:parseInt(7/2)

2.向上取整,有小数就整数部分加1
js: Math.ceil(7/2)

3.四舍五入
js: Math.round(7/2)

4.向下取整
js: Math.floor(7/2) 

<h2 class="text-22">四舍五入</h2>以下处理结果会四舍五入:
var num =2.446242342;
num = num.toFixed(2); <span class="green">// 输出结果为 2.45</span>

<h2 class="text-22">不四舍五入</h2>第一种，先把小数边整数：
Math.floor(15.7784514000 * 100) / 100  <span class="green">// 输出结果为 15.77</span>

第二种，当作字符串，使用正则匹配：
Number(15.7784514000.toString().match(/^\d+(?:\.\d{0,2})?/))  <span class="green">// 输出结果为 15.77,不能用于整数如 10 必须写为10.0000</span>


</pre>
                </figure>


				<blockquote class="text-quote red mt20">
					判断正整数
				</blockquote>
				<figure class="code-box mt20 gray3 no-unl">
<pre class="lh-32">
方式一、使用取余运算符判断
任何整数都会被1整除，即余数是0。利用这个规则来判断是否是整数。
	
function isInteger(obj) {
 return obj%1 === 0
}
isInteger(3) // true
isInteger(3.3) // false　

以上输出可以看出这个函数挺好用，但对于字符串和某些特殊值显得力不从心
	
isInteger('') // true
isInteger('3') // true
isInteger(true) // true
isInteger([]) // true

对于空字符串、字符串类型数字、布尔true、空数组都返回了true，真是难以接受。对这些类型的内部转换细节感兴趣的请参考：JavaScript中奇葩的假值
因此，需要先判断下对象是否是数字，比如加一个typeof

function isInteger(obj) {
 return typeof obj === 'number' && obj%1 === 0
}
isInteger('') // false
isInteger('3') // false
isInteger(true) // false
isInteger([]) // false

嗯，这样比较完美了。
方式二、使用Math.round、Math.ceil、Math.floor判断
整数取整后还是等于自己。利用这个特性来判断是否是整数，Math.floor示例，如下

function isInteger(obj) {
 return Math.floor(obj) === obj
}
isInteger(3) // true
isInteger(3.3) // false
isInteger('') // false
isInteger('3') // false
isInteger(true) // false
isInteger([]) // false

这个直接把字符串，true，[]屏蔽了，代码量比上一个函数还少。
方式三、通过parseInt判断

function isInteger(obj) {
 return parseInt(obj, 10) === obj
}
isInteger(3) // true
isInteger(3.3) // false
isInteger('') // false
isInteger('3') // false
isInteger(true) // false
isInteger([]) // false

很不错，但也有一个缺点
	
isInteger(1000000000000000000000) // false

竟然返回了false，没天理啊。原因是parseInt在解析整数之前强迫将第一个参数解析成字符串。这种方法将数字转换成整型不是一个好的选择。
方式四、通过位运算判断

	
function isInteger(obj) {
 return (obj | 0) === obj
}
isInteger(3) // true
isInteger(3.3) // false
isInteger('') // false
isInteger('3') // false
isInteger(true) // false
isInteger([]) // false

方式五、ES6提供了Number.isInteger
	
Number.isInteger(3) // true
Number.isInteger(3.1) // false
Number.isInteger('') // false
Number.isInteger('3') // false
Number.isInteger(true) // false
Number.isInteger([]) // false

目前，最新的Firefox和Chrome已经支持。
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