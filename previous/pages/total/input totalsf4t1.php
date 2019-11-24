<?php
include('connection.php');
include"header_scripts.php";

$id=$_POST['id'];
$adm=$_POST['stdadm'];
$total1=$_POST['total1'];
$mean1=$_POST['mean1'];
$g1=$_POST['g1'];
$p1=$_POST['p1'];
$total2=$_POST['total2'];
$mean2=$_POST['mean2'];
$g2=$_POST['g2'];
$p2=$_POST['p2'];
$total3=$_POST['total3'];
$mean3=$_POST['mean3'];
$g3=$_POST['g3'];
$p3=$_POST['p3'];
$total4=$_POST['total4'];
$g4=$_POST['g4'];
$p4=$_POST['p4'];
$average=$_POST['average'];
echo implode($adm,'</br>');
$N = count($adm);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_meanf4t1 SET t1='$total1[$i]', mn1='$mean1[$i]', gr1='$g1[$i]', p1='$p1[$i]', t2='$total2[$i]', mn2='$mean2[$i]', gr2='$g2[$i]', p2='$p3[$i]', t3='$total3[$i]', mn3='$mean3[$i]', gr3='$g3[$i]', p3='$p3[$i]', t4='$total4[$i]', mn4='$average[$i]', gr4='$g4[$i]', p4='$p4[$i]'  where adm='$adm[$i]'")or die(mysqli_error());
	
	$result1 = mysqli_query($link,"UPDATE tbl_lastmeanf4t1 SET tmn='$average[$i]',tgr='$g4[$i]',tt='$total4[$i]',points='$p4[$i]' where adm='$adm[$i]'")or die(mysqli_error());
	
}
//header("location: grade.php");
 //echo $N;
//	echo '<div class="alert alert-success">
 //             <strong>Data added successfully</strong> 
 //          </div>';
?>
<script>
window.alert("Data has been added successfully");
//window.confirm("sometext");
window.location="home.php";
</script>