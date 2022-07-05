<?php
/* Destroying the session and redirecting the user to the login page. */
session_start();
session_destroy();
header('location:./login.php');
?>