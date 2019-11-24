<?php 
//$get_id = $_GET['id'];
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
                    <h1 class="page-header">Calculate Positions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <a href="positions.php?id=<?php echo $id='1' ?>" class="btn btn-danger btn-lg">Term 1</a> 
						  <a href="positions.php?id=<?php echo $id='2' ?>" class="btn btn-danger btn-lg">Term 2</a> 
						  <a href="positions.php?id=<?php echo $id='3' ?>" class="btn btn-danger btn-lg">Term 3</a> 
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
					
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <a href="positions.php?id=<?php echo $id='4' ?>" class="btn btn-warning btn-lg">Term 1</a> 
						  <a href="positions.php?id=<?php echo $id='5' ?>" class="btn btn-warning btn-lg">Term 2</a> 
						  <a href="positions.php?id=<?php echo $id='6' ?>" class="btn btn-warning btn-lg">Term 3</a> 
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
					
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <a href="positions.php?id=<?php echo $id='7' ?>" class="btn btn-info btn-lg">Term 1</a> 
						  <a href="positions.php?id=<?php echo $id='8' ?>" class="btn btn-info btn-lg">Term 2</a> 
						  <a href="positions.php?id=<?php echo $id='9' ?>" class="btn btn-info btn-lg">Term 3</a> 
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
					
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 4 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <a href="positions.php?id=<?php echo $id='10' ?>" class="btn btn-primary btn-lg">Term 1</a> 
						  <a href="positions.php?id=<?php echo $id='11' ?>" class="btn btn-primary btn-lg">Term 2</a> 
						  <a href="positions.php?id=<?php echo $id='12' ?>" class="btn btn-primary btn-lg">Term 3</a> 
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>
				
                </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include"footer_scripts.php";?>
</body>
</html>