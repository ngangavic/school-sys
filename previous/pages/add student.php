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
                    <h1 class="page-header">Add Students</h1>
					       <form method="POST" action="">
							<div class="col-lg-4">
							<input class="form-control" name="number" placeholder="enter the number of students">
							<button name="std" type="submit" class="btn btn-primary">ADD</button>
							</div>
							</form>
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Students
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="add_student_exec.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>KCPE</th>
                                        <th>House</th>
										<th>.</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								if(isset($_POST['std'])){
								$num=$_POST['number'];
								//$N=count($num);
								$N = count($num);
								
								echo("YOU ARE ENTERING ");
								echo $num ;
								echo(" STUDENTS. ");

								for($i=0; $i < $num; $i++) { ?>
						
                                    <tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <!--<td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>-->
										<td>
										<select class="form-control" name="class[]">
										<option value="form 1">Form 1</option>
										<option value="form 2">Form 2</option>
										<option value="form 3">Form 3</option>
										<option value="form 4">Form 4</option>
										</select></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<!--<td><input name="selector[]" type="checkbox" value="<?php //echo $id=1; ?>"></td>-->
                                    </tr>
								<?php } }?>
									<!--<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=2; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=3; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=4; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=5; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=6; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=7; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=8; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=9; ?>"></td>
                                    </tr>
									<tr class="odd gradeX">
                                        <td><input class="form-control" name="adm[]" type="text" placeholder="adm" ></td>
                                        <td><input class="form-control" name="name[]" type="text" placeholder="name" ></td>
                                        <td><input class="form-control" name="class[]" type="text" placeholder="class" ></td>
                                        <td><input class="form-control" name="kcpe[]" type="text" placeholder="kcpe" ></td>
                                        <td><input class="form-control" name="house[]" type="text" placeholder="house" ></td>
										<td><input name="selector[]" type="checkbox" value="<?php //echo $id=10; ?>"></td>
                                    </tr>-->
									
                                </tbody>
								
                            </table>
							<button name="" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Update">Submit</button>
							<script>
                                function myAlert(){
                                   alert("Data is being updated.It might take sometime.\n Please wait... ");
                                      }
                            </script>
							
							</form>
                            <!-- /.table-responsive -->
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