<?php
session_start();
require_once "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Class</title>
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
                        <h5 style="color: #000000;padding: 5px;">Dashboard: Teachers</h5>
                    </div>
                </div>
                    <!-- <a data-toggle="modal" href="#createClassModal" class="btn btn-group-sm btn-outline-secondary">Create
                    class</a> -->

                    <div class="class-table" style="margin-top: 5px;">
                        <table class="table table-bordered">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>ID No.</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM tbl_teachers WHERE school_id=? AND status='new' ");
                                $stmt->bind_param("s", $_SESSION['id']);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['id_no']; ?></td>
                                        <td>
                                            <div class="btn btn-group btn-group-sm">
                                                <a data-toggle="modal" href="#viewTeacherModal" id="<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-primary view">View</a>
                                                <a data-toggle="modal" href="#assignTeacherModal" id="<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-success assign">Assign</a>
                                                <a href="../action/delete-teacher.php?id=<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-danger">Delete</a>
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


        <!-- START assign teacher modal-->
        <div id="assignTeacherModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Assign Teacher</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="assign-teacher.php" method="post">
                            <input type="hidden" name="teacher" class="teacher">
                            <div class="form-group">
                                <select class="form-control" name="class">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="subject">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-primary" name="assign">Assign</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    END assign teacher modal-->

        <!--    [START]results modal-->
        <!-- Modal -->
        <?php include "../modals/results-modal.php";?>
        <!--[END]results modal-->

        <!--    START view teacher modal-->
        <div class="modal fade" id="viewTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div id="view_teacher"></div>
                </div>
            </div>
        </div>
        <!--    END view teacher modal-->
        <script>
            $(document).ready(function() {
                $('.assign').click(function() {
                    var teacher_id = $(this).attr("id");
                    var teacher_input = $('.teacher');
                    teacher_input.val(teacher_id);
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.view').click(function() {
                    var teacher_id = $(this).attr("id");
                    console.log(teacher_id);
                    // var teacher_input=$('.teacher');
                    // teacher_input.val(teacher_id);
                    $.ajax({
                        url: "view-teacher.php",
                        method: "post",
                        data: {
                            teacher_id: teacher_id
                        },
                        success: function(data) {
                            $('#view_teacher').html(data);
                            $('#viewTeacherModal').modal("show");
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