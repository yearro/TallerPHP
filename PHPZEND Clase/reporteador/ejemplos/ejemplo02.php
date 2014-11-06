<?php
require('..//fpdf.php');
class PDF extends FPDF
{
function BasicTable($header,$data)
{
	 $w=array(20,35,60,60);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
	foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'1');
        $this->Cell($w[1],6,$row[1],'1');
        $this->Cell($w[2],6,$row[2],'1');
        $this->Cell($w[3],6,$row[3],'1');
        $this->Ln();
    }
}
function ImprovedTable($header,$data)
{
    $w=array(20,35,60,60);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,$row[2],'LR',0,'R');
        $this->Cell($w[3],6,$row[3],'LR',0,'R');
        $this->Ln();
    }
    $this->Cell(array_sum($w),0,'','T');
}

function FancyTable($header,$data)
{
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    $w=array(20,35,60,60); // Tamaño de la columna
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    $fill=false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'R',$fill);
        $this->Cell($w[3],6,$row[3],'LR',0,'R',$fill);
        $this->Ln();
        $fill=!$fill;
    }
    $this->Cell(array_sum($w),0,'','T');
}
}

require_once('clase_conexion.php');
$conn = new conex();
$conn -> consulta('select * from usuarios');
$data = array();
while ($fila = $conn ->extrae_registro()) {
	$data[]=array($fila["id"],$fila["nombre"],$fila["apellidos"],$fila["email"]);
}
$pdf=new PDF();
$header=array('Id','Nombre','Prueba','Email');/////
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->AddPage();
$pdf->ImprovedTable($header,$data);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>