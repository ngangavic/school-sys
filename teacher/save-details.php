<?php
session_start();
require_once "../actions/database/connection.php";

if (isset($_POST['name']) && isset($_POST['phone']) && $_POST['id_no'] && isset($_POST['submit']) && isset($_POST['teacher_id'])) {
    //save details and set session again
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $id_no = $_POST['id_no'];
    $teacher_id = $_POST['teacher_id'];

    $stmt = $conn->prepare("UPDATE tbl_teachers SET name=?, phone=?, id_no=? WHERE id=?");
    $stmt->bind_param("ssss", $name, $phone, $id_no, $teacher_id);
    if (!$stmt->execute()) {
        header("location: index.php?msg=Update failed");
    } else {
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['id_no'] = $id_no;
        header("location: index.php");
    }
} else {
    header("location: index.php?msg=Error");
}
