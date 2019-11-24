<?php 
include"includes/session.php";?>
<?php if($_SESSION['role'] != "admin"){?> 
<script>
alert("A New Year can only be started by the system administrator... \n Contact the system administrator to solve this error...");
window.location="login.php";
</script>
<?php }else{ ?>

<?php include"graph.php";?>
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
        <?php include"admin/navigation.php";?>
		<?php //include"topbar.php";?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ADMIN PANEL
					<a class="btn btn-primary" href="logout.php">Logout</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary"> 
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Classes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#00BFFF;"class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class=""></i> <i class="fa fa-caret-down fa-5x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="classavg/index.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>Class Averages</a></li>
                        <li class="divider"></li>
						<li><a href="update grade/class-grades.php" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>Class Grades</a></li>
                        <li class="divider"></li>
						</ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Calculations</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#228B22;"class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class=""></i> <i class="fa fa-caret-down fa-5x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="total/home.php" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>Calculate Totals</a></li>
                        <li class="divider"></li>
						<li><a href="positions" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Calculate Positions</a></li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Subject Teachers</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#FF8C00;" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class=""></i> <i class="fa fa-caret-down fa-5x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="subject teachers.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> View/Edit teacher</a></li>
                        <li class="divider"></li>
						<li><a href="add subject teacher.php" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Add subject teacher</a></li>
                        <li class="divider"></li>
						</ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <a href="print.php">
                            <div class="panel-footer">
                                <span class="pull-left">Reports</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
						<li style="background:#DC143C;" class="dropdown">
                    <a href="print.php">
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Subjects</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#1E90FF;" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class=""></i> <i class="fa fa-caret-down fa-5x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="subjectavg/index.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Subject Averages</a></li>
                        <li class="divider"></li>
						<li><a href="update grade/index.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>Edit Subject Grades</a></li>
                        <li class="divider"></li>
						</ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Students</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#2E8B57;" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class=""></i> <i class="fa fa-caret-down fa-5x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="add student.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>Add Student</a></li>
                        <li class="divider"></li>
						<li><a href="edit student.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>Edit Student</a></li>
                        <li class="divider"></li>
						<li><a href="view grade/grade.php" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i>View Grade</a></li>
                        <li class="divider"></li>
						<li><a href="subjects choices.php?id=1" style="font-size:20px;" ><i class="fa fa-user fa-3x"></i> Subject Choices</a></li>
                        <li class="divider"></li>
						</ul>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">System Users</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#FF6347;" class="dropdown">
                    <a  href="view users.php">
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Input Results</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#B22222;" class="dropdown">
                    <a  href="home.php">
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				<?php include"modal.php";?>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary"> 
                        <a href="#" data-toggle="modal" data-target="#myModal" >
                            <div class="panel-footer">
                                <span class="pull-left">Start new year</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
				<li style="background:#00BFFF;" class="dropdown">
                    <a  href="#" data-toggle="modal" data-target="#myModal" >
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Edit Remarks</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#228B22;" class="dropdown">
                    <a  href="update remarks/index.php?id=1.php">
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				
				<?php include"search/modal2.php";?>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <a href="search" >
                            <div class="panel-footer">
                                <span class="pull-left">Search Results</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>					
				<li style="background:#FF6347;" class="dropdown">
                    <a  href="search" >
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-red"> 
                        <a href="#" data-toggle="modal" data-target="#myModal" >
                            <div class="panel-footer">
                                <span class="pull-left">Edit school details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
				<li style="background:red;" class="dropdown">
                    <a  href="school"  >
                        <i class=""></i> <i class="fa fa-caret-right fa-5x"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                    </div>
                </div>
            </div>
            <!-- /.row -->
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
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

<?php } ?>