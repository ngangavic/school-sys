<?php
session_start();
require_once "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['create'])) {
        $school = $_SESSION['id'];
        $class = $_POST['class'];

        $stmt=$conn->prepare("SELECT * FROM tbl_class WHERE school=? AND name=? ");
        $stmt->bind_param("ss",$school,$class);
        $stmt->execute();
        $result=$stmt->get_result();
        $count=$result->num_rows;

        if ($count>0){
            header("location:class.php?msg=error");
        }else {
            $stmt = $conn->prepare("INSERT INTO tbl_class(school,name,date) VALUES (?,?,CURRENT_TIMESTAMP )");
            $stmt->bind_param("ss", $school, $class);
            if (!$stmt->execute()) {
                header("location:class.php?msg=error");
            } else {
                header("location:class.php?msg=success");
            }
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
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

    <!--    new UI start-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidebar">
                <div class="link-item" style="padding-top: 10px">
                    <a href="../index.php"><i class="fa fa-home"></i> Dashboard </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="#"><i class="fa fa-envelope"></i> SMS </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="index.php"><i class="fa fa-school"></i> Classes </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="../subject/"><i class="fa fa-book"></i> Subjects </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="../students/?page=add-student"><i class="fa fa-users"></i> Students </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-receipt"></i> Report </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a data-toggle="modal" href="#resultsModal"><i class="fa fa-keyboard"></i> Results </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="../exams/"><i class="fa fa-file-alt"></i> Exams </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="../logout.php"><i class="fa fa-door-open"></i> Logout </a>
                    <hr/>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 main-content">

                <div style="background-color: #ffffff" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h5 style="color: #000000;padding: 5px;">Dashboard: Class</h5>
                    <hr/>
                </div>

                <a data-toggle="modal" href="#createClassModal" class="btn btn-group-sm btn-outline-secondary">Create
                    class</a>

                <div class="class-table">
                    <table class="table table-bordered">
                        <thead>
                        <th>Class name</th>
                        <th>No. of Students</th>
                        <th>Date created</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=? AND status='active' ");
                        $stmt->bind_param("s", $_SESSION['id']);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_array()) {
                            $stmt_c=$conn->prepare("SELECT * FROM tbl_students WHERE school=? AND class=?");
                            $stmt_c->bind_param("ss",$_SESSION['id'],$row['name']);
                            $stmt_c->execute();
                            $result_c=$stmt_c->get_result();

                            ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $result_c->num_rows; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <div class="btn btn-group btn-group-sm">
                                        <a data-toggle="modal" href="#editClassModal" id="<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-primary edit">Edit</a>
                                        <a href="action/delete-class.php?id=<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-danger">Delete</a>
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
    <!--    new UI end-->


    <!-- START create class modal-->
    <div id="createClassModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create Class</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input class="form-control" name="class" placeholder="Class name" required>
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
    <!--    END create class modal-->

<!--    [START]results modal-->
        <!-- Modal -->
        <div id="resultsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Results Setup</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="results.php" method="get">
                            <div class="form-group">
                                <select name="exam" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="class" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="term" class="form-control">
                                    <option value="Term 1">Term 1</option>
                                    <option value="Term 2">Term 2</option>
                                    <option value="Term 3">Term 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="year" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="subject" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">DONE</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!--[END]results modal-->

<!--    START edit class modal-->
    <div class="modal fade" id="editClassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="view_class"></div>
            </div>
        </div>
    </div>
<!--    END edit class modal-->
    <script>
        $(document).ready(function () {
            $('.edit').click(function () {
                var class_id = $(this).attr("id");
                $.ajax({
                    url: "action/edit-class.php",
                    method: "post",
                    data: {class_id: class_id},
                    success: function (data) {
                        $('#view_class').html(data);
                        $('#editClassModal').modal("show");
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