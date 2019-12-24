<?php
session_start();
require_once "../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <script rel="javascript" src="../jquery/jquery-3.4.1.js"></script>
        <script rel="javascript" src="../popper/popper.min.js"></script>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script rel="javascript" src="../bootstrap/js/bootstrap.js"></script>
        <link href="../css/custom.css" rel="stylesheet">
        <style>
            a{
                text-decoration: none;
            }
        </style>
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
                <div class="card">
                    <div class="card-header">
                        Classes
                    </div>
                    <div class="card-body red">
                        Add class,Edit class,Class teachers...
                    </div>
                </div>
            </div>
            <!--        [END] card-->
            <!--        [START] card-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Subjects
                    </div>
                    <div class="card-body red">
                        Grades,Teachers,Subject selection...
                    </div>
                </div>
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
                <div class="card">
                    <div class="card-header">
                        Results
                    </div>
                    <div class="card-body red">
                        Enter results, Edit results...
                    </div>
                </div>
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

    </body>
    </html>
<?php } else {
    header("location:../index.php");
} ?>