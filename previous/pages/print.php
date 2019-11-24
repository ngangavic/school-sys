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
                    <h1 class="page-header">Print</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Print reports
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
							
							<?php if($_SESSION['role'] == "admin"){?> 
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class/Term</th>
                                            <th>Report form</th>
                                            <th>Classlist</th>
                                        </tr>
                                    </thead>
									
									
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Form 1 Term 1</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t1/form 1 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t1/form 1 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t1/form 1 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t1/form 1 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t1/form 1 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t1/form 1 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t1/form 1 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t1/form 1 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Form 1 Term 2</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t2/form 1 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t2/form 1 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t2/form 1 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t2/form 1 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t2/form 1 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t2/form 1 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t2/form 1 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t2/form 1 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Form 1 Term 3</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t3/form 1 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t3/form 1 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t3/form 1 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t3/form 1 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t3/form 1 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t3/form 1 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t3/form 1 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t3/form 1 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Form 2 Term 1</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t1/form 2 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t1/form 2 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t1/form 2 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t1/form 2 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t1/form 2 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t1/form 2 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t1/form 2 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t1/form 2 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Form 2 Term 2</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t2/form 2 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t2/form 2 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t2/form 2 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t2/form 2 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t2/form 2 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t2/form 2 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t2/form 2 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t2/form 2 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Form 2 Term 3</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t3/form 2 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t3/form 2 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t3/form 2 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t3/form 2 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t3/form 2 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t3/form 2 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t3/form 2 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t3/form 2 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Form 3 Term 1</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t1/form 3 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t1/form 3 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t1/form 3 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t1/form 3 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t1/form 3 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t1/form 3 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t1/form 3 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t1/form 3 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>Form 3 Term 2</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t2/form 3 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t2/form 3 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t2/form 3 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t2/form 3 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t2/form 3 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t2/form 3 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t2/form 3 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t2/form 3 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>Form 3 Term 3</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t3/form 3 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t3/form 3 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t3/form 3 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t3/form 3 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t3/form 3 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t3/form 3 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t3/form 3 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t3/form 3 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Form 4 Term 1</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t1/form 4 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t1/form 4 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t1/form 4 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t1/form 4 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t1/form 4 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t1/form 4 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t1/form 4 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t1/form 4 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Form 4 Term 2</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t2/form 4 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t2/form 4 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t2/form 4 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t2/form 4 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t2/form 4 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t2/form 4 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t2/form 4 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t2/form 4 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>12</td>
                                            <td>Form 4 Term 3</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t3/form 4 exam1.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t3/form 4 exam2.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t3/form 4 exam3.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t3/form 4 exam4.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t3/form 4 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t3/form 4 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t3/form 4 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t3/form 4 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										
                                    </tbody>
									
                                </table>
								<?php }else{ ?>
								<table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class/Term</th>
                                            <th>Classlist</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Form 1 Term 1</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t1/form 1 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t1/form 1 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t1/form 1 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t1/form 1 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Form 1 Term 2</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t2/form 1 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t2/form 1 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t2/form 1 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t2/form 1 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Form 1 Term 3</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f1t3/form 1 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f1t3/form 1 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f1t3/form 1 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f1t3/form 1 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Form 2 Term 1</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t1/form 2 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t1/form 2 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t1/form 2 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t1/form 2 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Form 2 Term 2</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t2/form 2 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t2/form 2 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t2/form 2 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t2/form 2 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Form 2 Term 3</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f2t3/form 2 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f2t3/form 2 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f2t3/form 2 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f2t3/form 2 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Form 3 Term 1</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t1/form 3 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t1/form 3 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t1/form 3 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t1/form 3 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>Form 3 Term 2</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t2/form 3 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t2/form 3 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t2/form 3 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t2/form 3 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>Form 3 Term 3</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f3t3/form 3 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f3t3/form 3 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f3t3/form 3 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f3t3/form 3 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Form 4 Term 1</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t1/form 4 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t1/form 4 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t1/form 4 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t1/form 4 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Form 4 Term 2</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t2/form 4 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t2/form 4 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t2/form 4 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t2/form 4 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										<tr>
                                            <td>12</td>
                                            <td>Form 4 Term 3</td>
                                            
                                            <td>
											<div class="btn-group">
											<a href="reports/f4t3/form 4 exam1 classlist.php" type="submit" class="btn btn-danger">Exam 1</a>
											<a href="reports/f4t3/form 4 exam2 classlist.php" type="submit" class="btn btn-success">Exam 2</a>
											<a href="reports/f4t3/form 4 exam3 classlist.php" type="submit" class="btn btn-primary">Exam 3</a>
											<a href="reports/f4t3/form 4 exam4 classlist.php" type="submit" class="btn btn-warning">AVG</a>
											</div>
											</td>
                                        </tr>
										
                                    </tbody>
									
                                </table>
								<?php } ?>
								
                            <!-- /.table-responsive -->
                        </div>
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