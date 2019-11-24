<?php
include"connection.php";

$view=mysqli_query($link,"SELECT * FROM tbl_english_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$engA=$row['A'];
	$engAminus=$row['Aminus'];
	$engBplus=$row['Bplus'];
	$engB=$row['B'];
	$engBminus=$row['Bminus'];
	$engCplus=$row['Cplus'];
	$engC=$row['C'];
	$engCminus=$row['Cminus'];
	$engDplus=$row['Dplus'];
	$engD=$row['D'];
	$engDminus=$row['Dminus'];
	$engE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_kiswahili_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$kisA=$row['A'];
	$kisAminus=$row['Aminus'];
	$kisBplus=$row['Bplus'];
	$kisB=$row['B'];
	$kisBminus=$row['Bminus'];
	$kisCplus=$row['Cplus'];
	$kisC=$row['C'];
	$kisCminus=$row['Cminus'];
	$kisDplus=$row['Dplus'];
	$kisD=$row['D'];
	$kisDminus=$row['Dminus'];
	$kisE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_maths_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$matA=$row['A'];
	$matAminus=$row['Aminus'];
	$matBplus=$row['Bplus'];
	$matB=$row['B'];
	$matBminus=$row['Bminus'];
	$matCplus=$row['Cplus'];
	$matC=$row['C'];
	$matCminus=$row['Cminus'];
	$matDplus=$row['Dplus'];
	$matD=$row['D'];
	$matDminus=$row['Dminus'];
	$matE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_biology_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$bioA=$row['A'];
	$bioAminus=$row['Aminus'];
	$bioBplus=$row['Bplus'];
	$bioB=$row['B'];
	$bioBminus=$row['Bminus'];
	$bioCplus=$row['Cplus'];
	$bioC=$row['C'];
	$bioCminus=$row['Cminus'];
	$bioDplus=$row['Dplus'];
	$bioD=$row['D'];
	$bioDminus=$row['Dminus'];
	$bioE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_chemistry_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$chemA=$row['A'];
	$chemAminus=$row['Aminus'];
	$chemBplus=$row['Bplus'];
	$chemB=$row['B'];
	$chemBminus=$row['Bminus'];
	$chemCplus=$row['Cplus'];
	$chemC=$row['C'];
	$chemCminus=$row['Cminus'];
	$chemDplus=$row['Dplus'];
	$chemD=$row['D'];
	$chemDminus=$row['Dminus'];
	$chemE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_physics_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$phyA=$row['A'];
	$phyAminus=$row['Aminus'];
	$phyBplus=$row['Bplus'];
	$phyB=$row['B'];
	$phyBminus=$row['Bminus'];
	$phyCplus=$row['Cplus'];
	$phyC=$row['C'];
	$phyCminus=$row['Cminus'];
	$phyDplus=$row['Dplus'];
	$phyD=$row['D'];
	$phyDminus=$row['Dminus'];
	$phyE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_geography_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$geoA=$row['A'];
	$geoAminus=$row['Aminus'];
	$geoBplus=$row['Bplus'];
	$geoB=$row['B'];
	$geoBminus=$row['Bminus'];
	$geoCplus=$row['Cplus'];
	$geoC=$row['C'];
	$geoCminus=$row['Cminus'];
	$geoDplus=$row['Dplus'];
	$geoD=$row['D'];
	$geoDminus=$row['Dminus'];
	$geoE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_history_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$hisA=$row['A'];
	$hisAminus=$row['Aminus'];
	$hisBplus=$row['Bplus'];
	$hisB=$row['B'];
	$hisBminus=$row['Bminus'];
	$hisCplus=$row['Cplus'];
	$hisC=$row['C'];
	$hisCminus=$row['Cminus'];
	$hisDplus=$row['Dplus'];
	$hisD=$row['D'];
	$hisDminus=$row['Dminus'];
	$hisE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_cre_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$creA=$row['A'];
	$creAminus=$row['Aminus'];
	$creBplus=$row['Bplus'];
	$creB=$row['B'];
	$creBminus=$row['Bminus'];
	$creCplus=$row['Cplus'];
	$creC=$row['C'];
	$creCminus=$row['Cminus'];
	$creDplus=$row['Dplus'];
	$creD=$row['D'];
	$creDminus=$row['Dminus'];
	$creE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_business_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$busA=$row['A'];
	$busAminus=$row['Aminus'];
	$busBplus=$row['Bplus'];
	$busB=$row['B'];
	$busBminus=$row['Bminus'];
	$busCplus=$row['Cplus'];
	$busC=$row['C'];
	$busCminus=$row['Cminus'];
	$busDplus=$row['Dplus'];
	$busD=$row['D'];
	$busDminus=$row['Dminus'];
	$busE=$row['E'];
}

$view=mysqli_query($link,"SELECT * FROM tbl_agriculture_grade where class='form 2' ");
while($row=mysqli_fetch_array($view))
{
	$agriA=$row['A'];
	$agriAminus=$row['Aminus'];
	$agriBplus=$row['Bplus'];
	$agriB=$row['B'];
	$agriBminus=$row['Bminus'];
	$agriCplus=$row['Cplus'];
	$agriC=$row['C'];
	$agriCminus=$row['Cminus'];
	$agriDplus=$row['Dplus'];
	$agriD=$row['D'];
	$agriDminus=$row['Dminus'];
	$agriE=$row['E'];
}


?>