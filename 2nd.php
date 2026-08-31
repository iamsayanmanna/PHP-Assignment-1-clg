<html>
<body>

<form method="post">

Enter Your Name:
<input type="text" name="name">

<input type="submit" value="Submit">

</form>

<?php

$x = $_POST['name'];
echo " " . $x ;

?>

</body>
</html>