<?php

// start the session and if the user is not logged in they will go to the login page
session_start();

if(!isset($_SESSION['user_id']))
{
	header("Location: login.php");
	exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Quiz App</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
	text-align: center;
}

.home
{
	border: 1px solid black;
	padding: 30px;
	margin-top: 50px;
}

a
{
	font-size: 24px;
}

</style>

</head>

<body>

// main html content & links to other pages
<div class="home">

	<h1>Quiz App</h1>

	<p>
		🐸 Test your trivia skills! 🐸
	</p>

	<a href="quiz.php">
		Start Quiz
	</a>

    <br><br>

    <a href="userprofile.php">
        User Profile
    </a>

    <br><br>

    <a href="leaderboard.php">
        Leaderboard
    </a>

    <br><br>

    <a href="signout.php">
        Sign Out
    </a>

</div>

</body>

</html>