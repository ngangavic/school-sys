<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_POST['class_data']) && isset($_POST['class_id'])) {
//        $str="kcpe2";
        $id= substr($_POST['class_id'],5);
        $stmt = $conn->prepare("UPDATE tbl_students SET class=? WHERE id=?");
        $stmt->bind_param("ss", $_POST['class_data'], $id);
        if (!$stmt->execute()) {
            echo '1';
        } else {
            echo '0';
        }
    } else {
        echo '1';
    }
} else {
    header("../index.php");
}
