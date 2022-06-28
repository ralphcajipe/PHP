<?php
// A regex email validation function.
// User will enter an email address and the function will check if the email address is valid.
// If the email address is valid, the function will return true.
// If the email address is not valid, the function will return false.

// Get the email address from the user.
$email_address = $_POST['email'];

function validate_email($email_address)
{
    // A regular expression for email validation.
    if (!preg_match("/^([a-zA-Z0-9]+([a-zA-Z0-9\._-])
    *@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email_address)) 
    {
        return false;
    } 
    else 
    {
        return true;
    }
}




?>