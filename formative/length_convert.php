<html>
    <title>Length Conversion</title>
    <body>
        <?php
        /* Create a PHP page about length conversion, 
         * integrated with HTML and CSS to display the results.
         */
        
         // Define the variables
            $length = $_POST['length'];
            $unit = $_POST['unit'];
            $converted = 0;

            // Convert the length to meters
            if ($unit == "m") {
                $converted = $length;
            } elseif ($unit == "cm") {
                $converted = $length / 100;
            } elseif ($unit == "mm") {
                $converted = $length / 1000;
            } elseif ($unit == "in") {
                $converted = $length / 39.3701;
            } elseif ($unit == "ft") {
                $converted = $length / 3.28084;
            } elseif ($unit == "yd") {
                $converted = $length / 1.09361;
            }

            // Display the results
            echo "The length is $length $unit<br>";
            echo "The length in meters is $converted m";
            
        ?>
</html>