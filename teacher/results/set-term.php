<?php
session_start();

require_once "../../actions/database/connection.php";

if (isset($_POST['exam_id'])) {
    $exam_id = $_POST['exam_id'];

    $output = '';
    $output .= '<select class="form-control" id="select-term">';

    $stmt = $conn->prepare("SELECT term FROM tbl_exam WHERE id=?");
    $stmt->bind_param("s", $exam_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $output .= '
    <option value="1">Select Term</option>';

    while ($row = $result->fetch_array()) {
        $output .= '<option value="' . $row['term'] . '" >' . $row['term'] . '</option>';
    }

    $output .= '
    </select>';
    echo $output;
}
