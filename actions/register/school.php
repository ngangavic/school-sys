<?php
require_once "../database/connection.php";
require "../../mail/send-mail.php";

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
    messages('empty values');
} else {
    $count = checkIfExists($conn, $name, $phone, $email);
    if ($count == 0) {
        $response = registerSchool($conn, $name, $box, $phone, $town, $email, $population, password_hash($password, PASSWORD_DEFAULT));
        if ($response == 0) {
            messages('success');
        } else {
            messages('not inserted');
        }
    } else {
        messages('already exists');
    }
    //header("location: ../../register/index.php");
}

function messages($message)
{
    switch ($message) {
        case "success":
            header("location: ../../index.php?code=200&&msg=Registration successful. Please Login&&sect=school");
            break;
        case "not inserted":
            header("location: ../../register/index.php?code=501&&msg=An error occurred.Please try again.&&sect=school");
            break;
        case "already exists":
            header("location: ../../register/index.php?code=501&&msg=School already exist.");
            break;
        case "empty values":
            header("location: ../../register/index.php?code=501&&msg=Please fill all the values.&&sect=school");
            break;
    }
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

function registerSchool($conn, $name, $phone, $box, $town, $email, $population, $password)
{
    // $link="http://www.sms.com/registration?confirm=".md5($email)."&&from=mail&date=".date("Y/m/d");

    $stmt = $conn->prepare("INSERT INTO tbl_school(name,phone,box,town,email,password,population,date) VALUES (?,?,?,?,?,?,?,CURRENT_TIMESTAMP )");
    $stmt->bind_param("sssssss", $name, $phone, $box, $town, $email, $password, $population);
    if (!$stmt->execute()) {
        return 1;
    } else {
        // newMail($email,$link,$name);
        return 0;
    }
}

function cleanData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
