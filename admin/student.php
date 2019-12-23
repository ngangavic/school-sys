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

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == "add-student") {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <form class="form-inline" action="" method="post">
                    <h5>ADD STUDENT </h5>
                    <input type="number" class="form-control form-control-sm" name="no" required>
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