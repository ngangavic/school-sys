<?php
include"connection.php";

if(isset($_POST['submit'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$class=$_POST['class'];
$pos=$_POST['pos'];
//$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i <= $N; $i++)
{
	//echo $i,'</br>';
	//echo implode($adm),'</br>';
	//echo implode($pos),'</br>';
	$result = mysqli_query($link,"UPDATE tbl_positonsf1t1 SET p1='$pos[$i]' where id='$id[$i]'") or die(mysqli_error());

	
	
}
}	

?>