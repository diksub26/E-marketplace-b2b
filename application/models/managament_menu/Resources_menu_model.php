<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources_menu_model extends MY_Model
{

    private $table = 'resources_menu';
    private $table_login = 'login';

    public function __construct() {
        parent::__construct();
    }

    public function get_data_tables()
    {
        // param for data table
        $join = array();
        $select = 'id_menu, menu, resources, parent, login.USERNAME';

        $join[] = [
            'table' => $this->table_login,
            'condition' => $this->table_login.'.ID = '.$this->table.'.created_by',
        ];

        return $this->_build_data_tables($this->table,'',$select,$join);
    }

    public function get_data_by_id($id ='')
    {
        $resp = array(
            'status' => 'ERROR',
            'msg' => 'DATA TIDAK DITEMUKAN',
        );

        $query = $this->_get_data($this->table,$id);
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
}