<?php
session_start();
require_once "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['create'])) {
        $school = $_SESSION['id'];
        $subject = $_POST['subject'];
        $code = $_POST['code'];

        //check if code exists
        $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND code=? AND status='active' ");
        $stmt->bind_param("ss", $school, $code);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            //error
            header("location: ../subject/?msg=error");
        } else {
            //check if subject name exists
            $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND name=? AND status='active' ");
            $stmt->bind_param("ss", $school, $subject);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                //error
                header("location: ../subject/?msg=error");
            } else {
                $stmt = $conn->prepare("INSERT INTO tbl_subject(school,name,code,date) VALUES (?,?,?,CURRENT_TIMESTAMP )");
                $stmt->bind_param("sss", $school, $subject, $code);
                if (!$stmt->execute()) {
                    header("location: ../subject/?msg=error");
                } else {
                    header("location: ../subject/?msg=success");
                }
            }
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Subject</title>
        <script rel="javascript" src="../../jquery/jquery-3.4.1.js"></script>
        <script rel="javascript" src="../../popper/popper.min.js"></script>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script rel="javascript" src="../../bootstrap/js/bootstrap.js"></script>
        <link href="../../css/custom.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
        <link href="../../fonts/css/all.css" rel="stylesheet">

    </head>

    <body>

        <?php include "../topbar.php"; ?>
        <!--    new UI start-->
        <div class="container-fluid">

            <div class="row">

                <?php include "../sidebar.php"; ?>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 main-content">
                    <div class="card" style="margin-top: 5px">
                        <div style="background-color: #ffffff" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h5 style="color: #000000;padding: 5px;">Dashboard: Subject</h5>

                        </div>
                    </div>
                    <a data-toggle="modal" style="margin-top: 5px" href="#addSubjectModal" class="btn btn-sm btn-outline-secondary">Add
                        Subject</a>
                    <div class="class-table" style="margin-top: 5px;">
                        <table class="table table-bordered">
                            <thead>
                                <th>Subject Name</th>
                                <th>Subject Code</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND status='active' ");
                                $stmt->bind_param("s", $_SESSION['id']);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['code']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td>
                                            <div class="btn btn-group btn-group-sm">
                                                <a data-toggle="modal" href="#editSubjectModal" id="<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-primary edit">Edit</a>
                                                <a href="../action/delete-subject.php?id=<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>

        </div>
        <?php include "../footer.php"; ?>
        <!--    new UI end-->

        <!--    START modal create subject-->
        <div id="addSubjectModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Subject</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input class="form-control" name="subject" placeholder="Subject name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="code" placeholder="Subject code" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-primary" name="create">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    END modal create subject-->

        <!--    [START]results modal-->
        <!-- Modal -->
        <?php include "../modals/results-modal.php";?>
        <!--[END]results modal-->

        <!--    START edit subject modal-->
        <div class="modal fade" id="editSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div id="view_subject"></div>
                </div>
            </div>
        </div>
        <!--    END edit subject modal-->

        <script>
            $(document).ready(function() {
                $('.edit').click(function() {
                    var subject_id = $(this).attr("id");
                    $.ajax({
                        url: "../action/edit-subject.php",
                        method: "post",
                        data: {
                            subject_id: subject_id
                        },
                        success: function(data) {
                            $('#view_subject').html(data);
                            $('#editSubjectModal').modal("show");
                        }
                    });
                });
            });
        </script>
    </body>

    </html>
<?php } else {
    header("location:../../index.php");
} ?>