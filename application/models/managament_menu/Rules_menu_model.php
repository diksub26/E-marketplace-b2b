<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_menu_model extends MY_Model
{

    private $resources_menu = 'resources_menu';
    private $roles_menu = 'roles_menu';

    public function __construct() {
        parent::__construct();
        $this->table = 'rules_menu';
        $this->pk = 'id_rules_menu';
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

    public function getRuleList()
    {
        $select = "$this->table.id_roles_menu,".
                "CONCAT('[', GROUP_CONCAT(CONCAT('{\"id_rules_menu\": \"',$this->table.id_rules_menu,'\",\"id_menu\": \"',$this->resources_menu.id_menu,'\",','\"menu\":\"',$this->resources_menu.menu,'\", \"access\":\"',$this->table.access,'\"}')),']')".
                "as menu";

        $this->db->select($select);
        $this->db->from($this->table);
        $this->db->from($this->resources_menu);

        $where = "$this->table.id_menu = $this->resources_menu.id_menu";
        $this->db->where($where);

        $this->db->group_by("$this->table.id_roles_menu");

        $query = $this->db->get()->result();
        return $query;
    }

    public function getAllDataWithResources($column ='',$where='')
    {
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->join($this->resources_menu, "$this->resources_menu.id_menu =  $this->table.id_menu");

        return $this->db->get()->result();
    }

    public function checkAvailiable($id_menu,$id_roles)
    {
        $this->db->from($this->table);
        $this->db->where(array('id_menu' => $id_menu));
        $this->db->where(array('id_roles_menu' => $id_roles));

        return $this->db->get()->row();
    }
}