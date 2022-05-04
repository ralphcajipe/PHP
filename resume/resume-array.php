<!--Create a simple PHP page about a software engineer resume-->

<html lang="en">
<head>
    <title>Hello</title>
<body>
<?php
    $resume = array(
        'name' => 'John Doe',
        'age' => '30',
        'experience' => '2 years',
        'education' => 'B.S. in Computer Science',
        'skills' => array(
            'Languages' => array(
                'PHP', 'HTML', 'CSS'
            ),
            'Web Development' => array(
                'HTML', 'CSS', 'JavaScript', 'jQuery', 'Bootstrap'
            ),
            'Database' => array(
                'MySQL', 'SQLite'
            )
        )
    );

    print "<h1>{$resume['name']}</h1>";
    print "<h2>Age: {$resume['age']}</h2>";
    print "<h2>Experience: {$resume['experience']}</h2>";
    print "<h2>Education: {$resume['education']}</h2>";
    print '<ul>';
    foreach ($resume['skills'] as $skill_type => $skills) {
        print "<li>$skill_type</li>";
        print '<ul>';
        foreach ($skills as $skill) {
            print "<li>$skill</li>";
        }
        print '</ul>';
    }
    print '</ul>';
    
?>
</body>
</html>