<?php include"connection.php";
$get_id =$_GET['id'];
//include"database.php";
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
		<?php include"modal.php";?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Subjects Average <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">PRINT</button></h1>
					
					<div class="btn-group">
						<a href="index.php?id=1" type="submit" class="btn btn-danger">Form 1</a>
						<a href="index.php?id=2" type="submit" class="btn btn-success">Form 2</a>
						<a href="index.php?id=3" type="submit" class="btn btn-primary">Form 3</a>
					    <a href="index.php?id=4" type="submit" class="btn btn-warning">Form 4</a>
					</div>
					<a href="#english">English</a>
					<a href="#kiswahili">Kiswahili</a>
					<a href="#maths">Maths</a>
					<a href="#biology">Biology</a>
					<a href="#chemistry">Chemistry</a>
					<a href="#physics">Physics</a>
					<a href="#geography">Geography</a>
					<a href="#history">History</a>
					<a href="#cre">CRE</a>
					<a href="#business">Business</a>
					<a href="#agriculture">Agriculture</a>
					
					
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-md-12 col-lg-12">
			    <?php if($get_id==1){?>
				    <div id="english">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           English
						   
                        </div>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="insert1.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
									    <th>TERM </th>
                                        <th>Exam 1</th>
                                        <th>Exam 2</th>
										<th>Exam 3</th>
										<th>Avg</th>
                                        <th>Year</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<td><?php echo "TERM 1";?>
									<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
								</td>
								<?php
								$check= mysqli_query($link, "select * from tbl_subjavgf1t1 where subject='english' ") ;
                                        while($row = mysqli_fetch_array($check)){
	                                        $ex1=$row['ex1'];
                                            $ex2=$row['ex2'];
											$ex3=$row['ex3'];
											$ex4=$row['ex4'];
											$yearc=$row['year'];
								?>
                                    <tr class="odd gradeX">
									    <td><?php //echo "TERM 1";?>
									    <input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
								        </td>
                                        <td><?php echo number_format($ex1,2);?>
										<input class="form-control" name="name[]" type="hidden" value="<?php echo $row['name'] ?>" />
										</td>
                                        <td><?php echo number_format($ex2,2);?>
										<input class="form-control" name="class[]" type="hidden" value="<?php echo $row['class'] ?>" />
										</td>
                                        <td><?php echo number_format($ex3,2);?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
										<td><?php echo number_format($ex4,2);?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
										<td><?php echo $yearc;?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
                                    </tr>
									<?php } ?>
									
									<td><?php echo "TERM 2";?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
									</td>
							<?php
							$check= mysqli_query($link, "select * from tbl_subjavgf1t2 where subject='english' ") ;
                                    while($row = mysqli_fetch_array($check)){
										$ex1=$row['ex1'];
										$ex2=$row['ex2'];
										$ex3=$row['ex3'];
										$ex4=$row['ex4'];
										$yearc=$row['year'];
								?>			
									<tr>
									    <td><?php //echo "TERM 1";?>
									    <input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
								        </td>
									    <td><?php echo number_format($ex1,2);?>
										<input class="form-control" name="name[]" type="hidden" value="<?php echo $row['name'] ?>" />
										</td>
                                        <td><?php echo number_format($ex2,2);?>
										<input class="form-control" name="class[]" type="hidden" value="<?php echo $row['class'] ?>" />
										</td>
                                        <td><?php echo number_format($ex3,2);?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
										<td><?php echo number_format($ex4,2);?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
										<td><?php echo $yearc;?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td> 
									</tr><?php } ?>
									<td><?php echo "TERM 3";?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
									</td>
							<?php
							$check= mysqli_query($link, "select * from tbl_subjavgf1t3 where subject='english' ") ;
                                    while($row = mysqli_fetch_array($check)){
										$ex1=$row['ex1'];
										$ex2=$row['ex2'];
										$ex3=$row['ex3'];
										$ex4=$row['ex4'];
										$yearc=$row['year'];
								?>			
									<tr>
									    <td><?php //echo "TERM 1";?>
									    <input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
								        </td>
									    <td><?php echo number_format($ex1,2);?>
										<input class="form-control" name="name[]" type="hidden" value="<?php echo $row['name'] ?>" />
										</td>
                                        <td><?php echo number_format($ex2,2);?>
										<input class="form-control" name="class[]" type="hidden" value="<?php echo $row['class'] ?>" />
										</td>
                                        <td><?php echo number_format($ex3,2);?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
										<td><?php echo number_format($ex4,2);?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td>
										<td><?php echo $yearc;?>
										<input   class="form-control" name="house[]" type="hidden" value="<?php echo $row['house'] ?>" />
										</td> 
									</tr><?php } ?>
                                </tbody>


                            </table>
							<button  name="" onclick="" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
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
					</div>
					
					<!--kiswahili -->
					<div id="kiswahili">
					<?php include"kiswahili1.php";?>
					</div>
					<!--maths -->
					<div id="maths">
					<?php include"maths1.php";?>
					</div>
					<!--biology -->
					<div id="biology">
					<?php include"biology1.php";?>
					</div>
					<!--chemistry -->
					<div id="chemistry">
					<?php include"chemistry1.php";?>
					</div>
					<!--physics -->
					<div id="physics">
					<?php include"physics1.php";?>
					</div>
					<!--geography -->
					<div id="geography">
					<?php include"geography1.php";?>
					</div>
					<!--history -->
					<div id="history">
					<?php include"history1.php";?>
					</div>
					<!--cre -->
					<div id="cre">
					<?php include"cre1.php";?>
					</div>
					<!--business -->
					<div id="business">
					<?php include"business1.php";?>
					</div>
					<!--agriculture -->
					<div id="agriculture">
					<?php include"agriculture1.php";?>
					</div>
					
				<?php }elseif($get_id==2){ include"subjectavg2.php";?>
				<?php }elseif($get_id==3){ include"subjectavg3.php";?>
				<?php }elseif($get_id==4){ include"subjectavg4.php";}?>
				<?php //}else{ include"edit student4.php";}?>
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>