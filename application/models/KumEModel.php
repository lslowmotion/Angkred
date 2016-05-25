<?php

if (!defined('BASEPATH'))
    exit('You dont have permission on this url');

class KumEModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getTitleArray() {
    	$this->db->from('kegiatan');
    	$query = $this->db->get();
		return $query->result();
    }

    public function get_autoComplete($search_data) {
        $this->db->select('nama');
        $this->db->like('nama', $search_data);
        return $this->db->get('kum_e', 11);
    }

    public function get_komponenKegiatan($id) {
    	$this->db->flush_cache();
        $this->db->where('id_kegiatan', $id);
        $this->db->from('kum_e');
        $query = $this->db->get();
        return $data = $query->result();
    }
}
