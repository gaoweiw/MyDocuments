
<?php include('tpl/header.php'); ?>
	<div id="main">
		<div class="login-main">
			<form action="" class="form">
				<div class="form-head">
					<h2>找回密码</h2>
				</div>
				<div class="form-body">
					<p class="err-msg">两次密码不一致，请重新输入</p>
					<div class="ui-input">
						<input type="text" placeholder="新密码">
					</div>
					<div class="ui-input">
						<input type="text" placeholder="确认新密码">
					</div>
					<button class="ui-button ui-button--primary">确定</button>
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