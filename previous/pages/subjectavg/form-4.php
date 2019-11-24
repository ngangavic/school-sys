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
$pdf->Cell(0,0,'FORM 4 SUBJECT AVERAGES',0,0,'C');
$pdf->Ln(4);
$pdf->Cell(0,0,'YEAR:'.$year,0,0,'C');
//$pdf->Ln(8);
$pdf->Ln(0);
$pdf->SetFont('times',"B",20);
$pdf->Cell(10,8,'_______________________________________________________',0);
$pdf->Ln(8);
$pdf->SetFont('times',"B",10);		   

$pdf->SetFont('times',"B",15);
$pdf->Cell(30,8,'SUBJECT', 0);

$pdf->Cell(30,8,'TERM ', 0);
$pdf->Cell(30,8,'Exam 1 ', 0);
$pdf->Cell(30,8,'Exam 2', 0);
$pdf->Cell(30,8,'Exam 3', 0);
$pdf->Cell(13,8,'Avg', 0);
include"print4.php";
//english start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'ENGLISH', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$eng1f4t1, 0);
$pdf->Cell(30,8,$eng2f4t1 , 0);
$pdf->Cell(30,8,$eng3f4t1, 0);
$pdf->Cell(30,8,$eng4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$eng1f4t2, 0);
$pdf->Cell(30,8,$eng2f4t2 , 0);
$pdf->Cell(30,8,$eng3f4t2, 0);
$pdf->Cell(9,8,$eng4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$eng1f4t3, 0);
$pdf->Cell(30,8,$eng2f4t3 , 0);
$pdf->Cell(30,8,$eng3f4t3, 0);
$pdf->Cell(9,8,$eng4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//english end
//kiswahili start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'KISWAHILI', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$kis1f4t1, 0);
$pdf->Cell(30,8,$kis2f4t1 , 0);
$pdf->Cell(30,8,$kis3f4t1, 0);
$pdf->Cell(30,8,$kis4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$kis1f4t2, 0);
$pdf->Cell(30,8,$kis2f4t2 , 0);
$pdf->Cell(30,8,$kis3f4t2, 0);
$pdf->Cell(9,8,$kis4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$kis1f4t3, 0);
$pdf->Cell(30,8,$kis2f4t3 , 0);
$pdf->Cell(30,8,$kis3f4t3, 0);
$pdf->Cell(9,8,$kis4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//kiswahili end
//maths start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'MATHEMATICS', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$mat1f4t1, 0);
$pdf->Cell(30,8,$mat2f4t1 , 0);
$pdf->Cell(30,8,$mat3f4t1, 0);
$pdf->Cell(30,8,$mat4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$mat1f4t2, 0);
$pdf->Cell(30,8,$mat2f4t2 , 0);
$pdf->Cell(30,8,$mat3f4t2, 0);
$pdf->Cell(9,8,$mat4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$mat1f4t3, 0);
$pdf->Cell(30,8,$mat2f4t3 , 0);
$pdf->Cell(30,8,$mat3f4t3, 0);
$pdf->Cell(9,8,$mat4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//maths end
//biology start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'BIOLOGY', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$bio1f4t1, 0);
$pdf->Cell(30,8,$bio2f4t1 , 0);
$pdf->Cell(30,8,$bio3f4t1, 0);
$pdf->Cell(30,8,$bio4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$bio1f4t2, 0);
$pdf->Cell(30,8,$bio2f4t2 , 0);
$pdf->Cell(30,8,$bio3f4t2, 0);
$pdf->Cell(9,8,$bio4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$bio1f4t3, 0);
$pdf->Cell(30,8,$bio2f4t3 , 0);
$pdf->Cell(30,8,$bio3f4t3, 0);
$pdf->Cell(9,8,$bio4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//biology end
//chemistry start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'CHEMISTRY', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$chem1f4t1, 0);
$pdf->Cell(30,8,$chem2f4t1 , 0);
$pdf->Cell(30,8,$chem3f4t1, 0);
$pdf->Cell(30,8,$chem4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$chem1f4t2, 0);
$pdf->Cell(30,8,$chem2f4t2 , 0);
$pdf->Cell(30,8,$chem3f4t2, 0);
$pdf->Cell(9,8,$chem4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$chem1f4t3, 0);
$pdf->Cell(30,8,$chem2f4t3 , 0);
$pdf->Cell(30,8,$chem3f4t3, 0);
$pdf->Cell(9,8,$chem4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//chemistry end
//geography start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'GEOGRAPHY', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$geo1f4t1, 0);
$pdf->Cell(30,8,$geo2f4t1 , 0);
$pdf->Cell(30,8,$geo3f4t1, 0);
$pdf->Cell(30,8,$geo4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$geo1f4t2, 0);
$pdf->Cell(30,8,$geo2f4t2 , 0);
$pdf->Cell(30,8,$geo3f4t2, 0);
$pdf->Cell(9,8,$geo4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$geo1f4t3, 0);
$pdf->Cell(30,8,$geo2f4t3 , 0);
$pdf->Cell(30,8,$geo3f4t3, 0);
$pdf->Cell(9,8,$geo4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//geography end
//history start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'HISTORY', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$his1f4t1, 0);
$pdf->Cell(30,8,$his2f4t1 , 0);
$pdf->Cell(30,8,$his3f4t1, 0);
$pdf->Cell(30,8,$his4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$his1f4t2, 0);
$pdf->Cell(30,8,$his2f4t2 , 0);
$pdf->Cell(30,8,$his3f4t2, 0);
$pdf->Cell(9,8,$his4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$his1f4t3, 0);
$pdf->Cell(30,8,$his2f4t3 , 0);
$pdf->Cell(30,8,$his3f4t3, 0);
$pdf->Cell(9,8,$his4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//history end
//cre start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'C.R.E', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$cre1f4t1, 0);
$pdf->Cell(30,8,$cre2f4t1 , 0);
$pdf->Cell(30,8,$cre3f4t1, 0);
$pdf->Cell(30,8,$cre4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$cre1f4t2, 0);
$pdf->Cell(30,8,$cre2f4t2 , 0);
$pdf->Cell(30,8,$cre3f4t2, 0);
$pdf->Cell(9,8,$cre4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$cre1f4t3, 0);
$pdf->Cell(30,8,$cre2f4t3 , 0);
$pdf->Cell(30,8,$cre3f4t3, 0);
$pdf->Cell(9,8,$cre4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//cre end
//business start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'BUSINESS', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$bus1f4t1, 0);
$pdf->Cell(30,8,$bus2f4t1 , 0);
$pdf->Cell(30,8,$bus3f4t1, 0);
$pdf->Cell(30,8,$bus4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$bus1f4t2, 0);
$pdf->Cell(30,8,$bus2f4t2 , 0);
$pdf->Cell(30,8,$bus3f4t2, 0);
$pdf->Cell(9,8,$bus4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$bus1f4t3, 0);
$pdf->Cell(30,8,$bus2f4t3 , 0);
$pdf->Cell(30,8,$bus3f4t3, 0);
$pdf->Cell(9,8,$bus4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//business end
//agriculture start
$pdf->Ln(6);	
$pdf->SetFont('times',"",12);
$pdf->Cell(30,8,'AGRICULTURE', 0);
$pdf->Cell(30,8,'TERM 1', 0);
$pdf->Cell(30,8,$agri1f4t1, 0);
$pdf->Cell(30,8,$agri2f4t1 , 0);
$pdf->Cell(30,8,$agri3f4t1, 0);
$pdf->Cell(30,8,$agri4f4t1, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 2', 0);
$pdf->Cell(30,8,$agri1f4t2, 0);
$pdf->Cell(30,8,$agri2f4t2 , 0);
$pdf->Cell(30,8,$agri3f4t2, 0);
$pdf->Cell(9,8,$agri4f4t2, 0);
$pdf->Ln(6);

$pdf->Cell(30,8,'', 0);
$pdf->Cell(30,8,'TERM 3', 0);
$pdf->Cell(30,8,$agri1f4t3, 0);
$pdf->Cell(30,8,$agri2f4t3 , 0);
$pdf->Cell(30,8,$agri3f4t3, 0);
$pdf->Cell(9,8,$agri4f4t3, 0);
$pdf->Ln(1);
$pdf->Cell(10,8,'_________________________________________________________________________________________',0);
//agriculture end

$pdf->Ln(8);
//$pdf->Cell(30,8,'_______________________________________________________________________________________________________________________________________________________________',0);
$pdf->Output();

?>