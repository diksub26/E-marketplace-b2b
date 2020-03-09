<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- CSS -->
    <?php foreach($template['css'] as $value){
        echo '<link rel="stylesheet" href="'.$value.'">';
    }
    ?>
    
    <!-- JS HEADER-->
    <?php foreach($template['js_header'] as $value){
        echo '<script src="'.$value.'"></script>';
    }?>
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Roket UMKM</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/')?>node_modules/gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $this->session->userdata('USERNAME') ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Daftar Menu</h3>
                <ul class="nav side-menu">

                <?php                  
                  foreach($template['navbar'] as $key => $nav_lvl_1):?>
                  <li class="<?php echo ( $this->uri->segment(1) == $key ? 'active': "")?>">
                    <?php $has_children = isset($nav_lvl_1['children']) && is_array($nav_lvl_1['children']); ?>
                    <a <?php if(!$has_children){ echo "href='".base_url($key)."'";} ?>><i class="<?php echo $nav_lvl_1['icon'] ?>"></i> <?php echo $nav_lvl_1['title'] ?>
                      <?php if ($has_children) :?>
                        <span class="fa fa-chevron-down"></span>
                      <?php endif;?>
                    </a>
                    
                    <?php if($has_children):?>
                      <?php foreach($nav_lvl_1['children'] as $nav_lvl_2):?>
                          <?php $uri_arr = explode('/',$nav_lvl_2['uri']); ?>
                        <ul class="nav child_menu" style="<?php echo ( $this->uri->segment(2) == $uri_arr[1] ? 'display: block;': "")?>">
                          <li class='<?php echo ( $this->uri->segment(2) == $uri_arr[1] ? 'current-page': "")?>'>
                            <a href="<?php echo (isset($nav_lvl_2['uri']) ? site_url($nav_lvl_2['uri']) : '#') ?>"><?php echo $nav_lvl_2['title'] ?></a>
                          </li>
                        </ul>
                      <?php endforeach;?>
                    <?php endif;?>
                  </li>
                  <?php endforeach;?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/login/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('assets/')?>node_modules/gentelella/production/images/img.jpg" alt=""><?= $this->session->userdata('USERNAME') ?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?= base_url('auth/login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/')?>node_modules/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/')?>node_modules/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/')?>node_modules/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/')?>node_modules/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3><?= $title_page ?></h3>
            </div>

            <?php $this->load->view($template['content'], $content_data) ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Development | <a href="">Roket UMKM</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- JS -->
    <?php if(isset($template['js']) && is_array($template['js'])){
        foreach($template['js'] as $value){
            echo '<script src="'.$value.'"></script>';
        }
     }?>
  </body>
</html>