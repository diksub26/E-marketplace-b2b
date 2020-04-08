<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends MY_Model 
{
    private $roles_menu = 'roles_menu';

    public function __construct() {
        parent::__construct();
        $this->table = 'login';
        $this->pk = 'ID';
    }

    public function get_data_tables()
    {
        // param for data table
        $join = array();
        $select = "ID, USERNAME, LAST_LOGIN, $this->roles_menu.roles_name, CREATED";

        $join[] = [
            'table' => $this->roles_menu,
            'condition' => $this->roles_menu.'.id_roles_menu = '.$this->table.'.ROLE_ID',
        ];

        $where = array(
            "$this->roles_menu.id_parent_roles" => 1
        );
        
        return $this->_build_data_tables($this->table, $where,$select,$join);
    }
}
