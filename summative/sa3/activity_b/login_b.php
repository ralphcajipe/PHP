<html>

<head>
    <!-- Use bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login | Activity B</title>
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
                <h1>Login-Activity B</h1>
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
// Check if the input from username and password matches on the MySQL database
// If it matches, redirect the user to a homepage that will display your username stored in the session and a logout link that will redirect you to a logout.php containing session_destroy() function.
// If you have an active session, the user by changing the url above cannot access other pages such as the index page, login and registration pages.
// If there are no active sessions, users cannot open the home.php (or pages that has logout link)


// Connect to the database
$db = new mysqli("localhost", "root", "", "user_registration");

// Check if the connection is successful
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// If the submit button is clicked
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Get the value from the form and compare it
    $sql = "SELECT * FROM user_info WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $result = $db->query($sql);

    // If the username and password matches
    if ($result->num_rows > 0) {
        // Create a session
        session_start();
        $_SESSION['username'] = $username;

        // Redirect the user to a homepage that will display your username stored in the session and a logout link that will redirect you to a logout.php containing session_destroy() function.
        header("Location: home_b.php");
    } else {
        // If the username and password does not match
        echo "Invalid username or password";
    }
}
?>
