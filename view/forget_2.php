<?php include('tpl/header.php'); ?>
	<div id="main">
		<div class="login-main">
			<form action="forget_3.php" class="form">
				<div class="form-head">
					<h2>找回密码</h2>
				</div>
				<div class="form-body">
					<p class="err-msg">验证码错误，请重新输入</p>
					<p class="warn-msg">短信验证码已发送至 137****2547，如未收到，请重新获取</p>
					<div class="ui-input narrow-input">
						<input type="text" placeholder="短信验证码">
						<a class="sms-button" href="javascript:">重新获取</a>
					</div>
					<button class="ui-button ui-button--primary">下一步</button>
				</div>
			</form>
		</div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript">
	seajs.use([base.jsUrl + 'style']);
</script>
</body>
</html>