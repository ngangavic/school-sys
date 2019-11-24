<?php 
include"database.php";
include"connection.php";
?>
<?php
$database = new Database();
//$result = $database->runQuery("SELECT name,phone_number,transaction_no,date FROM tbl_mpesa WHERE confirm='no' ");
//$header = $database->runQuery("SELECT name,amount,currency,card_no,expr_month,expr_year FROM tbl_visa");
//$header = $database->runQuery("SELECT `COLUMN_NAME` 
//FROM `INFORMATION_SCHEMA`.`COLUMNS` 
//WHERE `TABLE_SCHEMA`='jochebed' 
   //AND `TABLE_NAME`='tbl_mpesa_donation_pdf'");
require('pdf/fpdf.php');
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$query1 = mysqli_query($link, "select * from tbl_school ") or die(mysql_error());
	while($row = mysqli_fetch_array($query1)){
		$name=$row['name'];
		$box=$row['box'];
		$phone=$row['phone'];
		//$house=$row['house'];
	}
$pdf->SetFont('times',"B",10);
$pdf->Cell(0,0,$name,0,0,'C');
$pdf->Ln(8);
$pdf->Cell(0,0,$box,0,0,'C');
$pdf->Ln(8);
$pdf->Cell(0,0,$phone,0,0,'C');
$pdf->Ln(8);
$pdf->Cell(0,0,'ClASSLIST',0,0,'C');
$pdf->Ln(8);
$pdf->Ln(8);
$pdf->SetFont('Arial','B',10);
/*if($result >0){
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(40,6,$column_heading,1);
}
$pdf->SetFont('Arial','',10);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(40,7,$column,1);
}
}else
{
$pdf->Cell(0,0,'There is no current mpesa donations ',0,0,'C');
}*/
$pdf->Output();
?>