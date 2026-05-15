<?php

session_start();

//connects the database & gets the users with the highest scores
include "databases.php";

$sql = "
SELECT users.username, MAX(scores.score) AS highscore
FROM scores
JOIN users ON scores.user_id = users.id
GROUP BY users.username
ORDER BY highscore DESC
LIMIT 10
";

$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Leaderboard</title>

<style>

body
{
	font-family: Arial;
	max-width: 900px;
	margin: auto;
}

.leaderboard-box
{
	border: 1px solid black;
	padding: 20px;
	margin-top: 30px;
}

.player
{
	border-bottom: 1px solid gray;
	padding: 10px;
}

</style>

</head>

<body>

<div class="leaderboard-box">

	<h1>Top Greatest Players</h1>

	<?php
    //starts from the first position and then loops through 
    // everyone in the leaderboard
    // also echo's the username 
	$position = 1;

	while($row = mysqli_fetch_assoc($result))
	{
	?>

	<div class="player">

		<strong>
			#<?php echo $position; ?>
		</strong>

		-

		<?php echo $row['username']; ?>

		-

		Score:
		<?php echo $row['highscore']; ?>/10

	</div>

	<?php

	$position++;

	}

	?>
   
   <br>

    <a href="homepage.php">
        Return Home
    </a>


</div>

</body>

</html>