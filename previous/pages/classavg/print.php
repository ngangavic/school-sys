<?php 
$select1=mysqli_query($link,"SELECT * FROM tbl_classavgf1t1 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$ex1f1t1=$row['ex1'];
	$ex2f1t1=$row['ex2'];
	$ex3f1t1=$row['ex3'];
	$ex4f1t1=$row['ex4'];
}
$select2=mysqli_query($link,"SELECT * FROM tbl_classavgf1t2 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$ex1f1t2=$row['ex1'];
	$ex2f1t2=$row['ex2'];
	$ex3f1t2=$row['ex3'];
	$ex4f1t2=$row['ex4'];
}
$select3=mysqli_query($link,"SELECT * FROM tbl_classavgf1t3 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$ex1f1t3=$row['ex1'];
	$ex2f1t3=$row['ex2'];
	$ex3f1t3=$row['ex3'];
	$ex4f1t3=$row['ex4'];
}

//form 2
$select1=mysqli_query($link,"SELECT * FROM tbl_classavgf2t1 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$ex1f2t1=$row['ex1'];
	$ex2f2t1=$row['ex2'];
	$ex3f2t1=$row['ex3'];
	$ex4f2t1=$row['ex4'];
}
$select2=mysqli_query($link,"SELECT * FROM tbl_classavgf2t2 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$ex1f2t2=$row['ex1'];
	$ex2f2t2=$row['ex2'];
	$ex3f2t2=$row['ex3'];
	$ex4f2t2=$row['ex4'];
}
$select3=mysqli_query($link,"SELECT * FROM tbl_classavgf2t3 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$ex1f2t3=$row['ex1'];
	$ex2f2t3=$row['ex2'];
	$ex3f2t3=$row['ex3'];
	$ex4f2t3=$row['ex4'];
}

//form 3
$select1=mysqli_query($link,"SELECT * FROM tbl_classavgf3t1 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$ex1f3t1=$row['ex1'];
	$ex2f3t1=$row['ex2'];
	$ex3f3t1=$row['ex3'];
	$ex4f3t1=$row['ex4'];
}
$select2=mysqli_query($link,"SELECT * FROM tbl_classavgf3t2 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$ex1f3t2=$row['ex1'];
	$ex2f3t2=$row['ex2'];
	$ex3f3t2=$row['ex3'];
	$ex4f3t2=$row['ex4'];
}
$select3=mysqli_query($link,"SELECT * FROM tbl_classavgf3t3 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$ex1f3t3=$row['ex1'];
	$ex2f3t3=$row['ex2'];
	$ex3f3t3=$row['ex3'];
	$ex4f3t3=$row['ex4'];
}

//form 4
$select1=mysqli_query($link,"SELECT * FROM tbl_classavgf4t1 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$ex1f4t1=$row['ex1'];
	$ex2f4t1=$row['ex2'];
	$ex3f4t1=$row['ex3'];
	$ex4f4t1=$row['ex4'];
}
$select2=mysqli_query($link,"SELECT * FROM tbl_classavgf4t2 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$ex1f4t2=$row['ex1'];
	$ex2f4t2=$row['ex2'];
	$ex3f4t2=$row['ex3'];
	$ex4f4t2=$row['ex4'];
}
$select3=mysqli_query($link,"SELECT * FROM tbl_classavgf4t3 WHERE year='$year' ")or die (mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$ex1f4t3=$row['ex1'];
	$ex2f4t3=$row['ex2'];
	$ex3f4t3=$row['ex3'];
	$ex4f4t3=$row['ex4'];
}





?>