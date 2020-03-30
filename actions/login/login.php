<?php
session_start();
require_once "../database/connection.php";
//1. check if values are empty
//2. if not empty
//3.    check registered account
//           teacher
//           admin
//           parent
//4.else
//error


/****************
 * stop repeating the select statements
 *******************/

$email = $_POST['email'];
$school = $_POST['school'];
$password = $_POST['password'];

if (isset($email) && isset($school) && isset($password)) {
    $stmt = $conn->prepare("INSERT INTO tbl_logins (email,school,date)VALUES(?,?,CURRENT_TIMESTAMP )");
    $stmt->bind_param("ss", $email, $school);
    if (!$stmt->execute()) {
        header("location:../../index.php?code=200&&msg=error");
    } else {
        checkAccount($school, $email, $conn, $password);
    }
} else {
    header("location:../../index.php?code=200&&msg=error");
}

function checkAccount($school, $email, $conn, $password)
{
    //check if teacher, parent or admin
    //check for school
    $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE id=? AND email=? ");
    $stmt->bind_param("ss", $school, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($count = $result->num_rows > 0) {
        //login as school
        loginAsSchool($conn, $email, $school, $password);
    } else {
        //check for parent
        $stmt = $conn->prepare("SELECT * FROM tbl_parent WHERE school_id=? AND email=? ");
        $stmt->bind_param("ss", $school, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($count = $result->num_rows > 0) {
            //login as parent
            loginAsParent($conn, $email, $school, $password);
        } else {
            //check for teacher
            $stmt = $conn->prepare("SELECT * FROM tbl_teachers WHERE school_id=? AND email=? ");
            $stmt->bind_param("ss", $school, $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($count = $result->num_rows > 0) {
                //login as teacher
                loginAsTeacher($conn, $email, $school, $password);
            } else {
                //account not found.
                header("location:../../index.php?code=200&&msg=ac_error");
            }
        }
    }
}

function loginAsSchool($conn, $email, $school, $password)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE id=? AND email=? ");
    $stmt->bind_param("ss", $school, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count > 0) {
        //get password
        $rows = $result->fetch_array();
        if (password_verify($password, $rows['password']) == "true") {
            //set session
            $_SESSION['email'] = $rows['email'];
            $_SESSION['id'] = $rows['id'];
            $_SESSION['name'] = $rows['name'];
            $_SESSION['locked'] = $rows['locked'];
            $_SESSION['status'] = $rows['status'];

            header("location:../../admin/");

        } else {
            //password error
            header("location:../../index.php?code=200&&msg=p_error");
        }

    } else {
        //error
        header("location:../../index.php?code=200&&msg=ac_error");
    }
}

function loginAsParent($conn, $email, $school, $password)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_parent WHERE school_id=? AND email=? ");
    $stmt->bind_param("ss", $school, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count > 0) {
        //get password
        $rows = $result->fetch_array();
        if (password_verify($password, $rows['password']) == "true") {
            //set session
            $_SESSION['email'] = $rows['email'];
            $_SESSION['id'] = $rows['id'];
            $_SESSION['adm'] = $rows['adm'];
            $_SESSION['school'] = $rows['school_id'];

            header("location:../../index.php?code=200&&msg=f_coming");

        } else {
            //password error
            header("location:../../index.php?code=200&&msg=p_error");
        }

    } else {
        //error
        header("location:../../index.php?code=200&&msg=ac_error");
    }
}

function loginAsTeacher($conn, $email, $school, $password)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_teachers WHERE school_id=? AND email=? ");
    $stmt->bind_param("ss", $school, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count > 0) {
        //get password
        $rows = $result->fetch_array();
        if (password_verify($password, $rows['password']) == "true") {
            //set session
            $_SESSION['email'] = $rows['email'];
            $_SESSION['id'] = $rows['id'];
            $_SESSION['name'] = $rows['name'];
            $_SESSION['phone'] = $rows['phone'];
            $_SESSION['id_no'] = $rows['id_no'];
            $_SESSION['school'] = $rows['school_id'];
            $_SESSION['status'] = $rows['status'];

            header("location:../../teacher/");

        } else {
            //password error
            header("location:../../index.php?code=200&&msg=p_error");
        }

    } else {
        //error
        header("location:../../index.php?code=200&&msg=ac_error");
    }
}