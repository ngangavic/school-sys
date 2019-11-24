<div class="panel panel-default">
                        <div class="panel-heading">
                           Geography
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="insert29.php" method="post">
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
								$check= mysqli_query($link, "select * from tbl_subjavgf3t1 where subject='geography' ") ;
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
							$check= mysqli_query($link, "select * from tbl_subjavgf3t2 where subject='geography' ") ;
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
							$check= mysqli_query($link, "select * from tbl_subjavgf3t3 where subject='geography' ") ;
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