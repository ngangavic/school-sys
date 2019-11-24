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
	$result = mysqli_query($link,"UPDATE tbl_englishf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=56";
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
	$result = mysqli_query($link,"UPDATE tbl_kiswahilif2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=57";
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
	$result = mysqli_query($link,"UPDATE tbl_mathsf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=58";
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
	$result = mysqli_query($link,"UPDATE tbl_biologyf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=59";
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
	$result = mysqli_query($link,"UPDATE tbl_physicsf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=60";
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
	$result = mysqli_query($link,"UPDATE tbl_chemistryf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=61";
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
	$result = mysqli_query($link,"UPDATE tbl_geographyf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=62";
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
	$result = mysqli_query($link,"UPDATE tbl_historyf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=63";
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
	$result = mysqli_query($link,"UPDATE tbl_cref2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=64";
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
	$result = mysqli_query($link,"UPDATE tbl_agriculturef2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=65";
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
	$result = mysqli_query($link,"UPDATE tbl_businessf2t2 SET adm='$adm[$i]', name='$name[$i]', ex1='$ex1[$i]',ex2='$ex2[$i]',ex3='$ex3[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
?>
<script>
window.alert("Marks have been added successfully\n You will be directed to view grade page.");
//window.confirm("sometext");
//window.location="modal.php";

window.location="view%20grade/view%20grade.php?id=66";
</script>
<?php
}
?>