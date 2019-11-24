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
                    <h1 class="page-header">View Positions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="col-lg-12">
			        <?php if($get_id==1){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form 1 Term 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="input totalsf1t1.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Total 1</th>
                                        <th>Total 2</th>
                                        <th>Total 3</th>
										<th>Average</th>
										
                                    </tr>
                                </thead>
                                <tbody>
	<?php
//$stddetails = mysqli_query($link,"select * from tbl_students where class='form 1'");	 
//while($row = mysqli_fetch_array($stddetails)){
//$id=$row['id'];
//$adm=$row['adm'];
//$stdname=$row['name'];
$stddetails2 = mysqli_query($link,"select * from tbl_meanf1t1 where class='form 1' order by mn1 DESC");	 
while($row = mysqli_fetch_array($stddetails2)){
$id=$row['id'];
$stdname=$row['name'];
$mn1=$row['mn1'];
$stdadm=$row['adm'];

$N = count($id);
//for($i=0; $i < $N; $i++)
//{
//	$p=0;
//	$p++;
//include"f1t1queries.php";
$x = 1; 

//while($x <= 10) {
?>
                                    <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php //echo $row['id'] ?>" />
										<input name="stdadm[]" type="hidden" value="<?php //echo $stdadm; ?>" />
                                        <td><?php //echo $stdadm;?></td>
                                        <td><?php echo $stdname;?></td>
                                        <td class="center"><?php echo $mn1;?> <?php //echo $g1;?> <?php //echo $p1;?></td>
										<input name="total1[]" type="hidden" value="<?php //echo  $total1; ?>"/>
										<input name="mean1[]" type="hidden" value="<?php //echo $mean1; ?>"/>
										<input name="g1[]" type="hidden" value="<?php //echo  $g1; ?>"/>
										<input name="p1[]" type="hidden" value="<?php //echo  $p1; ?>"/>
                                        <td class="center"><?php echo $stdadm;?> <?php //echo $g2;?> <?php //echo $p2;?></td>
										<input name="total2[]" type="hidden" value="<?php //echo  $total2; ?>"/>
										<input name="mean2[]" type="hidden" value="<?php// echo  $mean2; ?>"/>
										<input name="g2[]" type="hidden" value="<?php// echo  $g2; ?>"/>
										<input name="p2[]" type="hidden" value="<?php //echo  $p2; ?>"/>
                                        <td class="center"><?php echo $x;?> <?php //echo $g3;?> <?php //echo $p3;?></td>
										<input name="total3[]" type="hidden" value="<?php //echo  $total3; ?>"/>
										<input name="mean3[]" type="hidden" value="<?php //echo  $mean3; ?>"/>
										<input name="g3[]" type="hidden" value="<?php //echo  $g3; ?>"/>
										<input name="p3[]" type="hidden" value="<?php //echo  $p3; ?>"/>
						<td class="center"><?php// echo number_format($total4,0);?> <?php //echo $avg;?> <?php// echo $p4;?></td>
						<input name="total4[]" type="hidden" value="<?php //echo number_format($total4,0); ?>" />
						<input name="average[]" type="hidden" value="<?php //echo number_format($average,0); ?>" />
										<input name="g4[]" type="hidden" value="<?php //echo  $avg; ?>"/>
										<input name="p4[]" type="hidden" value="<?php //echo  $p4; ?>"/>
                                    </tr>
                                    
<?php $x++; }//}?>
                                </tbody>
								
                            </table>
							<button name=""  class="btn btn-success pull-right" type="submit" value="Update">Update</button>
							</form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
					<?php }elseif($get_id==2){ include"total f1t2.php";?>
					<?php }elseif($get_id==3){ include"total f1t3.php";?>
					<?php }elseif($get_id==4){ include"total f2t1.php";?>
					<?php }elseif($get_id==5){ include"total f2t2.php";?>
					<?php }elseif($get_id==6){ include"total f2t3.php";?>
					<?php }elseif($get_id==7){ include"total f3t1.php";?>
					<?php }elseif($get_id==8){ include"total f3t2.php";?>
					<?php }elseif($get_id==9){ include"total f3t3.php";?>
					<?php }elseif($get_id==10){ include"total f4t1.php";?>
					<?php }elseif($get_id==11){ include"total f4t2.php";?>
					<?php }elseif($get_id==12){ include"total f4t3.php";?>
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