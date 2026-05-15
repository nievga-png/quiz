<?php

session_start();

include "databases.php";

// checks if the login button is pressed
// tries to find matching username
// gets requireed data

// if a user exists, it will check the password and send them to
// the homepage
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users
	WHERE username='$username'";

	$result = mysqli_query($connection, $sql);

	$user = mysqli_fetch_assoc($result);

	if($user)
	{
		if(password_verify($password, $user['password']))
		{
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['username'] = $user['username'];

			header("Location: homepage.php");
            exit();
		}
		else
		{
			echo "Wrong password";
		}
	}
	else
	{
		echo "User not found";
	}
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
}

.login-box
{
	border: 1px solid black;
	padding: 20px;
	margin-top: 30px;
}

input
{
	display: block;
	margin-top: 10px;
	padding: 8px;
}

button
{
	margin-top: 15px;
	padding: 10px;
}

</style>

</head>

<body>

<div class="login-box">

	<h1>Login</h1>
    <p>Enter your Username and Password in order to begin the fun trivia quiz! 👽</p>

	<form method="POST">

		<input
		type="text"
		name="username"
		placeholder="Username"
		required>

		<input
		type="password"
		name="password"
		placeholder="Password"
		required>

		<button
		type="submit"
		name="login">

			Login

		</button>

	</form>
    
    <br>

    <a href="signup.php">
        Sign up here to start Quizzing
    </a>


</div>

</body>

</html>