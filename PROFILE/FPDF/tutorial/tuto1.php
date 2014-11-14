<?php
require('../fpdf.php');

$txt= 'Hello Pritam';
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$txt);
$pdf->Output();
?>
