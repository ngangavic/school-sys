<?php
session_start();
require_once "../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student</title>
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
                    <h5 style="color: #000000;padding: 5px;">Dashboard: Student</h5>
                    <hr/>
                </div>

                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == "add-student") {
                        ?>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                <form class="form-inline" action="" method="post">
                                    <input type="number" class="form-control form-control-sm"
                                           placeholder="Enter number of students" name="no" required/>
                                    <button class="btn btn-sm btn-danger" name="create">CREATE</button>
                                </form>

                                <a href="student.php?page=edit-student&class=Form 1" class="btn btn-sm btn-primary">View Students</a>
                            </div>
                            <hr/>

                            <div class="card">
                                <div class="card-header">
                                    Add students
                                </div>
                                <div class="card-body">
                                    <form action="../actions/student/a-e-student.php" method="post">
                                        <table class="table table-sm">
                                            <thead>
                                            <th>Adm</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>KCPE</th>
                                            <th>DOB</th>
                                            </thead>
                                            <tbody>

                                            <?php
                                            if (isset($_POST['create']) && isset($_POST['no'])) {
                                                for ($i = 0; $i < $_POST['no']; $i++) {
                                                    ?>
                                                    <tr>
                                                        <td><input type="text" class="form-control form-control-sm"
                                                                   name="adm[]" id="adm"
                                                                   required></td>
                                                        <td><input type="text" class="form-control form-control-sm"
                                                                   name="name[]" id="name"
                                                                   required></td>
                                                        <td>
                                                            <select name="classs[]" required
                                                                    class="form-control form-control-sm" id="classs">
                                                                <option value="Form 1">Form 1</option>
                                                                <option value="Form 2">Form 2</option>
                                                                <option value="Form 3">Form 3</option>
                                                                <option value="FOrm 4">Form 4</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control form-control-sm"
                                                                   name="kcpe[]" id="kcpe"
                                                                   required></td>
                                                        <td><input type="date" class="form-control form-control-sm dob"
                                                                   name="dob[]" id="dob"
                                                                   required></td>
                                                    </tr>
                                                <?php }
                                            } ?>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-sm btn-outline-primary">SAVE</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <?php
                    } elseif ($page == "edit-student") {
                        if (isset($_GET['class']) && !empty($_GET['class'])) {
                            ?>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="btn-group btn-group-sm">
                                    <a href="student.php?page=edit-student&class=Form 1" class="btn btn-group btn-outline-danger">Form 1</a>
                                    <a href="student.php?page=edit-student&class=Form 2" class="btn btn-group btn-outline-info">Form 2</a>
                                    <a href="student.php?page=edit-student&class=Form 3" class="btn btn-group btn-outline-success">Form 3</a>
                                    <a href="student.php?page=edit-student&class=Form 4" class="btn btn-group btn-outline-primary">Form 4</a>
                                    <a href="student.php?page=add-student" class="btn btn-group btn-outline-primary">Add Student</a>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        Edit students-<?php echo $_GET['class']; ?>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <table class="table table-sm">
                                                <thead>
                                                <th>Adm</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>K.C.P.E</th>
                                                <th>DOB</th>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE class=? AND school=? ");
                                                $stmt->bind_param("ss", $_GET['class'],$_SESSION['id']);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while ($row = $result->fetch_array()) {
                                                    ?>
                                                    <tr>
                                                        <td><input type="text" class="form-control form-control-sm"
                                                                   name="adm[]" value="<?php echo $row['adm']; ?>" required>
                                                        </td>
                                                        <td><input type="text" class="form-control form-control-sm"
                                                                   name="name[]" value="<?php echo $row['name']; ?>" required>
                                                        </td>
                                                        <td>
                                                            <select name="class[]" required
                                                                    class="form-control form-control-sm">
                                                                <option value="<?php echo $row['class']; ?>"><?php echo $row['class']; ?></option>
                                                                <option value="Form 1">Form 1</option>
                                                                <option value="Form 2">Form 2</option>
                                                                <option value="Form 3">Form 3</option>
                                                                <option value="Form 4">Form 4</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control form-control-sm"
                                                                   name="kcpe[]" value="<?php  echo $row['kcpe']; ?>" required>
                                                        </td>
                                                        <td><input type="date" class="form-control form-control-sm"
                                                                   name="dob[]" value="<?php echo $row['dob']; ?>" required>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-sm btn-outline-primary" name="edit">EDIT</button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger">
                                <strong>Oops! An error occured.</strong>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

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