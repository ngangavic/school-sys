<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 4 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="input totalsf4t2.php" method="post">
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
$stddetails = mysqli_query($link,"select * from tbl_students where class='form 4' ");	 
while($row = mysqli_fetch_array($stddetails)){
$id=$row['id'];
$stdadm=$row['adm'];
$stdname=$row['name'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
include"f4t2queries.php";
//sciences
if($phyex1>$bioex1){$sci1=$phyex1;}else{$sci1=$bioex1;}
if($phyp1>$biop1){$psci1=$phyp1;}else{$psci1=$biop1;}
if($phyex2>$bioex2){$sci2=$phyex2;}else{$sci2=$bioex2;}
if($phyp2>$biop2){$psci2=$phyp2;}else{$psci2=$biop2;}
if($phyex3>$bioex3){$sci3=$phyex3;}else{$sci3=$bioex3;}
if($phyp3>$biop3){$psci3=$phyp3;}else{$psci3=$biop3;}
//humanities
$hum1=0;
if($geoex1>$creex1){$hum=$geoex1;if($hum>$hisex1){$hum1=$hum;}}elseif($hisex1>$creex1){$hum=$hisex1;if($hum>$geoex1){$hum1=$hum;}}else{$hum1=$creex1;}
if($geop1>$crep1){$phum=$geop1;if($phum>$hisp1){$phum1=$phum;}}elseif($hisp1>$crep1){$phum=$hisp1;if($phum>$geop1){$phum1=$phum;}}else{$phum1=$crep1;}
if($geoex2>$creex2){$hum=$geoex2;if($hum>$hisex2){$hum2=$hum;}}elseif($hisex2>$creex2){$hum=$hisex2;if($hum>$geoex2){$hum2=$hum;}}else{$hum2=$creex2;}
if($geop2>$crep2){$phum=$geop2;if($phum>$hisp2){$phum2=$phum;}}elseif($hisp2>$crep2){$phum=$hisp2;if($phum>$geop2){$phum2=$phum;}}else{$phum2=$crep2;}
if($geoex3>$creex3){$hum=$geoex3;if($hum>$hisex3){$hum3=$hum;}}elseif($hisex3>$creex3){$hum=$hisex3;if($hum>$geoex3){$hum3=$hum;}}else{$hum3=$creex3;}
if($geop3>$crep3){$phum=$geop3;if($phum>$hisp3){$phum3=$phum;}}elseif($hisp3>$crep3){$phum=$hisp3;if($phum>$geop3){$phum3=$phum;}}else{$phum3=$crep3;}
//applied
if($busex1>$agriex1){$app1=$busex1;}else{$app1=$agriex1;}
if($busp1>$agrip1){$papp1=$busp1;}else{$papp1=$agrip1;}
if($busex2>$agriex2){$app2=$busex2;}else{$app2=$agriex2;}
if($busp2>$agrip2){$papp2=$busp2;}else{$papp2=$agrip2;}
if($busex3>$agriex3){$app3=$busex3;}else{$app3=$agriex3;}
if($busp3>$agrip3){$papp3=$busp3;}else{$papp3=$agrip3;}
//total
$total1=$engex1+$kisex1+$matex1+$chemex1+$sci1+$app1+$hum1;
$total2=$engex2+$kisex2+$matex2+$chemex2+$sci2+$hum2+$app2;
$total3=$engex3+$kisex3+$matex3+$chemex3+$sci3+$hum3+$app3;
$total4=(($total1+$total2+$total3)/3);
//points
$p1=$engp1+$kisp1+$matp1+$chemp1+$psci1+$papp1+$phum1;
$p2=$engp2+$kisp2+$matp2+$chemp2+$psci2+$phum2+$papp2;
$p3=$engp3+$kisp3+$matp3+$chemp3+$psci3+$phum3+$papp3;
$p4=($p1+$p2+$p3)/3;
//average
$mean1=($p1/7);
$mean2=($p2/7);
$mean3=($p3/7);
$average=(($mean1+$mean2+$mean3)/3);
//grade
if($mean1>=11.5){$g1='A';}elseif($mean1>=10.5){$g1='A-';}elseif($mean1>=9.5){$g1='B+';}elseif($mean1>=8.5){$g1='B';}elseif($mean1>=7.5){$g1='B-';}elseif($mean1>=6.5){$g1='C+';}elseif($mean1>=5.5){$g1='C';}elseif($mean1>=4.5){$g1='C-';}elseif($mean1>=3.5){$g1='D+';}elseif($mean1>=2.5){$g1='D';}elseif($mean1>=1.5){$g1='D-';}else{$g1='E';}

if($mean2>=11.5){$g2='A';}elseif($mean2>=10.5){$g2='A-';}elseif($mean2>=9.5){$g2='B+';}elseif($mean2>=8.5){$g2='B';}elseif($mean2>=7.5){$g2='B-';}elseif($mean2>=6.5){$g2='C+';}elseif($mean2>=5.5){$g2='C';}elseif($mean2>=4.5){$g2='C-';}elseif($mean2>=3.5){$g2='D+';}elseif($mean2>=2.5){$g2='D';}elseif($mean2>=1.5){$g2='D-';}else{$g2='E';}

if($mean3>=11.5){$g3='A';}elseif($mean3>=10.5){$g3='A-';}elseif($mean3>=9.5){$g3='B+';}elseif($mean3>=8.5){$g3='B';}elseif($mean3>=7.5){$g3='B-';}elseif($mean3>=6.5){$g3='C+';}elseif($mean3>=5.5){$g3='C';}elseif($mean3>=4.5){$g3='C-';}elseif($mean3>=3.5){$g3='D+';}elseif($mean3>=2.5){$g3='D';}elseif($mean3>=1.5){$g3='D-';}else{$g3='E';}

if($average>=11.5){$avg='A';}elseif($average>=10.5){$avg='A-';}elseif($average>=9.5){$avg='B+';}elseif($average>=8.5){$avg='B';}elseif($average>=7.5){$avg='B-';}elseif($average>=6.5){$avg='C+';}elseif($average>=5.5){$avg='C';}elseif($average>=4.5){$avg='C-';}elseif($average>=3.5){$avg='D+';}elseif($average>=2.5){$avg='D';}elseif($average>=1.5){$avg='D-';}else{$avg='E';}

//points
//if($mean1>=85){$p1=12;}elseif($mean1>=80){$p1=11;}elseif($mean1>=75){$p1=10;}elseif($mean1>=70){$p1=9;}elseif($mean1>=65){$p1=8;}elseif($mean1>=60){$p1=7;}elseif($mean1>=55){$p1=6;}elseif($mean1>=50){$p1=5;}elseif($mean1>=45){$p1=4;}elseif($mean1>=40){$p1=3;}elseif($mean1>=35){$p1=2;}else{$p1=1;}

//if($mean2>=85){$p2=12;}elseif($mean2>=80){$p2=11;}elseif($mean2>=75){$p2=10;}elseif($mean2>=70){$p2=9;}elseif($mean2>=65){$p2=8;}elseif($mean2>=60){$p2=7;}elseif($mean2>=55){$p2=6;}elseif($mean2>=50){$p2=5;}elseif($mean2>=45){$p2=4;}elseif($mean2>=40){$p2=3;}elseif($mean2>=35){$p2=2;}else{$p2=1;}

//if($mean3>=85){$p3=12;}elseif($mean3>=80){$p3=11;}elseif($mean3>=75){$p3=10;}elseif($mean3>=70){$p3=9;}elseif($mean3>=65){$p3=8;}elseif($mean3>=60){$p3=7;}elseif($mean3>=55){$p3=6;}elseif($mean3>=50){$p3=5;}elseif($mean3>=45){$p3=4;}elseif($mean3>=40){$p3=3;}elseif($mean3>=35){$p3=2;}else{$p3=1;}

//if($average>=85){$p4=12;}elseif($average>=80){$p4=11;}elseif($average>=75){$p4=10;}elseif($average>=70){$p4=9;}elseif($average>=65){$p4=8;}elseif($average>=60){$p4=7;}elseif($average>=55){$p4=6;}elseif($average>=50){$p4=5;}elseif($average>=45){$p4=4;}elseif($average>=40){$p4=3;}elseif($average>=35){$p4=2;}else{$p4=1;}

?>
                                    <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo $row['id'] ?>" />
										<input name="stdadm[]" type="hidden" value="<?php echo $stdadm; ?>" />
                                        <td><?php echo $stdadm;?></td>
                                        <td><?php echo $stdname;?></td>
                                        <td class="center"><?php echo number_format($mean1,3);?> <?php echo $g1;?> <?php echo $p1;?></td>
										<input name="total1[]" type="hidden" value="<?php echo  $total1; ?>"/>
										<input name="mean1[]" type="hidden" value="<?php echo  number_format($mean1,3); ?>"/>
										<input name="g1[]" type="hidden" value="<?php echo  $g1; ?>"/>
										<input name="p1[]" type="hidden" value="<?php echo  $p1; ?>"/>
                                        <td class="center"><?php echo number_format($mean2,3);?> <?php echo $g2;?> <?php echo $p2;?></td>
										<input name="total2[]" type="hidden" value="<?php echo  $total2; ?>"/>
										<input name="mean2[]" type="hidden" value="<?php echo  $mean2; ?>"/>
										<input name="g2[]" type="hidden" value="<?php echo  $g2; ?>"/>
										<input name="p2[]" type="hidden" value="<?php echo  $p2; ?>"/>
                                        <td class="center"><?php echo number_format($mean3,3);?> <?php echo $g3;?> <?php echo $p3;?></td>
										<input name="total3[]" type="hidden" value="<?php echo  $total3; ?>"/>
										<input name="mean3[]" type="hidden" value="<?php echo  $mean3; ?>"/>
										<input name="g3[]" type="hidden" value="<?php echo  $g3; ?>"/>
										<input name="p3[]" type="hidden" value="<?php echo  $p3; ?>"/>
						<td class="center"><?php echo number_format($average,3);?> <?php echo $avg;?> <?php echo number_format($p4,0);?></td>
						<input name="total4[]" type="hidden" value="<?php echo number_format($total4,0); ?>" />
						<input name="average[]" type="hidden" value="<?php echo number_format($average,3); ?>" />
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