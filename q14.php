<html>
<body>

<form method="post">

Enter Radius:
<input type="number" name="radius">

<input type="submit" value="Calculate">

</form>

<?php

if(isset($_POST["radius"]))
{
    $radius = $_POST["radius"];

    $area = 3.14 * $radius * $radius;

    $circumference = 2 * 3.14 * $radius;

    echo "Area = " . $area . "<br>";

    echo "Circumference = " . $circumference;
}

?>

</body>
</html>