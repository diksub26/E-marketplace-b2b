<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_menu_model extends MY_Model
{

    private $table_login = 'login';
    private $parent_roles = 'parent_roles';

    public function __construct() {
        parent::__construct();
        $this->table = 'roles_menu';
        $this->pk = 'id_roles_menu';
    }

    public function get_data_tables()
    {
        // param for data table
        $join = array();
        $select = "id_roles_menu, roles_name, login.USERNAME, $this->parent_roles.name as parent";

        $join[] = [
            'table' => $this->table_login,
            'condition' => $this->table_login.'.ID = '.$this->table.'.created_by',
        ];

        $join[] = [
            'table' => $this->parent_roles,
            'condition' => $this->parent_roles.'.id_parent_roles = '.$this->table.'.id_parent_roles',
        ];

        return $this->_build_data_tables($this->table,'',$select,$join);
    }

    public function get_data_by_id($id ='')
    {
        $resp = array(
            'status' => 'ERROR',
            'msg' => 'DATA TIDAK DITEMUKAN',
        );

        $query = $this->_get_data($this->table,array($this->pk => $id));
        if($query){
            $resp['status'] = 'SUCCESS';
            $resp['msg'] = $query->row();
        }
        return $resp;
    }

    public function updateData($id, $data)
    {
        $response = array(
            'status' => 'SUCCESS',
            'msg' => 'DATA BERHASIL DI UPDATE'
        );
        $update = $this->update($this->table,$data, $id);

        if($update == false){
            $response['status'] = 'ERROR';
            $response['msg'] = 'Kesalahan dalam update data';
        }

        return $response;
    }

    public function getAllData($select = '', $where ='')
    {
        return $this->_get_data($this->table,$where,$column = $select)->result();
    }
}