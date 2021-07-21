<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body>

    <div class="center">
		<h1>Login</h1>

    <form action="login.php" method="post">
        
     	<?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		 
        <div class="txt_field">
		 <input type="text" name="uname" placeholder="">
		 <span></span>
     	<label>User Name</label>
		 </div>
		
		<div class="txt_field">
		<input type="password" name="password" placeholder="">
		 <span></span>
     	<label>Password</label>
		 </div>

		 <div class="pass">Forgot Password</div>
		 <input type="submit" value="Login">

		<div class="signup_link">
            Not a member? <a href="signup.php" class="ca">Signup</a>
        </div>

	</form>
	 
	</div>
</body>
</html>