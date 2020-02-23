<?php
session_start();
require_once "../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    $class_count=0;
    $student_count=0;
    $teacher_count=0;
    $parent_count=0;
    $logs_count=0;

    //count class
    $stmt=$conn->prepare("SELECT COUNT(*) FROM tbl_class WHERE school=? AND status='active' ");
    $stmt->bind_param("s",$_SESSION['id']);
    $stmt->execute();
    $class_count=$stmt->get_result()->fetch_array();
    //count student
    $stmt=$conn->prepare("SELECT COUNT(*) FROM tbl_students WHERE school=? AND kcse='not done' ");
    $stmt->bind_param("s",$_SESSION['id']);
    $stmt->execute();
    $student_count=$stmt->get_result()->fetch_array();
    //count teacher
    $stmt=$conn->prepare("SELECT COUNT(*) FROM tbl_teachers WHERE school_id=? AND status='available' ");
    $stmt->bind_param("s",$_SESSION['id']);
    $stmt->execute();
    $teacher_count=$stmt->get_result()->fetch_array();
    //count parent
    $stmt=$conn->prepare("SELECT COUNT(*) FROM tbl_parent WHERE school_id=? ");
    $stmt->bind_param("s",$_SESSION['id']);
    $stmt->execute();
    $parent_count=$stmt->get_result()->fetch_array();


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>
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

                <div class="row">

                    <div class="card col-md-2 col-lg-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2><?php echo $class_count[0]; ?></h2>
                                <i class="fa fa-3x fa-users ml-auto"></i>
                            </div>
                            Classes
                        </div>
                    </div>

                    <div class="card col-md-2 col-lg-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2><?php echo $student_count[0];?></h2>
                                <i class="fa fa-3x fa-user ml-auto"></i>
                            </div>
                            Students
                        </div>
                    </div>

                    <div class="card col-md-2 col-lg-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2><?php echo $teacher_count[0]; ?></h2>
                                <i class="fa fa-3x fa-male ml-auto"></i>
                            </div>
                            Teachers
                        </div>
                    </div>

                    <div class="card col-md-2 col-lg-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2><?php echo $parent_count[0]; ?></h2>
                                <i class="fa fa-3x fa-home ml-auto"></i>
                            </div>
                            Parents
                        </div>
                    </div>

                    <div class="card col-md-2 col-lg-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2><?php echo $logs_count[0];?></h2>
                                <i class="fa fa-3x fa-database ml-auto"></i>
                            </div>
                            Logs
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>
    <!--    new UI end-->

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

                        <select name="exam" class="form-control">
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=?");
                            $stmt->bind_param("s", $_SESSION['id']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_array()) {
                                ?>
                                <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                            <?php } ?>
                        </select>

                        <select name="class" class="form-control">
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=?");
                            $stmt->bind_param("s", $_SESSION['id']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_array()) {
                                ?>
                                <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                            <?php } ?>
                        </select>

                        <select name="term" class="form-control">
                            <option value="Term 1">Term 1</option>
                            <option value="Term 2">Term 2</option>
                            <option value="Term 3">Term 3</option>
                        </select>

                        <select name="year" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>

                        <select name="subject" class="form-control">
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=?");
                            $stmt->bind_param("s", $_SESSION['id']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_array()) {
                                ?>
                                <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                            <?php } ?>
                        </select>

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

    </body>
    </html>
<?php } else {
    header("location:../index.php");
} ?>