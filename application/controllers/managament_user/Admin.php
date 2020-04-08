<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller
{
    public function __construct() {
        parent::__construct();

        $this->module = 'managament_user/admin';

        //model
        $this->load->model($this->module.'_model');

        //title
         $this->set_title('Daftar Sys Admin');
    }

    private $prevent_user = array(0,1,2);

    public function index()
    {
        $this->template->set_auto_js(false);
        $this->template->add_js(array('data_table'));
        $this->template->add_css(array('data_table'));
        $this->template->build($this->module.'/index');
    }

    public function data_tables()
    {
        $this->checkAjaxRequest();
        $data_tables =  $this->admin_model->get_data_tables();

        echo $data_tables;
    }

}