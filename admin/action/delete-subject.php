<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $stmt = $conn->prepare("DELETE FROM  tbl_subject WHERE id=? ");
        $stmt->bind_param("s", $_GET['id']);
        if (!$stmt->execute()) {
            header("location: ../subject/?msg=error");
        } else {
            header("location: ../subject/?msg=delete success");
        }
    } else {
        header("location: ../subject/?msg=error");
    }
} else {
    header("location: ../subject/?msg=error");
}
