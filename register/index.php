<?php
require_once "../actions/database/connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School System|Register</title>
    <script rel="javascript" src="../jquery/jquery-3.4.1.js"></script>
    <script rel="javascript" src="../popper/popper.min.js"></script>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <script rel="javascript" src="../bootstrap/js/bootstrap.js"></script>
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
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Register as School</h6>
                    </div>
                    <div class="card-body">
                        <form action="../actions/register/school.php" method="post">
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="text" class="form-control" name="name" placeholder="School Name"
                                           required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" placeholder="School Email"
                                           required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="phone" placeholder="School Phone"
                                           required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="address"
                                           placeholder="P.O Box number"
                                           required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="text" class="form-control" name="town" placeholder="School town"
                                           required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="population"
                                           placeholder="School population" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="password" class="form-control" name="pass1"
                                           placeholder="Enter password"
                                           required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                                    <input type="password" class="form-control" name="pass2"
                                           placeholder="Confirm password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-block btn-outline-primary" name="register">REGISTER</button>
                                <a href="../index.php" class="btn btn-block btn-outline-info">LOGIN</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Register as Teacher</h6>
                    </div>
                    <div class="card-body">
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
                                <input type="password" class="form-control" name="pass1" placeholder="Enter password"
                                       required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass2" placeholder="Confirm password"
                                       required>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-block btn-outline-primary" name="register">REGISTER</button>
                                <a href="../index.php" class="btn btn-block btn-outline-info">LOGIN</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Register as Parent</h6>
                    </div>
                    <div class="card-body">
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
                                <input type="password" class="form-control" name="pass1" placeholder="Enter password"
                                       required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass2" placeholder="Confrim password"
                                       required>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-block btn-outline-primary" name="register">REGISTER</button>
                                <a href="../index.php" class="btn btn-block btn-outline-info">LOGIN</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>

</body>
</html>