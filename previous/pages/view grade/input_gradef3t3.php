<?php
include('connection.php');
include"header_scripts.php";
?>
<?php
if(isset($_POST['english'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_englishf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['kiswahili'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_kiswahilif3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['maths'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_mathsf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['biology'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_biologyf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['chemistry'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_chemistryf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['physics'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_physicsf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['cre'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_cref3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['geography'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_geographyf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['history'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_historyf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['business'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_businessf3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>
<?php
if(isset($_POST['agriculture'])){
$id=$_POST['id'];
$ex1=$_POST['ex1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$ex2=$_POST['ex2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$ex3=$_POST['ex3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$ex4=$_POST['ex4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$remarks1=$_POST['remarks1'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_agriculturef3t3 SET ex1='$ex1[$i]',g1='$g1[$i]', p1='$p1[$i]', ex2='$ex2[$i]',g2='$g2[$i]',p2='$p2[$i]',ex3='$ex3[$i]',g3='$g3[$i]',p3='$p3[$i]',ex4='$ex4[$i]',g4='$g4[$i]',p4='$p4[$i]',remarks1='$remarks1[$i]',remarks2='$remarks2[$i]',remarks3='$remarks3[$i]',remarks4='$remarks4[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Grade have been added successfully");
//window.confirm("sometext");
//window.location="grade.php";
window.location="../home.php";
</script>
<?php
}
?>