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
    <title>Onebusiness - One Page HTML Template</title>

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
    <?php include_once('navbar.php');?>
</header>
<!--End Header-->
<div class="main-content">
    <div class="main-header text-left">
        <div class="container">
            <h2 class="main-title text-capitalize">Search MicroChip</h2>
            <div class="bar search-bar">
                <!-- Search Form -->
                <form class="search-form relative" action="<?=base_url('code');?>" method="post">
                    <input type="text" name="search" class="search" placeholder="Search...">
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
<!-- footer -->
<footer>
    <div class="footer-widget section-padding text-left">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget widget-about">
                        <h2 class="widget-title text-uppercase">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, constur sadipscing elitr, sed diam nonumy eirmod
                            tempor
                            invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua..</p>

                        <div class="address">
                            <h3> Business Hours</h3>
                            <p>Mon. - Fri. 8am to 5pm <br>Sat. 8am to 11am</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget widget-menu">
                        <h2 class="widget-title text-uppercase">About Market</h2>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Terms and Conditions</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href=""> Privacy Policy</a></li>
                                <li><a href=""> Community Forum</a></li>
                                <li><a href=""> Knowledgebase FAQs</a></li>
                                <li><a href="">Documentation</a></li>
                                <li><a href=""> Test Product Before Buy</a></li>
                                <li><a href="">Join Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-map">
                        <h2 class="widget-title text-uppercase">Office Map</h2>
                        <div id="map">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget widget-post">
                        <h2 class="widget-title text-uppercase">Recent Posts</h2>
                        <h3><a href="">Lorem ipsum dolor sit amet,</a></h3>
                        <h3><a href="">tur sadipscing elitr,</a></h3>
                        <h3><a href=""> sed diam nonumy eirmod tempor</a></h3>
                        <h3><a href=""> labore et dolore magna aliquy,</a></h3>
                        <h3><a href=""> sed diam voluptua.</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text text-center">
        <p>&copy;2017 OneBusiness by <a href="">WPExpand</a> Powered by WordPress</p>
    </div>
</footer>
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