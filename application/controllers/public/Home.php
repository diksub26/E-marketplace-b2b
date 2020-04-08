<?php
class Home extends Admin_Controller{
    public function __construct() {
        parent::__construct();

        $this->set_title('Home');

        $this->module = 'home';
    }

    public function index(){
        $this->template->build($this->module.'/index', array('test' => 'This is default template'));
    }
}