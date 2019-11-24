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
                    <h1 class="page-header">View Totals</h1>
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
$stddetails = mysqli_query($link,"select * from tbl_students where class='form 1'");	 
while($row = mysqli_fetch_array($stddetails)){
$id=$row['id'];
$stdadm=$row['adm'];
$stdname=$row['name'];

$selectGrade = mysqli_query($link,"select * from tbl_average_grade where class='form 1'");	
$row=mysqli_fetch_array($selectGrade);
$gradeA=$row['A'];
$gradeAminus=$row['Aminus'];
$gradeBplus=$row['Bplus'];
$gradeB=$row['B'];
$gradeBminus=$row['Bminus'];
$gradeCplus=$row['Cplus'];
$gradeC=$row['C'];
$gradeCminus=$row['Cminus'];
$gradeDplus=$row['Dplus'];
$gradeD=$row['D'];
$gradeDminus=$row['Dminus'];
$gradeE=$row['E'];	
//$N = count($id);
//for($i=0; $i < $N; $i++)
//{
include"f1t1queries.php";

//total
$total1=$engex1+$kisex1+$matex1+$chemex1+$phyex1+$bioex1+$geoex1+$creex1+$hisex1+$busex1+$agriex1;
$total2=$engex2+$kisex2+$matex2+$chemex2+$phyex2+$bioex2+$geoex2+$creex2+$hisex2+$busex2+$agriex2;
$total3=$engex3+$kisex3+$matex3+$chemex3+$phyex3+$bioex3+$geoex3+$creex3+$hisex3+$busex3+$agriex3;
$total4=(($total1+$total2+$total3)/3);
//average
$mean1=($total1/11);
$mean2=($total2/11);
$mean3=($total3/11);
$average=(($mean1+$mean2+$mean3)/3);
//grade
if($mean1>=$gradeA){$g1='A';}elseif($mean1>=$gradeAminus){$g1='A-';}elseif($mean1>=$gradeBplus){$g1='B+';}elseif($mean1>=$gradeB){$g1='B';}elseif($mean1>=$gradeBminus){$g1='B-';}elseif($mean1>=$gradeCplus){$g1='C+';}elseif($mean1>=$gradeC){$g1='C';}elseif($mean1>=$gradeCminus){$g1='C-';}elseif($mean1>=$gradeDplus){$g1='D+';}elseif($mean1>=$gradeD){$g1='D';}elseif($mean1>=$gradeDminus){$g1='D-';}else{$g1='E';}

if($mean2>=$gradeA){$g2='A';}elseif($mean2>=$gradeAminus){$g2='A-';}elseif($mean2>=$gradeBplus){$g2='B+';}elseif($mean2>=$gradeB){$g2='B';}elseif($mean2>=$gradeBminus){$g2='B-';}elseif($mean2>=$gradeCplus){$g2='C+';}elseif($mean2>=$gradeC){$g2='C';}elseif($mean2>=$gradeCminus){$g2='C-';}elseif($mean2>=$gradeDplus){$g2='D+';}elseif($mean2>=$gradeD){$g2='D';}elseif($mean2>=$gradeDminus){$g2='D-';}else{$g2='E';}

if($mean3>=$gradeA){$g3='A';}elseif($mean3>=$gradeAminus){$g3='A-';}elseif($mean3>=$gradeBplus){$g3='B+';}elseif($mean3>=$gradeB){$g3='B';}elseif($mean3>=$gradeBminus){$g3='B-';}elseif($mean3>=$gradeCplus){$g3='C+';}elseif($mean3>=$gradeC){$g3='C';}elseif($mean3>=$gradeCminus){$g3='C-';}elseif($mean3>=$gradeDplus){$g3='D+';}elseif($mean3>=$gradeD){$g3='D';}elseif($mean3>=$gradeDminus){$g3='D-';}else{$g3='E';}

if($average>=$gradeA){$avg='A';}elseif($average>=$gradeAminus){$avg='A-';}elseif($average>=$gradeBplus){$avg='B+';}elseif($average>=$gradeB){$avg='B';}elseif($average>=$gradeBminus){$avg='B-';}elseif($average>=$gradeCplus){$avg='C+';}elseif($average>=$gradeC){$avg='C';}elseif($average>=$gradeCminus){$avg='C-';}elseif($average>=$gradeDplus){$avg='D+';}elseif($average>=$gradeD){$avg='D';}elseif($average>=$gradeDminus){$avg='D-';}else{$avg='E';}

//points
if($mean1>=$gradeA){$p1=12;}elseif($mean1>=$gradeAminus){$p1=11;}elseif($mean1>=$gradeBplus){$p1=10;}elseif($mean1>=$gradeB){$p1=9;}elseif($mean1>=$gradeBminus){$p1=8;}elseif($mean1>=$gradeCplus){$p1=7;}elseif($mean1>=$gradeC){$p1=6;}elseif($mean1>=$gradeCminus){$p1=5;}elseif($mean1>=$gradeDplus){$p1=4;}elseif($mean1>=$gradeD){$p1=3;}elseif($mean1>=$gradeDminus){$p1=2;}else{$p1=1;}

if($mean2>=$gradeA){$p2=12;}elseif($mean2>=$gradeAminus){$p2=11;}elseif($mean2>=$gradeBplus){$p2=10;}elseif($mean2>=$gradeB){$p2=9;}elseif($mean2>=$gradeBminus){$p2=8;}elseif($mean2>=$gradeCplus){$p2=7;}elseif($mean2>=$gradeC){$p2=6;}elseif($mean2>=$gradeCminus){$p2=5;}elseif($mean2>=$gradeDplus){$p2=4;}elseif($mean2>=$gradeD){$p2=3;}elseif($mean2>=$gradeDminus){$p2=2;}else{$p2=1;}

if($mean3>=$gradeA){$p3=12;}elseif($mean3>=$gradeAminus){$p3=11;}elseif($mean3>=$gradeBplus){$p3=10;}elseif($mean3>=$gradeB){$p3=9;}elseif($mean3>=$gradeBminus){$p3=8;}elseif($mean3>=$gradeCplus){$p3=7;}elseif($mean3>=$gradeC){$p3=6;}elseif($mean3>=$gradeCminus){$p3=5;}elseif($mean3>=$gradeDplus){$p3=4;}elseif($mean3>=$gradeD){$p3=3;}elseif($mean3>=$gradeDminus){$p3=2;}else{$p3=1;}

if($average>=$gradeA){$p4=12;}elseif($average>=$gradeAminus){$p4=11;}elseif($average>=$gradeBplus){$p4=10;}elseif($average>=$gradeB){$p4=9;}elseif($average>=$gradeBminus){$p4=8;}elseif($average>=$gradeCplus){$p4=7;}elseif($average>=$gradeC){$p4=6;}elseif($average>=$gradeCminus){$p4=5;}elseif($average>=$gradeDplus){$p4=4;}elseif($average>=$gradeD){$p4=3;}elseif($average>=$gradeDminus){$p4=2;}else{$p4=1;}

?>
                                    <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo $row['id'] ?>" />
										<input name="stdadm[]" type="hidden" value="<?php echo $stdadm; ?>" />
                                        <td><?php echo $stdadm;?></td>
                                        <td><?php echo $stdname;?></td>
                                        <td class="center"><?php echo $total1;?> <?php echo $g1;?> <?php echo $p1;?></td>
										<input name="total1[]" type="hidden" value="<?php echo  $total1; ?>"/>
										<input name="mean1[]" type="hidden" value="<?php echo  $mean1; ?>"/>
										<input name="g1[]" type="hidden" value="<?php echo  $g1; ?>"/>
										<input name="p1[]" type="hidden" value="<?php echo  $p1; ?>"/>
                                        <td class="center"><?php echo $total2;?> <?php echo $g2;?> <?php echo $p2;?></td>
										<input name="total2[]" type="hidden" value="<?php echo  $total2; ?>"/>
										<input name="mean2[]" type="hidden" value="<?php echo  $mean2; ?>"/>
										<input name="g2[]" type="hidden" value="<?php echo  $g2; ?>"/>
										<input name="p2[]" type="hidden" value="<?php echo  $p2; ?>"/>
                                        <td class="center"><?php echo $total3;?> <?php echo $g3;?> <?php echo $p3;?></td>
										<input name="total3[]" type="hidden" value="<?php echo  $total3; ?>"/>
										<input name="mean3[]" type="hidden" value="<?php echo  $mean3; ?>"/>
										<input name="g3[]" type="hidden" value="<?php echo  $g3; ?>"/>
										<input name="p3[]" type="hidden" value="<?php echo  $p3; ?>"/>
						<td class="center"><?php echo number_format($total4,0);?> <?php echo $avg;?> <?php echo $p4;?></td>
						<input name="total4[]" type="hidden" value="<?php echo number_format($total4,0); ?>" />
						<input name="average[]" type="hidden" value="<?php echo number_format($average,0); ?>" />
										<input name="g4[]" type="hidden" value="<?php echo  $avg; ?>"/>
										<input name="p4[]" type="hidden" value="<?php echo  $p4; ?>"/>
                                    </tr>
                                    
<?php }//}?>
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