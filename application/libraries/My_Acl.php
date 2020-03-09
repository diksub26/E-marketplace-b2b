<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Laminas\Permissions\Acl\Acl;
use Laminas\Permissions\Acl\Role\GenericRole as Role;
use Laminas\Permissions\Acl\Resource\GenericResource as Resource;

class My_Acl
{
    /**
     * 
     * property for instance
     */
    var $CI, $acl,$resources;

    function __construct() {
        //Get instance CI
        $this->CI =& get_instance();
        $this->_acl_init();
    }

    private function _acl_init(){
        $this->acl = new Acl();
        $this->CI->load->model('acl/resources_model');
        $this->resources = $this->CI->session->userdata('ROLES_MENU');
        // var_dump($this->resources);die;
        //add resources to acl laminas
        foreach ($this->resources as $key => $value) {
            if($value->resources){
                $this->acl->addResource(new Resource($value->resources));
            }
        }
        $this->acl->addRole(new Role($this->CI->session->userdata('ROLE_NAME')));
    
        //add allowed resources
        foreach ($this->resources as $key => $value) {
            if($value->resources){
                $this->acl->allow(new Resource($this->CI->session->userdata('ROLE_NAME'),$value->resources));
            }
        }
    }

    public function is_allowed($resource)
    {
        // Check uri_string resources from the longest segment
        $has_resource = $this->_has($resource);
        while ((strlen($resource) > 0) && !$has_resource) {
            $pos = strrpos($resource, '/');
            if ($pos === FALSE)
                $resource = '';
            else {
                $resource = substr($resource, 0, $pos);
                $has_resource = $this->_has($resource);
            }
        }
        
        //checking availability resources
        if(!$this->_has($resource)){
            return FALSE;
        }

        $role = $this->CI->session->userdata('ROLE_NAME');
        //checking availability role
        if(!$this->_has_role($role)){
            return FALSE;
        }

        return $this->acl->isAllowed($role, $resource);
    }

    private function _has($resource) {
        return $this->acl->hasResource($resource);
    }

    private function _has_role($role) {
        return $this->acl->hasRole($role);
    }
}