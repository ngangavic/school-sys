<div class="panel panel-default">
                        <div class="panel-heading">
                            Geography FORM 3 TERM 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="updatef3t3.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Exam 1</th>
                                        <th>Exam 2</th>
										<th>Exam 3</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
$query = mysqli_query($link,"select * from tbl_students where class='form 3'");
while($row=mysqli_fetch_array($query)){
$adm2=$row['adm'];								
$result = mysqli_query($link,"SELECT * FROM tbl_geographyf3t3 where adm='$adm2'");
while($row = mysqli_fetch_array($result))
{ 
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
                                        <td class="center">
										<input  name="ex1[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['ex1'] ?>" />
										</td>
                                        <td class="center">
										<input name="ex2[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['ex2'] ?>" />
										</td>
										<td class="center">
										<input name="ex3[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['ex3'] ?>" />
										</td>
                                    </tr>
<?php } }?>

                                </tbody>

                            </table>
							<button name="geography" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
                            <!-- /.table-responsive -->
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>