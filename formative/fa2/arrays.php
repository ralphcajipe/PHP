<html>

<head>
    <title>Using Arrays</title>
</head>

<body>
    <?php
    // Declaring the array and the variables.
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $addition = 0;
    $subtraction = 0;
    $product = 1;
    $quotient = 1;

    // Creating a table with a border of 1
    echo "<table border='1'>";

    // Creating the first table row with 10 columns and aligning the text to the center.
    echo "<tr><td colspan='10' align='center'>Array List: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</td></tr>";

    /* Looping through the array and adding, subtracting, multiplying and dividing the values
        of the array. */
    for ($i = 0; $i < count($array); $i++) {
        $addition += $array[$i];
        $subtraction -= $array[$i];
        $product *= $array[$i];
        $quotient /= $array[$i];
    }

    // Creating a table with the values of the array.
    echo "<tr><td colspan='2' align='center'>Addition</td><td colspan='2' align='center'>$addition</td></tr>";
    echo "<tr><td colspan='2' align='center'>Subtraction</td><td colspan='2' align='center'>$subtraction</td></tr>";
    echo "<tr><td colspan='2' align='center'>Multiplication</td><td colspan='2' align='center'>$product</td></tr>";
    echo "<tr><td colspan='2' align='center'>Division</td><td colspan='2' align='center'>$quotient</td></tr>";
    echo "</table>";
    ?>

</body>

</html>