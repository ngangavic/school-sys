<?php 
$get_id = $_GET['id'];
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
                    <h1 class="page-header">Subjects</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php if($get_id==1){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1 Term 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='1' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='2' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='3' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='4' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='5' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='6' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='7' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='8' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='9' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='10' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='11' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==2){ ?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='45' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='46' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='47' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='48' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='49' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='50' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='51' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='52' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='53' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='54' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='55' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==3){ ?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1 Term 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='89' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='90' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='91' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='92' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='93' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='94' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='95' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='96' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='97' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='98' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='99' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==4){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2 Term 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='12' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='13' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='14' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='15' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='16' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='17' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='18' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='19' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='20' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='21' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='22' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==5){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='56' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='57' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='58' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='59' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='60' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='61' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='62' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='63' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='64' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='65' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='66' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==6){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2 Term 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='100' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='101' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='102' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='103' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='104' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='105' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='106' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='107' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='108' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='109' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='110' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==7){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3 Term 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='23' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='24' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='25' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='26' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='27' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='28' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='29' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='30' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='31' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='32' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='33' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==8){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='67' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='68' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='69' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='70' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='71' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='72' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='73' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='74' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='75' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='76' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='77' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==9){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3 Term 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='111' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='112' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='113' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='114' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='115' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='116' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='117' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='118' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='119' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='120' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='121' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==10){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 4 Term 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='34' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='35' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='36' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='37' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='38' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='39' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='40' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='41' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='42' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='43' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='44' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==11){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 4 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='78' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='79' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='80' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='81' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='82' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='83' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='84' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='85' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='86' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='87' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='88' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }elseif($get_id==12){?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 4 Term 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>No. of Students</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='122' ?>" class="btn btn-danger">English</a></td>
                                        </tr>
										<tr>
                                            <td>2</td>
                                            <td>Kiswahili</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='123' ?>" class="btn btn-danger">Kiswahili</a></td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='124' ?>" class="btn btn-danger">Mathematics</a></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='125' ?>" class="btn btn-danger">Biology</a></td>
                                        </tr>
										<tr>
                                            <td>5</td>
                                            <td>Physics</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='126' ?>" class="btn btn-danger">Physics</a></td>
                                        </tr>
										<tr>
                                            <td>6</td>
                                            <td>Chemistry</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='127' ?>" class="btn btn-danger">Chemistry</a></td>
                                        </tr>
										<tr>
                                            <td>7</td>
                                            <td>Geography</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='128' ?>" class="btn btn-danger">Geography</a></td>
                                        </tr>
										<tr>
                                            <td>8</td>
                                            <td>History</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='129' ?>" class="btn btn-danger">History</a></td>
                                        </tr>
										<tr>
                                            <td>9</td>
                                            <td>CRE</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='130' ?>" class="btn btn-danger">CRE</a></td>
                                        </tr>
										<tr>
                                            <td>10</td>
                                            <td>Agriculture</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='131' ?>" class="btn btn-danger">Agriculture</a></td>
                                        </tr>
										<tr>
                                            <td>11</td>
                                            <td>Business</td>
                                            <td>23</td>
                                            <td><a href="students.php?id=<?php echo $id='132' ?>" class="btn btn-danger">Business</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<?php }else{?>
				<div class="alert alert-danger">
              <strong>Please <a href="home.php">Click here</a> to select a class</strong> 
               </div>
				<?php }?>
                
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include"footer_scripts.php";?>
</body>

</html>