<?php
/**
 * Navigation for used in views/layouts/admin.php
 * 
 */

 $config['navigation'] = array(
    'home' => array(
        'title' => 'home',
        'icon' => 'fa fa-home',
        'uri' => 'public/home'
    ),

    'kelola_data' => array(
        'title' => 'Kelola Data',
        'icon' => 'fa fa-list',
        'children' => array(
            'kelola_data-kelola_produk' => array(
                'uri' => 'kelola_data/kelola_produk',
                'title' => 'Kelola Produk',
            )
        )
    ),
    'managament_user' => array(
        'title' => 'Kelola Users',
        'icon' => 'fa fa-users',
        'children' => array(
            'managament_user-sys_admin' => array(
                'uri' => 'managament_user/admin',
                'title' => 'Daftar Sys Admin'
            ),
            'managament_user-umkm' => array(
                'uri' => 'managament_user/umkm',
                'title' => 'Daftar UMKM'
            ),
            'managament_user-distributor' => array(
                'uri' => 'managament_user/distributor',
                'title' => 'Daftar Distributor'
            ),
        )
    ),
    'managament_menu' => array(
        'title' => 'Kelola Menu',
        'icon' => 'fa fa-cog',
        'children' => array(
            'managament_menu-resources' => array(
                'uri' => 'managament_menu/resources',
                'title' => 'Kelola Resources Menu',
            ),
            'managament_menu-rules' => array(
                'uri' => 'managament_menu/rules',
                'title' => 'Kelola Rules Menu',
            ),        
            'managament_menu-roles' => array(
                'uri' => 'managament_menu/roles',
                'title' => 'Kelola Roles Menu',
            )
        )
    ),
 );