<?php

$url = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";

$data = parse_url($url);

echo "Scheme: " . $data['scheme'] . "<br>";
echo "Host: " . $data['host'] . "<br>";
echo "Path: " . $data['path'];

?>