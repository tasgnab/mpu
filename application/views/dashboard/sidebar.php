<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img src="<?=base_url();?>assets/home2/images/logo-toro.png" alt=""> <span><?=$this->config->item('site_name_short')[0]; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url();?>assets/images/user62.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$this->session->userdata('username');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <!--
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>dashboard/home">Main Banner</a></li>
                      <li><a href="<?=base_url();?>dashboard/home/testimonial">Testimonials</a></li>
                    </ul>
                  </li>
                  -->
                  <li><a><i class="fa fa-edit"></i> Microchip <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>dashboard/code">Input</a></li>
                      <li><a href="<?=base_url();?>dashboard/code/upload">Upload File</a></li>
                      <li><a href="<?=base_url();?>dashboard/code/list">View List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Gallery <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>dashboard/gallery/input">Upload</a></li>
                      <li><a href="<?=base_url();?>dashboard/gallery">View</a></li>
                    </ul>
                  </li>
                  <!--<li><a href="<?=base_url();?>dashboard/contact"><i class="fa fa-user"></i> Contact </a></li>-->
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>