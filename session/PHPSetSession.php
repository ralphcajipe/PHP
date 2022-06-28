<?php
/* Creating a session and setting the session variables. */
session_start();
$_SESSION['logged'] = true;
$_SESSION['name'] = "Ralph Cajipe";
$_SESSION['email'] = "ralphcajipe@gmail.com";
header("location: PHPDisplaySession.php");

?>