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
<form method="post" action="">
    <table class="table">
        <thead>
        <th>Adm</th>
        <th>Name</th>
        <th>Class</th>
        <th>Marks</th>
        </thead>
        <tbody>
        <?php
        $stmt=$conn->prepare("SELECT * FROM tbl_students WHERE school=? ");
        $stmt->bind_param("s",$_SESSION['id']);
        $stmt->execute();
        $result=$stmt->get_result();
        while ($row=$result->fetch_array()){
        ?>
        <tr>
            <td><?php echo $row['adm'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><input name="marks" required></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</form>
</body>
</html>
<?php }else{
    header("location:../index.php");
}?>