<?php
$sqlsbj1= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='english' ") ;
	while ($row = mysqli_fetch_array($sqlsbj1)) {
		$sbjeng=$row["teacher"];
		}
$sqlsbj2= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='kiswahili' ") ;
	while ($row = mysqli_fetch_array($sqlsbj2)) {
		$sbjkis=$row["teacher"];
		}
$sqlsbj3= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='maths' ") ;
	while ($row = mysqli_fetch_array($sqlsbj3)) {
		$sbjmat=$row["teacher"];
		}
$sqlsbj4= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='biology' ") ;
	while ($row = mysqli_fetch_array($sqlsbj4)) {
		$sbjbio=$row["teacher"];
		}
$sqlsbj5= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='chemistry' ") ;
	while ($row = mysqli_fetch_array($sqlsbj5)) {
		$sbjchem=$row["teacher"];
		}	
$sqlsbj6= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='physics' ") ;
	while ($row = mysqli_fetch_array($sqlsbj6)) {
		$sbjphy=$row["teacher"];
		}		
$sqlsbj7= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='geography' ") ;
	while ($row = mysqli_fetch_array($sqlsbj7)) {
		$sbjgeo=$row["teacher"];
		}	
$sqlsbj8= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='history' ") ;
	while ($row = mysqli_fetch_array($sqlsbj8)) {
		$sbjhis=$row["teacher"];
		}	
$sqlsbj9= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='cre' ") ;
	while ($row = mysqli_fetch_array($sqlsbj9)) {
		$sbjcre=$row["teacher"];
		}	
$sqlsbj10= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='agriculture' ") ;
	while ($row = mysqli_fetch_array($sqlsbj10)) {
		$sbjagri=$row["teacher"];
		}
$sqlsbj11= mysqli_query($link, "select * from tbl_sbj_teachers where class='form 1' and subject='business' ") ;
	while ($row = mysqli_fetch_array($sqlsbj11)) {
		$sbjbus=$row["teacher"];
		}
?>		