const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    /* SAS */
    // .sass('resources/assets/sass/main.scss', 'public/css/codebase.css')
    // .sass('resources/assets/sass/codebase/themes/corporate.scss', 'public/css/themes/')
    // .sass('resources/assets/sass/codebase/themes/earth.scss', 'public/css/themes/')
    // .sass('resources/assets/sass/codebase/themes/elegance.scss', 'public/css/themes/')
    // .sass('resources/assets/sass/codebase/themes/flat.scss', 'public/css/themes/')
    // .sass('resources/assets/sass/codebase/themes/pulse.scss', 'public/css/themes/')

    /* JS */
    // .js('app.js', 'dist/bundle.js')
    // .js('resources/assets/js/laravel/plugins.js', 'public/js/laravel.app.js')
    // .js('resources/assets/js/codebase/app.js', 'public/js/codebase.app.js')

    /* GLOBAL CSS */
    .styles([
        'node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/gentelella/vendors/font-awesome/css/font-awesome.css',
        'node_modules/gentelella/vendors/iCheck/skins/flat/green.css',
        'node_modules/gentelella/vendors/nprogress/nprogress.css',
        'node_modules/gentelella/vendors/pnotify/dist/pnotify.css',
        'node_modules/gentelella//vendors/pnotify/dist/pnotify.buttons.css',
        'node_modules/sweetalert2/dist/sweetalert2.all.min.css',
        'node_modules/gentelella/build/css/custom.min.css',
    ], 'dist/css/app.css')
  
    /* GLOBAL JS HEADER */
    .scripts([
        'node_modules/gentelella/vendors/jquery/dist/jquery.min.js',
        'node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/gasparesganga-jquery-loading-overlay/dist/loadingoverlay.min.js',
        'js/main.js'
    ], 'dist/js/app.js')

    /* GLOBAL JS FOOTER */
    .scripts([
        'node_modules/gentelella/vendors/moment/min/moment.min.js',
        'node_modules/sweetalert2/dist/sweetalert2.all.min.js',
        'node_modules/gentelella/vendors/fastclick/lib/fastclick.js',
        'node_modules/gentelella/vendors/nprogress/nprogress.js',
        'node_modules/gentelella/vendors/iCheck/icheck.min.js',
        'node_modules/gentelella/vendors/pnotify/dist/pnotify.js',
        'node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.js',
    ], 'dist/js/bundle.js')
    
    /* DATA TABLE JS AND CSS*/
    .scripts([
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
        "node_modules/gentelella/vendors/pdfmake/build/vfs_fonts.js",
    ], 'dist/plugin/js/data-tables.js')

    .styles([
        'node_modules/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
        "node_modules/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css",
    ], 'dist/plugin/css/data-tables.css')
 

    /* bootstrap-wysiwyg JS AND CSS*/
    .scripts([
        "node_modules/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js",
        "node_modules/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js",
        "node_modules/gentelella/vendors/google-code-prettify/src/prettify.js",
    ], 'dist/plugin/js/bootstrap-wysiwyg.js')

    /* jquery_tags_input JS AND CSS */
    .scripts([
        "node_modules/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js",
    ], "dist/plugin/js/jquery_tags_input.js")

    /* switchery JS AND CSS*/
    .scripts([
        "node_modules/gentelella/vendors/switchery/dist/switchery.min.js",
    ], 'dist/plugin/js/switchery.js')
    .styles([
        'node_modules/gentelella/vendors/switchery/dist/switchery.min.css'
    ], "/dist/plugin/js/switchery.css")

    /* select2 JS AND CSS*/
    .scripts([
        "node_modules/select2/dist/js/select2.full.min.js"
    ], '/dist/plugin/js/select2.js')
    .styles([
        'node_modules/select2/dist/css/select2.min.css'
    ],'/dist/plugin/css/select2.css')

    /* Tools */
    .browserSync('localhost/E-marketplace-b2b')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
