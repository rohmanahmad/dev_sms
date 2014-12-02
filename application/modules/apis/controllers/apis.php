<?php
class Apis extends CI_Controller{

 function __construct(){
 	parent::__construct();
 	$this->load->model("apis_model","m");
 }
 
 function index(){
 }
 
 function post($str=''){
	return $this->input->post($str);
 }
 
 function get($str=''){
	return $this->input->get($str);
 }
 
 function inputInbox($phone='99',$key='909'){
 	if($_GET){
		$pengirim=$this->get('pengirim');
		$penerima=$phone;//$this->post('penerima');
		$text=$this->get('text_pesan');
		$data=array('pengirim'=>$pengirim,
					'penerima'=>$phone,
					'text_sms'=>$text,
					'tanggal_masuk'=>date('Y-m-d g:i:s')
					);
		$this->m->input_pesan_masuk_baru($data);
	}else{
		$data=array('pengirim'=>$phone,
					'penerima'=>$phone,
					'text_sms'=>"text",
					'tanggal_masuk'=>date('Y-m-d g:i:s'),
					);
		$this->m->input_pesan_masuk_baru($data);
	}
 }
 
 function getstatusserver($nomor='',$key=''){
	echo "siip";
 }
 


}
?>
