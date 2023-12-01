<?php

$db_host = 'localhost';
$db_name = 'gamingshop';
$db_user = 'root';
$db_pass = '';

$conn = mysqli_connect($db_host, $db_name, $db_user, $db_pass);

if (!$conn) {

    echo "Connection failed!";

}
?>