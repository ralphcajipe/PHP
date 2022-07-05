<html>

<head>
    <title>View Records</title>
</head>
<!--
Create a View Records (viewusers.php) page to proceed.

Example (viewusers.php)

It should be on a table with the following fields:

View Records text

ID -  Email - Username - Password - Userlevel - Status

Note: Back button link will go back to admin.php 
-->

<body>
    <h1>View Records</h1>
    <p><a href="logout.php">Log out</a></p>
    <p><a href="admin.php">Back</a></p>
    <!-- a table with separate rows and columns as cells-->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Userlevel</th>
            <th>Status</th>
        </tr>
        <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "users_db");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the data from the database
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        // Loop through the data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td>{$row['userlevel']}</td>";
            echo "<td>{$row['status']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>