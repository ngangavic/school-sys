<?php
require_once "../actions/database/connection.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School System|Register</title>
    <script rel="javascript" src="../jquery/jquery-3.4.1.js"></script>
    <script rel="javascript" src="../popper/popper.min.js"></script>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <script rel="javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script rel="javascript" src="start.js"></script>
    <script rel="javascript" src="account-type.js"></script>
    <script rel="javascript" src="password-verify.js"></script>
</head>

<body onload="load()">

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

    <!--[START] register form-->
    <div class="container-fluid" id="school" style="margin-top: 50px">

    </div>
    <!--[END] register form-->
    <?php
    if (isset($_GET['msg']) && isset($_GET['code'])) {
        if ($_GET['code'] == '501') {

    ?>
            <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 alert alert-danger">
                <strong><?php echo $_GET['msg']; ?></strong>
            </div>
        <?php } elseif ($_GET['code'] == 200) { ?>
            <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 alert alert-success">
                <strong><?php echo $_GET['msg']; ?></strong>
            </div>
    <?php }
    } ?>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-header">
                <h6>Register as
                    <select id="account-type">
                        <option value="school">School</option>
                        <option value="teacher">Teacher</option>
                        <option value="parent">Parent</option>
                    </select>
                </h6>
            </div>
            <!-- form school [START] -->
            <div class="card-body" id="form-school">
                <form action="../actions/register/school.php" method="post">
                    <div class="form-row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="text" class="form-control" name="name" placeholder="School Name" required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" placeholder="School Email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="number" class="form-control" name="phone" placeholder="School Phone" required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="number" class="form-control" name="address" placeholder="P.O Box number" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="text" class="form-control" name="town" placeholder="School town" required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="number" class="form-control" name="population" placeholder="School population" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="password" class="form-control" id="school-pass1" name="pass1" minlength="6" autocomplete="off" placeholder="Enter password" required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                            <input type="password" class="form-control" id="school-pass2" name="pass2" minlength="6" autocomplete="off" placeholder="Confirm password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-outline-primary" id="school-btn" name="register">REGISTER</button>
                        <a href="../index.php" class="btn btn-block btn-outline-info">LOGIN</a>
                    </div>

                </form>
            </div>
            <!-- form school [END] -->
            <!-- form teacher [START] -->
            <div class="card-body" id="form-teacher">
                <form action="../actions/register/teacher.php" method="post">

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>

                    <div class="form-group">

                        <select name="school" class="form-control" required>
                            <option>Select School</option>
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE locked='no' AND status='paid' ");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($rows = $result->fetch_array()) {
                            ?>
                                <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="teacher-pass1" name="pass1" minlength="6" autocomplete="off" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="teacher-pass2" name="pass2" minlength="6" autocomplete="off" placeholder="Confirm password" required>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-block btn-outline-primary" id="teacher-btn" name="register">REGISTER</button>
                        <a href="../index.php" class="btn btn-block btn-outline-info">LOGIN</a>
                    </div>

                </form>
            </div>
            <!-- form teacher [END] -->
            <!-- form parent [START] -->
            <div class="card-body" id="form-parent">
                <form action="../actions/register/parent.php" method="post">

                    <div class=" form-group">

                        <select name="school" class="form-control" required>
                            <option value="">Select School</option>
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE locked='no' AND status='paid' ");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($rows = $result->fetch_array()) {
                            ?>
                                <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="adm" placeholder="Enter ADM" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="parent-pass1" name="pass1" minlength="6" autocomplete="off" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="parent-pass2" name="pass2" minlength="6" autocomplete="off" placeholder="Confrim password" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-outline-primary" id="parent-btn" name="register">REGISTER</button>
                        <a href="../index.php" class="btn btn-block btn-outline-info">LOGIN</a>
                    </div>

                </form>
            </div>
            <!-- form parent [END] -->
        </div>
    </div>

</body>

</html>