<html>

<head>
    <title>Length Conversion</title>
</head>

<body>
    <form action="" method="post">

        <h1>Length Conversion</h1>

        <!--Insert an image of a dummy persone on the right side of the page-->
        <img src='https://is2-ssl.mzstatic.com/image/thumb/Purple118/v4/d2/5f/b4/d25fb4a3-c646-72b7-d89c-afabd3e4c964/source/512x512bb.jpg'
            width='100' height='100'>

        <p>Enter the length in meters:</p>
        <input type="text" name="length" placeholder="Enter the length in meters" required>
        <br>
        <br>
        <input type="submit" value="Submit">
        <br>
        <br>

        <?php
                // Echo the user's length input
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    echo $length ."m";
                    echo "<br>";
                }

                // Echo the user's length in centimeters
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in centimeters is: " . $length * 100;
                    } else {
                        echo "The length in centimeters is: " . $length * 100;
                    }
                    echo "<br>";
                }

                // Echo the user's length in inches
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in inches is: " . $length * 39.37;
                    } else {
                        echo "The length in inches is: " . $length * 39.37;
                    }
                    echo "<br>";
                }

                // Echo the user's length in feet
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in feet is: " . $length * 3.28084;
                    } else {
                        echo "The length in feet is: " . $length * 3.28084;
                    }
                    echo "<br>";
                }

                // Echo the user's length in yards
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in yards is: " . $length * 1.09361;
                    } else {
                        echo "The length in yards is: " . $length * 1.09361;
                    }
                    echo "<br>";
                }

                // Echo the user's length in miles
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in miles is: " . $length * 0.000621371;
                    } else {
                        echo "The length in miles is: " . $length * 0.000621371;
                    }
                    echo "<br>";
                }

                // Echo the user's length in kilometers
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in kilometers is: " . $length * 0.001;
                    } else {
                        echo "The length in kilometers is: " . $length * 0.001;
                    }
                    echo "<br>";
                }

                // Echo the user's length in millimeters
                if (isset($_POST['length'])) {
                    $length = $_POST['length'];
                    if ($length >= 1) {
                        echo "The length in millimeters is: " . $length * 1000;
                    } else {
                        echo "The length in millimeters is: " . $length * 1000;
                    }
                    echo "<br>";
                }

            ?>
    </form>
</body>
</body>

</html>