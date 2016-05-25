<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KumBControl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('KumBModel');
    }

    public function index() {
        // $search_data = $this->input->post('search_data');
        $query = $this->KumBModel->get_komponenKegiatan();
        $data['kompKeg'] =  $query->result();
        // $this->load->view('KumEView',$data);
        $this->load->view('KumBView', $data);
    }
    
    // public function showKomponenKegiatan() {
        // $id = $this->input->post('id');
        // $query = $this->KumEModel->get_komponenKegiatan($id);
        // $data['kum_e'] = $query->result();
        // $this->load->view('KumE_Komponen_Kegiatan',$data);
    // }

}
