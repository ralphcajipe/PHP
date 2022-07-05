<html>

<head>
    <title>Login</title>
</head>
<!--
Create a Login form using the information from the created database.
Note: depends on the user level where the webpage will redirect
If admin -> admin.php
If user -> user.php

-->

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="text" name="password"></p>
        <p><input type="submit" name="submit" value="Login"></p>
    </form>
</body>

</html>
<?php
// Connect to the database
$connection = mysqli_connect("localhost", "root", "", "users_db");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Path: formative\fa4\login.php
// Login to the website
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database query failed.");
    }
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        if ($row['userlevel'] == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: user.php");
        }
    } else {
        echo "Invalid username or password.";
    }
}

?>