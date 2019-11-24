<?php
include"connection.php";
//*************************TERM 1***********************************************************************
//...................exam 1...............
$sqlmn1= mysqli_query($link, "select sum(ex1) from tbl_mathsf4t1 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn1)){
//total		
	$total=	$row['sum(ex1)'];
	}
$sqlmn= mysqli_query($link, "select * from tbl_mathsf4t1 where class='form 4' ") ;	
$row = mysqli_fetch_array($sqlmn);
//no of students
		$students_no=mysqli_num_rows($sqlmn);	
//average		
		$avg=$total/$students_no;
		$year=date('Y');

//...................exam 2...............
$sqlmn2= mysqli_query($link, "select sum(ex2) from tbl_mathsf4t1 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn2)){
//total		
	$total2=$row['sum(ex2)'];
	}	
//average		
		$avg2=$total2/$students_no;
		$year=date('Y');
		
//...................exam 3...............
$sqlmn3= mysqli_query($link, "select sum(ex3) from tbl_mathsf4t1 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn3)){
//total		
	$total3=$row['sum(ex3)'];
	}	
//average		
		$avg3=$total3/$students_no;
		$year=date('Y');	

//...................exam 4...............
$sqlmn4= mysqli_query($link, "select sum(ex4) from tbl_mathsf4t1 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn4)){
//total		
	$total4=$row['sum(ex4)'];
	}	
//average		
		$avg4=$total4/$students_no;
		$year=date('Y');			
			
$check= mysqli_query($link, "select * from tbl_subjavgf4t1 ") ;
$row = mysqli_fetch_array($check);
$subj=$row['subject'];
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];

$update=mysqli_query($link,"UPDATE tbl_subjavgf4t1 SET ex1='$avg' WHERE year='$year' AND subject='maths'");
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t1 SET ex2='$avg2' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t1 SET ex3='$avg3' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t1 SET ex4='$avg4' WHERE year='$year' AND subject='maths'");	
?>

<?php 
//*************************TERM 2***********************************************************************
//...................exam 1...............
$sqlmn1= mysqli_query($link, "select sum(ex1) from tbl_mathsf4t2 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn1)){
//total		
	$total=	$row['sum(ex1)'];
	}
$sqlmn= mysqli_query($link, "select * from tbl_mathsf4t2 where class='form 4' ") ;	
$row = mysqli_fetch_array($sqlmn);
//no of students
		$students_no=mysqli_num_rows($sqlmn);	
//average		
		$avg=$total/$students_no;
		$year=date('Y');

//...................exam 2...............
$sqlmn2= mysqli_query($link, "select sum(ex2) from tbl_mathsf4t2 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn2)){
//total		
	$total2=$row['sum(ex2)'];
	}	
//average		
		$avg2=$total2/$students_no;
		$year=date('Y');
		
//...................exam 3...............
$sqlmn3= mysqli_query($link, "select sum(ex3) from tbl_mathsf4t2 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn3)){
//total		
	$total3=$row['sum(ex3)'];
	}	
//average		
		$avg3=$total3/$students_no;
		$year=date('Y');	

//...................exam 4...............
$sqlmn4= mysqli_query($link, "select sum(ex4) from tbl_mathsf4t2 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn4)){
//total		
	$total4=$row['sum(ex4)'];
	}	
//average		
		$avg4=$total4/$students_no;
		$year=date('Y');			
		
$check= mysqli_query($link, "select * from tbl_subjavgf4t2 ") ;
$row = mysqli_fetch_array($check);
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];
	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t2 SET ex1='$avg' WHERE year='$year' AND subject='maths'");
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t2 SET ex2='$avg2' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t2 SET ex3='$avg3' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t2 SET ex4='$avg4' WHERE year='$year' AND subject='maths'");	
?>

<?php
//*************************TERM 3***********************************************************************
//...................exam 1...............
$sqlmn1= mysqli_query($link, "select sum(ex1) from tbl_mathsf4t3 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn1)){
//total		
	$total=	$row['sum(ex1)'];
	}
$sqlmn= mysqli_query($link, "select * from tbl_mathsf4t3 where class='form 4' ") ;	
$row = mysqli_fetch_array($sqlmn);
//no of students
		$students_no=mysqli_num_rows($sqlmn);	
//average		
		$avg=$total/$students_no;
		$year=date('Y');

//...................exam 2...............
$sqlmn2= mysqli_query($link, "select sum(ex2) from tbl_mathsf4t3 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn2)){
//total		
	$total2=$row['sum(ex2)'];
	}	
//average		
		$avg2=$total2/$students_no;
		$year=date('Y');
		
//...................exam 3...............
$sqlmn3= mysqli_query($link, "select sum(ex3) from tbl_mathsf4t3 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn3)){
//total		
	$total3=$row['sum(ex3)'];
	}	
//average		
		$avg3=$total3/$students_no;
		$year=date('Y');	

//...................exam 4...............
$sqlmn4= mysqli_query($link, "select sum(ex4) from tbl_mathsf4t3 where class='form 4' ") ;
	while($row = mysqli_fetch_array($sqlmn4)){
//total		
	$total4=$row['sum(ex4)'];
	}	
//average		
		$avg4=$total4/$students_no;
		$year=date('Y');			

$check= mysqli_query($link, "select * from tbl_subjavgf4t3 ") ;
$row = mysqli_fetch_array($check);
$ex1=$row['ex1'];
$ex2=$row['ex2'];
$ex3=$row['ex3'];
$ex4=$row['ex4'];
$yearc=$row['year'];

$update=mysqli_query($link,"UPDATE tbl_subjavgf4t3 SET ex1='$avg' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t3 SET ex2='$avg2' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t3 SET ex3='$avg3' WHERE year='$year' AND subject='maths'");	
$update=mysqli_query($link,"UPDATE tbl_subjavgf4t3 SET ex4='$avg4' WHERE year='$year' AND subject='maths'");	
?>
<script>
window.location="index.php?id=1";
alert("Data has been updated \n Check it out ...");
</script>
