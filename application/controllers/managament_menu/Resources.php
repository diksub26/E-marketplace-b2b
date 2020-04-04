<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends MY_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->module = 'managament_menu/resources';

        //model
        $this->load->model($this->module.'_menu_model');

        //title
         $this->set_title('Kelola Resources Menu');
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
        $data_tables =  $this->resources_menu_model->get_data_tables();

        echo $data_tables;
    }

    public function getForm()
    {
        $this->load->view($this->module.'/form');
    }

    public function getDetailResources()
    {
        $post = $this->input->post();

        echo json_encode($this->resources_menu_model->get_data_by_id($post));
    }

    public function update()
    {
        $id = [
            'id_menu' => $this->input->post('id_menu')
        ];

        $data = [
            'menu' => $this->input->post('menu'),
            'resources' => $this->input->post('resources'),
            'updated_by' => $this->encryption->decrypt($this->session->userdata('ID'))
        ];

        $update = $this->resources_menu_model->updateData($id,$data);
        echo json_encode($update);
    }
}
