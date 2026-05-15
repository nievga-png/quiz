<?php
session_start();
// start the session and if the user is not logged in they will go to the login page
if(!isset($_SESSION['user_id']))
{
	header("Location: login.php");
	exit();
}
// gets the questions from the json file provided and shuffles them
$questions = json_decode(file_get_contents("questions.json"), true);

shuffle($questions);
// after they are already shuffled you get 10 of them
$questions = array_slice($questions, 0, 10);

?>

<!DOCTYPE html>
<html>

<head>

<title>Quiz</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
}

.question
{
	border: 1px solid black;
	padding: 10px;
	margin-top: 20px;
}

button
{
	padding: 10px;
	margin-top: 20px;
}

</style>

</head>

<body>

<h1>Quiz</h1>

<form action="results.php" method="POST">

<!-- loops through the questions and shows the question's as text-->
<?php foreach($questions as $index => $question): ?>

<div class="question">

	<p>
		<?php echo $question['question']; ?>
	</p>
<!-- radio buttons -->

	<input type="radio"
	name="answers[<?php echo $index; ?>]"
	value="A">

	<?php echo $question['A']; ?>

	<br>

	<input type="radio"
	name="answers[<?php echo $index; ?>]"
	value="B">

	<?php echo $question['B']; ?>

	<br>

	<input type="radio"
	name="answers[<?php echo $index; ?>]"
	value="C">

	<?php echo $question['C']; ?>

	<br>

	<input type="radio"
	name="answers[<?php echo $index; ?>]"
	value="D">

	<?php echo $question['D']; ?>

	<br>

	<input type="hidden"
	name="correct_answers[<?php echo $index; ?>]"
	value="<?php echo $question['answer']; ?>">

</div>

<?php endforeach; ?>

<button type="submit">
	Submit Quiz
</button>

</form>

</body>
</html>