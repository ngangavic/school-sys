<?php
include_once 'connection.php';
//$get_id = $_GET['id'];
if(isset($_POST['print'])){
$stdadm= $_POST['searchAdm'];
$name= $_POST['searchName'];
$stddetails = mysqli_query($link,"select * from tbl_students where adm='$stdadm' ");
while($row = mysqli_fetch_array($stddetails)){
        $stdadm=$row['adm'];
		$stdname=$row['name'];
		$stdkcpe=$row['kcpe'];
		$stdhs=$row['house'];
}	

include"subjects.php";
include"subjectsf1t2.php";
include"subjectsf1t3.php";
include"subjectsf2t1.php";
include"subjectsf2t2.php";
include"subjectsf2t3.php";
include"subjectsf3t1.php";
include"subjectsf3t2.php";
include"subjectsf3t3.php";
include"subjectsf4t1.php";
include"subjectsf4t2.php";
include"subjectsf4t3.php";
}
?>
<?php 	
require('../pdf/fpdf.php');
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
$pdf->Cell(0,0,'RESULTS',0,0,'C');
//$pdf->Ln(8);
$pdf->Ln(0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(10,8,'______________________________________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);


$pdf->SetFont('times',"B",11);
//$pdf->Cell(8,8,'POS', 0);
$pdf->Cell(30,8,'ADM :'.$stdadm, 0);
$pdf->Cell(60,8,'NAME: '.$stdname, 0);
$pdf->Cell(13,8,'K.C.P.E: '.$stdkcpe, 0);

$pdf->SetFont('times',"B",9);
$pdf->Ln(8);
$pdf->Cell(35,8,'SUBJECTS', 0);
$pdf->Cell(50,8,'FORM 1', 0);
$pdf->Cell(50,8,'FORM 2', 0);
$pdf->Cell(50,8,'FORM 3', 0);
$pdf->Cell(13,8,'FORM 4', 0);
$pdf->Ln(8);

$pdf->Cell(35,8,'', 0);
$pdf->Cell(15,8,'TERM 1', 0);
$pdf->Cell(15,8,'TERM 2', 0);
$pdf->Cell(20,8,'TERM 3', 0);

$pdf->Cell(15,8,'TERM 1', 0);
$pdf->Cell(15,8,'TERM 2', 0);
$pdf->Cell(20,8,'TERM 3', 0);

$pdf->Cell(15,8,'TERM 1', 0);
$pdf->Cell(15,8,'TERM 2', 0);
$pdf->Cell(20,8,'TERM 3', 0);

$pdf->Cell(15,8,'TERM 1', 0);
$pdf->Cell(15,8,'TERM 2', 0);
$pdf->Cell(20,8,'TERM 3', 0);
$pdf->Ln(8);


$pdf->Cell(36,8,'ENGLISH', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$engex4f1t1.$engg4f1t1, 0);
$pdf->Cell(15,8,$engex4f1t2.$engg4f1t2, 0);
$pdf->Cell(20,8,$engex4f1t3.$engg4f1t3, 0);
$pdf->Cell(15,8,$engex4f2t1.$engg4f2t1, 0);
$pdf->Cell(15,8,$engex4f2t2.$engg4f2t2, 0);
$pdf->Cell(20,8,$engex4f2t3.$engg4f2t3, 0);
$pdf->Cell(15,8,$engex4f3t1.$engg4f3t1, 0);
$pdf->Cell(15,8,$engex4f3t2.$engg4f3t2, 0);
$pdf->Cell(20,8,$engex4f3t3.$engg4f3t3, 0);
$pdf->Cell(15,8,$engex4f4t1.$engg4f4t1, 0);
$pdf->Cell(15,8,$engex4f4t2.$engg4f4t2, 0);
$pdf->Cell(-216,8,$engex4f4t2.$engg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'KISWAHILI', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$kisex4f1t1.$kisg4f1t1, 0);
$pdf->Cell(15,8,$kisex4f1t2.$kisg4f1t2, 0);
$pdf->Cell(20,8,$kisex4f1t3.$kisg4f1t3, 0);
$pdf->Cell(15,8,$kisex4f2t1.$kisg4f2t1, 0);
$pdf->Cell(15,8,$kisex4f2t2.$kisg4f2t2, 0);
$pdf->Cell(20,8,$kisex4f2t3.$kisg4f2t3, 0);
$pdf->Cell(15,8,$kisex4f3t1.$kisg4f3t1, 0);
$pdf->Cell(15,8,$kisex4f3t2.$kisg4f3t2, 0);
$pdf->Cell(20,8,$kisex4f3t3.$kisg4f3t3, 0);
$pdf->Cell(15,8,$kisex4f4t1.$kisg4f4t1, 0);
$pdf->Cell(15,8,$kisex4f4t2.$kisg4f4t2, 0);
$pdf->Cell(-216,8,$kisex4f4t3.$kisg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'MATHEMATICS', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$matex4f1t1.$matg4f1t1, 0);
$pdf->Cell(15,8,$matex4f1t2.$matg4f1t2, 0);
$pdf->Cell(20,8,$matex4f1t3.$matg4f1t3, 0);
$pdf->Cell(15,8,$matex4f2t1.$matg4f2t1, 0);
$pdf->Cell(15,8,$matex4f2t2.$matg4f2t2, 0);
$pdf->Cell(20,8,$matex4f2t3.$matg4f2t3, 0);
$pdf->Cell(15,8,$matex4f3t1.$matg4f3t1, 0);
$pdf->Cell(15,8,$matex4f3t2.$matg4f3t2, 0);
$pdf->Cell(20,8,$matex4f3t3.$matg4f3t3, 0);
$pdf->Cell(15,8,$matex4f4t1.$matg4f4t1, 0);
$pdf->Cell(15,8,$matex4f4t2.$matg4f4t2, 0);
$pdf->Cell(-216,8,$matex4f4t3.$matg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'BIOLOGY', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$bioex4f1t1.$biog4f1t1, 0);
$pdf->Cell(15,8,$bioex4f1t2.$biog4f1t2, 0);
$pdf->Cell(20,8,$bioex4f1t3.$biog4f1t3, 0);
$pdf->Cell(15,8,$bioex4f2t1.$biog4f2t1, 0);
$pdf->Cell(15,8,$bioex4f2t2.$biog4f2t2, 0);
$pdf->Cell(20,8,$bioex4f2t3.$biog4f2t3, 0);
$pdf->Cell(15,8,$bioex4f3t1.$biog4f2t1, 0);
$pdf->Cell(15,8,$bioex4f3t2.$biog4f3t2, 0);
$pdf->Cell(20,8,$bioex4f3t3.$biog4f3t3, 0);
$pdf->Cell(15,8,$bioex4f4t1.$biog4f4t1, 0);
$pdf->Cell(15,8,$bioex4f4t2.$biog4f4t2, 0);
$pdf->Cell(-216,8,$bioex4f4t3.$biog4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'PHYSICS', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$phyex4f1t1.$phyg4f1t1, 0);
$pdf->Cell(15,8,$phyex4f1t2.$phyg4f1t2, 0);
$pdf->Cell(20,8,$phyex4f1t3.$phyg4f1t3, 0);
$pdf->Cell(15,8,$phyex4f2t1.$phyg4f2t1, 0);
$pdf->Cell(15,8,$phyex4f2t2.$phyg4f2t2, 0);
$pdf->Cell(20,8,$phyex4f2t3.$phyg4f2t3, 0);
$pdf->Cell(15,8,$phyex4f3t1.$phyg4f3t1, 0);
$pdf->Cell(15,8,$phyex4f3t2.$phyg4f3t2, 0);
$pdf->Cell(20,8,$phyex4f3t3.$phyg4f3t3, 0);
$pdf->Cell(15,8,$phyex4f4t1.$phyg4f4t1, 0);
$pdf->Cell(15,8,$phyex4f4t2.$phyg4f4t2, 0);
$pdf->Cell(-216,8,$phyex4f4t3.$phyg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'CHEMISTRY', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$chemex4f1t1.$chemg4f1t1, 0);
$pdf->Cell(15,8,$chemex4f1t2.$chemg4f1t2, 0);
$pdf->Cell(20,8,$chemex4f1t3.$chemg4f1t3, 0);
$pdf->Cell(15,8,$chemex4f2t1.$chemg4f2t1, 0);
$pdf->Cell(15,8,$chemex4f2t2.$chemg4f2t2, 0);
$pdf->Cell(20,8,$chemex4f2t3.$chemg4f2t3, 0);
$pdf->Cell(15,8,$chemex4f3t1.$chemg4f3t1, 0);
$pdf->Cell(15,8,$chemex4f3t2.$chemg4f3t2, 0);
$pdf->Cell(20,8,$chemex4f3t3.$chemg4f3t3, 0);
$pdf->Cell(15,8,$chemex4f4t1.$chemg4f4t1, 0);
$pdf->Cell(15,8,$chemex4f4t2.$chemg4f4t2, 0);
$pdf->Cell(-216,8,$chemex4f4t3.$chemg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'HISTORY', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$hisex4f1t1.$hisg4f1t1, 0);
$pdf->Cell(15,8,$hisex4f1t2.$hisg4f1t2, 0);
$pdf->Cell(20,8,$hisex4f1t3.$hisg4f1t3, 0);
$pdf->Cell(15,8,$hisex4f2t1.$hisg4f2t1, 0);
$pdf->Cell(15,8,$hisex4f2t2.$hisg4f2t2, 0);
$pdf->Cell(20,8,$hisex4f2t3.$hisg4f2t3, 0);
$pdf->Cell(15,8,$hisex4f3t1.$hisg4f3t1, 0);
$pdf->Cell(15,8,$hisex4f3t2.$hisg4f3t2, 0);
$pdf->Cell(20,8,$hisex4f3t3.$hisg4f3t3, 0);
$pdf->Cell(15,8,$hisex4f4t1.$hisg4f4t1, 0);
$pdf->Cell(15,8,$hisex4f4t2.$hisg4f4t2, 0);
$pdf->Cell(-216,8,$hisex4f4t3.$hisg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'CHRISTIAN R E', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$creex4f1t1.$creg4f1t1, 0);
$pdf->Cell(15,8,$creex4f1t2.$creg4f1t2, 0);
$pdf->Cell(20,8,$creex4f1t3.$creg4f1t3, 0);
$pdf->Cell(15,8,$creex4f2t1.$creg4f2t1, 0);
$pdf->Cell(15,8,$creex4f2t2.$creg4f2t2, 0);
$pdf->Cell(20,8,$creex4f2t3.$creg4f2t3, 0);
$pdf->Cell(15,8,$creex4f3t1.$creg4f3t1, 0);
$pdf->Cell(15,8,$creex4f3t2.$creg4f3t2, 0);
$pdf->Cell(20,8,$creex4f3t3.$creg4f3t3, 0);
$pdf->Cell(15,8,$creex4f4t1.$creg4f4t1, 0);
$pdf->Cell(15,8,$creex4f4t2.$creg4f4t2, 0);
$pdf->Cell(-216,8,$creex4f4t3.$creg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'GEOGRAPHY', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$geoex4f1t1.$geog4f1t1, 0);
$pdf->Cell(15,8,$geoex4f1t2.$geog4f1t2, 0);
$pdf->Cell(20,8,$geoex4f1t3.$geog4f1t3, 0);
$pdf->Cell(15,8,$geoex4f2t1.$geog4f2t1, 0);
$pdf->Cell(15,8,$geoex4f2t2.$geog4f2t2, 0);
$pdf->Cell(20,8,$geoex4f2t3.$geog4f2t3, 0);
$pdf->Cell(15,8,$geoex4f3t1.$geog4f3t1, 0);
$pdf->Cell(15,8,$geoex4f3t2.$geog4f3t2, 0);
$pdf->Cell(20,8,$geoex4f3t3.$geog4f3t3, 0);
$pdf->Cell(15,8,$geoex4f4t1.$geog4f4t1, 0);
$pdf->Cell(15,8,$geoex4f4t2.$geog4f4t2, 0);
$pdf->Cell(-216,8,$geoex4f4t3.$geog4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'AGRICULTURE', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$agriex4f1t1.$agrig4f1t1, 0);
$pdf->Cell(15,8,$agriex4f1t2.$agrig4f1t2, 0);
$pdf->Cell(20,8,$agriex4f1t3.$agrig4f1t3, 0);
$pdf->Cell(15,8,$agriex4f2t1.$agrig4f2t1, 0);
$pdf->Cell(15,8,$agriex4f2t2.$agrig4f2t2, 0);
$pdf->Cell(20,8,$agriex4f2t3.$agrig4f2t3, 0);
$pdf->Cell(15,8,$agriex4f3t1.$agrig4f3t1, 0);
$pdf->Cell(15,8,$agriex4f3t2.$agrig4f3t2, 0);
$pdf->Cell(20,8,$agriex4f3t3.$agrig4f3t3, 0);
$pdf->Cell(15,8,$agriex4f4t1.$agrig4f4t1, 0);
$pdf->Cell(15,8,$agriex4f4t2.$agrig4f4t2, 0);
$pdf->Cell(-216,8,$agriex4f4t3.$agrig4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'BUSINESS', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$busex4f1t1.$busg4f1t1, 0);
$pdf->Cell(15,8,$busex4f1t2.$busg4f1t2, 0);
$pdf->Cell(20,8,$busex4f1t3.$busg4f1t3, 0);
$pdf->Cell(15,8,$busex4f2t1.$busg4f2t1, 0);
$pdf->Cell(15,8,$busex4f2t2.$busg4f2t2, 0);
$pdf->Cell(20,8,$busex4f2t3.$busg4f2t3, 0);
$pdf->Cell(15,8,$busex4f3t1.$busg4f3t1, 0);
$pdf->Cell(15,8,$busex4f3t2.$busg4f3t2, 0);
$pdf->Cell(20,8,$busex4f3t3.$busg4f3t3, 0);
$pdf->Cell(15,8,$busex4f4t1.$busg4f4t1, 0);
$pdf->Cell(15,8,$busex4f4t2.$busg4f4t2, 0);
$pdf->Cell(-216,8,$busex4f4t3.$busg4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'TOTAL', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$total4f1t1, 0);
$pdf->Cell(15,8,$total4f1t2, 0);
$pdf->Cell(20,8,$total4f1t3, 0);
$pdf->Cell(15,8,$total4f2t1, 0);
$pdf->Cell(15,8,$total4f2t2, 0);
$pdf->Cell(20,8,$total4f2t3, 0);
$pdf->Cell(15,8,$total4f3t1, 0);
$pdf->Cell(15,8,$total4f3t2, 0);
$pdf->Cell(20,8,$total4f3t3, 0);
$pdf->Cell(15,8,$total4f4t1, 0);
$pdf->Cell(15,8,$total4f4t2, 0);
$pdf->Cell(-216,8,$total4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'AVERAGE', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$mean4f1t1.$gr4f1t1, 0);
$pdf->Cell(15,8,$mean4f1t2.$gr4f1t2, 0);
$pdf->Cell(20,8,$mean4f1t3.$gr4f1t3, 0);
$pdf->Cell(15,8,$mean4f2t1.$gr4f2t1, 0);
$pdf->Cell(15,8,$mean4f2t2.$gr4f2t2, 0);
$pdf->Cell(20,8,$mean4f2t3.$gr4f2t3, 0);
$pdf->Cell(15,8,$mean4f3t1.$gr4f3t1, 0);
$pdf->Cell(15,8,$mean4f3t2.$gr4f3t2, 0);
$pdf->Cell(20,8,$mean4f3t3.$gr4f3t3, 0);
$pdf->Cell(15,8,$mean4f4t1.$gr4f4t1, 0);
$pdf->Cell(15,8,$mean4f4t2.$gr4f4t2, 0);
$pdf->Cell(-216,8,$mean4f4t3.$gr4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Ln(6);
$pdf->SetFont('times',"B",9);
$pdf->Cell(36,8,'POSITION', 0);
$pdf->SetFont('times',"",9);
$pdf->Cell(15,8,$p4f1t1, 0);
$pdf->Cell(15,8,$p4f1t2, 0);
$pdf->Cell(20,8,$p4f1t3, 0);
$pdf->Cell(15,8,$p4f2t1, 0);
$pdf->Cell(15,8,$p4f2t2, 0);
$pdf->Cell(20,8,$p4f2t3, 0);
$pdf->Cell(15,8,$p4f3t1, 0);
$pdf->Cell(15,8,$p4f3t2, 0);
$pdf->Cell(20,8,$p4f3t3, 0);
$pdf->Cell(15,8,$p4f4t1, 0);
$pdf->Cell(15,8,$p4f4t2, 0);
$pdf->Cell(-216,8,$p4f4t3, 0);
$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);


/*$stddetails = mysqli_query($link,"select * from tbl_students where class='form 1' ");
while($row = mysqli_fetch_array($stddetails)){*/
	    	
		//$p1=1;$p1++;


//---------------------------results select start---------------------------

//----------------------------------------results select end-------------------------
//-------------------------------diaplay results start-----------------------------------------------	


$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);

$pdf->Output();
?>