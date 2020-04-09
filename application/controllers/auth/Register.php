<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @package App
 * @category Controller
 * @author diksub
 */

 class Register extends MY_Controller
 {
     public function __construct()
     {
        parent::__construct();

        $this->module = 'auth/register';

     }

    public function index()
    {
        // $this->load->library('email');
        $this->load->helper('email');
        // $this->email->initialize($this->config->item('mail'));
        $email = 'diki@dev.netkromsolution.com';
        // //konfigurasi pengiriman
        // $this->email->from($this->config->item('mail')['smtp_user']);
        // $this->email->to($email);
        // $this->email->subject("Verifikasi Akun");
        // $this->email->message(
        // "Hai , silahkan verifikasi akun anda <br><br>"
        // );

        // if($this->email->send()){
        //     echo '<span class="hljs-keyword">echo</span> <span class="hljs-string">"Berhasil melakukan registrasi, silahkan cek email kamu"</span>';
 
        // }else{
        //     //notifikasi jika email sudah terkirim atau belum terkirim
            
        //    echo ' <span class="hljs-keyword">echo</span> <span class="hljs-string">"Berhasil melakukan registrasi, namu gagal mengirim verifikasi email"</span>';
        // }

        // if(preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email)){
        //     echo 'ok';
        // }
        // else {
        //     echo 'false';
        // }

//         if (valid_email('email@somesite.com'))
// {
//         echo 'email is valid';
// }
// else
// {
//         echo 'email is not valid';
// }

    echo $this->_send_verification($email,array('name' => 'diki','str' => $this->_getRandomString(100)));
    }

    private function _send_verification($mail, $data){
        $this->load->library('email');

        //init mail config
        $this->email->initialize($this->config->item('mail'));

        $this->email->from($this->config->item('mail')['smtp_user']);
        $this->email->to($mail);
        $this->email->subject("ROKET UMKM | Verifikasi Akun");

        $this->email->message($this->_verifyMsg($data));

        if($this->email->send()){
            return 'SUCCESS';
        }else{
            return 'ERROR';
        }
        
    }

    public function verify($get)
    {

        echo $this->_getRandomString(100);
    }

    private function _verifyMsg($data){
        return $this->load->view($this->module.'/message',$data,TRUE);
    }
 }
 