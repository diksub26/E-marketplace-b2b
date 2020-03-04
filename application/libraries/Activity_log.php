<?php 
class Activity_log {
    /**
     * Constructor
     */
    public function __construct()
    {
        $config =& get_config();

        $this->_log_path = ($config['log_path'] != '') ? $config['log_path'] : APPPATH.'logs/';

        if ( ! is_dir($this->_log_path) OR ! is_really_writable($this->_log_path))
        {
            $this->_enabled = FALSE;
        }

        if (is_numeric($config['log_threshold']))
        {
            $this->_threshold = $config['log_threshold'];
        }

        if ($config['log_date_format'] != '')
        {
            $this->_date_fmt = $config['log_date_format'];
        }
    }

    // --------------------------------------------------------------------
    /**
     * Write Log File
     *
     * Generally this function will be called using the global log_message() function
     *
     * @access    public
     * @param    string    the error level
     * @param    string    the error message
     * @param    bool    whether the error is a native PHP error
     * @return    bool
     */        
   public function write_log($username = '(guest)', $msg)
    {
        $filepath = $this->_log_path.'activity-log-'.date('Y-m-d').'.php';
        $message  = '';
        if ( ! file_exists($filepath))
        {
            $message .= "<"."?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?".">\n\n";
        }

        if ( ! $fp = @fopen($filepath, FOPEN_WRITE_CREATE))
        {
            return FALSE;
        }
		
        $message .= $username.' - '.date($this->_date_fmt). ' --> '.$msg."\n";

        flock($fp, LOCK_EX);
        fwrite($fp, $message);
        flock($fp, LOCK_UN);
        fclose($fp);

        @chmod($filepath, FILE_WRITE_MODE);
        return TRUE;
    }

}