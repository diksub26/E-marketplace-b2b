<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * this is config for mail
 */

$config['mail'] = array(
    
    'charset'   => 'utf-8',
    'useragent' => 'Roket UMKM',
    'protocol'  => "smtp",
    'mailtype'  => "html",
    'smtp_host' => "ssl://smtp.gmail.com",//pengaturan smtp
    'smtp_port' => "465",
    'smtp_timeout'   => "400",
    'smtp_user'     => "roketumkm@gmail.com", // isi dengan email kamu
    'smtp_pass' => "diksub26", // isi dengan password kamu
    'crlf'      =>"\r\n",
    'newline'   =>"\r\n",
    'wordwrap'  => TRUE,
);