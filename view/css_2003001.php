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
                <!--本页样式-->
				<style>
                    input[type=text], input[type=password] {
                        border-color: #bbb;
                        height: 38px;
                        font-size: 14px;
                        border-radius: 2px;
                        outline: 0;
                        border: #ccc 1px solid;
                        padding: 0 10px;
                        width: 250px;
                        -webkit-transition: box-shadow .5s;
                    }

                    input[type=text]:hover,  input[type=text]:focus, input[type=password]:hover,  input[type=password]:focus {
                        border: 1px solid #56b4ef;
                        box-shadow: inset 0 1px 3px rgba(0,0,0,.05),0 0 8px rgba(82,168,236,.6);
                        -webkit-transition: box-shadow .5s;
                    }
                    
                    input::-webkit-input-placeholder{ /* Safari, 谷歌浏览器等使用Webkit引擎的浏览器 */
                        color: green;
                        opacity: 0.6;
                    }
                    input::-moz-placeholder{    /*firefox 19+ */
                        color: orange;
                        opacity: 0.6;
                    }
                    input::-ms-input-placeholder{    /* ie */
                        color: blue;
                        opacity: 0.6;
                    }

                    input:focus::-webkit-input-placeholder, input:hover::-webkit-input-placeholder {
                        color: red;
                        font-size:1.1em;
                        -webkit-transition: all .5s;
                    }

                    input:focus::-moz-placeholder, input:hover::-moz-placeholder {
                        color: #DB3E3E;
                        font-size:1.1em;
                    }
                   
				</style>
				<!--本页样式-->

                <blockquote class="text-quote mt20">
					input 框高亮
                </blockquote>
                
                <div class="test-box">
                    <input placeholder="用户名或邮件地址" name="username" type="text">
                    <input placeholder="密码" name="password" type="password">
                </div>
                
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