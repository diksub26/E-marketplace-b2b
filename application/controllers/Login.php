<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->model = $this->login_model;
        $this->template->set_title('Login');

        if($this->session->userdata('LOGGEDIN')){
            redirect('dashboard');
        }
    }

    public function index(){
        
        //change the layouts to layouts login
        $this->template->set_layout_path('');
        $this->template->set_layout_name('login');

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
                        $this->session->set_userdata('USERNAME',$login['data']->USERNAME);
                        $this->session->set_userdata('ROLE_NAME',$login['data']->ROLE_NAME);
                        $this->session->set_userdata('LOGGEDIN', TRUE);
                        
                        //redirect if logged in
                        redirect("dashboard");
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
        
        $this->template->build('', $data);
    }
}