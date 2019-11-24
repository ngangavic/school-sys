<div class="panel panel-default">
                        <div class="panel-heading">
                           Form 2 Term 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="insert4.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>Exam 1</th>
                                        <th>Exam 2</th>
										<th>Exam 3</th>
										<th>Exam 4</th>
                                        <th>Year</th>
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$check= mysqli_query($link, "select * from tbl_classavgf2t1 ") ;
while($row = mysqli_fetch_array($check)){
	$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];
								?>
								
                                    <tr class="odd gradeX">
                                        
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
                                </tbody>
<?php } ?>
                            </table>
							<button name="" onclick="" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
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
					
					<!--form 1 term 2-->
					<div class="panel panel-default">
                        <div class="panel-heading">
                           Form 2 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="insert5.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>Exam 1</th>
                                        <th>Exam 2</th>
										<th>Exam 3</th>
										<th>Exam 4</th>
                                        <th>Year</th>
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$check= mysqli_query($link, "select * from tbl_classavgf2t2 ") ;
while($row = mysqli_fetch_array($check)){
	$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];
								?>
								
                                    <tr class="odd gradeX">
                                        
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
                                </tbody>
<?php } ?>
                            </table>
							<button name="" onclick="" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
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
					
					<!--form 1 term 3-->
					<div class="panel panel-default">
                        <div class="panel-heading">
                           Form 2 Term 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="insert6.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>Exam 1</th>
                                        <th>Exam 2</th>
										<th>Exam 3</th>
										<th>Exam 4</th>
                                        <th>Year</th>
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$check= mysqli_query($link, "select * from tbl_classavgf2t3 ") ;
while($row = mysqli_fetch_array($check)){
	$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];
								?>
								
                                    <tr class="odd gradeX">
                                        
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
                                </tbody>
<?php } ?>
                            </table>
							<button name="" onclick="" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
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
					