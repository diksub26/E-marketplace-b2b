<?php
/**
 * Navigation for used in views/layouts/admin.php
 * 
 */

 $config['navigation'] = array(
    'dashboard' => array(
        'title' => 'Dashboard',
        'icon' => 'fa fa-dashboard',
        'uri' => 'dashboard'
    ),
     'kelola_data' => array(
        'title' => 'Kelola data',
        'icon' => 'fa fa-list',
        'children' => array(
            'kelola_data-kelola_data_barang' => array(
                'uri' => 'kelola_data/kelola_data_barang',
                'title' => 'Kelola Data Barang',
            )
        )
    ),
 );