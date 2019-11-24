<?php
include"connection.php";
//...................exam 1...............
$sqlmn1= mysqli_query($link, "select sum(mn1) from tbl_meanf3t2 where class='form 3' ") ;
	while($row = mysqli_fetch_array($sqlmn1)){
//total		
	$total=	$row['sum(mn1)'];
	}
$sqlmn= mysqli_query($link, "select * from tbl_meanf3t2 where class='form 3' ") ;	
$row = mysqli_fetch_array($sqlmn);
//no of students
		$students_no=mysqli_num_rows($sqlmn);	
//average		
		$avg=$total/$students_no;
		$year=date('Y');

//...................exam 2...............
$sqlmn2= mysqli_query($link, "select sum(mn2) from tbl_meanf3t2 where class='form 3' ") ;
	while($row = mysqli_fetch_array($sqlmn2)){
//total		
	$total2=$row['sum(mn2)'];
	}	
//average		
		$avg2=$total2/$students_no;
		$year=date('Y');
		
//...................exam 3...............
$sqlmn3= mysqli_query($link, "select sum(mn3) from tbl_meanf3t2 where class='form 3' ") ;
	while($row = mysqli_fetch_array($sqlmn3)){
//total		
	$total3=$row['sum(mn3)'];
	}	
//average		
		$avg3=$total3/$students_no;
		$year=date('Y');	

//...................exam 4...............
$sqlmn4= mysqli_query($link, "select sum(mn4) from tbl_meanf3t2 where class='form 3' ") ;
	while($row = mysqli_fetch_array($sqlmn4)){
//total		
	$total4=$row['sum(mn4)'];
	}	
//average		
		$avg4=$total4/$students_no;
		$year=date('Y');			
	
		
		
		
		
$check= mysqli_query($link, "select * from tbl_classavgf3t2 ") ;
while($row = mysqli_fetch_array($check)){
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];
}

if($yearc!=$year){		
$insert=mysqli_query($link,"INSERT INTO tbl_classavgf3t2 (ex1,ex2,ex3,ex4,year)VALUES('".$avg."','','','','".$year."')");
?>
<script>
window.location="index.php?id=3";
alert("Data inserted");
</script>
<?php		
}else{
$update=mysqli_query($link,"UPDATE tbl_classavgf3t2 SET ex1='$avg' WHERE year='$year'");
	
$update=mysqli_query($link,"UPDATE tbl_classavgf3t2 SET ex2='$avg2' WHERE year='$year'");	

$update=mysqli_query($link,"UPDATE tbl_classavgf3t2 SET ex3='$avg3' WHERE year='$year'");	

$update=mysqli_query($link,"UPDATE tbl_classavgf3t2 SET ex4='$avg4' WHERE year='$year'");	
?>
<script>
window.location="index.php?id=3";
alert("Data updated.");
</script>
<?php

}

?>