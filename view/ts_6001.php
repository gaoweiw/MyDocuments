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
				<!--本页样式-->
				<style>

				</style>
				<!--本页样式-->
				<blockquote class="text-quote mt20">
					TypeScript 入门视频 ： <a class="darkgreen text-16" href="http://www.imooc.com/learn/763" target="_blank">http://www.imooc.com/learn/763</a>
				</blockquote>

				<figure class="code-box mt20">
				<pre>Type Script 在线编译器：<a class="darkgreen text-16" target="_blank" href="http://www.typescriptlang.org/play/index.html">http://www.typescriptlang.org/play/index.html</a>

<h2 class="text-bold text-18">运用命令行把 ts 转变成 js </h2>
	1. 安装ts ：npm install -g typescript

	2. 进入需要编译的 .ts 文件目录。输入命令：tsc [name].ts ，然后在此目录下会生成 [name].js 文件

<h2 class="text-bold text-18">ts 字符串</h2>
	1.多行字符串换行: var testdemo = `hello type script`;   可以随意换行

	2.字符串模板:(拼接html)
	<div class="w-p-80">
		<img src="../image/project/ts/ts0_2.png" class="w-p-100 h-p-100">
	</div>

3.自动拆分字符串:
	<div class="w-p-80">
		<img src="../image/project/ts/ts0_3.png" class="w-p-100 h-p-100">
	</div>


<h2 class="text-bold text-18">ts 参数类型(js 正常运行，但是在webstorm IDE里面会报错)</h2>

	参数类型：在参数名称后面使用冒号来指定参数的类型

	默认参数：在参数声明后面用等号来指定参数的默认值

	可选参数：在方法的参数声明后面用问号来标明此参数为可选参数

	1.指定参数类型
		<div class="w-p-80">
			<img src="../image/project/ts/ts0_4.png" class="w-p-100 h-p-100">
		</div>
	2.自定义类型
		<div class="w-p-80">
			<img src="../image/project/ts/ts0_5.png" class="w-p-100 h-p-100">
		</div>
	3.参数默认值 and 方法默认值(带默认值的参数要声明在后面)
		<div class="w-p-80">
			<img src="../image/project/ts/ts1.png" class="w-p-100 h-p-100">
		</div>
	4.可选参数(可选参数要声明在必写参数的后面)
		<div class="w-p-80">
			<img src="../image/project/ts/ts2.png" class="w-p-100 h-p-100">
		</div>

<h2 class="text-bold text-18">ts函数新特性</h2>
	1.Rest and Spread 操作符(...)：用来声明任意数量的方法参数
	<div class="w-p-80">
		<img src="../image/project/ts/ts3.png" class="w-p-100 h-p-100">
	</div>
	相反：
	<div class="w-p-80">
		<img src="../image/project/ts/ts4.png" class="w-p-100 h-p-100">
	</div>
	2.generator函数：控制函数的执行过程，手工暂停和恢复代码执行

		关键字：yield(ES6断点新特性); 在线编译器：<a href="http://babeljs.cn/repl/" target="_blank">http://babeljs.cn/repl/</a>

		function* thisTest(){

			console.log('start');

			yield;

			console.log('finish');

		}

		var begin = thisTest();  //调用generator函数必须把方法声明成变量 然后 调用begin的next()方法

		begin.next();   //输出start

		begin.next();   //输出 finish

		<span class="darkgreen">解释：begin.next()方法在执行时会 执行到yield的位置停住,然后第二次调用会从上一个yield的位置继续往下执行</span>

		示例：
		<div class="w-p-80">
			<img src="../image/project/ts/ts5.png" class="w-p-100 h-p-100">
		</div>

	3.destructuring析构表达式：通过表达式将对象或数组拆解成任意数量的变量

		示例：针对对象
		<div class="w-p-80">
			<img src="../image/project/ts/ts6.png" class="w-p-100 h-p-100">
		</div>

		示例：针对数组
		<div class="w-p-80">
			<img src="../image/project/ts/ts7.png" class="w-p-100 h-p-100">
		</div>

<h2 class="text-bold text-18">ts 表达式和循环</h2>
	1.箭头表达式：用来声明匿名函数,消除传统匿名函数的this指针问题

		示例：
		<div class="w-p-80">
			<img src="../image/project/ts/ts8.png" class="w-p-100 h-p-100">
		</div>

		示例：消除传统匿名函数的this指针问题  对比 <b class="red">传统 : 箭头表达式</b>
		<div class="w-p-80">
			<img src="../image/project/ts/ts9.png" class="w-p-100 h-p-100">
		</div>

	2.forEach(),for in 和 for of

		for in ：会输出数组和属性

		for of ：只输出数组，可以break 打断循环

		<div class="w-p-80">
			<img src="../image/project/ts/ts10.png" class="w-p-100 h-p-100">
		</div>

<h2 class="text-bold text-18">面向对象特性</h2>
	1.类（class）类是TypeScript的核心，使用TypeScript开发时，大部分代码都是写在类里面的。这里会介绍 类的定义，构造函数，以及类的继承

	示例：类的定义,类的声明
		<div class="w-p-80">
			<img src="../image/project/ts/ts11.png" class="w-p-100 h-p-100">
		</div>

	示例：构造函数<span class="red">(在类被实例化的时候调用一次，constructor(){} //外部无法访问 )</span>
		   类的继承 extend
		<div class="w-p-80">
			<img src="../image/project/ts/ts12.png" class="w-p-100 h-p-100">
		</div>

	2.泛型（generic）：参数化的类型，一般用来限制集合的内容

	<div class="w-p-80">
		<img src="../image/project/ts/ts13.png" class="w-p-100 h-p-100">
	</div>

	3.接口（Interface）：用来建立某种代码约定，使得其它开发者在调用某个方法或创建新的类时必须遵循接口所定义的代码约定

	<div class="w-p-80">
		<img src="../image/project/ts/ts14.png" class="w-p-100 h-p-100">
	</div>

	3.模块（Module）：模块可以帮助开发者将代码分割为可重用的单元。开发者可以自己决定将模块中的那些资源（类、方法、变量）暴露出去供外部使用，

	那些资源只在模块内使用。

	模块关键字：<span class="red">export 对外暴露; import 引入 </span>
	<div class="w-p-80">
		<img src="../image/project/ts/ts15.png" class="w-p-100 h-p-100">
	</div>
	<div class="w-p-80">
		<img src="../image/project/ts/ts16.png" class="w-p-100 h-p-100">
	</div>

	4.注解（annotation）:注解为程序的元素（类、方法、变量）加上更直观更明了的说明，这些说明信息与程序的业务逻辑无关，而是供指定的工具或框架使用的。

	5.类型定义文件（*.d.ts）:类型定义文件用来帮助开发者在TypeScript中使用已有的JavaScript的工具包  如:JQuery

					</pre>
				</figure>

			</div>
		</div>
		<!--底部-->

	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>