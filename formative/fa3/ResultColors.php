<html>

<head>
    <link rel="stylesheet" href="color_style.css">
    <title>Result of Colors</title>
</head>

<!--
    This is the result of the form that will display the colors that were entered.

    Example:

    My Favorite Color 1: Red
    My Favorite Color 2: Green
    My Favorite Color 3: Blue
    My Favorite Color 4: Orange
    My Favorite Color 5: Yellow
    -->

<body>
    <?php
    // Set the session variables
    $_SESSION["color1"] = $_POST["color1"];
    $_SESSION["color2"] = $_POST["color2"];
    $_SESSION["color3"] = $_POST["color3"];
    $_SESSION["color4"] = $_POST["color4"];
    $_SESSION["color5"] = $_POST["color5"];

    ?>
    <h2>This is ResultColors.php</h2>
    <p>My Favorite Color 1: <?php echo $_SESSION["color1"]; ?></p>
    <p>My Favorite Color 2: <?php echo $_SESSION["color2"]; ?></p>
    <p>My Favorite Color 3: <?php echo $_SESSION["color3"]; ?></p>
    <p>My Favorite Color 4: <?php echo $_SESSION["color4"]; ?></p>
    <p>My Favorite Color 5: <?php echo $_SESSION["color5"]; ?></p>
</body>

</html>