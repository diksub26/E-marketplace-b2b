<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model 
{
    public function __construct() {
        parent::__construct();
    }

    private $table_activity = 'count_activity_login';
    private $table_login =  'login';
    private $table_password = 'mspassword';


    public function login($data = '')
    {
        $login_status = array();

        $login_status['status'] = 'ERROR';
        $login_status['msg'] = 'GAGAL MELAKUKAN LOGIN';
        $login_status['data'] = '';

        if(is_array($data)){
            $activity_login = $this->get_activity_login($data['ipaddress']);
            if($activity_login)
            {
                //check the number of login attempts
                if($activity_login->COUNT > 5){

                    //get last time, entered login
                    $timestamps_diff = date_diff(date_create($activity_login->TIMESTAMPS), date_create());

                    // Check the time limit for locking the login
                    if($timestamps_diff->i < 30){

                        $login_status['msg'] = 'Sorry you have entered the login limit, your account is locked, try 30 minutes later';
                        log_message('Error', 'Securtiy risk for login process, user have entered the login limit');

                    }else{

                        // delete activities after more than 30 minutes
                        $this->delete_activity_login($activity_login->IPADDRESS);
                        log_message('Info', $login['username']."account has been unlocked");
                        
                        //go to login process
                        $login_status = $this->auth($data);
                    }
                }else{
                    //go to login process
                    $login_status = $this->auth($data);
                }

                //update activity login when login attempts failed
                if($login_status['status'] != 'SUCCESS'){
                    //update activity login
                    $this->update_activity_login($activity_login->IPADDRESS, $activity_login->COUNT + 1);
                }else{
                    //delete activity login when success
                    $this->delete_activity_login($activity_login->IPADDRESS);
                }
                
            }else
            {
                $login_status = $this->auth($data);
                
                //insert activity login when login attempts failed
                if($login_status['status'] != 'SUCCESS'){
                    //insert activity login
                    $this->insert_activity_login($data['ipaddress']);
                }else{
                    //delete activity login when success
                    $this->delete_activity_login($data['ipaddress']);
                }
            }
        }else{
            log_message('Error', 'only need array param for Login_model->login()');
        }

        return $login_status;

    }

    private function get_activity_login($ipaddress)
    {
        $this->db->from($this->table_activity);
        $this->db->where('IPADDRESS',$ipaddress);
        return $this->db->get()->row();
    }

    private function insert_activity_login($ipaddress)
    {
        $this->db->insert($this->table_activity, array('IPADDRESS' => $ipaddress, 'COUNT' => 1));
    }

    public function delete_activity_login($ipaddress)
    { 
        $this->db->where('IPADDRESS',$ipaddress);
        $this->db->delete($this->table_activity);
    }

    private function auth($data)
    {
        $login_data = array('status' => 'ERROR','msg' => 'GAGAL MELAKUKAN LOGIN, USERNAME YANG ANDA MASUKAN SALAH', 'data' => '');
        $data_username = $this->get_active_user($data['username']);

        if($data_username){

            $password_data = $this->checking_password($data_username->ID, $data['password']);

            if($password_data == 1){                
                $login_data = array('status' => 'SUCCESS', 'msg' => 'BERHASIL LOGIN KE SISTEM','data' => $data_username);
                $this->activity_log->write_log($data_username->USERNAME, 'Login Berhasil');
            }else{
                $login_data = array('msg' => 'GAGAL MELAKUKAN LOGIN');
            }
        }

        return $login_data;
    }

    public function update_activity_login($ipaddress, $count)
    {
        $this->db->where('IPADDRESS',$ipaddress);
        $this->db->update($this->table_activity, $count);
    }

    private function get_active_user($username)
    {
        $this->db->from($this->table_login);
        $this->db->where('USERNAME', $username);
        return $this->db->get()->row();
    }

    private function checking_password($user_id, $password){
        $vertify_pass = 0;

        //get password by USER ID from database
        $this->db->from($this->table_password);
        $this->db->where(array('USER_ID'=> $user_id));
        $query =  $this->db->get()->row();

        if($query->PASSWORD){
            //hashing password from user input
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $vertify_pass = password_verify ( $password , $password_hash );
            log_message('debug',"Password has been verify result : $vertify_pass");
        }

        return $vertify_pass;
    }
}
