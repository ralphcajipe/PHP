<?php
/* Destroying the session and redirecting to the PHPDisplaySession.php page. */
session_start();
session_destroy();
header("location: PHPDisplaySession.php");
?>