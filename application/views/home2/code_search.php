<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ShapedTheme">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/home2/images/favicon.png">
    <title><?=$this->config->item('site_name');?></title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/bootstrap.min.css">
    <!-- FONTAWESOME CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/font-awesome.min.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/animate.css">
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/slick.css">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/font-awesome.min.css">
    <!-- VEGAS CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/jquery.vegas.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/flag-icon.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/responsive.css">
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->
</head>
<body class="portfolio">
<!-- preloader start -->
<div id="preloader">
    <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
</div>
<!-- end preloader -->
<!-- Start  Header -->
<header id="navigation" class="navbar-fixed-top">
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
                <a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>assets/home2/images/logo.png" alt=""></a>
            </div>

            <div id="myNavbar" class="navbar-collapse collapse">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="smooth-scroll" href="<?=base_url();?>#home"> <?php if($this->session->userdata('lang')=='cn'){echo "首页";}else {echo "Home";}?> </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#about"> <?php if($this->session->userdata('lang')=='cn'){echo "公司介绍";}else {echo "Profile";}?> </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#service"> <?php if($this->session->userdata('lang')=='cn'){echo "我们的优势";}else {echo "Advantages";}?> </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#portfolio"> <?php if($this->session->userdata('lang')=='cn'){echo "照片";}else {echo "Gallery";}?> </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#term"> <?php if($this->session->userdata('lang')=='cn'){echo "付款条件";}else {echo "Terms and Payments";}?> </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#contact"> <?php if($this->session->userdata('lang')=='cn'){echo "位置";}else {echo "Locations";}?> </a></li>  
                        <li><a class="smooth-scroll" href="<?=base_url('code');?>"> <?php if($this->session->userdata('lang')=='cn'){echo "位置";}else {echo "Code";}?> </a></li>  
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
</header>
<!--End Header-->
<div class="main-content">
    <div class="main-header text-left">
        <div class="container">
            <h2 class="main-title text-capitalize"><?php if($this->session->userdata('lang')=='cn'){echo "搜索MicroChip";}else {echo "Search MicroChip";}?></h2>
            <div class="bar search-bar">
                <!-- Search Form -->
                <form class="search-form relative" action="<?=base_url('code');?>" method="post">
                    <input type="text" name="search" class="search" placeholder="<?php if($this->session->userdata('lang')=='cn'){echo "搜索...";}else {echo "Search...";}?>">
                    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container section-padding">
        <!-- Member Name -->
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">Robert Deen</h2>
            <p> Founder & CEO</p>
        </div>
        <!-- End Head -->
        <div class="row">
            <!-- Modal Left -->
            <div class="col-sm-6">
                <!-- Img, Div -->
                <div class="modal-img">
                    <!-- Member Image -->
                    <img src="assets/images/modal-member.jpg" alt="">
                </div>
            </div>
            <!-- End Member Left -->
            <!-- Modal Right -->
            <div class="col-sm-6 text-left">
                <div class="project-details">
                    <!-- Header -->
                    <h4 class="text-uppercase">
                        About Robert Deen
                    </h4>
                    <!-- Description One -->
                    <p class="member-detail-one">
                        Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        accusam
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    </p>
                    <h5 class="text-uppercase">
                       Education
                    </h5>
                    <!-- Description One -->
                    <p class="member-detail-one">
                       Justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet. dolores et ea rebum.
                    </p>
                    <h5 class="text-uppercase">
                        Education 2
                    </h5>
                    <!-- Description One -->
                    <p class="member-detail-one">
                        Justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="skills">
                    <h4 class="text-uppercase">Robert Skills</h4>
                    <div class="progress">
                        <!-- Progress Bar -->
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            <span class="skill-value text-uppercase">Bootstrap 60%</span>
                        </div>
                    </div>
                    <!-- End Progress Bar -->
                    <div class="progress">
                        <!-- Progress Bar -->
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span class="skill-value text-uppercase">Javascript 70%</span>
                        </div>
                        <!-- End Progress Bar -->
                    </div>
                    <div class="progress">
                        <!-- Progress Bar -->
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <span class="skill-value text-uppercase">OOP 90%</span>
                        </div>
                        <!-- End Progress Bar -->
                    </div>
                </div>
                <div class="member-social">
                    <ul>
                        <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="google-plus" href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="github" href=""><i class="fa fa-github"></i></a></li>
                        <li><a class="instagram" href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>
            <!-- Modal Right -->
        </div>
    </div>
</div>
<?php include_once('footer.php');?>
<!-- JQUERY LIBRARY -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery-1.11.3.min.js"></script>
<!-- BOOTSTRAP JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/bootstrap.min.js"></script>
<!-- WAYPOINTS JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/waypoints.min.js"></script>
<!-- ISOTOPE JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery.isotope.min.js"></script>
<!-- SLICK JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/slick.min.js"></script>
<!-- EASING JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery.easing.min.js"></script>
<!--  CIRCLE PROGRRESS JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/circle-progress.min.js"></script>
<!--  VEGAS JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery.vegas.min.js"></script>
<!--  YTPLAYER JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery.mb.YTPlayer.js"></script>
<!--  COUTERUP JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery.counterup.min.js"></script>
<!--  APPEAR JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/jquery.appear.js"></script>
<!-- GOOGLE MAP JS -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBgdZe2H8dUadI-9HbatiJpIufY6oVWMf4"></script>
<!-- COMMON JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/scripts.js"></script>
</body>
</html>