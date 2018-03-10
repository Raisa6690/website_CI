<?php
class E_Admin extends CI_Model{

    function list_Admin($level){
        $this->db->where('level',$level);
        $query = $this->db->get('user');
        return $query->result_array();
    }
	
	function addadmin($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }

    public function delete_member($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }

	 public function delete_admin($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }

    public function update_Admin($namatabel,$dataprofil,$id){
        $this->db->where('id',$id);
        $res = $this->db->update($namatabel,$dataprofil);
        return $res;

    }
	
}
?>