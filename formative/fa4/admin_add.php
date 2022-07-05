<html>

<head>
    <title>admin_add.php</title>
</head>
<!--
    Create database with 10 different records use the following fields [id(auto increment), email, username, 
    password, userlevel(admin/user), status, image]. 
    
    Use the webpage example below to add the records.
    Example (admin_add.php)

    Add Record or Back
    Email:
    Username:
    Password:
    Userlevel: admin/user
    Status: active/disable
    Save Record

Note: Back link will redirect to admin.php

-->
<body>
    <h1>Add Record</h1>
    <p><a href="admin.php">Back</a></p>
    <form action="admin_add.php" method="post">
        <p>Email: <input type="text" name="email"></p>
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="text" name="password"></p>
        <p>Userlevel: <input type="text" name="userlevel" placeholder="admin/user"></p>       
        <p>Status: <input type="text" name="status" placeholder="active/disable"></p>
        <p><input type="submit" name="submit" value="Save Record"></p>
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
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userlevel = $_POST['userlevel'];
        $status = $_POST['status'];

        // Insert the data into the database
        $sql = "INSERT INTO users (email, username, password, userlevel, status) VALUES ('$email', '$username', '$password', '$userlevel', '$status')";
        $result = mysqli_query($conn, $sql);

        // Print result message
        if ($result) {
            echo "Record added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Close the connection
    mysqli_close($conn);

?>