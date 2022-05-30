<!--
Create a Student Resume into a web based form, using include() and require() PHP functions to connect all PHP pages. 

Implement a HTML and CSS code for the structure and design of the webpage.

Include and create the following PHP pages:
- Career Objective page
- Personal information page
- Educational Attainment page
- Skills page
- Affiliation page
- Work Experience Page

It should on a table with a border of 1px.

Row 1, Column 1:
- Image of the student
Row 1, Column 2:
- Personal Information like name, address, contact number, email address
Row 2:
- Career Objective
Row 3:
- Educational Attainmen page
Row 4:
- Skills page
Row 5:
- Affiliation page
Row 6:
- Work Experience page
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ralph Cajipe - Student Resume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resume.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="images/ralph.jpg" alt="profile picture" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h2>Ralph Cajipe</h2>
                <?php include 'personal_info.php'; ?>
                
                <h3>Career Objective</h3>
                <?php include 'career_objective.php'; ?>
                
                <h3>Educational Attainment</h3>
                <?php include 'educational_attainment.php'; ?>
                
                <h3>Skills</h3>
                <?php include 'skills.php'; ?>
                
                <h3>Affiliation</h3>
                <?php include 'affiliation.php'; ?>
                
                <h3>Work Experience</h3>
                <?php include 'work_experience.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>