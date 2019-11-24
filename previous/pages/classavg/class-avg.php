<?php
include"connection.php";
	$year=($_POST['year']);
	//$class=($_POST['class']);
	$yearCheck=0;
	
	$chech=mysqli_query($link,"SELECT * FROM tbl_classavgf1t1 WHERE year='$year' ")or die (mysqli_error());
	$row=mysqli_num_rows($chech);
	if($row>0){
	
	
//if($year==$yeardb){
	//$classCheck=0;
if($year==$yearCheck ){
?>
<script>
window.location="index.php?id=1";
alert("YOU MUST SELECT THE YEAR YOU WISH TO PRINT. \n PLEASE TRY AGAIN...");
</script>
<?php
}else{	
//if($class=='form1'){
require('../pdf/fpdf.php');
$pdf = new FPDF('P');
$pdf->AddPage();
$pdf->SetFont('times',"B",14);
//$pdf->Image('css/images/logo.GIF',90,10,30);
//$pdf->Ln(8);
$pdf->Ln(1);
	       $query = mysqli_query($link, "select * from tbl_school ") ;
	       while($row = mysqli_fetch_array($query)){
		   $schname = $row['name'];
		   $schbox=$row['box'];
		   $schlocation=$row['location'];
		   $schphone=$row['phone'];
		   $opendate=$row['open_date'];
		   $closedate=$row['close_date'];
		   }		
$pdf->SetFont('times',"B",12);
$pdf->Cell(0,0,$schname,0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'P.O BOX'.$schbox.$schlocation,0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'PHONE:'.$schphone,0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'CLASS AVERAGES',0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'YEAR:'.$year,0,0,'C');
//$pdf->Ln(8);
$pdf->Ln(0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(10,8,'_______________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);		   

$pdf->SetFont('times',"B",15);
$pdf->Cell(30,8,'CLASS', 0);

$pdf->Cell(30,8,'TERM ', 0);
$pdf->Cell(30,8,'Exam 1 ', 0);
$pdf->Cell(30,8,'Exam 2', 0);
$pdf->Cell(30,8,'Exam 3', 0);
$pdf->Cell(13,8,'Avg', 0);
include"print.php";
//FORM 1 start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'FORM 1', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$ex1f1t1, 0);
$pdf->Cell(30,8,$ex2f1t1 , 0);
$pdf->Cell(30,8,$ex3f1t1, 0);
$pdf->Cell(30,8,$ex4f1t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$ex1f1t2, 0);
$pdf->Cell(30,8,$ex2f1t2 , 0);
$pdf->Cell(30,8,$ex3f1t2, 0);
$pdf->Cell(9,8,$ex4f1t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$ex1f1t3, 0);
$pdf->Cell(30,8,$ex2f1t3 , 0);
$pdf->Cell(30,8,$ex3f1t3, 0);
$pdf->Cell(9,8,$ex4f1t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//FORM 1 end
//FORM 2 start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'FORM 2', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$ex1f2t1, 0);
$pdf->Cell(30,8,$ex2f2t1 , 0);
$pdf->Cell(30,8,$ex3f2t1, 0);
$pdf->Cell(30,8,$ex4f2t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$ex1f2t2, 0);
$pdf->Cell(30,8,$ex2f2t2 , 0);
$pdf->Cell(30,8,$ex3f2t2, 0);
$pdf->Cell(9,8,$ex4f2t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$ex1f2t3, 0);
$pdf->Cell(30,8,$ex2f2t3 , 0);
$pdf->Cell(30,8,$ex3f2t3, 0);
$pdf->Cell(9,8,$ex4f2t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//FORM 2 end
//FORM 3 start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'FORM 3', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$ex1f3t1, 0);
$pdf->Cell(30,8,$ex2f3t1 , 0);
$pdf->Cell(30,8,$ex3f3t1, 0);
$pdf->Cell(30,8,$ex4f3t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$ex1f3t2, 0);
$pdf->Cell(30,8,$ex2f3t2 , 0);
$pdf->Cell(30,8,$ex3f3t2, 0);
$pdf->Cell(9,8,$ex4f3t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$ex1f3t3, 0);
$pdf->Cell(30,8,$ex2f3t3 , 0);
$pdf->Cell(30,8,$ex3f3t3, 0);
$pdf->Cell(9,8,$ex4f3t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//FORM 3 end
//FORM 4 start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'FORM 4', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$ex1f4t1, 0);
$pdf->Cell(30,8,$ex2f4t1 , 0);
$pdf->Cell(30,8,$ex3f4t1, 0);
$pdf->Cell(30,8,$ex4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$ex1f4t2, 0);
$pdf->Cell(30,8,$ex2f4t2 , 0);
$pdf->Cell(30,8,$ex3f4t2, 0);
$pdf->Cell(9,8,$ex4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$ex1f4t3, 0);
$pdf->Cell(30,8,$ex2f4t3 , 0);
$pdf->Cell(30,8,$ex3f4t3, 0);
$pdf->Cell(9,8,$ex4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//FORM 4 end

$pdf->Ln(8);
//$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);
$pdf->Output();
/*}elseif($class=='form2'){
      include"form-2.php";
}elseif($class=='form3'){
      include"form-3.php";
}
elseif($class=='form4'){
      include"form-4.php";
}else{
	  include"error.php";
}*/}}else{
	include"error.php";
}

?>