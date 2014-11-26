<?php
class sms_model extends CI_Model{
  
 var $in,$out,$drft,$spm;
 function __construct(){
	parent::__construct();
	$this->in="sms_inbox";
	$this->out="sms_outbox";
	$this->spm="sms_spam";
	$this->drft="sms_draft";
 }
 
 function ambil_data_sms_inbox($data=''){
	if(is_array($data)) {
		$this->db->where($data);
		$this->db->order_by("status","ASC");
		$this->db->order_by("tanggal","DESC");
		
		return $this->db->get($this->in);
	}
	$this->db->order_by("status","ASC");
	$this->db->group_by("penerima");
	return $this->db->get($this->in);
 }
 
 function ambil_data_sms_outbox(){
	return $this->db->get($this->out);
 }
 
 function ambil_data_sms_spam(){
	
 }
 
 function ambil_data_sms_draft(){
	
 }


}
?>