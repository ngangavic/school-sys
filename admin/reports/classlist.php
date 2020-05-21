<?php require_once('../../tcpdf/tcpdf.php');

require_once "../../actions/database/connection.php";

class MYPDF extends TCPDF
{

    //Page header
    public function Header()
    {
        // Logo
        $image_file = K_PATH_IMAGES . 'logo_example.jpg';
        $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer()
    {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator('School System');
$pdf->SetAuthor('School System Online');
$pdf->SetTitle('Sample School');
$pdf->SetSubject('Classlist report');
$pdf->SetKeywords('TCPDF, PDF, report, school, class');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, 20, "SAMPLE SCHOOL NAME", "P.O Box 453-0100, Nairobi-Kenya\nEmail:sample@gmail.com");

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
// $pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

// $pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------
// $stmt=$conn->prepare("SELECT * FROM tbl_subejcts")
$stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE school='6' AND class='Form 1'AND subject='English' AND term='Term 1' AND exam='Opener' AND year='2017' AND complete='no' ");
$stmt->execute();
$results = $stmt->get_result();

$tbl = '
<table border="1" cellpadding="0" cellspacing="0" align="center">
<thead>
<tr style="font-weight:bold;">
<th>Pos</th>
<th>Adm</th>
<th colspan="3">Name</th>
<th>Eng</th>
<th>Kis</th>
<th>Mat</th>
<th>Bio</th>
<th>Chem</th>
<th>Phy</th>
<th>Geo</th>
<th>His</th>
<th>CRE</th>
<th>Bus</th>
<th>Agri</th>
<th>Comp</th>
<th>Total</th>
<th>Mean</th>
<th>Grade</th>
</tr>
</thead>
<tbody>';
$pos = 0;
while ($row = $results->fetch_array()) {
    $pos++;
    $tbl .= '
 <tr>
  <td>'.$pos.'</td>
  <td>'.$row["adm"].'</td>
  <td colspan="3">'.$row['name'].'</td>
  <td>'.$row['marks'].'</td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
  <td>ROW 1</td>
  <td>ROW 1</td>
  <td>ROW 1</td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
 </tr>';
}

$tbl .= '
 <tr>
  <td border="0"></td>
  <td></td>
  <td colspan="3"></td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
  <td>ROW 1</td>
  <td>ROW 1</td>
  <td>ROW 1</td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 2</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
  <td>ROW 3</td>
 </tr>
 </tbody>
</table>
';

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('classlist.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
