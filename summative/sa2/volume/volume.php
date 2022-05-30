<html lang="en">

<head>
    <!-- Telling the browser what character set to use. -->
    <meta charset="UTF-8">

    <!-- Telling the browser to use the device's width as the width of the page. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Telling the browser to use the latest version of IE. -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="volume-styles.css">
</head>

<body>
    <?php
    /**
     * The function cube() takes one parameter, s, and returns the volume of a cube with side length.
     *
     * The function rightRectangularPrism() takes three parameters, l, w, and h, and returns the
     * volume of a right rectangular prism with length , width , and height.
     *
     * The function cylinder() takes two parameters, r and h, and returns the volume of a cylinder
     * with radius and height.
     *
     * The function pyramid() takes three parameters, l, w, and h, and returns the volume of a
     * pyramid with length , width , and height.
     *
     * The function sphere() takes one parameter, r, and returns the volume of a sphere with radius.
     *
     * @param s side length for cube.
     *
     * @return the volume of the shape.
     */
    function cube($s)
    {
        return $s * $s * $s;
    }
    function rightRectangularPrism($l, $w, $h)
    {
        return $l * $w * $h;
    }
    function cylinder($r, $h)
    {
        return $r * $r * pi() * $h;
    }
    function pyramid($l, $w, $h)
    {
        return ($l * $w * $h) / 3;
    }
    function sphere($r)
    {
        return (4 / 3) * M_PI * $r * $r * $r;
    }
    ?>
    <table>
        <tr>
            <th>Volume of Shapes</th>
        </tr>
        <tr>
            <td>Shape</td>
            <td>Values</td>
            <td>Formula</td>
            <td>Answer</td>
        </tr>
        <tr>
            <td>🧊Cube</td>
            <td>s = 5</td>
            <td>V = s³</td>
            <td class="answer"><?php echo cube(5); ?></td>
        </tr>
        <tr>
            <td>▋Right Rectangular Prism</td>
            <td>l = 5, w = 10, h = 20</td>
            <td>V = lwh</td>
            <td class="answer"><?php echo rightRectangularPrism(5, 10, 20); ?></td>
        </tr>
        <tr>
            <td>🛢Cylinder</td>
            <td>r = 5, h = 20</td>
            <td>V = πr²h</td>
            <td class="answer"><?php echo cylinder(5, 20); ?></td>
        </tr>
        <tr>
            <td>🔺Pyramid or Cone</td>
            <td>l = 5, w = 10, h = 20</td>
            <td>V = (lwh)/3</td>
            <td class="answer"><?php echo pyramid(5, 10, 20); ?></td>
        </tr>
        <tr>
            <td>🔵Sphere</td>
            <td>r = 5</td>
            <td>V = (4/3)πr³</td>
            <td class="answer"><?php echo sphere(5); ?></td>
        </tr>
    </table>
</body>