<?php

session_start();
// ends the dession and its data, then redirects user to login.
session_destroy();

header("Location: login.php");

exit();

?>