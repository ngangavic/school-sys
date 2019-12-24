<?php
session_start();
require_once "../actions/database/connection.php";

//INSERT INTO `tbl_exam`(`id`, `school`, `name`, `year`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if(isset($_POST['create'])){
        $school=$_SESSION['id'];
        $name=$_POST['exam'];
        $year=$_POST['year'];
        $term=$_POST['term'];
        $class=$_POST['class'];
        $stmt=$conn->prepare("INSERT INTO tbl_exam(school,name,class,term,year,date) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP )");
        $stmt->bind_param("sssss",$school,$name,$class,$term,$year);
        if(!$stmt->execute()){
    echo 'error';
        }else{
            header("location:exams.php?msg=success");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exams</title>
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
    <h6>Create exam</h6>
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" name="exam" placeholder="Exam name" required>
        </div>
        <div class="form-group">
            <select class="form-control" name="class" required>
                <?php
                $stmt=$conn->prepare("SELECT * FROM tbl_class WHERE school=?");
                $stmt->bind_param("s",$_SESSION['id']);
                $stmt->execute();
                $result=$stmt->get_result();
                while ($row=$result->fetch_array()){
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
<!--[END] content-->

</body>
</html>
<?php }else{
    header("location:../index.php");
}?>