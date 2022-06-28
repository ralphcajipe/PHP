<html>

<head>
    <title>DogView.php</title>
</head>

<body>
    <h1>🐾 List of Dogs</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dog_registration";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM dog_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<br>Dog " . $row["id"] . ":<br>";
            echo "Name: " . $row["name"] . "<br>";
            echo "Breed: " . $row["breed"] . "<br>";
            echo "Age: " . $row["age"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";
            echo "Color: " . $row["color"] . "<br>";
            echo "Height: " . $row["height"] . "<br>";
            echo "Weight: " . $row["weight"] . "<br>";
            echo "--------------------------------<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>