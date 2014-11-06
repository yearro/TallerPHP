<?php
require('..//fpdf.php');
class PDF extends FPDF
{
function Header()
{
    $this->Image('logo_coba.jpg',10,8,20);
    $this->SetFont('Arial','',15);
    $this->Cell(70);
	$titulo=utf8_decode('Título del Reporte');
    $this->Cell(50,10,$titulo,1,0,'C');
    $this->Ln(20);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf=new PDF('P','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$mensaje = "No habiendo otro asunto que tratar, se declara terminada la instalación Consejo de Participación Social en el Educación a las  hrs. del mismo día y año de su inicio, y se levanta la presente acta por triplicado, para su inscripción en el Registro Público de los Consejos Escolares de Participación Social en la Educación, firmando al calce y al margen los que en ella intervinieron.";
$mensaje=utf8_decode($mensaje);
$pdf->MultiCell(0,6,$mensaje,0,1);
require_once('clase_conexion.php');
$conn = new conex();
$conn -> consulta('select * from usuarios');
while ($fila = $conn ->extrae_registro()) {
	$pdf->Cell(0,5,$fila["nombre"]."  ".$fila["apellidos"]."  ".$fila["email"],0,1);
}
$pdf->Output();
//$pdf->Output("ReporteAsamblea1-".$_SESSION["cct"].".pdf","I");
?>