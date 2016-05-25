<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kumDControl extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();
    //     $this->load->helper('url');
    //     $this->load->model('kumDModel');
    //     $this->load->database();
    //     $this->load->library('session');
    //     $this->load->helper(array('form'));
    // }

    public function index() {
      
        $this->load->view('KumDView');
    }
    
    // public function showKomponenKegiatan() {
    //     $id = $this->input->post('id');
    //     $query = $this->KumEModel->get_komponenKegiatan($id);
    //     $data['kum_e'] = $query->result();
    //     $this->load->view('KumE_Komponen_Kegiatan',$data);
    //     $this->load->view('KumD_Komponen_Kegiatan');
    // }

    public function get_detail(){
        $id = $_GET['id'];
        $query = $this->KumDModel->detail($id);
        echo json_encode($query);
        // $query = $this->db->query('SELECT * FROM kum_d_kredit');

        // print_r($query[0]['satuan_hasil']);
    }

    public function tambahKumD(){
        $data = array(
                'id_kredit' => $_POST['id_kredit'],
                'uraian_kegiatan' => $_POST['uraian_kegiatan'],
                'tanggal' => $_POST['tanggal'],
                'satuan_hasil' => $_POST['sathas'],
                'volume_kegiatan' => $_POST['jumkeg'],
                'angka_kredit' => $_POST['angkre'],
                'jumlah_angkakredit' => $_POST['jum_angkre'],
            );
        $query = $this->KumDModel->tambahKumD($data);
        // echo $_POST['uraian_kegiatan'];
    }

    public function lihatKumD(){
        $data = array(
                'kumd' => $this->KumDModel->lihatKumD(),
            );
        // $datac = $this->KumDModel->lihatKumD();
        // print_r($data);
        $this->load->view('kumDViewAll', $data);
    }

    public function downloadword(){
        $data = array(
                'cekkredit' => $this->KumDModel->cekKredit(),
                'lihatall' => $this->KumDModel->lihatKumDAll()
            );
        
        // $datac = $this->KumDModel->lihatKumD();
        // print_r($data);
        $this->load->view('kumDViewWord', $data);
    }
}