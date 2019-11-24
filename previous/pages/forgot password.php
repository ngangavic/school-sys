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
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset your password</h3>
                    </div>
                    <div class="panel-body">
                        <form action="password_reset_exec.php" method="POST" role="form">
                            <fieldset>
                        
								<div class="form-group">
								<label>Email</label>
                                    <input class="form-control" placeholder="Email" name="email" type="text" autofocus required >
                                </div>
								<div class="form-group">
								<label>Phone</label>
                                    <input class="form-control" placeholder="Phone" name="phone" type="text" autofocus required >
                                </div>
          
								<div class="form-group"  >
								<label>Role:</label>
                                    <select class="form-control" name="role">
									<option value="admin" >Admin</option>
									<option value="teacher" >User</option>
									</select>
                                </div>
								
								<div class="form-group">
								<label>Password</label>
                                    <input class="form-control" placeholder="Enter new password" name="password" type="password" autofocus required >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="reset" type="submit" >Reset</button>
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