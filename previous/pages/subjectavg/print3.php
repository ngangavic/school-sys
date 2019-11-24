<?php
$select1=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='english' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$eng1f3t1=$row['ex1'];
    $eng2f3t1=$row['ex2'];
    $eng3f3t1=$row['ex3'];
    $eng4f3t1=$row['ex4'];	
}

$select2=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='kiswahili' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$kis1f3t1=$row['ex1'];
    $kis2f3t1=$row['ex2'];
    $kis3f3t1=$row['ex3'];
    $kis4f3t1=$row['ex4'];	
}

$select3=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='maths' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$mat1f3t1=$row['ex1'];
    $mat2f3t1=$row['ex2'];
    $mat3f3t1=$row['ex3'];
    $mat4f3t1=$row['ex4'];	
}

$select4=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='biology' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select4)){
	$bio1f3t1=$row['ex1'];
    $bio2f3t1=$row['ex2'];
    $bio3f3t1=$row['ex3'];
    $bio4f3t1=$row['ex4'];	
}

$select5=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='chemistry' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select5)){
	$chem1f3t1=$row['ex1'];
    $chem2f3t1=$row['ex2'];
    $chem3f3t1=$row['ex3'];
    $chem4f3t1=$row['ex4'];	
}

$select6=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='physics' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select6)){
	$phy1f3t1=$row['ex1'];
    $phy2f3t1=$row['ex2'];
    $phy3f3t1=$row['ex3'];
    $phy4f3t1=$row['ex4'];	
}

$select7=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='geography' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select7)){
	$geo1f3t1=$row['ex1'];
    $geo2f3t1=$row['ex2'];
    $geo3f3t1=$row['ex3'];
    $geo4f3t1=$row['ex4'];	
}

$select8=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='history' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select8)){
	$his1f3t1=$row['ex1'];
    $his2f3t1=$row['ex2'];
    $his3f3t1=$row['ex3'];
    $his4f3t1=$row['ex4'];	
}

$select9=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='cre' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select9)){
	$cre1f3t1=$row['ex1'];
    $cre2f3t1=$row['ex2'];
    $cre3f3t1=$row['ex3'];
    $cre4f3t1=$row['ex4'];	
}

$select10=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='business' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select10)){
	$bus1f3t1=$row['ex1'];
    $bus2f3t1=$row['ex2'];
    $bus3f3t1=$row['ex3'];
    $bus4f3t1=$row['ex4'];	
}

$select11=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t1 WHERE subject='agriculture' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select11)){
	$agri1f3t1=$row['ex1'];
    $agri2f3t1=$row['ex2'];
    $agri3f3t1=$row['ex3'];
    $agri4f3t1=$row['ex4'];	
}

?>

<?php
$select1=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='english' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$eng1f3t2=$row['ex1'];
    $eng2f3t2=$row['ex2'];
    $eng3f3t2=$row['ex3'];
    $eng4f3t2=$row['ex4'];	
}

$select2=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='kiswahili' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$kis1f3t2=$row['ex1'];
    $kis2f3t2=$row['ex2'];
    $kis3f3t2=$row['ex3'];
    $kis4f3t2=$row['ex4'];	
}

$select3=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='maths' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$mat1f3t2=$row['ex1'];
    $mat2f3t2=$row['ex2'];
    $mat3f3t2=$row['ex3'];
    $mat4f3t2=$row['ex4'];	
}

$select4=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='biology' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select4)){
	$bio1f3t2=$row['ex1'];
    $bio2f3t2=$row['ex2'];
    $bio3f3t2=$row['ex3'];
    $bio4f3t2=$row['ex4'];	
}

$select5=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='chemistry' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select5)){
	$chem1f3t2=$row['ex1'];
    $chem2f3t2=$row['ex2'];
    $chem3f3t2=$row['ex3'];
    $chem4f3t2=$row['ex4'];	
}

$select6=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='physics' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select6)){
	$phy1f3t2=$row['ex1'];
    $phy2f3t2=$row['ex2'];
    $phy3f3t2=$row['ex3'];
    $phy4f3t2=$row['ex4'];	
}

