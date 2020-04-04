<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model 
{
    
    public function __construct() {
        parent::__construct();
    }

    protected function _call_procedure($procedure, $params = array())
    {
        if(empty($procedure)){
            show_error("PROCEDURE EMPTY CHECK YOU'RE MODEL",500,'MODEL ERROR');
        }

        if(empty($params) || is_string($params)){
            show_error("FORMAT PARAM FOR PROCEDURE INVALID CHECK YOU'RE MODEL",500,'MODEL ERROR');
        }

        $query = $this->db->query($procedure,$params);
        mysqli_next_result($this->db->conn_id);
        
        return $query;
    }

    protected function _get_data($table,$where = '', $column = ''){

        if(empty($table) || !is_string($table)){
            show_error("TABLE OR VIEW NAME FORMAT IS INVALID, CHECK YOU'RE MODEL",500,'MODEL ERROR');
        }

        if(!empty($column)){
            $this->db->select($column);
        }

        if(!empty($where)){
            $this->db->where($where);
        }

        $query = $this->db->get($table);

        return $query;

    }

    protected function update($table,$id, $data)
    {
        // $this->db->where($id);
        return $this->db->update($table, $id, $data);
    }

    /**
     * @param $table string
     * @param $where standart where codeigniter
     * @param $select standart select codeigniter
     * @param $join array([] => array('table',condition','join(standart ci)'));
     * 
     * @return json for data tables
     */

    protected function _build_data_tables($table, $where='', $select='', $join = array()){

        $output = array( 
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->_count_all($table,$where,$select),
            "recordsFiltered" => $this->_dt_count_filtered($table, $where,$select,$join),
            "data" => $this->_data_tables_basic($table,$where,$select,$join),
        );

        //output dalam format JSON
        echo json_encode($output);
    }
 
    protected function _count_all($table, $where='',$select='' , $join = array())
    {
        $this->db->from($table);

        if(!empty($join)){
            foreach($join as $val){
                if(isset($val['table']) && isset($val['condition'])){
                    if(isset($val['join'])){
                        $this->db->join($val['table'], $val['condition'],$val['join']);
                    }else{
                        $this->db->join($val['table'], $val['condition']);
                    }
                }else{
                    log_message('Error', 'wrong param for joining table (data table)');
                    show_error('WRONG PARAM FOR JOINING TABLE ("DATA TABLE)',500,'MODEL ERROR');
                }
            }
        }

        if(!empty($select)){
            $this->db->select($select);
        }

        if(!empty($where)){
            $this->db->where($where);
        }

        return $this->db->count_all_results();
    }



    
    #=================================================== Private Method ===========================================================================#

    /* Method for data tables*/

    /**
     * @param $table string
     * @param $where standart where codeigniter
     * @param $select standart select codeigniter
     * @param $join array([] => array('table',condition','join(standart ci)'));
     */

    private function _data_table_basic_query($table, $where = '',$select,$join = array()){
        $post = $this->input->post();
        
        $this->db->from($table);

        if(!empty($join)){
            foreach($join as $val){
                if(isset($val['table']) && isset($val['condition'])){
                    if(isset($val['join'])){
                        $this->db->join($val['table'], $val['condition'],$val['join']);
                    }else{
                        $this->db->join($val['table'], $val['condition']);
                    }
                }else{
                    log_message('Error', 'wrong param for joining table (data table)');
                    show_error('WRONG PARAM FOR JOINING TABLE ("DATA TABLE)',500,'MODEL ERROR');
                }
            }
        }

        if(!empty($select)){
            $this->db->select($select);
        }

        if(!empty($where)){
            $this->db->where($where);
        }
        $column = $post['columns'];

        $x = 0;
        foreach ($column as $item) {
            if(isset($post['search']['value'])){

                if(!empty($item['name'])){
                    if($x===0) // looping awal
                    {
                        $this->db->group_start(); 
                        $this->db->like($item['name'], $post['search']['value']);
                    }
                    else
                    {
                        $this->db->or_like($item['name'], $post['search']['value']);
                    }
     
                    if(count($column) - 1 == $x) 
                        $this->db->group_end();
                }
 
            }

            $x++;
        }

        if(isset($post['order'])) 
        {
            $this->db->order_by($post['order']['0']['column'], $post['order']['0']['dir']);
        } 
    }

    private function _data_tables_basic($table, $where ='',$select='',$join=array()){

        $post = $this->input->post();
        
        $this->_data_table_basic_query($table, $where,$select,$join);
        if($post['length'] != -1){
            $this->db->limit($post['length'], $post['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }

    private function _dt_count_filtered($table, $where ='',$select='',$join=array())
    {

        $this->_data_table_basic_query($table, $where,$select,$join);
        $query = $this->db->get();
        return $query->num_rows();
    }

    /* end method for data tables */
}

/* end of file core/My_Model.php*/

