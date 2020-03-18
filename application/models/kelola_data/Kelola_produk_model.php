<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_produk_model extends MY_Model 
{
    private $view_product = 'V_PRODUK';

    public function __construct() {
        parent::__construct();
    }
    
    public function add_data($params){
        $procedure = "CALL ADD DATA PRODUCT (?,?,?,?,?,?,?,?)";
        $sql = $this->_call_procedure($procedure, $params);

        return $sql;
    }

    public function get_data_produk($selected = '', $where ='')
    {
        return $this->_get_data($this->view_product,$selected, $where);
    }

    public function get_data_tables(){
        $user_id = $this->encryption->decrypt($this->session->userdata('ID'));
        $select = array(
            'ID_PRODUK','NAMA','HARGA','KATEGORI','STOCK'
        );
        return $this->_build_data_tables('v_produk',array('ID_PRODUK' => $user_id),$select);
    }

    public function get_data_by_id($id ='')
    {
        $resp = array(
            'status' => 'ERROR',
            'msg' => 'DATA TIDAK DITEMUKAN',
        );

        $query = $this->_get_data($this->view_product,$id);
        if($query){
            $resp['status'] = 'SUCCESS';
            $resp['msg'] = $query->row();
        }
        return $resp;
    }
}
