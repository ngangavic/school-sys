<?php
session_start();
require_once "../database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if(isset($_POST['exam'])&&isset($_POST['class'])&&isset($_POST['term'])&&isset($_POST['year'])&&isset($_POST['adm'])&&isset($_POST['name'])&&isset($_POST['marks'])&&isset($_POST['subject'])){
        $exam=$_POST['exam'];
        $class=$_POST['class'];
        $term=$_POST['term'];
        $year=$_POST['year'];
        $adm=$_POST['adm'];
        $name=$_POST['name'];
        $marks=$_POST['marks'];
        $subject=$_POST['subject'];
        for ($i = 0; $i < count($adm); $i++) {
        $stmt = $conn->prepare("INSERT INTO tbl_exam_results(adm,school,name,class,subject,marks,term,exam,year) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss", $adm[$i], $_SESSION['id'], $name[$i], $class[$i], $subject, $marks[$i],$term,$exam,$year);
        if (!$stmt->execute()) {
            header("location:../../admin/results.php?msg=error&&page=add-student");
        } else {
            header("location:../../admin/results.php?msg=success&&?page=add-student");
        }}
    }else{
        header("location:../../admin/results.php?msg=error");
    }



}else{
    header("location:../../index.php");
}

