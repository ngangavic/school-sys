<?php 
//Database Connection
include_once '../../connection.php';	
?>
<?php 	
require('../../pdf/fpdf.php');
$pdf = new FPDF('L');
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
//$pdf->Cell(-106,0,$schbox,0,0,'C');
//$pdf->Cell(140,0,$schlocation,0,0,'C');
$pdf->Ln(4);
//$pdf->Cell(0,0,'PHONE:',0,0,'C');
$pdf->Cell(0,0,'PHONE:'.$schphone,0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'CLASSLIST FORM 4 EXAM 1',0,0,'C');
//$pdf->Ln(8);
$pdf->Ln(0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(10,8,'______________________________________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);


$pdf->SetFont('times',"B",9);
$pdf->Cell(8,8,'POS', 0);
$pdf->Cell(10,8,'ADM ', 0);
$pdf->Cell(35,8,'NAME ', 0);
$pdf->Cell(13,8,'ENG', 0);
$pdf->Cell(13,8,'KIS', 0);
$pdf->Cell(13,8,'MAT', 0);
$pdf->Cell(13,8,'BIO', 0);
$pdf->Cell(13,8,'CHEM', 0);
$pdf->Cell(13,8,'PHY', 0);
$pdf->Cell(13,8,'GEO', 0);
$pdf->Cell(13,8,'HIS', 0);
$pdf->Cell(13,8,'CRE', 0);
$pdf->Cell(13,8,'AGRI', 0);
$pdf->Cell(13,8,'BUS', 0);
$pdf->Cell(13,8,'COMP', 0);
$pdf->Cell(13,8,'MUS', 0);
$pdf->Cell(13,8,'TOTAL', 0);
$pdf->Cell(13,8,'AVG', 0);
//$pdf->Cell(13,8,'GRADE', 0);
$pdf->Cell(13,8,'K.C.P.E: ', 0);
$sqlpos2= mysqli_query($link, "select * from tbl_positonsf4t3 where class='form 4' ORDER BY p1 ASC ");
	while ($row = mysqli_fetch_array($sqlpos2)) {
		$stdadm=$row['adm'];
		$stdname=$row['name'];
		$ps1=$row["p1"];
		$ps2=$row["p2"];
		$ps3=$row["p3"];
	    $ps4=$row["p4"];
$stddetails = mysqli_query($link,"select * from tbl_students  where adm='$stdadm' ");
while($row = mysqli_fetch_array($stddetails)){
        $adm=$row['adm'];
		$name=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}			
//---------------------------results select start---------------------------
include"subjects.php";
//----------------------------------------results select end-------------------------
//-------------------------------diaplay results start-----------------------------------------------	
$pdf->Ln(6);	
$pdf->SetFont('times',"",9);
$pdf->Cell(8,8,$ps1, 0);
//$pdf->Cell(8,8,$pdf->PageNo(),0);
$pdf->Cell(8,8,$stdadm, 0);
$pdf->Cell(37,8,$stdname , 0);
$pdf->Cell(4,8,$engex1, 0);
$pdf->Cell(9,8,$engg1, 0);
$pdf->Cell(4,8,$kisex1, 0);
$pdf->Cell(9,8,$kisg1, 0);
$pdf->Cell(4,8,$matex1, 0);
$pdf->Cell(9,8,$matg1, 0);
$pdf->Cell(4,8,$bioex1, 0);
$pdf->Cell(9,8,$biog1, 0);
$pdf->Cell(4,8,$chemex1, 0);
$pdf->Cell(9,8,$chemg1, 0);
$pdf->Cell(4,8,$phyex1, 0);
$pdf->Cell(9,8,$phyg1, 0);
$pdf->Cell(4,8,$geoex1, 0);
$pdf->Cell(9,8,$geog1, 0);
$pdf->Cell(4,8,$hisex1, 0);
$pdf->Cell(9,8,$hisg1, 0);
$pdf->Cell(4,8,$creex1, 0);
$pdf->Cell(9,8,$creg1, 0);
$pdf->Cell(4,8,$agriex1, 0);
$pdf->Cell(9,8,$agrig1, 0);
$pdf->Cell(4,8,$busex1, 0);
$pdf->Cell(9,8,$busg1, 0);
/*$pdf->Cell(4,8,$compex1, 0);
$pdf->Cell(9,8,$compg1, 0);
$pdf->Cell(4,8,$musex1, 0);
$pdf->Cell(10,8,$musg1, 0);*/
$pdf->Cell(4,8,' ', 0);
$pdf->Cell(9,8,' ', 0);
$pdf->Cell(4,8,' ', 0);
$pdf->Cell(10,8,' ', 0);

$pdf->Cell(12,8,$total1, 0);
$pdf->Cell(8,8,$mean1, 0);
$pdf->Cell(8,8,$gr1, 0);
$pdf->Cell(-243,8,$stdkcpe, 0);

$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

}
include"averages.php";
$pdf->Ln(6);
$pdf->Cell(53,8,'SUBJECT AVERAGES', 0);
$pdf->Cell(13,8,$engAVG1, 0);
$pdf->Cell(13,8,$kisAVG1 , 0);
$pdf->Cell(13,8,$matAVG1, 0);
$pdf->Cell(13,8,$bioAVG1, 0);
$pdf->Cell(13,8,$chemAVG1, 0);
$pdf->Cell(13,8,$phyAVG1, 0);
$pdf->Cell(13,8,$geoAVG1, 0);
$pdf->Cell(13,8,$hisAVG1, 0);
$pdf->Cell(13,8,$creAVG1, 0);
$pdf->Cell(13,8,$agriAVG1, 0);
$pdf->Cell(13,8,$busAVG1, 0);
$pdf->Cell(13,8,'  ', 0);
$pdf->Cell(13,8,'  ', 0);
$pdf->Cell(14,8,'  ', 0);
$pdf->Cell(14,8,$classAVG1, 0);
$pdf->Output();
?>