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

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Register</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="register_exec.php" role="form">
                            <fieldset>
							<div class="row" >
							    <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
								<label>Username:</label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
                                </div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
								<label>Phone number:</label>
                                    <input class="form-control" placeholder="Phone" name="phone" type="number" value="" required>
                                </div>
								</div>
							    <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
								<label>E-mail:</label>
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                </div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group"  >
								<label>Role:</label>
                                    <select class="form-control" name="role">
									<!--<option value="admin" >Admin</option>-->
									<option value="teacher" >Teacher</option>
									</select>
                                </div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="form-group">
								<label>Password:</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" minlength="4" id="pass1" required>
                                </div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="form-group">
								<label>Confirm password:</label>
                                    <input class="form-control" placeholder="Confirm password" name="password2" type="password" minlength="4" id="pass2" onKeyUp="checkPass(); return false;" required autofocus>
									<span id="confirmMessage" class="confirmMessage"></span>
                                </div>
								</div>
                                <button class="btn btn-lg btn-danger btn-block" name="register" type="submit" >Register</button>
								<a href="login.php" class="btn btn-lg btn-success btn-block" >Login</a>
								</div>
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