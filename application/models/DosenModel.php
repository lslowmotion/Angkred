<?php

if (!defined('BASEPATH'))
    exit('You dont have permission on this url');

class DosenModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    
    public function validasiDosen($nip=null,$password=null){
        $this->db->select('*');
        $this->db->where('nip',$nip);
        $this->db->where('password',$password);
        $query = $this->db->get('dosen');
        $data = $query->row();
        if($query->num_rows()>0){
            $user_data = array(
                'is_login' => true,
                'nama' => $data->nama
            );
            $this->session->set_userdata($user_data);
            return true;
        }else{
            return false;
        }
        return ;
    }

    public function get_autoComplete($search_data) {
        $this->db->select('nama');
        $this->db->like('nama', $search_data);
        return $this->db->get('kum_e', 11);
    }

    public function get_komponenKegiatan($id) {
        $this->db->select('*');
        $this->db->where('no', $id);
        return $this->db->get('kum_e');
    }

}
