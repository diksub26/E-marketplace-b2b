<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

    public function __construct() {
        parent::__construct();

        //set module
        $this->module = 'auth/login';

        //model
        $this->load->model('auth/login_model');
        $this->model = $this->login_model;

        //set title
        $this->template->set_title('Login');

        //change the layouts to layouts login
        $this->template->set_layout_path($this->module);
        $this->template->set_layout_name('index');
    }

    public function index(){

        $data['csrf'] = $this->getCsrf();

        if($this->session->userdata('LOGGEDIN')){
            redirect('home');
        };

        $data = array(
            'username' => '',
            'pass' => '',
        );

        if($this->input->post()){
            if($this->input->ip_address()){
                if($this->input->user_agent()){
                    $post = array();

                    $post['ipaddress'] = $this->input->ip_address();
                    $post['user_agent'] = $this->input->user_agent();
                    $post['username'] = $this->input->post('username', TRUE);
                    $post['password'] = $this->input->post('password', TRUE);

                    $login = $this->model->login($post);
                    if($login['status'] == 'SUCCESS'){
                        $this->session->set_userdata('ID',$this->encryption->encrypt($login['data']->ID));
                        $this->session->set_userdata('USERNAME',$login['data']->USERNAME);
                        $this->session->set_userdata('ROLE_NAME',$login['data']->ROLE_NAME);
                        $this->session->set_userdata('LOGGEDIN', TRUE);

                        //mapping additional session
                        $this->_mapping_additional_session($login['data']->ID_PARENT);
                        // print_r($this->session->userdata());exit();

                        //update roles
                        $this->load->model('acl/resources_model');
                        $this->resources_model->update_roles();  
                        
                        //redirect if logged in
                        redirect("home");
                    }else{
                        $data['username'] = $post['username'];
                        $data['pass'] = $post['password'];
                        $this->session->set_flashdata('ERROR', $login['msg']);
                    }
                }else{

                    $data['username'] = $this->input->post('username', TRUE);
                    $data['pass'] = $this->input->post('password', TRUE);

                    $this->session->set_flashdata('ERROR','LOGIN GAGAL SILAHKAN ULANGI KEMBALI </br> (err code : risk_02)');
                }                    
            }else{

                $data['username'] = $this->input->post('username', TRUE);
                $data['pass'] = $this->input->post('password', TRUE);

                $this->session->set_flashdata('ERROR','LOGIN GAGAL SILAHKAN ULANGI KEMBALI </br> (err code : risk_01)');
            }
        }
        
        $this->template->buildNoAcl('', $data);
    }

    public function logout()
    {
        $this->activity_log->write_log($this->session->userdata('USERNAME'), 'Logout Success');

        //clear session
        $this->session->sess_destroy();
        
        redirect('/');
    }

    private function _mapping_additional_session($parent_id)
    {
        switch ($parent_id) {
            case '2':
                $this->load->model('managament_user/umkm_model');
                $data = $this->umkm_model->getUmkmUser('UMKM_ID');
                $this->session->set_userdata('UMKM_ID',$this->encryption->encrypt($data->UMKM_ID) );
                break;            
            default:
                return '';
                break;
        }
    }
}