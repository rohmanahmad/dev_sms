<?php
define('FPDF_FONTPATH',PUBPATH.'assets/PDF/fonts/');

define('EXTR_', '..'.pathinfo(__FILE__, PATHINFO_EXTENSION));
define('MYPATH_', __FILE__);
define('SELFS_', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PUBPATH_',str_replace(SELFS_,'',MYPATH_)); // added 

require(PUBPATH_.'fpdf.php');
class PDF_header extends FPDF
{
//Constructor (mandatory with PHP3)
function __construct()
{
	$this->FPDF();
}

//Page header
function Header()
{
	//Logo
	$this->Image(image('logo_pb.png'),10,8,33);
	//Arial bold 15
	$this->SetFont('Arial','B',15);
	//Move to the right
	$this->Cell(80);
	//Title
	$this->Cell(30,10,'Title',1,0,'C'); // C: center, J:justify , R: right, L:left
	//Line break
	$this->Ln(20);
}


}
