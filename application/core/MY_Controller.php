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

    /**
     * module name
     * @var string
     *      
     * */
    public $module;

    public function __construct(){
        parent::__construct();

        if(!$this->session->userdata('LOGGEDIN')){
            $this->session->set_userdata('USERNAME','GUEST');
            $this->session->set_userdata('ROLE_NAME','GUEST');
        }
       
    }

    protected function checkAjaxRequest(){
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {    
            return true;   
        }else{
            show_404();
            exit();
        }   
    }

    protected function getCsrf()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        return $csrf;
    }
 }

include_once(APPPATH . '/core/Admin_Controller.php');
 