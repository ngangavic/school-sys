<?php
session_start();
require_once "../database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
//check if student exists
    //if exists update
    //else insert

    $adm = $_POST['adm'];
    $name = $_POST['name'];
    $class = $_POST['classs'];
    $kcpe = $_POST['kcpe'];
    $dob = $_POST['dob'];
    $school = $_SESSION['id'];

    if (isset($adm) && isset($name) && isset($class) && isset($kcpe) && isset($dob) && isset($school)) {
//1.Check if student exists
        checkStudent($conn, $adm, $school, $name, $class, $kcpe, $dob);
    } else {
        echo "0";
    }


} else {
    echo "1";
}

function checkStudent($conn, $adm, $school, $name, $class, $kcpe, $dob)
{
    $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE adm=? AND school=?");
    $stmt->bind_param("ss", $adm, $school);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count > 0) {
        //update
        updateStudent($conn, $adm, $school, $name, $class, $kcpe, $dob);
    } else {
        //insert
        insertStudent($conn, $adm, $school, $name, $class, $kcpe, $dob);
    }
}

function insertStudent($conn, $adm, $school, $name, $class, $kcpe, $dob)
{
    $stmt = $conn->prepare("INSERT INTO tbl_students(adm,school,name,class,kcpe,dob) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $adm, $school, $name, $class, $kcpe, $dob);
    if (!$stmt->execute()) {
        echo "1";
    } else {
        echo "0";
    }
}

function updateStudent($conn, $adm, $school, $name, $class, $kcpe, $dob){
$stmt=$conn->prepare("UPDATE tbl_students SET name=?,class=?,kcpe=?,dob=? WHERE adm=? AND $school=? ");
$stmt->bind_param("ssssss",$name,$class,$kcpe,$dob,$adm,$school);
if(!$stmt->execute()){
    echo "1";
}else{
    echo "0";
}
}