<?php
session_start();
require_once "../database/connection.php";
//global $conn;
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
//check if student exists
    //if exists update
    //else insert

    $adm = $_POST['adm'];
    $name = $_POST['name'];
    $class = $_POST['classs'];
    $kcpe = $_POST['kcpe'];
    $dob = $_POST['dob'];
    $school = $_SESSION['id'];

    if (isset($adm) && isset($name) && isset($class) && isset($kcpe) && isset($dob) && isset($school)) {
//1.Check if student exists
        for ($i = 0; $i < count($adm); $i++) {
//            checkStudent($conn, $adm[$i], $name[$i], $class[$i], $kcpe[$i], $dob[$i]);
            $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE adm=? AND school=?");
            $stmt->bind_param("ss", $adm[$i], $_SESSION['id']);
            $stmt->execute();
            $result = $stmt->get_result();
            $count = $result->num_rows;
            if ($count > 0) {
                //update
//                updateStudent($conn, $adm[$i], $name[$i], $class[$i], $kcpe[$i], $dob[$i]);
                $stmt = $conn->prepare("UPDATE tbl_students SET name=?,class=?,kcpe=?,dob=? WHERE adm=? AND school=? ");
                $stmt->bind_param("ssssss", $name[$i], $class[$i], $kcpe[$i], $dob[$i], $adm[$i], $_SESSION['id']);
                if (!$stmt->execute()) {
                    header("location:../../admin/student.php?msg=error&&page=add-student");
                } else {
                    header("location:../../admin/student.php?msg=success&&page=add-student");
                }
            } else {
                //insert
//                insertStudent($conn, $adm[$i] , $name[$i], $class[$i], $kcpe[$i], $dob[$i]);
                $stmt = $conn->prepare("INSERT INTO tbl_students(adm,school,name,class,kcpe,dob) VALUES (?,?,?,?,?,?)");
                $stmt->bind_param("ssssss", $adm[$i], $_SESSION['id'], $name[$i], $class[$i], $kcpe[$i], $dob[$i]);
                if (!$stmt->execute()) {
                    header("location:../../admin/student.php?msg=error&&page=add-student");
                } else {
                    header("location:../../admin/student.php?msg=success&&?page=add-student");
                }
            }

        }
    } else {
        header("location:../../admin/student.php?msg=error&&page=add-student");
    }


} else {
    header("location:../../index.php");
}