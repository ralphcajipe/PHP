<html>
    <title>Grade Ranking</title>
    <body>
        <?php
        /* A PHP page about grade ranking, integrated with HTML and CSS to display the results.
        Using conditional statement create a grade ranking program, integrated with HTML and CSS.

        Prompts the user to enter student's name and grade.

        Use the equivalents below:
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
        */

        // Define the variables
        const STDIN = 0;
        $name = "";
        $grade = "";

        // Prompt the user to enter the student's name
        echo "Enter the student's name: ";
        $name = trim(fgets(STDIN));

        // Prompt the user to enter the student's grade
        echo "Enter the student's grade: ";
        $grade = trim(fgets(STDIN));

        // Use the conditional statement to display the results
        if ($grade >= 93) {
            echo $name . " has a grade of " . $grade . " and is in the A+ range.";
        } elseif ($grade >= 90) {
            echo $name . " has a grade of " . $grade . " and is in the A range.";
        } elseif ($grade >= 87) {
            echo $name . " has a grade of " . $grade . " and is in the A- range.";
        } elseif ($grade >= 83) {
            echo $name . " has a grade of " . $grade . " and is in the B+ range.";
        } elseif ($grade >= 80) {
            echo $name . " has a grade of " . $grade . " and is in the B range.";
        } elseif ($grade >= 77) {
            echo $name . " has a grade of " . $grade . " and is in the B- range.";
        } elseif ($grade >= 73) {
            echo $name . " has a grade of " . $grade . " and is in the C+ range.";
        } elseif ($grade >= 70) {
            echo $name . " has a grade of " . $grade . " and is in the C range.";
        } elseif ($grade >= 67) {
            echo $name . " has a grade of " . $grade . " and is in the C- range.";
        } elseif ($grade >= 63) {
            echo $name . " has a grade of " . $grade . " and is in the D+ range.";
        } elseif ($grade >= 60) {
            echo $name . " has a grade of " . $grade . " and is in the D range.";
        } else {
            echo $name . " has a grade of " . $grade . " and is in the F range.";
        }


        ?>
    </body>
  
</html>
