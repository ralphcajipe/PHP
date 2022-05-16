<!-- 
    This is a PHP web page that will display a multiplication table.
    The table is displayed in a table with a border of 1px.
    The table is 11 rows and 11 columns with alternating color. 
-->

<html>

<head>
    <title>Multiplication Table</title>
</head>

<body>
    <h1>Multiplication Table</h1>
    <?php
            /* This is creating a table with 11 rows and 11 columns. Each cell is alternating between
            yellow and red by row and column. The table has a border of 1px. */
            echo "<table border='1'>";
            for ($row = 0; $row <= 10; $row++) {
                echo "<tr>";
                for ($col = 0; $col <= 10; $col++) {
                    // Alternate between yellow and red by row and column
                    if ($row % 2 == 0) {
                        if ($col % 2 == 0) {
                            echo "<td bgcolor='yellow'>";
                        } else {
                            echo "<td bgcolor='red'>";
                        }
                    } else {
                        if ($col % 2 == 0) {
                            echo "<td bgcolor='red'>";
                        } else {
                            echo "<td bgcolor='yellow'>";
                        }
                    }
                    // Display the product of the row and column
                    echo $row * $col;
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            // Add space between tables
            echo "<br><br>";

            /* Creating a multiplication table without the alternating colors. */
            echo "<table border=1>";
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr>";
                    for ($j = 0; $j <= 10; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                echo "</tr>";
            }
            echo "</table>";
        ?>
</body>

</html>