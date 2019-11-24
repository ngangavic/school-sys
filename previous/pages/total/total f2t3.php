<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 2 Term 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="input totalsf2t3.php" method="post">
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
$stddetails = mysqli_query($link,"select * from tbl_students where class='form 2'");	 
while($row = mysqli_fetch_array($stddetails)){
$id=$row['id'];
$stdadm=$row['adm'];
$stdname=$row['name'];

$N = count($id);

$selectGrade = mysqli_query($link,"select * from tbl_average_grade where class='form 2'");	
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

for($i=0; $i < $N; $i++)
{
include"f2t3queries.php";
//sciences
if($phyex1>$bioex1){$sci1=$phyex1;}else{$sci1=$bioex1;}
if($phyex2>$bioex2){$sci2=$phyex2;}else{$sci2=$bioex2;}
if($phyex3>$bioex3){$sci3=$phyex3;}else{$sci3=$bioex3;}
//humanities
$hum1=0;
if($geoex1>$creex1){$hum=$geoex1;if($hum>$hisex1){$hum1=$hum;}}elseif($hisex1>$creex1){$hum=$hisex1;if($hum>$geoex1){$hum1=$hum;}}else{$hum1=$creex1;}
if($geoex2>$creex2){$hum=$geoex2;if($hum>$hisex2){$hum2=$hum;}}elseif($hisex2>$creex2){$hum=$hisex2;if($hum>$geoex2){$hum2=$hum;}}else{$hum2=$creex2;}
if($geoex3>$creex3){$hum=$geoex3;if($hum>$hisex3){$hum3=$hum;}}elseif($hisex3>$creex3){$hum=$hisex3;if($hum>$geoex3){$hum3=$hum;}}else{$hum3=$creex3;}
//applied
if($busex1>$agriex1){$app1=$busex1;}else{$app1=$agriex1;}
if($busex2>$agriex2){$app2=$busex2;}else{$app2=$agriex2;}
if($busex3>$agriex3){$app3=$busex3;}else{$app3=$agriex3;}
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
                                    
<?php }}?>
                                </tbody>
								
                            </table>
							<button name="" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Update">Submit</button>
							<script>
                                function myAlert(){
                                   alert("Data is being updated.It might take sometime.\n Please wait... ");
                                      }
                            </script>
							</form>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>