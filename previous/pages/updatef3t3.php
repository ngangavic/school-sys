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
	$result = mysqli_query($link,"UPDATE tbl_englishf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=111";
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
	$result = mysqli_query($link,"UPDATE tbl_kiswahilif3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=112";
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
	$result = mysqli_query($link,"UPDATE tbl_mathsf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=113";
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
	$result = mysqli_query($link,"UPDATE tbl_biologyf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=114";
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
	$result = mysqli_query($link,"UPDATE tbl_physicsf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=115";
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
	$result = mysqli_query($link,"UPDATE tbl_chemistryf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=116";
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
	$result = mysqli_query($link,"UPDATE tbl_geographyf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=117";
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
	$result = mysqli_query($link,"UPDATE tbl_historyf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=118";
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
	$result = mysqli_query($link,"UPDATE tbl_cref3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=119";
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
	$result = mysqli_query($link,"UPDATE tbl_agriculturef3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=120";
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
	$result = mysqli_query($link,"UPDATE tbl_businessf3t3 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=121";
</script>
<?php
}
?>