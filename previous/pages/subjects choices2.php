<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2
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
                                 $result = mysqli_query($link,"SELECT * FROM tbl_subjects where class='form 2'");
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