<?php
require_once "../database/connection.php";

//1. check if variables are empty
//2. check if variables are set

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$box = $_POST['address'];
$town = $_POST['town'];
$population = $_POST['population'];
$password = $_POST['pass1'];
$register = $_POST['register'];

if (isset($name) && isset($email) && isset($phone) && isset($box) && isset($town) && isset($population) && isset($password) && isset($register)) {
//Check if school already exists.
    $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE name=? OR phone=? OR email=?");
    $stmt->bind_param("sss", $name, $phone, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count == 0) {
//register
        $stmt = $conn->prepare("INSERT INTO tbl_school(name,phone,box,town,email,population,date) VALUES (?,?,?,?,?,?,CURRENT_TIMESTAMP )");
        $stmt->bind_param("ssssss", $name, $phone, $box, $town, $email, $population);
        if (!$stmt->execute()) {
            echo 'failed';
        } else {
            echo 'registered';
        }
    } else {
        //already exists
        echo 'already exists';
    }


} else {
    echo 'empty values';
    header("location: ../../register/index.html");
}

