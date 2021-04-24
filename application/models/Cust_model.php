<?php
	class Cust_model extends CI_Model{
		function create($formArray){
			$this->db->insert("cost_sheet",$formArray);
		}
		function all(){
			return $clients = $this->db->get('cost_sheet')->result_array();
		}
		function getclient($id){
			$this->db->where('id',$id);
			return $clients = $this->db->get('cost_sheet')->result_array();
		}
	}
?>