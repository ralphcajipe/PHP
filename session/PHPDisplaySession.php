<?php
/* This is the code that will be executed when the user visits the page. */
session_start();
if (isset($_SESSION['logged'])) {
    echo "Welcome " . $_SESSION['name'];
    echo '<br/><a href="PHPUnsetSession.php">'.$_SESSION['email'].'</a>';
    echo '<br/><a href="PHPDeleteSession.php">Logout</a>';
} else {
    echo '<a href="PHPLogin.php">Login</a>';
}

include 'regex.php';
?>