$select7=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='geography' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select7)){
	$geo1f3t2=$row['ex1'];
    $geo2f3t2=$row['ex2'];
    $geo3f3t2=$row['ex3'];
    $geo4f3t2=$row['ex4'];	
}

$select8=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='history' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select8)){
	$his1f3t2=$row['ex1'];
    $his2f3t2=$row['ex2'];
    $his3f3t2=$row['ex3'];
    $his4f3t2=$row['ex4'];	
}

$select9=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='cre' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select9)){
	$cre1f3t2=$row['ex1'];
    $cre2f3t2=$row['ex2'];
    $cre3f3t2=$row['ex3'];
    $cre4f3t2=$row['ex4'];	
}

$select10=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='business' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select10)){
	$bus1f3t2=$row['ex1'];
    $bus2f3t2=$row['ex2'];
    $bus3f3t2=$row['ex3'];
    $bus4f3t2=$row['ex4'];	
}

$select11=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t2 WHERE subject='agriculture' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select11)){
	$agri1f3t2=$row['ex1'];
    $agri2f3t2=$row['ex2'];
    $agri3f3t2=$row['ex3'];
    $agri4f3t2=$row['ex4'];	
}

?>

<?php
$select1=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='english' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select1)){
	$eng1f3t3=$row['ex1'];
    $eng2f3t3=$row['ex2'];
    $eng3f3t3=$row['ex3'];
    $eng4f3t3=$row['ex4'];	
}

$select2=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='kiswahili' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select2)){
	$kis1f3t3=$row['ex1'];
    $kis2f3t3=$row['ex2'];
    $kis3f3t3=$row['ex3'];
    $kis4f3t3=$row['ex4'];	
}

$select3=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='maths' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select3)){
	$mat1f3t3=$row['ex1'];
    $mat2f3t3=$row['ex2'];
    $mat3f3t3=$row['ex3'];
    $mat4f3t3=$row['ex4'];	
}

$select4=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='biology' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select4)){
	$bio1f3t3=$row['ex1'];
    $bio2f3t3=$row['ex2'];
    $bio3f3t3=$row['ex3'];
    $bio4f3t3=$row['ex4'];	
}

$select5=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='chemistry' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select5)){
	$chem1f3t3=$row['ex1'];
    $chem2f3t3=$row['ex2'];
    $chem3f3t3=$row['ex3'];
    $chem4f3t3=$row['ex4'];	
}

$select6=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='physics' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select6)){
	$phy1f3t3=$row['ex1'];
    $phy2f3t3=$row['ex2'];
    $phy3f3t3=$row['ex3'];
    $phy4f3t3=$row['ex4'];	
}

$select7=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='geography' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select7)){
	$geo1f3t3=$row['ex1'];
    $geo2f3t3=$row['ex2'];
    $geo3f3t3=$row['ex3'];
    $geo4f3t3=$row['ex4'];	
}

$select8=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='history' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select8)){
	$his1f3t3=$row['ex1'];
    $his2f3t3=$row['ex2'];
    $his3f3t3=$row['ex3'];
    $his4f3t3=$row['ex4'];	
}

$select9=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='cre' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select9)){
	$cre1f3t3=$row['ex1'];
    $cre2f3t3=$row['ex2'];
    $cre3f3t3=$row['ex3'];
    $cre4f3t3=$row['ex4'];	
}

$select10=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='business' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select10)){
	$bus1f3t3=$row['ex1'];
    $bus2f3t3=$row['ex2'];
    $bus3f3t3=$row['ex3'];
    $bus4f3t3=$row['ex4'];	
}

$select11=mysqli_query($link,"SELECT * FROM tbl_subjavgf3t3 WHERE subject='agriculture' AND year='$year' " )or die(mysqli_error());
while($row=mysqli_fetch_array($select11)){
	$agri1f3t3=$row['ex1'];
    $agri2f3t3=$row['ex2'];
    $agri3f3t3=$row['ex3'];
    $agri4f3t3=$row['ex4'];	
}

?>
