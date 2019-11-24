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
                    <h1 class="page-header">Edit School Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form class="col-lg-8" action="school-edit.php" method="post">
			
			<label>School Name</label>
			<input name="name" type="text" class="form-control" placeholder="school name">
			
			<label>P.O. Box</label>
			<input name="box" type="text" class="form-control" placeholder="school post office box">
			
			<label>Town/City</label>
			<input name="location" type="text" class="form-control" placeholder="school town/city">
			
			<label>Email</label>
			<input name="email" type="email" class="form-control" placeholder="school email">
			
			<label>Phone number</label>
			<input name="phone" type="number" class="form-control" placeholder="school phone number">
                            
							
				<button name="edit" class="btn btn-success pull-right" type="submit" >Edit</button>
                            <!-- /.table-responsive -->
			</form>
               
                
                
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

   <?php include"footer_scripts.php";?>

</body>

</html>