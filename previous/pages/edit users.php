<?php include"connection.php";
$get_id = $_GET['id'];
?>
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
    <div id="wrapper">
        <!-- Navigation -->
        <?php include"navigation.php";?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-md-6 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit user
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="action.php" method="post">
                            
								<?php
$result = mysqli_query($link,"SELECT * FROM tbl_users where id='$get_id' ");
$row = mysqli_fetch_array($result);
$id=$row['id'];
?>
                                    
										<div class="form-group"  >
										<input name="id" type="hidden" value="<?php echo  $row['id'] ?>" />
										<label>Username</label>
										<input class="form-control" name="username" type="text"  value="<?php echo $row['username'] ?>" />
										</div>
										
										<div class="form-group"  >
										<label>Email</label>
										<input class="form-control" name="email" type="text" value="<?php echo $row['email'] ?>" />
										</div>
										
										<div class="form-group"  >
										<label>Phone</label>
										<input class="form-control" name="phone" type="text" value="<?php echo $row['phone'] ?>" />
										</div>
										
										<div class="form-group"  >
										<label>Role</label>
										<select class="form-control" name="role">
									      <option value="admin" >Admin</option>
									      <option value="teacher" >User</option>
									    </select>
										</div>
										

							<button name="edit" class="btn btn-success pull-right" type="submit" value="Edit">Edit</button>
							
                            <!-- /.table-responsive -->
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>