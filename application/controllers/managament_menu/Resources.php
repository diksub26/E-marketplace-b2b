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

    private $prevent_resources = array(0,1,2);

    public function index()
    {
        $this->template->set_auto_js(false);
        $this->template->add_js(array('data_table','switchery','select2'));
        $this->template->add_css(array('data_table','switchery','select2'));
        $this->template->build($this->module.'/index');
    }

    public function data_tables()
    {
        $this->checkAjaxRequest();
        $data_tables =  $this->resources_menu_model->get_data_tables();

        echo $data_tables;
    }

    public function getForm()
    {
        $this->checkAjaxRequest();
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $data['csrf'] = $csrf;
        $this->load->view($this->module.'/form', $data);
    }

    public function getDetailResources()
    {
        $this->checkAjaxRequest();
        $post = $this->input->post();
        $data = $this->resources_menu_model->get_data_by_id($post);
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $data['csrf'] = (object) $csrf;

        echo json_encode($data);
    }

    public function update()
    {
        $this->checkAjaxRequest();
        $update = '';
        $id = [
            'id_menu' => $this->input->post('id_menu')
        ];

        $data = [
            'menu' => $this->input->post('menu'),
            'resources' => $this->input->post('resources'),
            'updated_by' => $this->encryption->decrypt($this->session->userdata('ID'))
        ];

        if(in_array($id['id_menu'], $this->prevent_resources)){
            $update = $this->getPreventMsg();
        }else{
            $update = $this->resources_menu_model->update($id,$data);
        }

        echo json_encode($update);
    }

    public function delete()
    {
        $this->checkAjaxRequest();
        $data = [
            'id_menu' => $this->input->post('id_menu')
        ];
        $delete = '';

        if(in_array($data['id_menu'], $this->prevent_resources)){
            $delete = $this->getPreventMsg();
        }else{
            $delete = $this->resources_menu_model->delete($data);
        }

        echo json_encode($delete);

        
    }

    public function save()
    {
        $this->checkAjaxRequest();
        $data = [
            'menu' => $this->input->post('menu'),
            'resources' => $this->input->post('resources'),
            'created_by' => $this->encryption->decrypt($this->session->userdata('ID')),
            'updated_by' => $this->encryption->decrypt($this->session->userdata('ID'))
        ];

        $save = $this->resources_menu_model->insert($data);
        echo json_encode($save);
    }
}
