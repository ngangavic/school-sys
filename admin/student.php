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

                            <form class="form-inline" action="" method="post">
                                <input type="number" class="form-control form-control-sm" placeholder="Enter number of students" name="no" required />
                                <button class="btn btn-sm btn-danger" name="create">CREATE</button>
                            </form>
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
                                                        <td><input type="text" class="form-control form-control-sm" name="adm[]" id="adm"
                                                                   required></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="name[]" id="name"
                                                                   required></td>
                                                        <td>
                                                            <select name="classs[]" required class="form-control form-control-sm" id="classs">
                                                                <option value="Form 1">Form 1</option>
                                                                <option value="Form 2">Form 2</option>
                                                                <option value="Form 3">Form 3</option>
                                                                <option value="FOrm 4">Form 4</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control form-control-sm" name="kcpe[]" id="kcpe"
                                                                   required></td>
                                                        <td><input type="date" class="form-control form-control-sm dob" name="dob[]" id="dob"
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
                        ?>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <h5>EDIT STUDENT </h5>

                            <hr/>
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-group btn-outline-danger">Form 1</a>
                                <a href="#" class="btn btn-group btn-outline-info">Form 2</a>
                                <a href="#" class="btn btn-group btn-outline-success">Form 3</a>
                                <a href="#" class="btn btn-group btn-outline-primary">Form 4</a>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Edit students-Form 1
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <table class="table table-sm">
                                            <thead>
                                            <th>Adm</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>KCPE</th>
                                            <th>DOB</th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" name="adm[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="name[]" required>
                                                </td>
                                                <td>
                                                    <select name="class[]" required class="form-control form-control-sm">
                                                        <option value="">Form 1</option>
                                                        <option value="">Form 2</option>
                                                        <option value="">Form 3</option>
                                                        <option value="">Form 4</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="kcpe[]" required>
                                                </td>
                                                <td><input type="date" class="form-control form-control-sm" name="dob[]" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" name="adm[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="name[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="class[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="kcpe[]" required>
                                                </td>
                                                <td><input type="date" class="form-control form-control-sm" name="dob[]" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" name="adm[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="name[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="class[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="kcpe[]" required>
                                                </td>
                                                <td><input type="date" class="form-control form-control-sm" name="dob[]" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" name="adm[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="name[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="class[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="kcpe[]" required>
                                                </td>
                                                <td><input type="date" class="form-control form-control-sm" name="dob[]" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" name="adm[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="name[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="class[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="kcpe[]" required>
                                                </td>
                                                <td><input type="date" class="form-control form-control-sm" name="dob[]" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" name="adm[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="name[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="class[]" required>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" name="kcpe[]" required>
                                                </td>
                                                <td><input type="date" class="form-control form-control-sm" name="dob[]" required>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <button class="btn btn-sm btn-outline-primary">EDIT</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <?php
                    }
                }
                ?>

            </div>

        </div>

    </div>
    <!--    new UI end-->

    <script>
        // $(document).ready(function () {
        //     $('.dob').focusout(function () {
        //         var adm = $("#adm").val();
        //         var name = $("#name").val();
        //         var classs = $("#classs").val();
        //         var kcpe = $("#kcpe").val();
        //         var dob = $("#dob").val();
        //         $.ajax({
        //             url: "../actions/student/a-e-student.php",
        //             // url: "../actions/student/test.php",
        //             method: "post",
        //             data: {
        //                 adm: adm,
        //                 name: name,
        //                 classs: classs,
        //                 kcpe: kcpe,
        //                 dob: dob
        //             },
        //             success: function (data) {
        //                 if(data=="00"){
        //                     alert("Insert Success");
        //                 }else if(data=="0") {
        //                     alert("Update Success");
        //                 }else if(data=="01") {
        //                     alert("Insert error");
        //                 }else{
        //                     alert("Error");
        //                 }
        //             }
        //         });
        //     });
        // });
    </script>
    </body>
    </html>
<?php } else {
    header("location:../index.php");
} ?>