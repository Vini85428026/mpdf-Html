<?php
	require_once('mpdf60/mpdf.php');
	$arquivo  = file_get_contents('teste.html');

	$mpdf = new mPDF(); 
	$mpdf->WriteHTML($arquivo); 
	$mpdf->Output( 'meu_primeiro_pdf.pdf', 'D' ); 
?>