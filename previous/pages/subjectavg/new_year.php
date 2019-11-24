<?php
include"connection.php";
/*this file is to add a new yearEnter to the tbl_subjectaverages
*it will add:-
*            -subject
*            -yearEnter
*
*
*/
$yearEnter=$_POST['year'];

$select=mysqli_query($link,"SELECT * FROM tbl_subjavgf1t1 WHERE year='".$yearEnter."' ")or die (mysqli_error());
$count= mysqli_num_rows($select);
if ($count == 0) {
//while($row=mysqli_fetch_array($select)){
//$yearc=$row['year'];
//}

//$yearc=date('Y');
//echo $yearEnter,'</br>';
//echo $yearc;


//if($yearc!=$yearEnter || $yearc==null){
//f1t1
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");
//f1t2
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");
//f1t3
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf1t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");
//f2t1
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f2t2
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f2t3
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf2t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f3t1
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f3t2
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f3t3
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf3t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f4t1
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t1 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f4t2
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t2 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");

//f4t3
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('english','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('kiswahili','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('maths','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('biology','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('chemistry','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('physics','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('geography','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('history','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('cre','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('business','','','','','".$yearEnter."')");
$insert=mysqli_query($link,"INSERT INTO tbl_subjavgf4t3 (subject,ex1,ex2,ex3,ex4,year)VALUES('agriculture','','','','','".$yearEnter."')");
?>
<script>
window.location="../admin.php";
alert("Successful\n Year started");
</script>
<?php
}else{
?>	
<script>
window.location="../admin.php";
alert("Error \n Please check if you entered the correct year");

</script>	
<?php	
}
?>