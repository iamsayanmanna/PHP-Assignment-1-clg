<!DOCTYPE html>
<html>
<head>
    <title>Input and Display</title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $city = $_POST['city'];
?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Roll</td>
            <td><?php echo $roll; ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><?php echo $city; ?></td>
        </tr>
    </table>

<?php
} else {
   
?>

    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Roll: <input type="text" name="roll" required><br><br>
        City: <input type="text" name="city" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
}
?>

</body>
</html>