<html>
<body>

<form method="post">

Enter a Number:
<input type="number" name="number">

<input type="submit" value="Check">

</form>

<?php

if(isset($_POST["number"]))
{
    $number = $_POST["number"];

    if($number % 2 == 0)
    {
        echo "Even Number";
    }
    else
    {
        echo "Odd Number";
    }
}

?>

</body>
</html>