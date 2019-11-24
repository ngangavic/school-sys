<?php
$select1=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='english' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$eng1f4t1=$row['ex1'];
    $eng2f4t1=$row['ex2'];
    $eng3f4t1=$row['ex3'];
    $eng4f4t1=$row['ex4'];	
}

$select2=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='kiswahili' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$kis1f4t1=$row['ex1'];
    $kis2f4t1=$row['ex2'];
    $kis3f4t1=$row['ex3'];
    $kis4f4t1=$row['ex4'];	
}

$select3=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='maths' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$mat1f4t1=$row['ex1'];
    $mat2f4t1=$row['ex2'];
    $mat3f4t1=$row['ex3'];
    $mat4f4t1=$row['ex4'];	
}

$select4=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='biology' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select4)){
	$bio1f4t1=$row['ex1'];
    $bio2f4t1=$row['ex2'];
    $bio3f4t1=$row['ex3'];
    $bio4f4t1=$row['ex4'];	
}

$select5=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='chemistry' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select5)){
	$chem1f4t1=$row['ex1'];
    $chem2f4t1=$row['ex2'];
    $chem3f4t1=$row['ex3'];
    $chem4f4t1=$row['ex4'];	
}

$select6=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='physics' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select6)){
	$phy1f4t1=$row['ex1'];
    $phy2f4t1=$row['ex2'];
    $phy3f4t1=$row['ex3'];
    $phy4f4t1=$row['ex4'];	
}

$select7=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='geography' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select7)){
	$geo1f4t1=$row['ex1'];
    $geo2f4t1=$row['ex2'];
    $geo3f4t1=$row['ex3'];
    $geo4f4t1=$row['ex4'];	
}

$select8=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='history' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select8)){
	$his1f4t1=$row['ex1'];
    $his2f4t1=$row['ex2'];
    $his3f4t1=$row['ex3'];
    $his4f4t1=$row['ex4'];	
}

$select9=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='cre' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select9)){
	$cre1f4t1=$row['ex1'];
    $cre2f4t1=$row['ex2'];
    $cre3f4t1=$row['ex3'];
    $cre4f4t1=$row['ex4'];	
}

$select10=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='business' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select10)){
	$bus1f4t1=$row['ex1'];
    $bus2f4t1=$row['ex2'];
    $bus3f4t1=$row['ex3'];
    $bus4f4t1=$row['ex4'];	
}

$select11=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t1 WHERE subject='agriculture' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select11)){
	$agri1f4t1=$row['ex1'];
    $agri2f4t1=$row['ex2'];
    $agri3f4t1=$row['ex3'];
    $agri4f4t1=$row['ex4'];	
}

?>

<?php
$select1=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='english' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$eng1f4t2=$row['ex1'];
    $eng2f4t2=$row['ex2'];
    $eng3f4t2=$row['ex3'];
    $eng4f4t2=$row['ex4'];	
}

$select2=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='kiswahili' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$kis1f4t2=$row['ex1'];
    $kis2f4t2=$row['ex2'];
    $kis3f4t2=$row['ex3'];
    $kis4f4t2=$row['ex4'];	
}

$select3=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='maths' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$mat1f4t2=$row['ex1'];
    $mat2f4t2=$row['ex2'];
    $mat3f4t2=$row['ex3'];
    $mat4f4t2=$row['ex4'];	
}

$select4=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='biology' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select4)){
	$bio1f4t2=$row['ex1'];
    $bio2f4t2=$row['ex2'];
    $bio3f4t2=$row['ex3'];
    $bio4f4t2=$row['ex4'];	
}

$select5=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='chemistry' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select5)){
	$chem1f4t2=$row['ex1'];
    $chem2f4t2=$row['ex2'];
    $chem3f4t2=$row['ex3'];
    $chem4f4t2=$row['ex4'];	
}

$select6=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='physics' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select6)){
	$phy1f4t2=$row['ex1'];
    $phy2f4t2=$row['ex2'];
    $phy3f4t2=$row['ex3'];
    $phy4f4t2=$row['ex4'];	
}

