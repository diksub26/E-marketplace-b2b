<?php
class Test extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->template->set_title('ok');
        $this->template->build('/test', array('test' => 'This is default template, thanks to Gentellela'));
    }
}