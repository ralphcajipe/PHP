<html>

<head>
    <title>DogRegister.php</title>
</head>

<body>
    <h1>🐶 Register Dog Information</h1>
    <form action="DogRegister.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Breed:</td>
                <td><input type="text" name="breed" /></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age" /></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" /></td>
            </tr>
            <tr>
                <td>Color:</td>
                <td><input type="text" name="color" /></td>
            </tr>
            <tr>
                <td>Height:</td>
                <td><input type="text" name="height" /></td>
            </tr>
            <tr>
                <td>Weight:</td>
                <td><input type="text" name="weight" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save" /></td>
            </tr>
        </table>
        <tr>
            <td>&copy; Ralph Cajipe</td>
        </tr>
    </form>
    <?php
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "dog_registration");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // If the submit button is clicked
    if (isset($_POST['submit'])) {
        // Get the data from the form
        $name = $_POST['name'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $color = $_POST['color'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        // Insert the data into the database
        $sql = "INSERT INTO dog_info (name, breed, age, address, color, height, weight) 
        VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Close the connection
    mysqli_close($conn);
    ?>

</body>

</html>