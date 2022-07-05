<?php
// Create file function to upload image for the admin/user

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "users_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the submit button is clicked
if (isset($_POST['submit'])) {
    // Get the data from the form
    $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "img/";
    // Insert the data into the database
    $sql = "INSERT INTO images (file, file_loc, file_size, file_type) VALUES ('$file', '$file_loc', '$file_size', '$file_type')";
    $result = mysqli_query($conn, $sql);
    // Upload the file to the server
    move_uploaded_file($file_loc, $folder . $file);
    // Display the success message
    echo "File uploaded successfully";
}
?>

// If the user has uploaded a file, display the image as profile picture

// If the user has not uploaded a file, display the default profile picture

