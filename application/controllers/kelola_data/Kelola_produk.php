<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_produk extends MY_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->module = 'kelola_data/kelola_produk';

        //model
        $this->load->model($this->module.'_model');

        //title
        $this->set_title('Kelola Produk');

    }

    public function index()
    {
        $this->template->set_auto_js(false);
        $this->template->add_js(array('data_table','switchery','select2'));
        $this->template->add_css(array('data_table','switchery','select2'));
        $this->template->build($this->module.'/index');
    }

    public function data_tables()
    {
        $data_tables = $this->kelola_produk_model->get_data_tables();

        echo $data_tables;
    }

    public function getDetailProduk()
    {
        $post = $this->input->post();
       
        echo json_encode($this->kelola_produk_model->get_data_by_id($post));
    }

    public function getForm()
    {
        $this->load->view($this->module.'/form');
    }

    function test(){

    }
}
