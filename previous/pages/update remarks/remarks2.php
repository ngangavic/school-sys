<?php
include('connection.php');
include"header_scripts.php";

$id=$_POST['id'];
$remarksA=$_POST['remarksA'];
$remarksAminus=$_POST['remarksA-'];
$remarksBplus=$_POST['remarksB+'];
$remarksB=$_POST['remarksB'];
$remarksBminus=$_POST['remarksB-'];
$remarksCplus=$_POST['remarksC+'];
$remarksC=$_POST['remarksC'];
$remarksCminus=$_POST['remarksC-'];
$remarksDplus=$_POST['remarksD+'];
$remarksD=$_POST['remarksD'];
$remarksDminus=$_POST['remarksD-'];
$remarksE=$_POST['remarksE'];

$update=mysqli_query($link,"UPDATE tbl_remarks SET A='$remarksA',Aminus='$remarksAminus',Bplus='$remarksBplus',B='$remarksB',Bminus='$remarksBminus',Cplus='$remarksCplus',C='$remarksC',Cminus='$remarksCminus',Dplus='$remarksDplus',D='$remarksD',Dminus='$remarksDminus',E='$remarksE' WHERE class='form 2' ")or die(mysqli_error());

?>
<script>
window.location="index.php?id=2";
</script>