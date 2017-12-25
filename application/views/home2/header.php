<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Start  Header -->
<header id="navigation" class="home-ts-menu">
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
                <ul class="nav social-network-bar pull-right">
                    <li><a href=""> <i class="fa fa-twitter"></i></a></li>
                    <li><a href=""> <i class="fa fa-facebook"></i></a></li>
                    <li><a href=""> <i class="fa fa-instagram"></i></a></li>
                </ul>
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="smooth-scroll" href="#home"> <?php if($this->session->userdata('lang')=='cn'){echo "首页";}else {echo "Home";}?> </a></li> 
                        <li><a class="smooth-scroll" href="#about"> <?php if($this->session->userdata('lang')=='cn'){echo "公司介绍";}else {echo "Profile";}?> </a></li>
                        <li><a class="smooth-scroll" href="#service"> <?php if($this->session->userdata('lang')=='cn'){echo "我们的优势";}else {echo "Advantages";}?> </a></li> 
                        <li><a class="smooth-scroll" href="#portfolio"> <?php if($this->session->userdata('lang')=='cn'){echo "照片";}else {echo "Gallery";}?> </a></li>
                        <li><a class="smooth-scroll" href="#contact"> <?php if($this->session->userdata('lang')=='cn'){echo "位置";}else {echo "Locations";}?> </a></li>  
                        <li><a class="smooth-scroll" href="#term"> <?php if($this->session->userdata('lang')=='cn'){echo "付款条件";}else {echo "Terms and Payments";}?> </a></li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extra pages</a>
                            <ul class="dropdown-menu text-capitalize">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home variations </a>
                                    <ul class="dropdown-menu text-capitalize">
                                        <li><a href="index.html">home 1</a></li>
                                        <li><a href="index-2.html">home 2</a></li>
                                        <li><a href="index-3.html">home 3</a></li>
                                        <li class="sactive"><a href="index-4.html">home 4</a></li>
                                        <li><a href="index-5.html">home 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="blog.html">Blog Home</a></li>
                                <li><a href="single-blog.html">Single Blog Post</a></li>
                                <li><a href="left-sidebar.html">Blog Left Sidebar </a></li>
                                <li><a href="blog.html">Blog Right Sidebar </a></li>
                                <li><a href="full-width.html">Blog full width </a></li>
                                <li><a href="single-portfolio.html">single portfolio 1</a></li>
                                <li><a href="single-portfolio-2.html">portfolio style 2</a></li>
                                <li><a href="team-style-1.html">team member style 1</a></li>
                                <li><a href="team-style-2.html">team member style 2</a></li>
                                <li><a href="team-style-3.html">team member style 3</a></li>
                                <li><a href="<?=base_url();?>language/en">English</a></li>
                                <li><a href="<?=base_url();?>language/cn">Chinese</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>
<!--End Header-->