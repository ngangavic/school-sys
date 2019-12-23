<?php

$host = "localhost";
$database = "offlineschool";
$password = "";
$user = "root";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    echo 'connection failed';
}
