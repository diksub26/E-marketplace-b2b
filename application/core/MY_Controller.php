<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Base Controllers for public controllers
 * 
 * @package CI-Elegant
 * @category Controllers
 * @author diksub
 * 
 */

 class MY_Controller extends CI_Controller 
 {

    public function __construct(){
        parent::__construct();

        if(!$this->session->userdata('LOGGEDIN')){
            $this->session->set_userdata('USERNAME','GUEST');
            $this->session->set_userdata('ROLE_NAME','GUEST');
        }

        // check acl
        $this->my_acl->acl_init();
        $allowed =  $this->my_acl->is_allowed($this->uri->uri_string());
        if(!$allowed){
            redirect('auth/login');
        }        
    }

    public function set_title($title){
        $this->template->set_title($title);
    }
 }
 