<html>
    <head>
        <title>number_format</title>
    </head>
    <body>
        <?php
            $price = 217795.75;
            echo number_format($price)."<br>";
            echo number_format($price, 2, '.', '')."<br>";
            echo number_format($price, 2, '.', ',')."<br>";
            
            echo number_format($price, 3)."<br>";
            echo number_format($price, 5, '.', ',')."<br>";
        ?>
    </body>
</html>
