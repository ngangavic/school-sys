<?php
require_once "actions/database/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School System|Login</title>
    <script rel="javascript" src="jquery/jquery-3.4.1.js"></script>
    <script rel="javascript" src="popper/popper.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script rel="javascript" src="bootstrap/js/bootstrap.js"></script>
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


<div class="container-fluid" style="margin-top: 50px">

    <!--[START] login-->
    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4 col-lg-4 ">
        <div class="card">
            <div class="card-header">
                <h6>Login</h6>
            </div>
            <div class="card-body">
                <form action="actions/login/login.php" method="post">
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" required type="text">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="school" required>
                            <option>Select school</option>
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM tbl_school WHERE locked='no' ");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_array()) {
                                ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="password" placeholder="Password" required type="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-outline-primary" name="login">LOGIN</button>
                        <a href="register/" class="btn btn-block btn-outline-info">REGISTER</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--    [END]form login-->
</div>


</body>
</html>