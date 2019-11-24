<?php
include"connection.php";
//form 1 term 1 exam 1
$sqlmn1= mysqli_query($link, "select sum(mn1) from tbl_meanf1t1 where class='form 1' ") ;
	while($row = mysqli_fetch_array($sqlmn1)){
//total		
	$total=	$row['sum(mn1)'];
	echo 'FORM 1 TERM 1</br>','SUM OF CLASS ' ,$total ,'</br>';
	}
$sqlmn= mysqli_query($link, "select * from tbl_meanf1t1 where class='form 1' ") ;	
$row = mysqli_fetch_array($sqlmn);
//no of students
		$students_no=mysqli_num_rows($sqlmn);
		echo 'NO OF STUDENTS ' , $students_no,'</br>';	
//average		
		$avg=$total/$students_no;
		echo 'AVERAGE ' ,$avg,'</br>';
		$year=date('Y');
		echo 'YEAR ' ,$year,'</br></br>';

$check= mysqli_query($link, "select * from tbl_classavgf1t1 ") ;
$row = mysqli_fetch_array($check);
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];

//if($ex2==0&&$yearc==$year){		
$insert=mysqli_query($link,"INSERT INTO tbl_classavgf1t1 (ex1,ex2,ex3,ex4,year)VALUES('".$avg."','','','','".$year."')");		
//}else{
//	echo 'DATA ALREADY INSERTED';
//}

$sqlmn2= mysqli_query($link, "select sum(mn2) from tbl_meanf1t1 where class='form 1' ") ;
	while($row = mysqli_fetch_array($sqlmn2)){
//total		
	$total2=$row['sum(mn2)'];
	echo 'FORM 1 TERM 1</br>','SUM OF CLASS ' ,$total2 ,'</br>';
	}
$sqlmn= mysqli_query($link, "select * from tbl_meanf1t1 where class='form 1' ") ;	
$row = mysqli_fetch_array($sqlmn);
//no of students
		$students_no=mysqli_num_rows($sqlmn);
		echo 'NO OF STUDENTS ' , $students_no,'</br>';	
//average		
		$avg2=$total2/$students_no;
		echo 'AVERAGE ' ,$avg2,'</br>';
		$year=date('Y');
		echo 'YEAR ' ,$year;	


$update=mysqli_query($link,"UPDATE tbl_classavgf1t1 SET ex2='$avg2' WHERE year='$year'");
	
?>