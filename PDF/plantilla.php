<?php 
	require 'fpdf/fpdf.php'; //Agregamos la libreria

	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../imagenes/logo.jpg', 5, 5, 30);
			$this-> SetFont('Arial','B', 15);
			$this->Cell(15); //esto es el mismo espacio que la imagen para que no se solape.
			$this->Ln(5);
			$this->Cell(180, 10, 'Reporte de faltas gloables', 0, 0, 'C');
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10,'Pagina ',$this->PageNo().'/{nb}',0,0,'C');
		}

	}
?>