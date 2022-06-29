<html>

<head>
    <!-- Use bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login</title>
</head>

<!--
Create a login module just like what is shown below.  
Using setcookie() function, create cookies for the username and password.
It must be saved in your web form if the remember me checkbox is checked only. 

Username
input type="text" name="username"
Password
input type="password" name="password"
Remember me checkbox (if checked, create cookies for username and password) Submit button

Using the same login module, create a static variable that will hold your username and password. 

Get the value from the form and compare it.

If the username and password matches, using $_SESSION, redirect the user to a homepage that will 
display your username stored in the session and a logout link that will redirect you to a logout.php 
containing session_destroy() function. 

If you have an active session, the user by changing the url above cannot access other pages such 
us the index page, login and registration pages. 

If there are no active sessions, users cannot open the home.php (or pages that has logout link) 

-->

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
