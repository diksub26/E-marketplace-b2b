<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules extends MY_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->module = 'managament_menu/rules';

        //title
         $this->set_title('Kelola Rules Menu');
    }

    public function index()
    {
        $this->template->build($this->module.'/index');
    }
}
