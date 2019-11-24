<?php
include('connection.php');
include"header_scripts.php";
if(isset($_POST['english'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_englishf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
//header("location: grade.php");
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=34";
</script>
<?php
}

if(isset($_POST['kiswahili'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_kiswahilif4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
//header("location: grade.php");
 ?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=35";
</script>
<?php
}

if(isset($_POST['maths'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_mathsf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=36";
</script>
<?php
}

if(isset($_POST['biology'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_biologyf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=37";
</script>
<?php
}

if(isset($_POST['physics'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_physicsf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=38";
</script>
<?php
}

if(isset($_POST['chemistry'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_chemistryf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=39";
</script>
<?php
}

if(isset($_POST['geography'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_geographyf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=40";
</script>
<?php
}

if(isset($_POST['history'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_historyf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=41";
</script>
<?php
}

if(isset($_POST['cre'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_cref4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=42";
</script>
<?php
}

if(isset($_POST['agriculture'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_agriculturef4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=43";
</script>
<?php
}

if(isset($_POST['business'])){
$id=$_POST['id'];
$adm=$_POST['adm'];
$name=$_POST['name'];
$ex1=$_POST['ex1'];
$ex2=$_POST['ex2'];
$ex3=$_POST['ex3'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_businessf4t1 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=44";
</script>
<?php
}
?>