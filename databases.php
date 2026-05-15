<?php

// connects to the database on mysql
$connection = mysqli_connect
(
	"localhost",
	"root",
	"",
	"quiz"
);

if(!$connection)
{
	die("Connection failed");
}

?>