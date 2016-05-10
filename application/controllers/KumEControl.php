<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KumEControl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('KumEModel');
    }

    public function index() {
        $this->load->view('KumEView');
    }

}
