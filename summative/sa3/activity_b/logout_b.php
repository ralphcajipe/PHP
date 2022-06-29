<html>

<head>
    <!-- Use bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <h1>Login</h1>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>

                    <!-- Align this text to the center -->
                    <p class="text-center"> &copy; Ralph Cajipe</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {

    // Get the username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($username == 'admin' && $password == 'admin') {
        // Set cookies for username and password
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
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
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        // Set the session
        $_SESSION['username'] = $username;
        // Redirect to the homepage
        header('Location: home.php');
    }
}

?>