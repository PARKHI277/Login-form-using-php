<?php

session_start();
$_SESSION = array();
session_destroy();
// echo "Enter these details to logout from the website;"
header("location: login.php");
// session_destroy();

?>
