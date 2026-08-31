<?php

$email = "sayanmanna.in@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "Valid Email";
}
else
{
    echo "Invalid Email";
}

?>