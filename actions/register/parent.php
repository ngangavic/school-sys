<?php
require_once "../database/connection.php";

$adm = cleanData($_POST['adm']);
$email = cleanData($_POST['email']);
$school = cleanData($_POST['school']);
$password = cleanData($_POST['pass1']);
$register = cleanData($_POST['register']);

if (isset($adm) && isset($email) && isset($password) && isset($register) && isset($school)) {
    $count = checkIfExists($conn, $school, $adm);
    if ($count == 0) {
        $response = registerParent($conn, $school, $adm, $email, password_hash($password, PASSWORD_DEFAULT));
        if ($response == 0) {
            messages("success");
        } else {
            messages("not inserted");
        }
    } else {
        messages('already exists');
    }

} else {
    messages('empty values');
}

function messages($message)
{
    switch ($message) {
        case "success":
            header("location: ../../register/index.php?code=200&&msg=Registration successful.You can now login.");
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

function registerParent($conn, $school, $adm, $email, $password)
{
    $stmt = $conn->prepare("INSERT INTO tbl_parent(school_id,adm,email,password,date) VALUES (?,?,?,?,CURRENT_TIMESTAMP )");
    $stmt->bind_param("ssss", $school, $adm, $email, $password);
    if (!$stmt->execute()) {
        return 1;
    } else {
        return 0;
    }
}

function checkIfExists($conn, $school, $adm)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_parent WHERE school_id=? AND adm=?");
    $stmt->bind_param("ss", $school, $adm);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    return $count;
}

function cleanData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}