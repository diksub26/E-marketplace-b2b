<?php
class Landing_page extends MY_Controller{
    public function __construct() {
        parent::__construct();
        // $this->set_title('Welcome');
    }

    public function index(){
        $this->load->view('landing_page/home');
    }
}