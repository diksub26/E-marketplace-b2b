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

 class Admin_Controller extends MY_Controller 
 {

    /**
     * module name
     * @var string
     *      
     * */
    public $module;

    public function __construct(){
        parent::__construct();

        // check acl
        $this->my_acl->acl_init();
        $allowed =  $this->my_acl->is_allowed($this->uri->uri_string());
        if(!$allowed){
            redirect('landing_page');
        }        
    }

    public function set_title($title){
        $this->template->set_title($title);
    }

    protected function getPreventMsg(){
        $msg = array(
            'status' => 'ERROR',
            'msg' => "You don't have privillages to delete/update this data",
            'csrf' => (object) $this->getCsrf()
        ); 

        return $msg;
    }
 }
 