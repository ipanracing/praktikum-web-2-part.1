<?php
$pdf = new FPDF('P','mm','A4');
$pdf->Addpage();
$pdf->Setfont('Times','B',18);
$pdf->Image('./assets/img/cart.png',30,5,27,24);
$pdf->cell(25);
$pdf->setfont('Times','B',20);
$pdf->cell(0,5,'KOPERASI HARUM MANIS BERSATU',0,1,'C');
$pdf->cell(25);
$pdf->setfont('Times','B',10);
$pdf->cell(0,5,'website :'.'WWW.HARUMBERSATU.COM' .'/E-Mail : '.'admin@harumbersatu.com',0,1,'c');
$pdf->cell(25);
$pdf->setfont('Times','B',10);
$pdf->cell(0,5,'Banjarmasin Utara'.' Telp. /fax : '.'081349685149'.' / '.'KOPERASI HARUM MANIS BERSATU',0,1,'C');


$pdf->SetLineWidth(1);
$pdf->Line(10,36,197,36);
$pdf->SetLineWidth(0);
$pdf->Line(10,37,197,37);
$pdf->cell(30,17,'',0,1);

$pdf->setfont('Times','',10);
$pdf->Output('laporan_header_only.pdf', 'I');