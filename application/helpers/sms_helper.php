<?php
include("sitepath.php");
function base($path=''){
	return base_url('assets/sms/'.$path);
}

function site($m,$val1='',$val2='',$val3=''){
	return getsiteurl('sms',$m,$val1,$val2,$val3);
}

function get_bootstrap_css(){
	return getbaseurl('assets','css_file','bootstrap.min.css');
}

function get_css($filename){
	return getbaseurl('assets','css_file',$filename);
}

function get_image_profile($filename){
	return getbaseurl('assets','images','profile_pic',$filename);
}


?>
