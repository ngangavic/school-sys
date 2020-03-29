<?php
session_start();
require_once "../../actions/database/connection.php";
try {
    if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

        if (isset($_POST['class']) && isset($_POST['subject']) && isset($_POST['teacher'])) {
            $class = $_POST['class'];
            $subject = $_POST['subject'];
            $teacher = $_POST['teacher'];
            //check if class and subject exists
            $stmt = $conn->prepare("SELECT * FROM tbl_teachers_assigned WHERE class=? AND subject=? ");
            $stmt->bind_param("ss", $class, $subject);
            $stmt->execute();
            $count = $stmt->get_result()->num_rows;
            if ($count == 0) {
                //insert
                $stmt = $conn->prepare("INSERT INTO tbl_teachers_assigned(school,teacher_id,class,subject,date)VALUES(?,?,?,?,CURRENT_TIMESTAMP)");
                $stmt->bind_param("ssss", $_SESSION['id'], $teacher, $class, $subject);
                if (!$stmt->execute()) {
                    header("location: index.php?msg=Record not inserted.");
                } else {
                    header("location: index.php?msg=Record inserted.");
                }
            } else {
                //error
                header("location: index.php?msg=Record already exists.");
            }
        } else {
            header("location: index.php");
        }
    } else {
        header("location:../../index.php");
    }
} catch (Exception $e) {
    header("location: index.php");
}
