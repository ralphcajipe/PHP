<?php
// When user clicks on search button or presses enter, this code runs and checks whether 
// the word is in words.txt.
// If the  word is in words.txt, it will display that it is found.
// Else, it should display that the word is not found.

// Checking if the user has clicked on the search button or pressed enter.
if (isset($_GET['word'])) 
{
    // Opening the file words.txt and reading it.
    // A text file containing over 466k English words.
    // Text file source: https://github.com/dwyl/english-words
    $word = $_GET['word'];
    $file = fopen("words.txt", "r");

    // Checking if the file has reached the end of the file.
    while (!feof($file)) 
    {
        // Reading the file line by line.
        $line = fgets($file);
        // Checking if the word is in the line.
        if (strpos($line, $word) !== false) 
        {
            // Center the result
            echo "<div class='text-center'>";
            echo "<h3>✅Found $word in words.txt</h3>";
            echo "</div>";
            // Provide definition of the word via bing search.
            echo "<div class='text-center'>";
            echo "<h4>Definition:</h4>";
            echo "<p>";
            echo "<a href='https://www.bing.com/search?q=$word+definition' target='_blank'>";
            echo "Click here to see the definition of $word";
            echo "</a>";
            echo "</p>";
            echo "</div>";
            // Provide an example of the word via google search.
            echo "<div class='text-center'>";
            echo "<h4>Example:</h4>";
            echo "<p>";
            echo "<a href='https://www.bing.com/search?q=$word+example' target='_blank'>";
            echo "Click here to see an example of $word";
            echo "</a>";
            echo "</p>";
            echo "</div>";
            break;
        }
        // Checking if the file has reached the end of the file because 
        // the word is not in the fie.
        elseif (feof($file)) 
        {
            // Center the result
            echo "<div class='text-center'>";
            echo "<h3>❌\"$word\" cannot be found</h3>";
            echo "</div>";
            break;
        }
    }
    // Closing the file.
    fclose($file);
}
?>