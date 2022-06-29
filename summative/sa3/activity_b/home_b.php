<html>

<head>
    <title>User Information Form</title>
</head>

<body>
    <h2>User Information Form</h2>

    <p>Welcome <?php echo $_SESSION['username']; ?></p>
    <p>Birthday: <?php echo $_SESSION['birthday']; ?></p>
    <p>Contact Details: <?php echo $_SESSION['contact']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>

    <!-- Underline -->
    <hr>

    <h2>Reset Password</h2>
    <form action="resetpassword.php" method="post">
        <p>Enter current password: <input type="password" name="currentpassword"></p>
        <p>Enter New Password: <input type="password" name="newpassword"></p>
        <p>Re-enter New Password: <input type="password" name="newpassword2"></p>
        <p><input type="submit" value="Reset Password"></p>
    </form>

    <!-- Underline -->
    <hr>

    <!-- 
Display the following text:

LOGOUT
Logout

-->
    <h2>Logout</h2>
    <form action="logout.php" method="post">
        <p><input type="submit" value="Logout"></p>
    </form>

</body>

</html>

<?php
// Check if the form is submitted
if (isset($_POST['currentpassword']) && isset($_POST['newpassword']) && isset($_POST['newpassword2'])) {
    // Get the username and password
    $currentpassword = $_POST['currentpassword'];
    $newpassword = $_POST['newpassword'];
    $newpassword2 = $_POST['newpassword2'];

    // Check if the username and password are correct
    if ($currentpassword == $_SESSION['password']) {
        // Set cookies for username and password
        setcookie('password', $newpassword, time() + (86400 * 30), "/");
        // Redirect to the admin page
        header('Location: admin.php');
    } else {
        // Display an error message
        echo '<div class="alert alert-danger">Invalid username or password</div>';
    }
}

// Create a static variable that will hold your username and password. 
$username = 'rcajipe';
$password = 'thisisphp';

// Get the value from the form and compare it.
if (isset($_POST['currentpassword']) && isset($_POST['newpassword']) && isset($_POST['newpassword2
    '])) {
    if ($_POST['currentpassword'] == $password && $_POST['newpassword'] == $password && $_POST['newpassword2'] == $password) {
        // Set the session
        $_SESSION['password'] = $password;
        // Redirect to the homepage
        header('Location: home.php');
    }
}
?>