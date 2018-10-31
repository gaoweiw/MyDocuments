<?php include('tpl/header.php'); ?>
	<div class="ac-main register-bgi--big">
		<div class="login-bgi-blank">
			<div class="login-center">
				<div class="form">
					<div class="form-head">
						<h2>新用户注册</h2>
						<!-- <p class="form-notice">注册即送888元礼包，还可享3折套餐优惠</p> -->
						<!-- <p>已有账号？<a href="login.php">立即登录</a></p> -->
					</div>
					<div class="form-body">
						<!-- <p class="err-msg">手机号不可用</p> -->
						<div class="ui-input">
							<input type="text" placeholder="手机号">
						</div>
						<div class="ui-input narrow-input">
							<input type="text" placeholder="短信验证码">
							<a class="sms-button no-unl" href="javascript:">获取验证码</a>
						</div>
						<div class="ui-input">
							<input type="password" placeholder="密码，6-16位，区分大小写">
						</div>
						<div class="ui-agreement">
							<label class="text-12 vm mouse-hand"><input type="checkbox" class="vm mt-2" checked> 同意注册协议</label>
						</div>
						<button class="ui-button ui-button--primary">注册</button>
					</div>
					<div class="form-footer">
						<h3 class="text">已有账号？?</h3>
						<div class="ui-button-register ui-button--register lh-50">
							<a class="white show no-unl" href="login.php">立即登录</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">

	window.onload = function(){
		$('#browser_title').text('注册');

		var login_box = $('.login-center').height();
		
		$('.login-center').css({'top':'50%','margin-top': '-' + login_box/2 + 'px'});
		$('.ac-main').css({'min-height':login_box+'px'});
	}
	

	seajs.use([base.jsUrl + 'style']);
</script>
</body>
</html>