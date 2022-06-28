<?php
function validate_email($email_address)
/**
 * This validates an email address by checking if the email address matches a regular
 * expression.
 * 
 * @param email_address The email address to validate.
 * 
 * @return a boolean value.
 */
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

// Get the email address from the user.
$email_address = $_POST['email_address'];

// Function call
$valid_email = validate_email($email_address);
