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
	$result = mysqli_query($link,"UPDATE tbl_englishf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=78";
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
	$result = mysqli_query($link,"UPDATE tbl_kiswahilif4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=79";
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
	$result = mysqli_query($link,"UPDATE tbl_mathsf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=80";
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
	$result = mysqli_query($link,"UPDATE tbl_biologyf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=81";
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
	$result = mysqli_query($link,"UPDATE tbl_physicsf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=82";
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
	$result = mysqli_query($link,"UPDATE tbl_chemistryf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=83";
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
	$result = mysqli_query($link,"UPDATE tbl_geographyf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=84";
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
	$result = mysqli_query($link,"UPDATE tbl_historyf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=85";
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
	$result = mysqli_query($link,"UPDATE tbl_cref4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=86";
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
	$result = mysqli_query($link,"UPDATE tbl_agriculturef4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=87";
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
	$result = mysqli_query($link,"UPDATE tbl_businessf4t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=88";
</script>
<?php
}
?>