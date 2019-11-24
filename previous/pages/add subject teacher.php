
<?php //include"includes/session.php";?>
<?php 

include"connection.php";
?>
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
                    <h1 class="page-header">Add Subject Teachers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add subject teacher
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="add teacher exec.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Teachers</th>
                                    </tr>
                                </thead>
                                <tbody>	
                                    <tr class="odd gradeX">
                                        <td>
									<select class="form-control" name="class">
									<option value="form 1" >Form 1</option>
									<option value="form 2" >Form 2</option>
									<option value="form 3" >Form 3</option>
									<option value="form 4" >Form 4</option>
									</select>
										</td>
                                        <td>
										<input name="subject" class="form-control" type="text"  placeholder="enter subject name" />
										</td>
                                        <td class="center">
										<input  name="teacher" class="form-control" type="text" placeholder="enter teachers name" />
										</td>
                                    </tr>
                                </tbody>

                            </table>
							<button name="add" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Add">Add</button>
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
                    <!-- /.panel -->
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>