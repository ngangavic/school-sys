<?php
$yearNow=date('Y');	
$selectSubjAvg1=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='english' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg1)){
	$engAVG1=$row['ex1'];
	$engAVG2=$row['ex2'];
	$engAVG3=$row['ex3'];
	$engAVG4=$row['ex4'];
}
$selectSubjAvg2=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='kiswahili' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg2)){
	$kisAVG1=$row['ex1'];
	$kisAVG2=$row['ex2'];
	$kisAVG3=$row['ex3'];
	$kisAVG4=$row['ex4'];
}
$selectSubjAvg3=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='maths' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg3)){
	$matAVG1=$row['ex1'];
	$matAVG2=$row['ex2'];
	$matAVG3=$row['ex3'];
	$matAVG4=$row['ex4'];
}
$selectSubjAvg4=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='biology' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg4)){
	$bioAVG1=$row['ex1'];
	$bioAVG2=$row['ex2'];
	$bioAVG3=$row['ex3'];
	$bioAVG4=$row['ex4'];
}
$selectSubjAvg5=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='chemistry' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg5)){
	$chemAVG1=$row['ex1'];
	$chemAVG2=$row['ex2'];
	$chemAVG3=$row['ex3'];
	$chemAVG4=$row['ex4'];
}
$selectSubjAvg6=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='physics' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg6)){
	$phyAVG1=$row['ex1'];
	$phyAVG2=$row['ex2'];
	$phyAVG3=$row['ex3'];
	$phyAVG4=$row['ex4'];
}
$selectSubjAvg7=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='geography' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg7)){
	$geoAVG1=$row['ex1'];
	$geoAVG2=$row['ex2'];
	$geoAVG3=$row['ex3'];
	$geoAVG4=$row['ex4'];
}
$selectSubjAvg8=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='history' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg8)){
	$hisAVG1=$row['ex1'];
	$hisAVG2=$row['ex2'];
	$hisAVG3=$row['ex3'];
	$hisAVG4=$row['ex4'];
}
$selectSubjAvg9=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='cre' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg9)){
	$creAVG1=$row['ex1'];
	$creAVG2=$row['ex2'];
	$creAVG3=$row['ex3'];
	$creAVG4=$row['ex4'];
}
$selectSubjAvg10=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='agriculture' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg10)){
	$agriAVG1=$row['ex1'];
	$agriAVG2=$row['ex2'];
	$agriAVG3=$row['ex3'];
	$agriAVG4=$row['ex4'];
}
$selectSubjAvg11=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t3 WHERE year='$yearNow' AND subject='business' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectSubjAvg11)){
	$busAVG1=$row['ex1'];
	$busAVG2=$row['ex2'];
	$busAVG3=$row['ex3'];
	$busAVG4=$row['ex4'];
}
	
$selectClassAvg=mysqli_query($link,"SELECT * FROM tbl_classavgf1t3 WHERE year='$yearNow' ")or die (mysqli_error());
while($row=mysqli_fetch_array($selectClassAvg)){
	$classAVG1=$row['ex1'];
	$classAVG2=$row['ex2'];
	$classAVG3=$row['ex3'];
	$classAVG4=$row['ex4'];
}	

?>