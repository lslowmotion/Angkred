<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginControl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DosenModel');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
        $this->load->library('session');
    }

    public function index() {
        if($this->session->userdata('is_login')){
            redirect('/KumEControl/');
        }
        $this->load->view('LoginView');
    }

    public function checkDosen() {
        $nip = $this->input->post('nip');
        $password = md5($this->input->post('password'));
        if ($this->DosenModel->validasiDosen($nip, $password)) {
            redirect('/KumEControl/');
        } else {
            redirect('/LoginControl/');
        };
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/LoginControl/');
    }
}
