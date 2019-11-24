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
$pdf->Cell(0,0,'CLASSLIST FORM 2 EXAM 3',0,0,'C');
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
$sqlpos2= mysqli_query($link, "select * from tbl_positonsf2t3 where class='form 2' ORDER BY p3 ASC ");
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
$pdf->Cell(8,8,$ps3, 0);
//$pdf->Cell(8,8,$pdf->PageNo(),0);
$pdf->Cell(8,8,$stdadm, 0);
$pdf->Cell(37,8,$stdname , 0);
$pdf->Cell(4,8,$engex3, 0);
$pdf->Cell(9,8,$engg3, 0);
$pdf->Cell(4,8,$kisex3, 0);
$pdf->Cell(9,8,$kisg3, 0);
$pdf->Cell(4,8,$matex3, 0);
$pdf->Cell(9,8,$matg3, 0);
$pdf->Cell(4,8,$bioex3, 0);
$pdf->Cell(9,8,$biog3, 0);
$pdf->Cell(4,8,$chemex3, 0);
$pdf->Cell(9,8,$chemg3, 0);
$pdf->Cell(4,8,$phyex3, 0);
$pdf->Cell(9,8,$phyg3, 0);
$pdf->Cell(4,8,$geoex3, 0);
$pdf->Cell(9,8,$geog3, 0);
$pdf->Cell(4,8,$hisex3, 0);
$pdf->Cell(9,8,$hisg3, 0);
$pdf->Cell(4,8,$creex3, 0);
$pdf->Cell(9,8,$creg3, 0);
$pdf->Cell(4,8,$agriex3, 0);
$pdf->Cell(9,8,$agrig3, 0);
$pdf->Cell(4,8,$busex3, 0);
$pdf->Cell(9,8,$busg3, 0);
/*$pdf->Cell(4,8,$compex3, 0);
$pdf->Cell(9,8,$compg3, 0);
$pdf->Cell(4,8,$musex3, 0);
$pdf->Cell(10,8,$musg3, 0);*/
$pdf->Cell(4,8,' ', 0);
$pdf->Cell(9,8,' ', 0);
$pdf->Cell(4,8,' ', 0);
$pdf->Cell(10,8,' ', 0);

$pdf->Cell(15,8,$total3, 0);
$pdf->Cell(4,8,$mean3, 0);
$pdf->Cell(8,8,$gr3, 0);
$pdf->Cell(-243,8,$stdkcpe, 0);

$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

}
include"averages.php";
$pdf->Ln(6);
$pdf->Cell(53,8,'SUBJECT AVERAGES', 0);
$pdf->Cell(13,8,$engAVG3, 0);
$pdf->Cell(13,8,$kisAVG3 , 0);
$pdf->Cell(13,8,$matAVG3, 0);
$pdf->Cell(13,8,$bioAVG3, 0);
$pdf->Cell(13,8,$chemAVG3, 0);
$pdf->Cell(13,8,$phyAVG3, 0);
$pdf->Cell(13,8,$geoAVG3, 0);
$pdf->Cell(13,8,$hisAVG3, 0);
$pdf->Cell(13,8,$creAVG3, 0);
$pdf->Cell(13,8,$agriAVG3, 0);
$pdf->Cell(13,8,$busAVG3, 0);
$pdf->Cell(13,8,'  ', 0);
$pdf->Cell(13,8,'  ', 0);
$pdf->Cell(14,8,'  ', 0);
$pdf->Cell(14,8,$classAVG3, 0);
$pdf->Output();
?>