<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Naruto Short Stories</title>
</head>

<body>
    <?php
    require("header.php");
    echo "<table border='1'>";
    echo "<tr><td><center>Story 1</td><td><center>Story 2</td><td><center>Story 3</td><td><center>
            Story 4</td><td><center>Story 5</td></tr>";
    echo "<tr><td>";
    include("story1.php");
    echo "</td><td>";
    include("story2.php");
    echo "</td><td>";
    include("story3.php");
    echo "</td><td>";
    include("story4.php");
    echo "</td><td>";
    include("story5.php");
    echo "</td></tr>";
    echo "</table>";
    ?>
</body>

</html>