<?php
session_start();
require_once "../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

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

    <!--[START]navbar-->
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <!-- Brand -->
        <a class="navbar-brand" href="#">School System</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

            </ul>
        </div>
    </nav>
    <!--[END] navbar-->

    <!--    new UI start-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidebar">
                <div class="link-item">
                    <a href=""><i class="fa fa-envelope"></i> SMS </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-school"></i> Classes </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-book"></i> Subjects </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-users"></i> Students </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-receipt"></i> Report </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-keyboard"></i> Results </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-file-alt"></i> Exams </a>
                    <hr/>
                </div>
                <div class="link-item">
                    <a href=""><i class="fa fa-door-open"></i> Logout </a>
                    <hr/>
                </div>


            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 main-content">

                <div class="row">

                    <div class="card col-md-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2>0</h2>
                                <i class="fa fa-3x fa-users ml-auto"></i>
                            </div>
                            Classes
                        </div>
                    </div>
                    <div class="card col-md-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2>0</h2>
                                <i class="fa fa-3x fa-user ml-auto"></i>
                            </div>
                            Students
                        </div>
                    </div>
                    <div class="card col-md-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2>0</h2>
                                <i class="fa fa-3x fa-male ml-auto"></i>
                            </div>
                            Teachers
                        </div>
                    </div>
                    <div class="card col-md-2 my-card">
                        <div class="card-body">
                            <div class="row">
                                <h2>0</h2>
                                <i class="fa fa-3x fa-home ml-auto"></i>
                            </div>
                            Parents
                        </div>
                    </div>


                </div>


            </div>


        </div>

<!--        calendar-->
        <div class="row">
            <div id="calendar"></div>
        </div>

    </div>
    <!--    new UI end-->


    <!--[START] content-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h5>ADMIN PANEL</h5>
        <hr/>
        <div class="row">
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        SMS
                    </div>
                    <div class="card-body red">
                        Send SMS,View SMS...
                    </div>
                </div>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="class.php" style="text-decoration: none;color: #000000">
                    <div class="card">
                        <div class="card-header">
                            Classes
                        </div>
                        <div class="card-body red">
                            Add class,Edit class,Class teachers...
                        </div>
                    </div>
                </a>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="subject.php" style="text-decoration: none;color: #000000">
                    <div class="card">
                        <div class="card-header">
                            Subjects
                        </div>
                        <div class="card-body red">
                            Grades,Teachers,Subject selection...
                        </div>
                    </div>
                </a>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="student.php?page=add-student" style="text-decoration: none;color: #000000">
                    <div class="card">
                        <div class="card-header">
                            Students
                        </div>
                        <div class="card-body red">
                            Add, Edit,View,Search student...
                        </div>
                    </div>
                </a>
            </div>
            <!--        [END] card-->
        </div>
        <br/>

        <div class="row">
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Reports
                    </div>
                    <div class="card-body red">
                        Class reports, Student reports...
                    </div>
                </div>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a data-toggle="modal" href="#resultsModal" style="text-decoration: none;color: #000000">
                    <div class="card">
                        <div class="card-header">
                            Results
                        </div>
                        <div class="card-body red">
                            Enter results, Edit results...
                        </div>
                    </div>
                </a>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        School Details
                    </div>
                    <div class="card-body red">
                        Edit school details, payment...
                    </div>
                </div>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="exams.php" style="text-decoration: none;color: #000000">
                    <div class="card">
                        <div class="card-header">
                            Exams
                        </div>
                        <div class="card-body red">
                            Create exam...
                        </div>
                    </div>
                </a>
            </div>
            <!--        [END] card-->
        </div>
        <br/>

    </div>
    <!--[END] content-->

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