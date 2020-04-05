<?php
$config['template']['layouts_path'] = 'layouts';

$config['template']['layout_name'] = 'index';

$config['template']['assets_path'] = 'assets';

$config['template']['css'] = array(
    'node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/gentelella/vendors/font-awesome/css/font-awesome.css',
    'node_modules/gentelella/vendors/iCheck/skins/flat/green.css',
    'node_modules/gentelella/vendors/nprogress/nprogress.css',
    'node_modules/gentelella/vendors/pnotify/dist/pnotify.css',
    'node_modules/gentelella//vendors/pnotify/dist/pnotify.buttons.css',
    'node_modules/sweetalert2/dist/sweetalert2.all.min.css',
    'node_modules/gentelella/build/css/custom.min.css',
    );

$config['template']['js_header'] = array(
    'node_modules/gentelella/vendors/jquery/dist/jquery.min.js',
    'node_modules/gasparesganga-jquery-loading-overlay/dist/loadingoverlay.min.js',
    'node_modules/sweetalert2/dist/sweetalert2.all.min.js',
    'js/main.js',
);

$config['template']['js'] = array(
    'node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/gentelella/vendors/fastclick/lib/fastclick.js',
    'node_modules/gentelella/vendors/nprogress/nprogress.js',
    'node_modules/gentelella/vendors/iCheck/icheck.min.js',
    'node_modules/gentelella/vendors/pnotify/dist/pnotify.js',
    'node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.js',
    'node_modules/gentelella/build/js/custom.js',
);

$config['template']['js_list'] = array(
    'data_table' => array(
        "node_modules/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js",
        "node_modules/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js",
        "node_modules/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js",
        "node_modules/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js",
        "node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js",
        "node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js",
        "node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js",
        "node_modules/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js",
        "node_modules/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js",
        "node_modules/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js",
        "node_modules/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js",
        "node_modules/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js",
        "node_modules/gentelella/vendors/jszip/dist/jszip.min.js",
        "node_modules/gentelella/vendors/pdfmake/build/pdfmake.min.js",
        "node_modules/gentelella/vendors/pdfmake/build/vfs_fonts.js"
    ),
    'bootstrap-wysiwyg' => array (
        "node_modules/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js",
        "node_modules/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js",
        "node_modules/gentelella/vendors/google-code-prettify/src/prettify.js",
    ),
    'jquery_tags_input' => array(
        "node_modules/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"
    ),
    'switchery' => array(
        "node_modules/gentelella/vendors/switchery/dist/switchery.min.js"
    ),
    'select2' => array(
        "node_modules/select2/dist/js/select2.full.min.js"
    )
);

$config['template']['css_list'] = array(
    'data_table' => array(
        'node_modules/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
        "node_modules/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css",
    ),
    'switchery' => array(
        'node_modules/gentelella/vendors/switchery/dist/switchery.min.css'
    ),
    'select2' => array(
        'node_modules/select2/dist/css/select2.min.css'
    )
);

$config['template']['auto_js_location'] = TRUE;

$config['template']['base_title'] = 'Roket UMKM';

$config['template']['title_separator'] = ' | ';

$config['template']['title'] = '';