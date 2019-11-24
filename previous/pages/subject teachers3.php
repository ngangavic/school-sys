<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="subject teachers exec.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Teachers</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                 $result = mysqli_query($link,"SELECT * FROM tbl_sbj_teachers where class='form 3' ");
                                        while($row = mysqli_fetch_array($result)){ 
                                              $id=$row['id'];
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['class'] ?>
										<input name="id[]" type="hidden" value="<?php echo  $row['id'] ?>" />
										<input name="class[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['class'] ?>" />
										</td>
                                        <td><?php echo $row['subject'] ?>
										<input name="subject[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['subject'] ?>" />
										</td>
                                        <td class="center">
										<input  name="teacher[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['teacher'] ?>" />
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