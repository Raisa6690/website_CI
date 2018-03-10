<?php
class E_Member extends CI_Model{

    function list_Member($level){
        $this->db->where('level',$level);
        $query = $this->db->get('user');
        return $query->result_array();
    }
	
	function add_Member($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }

    public function delete_Member($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }

    public function update_user($namatabel,$dataprofil,$id){
        $this->db->where('id',$id);
        $res = $this->db->update($namatabel,$dataprofil);
        return $res;

    }
	
	function addartikel($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
	
}
?>