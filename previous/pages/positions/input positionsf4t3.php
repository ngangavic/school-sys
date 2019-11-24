<?php
include"connection.php";
include"header_scripts.php";
if(isset($_POST['ex1'])){
$id=$_POST['id'];
$adm=$_POST['adm'];

$pos=$_POST['pos'];
//$ex3=$_POST['ex3'];
$N = count($id);
for($i=0; $i <= $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_positonsf4t3 SET p1='$pos[$i]' where id='$id[$i]'") or die(mysqli_error());
}?>
<script>
//window.location="index.php?id=1";
//alert("Data is up to date.\n Please ... ");
window.alert("Positions updated successfully");
window.location="positions.php?id=12";
</script>
<?php }	
?>
<div class="alert">
Its done.
</div>
<?php
include"connection.php";

if(isset($_POST['ex2'])){
$id=$_POST['id'];
$adm=$_POST['adm'];

$pos=$_POST['pos'];
//$ex3=$_POST['ex3'];
$N = count($id);
for($i=0; $i <= $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_positonsf4t3 SET p2='$pos[$i]' where id='$id[$i]'") or die(mysqli_error());
}
?>
<script>
//window.location="index.php?id=1";
//alert("Data is up to date.\n Please ... ");
window.alert("Positions updated successfully");
window.location="positions.php?id=12";
</script>
<?php 
}	
?>

<?php
include"connection.php";

if(isset($_POST['ex3'])){
$id=$_POST['id'];
$adm=$_POST['adm'];

$pos=$_POST['pos'];
//$ex3=$_POST['ex3'];
$N = count($id);
for($i=0; $i <= $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_positonsf4t3 SET p3='$pos[$i]' where id='$id[$i]'") or die(mysqli_error());
}
?>
<script>
//window.location="index.php?id=1";
//alert("Data is up to date.\n Please ... ");
window.alert("Positions updated successfully");
window.location="positions.php?id=12";
</script>
<?php 
}	
?>

<?php
include"connection.php";

if(isset($_POST['ex4'])){
$id=$_POST['id'];
$adm=$_POST['adm'];

$pos=$_POST['pos'];
//$ex3=$_POST['ex3'];
$N = count($id);
for($i=0; $i <= $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_positonsf4t3 SET p4='$pos[$i]' where id='$id[$i]'") or die(mysqli_error());
}
?>
<script>
//window.location="index.php?id=1";
//alert("Data is up to date.\n Please ... ");
window.alert("Positions updated successfully");
window.location="positions.php?id=12";
</script>
<?php 
}	
?>