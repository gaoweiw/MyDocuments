<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
	<script src="https://unpkg.com/vue"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
			<div class="centre-content centre-content-footer p-0-30">
				<!--本页样式-->
				<blockquote class="text-quote mt20">
					This is the home page
			                </blockquote>

				<div id="app">
					{{ message }}
				</div>

				<div id="app-2" class="mt50">
					<span v-bind:title="message">
					鼠标悬停几秒钟查看此处动态绑定的提示信息！
					</span>
				</div>

				<div id="app-3" class="mt50">
					<p v-if="seen">现在你看到我了</p>
				</div>

				<div id="app-4" class="mt50">
					<ol>
						<li v-for="todo in todos">
							{{ todo.text }}
						</li>
					</ol>
				</div>

				<div id="app-5" class="mt50">
					<p>{{ message }}</p>
					<button v-on:click="reverseMessage">逆转消息</button>
				</div>

				<div id="app-6" class="mt50">
					<p>{{ message }}</p>
					<input v-model="message">
				</div>

				<div id="app-7" class="mt50">
					<ol>
						<!--
						现在我们为每个 todo-item 提供 todo 对象
						todo 对象是变量，即其内容可以是动态的。
						我们也需要为每个组件提供一个“key”，晚些时候我们会做个解释。
						-->
						<todo-item
						v-for="item in groceryList"
						v-bind:todo="item"
						v-bind:key="item.id">
						</todo-item>
					</ol>
				</div>

				<img src="http://static.tieba.baidu.com/tb/editor/images/client/image_emoticon68.png" alt="">
				<img src="http://oa.ftx8.cn/weaver/weaver.file.FileDownload?fileid=115" alt="">
				

				
				<div id="itany">
				    <a>{{name}}</a>
				    <a>{{age}}</a>

				    <button v-on:click="send">sendJSONP</button>

				</div>





			</div>
		</div>
		<!--底部-->
		<div class="footer br-s text-12"></div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">
	// document.write('<script type="text/javascript" src="js文件地址">');
	var app = new Vue({
		el: '#app',
		data: {
			message: 'Hello Vue!'
		}
	})

	var app2 = new Vue({
		el: '#app-2',
		data: {
			message: '页面加载于 ' + new Date().toLocaleString()
		}
	})

	var app3 = new Vue({
		el: '#app-3',
		data: {
			seen: false
		}
	})

	var app4 = new Vue({
		el: '#app-4',
		data: {
			todos: [
				{ text: '学习 JavaScript' },
				{ text: '学习 Vue' },
				{ text: '整个牛项目' }
			]
		}
	})

	var app5 = new Vue({
		el: '#app-5',
		data: {
			message: 'Hello Vue.js!'
		},
		methods: {
			reverseMessage: function () {
				this.message = this.message.split('').reverse().join('')
			}
		}
	})

	var app6 = new Vue({
		el: '#app-6',
		data: {
			message: 'Hello Vue!'
		}
	})

	Vue.component('todo-item', {
		props: ['todo'],
		template: '<li>{{ todo.text }}</li>'
	})
	var app7 = new Vue({
		el: '#app-7',
		data: {
			groceryList: [
				{ id: 0, text: '蔬菜' },
				{ id: 1, text: '奶酪' },
				{ id: 2, text: '随便其他什么人吃的东西' }
			]
		}
	})


	var ajax = new Vue({
        el: '#itany',
        data:{
            name: 'alice',
            age: 19
        },
        methods:{
            send:function(){
	            axios.get('https://sug.so.360.cn/suggest',{params:{id:1,name:'qwe'}})
					.then(function (response) {
						console.log(response);
					})
					.catch(function (error) {
						console.log(error);
					});
            }
        }
    })

	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>