<?php
@session_start();
include("fpdf.php");

include_once("ConexionBD.lib.php");
include_once("DataServers.lib.php");

$Mes = array("","ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");

//Consulta para los datos del CT
$db = new ConexionBD();
$db->Conexion(_CLUSTER_Consulta_,_CLUSTER_Consulta_usr,_CLUSTER_Consulta_pass,_CLUSTER_Consulta_port);
$db->SQL->BaseDatos("CEPS");
$db->SQL->Consulta("SELECT cct, nombre, domicilio, telefonos, director, nombre_mun, nombre_loc FROM CentroTrabajo WHERE cct = '".$_SESSION['cct']."'");
$db->SQL->Ejecutar();
if($db->Registros() > 0){
	$cct = $db->Registro->Campo("cct");
	$nombre = $db->Registro->Campo("nombre");
	$direccion = $db->Registro->Campo("domicilio");
	$telefono = $db->Registro->Campo("telefonos");
	$director = $_SESSION["CEPSDirector"];//Carga director de since $db->Registro->Campo("director");
	$municipio = $db->Registro->Campo("nombre_mun");
	$localidad = $db->Registro->Campo("nombre_loc");
}

//Consulta para los datos del Consejo
$db1 = new ConexionBD();
$db1->Conexion(_CLUSTER_Consulta_,_CLUSTER_Consulta_usr,_CLUSTER_Consulta_pass,_CLUSTER_Consulta_port);
$db1->SQL->BaseDatos("CEPS");
$db1->SQL->Consulta("SELECT id, Ciclo FROM Consejo WHERE CCT = '".$_SESSION['cct']."'");
$db1->SQL->Ejecutar();
if($db1->Registros() > 0){
	$idConsejo = $_SESSION["CEPSIDUsuario"];
	$ciclo = $db1->Registro->Campo("Ciclo");
}
//Consulta para los datos del Fecha sesion
$db1 = new ConexionBD();
$db1->Conexion(_CLUSTER_Consulta_,_CLUSTER_Consulta_usr,_CLUSTER_Consulta_pass,_CLUSTER_Consulta_port);
$db1->SQL->BaseDatos("CEPS");
$db1->SQL->Consulta("
SELECT
	Date_Format(InicioCelebracion,'%H:%i') AS HoraInicio,
	Date_Format(TerminoCelebracion,'%H:%i') AS HoraFin,
	Date_Format(InicioCelebracion,'%d') AS DiaInicio,
	Date_Format(InicioCelebracion,'%c') AS MesInicio,
	Date_Format(InicioCelebracion,'%Y') AS AnioInicio
FROM
	SesionAsamblea
WHERE
	idConsejo = '$idConsejo'");
$db1->SQL->Ejecutar();
$Inicio_Celebracion= array();

if($db1->Registros() > 0){
	$Inicio_Celebracion[0] = $db1->Registro->Campo("HoraInicio");
	$Inicio_Celebracion[1] = $db1->Registro->Campo("DiaInicio");
	
	$Inicio_Celebracion[2] = $Mes[intval($db1->Registro->Campo("MesInicio"))];
	$Inicio_Celebracion[3] = $db1->Registro->Campo("AnioInicio");
	
	$Termino_Celebracion = $db1->Registro->Campo("HoraFin");
}

//Consulta para los datos del numero de usuarios
$db1 = new ConexionBD();
$db1->Conexion(_CLUSTER_Consulta_,_CLUSTER_Consulta_usr,_CLUSTER_Consulta_pass,_CLUSTER_Consulta_port);
$db1->SQL->BaseDatos("CEPS");
$db1->SQL->Consulta("
SELECT
  COUNT(*) AS Total
FROM
	Consejero
WHERE
idConsejo = '$idConsejo'");

$db1->SQL->Ejecutar();
if($db1->Registros() > 0){
	$Total = $db1->Registro->Campo("Total");	
}

//Consulta para los datos de los Consejeros
$db2 = new ConexionBD();
$db2->Conexion(_CLUSTER_Consulta_,_CLUSTER_Consulta_usr,_CLUSTER_Consulta_pass,_CLUSTER_Consulta_port);
$db2->SQL->BaseDatos("CEPS");
$db2->SQL->Consulta("SELECT c.Nombre, c.Paterno, c.Materno, c.CorreoE, c.Telefono, ca.Descripcion AS Cargo, enca.Descripcion AS EnCalidad  FROM Consejero AS c, Cargo AS ca, EnCalidad AS enca WHERE c.idCargo = ca.id AND c.idEnCalidad = enca.id AND idConsejo = '".$idConsejo."'");
$db2->SQL->Ejecutar();
$consejeros = array();
if($db2->Registros() > 0){
	while(!$db2->FinDeRegistros()){
		$tmp = array();
		$tmp[0] = $db2->Registro->Campo("Nombre");
		$tmp[1] = $db2->Registro->Campo("Paterno");
		$tmp[2] = $db2->Registro->Campo("Materno");
		$tmp[3] = $db2->Registro->Campo("CorreoE");
		$tmp[4] = $db2->Registro->Campo("Telefono");
		$tmp[5] = $db2->Registro->Campo("Cargo");
		$tmp[6] = $db2->Registro->Campo("EnCalidad");
		$consejeros[] = $tmp;
		$db2->Registro->Siguiente();	
	}
}

class PDF extends FPDF
{
	function Header(){
		$this->Image('CONAPASE.jpg',10,11,28);
		$this->Image('logo-ceconepase.jpg',168,10,33);
		$this->Ln(3);
		$this->Ln(3);
		//Arial bold 15
		$this->SetFont('Arial','B',12);
		//Movernos a la derecha
		//Título
		$this->Ln(12);
		$this->SetFont('Arial','B',9);
		$this->Cell(50);
		$this->Cell(90,8,'REGISTRO PÚBLICO DE LOS CONSEJOS ESCOLARES DE PARTICIPACIÓN',0,0,'C');
		$this->Cell(-100,20,'SOCIAL EN LA EDUCACIÓN',0,0,'C');
		$this->Ln(4);
		$this->Ln(15);
		$this->SetFont('Arial','B',8);
		$this->Cell(50);		
	}
	
	function Pagina1(){	
		global $cct;
		global $nombre;
		global $direccion;
		global $telefono;
		global $director;
		global $municipio;
		global $localidad;
		global $ciclo;
		global $Inicio_Celebracion;
		global $Total;
		
		$this->SetFont('Arial','B',8);
		$this->Cell(80,10,'ACTA CONSTITUTIVA',0,0,'C');
		$this->Ln(3);
		$this->Cell(50);
		$this->Cell(100,10,'',0,0,'C');
		$this->SetFont('Arial','',10);
		$this->Ln(15);
		$this->MultiCell(190,6,"En la Localidad de $localidad del Municipio de $municipio del Estado de VERACRUZ siendo las {$Inicio_Celebracion[0]} horas del día {$Inicio_Celebracion[1]} del mes de {$Inicio_Celebracion[2]} del año {$Inicio_Celebracion[3]} con fundamento en el artículo 4° del Acuerdo Secretarial 535 Por el que se emiten los Lineamientos Generales para la Operación de los Consejos Escolares de Participación Social, a convocatoria del C. Director(a) o su equivalente de éste centro escolar, a efecto de elegir entre sus miembros a un secretario técnico, con el objeto de fomentar una gestión escolar e institucional que fortalezca la participación de los centros escolares en la toma de decisiones, y que corresponsabilice a los diferentes actores sociales y educativos, se ha tenido a bien celebrar una asamblea de la comunidad educativa con el objeto de constituir el Consejo Escolar de Participación Social en la Educación, para el período: $ciclo del centro escolar y consejeros escolares siguientes:");
		$this->Ln(50);
		$this->Cell(260,5,'CLAVE DE LA ESCUELA:');
		$this->Ln(0); $this->Cell(80);
		$this->Cell(10,5,''.$cct);
		$this->Ln(7);
		
		$this->Cell(260,5,'NOMBRE DE LA ESCUELA:');
		$this->Ln(0); $this->Cell(80);
		$this->Cell(10,5,''.$nombre);
		$this->Ln(7);
		
		$this->Cell(260,5,'DIRECCIÓN:');
		$this->Ln(0); $this->Cell(80);
		$this->Cell(10,5,''.$direccion);
		$this->Ln(7);
		
		$this->Cell(260,5,'TELÉFONO:');
		$this->Ln(0); $this->Cell(80);
		$this->Cell(10,5,''.$telefono);
		$this->Ln(7);
		
		$this->Cell(260,5,'NOMBRE DEL DIRECTOR:');
		$this->Ln(0); $this->Cell(80);
		$this->Cell(10,5,''.$director);
		$this->Ln(7);
		
		$this->Cell(260,5,'NÚMERO DE INTEGRANTES:');
		$this->Ln(0); $this->Cell(80);
		$this->Cell(10,5,''.$Total);
		$this->Ln(15);
	}
	
	//Pie de página
	function Footer(){
		//Posición: a 1,5 cm del final
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Número de página
		$this->Cell(0,10,'Página '.$this->PageNo().'',0,0,'C');
	}
	
	function BasicTable(){
		global $consejeros;
		global $Termino_Celebracion;
		//Colores, ancho de línea y fuente en negrita
		$this->SetDrawColor(0,66,43);
		$this->SetLineWidth(.3);
		$this->SetFillColor(200,235,193);
		$this->Ln(4);
		$this->SetFont('Arial','B',8);
		$this->Cell(50);
		$this->Cell(80,10,'INTEGRANTES DEL CONSEJO ESCOLAR:',0,0,'C');
		$this->Ln(4);
	
		//**************** TITULO DE LA TABLA ***************************
		$this->Ln(5);
		$this->SetFont('Arial','B',5);
		$this->Cell(20,4,'PRIMER APELLIDO',1,0,'C',1);
		$this->Cell(20,4,'SEGUNDO APELLIDO',1,0,'C',1);
		$this->Cell(23,4,'NOMBRE(S)',1,0,'C',1);
		$this->Cell(23,4,'CARGO EN EL CONSEJO',1,0,'C',1);
		$this->Cell(25,4,'EN CALIDAD DE',1,0,'C',1);
		$this->Cell(39,4,'EMAIL',1,0,'C',1);
		$this->Cell(20,4,'TEL',1,0,'C',1);
		$this->Cell(20,4,'FIRMA',1,0,'C',1);
		
		//**************** RENGLONES DE LA TABLA ***************************
		$this->SetFont('Arial','',7);
		foreach($consejeros as $c){
			$this->Ln(4);
			$this->Cell(20,4,$c[1],1,0,'C');
			$this->Cell(20,4,$c[2],1,0,'C');
			$this->Cell(23,4,$c[0],1,0,'C');
			$this->Cell(23,4,$c[5],1,0,'C');
			$this->Cell(25,4,$c[6],1,0,'C');
			$this->Cell(39,4,$c[3],1,0,'C');
			$this->Cell(20,4,$c[4],1,0,'C');
			$this->Cell(20,4,'',1,0,'C');
		}
	
		$this->Ln(15);
		$this->SetFont('Arial','',10);
		$this->MultiCell(190,5,"No habiendo otro asunto que tratar, se declara terminada la instalación Consejo de Participación Social en el Educación a las {$Termino_Celebracion} hrs. del mismo día y año de su inicio, y se levanta la presente acta por triplicado, para su inscripción en el Registro Público de los Consejos Escolares de Participación Social en la Educación, firmando al calce y al margen los que en ella intervinieron.");
	}
}
$pdf=new PDF();
$pdf->FPDF('P','mm','Letter');
$pdf->SetTopMargin(5);
$pdf->SetFont('Arial','',14);
$pdf->AddPage("P");
$pdf->Pagina1();
$pdf->AddPage("P");
$pdf->BasicTable();
$pdf->Output("ReporteAsamblea1-".$_SESSION["cct"].".pdf","I");
?>