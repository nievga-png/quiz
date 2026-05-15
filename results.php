<?php

session_start();

$score = 0;
// Check if the questions were submitted, and add the score.
if(isset($_POST['answers']))
{
	$userAnswers = $_POST['answers'];
	$correctAnswers = $_POST['correct_answers'];

	foreach($userAnswers as $index => $answer)
	{
		if($answer == $correctAnswers[$index])
		{
			$score++;
		}
	}
}
// connects the database
include "databases.php";

// saves the score for the person and inserts it into the database
if(isset($_SESSION['user_id']))
{
	$userID = $_SESSION['user_id'];

	$sql = "INSERT INTO scores (user_id, score)
	VALUES ('$userID', '$score')";

	mysqli_query($connection, $sql);
}


$_SESSION['score'] = $score;



?>

<!DOCTYPE html>
<html>

<head>

<title>Results</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
}

.result-box
{
	border: 1px solid black;
	padding: 20px;
	margin-top: 30px;
}

button
{
	padding: 10px;
	margin-top: 15px;
}

</style>

</head>

<body>

<div class="result-box">

	<h1>Quiz Results</h1>

	<h2>
		You scored <?php echo $score; ?>/10
	</h2>

	<a href="homepage.php">
		<button>
			Try Again
		</button>
	</a>

</div>

</body>

</html>