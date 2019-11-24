                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="remarks3.php" method="post">
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
include"view3.php";
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