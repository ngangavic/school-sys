                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2
							<div class="btn-group">
						<a href="positions.php?id=4" type="submit" class="btn btn-danger">Term 1</a>
						<a href="positions.php?id=5" type="submit" class="btn btn-success">Term 2</a>
						<a href="positions.php?id=6" type="submit" class="btn btn-primary">Term 3</a>
					    <!--<a href="positions f1t1.php?id=4" type="submit" class="btn btn-warning">Term 4</a>-->
					        </div>
                        </div>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body col-lg-3">
						<div class="panel-heading">
						Term 3 Exam 1
						</div>
						<form action="input positionsf2t3.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>.</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 include"connection.php";
                                    $query = mysqli_query($link,"select count(adm) from tbl_meanf2t3 where class='form 2' ");	 
                                    $row=mysqli_fetch_array($query);
                                    $total=$row['count(adm)'];
									$N=$total;

                              $query = mysqli_query($link,"select * from tbl_meanf2t3 where class='form 2' order by mn1 desc");	
                               for($i=1;$i<=$N;$i++){ 
                              while($row=mysqli_fetch_array($query))
                                    {
										$id=$row['id'];
										$adm= $row['adm'];
										$name= $row['name'];
										$class= $row['class'];	
										//cho $adm,'</br>';
								?>
								
	                                <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo $row['id'] ?>" />
										<input name="adm[]" type="hidden" value="<?php echo $adm; ?>" />
                                        <td><?php echo $adm;?></td>
                                        <td><?php echo $name;?></td>
                                        </tr>
                                    
<?php } ?>
                                         <input name="pos[]" type="hidden" value="<?php echo $i; ?>" />
							   <?php } ?>
                                </tbody>
								
                            </table>
							<button name="ex1"  class="btn btn-success pull-right" type="submit" value="Update">Update</button>
							</form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						
						<!-- /.panel-heading -->
                        <div class="panel-body col-lg-3">
						<div class="panel-heading">
						Term 3 Exam 2
						</div>
						<form action="input positionsf2t3.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>.</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 include"connection.php";
                                    $query = mysqli_query($link,"select count(adm) from tbl_meanf2t3 where class='form 2' ");	 
                                    $row=mysqli_fetch_array($query);
                                    $total=$row['count(adm)'];
									$N=$total;

                              $query = mysqli_query($link,"select * from tbl_meanf2t3 where class='form 2' order by mn2 desc");	
                               for($i=1;$i<=$N;$i++){ 
                              while($row=mysqli_fetch_array($query))
                                    {
										$id=$row['id'];
										$adm= $row['adm'];
										$name= $row['name'];
										$class= $row['class'];	
										//cho $adm,'</br>';
								?>
								
	                                <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo $row['id'] ?>" />
										<input name="adm[]" type="hidden" value="<?php echo $adm; ?>" />
                                        <td><?php echo $adm;?></td>
                                        <td><?php echo $name;?></td>
                                        </tr>
                                    
<?php } ?>
                                         <input name="pos[]" type="hidden" value="<?php echo $i; ?>" />
							   <?php } ?>
                                </tbody>
								
                            </table>
							<button name="ex2"  class="btn btn-success pull-right" type="submit" value="Update">Update</button>
							</form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						
						<!-- /.panel-heading -->
                        <div class="panel-body col-lg-3">
						<div class="panel-heading">
						Term 3 Exam 3
						</div>
						<form action="input positionsf2t3.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>.</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 include"connection.php";
                                    $query = mysqli_query($link,"select count(adm) from tbl_meanf2t3 where class='form 2' ");	 
                                    $row=mysqli_fetch_array($query);
                                    $total=$row['count(adm)'];
									$N=$total;

                              $query = mysqli_query($link,"select * from tbl_meanf2t3 where class='form 2' order by mn3 desc");	
                               for($i=1;$i<=$N;$i++){ 
                              while($row=mysqli_fetch_array($query))
                                    {
										$id=$row['id'];
										$adm= $row['adm'];
										$name= $row['name'];
										$class= $row['class'];	
										//cho $adm,'</br>';
								?>
								
	                                <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo $row['id'] ?>" />
										<input name="adm[]" type="hidden" value="<?php echo $adm; ?>" />
                                        <td><?php echo $adm;?></td>
                                        <td><?php echo $name;?></td>
										</tr>
                                    
<?php } ?>
                                         <input name="pos[]" type="hidden" value="<?php echo $i; ?>" />
							   <?php } ?>
                                </tbody>
								
                            </table>
							<button name="ex3"  class="btn btn-success pull-right" type="submit" value="Update">Update</button>
							</form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						
						<!-- /.panel-heading -->
                        <div class="panel-body col-lg-3">
						<div class="panel-heading">
						Term 3 Average
						</div>
						<form action="input positionsf2t3.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>.</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 include"connection.php";
                                    $query = mysqli_query($link,"select count(adm) from tbl_meanf2t3 where class='form 2' ");	 
                                    $row=mysqli_fetch_array($query);
                                    $total=$row['count(adm)'];
									$N=$total;

                              $query = mysqli_query($link,"select * from tbl_meanf2t3 where class='form 2' order by mn4 desc");	
                               for($i=1;$i<=$N;$i++){ 
                              while($row=mysqli_fetch_array($query))
                                    {
										$id=$row['id'];
										$adm= $row['adm'];
										$name= $row['name'];
										$class= $row['class'];	
										//cho $adm,'</br>';
								?>
								
	                                <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo $row['id'] ?>" />
										<input name="adm[]" type="hidden" value="<?php echo $adm; ?>" />
                                        <td><?php echo $adm;?></td>
                                        <td><?php echo $name;?></td>
										</tr>
                                    
<?php } ?>
                                         <input name="pos[]" type="hidden" value="<?php echo $i; ?>" />
							   <?php } ?>
                                </tbody>
								
                            </table>
							<button name="ex4"  class="btn btn-success pull-right" type="submit" value="Update">Update</button>
							</form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						
                    </div>