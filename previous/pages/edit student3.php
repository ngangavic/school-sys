<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3
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
$result = mysqli_query($link,"SELECT * FROM tbl_students where class='form 3'");
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