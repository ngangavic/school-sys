<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Results Management System</title>

    <?php include"header_scripts.php";?>

</head>

<body>

<?php //include"login_modal.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="login_exec.php" method="POST" role="form">
                            <fieldset>
                                <div class="form-group">
								<label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus required >
                                </div>
                                <div class="form-group">
								<label>Password:</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
								<div class="form-group"  >
								<label>Role:</label>
                                    <select class="form-control" name="role">
									<option value="admin" >Admin</option>
									<option value="teacher" >User</option>
									</select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <a href="forgot password.php">Forgot password</a>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="login" type="submit" >Login</button>
								<a href="register.php" class="btn btn-lg btn-danger btn-block" >Register</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
    <?php include"footer_scripts.php";?>

</body>

</html>