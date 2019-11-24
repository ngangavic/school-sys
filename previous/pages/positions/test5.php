<?php
include"connection.php";
$query = mysqli_query($link,"select count(adm) from tbl_meanf1t1 where class='form 1' ");	 
$row=mysqli_fetch_array($query);
 
$total=$row['count(adm)'];
//echo $total,'</br>';
$N=$total;

$query = mysqli_query($link,"select * from tbl_meanf1t1 where class='form 1' order by mn1 desc");	
for($i=1;$i<=$N;$i++){ 
while($row=mysqli_fetch_array($query))
{
	$id=$row['id'];
	$adm= $row['adm'];
	$name= $row['name'];
    $class= $row['class'];	
	echo $adm,'</br>';
	?>
	<form action="do.php" method="POST">
	    <input type="hidden" name="id[]" value="<?php echo $id;?>">
	    <input type="text" name="adm[]" value="<?php echo $adm;?>">
		<input type="text" name="name[]" value="<?php echo $name;?>">
		<input type="text" name="class[]" value="<?php echo $class;?>">
		
<?php
	}
	?>
	<input type="text" name="pos[]" value="<?php echo $i;?>">
	<?php
}
	?>
	<input type="submit" name="submit" value="submit">
	<form/>
<?php	//echo $i,'</br>';
		//$result = mysqli_query($link,"UPDATE tbl_positionsf1t1 SET p1='$i' ")or die(mysqli_error());

//}


?>