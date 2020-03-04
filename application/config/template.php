<?php
$config['template']['layouts_path'] = 'layouts';

$config['template']['layout_name'] = 'index';

$config['template']['assets_path'] = 'assets';

$config['template']['css'] = array(
    'node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/gentelella/vendors/font-awesome/css/font-awesome.css',
    'node_modules/gentelella/vendors/nprogress/nprogress.css',
    'node_modules/gentelella/build/css/custom.min.css',
    );

$config['template']['js_header'] = array();

$config['template']['js'] = array(
    'node_modules/gentelella/vendors/jquery/dist/jquery.min.js',
    'node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/gentelella/vendors/fastclick/lib/fastclick.js',
    'node_modules/gentelella/vendors/nprogress/nprogress.js',
    'node_modules/gentelella/build/js/custom.min.js',
);

$config['template']['js_list'] = array();

$config['template']['auto_js_location'] = TRUE;

$config['template']['base_title'] = 'My Site';

$config['template']['title_separator'] = ' | ';

$config['template']['title'] = '';