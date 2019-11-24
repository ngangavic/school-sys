<?php include"connection.php";
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
                    <h1 class="page-header">System Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            School system users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="subject teachers exec.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone</th>
										<th>Role</th>
										<th>Status</th>
										<th>Action</th>
								
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 $result = mysqli_query($link,"SELECT * FROM tbl_users ");
                                        while($row = mysqli_fetch_array($result)){ 
                                              $id=$row['id'];
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['username'] ?>
										</td>
                                        <td><?php echo $row['email'] ?>
										</td>
                                        <td class="center"><?php echo $row['phone'] ?>
										</td>
										<td class="center"><?php echo $row['role'] ?>
										</td>
										<td class="center"><?php echo $row['status'] ?>
										</td>
										<td class="center">
										<div class="btn-group">
						<a href="action.php?delete_user=<?php echo $row['id']?>" onClick="myFunction()" type="submit" class="btn btn-danger">Delete</a>
						<a href="edit users.php?id=<?php echo $row['id']?>" type="submit" class="btn btn-success" >Edit</a>
						<a href="action.php?activate=<?php echo $row['id']?>" type="submit" class="btn btn-primary">Activate</a>
					    <a href="action.php?deactivate=<?php echo $row['id']?>" type="submit" class="btn btn-warning">Deactivate</a>
					</div>
										</td>
                                    </tr>
<?php } ?>

                                </tbody>

                            </table>
							
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