<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/LoginFormStyle.css">
	<title>Login - Music</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="MusicPage.php"><img src="Images/musiclogoLogin.jpg"></a>
		<hr id = "hr0">

		</div>
	</div>

	<div class="main">
		<div class="container">
		<form action="loginVerify.php" method="post" onsubmit="return validate();">
		<div class="input-container email">
			<label for ="email">Email address</label>
			<input id ="email" type="email" name="email" placeholder="Email Address">
			<div class="error_msg" id = "em_err_msg">
			</div>
		</div>
		<div class="input-container password">
			<label for ="password">Password</label>
			<input id ="password" type="password" name="password" placeholder="Password">
			<div class="error_msg" id = "pw_err_msg">
			</div>
		</div>
		<p><a href="#">Forgot your password?</a></p><br>
		<input class = "login-btn" type="submit" name="loginbtn" value="Log in">
	</form>
	</div>
</div>
	<hr id = "hr1">
	<div class = "noaccount">
		<h3>Don't have an acconut?</h3>
	</div>
	<a id = "specific" href="Register.php"><button name = "register-btn" class="signup-btn" type="submit">Sign up for music</button></a>
	<p></p>

	<script>
		function error_message(id, message) {
			document.getElementById(id).innerText = message;
		}

		function validate() {
			var email = document.getElementById("email");
			var password = document.getElementById("password");

			var emailvalue = email.value;
			var passwordvalue = password.value;

			if (emailvalue== "") {
				email.style.border = "1px solid #ff8471";
				error_message("em_err_msg", "Please enter your email address.");
			}else if (emailvalue != "") {
				email.style.border = "1px solid #7b5be4";
				error_message("em_err_msg", "");
			}
			if (passwordvalue== "") {
				password.style.border = "1px solid #ff8471";
				error_message("pw_err_msg", "Please enter your password.");
			} else if (passwordvalue.length < 6){
				password.style.border = "1px solid #ff8471";
				error_message("pw_err_msg", "Please enter a valid password!");
			} else {
				password.style.border = "1px solid #7b5be4";
				error_message("pw_err_msg", "");
			}

			if (emailvalue == "" || passwordvalue == "" || passwordvalue.length < 6) {
				return false;
				}
			else {
				return true;
				}
			}
			
		
	</script>
</body>
</html>
