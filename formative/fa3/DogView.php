    <!--
    DogView.php
    After click the save button from DogRegister.php, information will save to the database.
    Create separate webpage to show all record of the dog. Please see the example below (DogView.php):

    Dog 1
    Name: <?php echo $row["name"]; ?>
    Breed: <?php echo $row["breed"]; ?>
    Age: <?php echo $row["age"]; ?>
    Address: <?php echo $row["address"]; ?>
    Color: <?php echo $row["color"]; ?>
    Height: <?php echo $row["height"]; ?>
    Weight: <?php echo $row["weight"]; ?>

    If there is another dog, please repeat the above process.

    -->
    <html>
        <head>
            <title>Dog View</title>
        </head>

        <body>
            <h2>This is DogView.php</h2>
            <?php
                // Connect to the database
                $db = mysqli_connect("localhost", "root", "", "dog_db");
                // Check connection
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                // Get the data from the database
                $sql = "SELECT * FROM dog_info";
                $result = mysqli_query($db, $sql);
                // Display the data from the database
                while ($row = mysqli_fetch_array($result)) {
                    echo "Dog " . $row["id"] . "<br>";
                    echo "Name: " . $row["name"] . "<br>";
                    echo "Breed: " . $row["breed"] . "<br>";
                    echo "Age: " . $row["age"] . "<br>";
                    echo "Address: " . $row["address"] . "<br>";
                    echo "Color: " . $row["color"] . "<br>";
                    echo "Height: " . $row["height"] . "<br>";
                    echo "Weight: " . $row["weight"] . "<br>";
                    echo "<br>";
                }
            ?>
    </html>