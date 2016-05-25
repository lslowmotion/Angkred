<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardControl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DosenModel');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('is_login')) {
            $query = $this->get_DashboardArray();
            $data['kum_e'] = $query->result();
            $this->load->view('DashboardView', $data);
        } else {
            redirect('/LoginControl/');
        }
    }

    public function get_DashboardArray() {
        $this->db->select('*');
        $this->db->from('pengambilan_kume p');
        $this->db->join('kum_e k', 'p.id_kum=k.id_kum', 'left');
        $this->db->where('nip', $this->session->userdata('nip'));
        $this->db->order_by('k.no', 'asc');
        return $this->db->get();
    }

    public function deleteKum($id = null) {
        $this->db->where('id', $id);
        $this->db->delete('pengambilan_kume');
        redirect('/DashboardControl/');
    }

    public function showFile($file = null) {
        $data['file'] = $file;
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=".$file);
        @readfile("assets/files/".$this->session->userdata('nip')."/".$file);
    }

}
