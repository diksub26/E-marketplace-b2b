<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends MY_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->module = 'managament_menu/roles';

        //model
        $this->load->model($this->module.'_menu_model');

        //title
         $this->set_title('Kelola Roles Menu');
    }

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
        $data_tables =  $this->roles_menu_model->get_data_tables();

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
        $id = $this->input->post('id_roles_menu');

        $data = $this->roles_menu_model->get_data_by_id($id);

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
        $id = [
            'id_roles_menu' => $this->input->post('id_roles_menu')
        ];

        $data = [
            'roles_name' => $this->input->post('roles_name'),
            'updated_by' => $this->encryption->decrypt($this->session->userdata('ID'))
        ];

        $update = $this->roles_menu_model->update($id,$data);
        echo json_encode($update);
    }


    public function save()
    {
        $this->checkAjaxRequest();
        $data = [
            'roles_name' => $this->input->post('roles_name'),
            'created_by' => $this->encryption->decrypt($this->session->userdata('ID')),
            'updated_by' => $this->encryption->decrypt($this->session->userdata('ID'))
        ];

        $save = $this->roles_menu_model->insert($data);
        echo json_encode($save);
    }

    public function delete()
    {
        
        $this->checkAjaxRequest();
        if($this->input->post('id_roles_menu') < 5 ){
            $resp = array(
                'status' => 'ERROR',
                'msg' => "You don't have privillages to delete this data",
                'csrf' => (object) $this->getCsrf()
            );
    
            echo json_encode($resp);
        }else{
            
            $data = [
                'id_roles_menu' => $this->input->post('id_roles_menu')
            ];
    
            $delete = $this->roles_menu_model->delete($data);
    
            echo json_encode($delete);
        }
        
    }
}
