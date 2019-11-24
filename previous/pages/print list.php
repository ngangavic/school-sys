<?php include"connection.php";?>
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
						<form action="reports/f1t1/form 1 report.php" method="post">
						<!--<form action="test.php" method="post">-->
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>KCPE</th>
                                        <th>House</th>
										<th>Select</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<?php
$result = mysqli_query($link,"SELECT * FROM tbl_students");
while($row = mysqli_fetch_array($result))
{ 
$id=$row['id'];
?>
                                    <tr class="odd gradeX">
                                        <td>
										<?php echo $row['adm'];?>
										<input name="id[]" type="hidden" value="<?php echo $row['id'];?>" placeholder="adm" >
										<input name="adm[]" type="hidden" value="<?php echo $row['adm'];?>" placeholder="adm" >
										</td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['class'];?></td>
                                        <td><?php echo $row['kcpe'];?></td>
                                        <td><?php echo $row['house'];?></td>
										<td><input name="selector[]" type="checkbox" value="<?php echo $id=1; ?>"></td>
                                    </tr>
<?php }?>
                                </tbody>
								
                            </table>
							<button name="" class="btn btn-success pull-right" type="submit" value="Update">Submit</button>
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