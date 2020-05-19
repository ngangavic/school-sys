<?php
session_start();
require_once "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['exam']) && isset($_POST['class']) && isset($_POST['term']) && isset($_POST['year']) && isset($_POST['subject'])) {
        $exam = $_POST['exam'];
        $class = $_POST['class'];
        $term = $_POST['term'];
        $year = $_POST['year'];
        $subject = $_POST['subject'];

        $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE school=? AND class=? ");
        $stmt->bind_param("ss", $_SESSION['id'], $_POST['class']);
        $stmt->execute();
        $get_result = $stmt->get_result();

        $total_students = $get_result->num_rows;

        //check if there are results
        $stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? AND complete='no' ");
        $stmt->bind_param("ssssss", $_SESSION['id'], $class, $subject, $term, $exam, $year);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->num_rows;
        echo $count;
        if ($count == 0) {
            //insert
            while ($row = $get_result->fetch_array()) {
                $stmt = $conn->prepare("INSERT INTO tbl_exam_results (adm,school,name,class,subject,term,exam,year)VALUES(?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssss", $row['adm'], $_SESSION['id'], $row['name'], $row['class'], $subject, $term, $exam, $year);
                $stmt->execute();
                echo 'done';
                header("location: ../results/index.php?exam=" . $exam . "&&class=" . $class . "&&term=" . $term . "&&year=" . $year . "&&subject=" . $subject);
            }
        } else {
            while ($row = $get_result->fetch_array()) {
                $adm = $row['adm'];
                $stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE adm=? AND school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? AND complete='no' ");
                $stmt->bind_param("sssssss", $adm, $_SESSION['id'], $class, $subject, $term, $exam, $year);
                $stmt->execute();
                $result = $stmt->get_result();
                $count = $result->num_rows;
                if ($count == 0) {
                    $stmt = $conn->prepare("INSERT INTO tbl_exam_results (adm,school,name,class,subject,term,exam,year)VALUES(?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssssss", $row['adm'], $_SESSION['id'], $row['name'], $row['class'], $subject, $term, $exam, $year);
                    $stmt->execute();
                    echo 'done';
                    header("location: ../results/index.php?exam=" . $exam . "&&class=" . $class . "&&term=" . $term . "&&year=" . $year . "&&subject=" . $subject);
                }
            }
            header("location: ../results/index.php?exam=" . $exam . "&&class=" . $class . "&&term=" . $term . "&&year=" . $year . "&&subject=" . $subject);
               
        }
    }else{
        header("location: ../index.php");
    }
} else {
    header("location:../../index.php");
}
