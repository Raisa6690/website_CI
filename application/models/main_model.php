<?php

class Main_Model extends CI_Model {

    function cek_user($username, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get();
    }

    function pilih_user($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        //$query=$this->db->query('select * from peserta where nama_lengkap = \''.$nama.'\'');
        return $query->result_array();
    }

    function add_user($tabelname, $data) {
        $res = $this->db->insert($tabelname, $data);
        return $res;
    }

}

?>