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
         * Property for list js file
         * You can set, on $config['template']['css_list'] at config
         * This can help if you have dynamic css file
         * @var string
         */
        private $css_list = array();

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
         * If you're set false, you should manually call $template['js'] on view
         * You can set, on $config['template']['auto_js_location'] at config
         * or on set_auto_js method
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
         * method for add CSS File Mannually
         * this method use $this->assets_path
         * 
         * @param $css array or string
         * @return Template
         */
        public function add_css($css_key){
            if(is_string($css_key)){
                foreach($this->css_list[$css_key] as $val){
                    $this->css[] = base_url().$this->assets_path.'/'.$val;
                }
            }else if(is_array($css_key)){
                foreach($css_key as $key){
                    foreach($this->css_list[$key] as $val){
                        $this->css[] = base_url().$this->assets_path.'/'.$val;
                    }
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
         * set auto js location
         *  Use this method if auto_js_location is false
         * 
         * @param boolean $auto_js_location
         * @return Template
         */
        public function set_auto_js($auto_js_location){
            
            if(is_bool($auto_js_location)){
                $this->auto_js_location = $auto_js_location;
            }
            return $this;
        }

        /**
         * method for add Java Script File Mannually
         * this method use $this->assets_path
         * 
         * @param $js array or string
         * @return Template
         */
        public function add_js($js_key){
            if(is_string($js_key)){
                foreach($this->js_list[$js_key] as $val){
                    $this->js[] = base_url().$this->assets_path.'/'.$val;
                }
            }else if(is_array($js_key)){
                foreach($js_key as $key){
                    foreach($this->js_list[$key] as $val){
                        $this->js[] = base_url().$this->assets_path.'/'.$val;
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
         * this method for set layout path
         * 
         * @param $name string
         * @return layout path
         */
        public function set_layout_path($layout_path){
            if(is_string($layout_path)){
                $this->layout_path = $layout_path;
            }

            return $this;
        }

        /**
         * this method to get asset path
         * @param no param
         * @return assets path
         */
        public function get_assets_path()
        {
            return $this->assets_path;
        }

        /**
         * this method for mapping navigation
         * 
         * @param no params
         * @return array navigation from config menu,which has acl allowed
         * 
         */
        private function _mapping_navigation(){
            if($this->ci->config->item('navigation')){
                $menus = $this->ci->config->item('navigation');

                foreach ($menus as $key => $menu) {

                    if (isset($menu['uri']) && !$this->ci->my_acl->is_allowed($menu['uri'])) {
                        unset($menus[$key]);
                        continue;
                    }

                    if (isset($menu['children'])) {
                      
                      if (empty($menu['children'])) {
                        unset($menus[$key]);
                        continue;
                      }

                      //checking acl for child menu
                      foreach($menus[$key]['children'] as $child_menu_key => $child_menu){
                        foreach($child_menu as $child_key => $child_val){
                          if($child_key == 'uri'){
                            if(!$this->ci->my_acl->is_allowed($child_val)){
                              unset($menus[$key]['children'][$child_menu_key]);
                              continue;
                            }else{
                              $menus[$key]['children'] = $menu['children'];
                            }
                          }
                        }
                      }

                      if(sizeof($menus[$key]['children'] )< 1){
                        unset($menus[$key]);
                      }
                     
                    }
                }
                return $menus;
            }

            show_error("can't find navigation on config item, check you're config file",404,$heading='Error Navbar');
        }

        /**
         * Build the template
         * 
         * @param string $content
         * @param array $data
         */
        public function build($content, $content_data = array()){
            
            // if(){
                $csrf = array(
                    'name' => $this->ci->security->get_csrf_token_name(),
                    'hash' => $this->ci->security->get_csrf_hash()
                );

                $data['csrf'] = $csrf;
            // }

            $template['css'] = $this->css;
            $template['js_header'] = $this->js_header;
            $template['content'] = $content;
            $template['navbar'] = $this->_mapping_navigation();
            $template['auto_js'] = $this->auto_js_location;

            if($this->auto_js_location == false){
                $js_list = '' ;
                foreach($this->js as $value){
                    $js_list .= '<script src="'.$value.'"></script>';
                    $template['js'] = $js_list;
                }
            }else{
                $template['js'] = $this->js;
            }
            
            $data['content_data'] = $content_data; 
            $data['template'] = $template; 
            $data['title'] = (!empty($this->title) ? $this->base_title.$this->title_separator.$this->title : $this->base_title); 
            $data['title_page'] = (!empty($this->title) ? $this->title : ''); 

            return $this->ci->load->view($this->layout_path.'/'.$this->layout_name, $data);
        }

        /**
         * Build the template with no acl
         * 
         * @param string $content
         * @param array $data
         */
        public function buildNoAcl($content, $content_data = array()){
            
            // if(){
                $csrf = array(
                    'name' => $this->ci->security->get_csrf_token_name(),
                    'hash' => $this->ci->security->get_csrf_hash()
                );

                $data['csrf'] = $csrf;
            // }

            $template['css'] = $this->css;
            $template['js_header'] = $this->js_header;
            $template['content'] = $content;
            $template['auto_js'] = $this->auto_js_location;

            if($this->auto_js_location == false){
                $js_list = '' ;
                foreach($this->js as $value){
                    $js_list .= '<script src="'.$value.'"></script>';
                    $template['js'] = $js_list;
                }
            }else{
                $template['js'] = $this->js;
            }
            
            $data['content_data'] = $content_data; 
            $data['template'] = $template; 
            $data['title'] = (!empty($this->title) ? $this->base_title.$this->title_separator.$this->title : $this->base_title); 
            $data['title_page'] = (!empty($this->title) ? $this->title : ''); 

            return $this->ci->load->view($this->layout_path.'/'.$this->layout_name, $data);
        }

  }
  