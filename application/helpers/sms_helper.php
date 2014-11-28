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

function load_angularJS(){
	return getbaseurl('assets','js_file',"angular.min.js");
}

function get_image_profile($filename){
	return getbaseurl('assets','images','profile_pic',$filename);
}

function get_logo($filename="logo_2.png"){
	return getbaseurl('assets','images','logo',$filename);
}


function load_js($filename){
	return getbaseurl('assets','js_file',$filename);
}

function valid_phone($phone="+6285766776879"){
	if(empty($phone))return "000";
	echo str_replace("+62","0",$phone);
	return;
}


?>
