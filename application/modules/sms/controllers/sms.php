<?php
class sms extends CI_controller{

function __construct(){
	parent::__construct();
	$this->helper(array('sms'));
	$this->load_model("sms_model");
}

function load_form(){
	$this->load->helper('form');
}

function load_model($filename){
 if (!empty($filename)){
	$this->load->model($filename,"m");
 }else{
	print_r("filename is empty!!!");
 }
}

function helper($name){
  return $this->load->helper($name);
}

function view($filename,$parse=array()){
 if($filename !== ""){
 	$this->load->view($filename,$parse);
 }else{
 	echo "filename is not defined!";
 }
}

function post($parser){
 if($parser !== ""){
	return $this->input->post($parser);
 }
}

function get_user(){
	return "rohman";
}

function header($parse){
	$this->view('header',$parse);
	$this->view('menu',$parse);  
}

function index(){
	$this->Inbox();
}

function PesanBaru(){
	if($_POST){
	 $pengirim=$this->post('pengirim');
	 $penerima=$this->post('penerima');
	 $pesan_text=$this->post('pesan_text');
	 $data=array();
	}
	$data['title']="Pesan Baru";
	$data['content']="sms_compose";
	$data['load']=$this;	
	$data['parse']="";
	$this->load_form();
	
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}

function Inbox(){
	$data['title']="Inbox";
	$data['content']="sms_inbox";
	$data['load']=$this;
	$data['parse']['db_data']=$this->m->ambil_data_sms_inbox();
	
	
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}

function Outbox(){
	$data['title']="Outbox";
	$data['content']="sms_outbox";
	$data['load']=$this;
	$data['parse']['db_data']=$this->m->ambil_data_sms_outbox();
	
	
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}

function Spam(){
	$data['title']="Spam";
	$data['content']="sms_spam";
	$data['load']=$this;
	$data['parse']['db_data']=$this->m->ambil_data_sms_spam();
	
	
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}

function Draft(){
	$data['title']="Draft";
	$data['content']="sms_draft";
	$data['load']=$this;
	$data['parse']['db_data']=$this->m->ambil_data_sms_draft();
	
	
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}



}







?>
