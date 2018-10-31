<?php include('tpl/header.php'); ?>
	<div id="main">
		<div class="login-main">
			<form action="forget_2.php" class="form">
				<div class="form-head">
					<h2>找回密码</h2>
				</div>
				<div class="form-body">
					<p class="err-msg">手机号不可用</p>
					<div class="ui-input">
						<input type="text" placeholder="注册手机号">
					</div>
					<div class="ui-input narrow-input">
						<input type="text" placeholder="图片验证码">
						<img class="captcha" src="http://placehold.it/80x30" alt="">	
					</div>
					<button type="submit" class="ui-button ui-button--primary">下一步</button>
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