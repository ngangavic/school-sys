<?php
include('connection.php');
include"header_scripts.php";

$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$sci=$_POST['sci'];
$hum=$_POST['hum'];
$app=$_POST['app'];



$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_subjects SET adm='$adm[$i]', name='$name[$i]', sci='$sci[$i]',hum='$hum[$i]',app='$app[$i]'  where id='$id[$i]'")or die(mysqli_error());
}

 echo $N;
	echo '<div class="alert alert-success">
              <strong>Data added successfully</strong> 
           </div>';
		   header("location: subjects choices.php?id=1");

















?>