<?php
// start the session and if the user is not logged in they will go to the login page
session_start();

// connects the database
include "databases.php";

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

// gets the id of the user and the scores.
$userID = $_SESSION['user_id'];

$sql = "
SELECT score
FROM scores
WHERE user_id = '$userID'
ORDER BY id DESC
";

$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>User Profile</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
}

.profile-box
{
	border: 1px solid black;
	padding: 20px;
	margin-top: 30px;
}

.score-entry
{
	border-bottom: 1px solid gray;
	padding: 10px;
}

</style>

</head>

<body>

<div class="profile-box">

	<h1>
		Profile
	</h1>

	<h2>Play History</h2>

	<?php
    // all the scores will get looped through and shown
	while($row = mysqli_fetch_assoc($result))
	{
	?>

	<div class="score-entry">

		Score:
		<?php echo $row['score']; ?>/10
	</div>

	<?php

	}

	?>
    
    <br>

    <a href="homepage.php">
        Return
    </a>

</div>

</body>

</html>