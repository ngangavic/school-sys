<?php
session_start();
require_once "../actions/database/connection.php";

//INSERT INTO `tbl_exam`(`id`, `school`, `name`, `year`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if(isset($_POST['create'])){
        $school=$_SESSION['id'];
        $subject=$_POST['subject'];
//        $year=$_POST['year'];
//        $term=$_POST['term'];
        $stmt=$conn->prepare("INSERT INTO tbl_subject(school,name,date) VALUES (?,?,CURRENT_TIMESTAMP )");
        $stmt->bind_param("ss",$school,$subject);
        if(!$stmt->execute()){
            echo 'error';
        }else{
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
        <h6>Create subject</h6>
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" name="subject" placeholder="Subject name" required>
            </div>
            <div class="form-group">
                <button class="btn btn-outline-primary" name="create">Create</button>
            </div>
        </form>
    </div>
    <!--[END] content-->

    </body>
    </html>
<?php }else{
    header("location:../index.php");
}?>