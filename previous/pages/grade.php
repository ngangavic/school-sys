<?php
include('connection.php');
/*$result = mysqli_query($link,"SELECT * FROM tbl_agriculturef1t1");
while($row = mysqli_fetch_array($result))
{ 
$id=$row['id'];*/

$result = mysqli_query($link,"SELECT * FROM tbl_agriculturef1t1");
while($row = mysqli_fetch_array($result)){

$id=$row['id'];
$adm=$row['adm'];
$name=$row['name'];
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
//$A=85;$B=75;
//$N = count($result);
//$N = mysqli_num_rows($result);
echo $N;}
echo $ex1,$ex2,$ex3,'</br>';
echo "my name",'</br>';

if($ex1>=85){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='A'")or die(mysqli_error());
}elseif($ex1>=80){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='A-'")or die(mysqli_error());
}elseif($ex1>=75){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='B+'")or die(mysqli_error());
}elseif($ex1>=70){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='B'")or die(mysqli_error());
}elseif($ex1>=65){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='B-'")or die(mysqli_error());
}elseif($ex1>=60){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='C+'")or die(mysqli_error());
}elseif($ex1>=55){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='C'")or die(mysqli_error());
}elseif($ex1>=50){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='C-'")or die(mysqli_error());
}elseif($ex1>=45){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='D+'")or die(mysqli_error());
}elseif($ex1>=40){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='D'")or die(mysqli_error());
}elseif($ex1>=35){
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='D-'")or die(mysqli_error());
}else{
	$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='E'")or die(mysqli_error());
}


//$result = mysqli_query($link,"UPDATE tbl_agriculturef1t1 SET g1='$grade'")or die(mysqli_error());
?>