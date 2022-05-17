<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Set a margin for the page -->
    <div style="margin: 45px;">

        <!--Header called "Student Registration Form"
        Align this to right side of page
    -->
        <h3 align="right">Student Registration Form</h3>
        <hr>

        <form method="POST" action="student_registration.php">

            <!--Student Information header enclosed in a box-->
            <fieldset>
                <legend><b>Student Information</b></legend>

                <!--Form fields-->
                <label>Last Name:</label>
                <input type="text" name="last_name" placeholder="" required>

                <label>First Name:</label>
                <input type="text" name="first_name" placeholder="" required>

                <label>Middle Name:</label>
                <input type="text" name="middle_name" placeholder="">

                <br>
                <br>
                <label>Gender:</label>
                <!-- Male or Yes radio buttons -->
                <input type="radio" name="male" value="Male"> Male
                <input type="radio" name="female" value="Male"> Female
                <?php
        // Print some spaces
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp";
        ?>

                <label>Date of Birth:</label>
                <input type="date" name="date_of_birth" required>
            </fieldset>

            <br>
            <br>

            <!--Previous SchoolInformation header enclosed in a box-->
            <fieldset>
                <legend><b>Previous School Information</b></legend>

                <!--Form fields-->
                <label>Name of Previous School/Municipality:</label>
                <input type="text" name="name_of_previous_school" placeholder="" required>

                <label>Last date attended:</label>
                <input type="date" name="last_date_attended" required>

                <br>
                <br>

                <label>Name of Previous School:</label>
                <input type="text" name="name_of_previous_school" placeholder="" required>

                <label>Grade at previous school:</label>
                <input type="text" name="grade_at_previous_school" placeholder="" required>

                <br>
                <br>

                <label>Language of Instruction:</label>
                <input type="text" name="language_of_instruction" placeholder="" required>

                <label>Reason for Transfer:</label>
                <input type="text" name="reason_for_transfer" placeholder="" required>
            </fieldset>

            <br>
            <br>

            <!--Health Information header enclosed in a box-->
            <fieldset>
                <legend><b>Health Information</b></legend>

                <!--Form fields-->
                <label>Medical Conditions (include information on special equipment or medication, if required:)</label>
                <!-- Underline form fields -->
                <br>
                <textarea name="medical_conditions" rows="5" cols="50" placeholder=""></textarea>

                <br>
                <br>
            </fieldset>

            <br>
            <br>

            <!--Citizenship Information header enclosed in a box-->
            <fieldset>
                <legend><b>Citizenship Information</b></legend>

                <!--Form fields-->
                <label>Birth Country:</label>
                <input type="text" name="birth_country" placeholder="" required>

                <label>If Canada, Province of Birth:</label>
                <input type="text" name="province_of_birth" placeholder="" required>

                <br>
                <br>
                <label>Country of Citizenship:</label>
                <input type="text" name="country_of_citizenship" placeholder="" required>

                <br>
                <br>

                <label>If student not born in Canada, provide date student entered Canada to live for the first
                    time:</label>
                <input type="date" name="date_student_entered_canada" required>

                <br>
                <br>

                <label><em>For School Use</em> <b>- Status in Canada:</b></label>
                <br>
                <input type="radio" name="status" value="Canadian Citizen"> Canadian Citizen
                <input type="radio" name="status" value="Permanent Resident / Landed Immigrant"> Permanent Resident /
                Landed Immigrant
                <br>
                <input type="radio" name="status" value="Study Permit / Student Visa"> Study Permit / Student Visa
                <input type="radio" name="status" value="Refugee Claimant"> Refugee Claimant
                <br>
                <input type="radio" name="status" value="Native Ancestry"> Native Ancestry
                <br>
                <input type="radio" name="status" value="Native Ancestry"> Others (specify):
                <input type="text" name="status" placeholder="">

            </fieldset>

            <br>
            <br>

            <!--Submit button-->
            <input type="submit" name="submit" value="Submit">

            <!--Reset button-->
            <input type="reset" name="reset" value="Reset">

        </form>

        <?php
    // If the submit button is clicked, then the following code will run
    if (isset($_POST['submit'])) {
        // Declare variables
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $name_of_previous_school = $_POST['name_of_previous_school'];
        $last_date_attended = $_POST['last_date_attended'];
        $name_of_previous_school = $_POST['name_of_previous_school'];
        $grade_at_previous_school = $_POST['grade_at_previous_school'];
        $language_of_instruction = $_POST['language_of_instruction'];
        $reason_for_transfer = $_POST['reason_for_transfer'];
        $medical_conditions = $_POST['medical_conditions'];
        $birth_country = $_POST['birth_country'];
        $province_of_birth = $_POST['province_of_birth'];
        $country_of_citizenship = $_POST['country_of_citizenship'];
        $date_student_entered_canada = $_POST['date_student_entered_canada'];
        $status = $_POST['status'];

        // Print the data in a table format with cells aligned to the left

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Last Name</th>";
        echo "<td>" . $last_name . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>First Name</th>";
        echo "<td>" . $first_name . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Middle Name</th>";
        echo "<td>" . $middle_name . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Date of Birth</th>";
        echo "<td>" . $date_of_birth . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Name of Previous School</th>";
        echo "<td>" . $name_of_previous_school . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Last Date Attended</th>";
        echo "<td>" . $last_date_attended . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Name of Previous School</th>";
        echo "<td>" . $name_of_previous_school . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Grade at Previous School</th>";
        echo "<td>" . $grade_at_previous_school . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Language of Instruction</th>";
        echo "<td>" . $language_of_instruction . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Reason for Transfer</th>";
        echo "<td>" . $reason_for_transfer . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Medical Conditions</th>";
        echo "<td
        style='width: 500px; height: 100px;'>" . $medical_conditions . "</td>";
        echo "<tr>";
        echo "<th>Birth Country</th>";
        echo "<td>" . $birth_country . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>If Canada, Province of Birth</th>";
        echo "<td>" . $province_of_birth . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Country of Citizenship</th>";
        echo "<td>" . $country_of_citizenship . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>If student not born in Canada, provide date student entered Canada to live for the first time</th>";
        echo "<td>" . $date_student_entered_canada . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>For School Use - Status in Canada</th>";
        echo "<td>" . $status . "</td>";
        echo "</tr>";
        echo "</table>";
         
    }
    ?>

</body>

</html>