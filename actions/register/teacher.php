<?php
require_once "../database/connection.php";
require "../../mail/send-mail.php";

$email = cleanData($_POST['email']);
$school = cleanData($_POST['school']);
$password = cleanData($_POST['pass1']);
$register = cleanData($_POST['register']);

if (isset($email) && isset($school) && isset($password) && isset($register)) {
    $count = checkIfExists($conn, $email);
    if ($count == 0) {
        $response = registerTeacher($conn, $school, $email, password_hash($password, PASSWORD_DEFAULT));
        if ($response == 0) {
            messages('success');
        } else {
            messages('not inserted');
        }
    } else {
        messages('already exists');
    }

} else {
    messages('empty values');
}

function cleanData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkIfExists($conn, $email)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_teachers WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    return $count;
}

function registerTeacher($conn, $school, $email, $password)
{
    // $link="http://www.sms.com/registration?confirm=".md5($email)."&&from=mail&date=".date("Y/m/d");
    $stmt = $conn->prepare("INSERT INTO tbl_teachers(school_id,email,password,date) VALUES (?,?,?,CURRENT_TIMESTAMP)");
    $stmt->bind_param("sss", $school, $email, $password);
    if (!$stmt->execute()) {
        return 1;
    } else {
        // newMail($email,$link,$school);
        return 0;
    }
}

function messages($message)
{
    switch ($message) {
        case "success":
            header("location: ../../index.php?code=200&&msg=Registration successful. You can now login.");
            break;
        case "not inserted":
            header("location: ../../register/index.php?code=501&&msg=An error occurred.Please try again.");
            break;
        case "already exists":
            header("location: ../../register/index.php?code=501&&msg=This account already exist.");
            break;
        case "empty values":
            header("location: ../../register/index.php?code=501&&msg=Please fill all the values.");
            break;
    }
}