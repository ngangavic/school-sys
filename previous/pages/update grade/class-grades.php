<?php include"connection.php";
//$get_id = $_GET['id'];
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
                    <h1 class="page-header">Class Grades</h1>
					
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-md-12 col-lg-12">
			    <?php// if($get_id==1){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Class Grades
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="average-grade.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>FORM 1</th>
                                        <th>FORM 2</th>
                                        <th>FORM 3</th>
										<th>FORM 4</th>
										
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
include"class-grades-view.php";
?>
                                    <tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=1; ?>" />
										<?php echo "A";?>
										</td>
                                        <td>
										<input class="form-control" name="form1A" type="text" value="<?php echo $form1A; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2A" type="text" value="<?php echo $form2A; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3A" type="text" value="<?php echo $form3A; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4A" type="text" value="<?php echo $form4A; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=2; ?>" />
										<?php echo "A-";?>
										</td>
                                        <td>
										<input class="form-control" name="form1A-" type="text" value="<?php echo $form1Aminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2A-" type="text" value="<?php echo $form2Aminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3A-" type="text" value="<?php echo $form3Aminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4A-" type="text" value="<?php echo $form4Aminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=3; ?>" />
										<?php echo "B+";?>
										</td>
                                        <td>
										<input class="form-control" name="form1B+" type="text" value="<?php echo $form1Bplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2B+" type="text" value="<?php echo $form2Bplus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3B+" type="text" value="<?php echo $form3Bplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4B+" type="text" value="<?php echo $form4Bplus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=4; ?>" />
										<?php echo "B";?>
										</td>
                                        <td>
										<input class="form-control" name="form1B" type="text" value="<?php echo $form1B; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2B" type="text" value="<?php echo $form2B; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3B" type="text" value="<?php echo $form3B; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4B" type="text" value="<?php echo $form4B; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=5; ?>" />
										<?php echo "B-";?>
										</td>
                                        <td>
										<input class="form-control" name="form1B-" type="text" value="<?php echo $form1Bminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2B-" type="text" value="<?php echo $form2Bminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3B-" type="text" value="<?php echo $form3Bminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4B-" type="text" value="<?php echo $form4Bminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=6; ?>" />
										<?php echo "C+";?>
										</td>
                                        <td>
										<input class="form-control" name="form1C+" type="text" value="<?php echo $form1Cplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2C+" type="text" value="<?php echo $form2Cplus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3C+" type="text" value="<?php echo $form3Cplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4C+" type="text" value="<?php echo $form4Cplus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=7; ?>" />
										<?php echo "C";?>
										</td>
                                        <td>
										<input class="form-control" name="form1C" type="text" value="<?php echo $form1C; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2C" type="text" value="<?php echo $form2C; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3C" type="text" value="<?php echo $form3C; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4C" type="text" value="<?php echo $form4C; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=8; ?>" />
										<?php echo "C-";?>
										</td>
                                        <td>
										<input class="form-control" name="form1C-" type="text" value="<?php echo $form1Cminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2C-" type="text" value="<?php echo $form2Cminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3C-" type="text" value="<?php echo $form3Cminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4C-" type="text" value="<?php echo $form4Cminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=9; ?>" />
										<?php echo "D+";?>
										</td>
                                        <td>
										<input class="form-control" name="form1D+" type="text" value="<?php echo $form1Dplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2D+" type="text" value="<?php echo $form2Dplus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3D+" type="text" value="<?php echo $form3Dplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4D+" type="text" value="<?php echo $form4Dplus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=10; ?>" />
										<?php echo "D";?>
										</td>
                                        <td>
										<input class="form-control" name="form1D" type="text" value="<?php echo $form1D; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2D" type="text" value="<?php echo $form2D; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3D" type="text" value="<?php echo $form3D; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4D" type="text" value="<?php echo $form4D; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=11; ?>" />
										<?php echo "D-";?>
										</td>
                                        <td>
										<input class="form-control" name="form1D-" type="text" value="<?php echo $form1Dminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2D-" type="text" value="<?php echo $form2Dminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3D-" type="text" value="<?php echo $form3Dminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4D-" type="text" value="<?php echo $form4Dminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=12; ?>" />
										<?php echo "E";?>
										</td>
                                        <td>
										<input class="form-control" name="form1E" type="text" value="<?php echo $form1E; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form2E" type="text" value="<?php echo $form2E; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="form3E" type="text" value="<?php echo $form3E; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="form4E" type="text" value="<?php echo $form4E; ?>" />
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
				<?php// }elseif($get_id==2){ include"form 2.php";?>
				<?php //}elseif($get_id==3){ include"form 3.php";?>
				<?php //}elseif($get_id==4){ include"form 4.php";}?>
				<?php //}else{ include"edit student4.php";}?>
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>