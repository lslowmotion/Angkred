<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KumEControl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('KumEModel');
        $this->load->library('session');
    }

    public function index() {
        if(!$this->session->userdata('is_login')){
            redirect('/LoginControl/');
        }
        $data['kum_e'] =  $this->KumEModel->getTitleArray();
        $this->load->view('KumEView',$data);
    }
    
    public function showKomponenKegiatan() {
        $id = $this->input->post('id');
        $query = $this->KumEModel->get_komponenKegiatan($id);
        $data['kum_e'] = $query->result();
        $this->load->view('KumE_Komponen_Kegiatan',$data);
    }
}
