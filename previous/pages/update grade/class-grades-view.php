<?php
include"connection.php";

$view=mysqli_query($link,"SELECT * FROM tbl_average_grade where class='form 1' ");
while($row=mysqli_fetch_array($view))
{
	$form1A=$row['A'];
	$form1Aminus=$row['Aminus'];
	$form1Bplus=$row['Bplus'];
	$form1B=$row['B'];
	$form1Bminus=$row['Bminus'];
	$form1Cplus=$row['Cplus'];
	$form1C=$row['C'];
	$form1Cminus=$row['Cminus'];
	$form1Dplus=$row['Dplus'];
	$form1D=$row['D'];
	$form1Dminus=$row['Dminus'];
	$form1E=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_average_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$form2A=$row['A'];
	$form2Aminus=$row['Aminus'];
	$form2Bplus=$row['Bplus'];
	$form2B=$row['B'];
	$form2Bminus=$row['Bminus'];
	$form2Cplus=$row['Cplus'];
	$form2C=$row['C'];
	$form2Cminus=$row['Cminus'];
	$form2Dplus=$row['Dplus'];
	$form2D=$row['D'];
	$form2Dminus=$row['Dminus'];
	$form2E=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_average_grade where class='form 3' ");
while($row=mysqli_fetch_array($view))
{
	$form3A=$row['A'];
	$form3Aminus=$row['Aminus'];
	$form3Bplus=$row['Bplus'];
	$form3B=$row['B'];
	$form3Bminus=$row['Bminus'];
	$form3Cplus=$row['Cplus'];
	$form3C=$row['C'];
	$form3Cminus=$row['Cminus'];
	$form3Dplus=$row['Dplus'];
	$form3D=$row['D'];
	$form3Dminus=$row['Dminus'];
	$form3E=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_average_grade where class='form 4' ");
while($row=mysqli_fetch_array($view))
{
	$form4A=$row['A'];
	$form4Aminus=$row['Aminus'];
	$form4Bplus=$row['Bplus'];
	$form4B=$row['B'];
	$form4Bminus=$row['Bminus'];
	$form4Cplus=$row['Cplus'];
	$form4C=$row['C'];
	$form4Cminus=$row['Cminus'];
	$form4Dplus=$row['Dplus'];
	$form4D=$row['D'];
	$form4Dminus=$row['Dminus'];
	$form4E=$row['E'];
}
?>