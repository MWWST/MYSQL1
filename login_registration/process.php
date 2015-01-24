<?php
session_start();
	require('new-connection.php');
	if (isset($_POST['action']) && $_POST['action'] == 'register') 
		{
		//call to function
		register_user($_POST); // use the ACTUAL post
		}

	if (isset($_POST['action']) && $_POST['action'] == 'login') 

	{
		login_user($_POST);
	}

	function register_user($post)  // JUST A PARAMETER CALLED POST
 	{
 		$_SESSION['errors']= array();

 			if(empty($post['first_name']))
 			{

			$_SESSION['errors'][] = "First name can't be blank!";
 			}

 			if(empty($post['last_name']))
 			{

 				$_SESSION['errors'][] = "Last name can't be blank!";
 			}

 			if(empty($post['password']))
 			{

 				$_SESSION['errors'][] = "Password Field is required";
 			}

 			if($post['password'] !== $post['confirm_password'])
			{
				$_SESSION['errors'][] = "Passwords must match";
			}

			if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
			{
				$_SESSION['errors'][] = "Please use a valid email address";

			}


			//end of validation checks
			// header('location: index.php');
	}

	function login_user($post)  // JUST A PARAMETER CALLED POST
 	{

	}

?>