<?php
define('FPDF_FONTPATH',PUBPATH.'assets/PDF/fonts/');

define('EXTR_', '..'.pathinfo(__FILE__, PATHINFO_EXTENSION));
define('MYPATH_', __FILE__);
define('SELFS_', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PUBPATH_',str_replace(SELFS_,'',MYPATH_)); // added 

require(PUBPATH_.'fpdf.php');
class PDF_table extends FPDF
{
	//Constructor (mandatory with PHP3)
	function __construct()
	{
		$this->FPDF();
	}

	function ChapterTitle($line1,$line2='')
	{
		$path=PUBPATH.'assets/PDF/images/logo_pb.png';
		//$path="../logo_pb.png";
		$this->Image($path,10,8,33);
		//Arial 12
		$this->SetFont('Arial','',15);
		//Background color
		$this->SetFillColor(255,255,255);
		//Title
		$this->Cell(0,0,6,$line1,0,1,'C',1);
		$this->Cell(0,0,6,$line2,0,1,'C',1);
		$this->Ln(2);
		$this->SetFillColor(39, 38, 39);
		$this->Cell(0,0,1,"",1,1,'C',1);
		//Line break
		$this->Ln(6);
	}

	function content_name(){
		$this->SetFont('Arial','',13);
		//Background color
		$this->SetFillColor(255,255,255);
		//Title
		$this->Cell(0,30,6,"NIM",0,0,'L',1);
			$this->Cell(0,5,6,":",0,0,'L',1);
			$this->Cell(0,30,6,"MHS-002",0,1,'L',1);
		$this->Cell(0,30,6,"Nama",0,0,'L',1);
			$this->Cell(0,5,6,":",0,0,'L',1);
			$this->Cell(0,30,6,"Akhmad Abdul Rohman",0,1,'L',1);
		$this->Cell(0,30,6,"Kelas",0,0,'L',1);
			$this->Cell(0,5,6,":",0,0,'L',1);
			$this->Cell(0,30,6,"3 - Tehnik Informatika",0,1,'L',1);
		$this->Ln(6);
	}
	
	function signature(){
		$this->SetFont('Arial','',13);
		//Background color
		$this->SetFillColor(255,255,255);
		//Title
		$this->Ln(16);
		$this->Cell(0,0,6,"Tanggal 20juli 2014",0,0,'R',1);
		$this->Cell(0,0,20,"",0,1,'R',1);
		$this->Cell(0,0,6,"Drs.Sukimen      ",0,0,'R',1);
	}
	
	function Footer()
	{
		//Position at 1.5 cm from bottom
		$this->SetY(-35);
		//Arial italic 8
		//Page number
		$this->SetFont('Arial','B',14);
			$this->Cell(0,0,6,'SMK N 1 JEMBER .Jl Gajahmada 21 ',0,1,'C');
		$this->SetFont('Arial','',10);
			$this->Cell(0,0,6,'Ambulu - Jember ',0,1,'C');
		$this->SetFont('Arial','I',8);
			$this->Cell(0,0,10,'Halaman '.$this->PageNo(),0,0,'C');
	}
	

}
