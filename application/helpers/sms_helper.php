<?php
function base($path='',$current=false){
	if($current == true)$location="sms/"; else $location="";
	return base_url('assets/'.$location.$path);
}

function site($path=''){
	return site_url('sms/'.$path);
}

function get_bootstrap_css(){
	return base('css_file/bootstrap.min.css');
}

function get_css($filename){
	return base('css/'.$filename);
}


?>
