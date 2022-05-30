<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Function - List of Names</title>
</head>

<body>
    <table border="2">
        <tr>
            <td colspan="6" align="center">
                <h2>List of Names</h2>
            </td>
        </tr>
        <tr>
            <td align="center">
                Name
            </td>
            <td align="center">
                Number of<br>characters
            </td>
            <td align="center">
                Uppercase first<br>character
            </td>
            <td align="center">
                Replace vowels<br>with @
            </td>
            <td align="center">
                Check position of<br>character "a"
            </td>
            <td align="center">
                Reverse<br>name
            </td>
        </tr>
        <?php
        $names = array("guido", "alan", "tim", "ken", "larry", "sergey", "ada", "geoffrey", "yann", "andrew");
        foreach ($names as $name) 
        {
            echo "<tr>";
            echo "<td align='center'>" . $name . "</td>";
            echo "<td align='center'>" . strlen($name) . "</td>";
            echo "<td align='center'>" . ucfirst($name) . "</td>";
            echo "<td align='center'>" . str_replace(array("a", "e", "i", "o", "u"), "@", $name) . "</td>";
            echo "<td align='center'>" . strpos($name, "a") . "</td>";
            echo "<td align='center'>" . strrev($name) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>