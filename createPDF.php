<?php
require('./FPDF/fpdf.php');
//session_start();
function createPDF($encryptedmsg)
{
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,$encryptedmsg);
	ob_end_clean();
	$filename= $_SESSION['filename'];
	$path=htmlspecialchars("C:/wamp/www/Z2/File_uploads/");
	$pdf->Output($path.$filename ,'F' );
	

}
?>
