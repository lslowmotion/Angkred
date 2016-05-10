<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchControl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KumEModel');
        $this->load->helper('url');
    }

    public function autoComplete() {
        $search_data = $this->input->post('search_data');
        $query = $this->KumEModel->get_autoComplete($search_data);
        foreach ($query->result() as $row){
            ?>
            <li><a href="<?php echo base_url();?>"><?php echo $row->nama?></a></li>                
            <?php 
        }
    }

}