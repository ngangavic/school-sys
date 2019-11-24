<?php
include('connection.php');

$id=$_POST['id'];
$adm=$_POST['adm'];
$N = count($id);
//for($i=0; $i < $N; $i++)
//{
require('pdf/fpdf.php');

	foreach($adm as $row) {
	$pdf = new FPDF();
	//foreach($row as $column)
		$pdf->AddPage();
		
$pdf->Output();	
}
//}







?>