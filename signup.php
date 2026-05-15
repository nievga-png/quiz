<?php

session_start();

// connects the database
include "databases.php";

// if signup was done then the password gets encrypted for security
// a new user is added into the database
// the user is brought back to login.
if(isset($_POST['signup']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password)
	VALUES ('$username', '$hashedPassword')";

	mysqli_query($connection, $sql);

    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Signup</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
}

.signup-box
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

<div class="signup-box">

	<h1>Signup</h1>

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
		name="signup">

			Create Account

		</button>

	</form>
    

</div>

</body>

</html>