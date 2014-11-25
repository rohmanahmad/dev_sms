<?php
define('FPDF_FONTPATH',PUBPATH.'assets/PDF/fonts/');

define('EXTR_', '..'.pathinfo(__FILE__, PATHINFO_EXTENSION));
define('MYPATH_', __FILE__);
define('SELFS_', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PUBPATH_',str_replace(SELFS_,'',MYPATH_)); // added 

require(PUBPATH_.'fpdf.php');
class PDF_default extends FPDF
{
	//Constructor (mandatory with PHP3)
	function PDF_default()
	{
		$this->FPDF();
	}
	
	function ChapterTitle($num,$label)
	{
		//Arial 12
		$this->SetFont('Arial','',12);
		//Background color
		$this->SetFillColor(200,220,255);
		//Title
		$this->Cell(0,6,"Chapter $num : $label",0,1,'L',1);
		//Line break
		$this->Ln(4);
	}

	function ChapterBody($file)
	{
		//Read text file
		$f=fopen($file,'r');
		$txt=fread($f,filesize($file));
		fclose($f);
		//Times 12
		$this->SetFont('Times','',12);
		//Output justified text
		$this->MultiCell(0,5,$txt);
		//Line break
		$this->Ln();
		//Mention in italics
		$this->SetFont('','I');
		$this->Cell(0,5,'(end of excerpt)');
	}
	
	

}
