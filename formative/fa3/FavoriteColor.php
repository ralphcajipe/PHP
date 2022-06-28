<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Favorite Colors</title>
</head>

<body>
    <h2 style="margin-left: 20px;"> This is FavoriteColor.php </h2>
    <form action="FavoriteColor.php" method="post">
        <!-- Make table move a little bit to the right -->
        <table border="1" style="margin-left: 20px;">
            <tr>
                <!--Center the title-->
                <td colspan="2" align="center">
                    Enter your favorite colors
                </td>
            </tr>
            <tr>
                <td>Favorite color 1:</td>
                <td><input type="text" name="color1"></td>
            </tr>
            <tr>
                <td>Favorite color 2:</td>
                <td><input type="text" name="color2"></td>
            </tr>
            <tr>
                <td>Favorite color 3:</td>
                <td><input type="text" name="color3"></td>
            </tr>
            <tr>
                <td>Favorite color 4:</td>
                <td><input type="text" name="color4"></td>
            </tr>
            <tr>
                <td>Favorite color 5:</td>
                <td><input type="text" name="color5"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="send colors" value="send colors">
                </td>
            </tr>
        </table>
    </form>

    <!--
    After the user clicks the submit button, the ResultColors.php page must be included.
    -->
    <?php
    include 'ResultColors.php';
    ?>
</body>

</html>