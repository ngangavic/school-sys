<?php 
//Database Connection
include_once '../../connection.php';
$stddetails = mysqli_query($link,"select * from tbl_students where class='form 3' ");	
?>
<?php 
require('../../pdf/fpdf.php');
$pdf = new FPDF();
while($row = mysqli_fetch_array($stddetails)){
	    $stdadm=$row['adm'];
		$stdname=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
$pdf->AddPage();
$pdf->SetFont('times',"B",14);
//$pdf->Image('css/images/logo.GIF',90,10,30);
$pdf->Ln(8);
$pdf->Ln(8);
	       $query = mysqli_query($link, "select * from tbl_school ") ;
	       while($row = mysqli_fetch_array($query)){
		   $schname = $row['name'];
		   $schbox=$row['box'];
		   $schlocation=$row['location'];
		   $schphone=$row['phone'];
		   $opendate=$row['open_date'];
		   $closedate=$row['close_date'];
		   }		  
$pdf->SetFont('times',"B",14);
$pdf->Cell(0,0,$schname,0,0,'C');
$pdf->Ln(8);
$pdf->Cell(0,0,'P.O BOX'.$schbox.$schlocation,0,0,'C');
//$pdf->Cell(-106,0,$schbox,0,0,'C');
//$pdf->Cell(140,0,$schlocation,0,0,'C');
$pdf->Ln(8);
//$pdf->Cell(0,0,'PHONE:',0,0,'C');
$pdf->Cell(0,0,'PHONE:'.$schphone,0,0,'C');
$pdf->Ln(8);
$pdf->Cell(0,0,'REPORT FORM EXAM 2',0,0,'C');
//$pdf->Ln(8);
$pdf->Ln(0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(10,8,'______________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);
//---------------------------results select start---------------------------
include"subjects.php";
//----------------------------------------results select end-------------------------
//-----------------------------------------teachers select---------------------------------------
include"subject teachers.php";
//--------------------------------teachers select end--------------------------------------------
//----------------------------------------graph selsect start------------------------------------------
include"graph select.php";
//---------------------------------------graph select end---------------------------------------

//-------------------------------diaplay results start-----------------------------------------------
$pdf->Cell(12,8,'NAME:', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(45,8,$stdname , 0);
//$pdf->Cell(30,8,$total1 , 0);
//$pdf->SetFont('times',"B",10);
//$pdf->Cell(20,8,'CLASS: ', 0);
//$pdf->SetFont('times',"",10);
//$pdf->Cell(30,8,$class, 0);
//$pdf->Cell(20,8,$Lastname, 0);

$pdf->SetFont('times',"B",10);
$pdf->Cell(26,8,'ADM NUMBER: ', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(8,8,$stdadm, 0);

$pdf->SetFont('times',"B",10);
$pdf->Cell(15,8,'K.C.P.E: ', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(8,8,$stdkcpe, 0);

$pdf->SetFont('times',"B",10);
$pdf->Cell(13,8,'CLASS: ', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(15,8,'FORM 3', 0);
//$pdf->Ln(8);

$pdf->SetFont('times',"B",10);
$pdf->Cell(13,8,'TERM: ', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(15,8,'TERM 3', 0);

$pdf->SetFont('times',"B",10);
$pdf->Cell(13,8,'YEAR: ', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(38,8,date("Y"), 0);
$pdf->Ln(8);

$pdf->SetFont('times',"B",10);
$pdf->Cell(14,8,'HOUSE: ', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(20,8,$stdhs, 0);
//$pdf->Ln(8);

$pdf->SetFont('times',"B",10);
$pdf->Cell(30,8,'STUDENT MEAN:', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(9,8,$mean2, 0);

$pdf->SetFont('times',"B",10);
$pdf->Cell(32,8,'STUDENT GRADE:', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(8,8,$gr2, 0);

$pdf->SetFont('times',"B",10);
$pdf->Cell(20,8,'POSITION:', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(-133,8,$p2, 0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(30,8,'______________________________________________________',0);

$pdf->Ln(8);
$pdf->SetFont('times',"B",10);
$pdf->Cell(28,8,'SUBJECT', 0);
$pdf->SetFont('times',"",10);

$pdf->SetFont('times',"B",10);
$pdf->Cell(20,8,'EXAM 1: ', 0);
$pdf->SetFont('times',"",10);

$pdf->SetFont('times',"B",10);
$pdf->Cell(20,8,'EXAM 2: ', 0);
$pdf->SetFont('times',"",10);

$pdf->SetFont('times',"B",10);
$pdf->Cell(20,8,'EXAM 3: ', 0);
$pdf->SetFont('times',"",10);

$pdf->SetFont('times',"B",10);
$pdf->Cell(25,8,'AVERAGE: ', 0);
$pdf->SetFont('times',"",10);

$pdf->SetFont('times',"B",10);
$pdf->Cell(38,8,'REMARKS: ', 0);
$pdf->SetFont('times',"",10);

$pdf->SetFont('times',"B",10);
$pdf->Cell(-151,8,'TEACHER: ', 0);
$pdf->SetFont('times',"B",15);
$pdf->Cell(10,8,'________________________________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'ENGLISH', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$engex2, 0);
$pdf->Cell(16,8,$engg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$engremarks2, 0);
$pdf->Cell(-152,8,$sbjeng,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'KISWAHILI', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$kisex2, 0);
$pdf->Cell(16,8,$kisg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$kisremarks2, 0);
$pdf->Cell(-152,8,$sbjkis,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'MATHS', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$matex2, 0);
$pdf->Cell(16,8,$matg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$matremarks2, 0);
$pdf->Cell(-152,8,$sbjmat,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$cem=1;
$single=13;
$bi=12;
$tri=123;
$geo=3;
$his=4;
$cre=5;
$humtri=345;
$humbi1=34;
$humb2=45;
$humb3=35;
$agri=6;
$bus=8;
$comp=7;
$music=9;

$query = mysqli_query($link, "select * from tbl_subjects where adm='$stdadm' ") ;
	while ($row = mysqli_fetch_array($query)) {
	$app=$row["app"];
	$hum=$row["hum"];
	$sci=$row["sci"];
	}
if ($sci ==$bi) {
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'BIOLOGY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$bioex2, 0);
$pdf->Cell(16,8,$biog2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$bioremarks2, 0);
$pdf->Cell(-152,8,$sbjkis,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CHEMISTRY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$chemex2, 0);
$pdf->Cell(16,8,$chemg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$chemremarks2, 0);
$pdf->Cell(-152,8,$sbjchem,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);//}
}elseif($sci ==$tri){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'PHYSICS', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$phyex2, 0);
$pdf->Cell(16,8,$phyg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$phyremarks2, 0);
$pdf->Cell(-152,8,$sbjphy,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'BIOLOGY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$bioex2, 0);
$pdf->Cell(16,8,$biog2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$bioremarks2, 0);
$pdf->Cell(-152,8,$sbjbio,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CHEMISTRY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$chemex2, 0);
$pdf->Cell(16,8,$chemg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$chemremarks2, 0);
$pdf->Cell(-152,8,$sbjchem,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($sci ==$single){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'PHYSICS', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$phyex2, 0);
$pdf->Cell(16,8,$phyg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$phyremarks2, 0);
$pdf->Cell(-152,8,$sbjphy,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CHEMISTRY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$chemex2, 0);
$pdf->Cell(16,8,$chemg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$chemremarks2, 0);
$pdf->Cell(-152,8,$sbjchem,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);}
else{
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'No results', 0);
$pdf->Ln(8);
}

if ($hum ==$humtri) {
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CRE', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$creex2, 0);
$pdf->Cell(16,8,$creg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$creremarks2, 0);
$pdf->Cell(-152,8,$sbjcre,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'GEOGRAPHY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$geoex2, 0);
$pdf->Cell(16,8,$geog2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$georemarks2, 0);
$pdf->Cell(-152,8,$sbjgeo,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'HISTORY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$hisex2, 0);
$pdf->Cell(16,8,$hisg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$hisremarks2, 0);
$pdf->Cell(-152,8,$sbjhis,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($hum==$humbi1){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'GEOGRAPHY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$geoex2, 0);
$pdf->Cell(16,8,$geog2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$georemarks2, 0);
$pdf->Cell(-152,8,$sbjgeo,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'HISTORY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$hisex2, 0);
$pdf->Cell(16,8,$hisg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$hisremarks2, 0);
$pdf->Cell(-152,8,$sbjhis,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($hum==$humb2){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'HISTORY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$hisex2, 0);
$pdf->Cell(16,8,$hisg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$hisremarks2, 0);
$pdf->Cell(-152,8,$sbjhis,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CRE', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$creex2, 0);
$pdf->Cell(16,8,$creg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$creremarks2, 0);
$pdf->Cell(-152,8,$sbjcre,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($hum==$humb3){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CRE', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$creex2, 0);
$pdf->Cell(16,8,$creg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$creremarks2, 0);
$pdf->Cell(-152,8,$sbjcre,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);

$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'GEOGRAPHY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$geoex2, 0);
$pdf->Cell(16,8,$geog2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$georemarks2, 0);
$pdf->Cell(-152,8,$sbjgeo,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($hum==$geo){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'GEOGRAPHY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$geoex2, 0);
$pdf->Cell(16,8,$geog2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$georemarks2, 0);
$pdf->Cell(-152,8,$sbjgeo,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($hum==$his){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'HISTORY', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$hisex2, 0);
$pdf->Cell(16,8,$hisg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$hisremarks2, 0);
$pdf->Cell(-152,8,$sbjhis,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}elseif($hum==$cre){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'CRE', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$creex2, 0);
$pdf->Cell(16,8,$creg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$creremarks2, 0);
$pdf->Cell(-152,8,$sbjcre,0);
$pdf->Cell(30,8,'_________________________________________________________________________________________________________',0);
$pdf->Ln(6);
}else{
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'No results', 0);
$pdf->Ln(8);
}
if($app==$agri){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'AGRICULTURE', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$agriex2, 0);
$pdf->Cell(16,8,$agrig2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$agriremarks2, 0);
$pdf->Cell(-152,8,$sbjagri,0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(30,8,'______________________________________________________',0);
$pdf->Ln(7);
}elseif($app==$comp){
$pdf->SetFont('times',"U",10);
$pdf->Cell(28,8,'COMPUTER', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$compex2, 0);
$pdf->Cell(16,8,$compg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$compremarks2, 0);
//$pdf->Cell(-152,8,$sbjcomp,0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(30,8,'______________________________________________________',0);
$pdf->Ln(7);
}elseif($app==$bus){
$pdf->SetFont('times',"U",10);
$pdf->Cell(28,8,'BUSINESS', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$busex2, 0);
$pdf->Cell(16,8,$busg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$busremarks2, 0);
$pdf->Cell(-152,8,$sbjbus,0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(30,8,'______________________________________________________',0);
$pdf->Ln(7);
}elseif($app==$music){
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'MUSIC',0);
$pdf->SetFont('times',"",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,$musex2, 0);
$pdf->Cell(16,8,$musg2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(40,8,$musremarks2, 0);
$pdf->Cell(-152,8,$sbjkis,0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(30,8,'______________________________________________________',0);
$pdf->Ln(7);
}else{
$pdf->SetFont('times',"",10);
$pdf->Cell(28,8,'No results                                                                                                                                                ', 0);
$pdf->Ln(8);
}
$pdf->SetFont('times',"B",10);
$pdf->Cell(28,8,'TOTAL', 0);
$pdf->SetFont('times',"",10);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(20,8,$total2, 0);
$pdf->Cell(20,8,'', 0);
$pdf->Cell(-88,8,'', 0);
$pdf->Cell(30,8,'____________________________________________________________________________________________________________',0);
$pdf->Ln(6);
$pdf->SetFont('times',"B",10);
$pdf->Cell(28,8,'MEAN', 0);
$pdf->SetFont('times',"B",10);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(8,8,$mean2, 0);
$pdf->Cell(16,8,$gr2, 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(16,8,'', 0);
$pdf->Cell(4,8,'', 0);
$pdf->Cell(-96,8,'', 0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(30,8,'______________________________________________________',0);
//$pdf->Ln(6);
$pdf->Ln(10);
//-------------------------------results display end-------------------------

//------------------------------graph select start---------------------------
$pdf->SetFont('times',"B",10);
$pdf->Cell(0,0,'PERFORMANCE TREND',0,0,'C');
//position
$chartX=10;
$chartY=150;
//dimension
$chartWidth=180;
$chartHeight=50;
//padding
$chartTopPadding=10;
$chartLeftPadding=20;
$chartBottomPadding=10;
$chartRightPadding=5;
//chart box
$chartBoxX=$chartX+$chartLeftPadding;
$chartBoxY=$chartY+$chartTopPadding;
$chartBoxWidth=$chartWidth-$chartLeftPadding-$chartRightPadding;
$chartBoxHeight=$chartHeight-$chartTopPadding-$chartBottomPadding;
//bar width
$barWidth=5;
//chart data
$data=Array(
	'F1T1'=>[
	     'color'=>[0,0,0],
		 'value'=>$p2
		 ],
	'F1T2'=>[
	     'color'=>[255,0,0],
		 'value'=>$p6
		 ],
	'F1T3'=>[
	     'color'=>[0,255,0],
		 'value'=>$p10
		 ],
	'F2T1'=>[
	     'color'=>[0,0,255],
		 'value'=>$p14
		 ],
	'F2T2'=>[
	     'color'=>[255,255,0],
		 'value'=>$p18
		 ],
	'F2T3'=>[
	     'color'=>[0,255,255],
		 'value'=>$p22
		 ],
	'F3T1'=>[
	     'color'=>[255,0,255],
		 'value'=>$t26
		 ],
	'F3T2'=>[
	     'color'=>[192,192,192],
		 'value'=>$t30
		 ],
	'F3T3'=>[
	     'color'=>[255,255,255],
		 'value'=>$t34
		 ],
	'F4T1'=>[
	     'color'=>[160,160,160],
		 'value'=>0
		 ],
	'F4T2'=>[
	     'color'=>[200,200,200],
		 'value'=>0
		 ],
	'F4T3'=>[
	     'color'=>[128,0,0],
		 'value'=>0
		 ],
		 
);
//data max
$dataMax=12;	
foreach($data as $item){
	if($item['value']>$dataMax)$dataMax=$item['value'];
}
//data step
$dataStep=2;	
//set font,line width and color
$pdf->SetFont('Arial',"",9);
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0);
//chart boundary
$pdf->Rect($chartX,$chartY,$chartWidth,$chartHeight);
//vertical axis line
$pdf->line(
     $chartBoxX,
	 $chartBoxY,
	 $chartBoxX,
	 $chartBoxY+$chartBoxHeight
);
//horizontal axis line
$pdf->line(
     $chartBoxX-2,
	 $chartBoxY+$chartBoxHeight,
	 $chartBoxX+$chartBoxWidth,
	 $chartBoxY+$chartBoxHeight
);
//vertical axis
//calculate chart's y axis scale unit
$yAxisUnits=$chartBoxHeight / $dataMax;
//draw the vertical (y) axis labels
for($i=0 ; $i<=$dataMax ; $i+=$dataStep){
	//y position
	$yAxisPos=$chartBoxY + ($yAxisUnits * $i);
	//draw y axis lines
	$pdf->line(
	    $chartBoxX-2,
		$yAxisPos,
		$chartBoxX,
		$yAxisPos
	);
	//set cell position for y axis labels
	$pdf->SetXY($chartBoxX - $chartLeftPadding, $yAxisPos-2);
	//Write labels
	$pdf->Cell($chartLeftPadding-4,5,$dataMax-$i,0,0,'R');
}
//horizontal axis
//set cell position
$pdf->setXY($chartBoxX,$chartBoxY+$chartBoxHeight);
//cell's width
$xLabelWidth=$chartBoxWidth / count($data);
//$pdf->Cell($xLabelWidth,5,"TEST",1,0,'C');
//loop horizontal axis and draw the bars
$barXPos=0;
foreach($data as $itemName=>$item){
	//print the labels
	$pdf->cell($xLabelWidth,5,$itemName,0,0,'C');
	//drawing the bar
	//bar color
	$pdf->SetFillColor($item['color'][0],$item['color'][1],$item['color'][2]);
	//bar height
	$barHeight=$yAxisUnits * $item['value'];
	//bar x position
	$barX=($xLabelWidth/2)+($xLabelWidth * $barXPos);
	$barX=$barX-($barWidth/2);
	$barX=$barX+$chartBoxX;
	//bar y position
	$barY=$chartBoxHeight-$barHeight;
	$barY=$barY+$chartBoxY;
	//draw the bar
	$pdf->Rect($barX,$barY,$barWidth,$barHeight,'DF');
	//increment $barXPos
	$barXPos++;	
}

//-----------------------------graph select end-----------------------------
$pdf->Ln(8);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);
$pdf->Cell(28,8,'Class teacher remarks1:__________________________________________________________________________________', 0);
$pdf->Ln(8);
$pdf->Cell(35,8,'______________________________________________________________________________________________________', 0);

$pdf->Ln(8);
$pdf->SetFont('times',"B",10);
$pdf->Cell(33,8,'Principal remarks1:_____________________________________________________________________________________', 0);
$pdf->Ln(8);
$pdf->Cell(28,8,'______________________________________________________________________________________________________', 0);

}
$pdf->Output();
?>