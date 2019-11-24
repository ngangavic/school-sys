<div class="panel panel-default">
                        <div class="panel-heading">
                            Mathematics Form 3 Term 2
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="input_gradef3t2.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Ex1</th>
                                        <th>Ex2</th>
                                        <th>Ex3</th>
										<th>Total</th>
										
                                    </tr>
                                </thead>
                                <tbody>
	<?php
$viewRemarks=mysqli_query($link,"SELECT * FROM tbl_remarks where class='form 3' ");
while($row=mysqli_fetch_array($viewRemarks))
{
	$remA=$row['A'];
	$remAminus=$row['Aminus'];
	$remBplus=$row['Bplus'];
	$remB=$row['B'];
	$remBminus=$row['Bminus'];
	$remCplus=$row['Cplus'];
	$remC=$row['C'];
	$remCminus=$row['Cminus'];
	$remDplus=$row['Dplus'];
	$remD=$row['D'];
	$remDminus=$row['Dminus'];
	$remE=$row['E'];
}
	
$selectGrade = mysqli_query($link,"select * from tbl_maths_grade where class='form 3'");	
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
	
$query = mysqli_query($link,"select * from tbl_students where class='form 3'");
while($row=mysqli_fetch_array($query)){
$adm2=$row['adm'];		
$result = mysqli_query($link,"SELECT * FROM tbl_mathsf3t2 where adm='$adm2'");
while($row = mysqli_fetch_array($result))
{ 
$id=$row['id'];
$adm=$row['adm'];
$name=$row['name'];
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$total=$ex1+$ex2+$ex3;
$average=($total/3);
//grade
if($ex1>=$gradeA){$g1='A';}elseif($ex1>=$gradeAminus){$g1='A-';}elseif($ex1>=$gradeBplus){$g1='B+';}elseif($ex1>=$gradeB){$g1='B';}elseif($ex1>=$gradeBminus){$g1='B-';}elseif($ex1>=$gradeCplus){$g1='C+';}elseif($ex1>=$gradeC){$g1='C';}elseif($ex1>=$gradeCminus){$g1='C-';}elseif($ex1>=$gradeDplus){$g1='D+';}elseif($ex1>=$gradeD){$g1='D';}elseif($ex1>=$gradeDminus){$g1='D-';}else{$g1='E';}

if($ex2>=$gradeA){$g2='A';}elseif($ex2>=$gradeAminus){$g2='A-';}elseif($ex2>=$gradeBplus){$g2='B+';}elseif($ex2>=$gradeB){$g2='B';}elseif($ex2>=$gradeBminus){$g2='B-';}elseif($ex2>=$gradeCplus){$g2='C+';}elseif($ex2>=$gradeC){$g2='C';}elseif($ex2>=$gradeCminus){$g2='C-';}elseif($ex2>=$gradeDplus){$g2='D+';}elseif($ex2>=$gradeD){$g2='D';}elseif($ex2>=$gradeDminus){$g2='D-';}else{$g2='E';}

if($ex3>=$gradeA){$g3='A';}elseif($ex3>=$gradeAminus){$g3='A-';}elseif($ex3>=$gradeBplus){$g3='B+';}elseif($ex3>=$gradeB){$g3='B';}elseif($ex3>=$gradeBminus){$g3='B-';}elseif($ex3>=$gradeCplus){$g3='C+';}elseif($ex3>=$gradeC){$g3='C';}elseif($ex3>=$gradeCminus){$g3='C-';}elseif($ex3>=$gradeDplus){$g3='D+';}elseif($ex3>=$gradeD){$g3='D';}elseif($ex3>=$gradeDminus){$g3='D-';}else{$g3='E';}

if($average>=$gradeA){$avg='A';}elseif($average>=$gradeAminus){$avg='A-';}elseif($average>=$gradeBplus){$avg='B+';}elseif($average>=$gradeB){$avg='B';}elseif($average>=$gradeBminus){$avg='B-';}elseif($average>=$gradeCplus){$avg='C+';}elseif($average>=$gradeC){$avg='C';}elseif($average>=$gradeCminus){$avg='C-';}elseif($average>=$gradeDplus){$avg='D+';}elseif($average>=$gradeD){$avg='D';}elseif($average>=$gradeDminus){$avg='D-';}else{$avg='E';}

//points
if($ex1>=$gradeA){$p1=12;}elseif($ex1>=$gradeAminus){$p1=11;}elseif($ex1>=$gradeBplus){$p1=10;}elseif($ex1>=$gradeB){$p1=9;}elseif($ex1>=$gradeBminus){$p1=8;}elseif($ex1>=$gradeCplus){$p1=7;}elseif($ex1>=$gradeC){$p1=6;}elseif($ex1>=$gradeCminus){$p1=5;}elseif($ex1>=$gradeDplus){$p1=4;}elseif($ex1>=$gradeD){$p1=3;}elseif($ex1>=$gradeDminus){$p1=2;}else{$p1=1;}

if($ex2>=$gradeA){$p2=12;}elseif($ex2>=$gradeAminus){$p2=11;}elseif($ex2>=$gradeBplus){$p2=10;}elseif($ex2>=$gradeB){$p2=9;}elseif($ex2>=$gradeBminus){$p2=8;}elseif($ex2>=$gradeCplus){$p2=7;}elseif($ex2>=$gradeC){$p2=6;}elseif($ex2>=$gradeCminus){$p2=5;}elseif($ex2>=$gradeDplus){$p2=4;}elseif($ex2>=$gradeD){$p2=3;}elseif($ex2>=$gradeDminus){$p2=2;}else{$p2=1;}

if($ex3>=$gradeA){$p3=12;}elseif($ex3>=$gradeAminus){$p3=11;}elseif($ex3>=$gradeBplus){$p3=10;}elseif($ex3>=$gradeB){$p3=9;}elseif($ex3>=$gradeBminus){$p3=8;}elseif($ex3>=$gradeCplus){$p3=7;}elseif($ex3>=$gradeC){$p3=6;}elseif($ex3>=$gradeCminus){$p3=5;}elseif($ex3>=$gradeDplus){$p3=4;}elseif($ex3>=$gradeD){$p3=3;}elseif($ex3>=$gradeDminus){$p3=2;}else{$p3=1;}

if($average>=$gradeA){$p4=12;}elseif($average>=$gradeAminus){$p4=11;}elseif($average>=$gradeBplus){$p4=10;}elseif($average>=$gradeB){$p4=9;}elseif($average>=$gradeBminus){$p4=8;}elseif($average>=$gradeCplus){$p4=7;}elseif($average>=$gradeCminus){$p4=6;}elseif($average>=$gradeCminus){$p4=5;}elseif($average>=$gradeDplus){$p4=4;}elseif($average>=$gradeD){$p4=3;}elseif($average>=$gradeDminus){$p4=2;}else{$p4=1;}

//remarks
if($ex1>=$gradeA){$remarks1=$remA;}elseif($ex1>=$gradeAminus){$remarks1=$remAminus;}elseif($ex1>=$gradeBplus){$remarks1=$remBplus;}elseif($ex1>=$gradeB){$remarks1=$remB;}elseif($ex1>=$gradeBminus){$remarks1=$remBminus;}elseif($ex1>=$gradeCplus){$remarks1=$remCplus;}elseif($ex1>=$gradeC){$remarks1=$remC;}elseif($ex1>=$gradeCminus){$remarks1=$remCminus;}elseif($ex1>=$gradeDplus){$remarks1=$remDplus;}elseif($ex1>=$gradeD){$remarks1=$remD;}elseif($ex1>=$gradeDminus){$remarks1=$remDminus;}else{$remarks1=$remE;}

if($ex2>=$gradeA){$remarks2=$remA;}elseif($ex2>=$gradeAminus){$remarks2=$remAminus;}elseif($ex2>=$gradeBplus){$remarks2=$remBplus;}elseif($ex2>=$gradeB){$remarks2=$remB;}elseif($ex2>=$gradeBminus){$remarks2=$remBminus;}elseif($ex2>=$gradeCplus){$remarks2=$remCplus;}elseif($ex2>=$gradeC){$remarks2=$remC;}elseif($ex2>=$gradeCminus){$remarks2=$remCminus;}elseif($ex2>=$gradeDplus){$remarks2=$remDplus;}elseif($ex2>=$gradeD){$remarks2=$remD;}elseif($ex2>=$gradeDminus){$remarks2=$remDminus;}else{$remarks2=$remE;}

if($ex3>=$gradeA){$remarks3=$remA;}elseif($ex3>=$gradeAminus){$remarks3=$remAminus;}elseif($ex3>=$gradeBplus){$remarks3=$remBplus;}elseif($ex3>=$gradeB){$remarks3=$remB;}elseif($ex3>=$gradeBminus){$remarks3=$remBminus;}elseif($ex3>=$gradeCplus){$remarks3=$remCplus;}elseif($ex3>=$gradeC){$remarks3=$remC;}elseif($ex3>=$gradeCminus){$remarks3=$remCminus;}elseif($ex3>=$gradeDplus){$remarks3=$remDplus;}elseif($ex3>=$gradeD){$remarks3=$remD;}elseif($ex3>=$gradeDminus){$remarks3=$remDminus;}else{$remarks3=$remE;}

if($average>=$gradeA){$remarks4=$remA;}elseif($average>=$gradeAminus){$remarks4=$remAminus;}elseif($average>=$gradeBplus){$remarks4=$remBplus;}elseif($average>=$gradeB){$remarks4=$remB;}elseif($average>=$gradeBminus){$remarks4=$remBminus;}elseif($average>=$gradeCplus){$remarks4=$remCplus;}elseif($average>=$gradeC){$remarks4=$remC;}elseif($average>=$gradeCminus){$remarks4=$remCminus;}elseif($average>=$gradeDplus){$remarks4=$remDplus;}elseif($average>=$gradeD){$remarks4=$remD;}elseif($average>=$gradeDminus){$remarks4=$remDminus;}else{$remarks4=$remE;}

?>
                                    <tr class="odd gradeX">
									    <input name="id[]" type="hidden" value="<?php echo  $row['id'] ?>" />
                                        <td><?php echo $adm;?></td>
                                        <td><?php echo $name;?></td>
                                        <td class="center"><?php echo $ex1;?> <?php echo $g1;?> <?php echo $p1;?></td>
										<input name="ex1[]" type="hidden" value="<?php echo  $ex1; ?>"/>
										<input name="g1[]" type="hidden" value="<?php echo  $g1; ?>"/>
										<input name="p1[]" type="hidden" value="<?php echo  $p1; ?>"/>
                                        <td class="center"><?php echo $ex2;?> <?php echo $g2;?> <?php echo $p2;?></td>
										<input name="ex2[]" type="hidden" value="<?php echo  $ex2; ?>"/>
										<input name="g2[]" type="hidden" value="<?php echo  $g2; ?>"/>
										<input name="p2[]" type="hidden" value="<?php echo  $p2; ?>"/>
                                        <td class="center"><?php echo $ex3;?> <?php echo $g3;?> <?php echo $p3;?></td>
										<input name="ex3[]" type="hidden" value="<?php echo  $ex3; ?>"/>
										<input name="g3[]" type="hidden" value="<?php echo  $g3; ?>"/>
										<input name="p3[]" type="hidden" value="<?php echo  $p3; ?>"/>
						<td class="center"><?php echo number_format($average,0);?> <?php echo $avg;?> <?php echo $p4;?></td>
						                <input name="ex4[]" type="hidden" value="<?php echo number_format($average,0); ?>" />
										<input name="g4[]" type="hidden" value="<?php echo  $avg; ?>"/>
										<input name="p4[]" type="hidden" value="<?php echo  $p4; ?>"/>
										<input name="remarks1[]" type="hidden" value="<?php echo  $remarks1; ?>"/>
										<input name="remarks2[]" type="hidden" value="<?php echo  $remarks2; ?>"/>
										<input name="remarks3[]" type="hidden" value="<?php echo  $remarks3;?>"/>
						                <input name="remarks4[]" type="hidden" value="<?php echo  $remarks4; ?>"/>
                                    </tr>
                                    
<?php }}?>
                                </tbody>
								
                            </table>
							<button name="maths" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Update">Submit</button>
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