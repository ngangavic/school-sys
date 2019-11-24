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
$pdf->Cell(0,0,'CLASSLIST FORM 2 AVERAGE',0,0,'C');
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
$sqlpos2= mysqli_query($link, "select * from tbl_positonsf2t2 where class='form 2' ORDER BY p4 ASC ");
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
$pdf->Cell(8,8,$ps4, 0);
//$pdf->Cell(8,8,$pdf->PageNo(),0);
$pdf->Cell(8,8,$stdadm, 0);
$pdf->Cell(37,8,$stdname , 0);
$pdf->Cell(4,8,$engex4, 0);
$pdf->Cell(9,8,$engg4, 0);
$pdf->Cell(4,8,$kisex4, 0);
$pdf->Cell(9,8,$kisg4, 0);
$pdf->Cell(4,8,$matex4, 0);
$pdf->Cell(9,8,$matg4, 0);
$pdf->Cell(4,8,$bioex4, 0);
$pdf->Cell(9,8,$biog4, 0);
$pdf->Cell(4,8,$chemex4, 0);
$pdf->Cell(9,8,$chemg4, 0);
$pdf->Cell(4,8,$phyex4, 0);
$pdf->Cell(9,8,$phyg4, 0);
$pdf->Cell(4,8,$geoex4, 0);
$pdf->Cell(9,8,$geog4, 0);
$pdf->Cell(4,8,$hisex4, 0);
$pdf->Cell(9,8,$hisg4, 0);
$pdf->Cell(4,8,$creex4, 0);
$pdf->Cell(9,8,$creg4, 0);
$pdf->Cell(4,8,$agriex4, 0);
$pdf->Cell(9,8,$agrig4, 0);
$pdf->Cell(4,8,$busex4, 0);
$pdf->Cell(9,8,$busg4, 0);
/*$pdf->Cell(4,8,$compex4, 0);
$pdf->Cell(9,8,$compg4, 0);
$pdf->Cell(4,8,$musex4, 0);
$pdf->Cell(10,8,$musg4, 0);*/
$pdf->Cell(4,8,' ', 0);
$pdf->Cell(9,8,' ', 0);
$pdf->Cell(4,8,' ', 0);
$pdf->Cell(10,8,' ', 0);

$pdf->Cell(15,8,$total4, 0);
$pdf->Cell(4,8,$mean4, 0);
$pdf->Cell(8,8,$gr4, 0);
$pdf->Cell(-243,8,$stdkcpe, 0);

$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

}
include"averages.php";
$pdf->Ln(6);
$pdf->Cell(53,8,'SUBJECT AVERAGES', 0);
$pdf->Cell(13,8,$engAVG4, 0);
$pdf->Cell(13,8,$kisAVG4 , 0);
$pdf->Cell(13,8,$matAVG4, 0);
$pdf->Cell(13,8,$bioAVG4, 0);
$pdf->Cell(13,8,$chemAVG4, 0);
$pdf->Cell(13,8,$phyAVG4, 0);
$pdf->Cell(13,8,$geoAVG4, 0);
$pdf->Cell(13,8,$hisAVG4, 0);
$pdf->Cell(13,8,$creAVG4, 0);
$pdf->Cell(13,8,$agriAVG4, 0);
$pdf->Cell(13,8,$busAVG4, 0);
$pdf->Cell(13,8,'  ', 0);
$pdf->Cell(13,8,'  ', 0);
$pdf->Cell(14,8,'  ', 0);
$pdf->Cell(14,8,$classAVG4, 0);
$pdf->Output();
?>