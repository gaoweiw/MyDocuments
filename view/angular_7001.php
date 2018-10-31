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
				<pre>
<h2 class="text-bold text-18">运行程序</h2>
	ng new [you project name]

<h2 class="text-bold text-18">运行程序</h2>
	npm run start

<h2 class="text-bold text-18">修改端口号</h2>
	ng server --port 4201

	<img src="../image/project/ag/ag1.png" class="w-p-80 h-p-100 ">

<h2 class="text-bold text-18">安装 jquery&bootstrap</h2>
	安装 jquery : 	npm install jquery --save		(--save寄存到当前目录pageage下)

	安装 bootstrap: 	npm install bootstrap --save	(--save寄存到当前目录pageage下)

	安装jquery 的类型描述文件: 	npm install @types/jquery --save-dev ,

	安装bootstrap 的类型描述文件: 	npm install @types/bootstrap --save-dev   

	安装类型描述文件目的：让 type script 代码认识 jquery 和 bootstrap；

<h2 class="text-bold text-18 red">生成组件</h2>
	<span class="red">ng g comppnent [name];</span>

<h2 class="text-bold text-18">路由(单页应用比较爽)</h2>
	生成项目：ng new [you project name] --routing

	<img src="../image/project/ag/ag2.png" class="max-w-p-100">
	
	参数的传递：
			
		1 在查询参数中传递数据：/product?id = 1& name = 2     =>   取值：ActivatedRoute.queryParams[id]

		2 在路由的路径中传递参数： {path:/product/:id} => /product/1 => 取值：ActivatedRoute.params[id]

		3 在路由配置中传递参数：{ path:/product, component: ProductComponent, data:[{ isProd : true }] } => 取值：ActivatedRoute.data[0][isProd]

	重定向路由：

		{path: '', redirectTo: '/home' , pathMatch: 'full'},

 		{path: 'home', component: HomeComponent},

 	子路由：

 		<img src="../image/project/ag/ag3.png" class="w500">
	
	路由守卫：

		只有当用户已经登录并拥有某些权限时才能进入某些路由

		一个由多个表单组成的向导，例如注册流程，用户只有在当前路由的组件中填写了满足要求的信息才可以导航到下一个路由。

		当用户未执行保存操作而试图离开当前导航时提醒用户。

		CanActivate: 处理导航到某路由的情况

		CanDeactivate: 处理从当前路由离开的情况

		Resolve:在进入路由之前获取路由数据

		


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