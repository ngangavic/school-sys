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
                    <h1 class="page-header">Calculations</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Perform calculations
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Calculation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Calculate Student average marks</td>
                                            <td><button class="btn btn-danger"><i class="fa fa-check"></i></button>
											    <button class="btn btn-success"><i class="fa fa-times"></i></button>
											</td>
                                            <td><a href="#" class="btn btn-danger">Calculate</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Calculate Student average grade</td>
                                            <td><button class="btn btn-danger"><i class="fa fa-check"></i></button>
											    <button class="btn btn-success"><i class="fa fa-times"></i></button>
											</td>
                                            <td><a href="#" class="btn btn-danger">Calculate</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Calculate Student total marks</td>
                                            <td><button class="btn btn-danger"><i class="fa fa-check"></i></button>
											    <button class="btn btn-success"><i class="fa fa-times"></i></button>
											</td>
                                            <td><a href="#" class="btn btn-danger">Calculate</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Calculate Student average marks</td>
                                            <td><button class="btn btn-danger"><i class="fa fa-check"></i></button>
											    <button class="btn btn-success"><i class="fa fa-times"></i></button>
											</td>
                                            <td><a href="#" class="btn btn-danger">Calculate</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Calculate Student positions</td>
                                            <td><button class="btn btn-danger"><i class="fa fa-check"></i></button>
											    <button class="btn btn-success"><i class="fa fa-times"></i></button>
											</td>
                                            <td><a href="#" class="btn btn-danger">Calculate</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Calculate Student points</td>
                                            <td><button class="btn btn-danger"><i class="fa fa-check"></i></button>
											    <button class="btn btn-success"><i class="fa fa-times"></i></button>
											</td>
                                            <td><a href="#" class="btn btn-danger">Calculate</a></td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            
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