<?php
session_start();
require_once "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['create'])) {
        $school = $_SESSION['id'];
        $name = $_POST['exam'];
        $year = $_POST['year'];
        $term = $_POST['term'];
        $class = $_POST['class'];

        //check if subject
        $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE name=? AND school=? AND class=? AND term=? AND year=? ");
        $stmt->bind_param("sssss", $name, $school, $class, $term, $year);
        $stmt->execute();

        if ($stmt->get_result()->num_rows > 0) {
            header("location:index.php?msg=error");
        } else {
            $stmt = $conn->prepare("INSERT INTO tbl_exam(school,name,class,term,year,date) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP )");
            $stmt->bind_param("sssss", $school, $name, $class, $term, $year);
            if (!$stmt->execute()) {
                header("location:index.php?msg=error");
            } else {
                header("location:index.php?msg=success");
            }
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Exams</title>
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
                            <h5 style="color: #000000;padding: 5px;">Dashboard: Exam</h5>

                        </div>
                    </div>
                    <div class="btn btn-group" style="margin-top: 5px;">
                        <a data-toggle="modal" href="#createExamModal" class="btn btn-sm btn-outline-secondary">Create
                            Exam</a>
                        <a data-toggle="modal" href="#" id="view-closed-exams" class="btn btn-sm btn-outline-warning">Closed Exams</a>
                    </div>
                    <div class="class-table" style="margin-top: 5px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Exam name</th>
                                    <th>Class</th>
                                    <th>Term</th>
                                    <th>Year</th>
                                    <th>Date created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? AND status='active' ORDER BY year DESC ");
                                $stmt->bind_param("s", $_SESSION['id']);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['class']; ?></td>
                                        <td><?php echo $row['term']; ?></td>
                                        <td><?php echo $row['year']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td>
                                            <div class="btn btn-group btn-group-sm">
                                                <a href="../action/close-exam.php?id=<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-warning">Close</a>
                                                <a href="../action/delete-exam.php?id=<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-danger">Delete</a>
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

        <!-- START closed exam modal -->
        <div id="closedExamsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Closed Exams</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="view_exams">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END closed exam modal -->

        <!--    START modal create exam-->
        <div id="createExamModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Exam</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input class="form-control" name="exam" placeholder="Exam name" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="class" required>
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
                                <select class="form-control" name="term" required>
                                    <option value="Term 1">TERM 1</option>
                                    <option value="Term 2">TERM 2</option>
                                    <option value="Term 3">TERM 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="year" required>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
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
        <!--    END modal create exam-->

        <!--    [START]results modal-->
        <!-- Modal -->
        <?php include "../modals/results-modal.php";?>
        <!--[END]results modal-->
        <script>
            $(document).ready(function() {
                $('#view-closed-exams').click(function() {
                    var subject_id = $(this).attr("id");
                    $.ajax({
                        url: "../action/view-closed-exams.php",
                        method: "post",
                        success: function(data) {
                            $('#view_exams').html(data);
                            $('#closedExamsModal').modal("show");
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