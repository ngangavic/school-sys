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
                    <h1 class="page-header">Edit Students</h1>
					<div class="btn-group">
						<a href="edit student.php?id=1" type="submit" class="btn btn-danger">Form 1</a>
						<a href="edit student.php?id=2" type="submit" class="btn btn-success">Form 2</a>
						<a href="edit student.php?id=3" type="submit" class="btn btn-primary">Form 3</a>
					    <a href="edit student.php?id=4" type="submit" class="btn btn-warning">Form 4</a>
					</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-md-12 col-lg-12">
			    <?php if($get_id==1){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="edit student exec.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>House</th>
										<th>KCPE</th>
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
$result = mysqli_query($link,"SELECT * FROM tbl_students where class='form 1'");
while($row = mysqli_fetch_array($result))
{ 
$id=$row['id'];
?>
                                    <tr class="odd gradeX">
                                        <td>
										<input name="id[]" type="hidden" value="<?php echo  $row['id'] ?>" />
										<input class="form-control" name="adm[]" type="text"  value="<?php echo $row['adm'] ?>" />
										</td>
                                        <td>
										<input class="form-control" name="name[]" type="text" value="<?php echo $row['name'] ?>" />
										</td>
                                        <!--<td>
										<input class="form-control" name="class[]" type="text" value="<?php //echo $row['class'] ?>" />
										</td>--->
										<td><?php echo $row['class'] ?>
										<select class="form-control" name="class[]">
										<option value="form 1">Form 1</option>
										<option value="form 2">Form 2</option>
										<option value="form 3">Form 3</option>
										<option value="form 4">Form 4</option>
										</select></td>
                                        <td>
										<input   class="form-control" name="house[]" type="text" value="<?php echo $row['house'] ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kcpe[]" type="text" value="<?php echo $row['kcpe'] ?>" />
										</td>
										
                                    </tr>
                                        <?php } ?>
                                </tbody>

                            </table>
							<button name="" onclick="myAlert()" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
							<script>
                                function myAlert(){
                                   alert("Data is being updated.It might take sometime.\n Please wait... ");
                                      }
                            </script>
                            <!-- /.table-responsive -->
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
				<?php }elseif($get_id==2){ include"edit student2.php";?>
				<?php }elseif($get_id==3){ include"edit student3.php";?>
				<?php }elseif($get_id==4){ include"edit student4.php";}?>
				<?php //}else{ include"edit student4.php";}?>
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>