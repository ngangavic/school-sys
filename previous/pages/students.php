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
                    <h1 class="page-header">Marks Entry</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-lg-12">
			        <?php if($get_id==1){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            English FORM 1 TERM 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="update.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Exam 1</th>
                                        <th>Exam 2</th>
										<th>Exam 3</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
$query = mysqli_query($link,"select * from tbl_students where class='form 1'");
while($row=mysqli_fetch_array($query)){
$adm2=$row['adm'];

//$class='form 1'
$result = mysqli_query($link,"SELECT * FROM tbl_englishf1t1 where adm='$adm2' ");
while($row = mysqli_fetch_array($result))
{ 
$id=$row['id'];
?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['adm'] ?>
										<input name="id[]" type="hidden" value="<?php echo  $row['id'] ?>" />
										<input name="adm[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['adm'] ?>" />
										</td>
                                        <td><?php echo $row['name'] ?>
										<input name="name[]" type="hidden" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['name'] ?>" />
										</td>
                                        <td class="center">
										<input  name="ex1[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['ex1'] ?>" />
										</td>
                                        <td class="center">
										<input name="ex2[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['ex2'] ?>" />
										</td>
										<td class="center">
										<input name="ex3[]" type="text" style="font-family:cursive; font-weight:bold;" value="<?php echo $row['ex3'] ?>" />
										</td>
                                    </tr>
<?php } }?>

                                </tbody>

                            </table>
							<button name="english" class="btn btn-success pull-right" type="submit" value="Update" >Update</button>
							
	<?php //include"modal.php";?>						
							
							
                            <!-- /.table-responsive -->
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
					<?php }elseif($get_id==2){ include"kiswahili form1 term 1.php";?>
					<?php }elseif($get_id==3){ include"maths form1 term1.php";?>
					<?php }elseif($get_id==4){ include"biology form1 term1.php";?>
					<?php }elseif($get_id==5){ include"physics form1 term1.php";?>
					<?php }elseif($get_id==6){ include"chemistry form1 term1.php";?>
					<?php }elseif($get_id==7){ include"geography form1 term1.php";?>
					<?php }elseif($get_id==8){ include"history form1 term1.php";?>
					<?php }elseif($get_id==9){ include"cre form1 term1.php";?>
					<?php }elseif($get_id==10){ include"agriculture form1 term1.php";?>
					<?php }elseif($get_id==11){ include"business form1 term1.php";?>
					
					<?php }elseif($get_id==12){ include"english form2 term 1.php";?>
					<?php }elseif($get_id==13){ include"kiswahili form2 term 1.php";?>
					<?php }elseif($get_id==14){ include"maths form2 term1.php";?>
					<?php }elseif($get_id==15){ include"biology form2 term1.php";?>
					<?php }elseif($get_id==16){ include"physics form2 term1.php";?>
					<?php }elseif($get_id==17){ include"chemistry form2 term1.php";?>
					<?php }elseif($get_id==18){ include"geography form2 term1.php";?>
					<?php }elseif($get_id==19){ include"history form2 term1.php";?>
					<?php }elseif($get_id==20){ include"cre form2 term1.php";?>
					<?php }elseif($get_id==21){ include"agriculture form2 term1.php";?>
					<?php }elseif($get_id==22){ include"business form2 term1.php";?>
					
					<?php }elseif($get_id==23){ include"english form3 term 1.php";?>
					<?php }elseif($get_id==24){ include"kiswahili form3 term 1.php";?>
					<?php }elseif($get_id==25){ include"maths form3 term1.php";?>
					<?php }elseif($get_id==26){ include"biology form3 term1.php";?>
					<?php }elseif($get_id==27){ include"physics form3 term1.php";?>
					<?php }elseif($get_id==28){ include"chemistry form3 term1.php";?>
					<?php }elseif($get_id==29){ include"geography form3 term1.php";?>
					<?php }elseif($get_id==30){ include"history form3 term1.php";?>
					<?php }elseif($get_id==31){ include"cre form3 term1.php";?>
					<?php }elseif($get_id==32){ include"agriculture form3 term1.php";?>
					<?php }elseif($get_id==33){ include"business form3 term1.php";?>
					
					<?php }elseif($get_id==34){ include"english form4 term 1.php";?>
					<?php }elseif($get_id==35){ include"kiswahili form4 term 1.php";?>
					<?php }elseif($get_id==36){ include"maths form4 term1.php";?>
					<?php }elseif($get_id==37){ include"biology form4 term1.php";?>
					<?php }elseif($get_id==38){ include"physics form4 term1.php";?>
					<?php }elseif($get_id==39){ include"chemistry form4 term1.php";?>
					<?php }elseif($get_id==40){ include"geography form4 term1.php";?>
					<?php }elseif($get_id==41){ include"history form4 term1.php";?>
					<?php }elseif($get_id==42){ include"cre form4 term1.php";?>
					<?php }elseif($get_id==43){ include"agriculture form4 term1.php";?>
					<?php }elseif($get_id==44){ include"business form4 term1.php";?>
					
					<?php }elseif($get_id==45){ include"english form1 term 2.php";?>
					<?php }elseif($get_id==46){ include"kiswahili form1 term 2.php";?>
					<?php }elseif($get_id==47){ include"maths form1 term2.php";?>
					<?php }elseif($get_id==48){ include"biology form1 term2.php";?>
					<?php }elseif($get_id==49){ include"physics form1 term2.php";?>
					<?php }elseif($get_id==50){ include"chemistry form1 term2.php";?>
					<?php }elseif($get_id==51){ include"geography form1 term2.php";?>
					<?php }elseif($get_id==52){ include"history form1 term2.php";?>
					<?php }elseif($get_id==53){ include"cre form1 term2.php";?>
					<?php }elseif($get_id==54){ include"agriculture form1 term2.php";?>
					<?php }elseif($get_id==55){ include"business form1 term2.php";?>
					
					<?php }elseif($get_id==56){ include"english form2 term 2.php";?>
					<?php }elseif($get_id==57){ include"kiswahili form2 term 2.php";?>
					<?php }elseif($get_id==58){ include"maths form2 term2.php";?>
					<?php }elseif($get_id==59){ include"biology form2 term2.php";?>
					<?php }elseif($get_id==60){ include"physics form2 term2.php";?>
					<?php }elseif($get_id==61){ include"chemistry form2 term2.php";?>
					<?php }elseif($get_id==62){ include"geography form2 term2.php";?>
					<?php }elseif($get_id==63){ include"history form2 term2.php";?>
					<?php }elseif($get_id==64){ include"cre form2 term2.php";?>
					<?php }elseif($get_id==65){ include"agriculture form2 term2.php";?>
					<?php }elseif($get_id==66){ include"business form2 term2.php";?>
					
					<?php }elseif($get_id==67){ include"english form3 term 2.php";?>
					<?php }elseif($get_id==68){ include"kiswahili form3 term 2.php";?>
					<?php }elseif($get_id==69){ include"maths form3 term2.php";?>
					<?php }elseif($get_id==70){ include"biology form3 term2.php";?>
					<?php }elseif($get_id==71){ include"physics form3 term2.php";?>
					<?php }elseif($get_id==72){ include"chemistry form3 term2.php";?>
					<?php }elseif($get_id==73){ include"geography form3 term2.php";?>
					<?php }elseif($get_id==74){ include"history form3 term2.php";?>
					<?php }elseif($get_id==75){ include"cre form3 term2.php";?>
					<?php }elseif($get_id==76){ include"agriculture form3 term2.php";?>
					<?php }elseif($get_id==77){ include"business form3 term2.php";?>
					
					<?php }elseif($get_id==78){ include"english form4 term 2.php";?>
					<?php }elseif($get_id==79){ include"kiswahili form4 term 2.php";?>
					<?php }elseif($get_id==80){ include"maths form4 term2.php";?>
					<?php }elseif($get_id==81){ include"biology form4 term2.php";?>
					<?php }elseif($get_id==82){ include"physics form4 term2.php";?>
					<?php }elseif($get_id==83){ include"chemistry form4 term2.php";?>
					<?php }elseif($get_id==84){ include"geography form4 term2.php";?>
					<?php }elseif($get_id==85){ include"history form4 term2.php";?>
					<?php }elseif($get_id==86){ include"cre form4 term2.php";?>
					<?php }elseif($get_id==87){ include"agriculture form4 term2.php";?>
					<?php }elseif($get_id==88){ include"business form4 term2.php";?>
					
					<?php }elseif($get_id==89){ include"english form1 term 3.php";?>
					<?php }elseif($get_id==90){ include"kiswahili form1 term 3.php";?>
					<?php }elseif($get_id==91){ include"maths form1 term3.php";?>
					<?php }elseif($get_id==92){ include"biology form1 term3.php";?>
					<?php }elseif($get_id==93){ include"physics form1 term3.php";?>
					<?php }elseif($get_id==94){ include"chemistry form1 term3.php";?>
					<?php }elseif($get_id==95){ include"geography form1 term3.php";?>
					<?php }elseif($get_id==96){ include"history form1 term3.php";?>
					<?php }elseif($get_id==97){ include"cre form1 term3.php";?>
					<?php }elseif($get_id==98){ include"agriculture form1 term3.php";?>
					<?php }elseif($get_id==99){ include"business form1 term3.php";?>
					
					<?php }elseif($get_id==100){ include"english form2 term 3.php";?>
					<?php }elseif($get_id==101){ include"kiswahili form2 term 3.php";?>
					<?php }elseif($get_id==102){ include"maths form2 term3.php";?>
					<?php }elseif($get_id==103){ include"biology form2 term3.php";?>
					<?php }elseif($get_id==104){ include"physics form2 term3.php";?>
					<?php }elseif($get_id==105){ include"chemistry form2 term3.php";?>
					<?php }elseif($get_id==106){ include"geography form2 term3.php";?>
					<?php }elseif($get_id==107){ include"history form2 term3.php";?>
					<?php }elseif($get_id==108){ include"cre form2 term3.php";?>
					<?php }elseif($get_id==109){ include"agriculture form2 term3.php";?>
					<?php }elseif($get_id==110){ include"business form2 term3.php";?>
					
					<?php }elseif($get_id==111){ include"english form3 term 3.php";?>
					<?php }elseif($get_id==112){ include"kiswahili form3 term 3.php";?>
					<?php }elseif($get_id==113){ include"maths form3 term3.php";?>
					<?php }elseif($get_id==114){ include"biology form3 term3.php";?>
					<?php }elseif($get_id==115){ include"physics form3 term3.php";?>
					<?php }elseif($get_id==116){ include"chemistry form3 term3.php";?>
					<?php }elseif($get_id==117){ include"geography form3 term3.php";?>
					<?php }elseif($get_id==118){ include"history form3 term3.php";?>
					<?php }elseif($get_id==119){ include"cre form3 term3.php";?>
					<?php }elseif($get_id==120){ include"agriculture form3 term3.php";?>
					<?php }elseif($get_id==121){ include"business form3 term3.php";?>
					
					<?php }elseif($get_id==122){ include"english form4 term 3.php";?>
					<?php }elseif($get_id==123){ include"kiswahili form4 term 3.php";?>
					<?php }elseif($get_id==124){ include"maths form4 term3.php";?>
					<?php }elseif($get_id==125){ include"biology form4 term3.php";?>
					<?php }elseif($get_id==126){ include"physics form4 term3.php";?>
					<?php }elseif($get_id==127){ include"chemistry form4 term3.php";?>
					<?php }elseif($get_id==128){ include"geography form4 term3.php";?>
					<?php }elseif($get_id==129){ include"history form4 term3.php";?>
					<?php }elseif($get_id==130){ include"cre form4 term3.php";?>
					<?php }elseif($get_id==131){ include"agriculture form4 term3.php";?>
					<?php }elseif($get_id==132){ include"business form4 term3.php";?>
					<?php }else{?>
					<div class="alert alert-danger">
              <strong>Please <a href="subjects.php">Click here</a> to select a Subject</strong> 
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