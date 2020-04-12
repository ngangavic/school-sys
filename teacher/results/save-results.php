<?php
//get params (exam, term, year, subject)
//post params (adm, id, name, class, marks)

session_start();
require_once "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['school']) && isset($_SESSION['status']) && isset($_SESSION['phone']) && isset($_SESSION['id_no'])) {

    if (
        isset($_POST['student_id']) &&
        isset($_POST['adm_data']) &&
        isset($_POST['name_data']) &&
        isset($_POST['class_data']) &&
        isset($_POST['marks_data']) &&
        isset($_POST['exam_data']) &&
        isset($_POST['term_data']) &&
        isset($_POST['year']) &&
        isset($_POST['subject'])
    ) {
        $adm = $_POST['adm_data'];
        $school = $_SESSION['school'];
        $class = $_POST['class_data'];
        $subject = $_POST['subject'];
        $term = $_POST['term_data'];
        $exam = $_POST['exam_data'];
        $year = $_POST['year'];
        $marks = $_POST['marks_data'];
        $name = $_POST['name_data'];
        //check if the results exists
        $stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE adm=? AND school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? AND complete='no' ");
        $stmt->bind_param("sssssss", $adm, $school, $class, $subject, $term, $exam, $year);
        $stmt->execute();
        $results = $stmt->get_result();
        if ($results->num_rows > 0) {
            //update
            $stmt = $conn->prepare("UPDATE tbl_exam_results SET marks=? WHERE adm=? AND school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? ");
            $stmt->bind_param("ssssssss", $marks, $adm, $school, $class, $subject, $term, $exam, $year);
            if (!$stmt->execute()) {
                echo '1';
            } else {
                echo '0';
            }
        } else {
            //insert
            $stmt = $conn->prepare("INSERT INTO tbl_exam_results (adm,school,name,class,subject,marks,term,exam,year) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssssss", $adm, $school, $name, $class, $subject, $marks, $term, $exam, $year);
            if (!$stmt->execute()) {
                echo '0';
            } else {
                echo '0';
            }
        }
    } else {
        echo '1';
    }
} else {
    header("../index.php");
}
