<?php
session_start();
require "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        //delete teacher from teacher assignment
        $stmt=$conn->prepare("UPDATE tbl_teachers_assigned SET status='deleted' WHERE teacher_id=? ");
        $stmt->bind_param("s",$_GET['id']);
        $stmt->execute();
        $stmt->close();
        //delete from teachers
        $stmt=$conn->prepare("DELETE FROM tbl_teachers WHERE id=? ");
        $stmt->bind_param("s",$_GET['id']);
        $stmt->execute();
        $stmt->close();
        header("location: ../teacher/index.php?msg=success");
    }else{
        header("location: ../teacher/index.php?msg=error");
    }
}else{
    header("location: ../teacher/index.php?msg=error");
}
