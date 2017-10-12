<?php 
	include ('plantilla.php');
	include ('../conexion/conexion.php');
	session_start();

	$fecha=date("Y")."-".date("m")."-".date("d");
	global $con;
    $query = "SELECT TUFA_FECHA, ttu_nombre, emp_nombre, sup_local, usu_run, USU_NOMBRES, usu_apat, usu_amat, tfa_nombre, tfa_valor,  est_tipo, TUR_PINICIO, TUR_PTERMINO FROM tur_fal, usuario, empresa, supermercado, falta, tipo_falta, turno, tipo_turno, estado WHERE est_id!=2 and tufa_usuario=usu_run and TUFA_TURNO=tur_id and TUFA_FALTA=fal_id and fal_tipofalta=tfa_id and usu_supermerc=sup_id and sup_empresa=emp_id and tur_ttu=ttu_id and fal_estado=est_id and'$fecha' BETWEEN TUR_PINICIO and TUR_PTERMINO;";

    $resultado = $con -> query($query);

	$pdf = new PDF();
	$pdf -> AliasNbPages();
	$pdf -> AddPage();
	$pdf -> Ln(25);
	$pdf -> Cell(16, 6, 'Periodo: ', 0, 0, 'C');
	$pdf -> Cell(5, 6, '', 0, 0, 'C');
    if($row = $resultado -> fetch_assoc()){
      $pdf -> SetFont('Arial','', 10); // Fuente, tipo, tamaño
      $pdf -> Cell(20, 6, $row['TUR_PINICIO'], 0, 0, 'C');
      $pdf -> Cell(5, 6, ' al ', 0, 0, 'C');
	  $pdf -> Cell(20, 6, $row['TUR_PTERMINO'], 0, 0, 'C');
    }
	
    $sql = "SELECT TUFA_FECHA, ttu_nombre, emp_nombre, sup_local, usu_run, USU_NOMBRES, usu_apat, usu_amat, tfa_nombre, tfa_valor,  est_tipo, TUR_PINICIO, TUR_PTERMINO FROM tur_fal, usuario, empresa, supermercado, falta, tipo_falta, turno, tipo_turno, estado WHERE est_id!=2 and tufa_usuario=usu_run and TUFA_TURNO=tur_id and TUFA_FALTA=fal_id and fal_tipofalta=tfa_id and usu_supermerc=sup_id and sup_empresa=emp_id and tur_ttu=ttu_id and fal_estado=est_id and'$fecha' BETWEEN TUR_PINICIO and TUR_PTERMINO;";

    $resultado = $con -> query($sql);


	
	$pdf -> Ln(15);
	$pdf->SetFillColor(232,232,232);
	$pdf -> SetFont('Arial','B', 10); // Fuente, tipo, tamaño
	$pdf -> Cell(16, 6, 'Fecha', 1, 0, 'C',1);
	$pdf -> Cell(20, 6, 'Turno', 1, 0, 'C',1);
	$pdf -> Cell(20, 6, 'Empresa', 1, 0, 'C',1);
	$pdf -> Cell(16, 6, 'Local', 1, 0, 'C',1);
	$pdf -> Cell(16, 6, 'RUN', 1, 0, 'C',1);
	$pdf -> Cell(25, 6, 'Nombres', 1, 0, 'C',1);
	$pdf -> Cell(22, 6, 'A. Paterno', 1, 0, 'C',1);
	$pdf -> Cell(22, 6, 'A. Materno', 1, 0, 'C',1);
	$pdf -> Cell(25, 6, 'Falta', 1, 0, 'C',1);
	$pdf -> Cell(16, 6, 'Puntaje', 1, 1, 'C',1); //a la última se le agrega el salto de linea
	$pdf -> SetFont('Arial','', 8); // Fuente, tipo, tamaño
	while($row = $resultado->fetch_assoc())
	{
		
		$pdf -> Cell(16, 6, $row['TUFA_FECHA'], 1, 0, 'C');
		$pdf -> Cell(20, 6, utf8_decode($row['ttu_nombre']), 1, 0, 'C');
		$pdf -> Cell(20, 6, utf8_decode($row['emp_nombre']), 1, 0, 'C');
		$pdf -> Cell(16, 6, utf8_decode($row['sup_local']), 1, 0, 'C');
		$pdf -> Cell(16, 6, $row['usu_run'], 1, 0, 'C');
		$pdf -> Cell(25, 6, utf8_decode($row['USU_NOMBRES']), 1, 0, 'C');
		$pdf -> Cell(22, 6, utf8_decode($row['usu_apat']), 1, 0, 'C');
		$pdf -> Cell(22, 6, utf8_decode($row['usu_amat']), 1, 0, 'C');
		$pdf -> Cell(25, 6, utf8_decode($row['tfa_nombre']), 1, 0, 'C');
		$pdf -> Cell(16, 6, $row['tfa_valor'], 1, 1, 'C');
	}

	$pdf->Output('I','ReporteGlobal.pdf');

?>