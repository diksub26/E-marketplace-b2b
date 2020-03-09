<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resources_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->_get_resources();
    }

    private function _get_resources()
    {
        if(!$this->session->userdata('ROLES_MENU')){
            $procedure_name = "CALL getResourcesMenu(?)";
            $roles = ( $this->session->userdata('USER_NAME')  ? $this->session->userdata('USER_NAME') : 'Guest');
            $params = array($roles);
            $query = $this->db->query($procedure_name,$params)->result();
            mysqli_next_result($this->db->conn_id);
            if($query){
                $this->session->set_userdata('ROLES_MENU',$query);
            }
        }

    }
}
