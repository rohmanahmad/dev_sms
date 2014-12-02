<?php
class apis_model extends CI_Model {

 function __construct(){
 	parent::__construct();
 }
 
 function input_pesan_masuk_baru($data){
	if(is_array($data)){
		$this->db->insert(T_INBOX,$data);
	}
 }
 
 

}
?>
