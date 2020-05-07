<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['box']) && isset($_POST['town']) && isset($_POST['population']) && isset($_POST['logo'])) {
        $stmt = $conn->prepare("UPDATE tbl_school SET name=?,phone=?,box=?,town=?,population=? WHERE id=?");
        $stmt->bind_param("ssssss", $_POST['name'], $_POST['phone'], $_POST['box'], $_POST['town'], $_POST['population'], $_SESSION['id']);
        if (!$stmt->execute()) {
            header("location: ../index.php?error");
        } else {
            header("location: ../index.php?sucess");
        }
    }
} else {
    header("location: ../index.php?error");
}
