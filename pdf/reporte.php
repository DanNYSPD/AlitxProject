<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query =   "SELECT nombres,nocontrol,semestre,carrera,grupo,email FROM alumno where grupo='";
	
	$resultado = $mysqli->$query;
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(25,6,'NO.CONTROL',1,0,'C',1);
	$pdf->Cell(5,6,'SEMESTRE',1,1,'C',1);
	$pdf->Cell(40,6,'CARRERA',1,1,'C',1);
	$pdf->Cell(15,6,'GRUPO',1,1,'C',1);
	$pdf->Cell(40,6,'EMAIL',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc)
	{
		$pdf->Cell(70,6,utf8_decode($row['nombres']),1,0,'C');
		$pdf->Cell(25,6,$row['nocontrol'],1,0,'C');
		$pdf->Cell(5,6,($row['semestre']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['carrera']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['grupo']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['email']),1,0,'C');
	}
	$pdf->Output(D);
?>