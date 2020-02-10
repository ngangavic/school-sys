<?php
session_start();
require_once "../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['create'])) {
        $school = $_SESSION['id'];
        $subject = $_POST['subject'];
//        $year=$_POST['year'];
//        $term=$_POST['term'];
        $stmt = $conn->prepare("INSERT INTO tbl_subject(school,name,date) VALUES (?,?,CURRENT_TIMESTAMP )");
        $stmt->bind_param("ss", $school, $subject);
        if (!$stmt->execute()) {
            echo 'error';
        } else {
            header("location:subject.php?msg=success");
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Subject</title>
        <script rel="javascript" src="../jquery/jquery-3.4.1.js"></script>
        <script rel="javascript" src="../popper/popper.min.js"></script>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script rel="javascript" src="../bootstrap/js/bootstrap.js"></script>
        <link href="../css/custom.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="../fonts/css/all.css" rel="stylesheet">

    </head>
    <body>

    <!--    new UI start-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidebar">
                <div class="link-item" style="padding-top: 10px">
                    <a href="index.php"><i class="fa fa-home"></i> Dashboard </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="#"><i class="fa fa-envelope"></i> SMS </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="class.php"><i class="fa fa-school"></i> Classes </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="subject.php"><i class="fa fa-book"></i> Subjects </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="student.php?page=add-student"><i class="fa fa-users"></i> Students </a>
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
                    <a href="exams.php"><i class="fa fa-file-alt"></i> Exams </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href="logout.php"><i class="fa fa-door-open"></i> Logout </a>
                    <hr/>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 main-content">

                <div style="background-color: #ffffff" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h5 style="color: #000000;padding: 5px;">Dashboard</h5>
                    <hr/>
                </div>

                <a data-toggle="modal" href="#addSubjectModal" class="btn btn-group-sm btn-outline-secondary">Add
                    Subject</a>
                <div class="class-table">
                    <table class="table table-bordered">
                        <thead>
                        <th>Subject name</th>
                        <th>Date created</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>English</td>
                            <td>10/10/10</td>
                            <td>
                                <div class="btn btn-group btn-group-sm">
                                    <a href="#" class="btn btn-group-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-group-sm btn-outline-success">Activate</a>
                                    <a href="#" class="btn btn-group-sm btn-outline-warning">De-Activate</a>
                                    <a href="#" class="btn btn-group-sm btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>

        </div>

    </div>
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

    </body>
    </html>
<?php } else {
    header("location:../index.php");
} ?>