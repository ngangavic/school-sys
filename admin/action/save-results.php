<?php
//get params (exam, term, year, subject)
//post params (adm, id, name, class, marks)

session_start();
require "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_GET['exam']) && isset($_GET['term']) && isset($_GET['year']) && isset($_GET['subject'])) {
        if (!empty($_GET['exam']) && !empty($_GET['term']) && !empty($_GET['year']) && !empty($_GET['subject'])) {
            if (isset($_POST['adm']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['class']) && isset($_POST['marks'])) {
                $adm=$_POST['adm'];
                $school=$_SESSION['id'];
                $class=$_POST['class'];
                $subject=$_GET['subject'];
                $term=$_GET['term'];
                $exam=$_GET['exam'];
                $year=$_GET['year'];
                //check if the results exists
                $stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE adm=? AND school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? AND complete='no' ");
                $stmt->bind_param("sssssss",$adm,$school,$class,$subject,$term,$exam,$year);
                $stmt->execute();
                $results=$stmt->get_result();
                if ($results->num_rows>0){
                    //update
                }else{
                    //insert
                }

            } else {
                echo '1';
            }
        } else {
            echo '1';
        }

    } else {
        echo '1';
    }

} else {
    header("../index.php");
}

