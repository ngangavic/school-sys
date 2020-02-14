<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_POST['dob_data']) && isset($_POST['dob_id'])) {
//        $str="kcpe2";
        $id= substr($_POST['dob_id'],3);
        $stmt = $conn->prepare("UPDATE tbl_students SET dob=? WHERE id=?");
        $stmt->bind_param("ss", $_POST['dob_data'], $id);
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
