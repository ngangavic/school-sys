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
                    <h1 class="page-header">Edit Remarks</h1>
					<div class="btn-group">
						<a href="index.php?id=1" type="submit" class="btn btn-danger">Form 1</a>
						<a href="index.php?id=2" type="submit" class="btn btn-success">Form 2</a>
						<a href="index.php?id=3" type="submit" class="btn btn-primary">Form 3</a>
					    <a href="index.php?id=4" type="submit" class="btn btn-warning">Form 4</a>
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
						<form action="remarks.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Remarks</th>
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
include"view.php";
?>
                                    <tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=1; ?>" />
										<?php echo "A";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksA" type="text" value="<?php echo $remA; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=2; ?>" />
										<?php echo "A-";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksA-" type="text" value="<?php echo $remAminus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=3; ?>" />
										<?php echo "B+";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksB+" type="text" value="<?php echo $remBplus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=4; ?>" />
										<?php echo "B";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksB" type="text" value="<?php echo $remB; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=5; ?>" />
										<?php echo "B-";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksB-" type="text" value="<?php echo $remBminus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=6; ?>" />
										<?php echo "C+";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksC+" type="text" value="<?php echo $remCplus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=7; ?>" />
										<?php echo "C";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksC" type="text" value="<?php echo $remC; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=8; ?>" />
										<?php echo "C-";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksC-" type="text" value="<?php echo $remCminus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=9; ?>" />
										<?php echo "D+";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksD+" type="text" value="<?php echo $remDplus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=10; ?>" />
										<?php echo "D";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksD" type="text" value="<?php echo $remD; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=11; ?>" />
										<?php echo "D-";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksD-" type="text" value="<?php echo $remDminus; ?>" />
										</td>
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=12; ?>" />
										<?php echo "E";?>
										</td>
                                        <td>
										<input class="form-control" name="remarksE" type="text" value="<?php echo $remE; ?>" />
										</td>
                                    </tr>
                                        <?php //} ?>
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
				<?php }elseif($get_id==2){ include"form 2.php";?>
				<?php }elseif($get_id==3){ include"form 3.php";?>
				<?php }elseif($get_id==4){ include"form 4.php";}?>
				<?php //}else{ include"edit student4.php";}?>
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>