<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?=base_url();?>assets/home2/images/logo.png" alt=""></a>
            </div>

            <div id="myNavbar" class="navbar-collapse collapse">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="smooth-scroll" href="#home"> <?php if($this->session->userdata('lang')=='cn'){echo "首页";}else {echo "Home";}?> </a></li> 
                        <li><a class="smooth-scroll" href="#about"> <?php if($this->session->userdata('lang')=='cn'){echo "公司介绍";}else {echo "Profile";}?> </a></li>
                        <li><a class="smooth-scroll" href="#service"> <?php if($this->session->userdata('lang')=='cn'){echo "我们的优势";}else {echo "Advantages";}?> </a></li> 
                        <li><a class="smooth-scroll" href="#portfolio"> <?php if($this->session->userdata('lang')=='cn'){echo "照片";}else {echo "Gallery";}?> </a></li>
                        <li><a class="smooth-scroll" href="#term"> <?php if($this->session->userdata('lang')=='cn'){echo "付款条件";}else {echo "Terms and Payments";}?> </a></li> 
                        <li><a class="smooth-scroll" href="#contact"> <?php if($this->session->userdata('lang')=='cn'){echo "位置";}else {echo "Locations";}?> </a></li>  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if($this->session->userdata('lang')=='cn'){echo "<span class=\"flag-icon flag-icon-cn\"></span> 简体中文";}else {echo "<span class=\"flag-icon flag-icon-gb\"></span> English";}?></a>
                            <ul class="dropdown-menu text-capitalize">
                                <li><a href="<?=base_url();?>language/en"><span class="flag-icon flag-icon-gb"></span> English</a></li>
                                <li><a href="<?=base_url();?>language/cn"><span class="flag-icon flag-icon-cn"></span> 简体中文</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>