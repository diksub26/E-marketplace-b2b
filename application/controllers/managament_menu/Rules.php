<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules extends MY_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->module = 'managament_menu/rules';

        // model
        $this->load->model($this->module.'_menu_model');
        $this->load->model('managament_menu/roles_menu_model','roles_menu_model');
        $this->load->model('managament_menu/resources_menu_model','resources_menu_model');

        //title
         $this->set_title('Kelola Rules Menu');
    }

    private $prevent_rules = array(1,2,3,5,8);

    public function index()
    {

        $this->template->set_auto_js(false);
        $this->template->add_js(array('switchery','select2'));
        $this->template->add_css(array('switchery','select2'));
        $data = array(
            'roles' => $this->roles_menu_model->getAlldata(array('id_roles_menu','roles_name')),
            'ruleList' => $this->rules_menu_model->getRuleList(),
        );

        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $data['csrf'] = $csrf;

        $this->template->build($this->module.'/index',$data);
    }
    
    public function update()
    {
        $id = [
            'id_rules_menu' => $this->input->post('id')
        ];

        $data = array(
            'access' => $this->input->post('acc')
        );

        $update = $this->rules_menu_model->update($id, $data);
        
        echo json_encode($update); 
    }

    public function delete()
    {
        $this->checkAjaxRequest();

        $data = [
            'id_rules_menu' => $this->input->post('id')
        ];

        $delete = '';
        if(in_array($data['id_rules_menu'], $this->prevent_rules)){
            $delete = $this->getPreventMsg();
        }else{
            $delete = $this->rules_menu_model->delete($data);
        }
        echo json_encode($delete);
    }

    public function getForm($roles='')
    {
        $this->checkAjaxRequest();

        $roles_data =$this->roles_menu_model->get_data_by_id($roles);

        if($roles_data['status'] == 'SUCCESS'){
            $data['roles_name'] = strtolower(preg_replace('/\s+/','-',$roles_data['msg']->roles_name));
            
            $data['roles'] = $roles;
            $data['menu'] = $this->resources_menu_model->getAllData(array('id_menu','menu'));
            $data['csrf'] = $this->getCsrf();

            $this->load->view($this->module.'/form', $data);
        }else{
            show_404();
        }
    }

    public function save()
    {
        $this->checkAjaxRequest();
        $data = [
            'id_menu' => $this->input->post('id_menu'),
            'access' => 'allowed',
            'id_roles_menu' => $this->input->post('roles'),
        ];
        $resp = array('status' => '','msg' => '');

        $cek_rules = $this->rules_menu_model->checkAvailiable($data['id_menu'], $data['id_roles_menu']);
        if($cek_rules){
            $resp['status'] = 'ERROR';
            $resp['msg'] = 'MENU SUDAH TERDAFTAR';
            $resp['csrf'] = $this->getCsrf();
        }else{

            $select = 'id_rules_menu, menu, access';
            $resp = $this->rules_menu_model->insert($data);
            $rulesData = $this->rules_menu_model->getAllDataWithResources($select,array('id_roles_menu' => $data['id_roles_menu']));
           
            $resp['id_menu'] = $data['id_menu'];
            $resp['roles_name'] = $this->input->post('roles_name');
            $resp['html'] = $this->_getListHtml($rulesData);
        }

        echo json_encode($resp);
    }

    private function _getListHtml($data){
        $html = '';
        foreach ($data as $val) {
            $html .= '<div class="form-group row" id="el-switch-'.$val->id_rules_menu.'" >'.
                '<label class="control-label col-md-4 col-sm-4 col-xs-12">'.$val->menu.'</label>'.
                '<input type="checkbox" class="js-switch input-sm" name="id" switch_data="IS_"'.$val->id_rules_menu.' '.($val->access == 'allowed' ? 'checked' : '').'/>'.
                '<button class="btn btn-xs btn-danger" onClick="deleteData(\''.$val->id_rules_menu.'\',this)" title="Hapus Data"><i class="fa fa-trash"></i></button>'.
                '</div>';
        }
        
        return $html;
    }
}
