<?php
session_start();
require "../../actions/database/connection.php";

if (isset($_POST['edit'])) {
    $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE name=? AND school=?");
    $stmt->bind_param("ss", $_POST['subject'], $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count > 0) {
        header("location: ../subject/?msg=error");
    } else {
        $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE code=? AND school=?");
        $stmt->bind_param("ss", $_POST['code'], $_SESSION['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->num_rows;
        if ($count > 0) {
            header("location: ../subject/?msg=error");
        } else {
            $stmt = $conn->prepare("UPDATE tbl_subject SET name=?,code=? WHERE id=?");
            $stmt->bind_param("sss", $_POST['subject'], $_POST['code'], $_POST['id']);
            if (!$stmt->execute()) {
                header("location: ../subject/?msg=error");
            } else {
                header("location: ../subject/?msg=success");
            }
        }
    }
}

if (isset($_POST['subject_id'])) {
    $subject_id = $_POST['subject_id'];

    $output = '';
    $output .= ' 
    <div class="modal-header">';

    $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE id=? ");
    $stmt->bind_param("s", $subject_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();

    $output .= '
                <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="../action/edit-subject.php" method="post">
            <input type="hidden" name="id" value="' . $subject_id . '">
            <div class="form-group">
                <input class="form-control" value="' . $row['name'] . '" name="subject" required>
            </div>
            <div class="form-group">
            <input class="form-control" value="' . $row['code'] . '" name="code" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-warning" name="edit" disabled>Edit</button>
            </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
    ';

    echo $output;
}
