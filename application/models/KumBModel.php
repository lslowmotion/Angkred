<?php

if (!defined('BASEPATH'))
    exit('You dont have permission on this url');

class KumBModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // public function get_nama($search_data){
        // $this->db->select('nama');
        // $this->db->like('nama',$search_data);
        // return $this->db->get('kum_e',11);
    // }
    
    public function get_komponenKegiatan(){
        $this->db->select('*');
        return $this->db->get('kum_b_d-g');
    }

}
