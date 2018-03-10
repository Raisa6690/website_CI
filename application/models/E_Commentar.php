<?php
class E_Commentar extends CI_Model{
	
	function addcomment($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
	
	function list_comment(){
		$this->db->select('*');
		$this->db->from('comment');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function idArtikel($id){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
}
?>