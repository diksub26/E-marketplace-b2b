<?php
class Dashboard extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->set_title('Dashboard');
    }

    public function index(){
        $this->template->build('/dashboard', array('test' => 'This is default template'));
    }
}