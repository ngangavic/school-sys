<?php
include"connection.php";

$view=mysqli_query($link,"SELECT * FROM tbl_remarks where class='form 3' ");
while($row=mysqli_fetch_array($view))
{
	$remA=$row['A'];
	$remAminus=$row['Aminus'];
	$remBplus=$row['Bplus'];
	$remB=$row['B'];
	$remBminus=$row['Bminus'];
	$remCplus=$row['Cplus'];
	$remC=$row['C'];
	$remCminus=$row['Cminus'];
	$remDplus=$row['Dplus'];
	$remD=$row['D'];
	$remDminus=$row['Dminus'];
	$remE=$row['E'];
}
?>