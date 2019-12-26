<?php
session_start();
require_once "../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
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

<!--[START]main content-->
<?php
if(isset($_GET['exam'])&&isset($_GET['class'])&&isset($_GET['term'])&&isset($_GET['year'])&&isset($_GET['subject'])){
$exam=$_GET['exam'];
$class=$_GET['class'];
$term=$_GET['term'];
$year=$_GET['year'];
$subject=$_GET['subject'];

//check if there are results
    $stmt=$conn->prepare("SELECT * FROM tbl_exam_results WHERE school=? AND class=? AND subject=? AND term=? AND exam=? AND year=?");
    $stmt->bind_param("ssssss",$_SESSION['id'],$class,$subject,$term,$exam,$year);
    $stmt->execute();
    $result=$stmt->get_result();
    $count=$result->num_rows;
    if($count>0){
        //display the results
        ?>

        <form method="post" action="../actions/results/edit-results.php">
            <input name="exam" type="hidden" value="<?php echo $exam; ?>">
            <input name="term" type="hidden" value="<?php echo $term; ?>">
            <input name="year" type="hidden" value="<?php echo $year; ?>">
            <input name="subject" type="hidden" value="<?php echo $subject; ?>">
            <table class="table">
                <thead>
                <th>Adm</th>
                <th>Name</th>
                <th>Class</th>
                <th>Marks</th>
                </thead>
                <tbody>
                <?php
//                $stmt=$conn->prepare("SELECT * FROM tbl_exam_results WHERE school=? AND class=?");
//                $stmt->bind_param("ss",$_SESSION['id'],$class);
//                $stmt->execute();
//                $result=$stmt->get_result();
                while ($row=$result->fetch_array()){
                    ?>
                    <tr>
                        <td><?php echo $row['adm'];?></td>
                        <input name="adm[]" type="hidden" value="<?php echo $row['adm']; ?>">
                        <input name="id[]" type="hidden" value="<?php echo $row['id']; ?>">
                        <td><?php echo $row['name'];?></td>
                        <input name="name[]" type="hidden" value="<?php echo $row['name']; ?>">
                        <td><?php echo $row['class'];?></td>
                        <input name="class[]" type="hidden" value="<?php echo $row['class']; ?>">
                        <td><input name="marks[]" value="<?php echo $row['marks'];?>" required></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <button class="btn btn-outline-danger" name="save">Save</button>
        </form>

        <?php
    }else{
        //insert
        ?>

        <form method="post" action="../actions/results/save-results.php">
            <input name="exam" type="hidden" value="<?php echo $exam; ?>">
            <input name="term" type="hidden" value="<?php echo $term; ?>">
            <input name="year" type="hidden" value="<?php echo $year; ?>">
            <input name="subject" type="hidden" value="<?php echo $subject; ?>">
            <table class="table">
                <thead>
                <th>Adm</th>
                <th>Name</th>
                <th>Class</th>
                <th>Marks</th>
                </thead>
                <tbody>
                <?php
                $stmt=$conn->prepare("SELECT * FROM tbl_students WHERE school=? AND class=?");
                $stmt->bind_param("ss",$_SESSION['id'],$class);
                $stmt->execute();
                $result=$stmt->get_result();
                while ($row=$result->fetch_array()){
                    ?>
                    <tr>
                        <td><?php echo $row['adm'];?></td>
                        <input name="adm[]" type="hidden" value="<?php echo $row['adm']; ?>">
                        <td><?php echo $row['name'];?></td>
                        <input name="name[]" type="hidden" value="<?php echo $row['name']; ?>">
                        <td><?php echo $row['class'];?></td>
                        <input name="class[]" type="hidden" value="<?php echo $row['class']; ?>">
                        <td><input name="marks[]" required></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <button class="btn btn-outline-danger" name="save">Save</button>
        </form>

        <?php
    }

?>

    <?php
}else{

    }
?>
<!--[END]main content-->
</body>
</html>
<?php }else{
    header("location:../index.php");
}?>