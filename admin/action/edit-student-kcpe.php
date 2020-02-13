<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_POST['kcpe_data']) && isset($_POST['kcpe_id'])) {
//        $str="kcpe2";
        $id= substr($_POST['kcpe_id'],4);
        $stmt = $conn->prepare("UPDATE tbl_students SET kcpe=? WHERE id=?");
        $stmt->bind_param("ss", $_POST['kcpe_data'], $id);
        if (!$stmt->execute()) {
            echo 'Try again later';
        } else {
            echo 'Success';
        }
    } else {
        echo 'No data';
    }
} else {
    header("../index.php");
}
