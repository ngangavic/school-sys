<?php include"../graph.php";?>
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
		<!--- navigation --->	
        <?php include"navigation.php";?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Grade</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary"> 
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Term 1</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-5x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="grade select.php?id=<?php echo $id='1' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 1</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='4' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 2</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='7' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 3</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='10' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 4</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Term 2</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-5x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="grade select.php?id=<?php echo $id='2' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 1</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='5' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 2</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='8' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 3</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='11' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 4</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Term 3</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-5x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="grade select.php?id=<?php echo $id='3' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 1</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='6' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 2</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='9' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 3</a></li>
                        <li class="divider"></li>
						<li><a href="grade select.php?id=<?php echo $id='12' ?>" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Form 4</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>-->
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Average Class Trends
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>
    <script src="../../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

</body>

</html>

<script>
Morris.Bar({
        element: 'morris-bar-chart',
        data: [<?php echo $chart_data; ?> ],
        xkey:  'name',
        ykeys: ['exam1','exam2','exam3','avg'],
        labels: ['exam1','exam2','exam3','avg'],
        hideHover: 'auto',
        resize: true
    });
</script>