<html>

<head>
    <link rel="stylesheet" href="register_style_a.css">
    <title>Register</title>
</head>

<body>
    <form action="register.php" method="post">
        <h1>😊 Register</h1>
        <p>
            <b>My Personal Information</b>
        </p>
        <p>
            <label>First Name:</label>
            <input type="text" name="firstName" required />
        </p>
        <p>
            <label>Middle Name:</label>
            <input type="text" name="middleName" />
        </p>
        <p>
            <label>Last Name:</label>
            <input type="text" name="lastName" required />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" required />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" required />
        </p>
        <p>
            <label>Confirm Password:</label>
            <input type="password" name="confirmPassword" required />
        </p>

        <!-- Choose Date of Birth using 3 select boxes -->
        <p>
            <label>Birthday:</label>
            <select name="birthday_month">
                <option value="">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="birthday_day">
                <option value="">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <!-- Select box for birth year ranges from 1940 to current year -->
            <select name="birthday_year">
                <option value="">Year</option>
                <?php
                for ($i = 1940; $i <= date('Y'); $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </p>

        <p>
            <label>Email:</label>
            <input type="email" name="email" required />
        </p>
        <p>
            <label>Contact Number:</label>
            <input type="text" name="contactNumber" required />
        </p>
        <p>
            <input type="submit" value="Submit" />
        </p>
        <p>
            &copy; Ralph Cajipe
        </p>
    </form>

    <?php
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['email']) && isset($_POST['contactNumber'])) {
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactNumber'];
        $birthday = $_POST['birthday_month'] . "/" . $_POST['birthday_day'] . "/" . $_POST['birthday_year'];

        // Transform the birthday input into a word format
        $birthday = date("F j, Y", strtotime($birthday));

        if ($password == $confirmPassword) {
            // Print a text called "Result" in header 2 format
            echo "<h2>✅ Result</h2>";

            // Concatenate the first name, middle name, and last name to form a full name
            $fullName = $firstName . " " . $middleName . " " . $lastName;
            echo "<p>Full Name: $fullName</p>";
            echo "<p>Username: " . $username . "</p>";
            echo "<p>Password: " . $password . "</p>";
            echo "<p>Birthday: " . $birthday . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Contact Number: " . $contactNumber . "</p>";
        } else {
            echo "<p style='color:red'>Password and Confirm Password are not the same</p>";
        }
    }

    // Connect to the database
    $db = new mysqli("localhost", "root", "", "user_registration");
    
    // Check if the connection is successful
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // If the submit button is clicked
    if (isset($_POST['first_name']) 
    && isset($_POST['middle_name']) 
    && isset($_POST['last_name']) 
    && isset($_POST['username']) 
    && isset($_POST['password']) 
    && isset($_POST['birthday']) 
    && isset($_POST['email']) 
    && isset($_POST['contact_number'])) {
        // Insert the data into the database
        $sql = "INSERT INTO user_info (first_name, middle_name, last_name, username, password, 
        birthday, email, contact_number) 
        VALUES ('" . $_POST['first_name'] . "', '" . $_POST['middle_name'] . "', '" 
        . $_POST['last_name'] . "', '" . $_POST['username'] . "', '" . $_POST['password'] . "', '" 
        . $_POST['birthday'] . "', '" . $_POST['email'] . "', '" . $_POST['contact_number'] . "')";

        // Check if the query is successful
        if ($db->query($sql) === TRUE) {
            echo "<p>New record created successfully</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $db->error . "</p>";
        }
    
        // Close the connection
        $db->close();
    }
    ?>
</body>

</html>