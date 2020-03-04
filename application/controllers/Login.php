<?php
class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->model = $this->login_model;
    }

    public function index(){

        $this->acl->test();

        if($this->input->post()){
            if($this->input->ip_address()){
                if($this->input->user_agent()){
                    $post = array();

                    $post['ipaddress'] = $this->input->ip_address();
                    $post['user_agent'] = $this->input->user_agent();
                    $post['username'] = $this->input->post('username', TRUE);
                    $post['password'] = $this->input->post('password', TRUE);

                    $login = $this->model->login($post);
                    print_r($login);exit();
                    // redirect(base_url('test'));
                }else{
                    $this->session->set_flashdata('ERROR, LOGIN GAGAL SILAHKAN ULANGI KEMBALI (err code : risk_02)');
                    $this->load->view('login');
                }                    
            }else{
                $this->session->set_flashdata('ERROR, LOGIN GAGAL SILAHKAN ULANGI KEMBALI (err code : risk_01)');
                $this->load->view('login');
            }
        }else{
            if($this->session->userdata('loggedin')){
                // redirect();
            }
            $this->load->view('login');
        }
    }
}