<?php
include('connection.php');
//include"header_scripts.php";

$id=$_POST['id'];
$form1A=$_POST['form1A'];$form1AMINUS=$_POST['form1A-'];$form1BPLUS=$_POST['form1B+'];$form1B=$_POST['form1B'];
$form1BMINUS=$_POST['form1B-'];$form1CPLUS=$_POST['form1C+'];$form1C=$_POST['form1C'];$form1CMINUS=$_POST['form1C-'];
$form1DPLUS=$_POST['form1D+'];$form1D=$_POST['form1D'];$form1DMINUS=$_POST['form1D-'];$form1E=$_POST['form1E'];

$form2A=$_POST['form2A'];$form2AMINUS=$_POST['form2A-'];$form2BPLUS=$_POST['form2B+'];$form2B=$_POST['form2B'];
$form2BMINUS=$_POST['form2B-'];$form2CPLUS=$_POST['form2C+'];$form2C=$_POST['form2C'];$form2CMINUS=$_POST['form2C-'];
$form2DPLUS=$_POST['form2D+'];$form2D=$_POST['form2D'];$form2DMINUS=$_POST['form2D-'];$form2E=$_POST['form2E'];

$form3A=$_POST['form3A'];$form3AMINUS=$_POST['form3A-'];$form3BPLUS=$_POST['form3B+'];$form3B=$_POST['form3B'];
$form3BMINUS=$_POST['form3B-'];$form3CPLUS=$_POST['form3C+'];$form3C=$_POST['form3C'];$form3CMINUS=$_POST['form3C-'];
$form3DPLUS=$_POST['form3D+'];$form3D=$_POST['form3D'];$form3DMINUS=$_POST['form3D-'];$form3E=$_POST['form3E'];

$form4A=$_POST['form4A'];$form4AMINUS=$_POST['form4A-'];$form4BPLUS=$_POST['form4B+'];$form4B=$_POST['form4B'];
$form4BMINUS=$_POST['form4B-'];$form4CPLUS=$_POST['form4C+'];$form4C=$_POST['form4C'];$form4CMINUS=$_POST['form4C-'];
$form4DPLUS=$_POST['form4D+'];$form4D=$_POST['form4D'];$form4DMINUS=$_POST['form4D-'];$form4E=$_POST['form4E'];


$update=mysqli_query($link,"UPDATE tbl_average_grade SET A='$form1A',Aminus='$form1AMINUS',Bplus='$form1BPLUS',B='$form1B',Bminus='$form1BMINUS',Cplus='$form1CPLUS',C='$form1C',Cminus='$form1CMINUS',Dplus='$form1DPLUS',D='$form1D',Dminus='$form1DMINUS',E='$form1E' WHERE class='form 1' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_average_grade SET A='$form2A',Aminus='$form2AMINUS',Bplus='$form2BPLUS',B='$form2B',Bminus='$form2BMINUS',Cplus='$form2CPLUS',C='$form2C',Cminus='$form2CMINUS',Dplus='$form2DPLUS',D='$form2D',Dminus='$form2DMINUS',E='$form2E' WHERE class='form 2' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_average_grade SET A='$form3A',Aminus='$form3AMINUS',Bplus='$form3BPLUS',B='$form3B',Bminus='$form3BMINUS',Cplus='$form3CPLUS',C='$form3C',Cminus='$form3CMINUS',Dplus='$form3DPLUS',D='$form3D',Dminus='$form3DMINUS',E='$form3E' WHERE class='form 3' ")or die(mysqli_error());
$update=mysqli_query($link,"UPDATE tbl_average_grade SET A='$form4A',Aminus='$form4AMINUS',Bplus='$form4BPLUS',B='$form4B',Bminus='$form4BMINUS',Cplus='$form4CPLUS',C='$form4C',Cminus='$form4CMINUS',Dplus='$form4DPLUS',D='$form4D',Dminus='$form4DMINUS',E='$form4E' WHERE class='form 4' ")or die(mysqli_error());
?>
<script>
window.location="class-grades.php";
window.alert("Average Grades updated successfully");
</script>