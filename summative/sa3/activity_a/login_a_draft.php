<html>

<head>
	<!-- Use bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login version 2</title>
</head>

<body>

	<form action="" method="post" id="frmLogin">
		<div class="error-message"><?php if (isset($message)) {
										echo $message;
									} ?></div>
		<div class="field-group">
			<div><label for="login">Username</label></div>
			<div><input name="member_name" type="text" value="<?php if (isset($_COOKIE["member_login"])) {
																	echo $_COOKIE["member_login"];
																} ?>" class="input-field">
			</div>
			<div class="field-group">
				<div><label for="password">Password</label></div>
				<div><input name="member_password" type="password" value="" class="input-field">
				</div>
				<div class="field-group">
					<div><input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
						<label for="remember-me">Remember me</label>
					</div>
					<div class="field-group">
						<div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
					</div>
	</form>

</body>