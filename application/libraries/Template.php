<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Elegant template
 * 
 * @package Elegant-Template
 * @category Library
 * @author diksub
 */

 /**
  * Elegant-Template Class
  */

  class Template 
  {
      /**
       * CodeIgniter instance
       * 
       * @var CodeIgniter
       */
      private $ci;

      /**
       * Config for this template, you can set on $config['template']
       * 
       * @var array
       */
       private $config_template = array();

      /**
       * Path to Template Layout
       * You can change, on $config['template']['layout_path'] at config
       * 
       * @var string
       */
       private $layout_path = 'layouts';
    
       /**
        * Current Layout name
        * You can change, on $config['template']['layout_name'] at config
        *
        * @var string
        */
        private $layout_name = 'index';

        /**
         * Path to assets directory
         * You can change, on $config['template']['layout'] at config
         * 
         * @var string
         */
        private $assets_path = 'assets';

        /**
         * Property for css file
         * You can set, on $config['template']['css'] at config
         * 
         * @var string
         */
        private $css = array();

        /**
         * Property for js header file
         * You can set, on $config['template']['js_header'] at config
         * 
         * @var string
         */
        private $js_header = array();

        /**
         * Property for js file
         * You can set, on $config['template']['js'] at config
         * 
         * @var string
         */
        private $js = array();

        /**
         * Property for list js file
         * You can set, on $config['template']['js_list'] at config
         * This can help you if $auto_js_location is false
         * @var string
         */
        private $js_list = array();

        /**
         * If you're set true, you should manually call $get_js on view
         * You can set, on $config['template']['auto_js_location'] at config
         * 
         * @var string
         */
        private $auto_js_location = true;

        /**
         * Base Site Title
         * You can change, on $config['template']['base_title'] at config
         * 
         * @var string
         */
        private $base_title = 'My Site';

        /**
         * Title Separator
         * You can change, on $config['template']['title_separator'] at config
         * 
         * @var string
         */
        private $title_separator = ' | ';

        /**
         * Page title
         * 
         * @var string
         */
        private $title = '';

        public function __construct()
        {
            $this->ci =& get_instance();

            if($this->ci->config->item('template')){
                $this->set_config_template($this->ci->config->item('template'));
            }

            foreach($this->config_template as $key => $value){
                switch($key)
                {
                    case 'css':
                        $this->set_css($value);
                        break;
                    case 'js_header':
                        $this->set_js_header($value);
                        break;
                    case 'js':
                        $this->set_js($value);
                        break;
                    default:
                        $this->$key = $value;
                }
            }
        }

        /**
         * Set Config Template
         * 
         * @param $config
         * @return Template
         */
        private function set_config_template($config){
            
            if( is_array($config) && !empty($config)){
                $this->config_template = $config;
            }

            return $this;
        }

        /**
         * Set Config Template
         * 
         * @param $config
         * @return Template
         */
        private function set_css($css){
            if(is_array($css) && !empty($css)){
                foreach($css as $value){
                    $this->css[] = base_url().$this->assets_path.'/'.$value;
                }
            }

            return $this;
        }

        /**
         * Set Config Template
         * 
         * @param $config
         * @return Template
         */
        private function set_js_header($js){
            if(is_array($js) && !empty($js)){
                foreach($js as $value){
                    $this->js_header[] = base_url().$this->assets_path.'/'.$value;
                }
            }

            return $this;
        }

        /**
         * Set Config Template
         * 
         * @param $config
         * @return Template
         */
        private function set_js($js){
            if(is_array($js) && !empty($js)){
                foreach($js as $value){
                    $this->js[] = base_url().$this->assets_path.'/'.$value;
                }
            }

            return $this;
        }

        /**
         * get JS File list
         *  Use this method if auto_js_location is false
         * 
         * @param $config
         * @return Template
         */
        protected function get_js(){
            return $this->js;
        }

        /**
         * method for add Java Script File Mannually
         * this method use $this->assets_path
         * 
         * @param $js array or string
         * @return Template
         */
        public function add_js($js){
            if(is_string($js)){
                $this->js[] = $js;
            }else if(is_array($js)){
                foreach($js as $jskey => $jsvalue)
                {
                    if (is_numeric($jskey)){
                        if(isset($this->js_list[$jskey])){
                            $this->js[$jskey] = $this->js_list[$jskey];                            
                        }else{
                            $this->js[] = $jsvalue;
                        }
                    }else{
                        $this->js[$jskey] = $jsvalue;
                    }
                }
            }
            return $this;
        }

        /**
         * method for unset Java Script File Mannually
         * 
         * @param $js_key string
         * @param boolean $header Is the Javascript on header ?
         * @return Template
         */
        public function unset_js($js_key, $header = FALSE){
            if ($js_header)
            {
                if(isset($this->js_header[$js_key]))
                {
                    unset($this->js_header[$js_key]);
                }
            }
            else
            {
                if(isset($this->js[$js_key]))
                {
                    unset($this->js[$js_key]);
                }
            }
            return $this;
        }

        /**
         * this method for set tittle
         * 
         * @param $title string
         * @return Template
         */
        public function set_title($title){
            if(is_string($title)){
                $this->title = $title;
            }

            return $this;
        }

        /**
         * this method for set layout name
         * 
         * @param $name string
         * @return Template
         */
        public function set_layout_name($name){
            if(is_string($name)){
                $this->layout_name = $name;
            }

            return $this;
        }

        /**
         * Build the template
         * 
         * @param string $content
         * @param array $data
         */
        public function build($content, $content_data = array()){
            
            $template['css'] = $this->css;
            $template['js_header'] = $this->js_header;
            $template['content'] = $content;
            if($this->auto_js_location != false || empty($this->auto_js_location)){
                $template['js'] = $this->js;
            }

            $data['content_data'] = $content_data; 
            $data['template'] = $template; 
            $data['title'] = (!empty($this->title) ? $this->base_title.$this->title_separator.$this->title : $this->base_title); 


            return $this->ci->load->view($this->layout_path.'/'.$this->layout_name, $data);
        }

  }
  