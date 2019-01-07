<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mount Hope</title>
		<link rel="icon" type="image/png" href="img/logo/logo.png">
		<link rel="stylesheet" href="css/login_styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div id="error-panel"><?php if(isset($error)) echo $error; ?></div>
			<form class="login-form"  id="login-form">
				<div class="login-form-header">
					<span class="school-logo"></span>
					<div class="login-form-title">Mount Hope Secondary</div>
				</div>
				<div class="login-form-field" id="login-field-username">
					<input type="text" name="username" id="username" placeholder="&nbsp;" autofocus>
					<label for="username">Username</label>
				</div>
				<div class="login-form-field" id="login-field-pwd">
					<input type="password" id="login-pwd" name="password" placeholder="&nbsp;"/>
					<label id="label-pwd" for="login-pwd" id="password">Password</label>
				</div>
				<div class="login-form-submit">
					<button type="button" id="login-btn-primary" onclick="chkUser()">Next</button>
					<button type="button" id="login-btn-secondary">Login</button>
				</div>	
			</form>
			
		</div>
		<div class="footer">
			<p class="footer-left">&copy; Mount Hope 2018<p>
			<div class="footer-items"></div>
		</div>
		<script src="js/loginScript.js"></script>
	</body>
</html>