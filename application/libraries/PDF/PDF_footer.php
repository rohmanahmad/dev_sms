<?php
define('FPDF_FONTPATH',PUBPATH.'assets/PDF/fonts/');

define('EXTR_', '..'.pathinfo(__FILE__, PATHINFO_EXTENSION));
define('MYPATH_', __FILE__);
define('SELFS_', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PUBPATH_',str_replace(SELFS_,'',MYPATH_)); // added 

require(PUBPATH_.'fpdf.php');
class PDF_footer extends FPDF
{
	//Constructor (mandatory with PHP3)
	function PDF_footer()
	{
		$this->FPDF();
	}

	//Page footer
	function Footer()
	{
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
		$this->Cell(0,10,'Page ',0,0,'C');
	}

}
