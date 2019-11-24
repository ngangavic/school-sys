<?php include"connection.php";
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
                    <h1 class="page-header">View Positions
					<div class="btn-group">
						<a href="positions.php?id=1" type="submit" class="btn btn-danger">Form 1</a>
						<a href="positions.php?id=4" type="submit" class="btn btn-success">Form 2</a>
						<a href="positions.php?id=7" type="submit" class="btn btn-primary">Form 3</a>
					    <a href="positions.php?id=10" type="submit" class="btn btn-warning">Form 4</a>
				    </div>
					</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="col-lg-12">
			        <?php if($get_id==1){ include"positions f1t1.php";?>
					<?php }elseif($get_id==2){ include"positions f1t2.php";?>
					<?php }elseif($get_id==3){ include"positions f1t3.php";?>
					<?php }elseif($get_id==4){ include"positions f2t1.php";?>
					<?php }elseif($get_id==5){ include"positions f2t2.php";?>
					<?php }elseif($get_id==6){ include"positions f2t3.php";?>
					<?php }elseif($get_id==7){ include"positions f3t1.php";?>
					<?php }elseif($get_id==8){ include"positions f3t2.php";?>
					<?php }elseif($get_id==9){ include"positions f3t3.php";?>
					<?php }elseif($get_id==10){ include"positions f4t1.php";?>
					<?php }elseif($get_id==11){ include"positions f4t2.php";?>
					<?php }elseif($get_id==12){ include"positions f4t3.php";?>
					<?php }else{?>
					<div class="alert alert-danger">
              <strong>Please <a href="grade select.php">Click here</a> to select a Subject</strong> 
               </div>
					<?php } ?>
                    <!-- /.panel -->
            </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include"footer_scripts.php";?>
</body>
</html>