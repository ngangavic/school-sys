<?php
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
$pdf->Cell(0,0,'SUBJECT AVERAGES',0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'YEAR:'.$year,0,0,'C');
//$pdf->Ln(8);
$pdf->Ln(0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(10,8,'_______________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);		   

$pdf->SetFont('times',"B",15);
$pdf->Cell(30,8,'Error! You must select year and class not found', 0);

$pdf->Ln(8);
//$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);
$pdf->Output();


?>