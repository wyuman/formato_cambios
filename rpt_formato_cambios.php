<?php
session_start();
$nmodulo = $_POST["mod"];
$nprograma = $_POST["pro"];
$nsistema = $_POST["id_progra"];
$nsolicitud = $_POST["solicitud"];
$nprogramador = $_POST["programador"];
$fechas= $_POST["fechas"];
$fechai= $_POST["fechai"];
$compilador = $_POST["compilador"];
$fechac = $_POST["fechac"];
extract($_REQUEST);
require('fpdf.php');
$pdf = new FPDF('P','mm');
$pdf->AddPage();

//1ra linea
$pdf->Image('Mariano.jpg',10,5,20,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(75);
$pdf->Cell(30,30,'HOJA DE CAMBIOS EN EL SISTEMA',0,0,'C');
$pdf->Cell(-100);
$pdf->Cell(5);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,55,'Nombre del Programa:');
$pdf->SetFont('Times','I',12);
$pdf->Cell(39);
$pdf->Cell(10,60,$nprograma);
//2da linea
$pdf->Cell(-59);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,80,'Modulo:');
$pdf->SetFont('Times','I',12);
$pdf->Cell(39);
$pdf->Cell(10,85,$nmodulo);
//3ra linea
$pdf->Cell(-59);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,120,'Nombre quién lo Solicito:');
$pdf->SetFont('Times','I',12);
$pdf->Cell(39);
$pdf->Cell(10,125,$nsolicitud);
//4ta linea
$pdf->Cell(-59);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,142,'Nombre del Programador:');
$pdf->SetFont('Times','I',12);
$pdf->Cell(39);
$pdf->Cell(10,153,$nprogramador);
//5ta Linea, Fecha1
$pdf->SetFont('Times','B',12);
$pdf->Cell(-59);
$pdf->Cell(10,173,'Fecha de solicitud: ');
$pdf->SetFont('Times','I',12);
$pdf->Cell(30);
$pdf->Cell(10,173,$fechas);
//5ta Linea, Fecha2
$pdf->SetFont('Times','B',12);
$pdf->Cell(25);
$pdf->Cell(10,173,'Fecha de Producción: ');
$pdf->SetFont('Times','I',12);
$pdf->Cell(35);
$pdf->Cell(10,173,$fechai);

//Dibujo de Rectangulos
$pdf->SetLineWidth(0.5);
$pdf->Rect(20,35,160,25);
$pdf->Rect(20,67,160,32);
$pdf->Rect(20,242,65,35);
$pdf->Rect(115,242,65,35);
//Rectangulos de abajo, Lineas horizontales
$pdf->Line(85,248,20,248);
$pdf->Line(180,248,115,248);
//Dibujo de lineas verticales
$pdf->Line(135,60,135,35);
//lineas horizontales
$pdf->Line(135,46,20,46);
//2do cuadro, lineas verticales
$pdf->Line(95,99,95,93); //linea vertical de fechas	
//lineas horizontales
$pdf->Line(180,93,20,93);
$pdf->Line(180,78,20,78);
//Dibujo de lineas, 3er cuadrado
//horizontales
$pdf->Cell(-130);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,195,'Descripción de lo Solicitado: ');
$pdf->SetLineWidth(0.5);
$pdf->Line(180,105,20,105);
$pdf->Line(180,110,20,110);
$pdf->Line(180,165,20,165);
//verticales
$pdf->Line(20,105,20,165);
$pdf->Line(180,105,180,165);
//Dibujo de lineas, 4do cuadro
//horizontales
$pdf->Line(180,170,20,170);
$pdf->Line(180,175,20,175);
$pdf->Line(180,230,20,230);
//verticales
$pdf->SetLeftMargin(20);
$pdf->Line(20,170,20,230);
$pdf->Line(180,170,180,230);
//Multicell
$pdf->SetFont('Times','I',12);
$pdf->SetXY(20,111);
$pdf->MultiCell(160,5,$des,0);
$pdf->SetXY(20,176);
$pdf->MultiCell(160,5,$descrip,0);
$pdf->SetFont('Times','B',12);
$pdf->SetXY(20,205);
$pdf->Cell(10,-65,'Detalle de Cambio: ');
$pdf->SetXY(20,235);
$pdf->Cell(10,20,'Nombre del Programador');
$pdf->SetXY(115,235);
$pdf->Cell(10,20,'Fecha de Compilación ', 'C');
$pdf->SetXY(150,28);
$pdf->Cell(10,20,'Sistema');
$pdf->SetFont('Times','I',12);
$pdf->SetXY(135,42);
$pdf->MultiCell(45,10,$nsistema,0,'C');
$pdf->SetFont('Times','BI',14);
$pdf->SetXY(30,10);
$pdf->Cell(10,5,'Universidad Mariano Gálvez');
$pdf->SetFont('Times','I',12);
$pdf->Ln(245);
$pdf->MultiCell(65,5,$nprogramador,0,'C');
$pdf->SetXY(115,250);
$pdf->MultiCell(65,5,$fechac,0,'C');
$pdf->SetXY(115,258);
$pdf->SetFont('Times','B',12);
$pdf->MultiCell(65,5,'Firma de Compilador',1);
$pdf->SetFont('Times','I',12);
$pdf->SetXY(115,266);
$pdf->MultiCell(65,5,$compilador,0,'C');

$pdf->OutPut();
?>