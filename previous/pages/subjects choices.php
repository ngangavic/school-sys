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
                    <h1 class="page-header">Subject choices</h1>
					<div class="btn-group">
						<a href="subjects choices.php?id=1" type="submit" class="btn btn-danger">Form 1</a>
						<a href="subjects choices.php?id=2" type="submit" class="btn btn-success">Form 2</a>
						<a href="subjects choices.php?id=3" type="submit" class="btn btn-primary">Form 3</a>
					    <a href="subjects choices.php?id=4" type="submit" class="btn btn-warning">Form 4</a>
					</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-lg-12">
			    <?php if($get_id==1){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="subject choices exec.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <!--<th>Class</th>-->
                                        <th>Sciences</th>
                                        <th>Humanities</th>
										<th>Applied</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 $result = mysqli_query($link,"SELECT * FROM tbl_subjects where class='form 1' ");
                                        while($row = mysqli_fetch_array($result)){ 
                                              $id=$row['id'];
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['adm'] ?>
										<input name="id[]" type="hidden" value="<?php echo  $row['id'] ?>" />
										<input name="adm[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['adm'] ?>" />
										</td>
                                        <td><?php echo $row['name'] ?>
										<input name="name[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['name'] ?>" />
										</td>
                                        <!--<td><?php //echo $row['class'] ?>
										<input name="class[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php //echo $row['class'] ?>" />
										</td>-->
                                        <td class="center">
										<input  name="sci[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['sci'] ?>" />
										</td>
                                        <td class="center">
										<input name="hum[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['hum'] ?>" />
										</td>
										<td class="center">
										<input name="app[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['app'] ?>" />
										</td>
                                    </tr>
<?php } ?>

                                </tbody>

                            </table>
							<button name="" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
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
				<?php }elseif($get_id==2){ include"subjects choices2.php";?>
				<?php }elseif($get_id==3){ include"subjects choices3.php";?>
				<?php }elseif($get_id==4){ include"subjects choices4.php";}?>
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>