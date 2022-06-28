<html>
    <head>
        <title>Dog Register</title>
    </head>

    <!--
    DogRegister.php
    Using MySQL create 10 records for the DOG Information use the following fields 
    Name, Breed, Age, Address, Color, Height and Weight. Integrate HTML, CSS and PHP.

    Example View of the webpage (DogRegister.php):

    Name: <input type="text" name="name">
    Breed: <input type="text" name="breed">
    Age: <input type="text" name="age">
    Address: <input type="text" name="address">
    Color: <input type="text" name="color">
    Height: <input type="text" name="height">
    Weight: <input type="text" name="weight">
    <input type="submit" name="save" value="Save">
    &copy Ralph Cajipe
    -->
    <body>
        <h2>This is DogRegister.php</h2>
        <form action="DogRegister.php" method="post">
            <table border="1">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Breed:</td>
                    <td><input type="text" name="breed"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Color:</td>
                    <td><input type="text" name="color"></td>
                </tr>
                <tr>
                    <td>Height:</td>
                    <td><input type="text" name="height"></td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td><input type="text" name="weight"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="save" value="Save"></td>
                </tr>
            </table>
        </form>
        <?php
            // Set the session variables
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["breed"] = $_POST["breed"];
            $_SESSION["age"] = $_POST["age"];
            $_SESSION["address"] = $_POST["address"];
            $_SESSION["color"] = $_POST["color"];
            $_SESSION["height"] = $_POST["height"];
            $_SESSION["weight"] = $_POST["weight"];
        ?>
    </body>



</html>