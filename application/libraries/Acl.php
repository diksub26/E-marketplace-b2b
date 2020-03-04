<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Zend\Permissions\Acl\Acl as Zend_Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class Acl 
{
    function __construct() {
        
    }

    function test(){
        $acl = new Zend_Acl();
    
        $acl->addRole(new Role('guest'))
            ->addRole(new Role('member'))
            ->addRole(new Role('admin'));
    
        $parents = array('guest', 'member', 'admin');
        $acl->addRole(new Role('someUser'), $parents);
    
        $acl->addResource(new Resource('someResource'));
    
        $acl->deny('guest', 'someResource');
        $acl->allow('member', 'someResource');
    
        echo $acl->isAllowed('someUser', 'someResource') ? 'allowed' : 'denied';
    }

}