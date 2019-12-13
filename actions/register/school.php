<?php
require_once "../database/connection.php";

//1. check if variables are empty
//2. check if variables are set

$name = cleanData($_POST['name']);
$email = cleanData($_POST['email']);
$phone = cleanData($_POST['phone']);
$box = cleanData($_POST['address']);
$town = cleanData($_POST['town']);
$population = cleanData($_POST['population']);
$password = cleanData($_POST['pass1']);
$register = cleanData($_POST['register']);

if (!isset($name) || !isset($email) || !isset($phone) || !isset($box) || !isset($town) || !isset($population) || !isset($password) || !isset($register)) {
    echo 'empty values';
} else {
    $count = checkIfExists($conn, $name, $phone, $email);
    if ($count == 0) {
        $response = registerSchool($conn, $name, $phone, $box, $town, $email, $population);
        if ($response == 0) {
            echo 'success';
        } else {
            echo 'not inserted';
        }
    } else {
        echo 'already exists';
    }
    //header("location: ../../register/index.html");
}


function checkIfExists($conn, $name, $phone, $email)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE name=? OR phone=? OR email=?");
    $stmt->bind_param("sss", $name, $phone, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    return $count;
}

function registerSchool($conn, $name, $phone, $box, $town, $email, $population)
{
    $stmt = $conn->prepare("INSERT INTO tbl_school(name,phone,box,town,email,population,date) VALUES (?,?,?,?,?,?,CURRENT_TIMESTAMP )");
    $stmt->bind_param("ssssss", $name, $phone, $box, $town, $email, $population);
    if (!$stmt->execute()) {
        return 1;
    } else {
        return 0;
    }
}

function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
