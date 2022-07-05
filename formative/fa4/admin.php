<html>

<head>
    <title>admin.php</title>
</head>
<!--
On admin.php, create a link where it can show all the records of the database.
Please see the example below

Example (admin.php)

Admin Account

Log out on right side
View Records on right side
Add Records on right side

Welcome: Username of the logged in user
    Userlevel: admin
    Email: email of the logged in user

Image of user
Choose File button
-------------------------------
RESET PASSWORD
Enter current password: 
Enter new password:
Re-enter new password:
Submit

Note: click the View Records link to proceed viewusers.php

Example (viewusers.php)

View Records
ID Email Username Password Userlevel Status

Note: Back link will go back to admin.php

-->

<body>
    <h1>Admin Account</h1>
    <p><a href="logout.php">Log out</a></p>
    <p><a href="view_users.php">View Records</a></p>
    <p><a href="admin_add.php">Add Records</a></p>
    <!-- Connect to the database -->
    <?php
    $connection = mysqli_connect("localhost", "root", "", "users_db");
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Get the data from the database
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
    // Loop through the data
    while ($row = mysqli_fetch_assoc($result)) {
        // Get the username of the user who is logged in
        echo "<b>Welcome </b>" . $row['username'] . "<br>";

        // Get the userlevel of the user who is logged in
        echo "<b>Userlevel:</b> " . $row['userlevel'] . "<br>";

        // Get the email of the user who is logged in
        echo "<b>Email:</b>" . $row['email'] . "<br>";
    }
    ?>
    <img src="img/user.jpg" alt="user.jpg" srcset="">
    <!---
    Create PHP file function to upload image for the admin/user.
    -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>

    <h1>Reset Password</h1>
    <form action="admin_add.php" method="post">
        <p>Enter current password: <input type="text" name="current_password"></p>
        <p>Enter new password: <input type="text" name="new_password"></p>
        <p>Re-enter new password: <input type="text" name="re_new_password"></p>
        <p><input type="submit" name="submit" value="Submit"></p>
    </form>
</body>

</html>

<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "users_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the submit button is clicked
if (isset($_POST['submit'])) {
    // Get the data from the form
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $re_new_password = $_POST['re_new_password'];

    // Insert the data into the database
    $sql = "UPDATE users SET password = '$new_password' WHERE password = '$current_password'";
    $result = mysqli_query($conn, $sql);

    // Print result message
    if ($result) {
        echo "Password changed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>