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
            'kelola_data-kelola_produk' => array(
                'uri' => 'kelola_data/kelola_produk',
                'title' => 'Kelola Produk',
            )
        )
    ),
    'managament_menu' => array(
        'title' => 'Kelola Menu',
        'icon' => 'fa fa-cog',
        'children' => array(
            'managament_menu-rules' => array(
                'uri' => 'managament_menu/rules',
                'title' => 'Kelola Rules Menu',
            )
        )
    ),
 );