$select7=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='geography' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select7)){
	$geo1f4t2=$row['ex1'];
    $geo2f4t2=$row['ex2'];
    $geo3f4t2=$row['ex3'];
    $geo4f4t2=$row['ex4'];	
}

$select8=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='history' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select8)){
	$his1f4t2=$row['ex1'];
    $his2f4t2=$row['ex2'];
    $his3f4t2=$row['ex3'];
    $his4f4t2=$row['ex4'];	
}

$select9=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='cre' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select9)){
	$cre1f4t2=$row['ex1'];
    $cre2f4t2=$row['ex2'];
    $cre3f4t2=$row['ex3'];
    $cre4f4t2=$row['ex4'];	
}

$select10=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='business' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select10)){
	$bus1f4t2=$row['ex1'];
    $bus2f4t2=$row['ex2'];
    $bus3f4t2=$row['ex3'];
    $bus4f4t2=$row['ex4'];	
}

$select11=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t2 WHERE subject='agriculture' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select11)){
	$agri1f4t2=$row['ex1'];
    $agri2f4t2=$row['ex2'];
    $agri3f4t2=$row['ex3'];
    $agri4f4t2=$row['ex4'];	
}

?>

<?php
$select1=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='english' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$eng1f4t3=$row['ex1'];
    $eng2f4t3=$row['ex2'];
    $eng3f4t3=$row['ex3'];
    $eng4f4t3=$row['ex4'];	
}

$select2=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='kiswahili' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$kis1f4t3=$row['ex1'];
    $kis2f4t3=$row['ex2'];
    $kis3f4t3=$row['ex3'];
    $kis4f4t3=$row['ex4'];	
}

$select3=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='maths' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$mat1f4t3=$row['ex1'];
    $mat2f4t3=$row['ex2'];
    $mat3f4t3=$row['ex3'];
    $mat4f4t3=$row['ex4'];	
}

$select4=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='biology' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select4)){
	$bio1f4t3=$row['ex1'];
    $bio2f4t3=$row['ex2'];
    $bio3f4t3=$row['ex3'];
    $bio4f4t3=$row['ex4'];	
}

$select5=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='chemistry' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select5)){
	$chem1f4t3=$row['ex1'];
    $chem2f4t3=$row['ex2'];
    $chem3f4t3=$row['ex3'];
    $chem4f4t3=$row['ex4'];	
}

$select6=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='physics' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select6)){
	$phy1f4t3=$row['ex1'];
    $phy2f4t3=$row['ex2'];
    $phy3f4t3=$row['ex3'];
    $phy4f4t3=$row['ex4'];	
}

$select7=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='geography' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select7)){
	$geo1f4t3=$row['ex1'];
    $geo2f4t3=$row['ex2'];
    $geo3f4t3=$row['ex3'];
    $geo4f4t3=$row['ex4'];	
}

$select8=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='history' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select8)){
	$his1f4t3=$row['ex1'];
    $his2f4t3=$row['ex2'];
    $his3f4t3=$row['ex3'];
    $his4f4t3=$row['ex4'];	
}

$select9=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='cre' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select9)){
	$cre1f4t3=$row['ex1'];
    $cre2f4t3=$row['ex2'];
    $cre3f4t3=$row['ex3'];
    $cre4f4t3=$row['ex4'];	
}

$select10=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='business' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select10)){
	$bus1f4t3=$row['ex1'];
    $bus2f4t3=$row['ex2'];
    $bus3f4t3=$row['ex3'];
    $bus4f4t3=$row['ex4'];	
}

$select11=mysqli_query($link,"SELECT * FROM tbl_subjavgf4t3 WHERE subject='agriculture' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select11)){
	$agri1f4t3=$row['ex1'];
    $agri2f4t3=$row['ex2'];
    $agri3f4t3=$row['ex3'];
    $agri4f4t3=$row['ex4'];	
}

?>
