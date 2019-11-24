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
                    <h1 class="page-header">Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="students.php" method="post">
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
$result = mysqli_query($link,"SELECT * FROM tbl_agriculturef1t1");
while($row = mysqli_fetch_array($result))
{ 
$id=$row['id'];
?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['adm'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td class="center"><?php echo $row['ex1'] ?></td>
                                        <td class="center"><?php echo $row['ex2'] ?></td>
										<td class="center"><?php echo $row['ex3'] ?></td>
                                    </tr>
<?php } ?>

                                </tbody>

                            </table>
							<a class="btn btn-success pull-right" href="#" >Update Results</a>
							<a class="btn btn-danger pull-left" href="#" >Print results</a>
                            <!-- /.table-responsive -->
							</form>
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