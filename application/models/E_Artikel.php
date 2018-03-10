<?php
class E_Artikel extends CI_Model{
	
	function list_artikel($id){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function list_artikelall(){
		$this->db->select('*');
		$this->db->from('artikel');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>