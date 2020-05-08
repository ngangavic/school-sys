<?php
// session_start();
require "../../actions/database/connection.php";

if (isset($_POST['teacher_id'])) {
    $teacher_id = $_POST['teacher_id'];

    $output = '';
    $output .= ' 
    <div class="modal-header">';

    $stmt = $conn->prepare("SELECT * FROM tbl_teachers_assigned WHERE id=?");
    $stmt->bind_param("s", $teacher_id);
    $stmt->execute();
    $result = $stmt->get_result();
  
    $output .= '
                <h5 class="modal-title" id="exampleModalLabel">View Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="table">
            <thead>
            <tr>
            <th>Class</th>
            <th>Subject</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>';
            
            while($row = $result->fetch_array()){
            $output.='
            <tr>
            <td>'. $row['class'] .'</td>
            <td>'. $row['subject'] .'</td>
            <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
            </tr>
            ';
                }
            $output.='
            </tbody>

            </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
    ';

    echo $output;
}
