<?php
class sms_model extends CI_Model{
  
 function __construct(){
	parent::__construct();
 }
 
 function ambil_data_sms_inbox($data=''){
	if(is_array($data)) {
		$this->db->where($data);
		$this->db->order_by("status","ASC");
		$this->db->order_by("tanggal_masuk","DESC");
		
		return $this->db->get(T_INBOX);
	}
	$this->db->group_by("penerima");
	return $this->db->get('(SELECT * FROM '.T_INBOX.' ORDER BY `status` ASC) f');
 }
 
 function ambil_data_sms_outbox(){
	return $this->db->get(T_OUTBOX);
 }
 
 function ambil_data_sms_spam(){
	
 }
 
 function ambil_data_sms_draft(){
	
 }
 
 function input_pesan_baru($data){
	if(is_array($data)){
		$this->db->insert(T_OUTBOX,$data);
		return true;
	}else{
		return false;
	}
 }
 
 function input_pesan_draft($data){
	if(is_array($data)){
		$this->db->insert(T_DRAFT,$data);
		return true;
	}else{
		return false;
	}
 }


}
?>