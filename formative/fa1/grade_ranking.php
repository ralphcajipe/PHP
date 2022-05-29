<!-- 
Using conditional statement create a PHP grade ranking program, with HTML and CSS.

Example
A: 93-100
A-: 90-92
B+: 87-89
B: 83-86
B-: 80-82
C+: 77-79
C: 73-76
C-: 70-72
D+: 67-69
D: 63-66
D-: 60-62
F: Below 60
   
-->
<html>

<head>
    <title>Grade Ranking</title>
</head>

<body>
    <form action="" method="post">

        <!-- Ask the user for their name and grade -->
        <h1>Grade Ranking</h1>

        <!--Insert an image of a dummy persone on the right side of the page-->
        <img src='https://conservation-innovations.org/wp-content/uploads/2019/09/Dummy-Person.png' width='100'
            height='100'>

        <p>Name:</p>
        <input type="text" name="name" placeholder="Enter your name" required>
        <p>Grade:</p>
        <input type="text" name="grade" placeholder="Enter your grade required">
        <br>
        <br>
        <input type="submit" value="Submit">
        <br>
        <br>

        <?php
            // Echo the user's name
            if (isset($_POST['name'])) {
                echo $_POST['name'];
                echo "<br>";
            }

            // Echo the user's rank
            if (isset($_POST['grade'])) {
                $grade = $_POST['grade'];
                if ($grade >= 93 && $grade <= 100) {
                    echo "Rank: A";
                } elseif ($grade >= 90 && $grade <= 92) {
                    echo "Rank: A-";
                } elseif ($grade >= 87 && $grade <= 89) {
                   echo "Rank: B+";
                } elseif ($grade >= 83 && $grade <= 86) {
                    echo "Rank: B";
                } elseif ($grade >= 80 && $grade <= 82) {
                    echo "Rank: B-";
                } elseif ($grade >= 77 && $grade <= 79) {
                    echo "Rank: C+";
                } elseif ($grade >= 73 && $grade <= 76) {
                    echo "Rank: C";
                } elseif ($grade >= 70 && $grade <= 72) {
                    echo "Rank: C-";
                } elseif ($grade >= 67 && $grade <= 69) {
                    echo "Rank: D+";
                } elseif ($grade >= 63 && $grade <= 66) {
                    echo "Rank: D";
                } elseif ($grade >= 60 && $grade <= 62) {
                    echo "Rank: D-";
                } elseif ($grade < 60) {
                    echo "Rank: F";
                }
                echo "<br>";
            }

             // Echo the user's grade
             if (isset($_POST['grade'])) {
                echo "Grade: ".$_POST['grade'];
                echo "<br>";
            }

            ?>
    </form>
</body>

</html>