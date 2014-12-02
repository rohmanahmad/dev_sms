<?php
class sms extends CI_controller{

function __construct(){
	parent::__construct();
	$this->helper(array('sms','url','html'));
	$this->load_model("sms_model");
}

function load_form(){
	$this->load->helper('form');
}

function set_flash($name,$val){
	$this->load->library('session');
	$this->session->set_flashdata($name,$val);
}

function get_flash($name){
	$this->load->library('session');
	$this->session->flashdata($name);
}

function load_library($name){
	$this->load->library($name);
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

function PesanBaru($action='send'){
	$data['title']="Pesan Baru";
	$data['content']="sms_compose";
	$data['load']=$this;	
	$data['parse']="";
	$this->load_form();
	
	if($_POST){
	 $pengirim=$this->post('pengirim');
	 $penerima=$this->post('penerima');
	 $pesan_text=$this->post('pesan_text');
	 $data=array('pengirim'=>$pengirim,
				 'penerima'=>$penerima,
				 'text_sms'=>$pesan_text,
				 'tanggal'=>date('Y-m-d g:i:s')
				);
		if($pengirim !== "" AND $penerima !== "" AND $pesan_text !== "")
		{
		 if($action=="send"){
		 //untuk pesan baru disimpan pd kotak keluar dg status 2(pending)
		 $process=$this->m->input_pesan_baru($data);
		 }else{
		 //untuk pesan baru disimpan pd kotak draft dg status 0(pending)
		 $process=$this->m->input_pesan_draft($data);
		 }
		 if($process==true)
		 $this->set_flash('success',"data berhasil di inputkan");
		 redirect(site('PesanBaru'));
		}else{
		 $data['parse']['error']="tidak boleh ada kolom yang kosong!";
		}
	}elseif($_GET){
		$data['reply']='true';
		$this->view('body',$data);
	}else{
		$this->header($data);
		$this->view('body',$data);
		$this->view('footer');	
	}
	
}

function Inbox(){
$this->load->database();
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

function History($type='inbox',$number=''){
	$data['title']="History | $type";
	$data['content']="history";
	$data['load']=$this;
	if($type == "inbox")
		$datas=$this->m->ambil_data_sms_inbox(array('pengirim'=>$number));
	elseif($type == "outbox")
		$datas=$this->m->ambil_data_sms_draft();
	else
		$datas="";
		
	$data['parse']['db_data']=$datas;
	$data['parse']['number']=$number;
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}

function Detail($type='inbox',$pengirim=''){
	$data['title']="Detail | $type";
	$data['content']="detail";
	$data['load']=$this;
	if($type == "inbox")
		$datas=$this->m->ambil_data_sms_inbox(array('pengirim'=>$pengirim));
	elseif($type == "outbox")
		$datas=$this->m->ambil_data_sms_draft();
	else
		$datas="";
		
	$data['parse']['db_data']=$datas;
	$data['parse']['number']="";
	$this->header($data);
	$this->view('body',$data);
	$this->view('footer');
}



}







?>
