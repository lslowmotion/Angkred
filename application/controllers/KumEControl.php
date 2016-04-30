<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KumEControl extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('KumE');
	}
	public function index()
	{
		$data['kegiatanUnsurPenunjang'] = $this->KumE->getTitleArray();
		$this->load->view('KumE',$data);
	}
}