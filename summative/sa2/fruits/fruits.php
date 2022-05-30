<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits</title>
    <link rel="stylesheet" href="fruits-styles.css">
</head>

<body>
    <table border="2">
        <tr>
            <td colspan="4" align="center">My Fruits</td>
        </tr>
        <tr>
            <td align="center">Image</td>
            <td align="center">Name</td>
            <td align="center">Description</td>
            <td align="center">Facts</td>
        </tr>
        <?php
        $fruits = array(
            array(
                "name" => "Banana", "img" => "images/banana.jpg", "description" => "Color Yellow",
                "facts" => "Bananas are a healthy addition to a balanced diet, as they provide a range of 
            vital nutrients and are a good fource of fiber."
            ),

            array(
                "name" => "Apple", "img" => "images/apple.jpg", "description" => "Color Red",
                "facts" => "Apples are a good source of vitamin C, which is important for normal blood
            clotting and normal heart function."
            ),

            array(
                "name" => "Orange", "img" => "images/orange.jpg", "description" => "Color Orange",
                "facts" => "Oranges are a good source of vitamin C, which is important for normal blood
            clotting and normal heart function."
            ),

            array(
                "name" => "Strawberry", "img" => "images/strawberry.jpg", "description" => "Color Red",
                "facts" => "Strawberry is low in calories (32 cal/100 g) and fats but rich source of 
            health-promoting phytonutrients, minerals, and vitamins."
            ),

            array(
                "name" => "Watermelon", "img" => "images/watermelon.jpg", "description" => "Color Red",
                "facts" => "Rich in electrolytes and water content, melons are nature's gift to beat the tropical 
            summer thirst."
            ),

            array(
                "name" => "Pineapple", "img" => "images/pineapple.jfif", "description" => "Color Yellow",
                "facts" => "Fresh pineapple is low in calories. Nonetheless, it is a storehouse for several 
            unique health-promoting compounds, minerals, and vitamins."
            ),

            array(
                "name" => "Mango", "img" => "images/mango.jpg", "description" => "Color Yellow",
                "facts" => "Mango fruit is rich in pre-biotic dietary fiber, vitamins, minerals, 
            and poly-phenolic flavonoid antioxidant compounds."
            ),

            array(
                "name" => "Coconut", "img" => "images/coconut.jpg", "description" => "Color Brown",
                "facts" => "If you choose to drink coconut water, you will be happy to know that it is quite 
            low in carbs, calories, sugar, and nearly fat-free."
            ),

            array(
                "name" => "Papaya", "img" => "images/papaya.jpg", "description" => "Color Yellow",
                "facts" => "Papayas contain soft, easily digestible flesh with a good amount of soluble dietary 
            fiber that helps to have normal bowel movements."
            ),

            array(
                "name" => "Kiwi", "img" => "images/kiwi.jpg", "description" => "Color Green",
                "facts" => "Kiwifruit is comparable to that of grapes. It has many health-benefiting 
            antioxidants, minerals, vitamins, and fiber."
            ),
        );
        // Sort the fruits by name
        sort($fruits);
        // Loop through the fruits
        foreach ($fruits as $fruit) {
            echo "<tr>";
            echo "<td><img src='" . $fruit["img"] . "'></td>";
            echo "<td>" . $fruit["name"] . "</td>";
            echo "<td>" . $fruit["description"] . "</td>";
            echo "<td>" . $fruit["facts"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>