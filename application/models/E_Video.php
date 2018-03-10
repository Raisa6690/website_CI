<?php

class E_Video extends CI_Model {

    function add_video($tabelname, $data) {
        $res = $this->db->insert($tabelname, $data);
        return $res;
    }

    function list_videoAll() {
        $this->db->select('*');
        $this->db->from('video');
        $query = $this->db->get();
        return $query->result_array();
    }

    function list_videoLagu() {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('jenis', 'lagu');
        $query = $this->db->get();
        return $query->result_array();
    }

    function list_videoTutorial() {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('jenis', 'tutorial');
        $query = $this->db->get();
        return $query->result_array();
    }

}
