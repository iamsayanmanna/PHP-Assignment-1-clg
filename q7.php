<?php

if(isset($_SERVER['HTTPS']))
{
    echo "HTTPS";
}
else
{
    echo "HTTP";
}

?>