<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_POST['class_data']) && isset($_POST['class_id'])) {
//        $str="kcpe2";
        //get current class then update
        $id= substr($_POST['class_id'],5);

        $stmt=$conn->prepare("SELECT * FROM tbl_students WHERE id=? ");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        if ($result->num_rows>0) {
            $row = $result->fetch_array();
            $current_class = $row['class'];
            $adm = $row['adm'];

            //update tbl_results
            $stmt = $conn->prepare("UPDATE tbl_exam_results SET complete='yes' WHERE adm=? AND school=? AND class=? ");
            $stmt->bind_param("sss", $adm, $_SESSION['id'], $current_class);
            if(!$stmt->execute()){
                echo '1';
            }else{
                $stmt = $conn->prepare("UPDATE tbl_students SET class=? WHERE id=?");
                $stmt->bind_param("ss", $_POST['class_data'], $id);
                if (!$stmt->execute()) {
                    echo '1';
                } else {
                    echo '0';
                }
            }
        }else{
            echo '1';
        }

    } else {
        echo '1';
    }
} else {
    header("../index.php");
}
