<?php
session_start();
require "../../actions/database/connection.php";

$output = '';

$stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE status='closed' AND school=? ");
$stmt->bind_param("s", $_SESSION['id']);
$stmt->execute();
$result = $stmt->get_result();


$output .= '
               <table class="table table-bordered">
               <thead>
               <tr>
               <th>Exam name</th>	
               <th>Class</th>	
               <th>Term</th>	
               <th>Year</th>	
               <th>Action</th>
               </tr>
               </thead>
               <tbody>
                ';
while ($row = $result->fetch_array()) {
    $output .= '<tr>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['class'] . '</td>
                    <td>' . $row['term'] . '</td>
                    <td>' . $row['year'] . '</td>
                    <td><a href="#" class="btn btn-sm btn-outline-warning">Open</a></td>
                    </tr>
                    ';
}
$output .= '
               </tbody>
               </table>
    ';

echo $output;
