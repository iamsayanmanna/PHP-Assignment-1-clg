<html>
<body>

<h2>User Registration</h2>

<form method="post">

Full Name:
<input type="text" name="name">
<br><br>

Date of Birth:
<input type="date" name="dob">
<br><br>

Email ID:
<input type="text" name="email">
<br><br>

Mobile:
<input type="text" name="mobile">
<br><br>

<input type="checkbox" name="terms">
I Agree to Terms and Conditions

<br><br>

<input type="submit" value="Register">

</form>

<?php

if(isset($_POST["name"]))
{
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    if(str_word_count($name) != 2)
    {
        echo "Error: Full name must contain two words.";
    }
    else if(empty($dob))
    {
        echo "Error: Enter Date of Birth.";
    }
    else if((date("Y") - date("Y", strtotime($dob))) < 18)
    {
        echo "Error: You must be above 18 years old.";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Error: Invalid Email ID.";
    }
    else if(!preg_match("/^[0-9]{10}$/", $mobile))
    {
        echo "Error: Mobile number must be 10 digits.";
    }
    else if(!isset($_POST["terms"]))
    {
        echo "Error: You must agree to the terms and conditions.";
    }
    else
    {
        echo "Successful Registration";
    }
}

?>

</body>
</html>