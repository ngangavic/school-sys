<?php
session_start();
require "../../actions/database/connection.php";

if (isset($_POST['edit'])) {
    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE name=? AND school=?");
    $stmt->bind_param("ss", $_POST['class'], $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
    if ($count > 0) {
        header("location: ../class.php?msg=error");
    } else {
        $stmt = $conn->prepare("UPDATE tbl_class SET name=? WHERE id=?");
        $stmt->bind_param("ss", $_POST['class'], $_POST['id']);
        if (!$stmt->execute()) {
            header("location: ../class.php?msg=error");
        } else {
            header("location: ../class.php?msg=success");
        }
    }
}

if (isset($_POST['class_id'])) {
    $class_id = $_POST['class_id'];

    $output = '';
    $output .= ' 
    <div class="modal-header">';

    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE id=? ");
    $stmt->bind_param("s", $class_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();

    $output .= '
                <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="action/edit-class.php" method="post">
            <input type="hidden" name="id" value="' . $class_id . '">
            <div class="form-group">
            <input class="form-control" value="' . $row['name'] . '" name="class" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-warning" name="edit">Edit</button>
</div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
    ';

    echo $output;
}

?>