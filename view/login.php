<?php include('tpl/header.php'); ?>
	<div class="ac-main login-bgi--big">
		<div class="login-bgi-blank">
			<div class="login-center">
				<div  class="form">
					<div class="form-head">
						<h2>登录</h2>
					</div>
					<div class="form-body">
						<!-- <p class="err-msg">账号不存在</p> -->
						<div class="ui-input">
							<input class="abc" type="text" placeholder="手机号或邮箱">
						</div>
						<div class="ui-input">
							<input type="password" placeholder="密码">
							<span class="forget-password">
								<i class="fa fa-question-circle mouse-hand" id="question_pwd"></i>
							</span>
						</div>
						
						<button class="ui-button ui-button--primary" ng-click="login()">登录</button>
					</div>
					<div class="form-footer">
						<h3 class="text">没有账号?</h3>
						<div class="ui-button-register ui-button--register lh-50">
							<a class="white show no-unl" href="register.php">立即注册</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">
	var P_TIPS= 1;
	window.onload = function(){
		$('#browser_title').text('登录');

		var login_box = $('.login-center').height();
		
		$('.login-center').css({'top':'50%','margin-top': '-' + login_box/2 + 'px'});
		$('.ac-main').css({'min-height':login_box+'px'});


		//忘记密码
		var for_pwd_tips;
		$('#question_pwd').click(function(){
			var that = this;
			if(P_TIPS == 1){
				for_pwd_tips = layer.tips('<span style=""><a href="forget.php" class="white lh-24 no-unl" style="border-bottom:1px solid #fff;">忘记密码</a></span>', that,{
					skin:'forget-pwd-tips',
					tips: [2, '#2F4056'],
					time:1200000
				});
				P_TIPS += 1;
			}else{
				layer.close(for_pwd_tips);
				P_TIPS =1;
			}
		})
	}

	//窗口发生大小变化事件
	window.onresize = function(){
		layer.closeAll();
		P_TIPS =1;
	}
	
	seajs.use([
			base.jsUrl + 'style',
			base.jsUrl + 'login',
		]);
</script>
</body>
</html>