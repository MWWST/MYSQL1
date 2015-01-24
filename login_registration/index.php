<?php 
	session_start();
?>
<html>
<head>
	<title></title>
	<style type="text/css">
	*
	{
		font-family: sans-serif;
	}
	.error {
		color: red;
	}
	</style>
</head>
<body>
<?php

	if (isset($_SESSION['errors']))
	{
		foreach ($_SESSION['errors'] as $error) 
		{
			echo "<p class='error'>{$error}</p>";
			// var_dump($_SESSION);
		}
		unset($_SESSION['errors']);
	}
	

?>
<h2>Register</h2>
<form action='process.php' method='post'>
	First name: <input type ='text' name='first_name'><br>
	Last name: <input type ='text' name='last_name'><br>
	Email Address: <input type ='text' name='email'><br>
	Password: <input type='password' name='password'><br>
	Confirm Password: <input type='password' name='confirm_password'><br>
	<input type="submit" value="register">
	<input type="hidden" name="action" value="register">
</form>

<h2>Login</h2>
<form action='process.php' method='post'>
	Email address: <input type ="text" name ="email"><br>
	Password: <input type="password" name="loginpassword"></br>
	<input type="submit" value="login">
	<input type="hidden" name="action" value="login">

</body>
</html>