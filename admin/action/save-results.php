<?php
//get params (exam, term, year, subject)
//post params (adm, id, name, class, marks)

session_start();
require "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['student_id']) &&
        isset($_POST['adm_data']) &&
        isset($_POST['name_data']) &&
        isset($_POST['class_data']) &&
        isset($_POST['marks_data']) &&
        isset($_POST['exam']) &&
        isset($_POST['term']) &&
        isset($_POST['year']) &&
        isset($_POST['subject']))
    {
        $adm = $_POST['adm_data'];
        $school = $_SESSION['id'];
        $class = $_POST['class_data'];
        $subject = $_POST['subject'];
        $term = $_POST['term'];
        $exam = $_POST['exam'];
        $year = $_POST['year'];
        //check if the results exists
        $stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE adm=? AND school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? AND complete='no' ");
        $stmt->bind_param("sssssss", $adm, $school, $class, $subject, $term, $exam, $year);
        $stmt->execute();
        $results = $stmt->get_result();
        if ($results->num_rows > 0) {
            //update
            echo '0';
        } else {
            //insert
            echo '0';
        }

    } else {
        echo 'post data';
    }

} else {
    header("../index.php");
}

