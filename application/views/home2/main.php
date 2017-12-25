<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ShapedTheme">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/home2/images/favicon.png">
    <title>PT Munjul Prima Utama</title>
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
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/responsive.css">
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url();?>assets/home2/js/html5shiv.js"></script>
    <script src="<?=base_url();?>assets/home2/js/respond.js"></script>
    <![endif]-->
</head>
<body class="vegas-slider home-4">
<!-- preloader start -->
<div id="preloader">
    <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
</div>
<!-- end preloader -->
<?php include_once('header.php');?>
<!-- Start Home-->
<div class="home-carousel  full-screen-slider" id="home">
    <div class="item">
        <div class="home home-3 slide-1">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase">The world’s best exporter and captive breeder of asian arowana </h1>
                    <p class="title-small">A Great one-page theme, perfect for new business website. </p>
                    <a class="btn btn-action" href="#">Download Now</a>
                </div>
            </div>

        </div>
    </div>
    <div class="item">
        <div class="home home-3 slide-2">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase">Grow your business with onebsiness Theme </h1>
                    <p class="title-small">A Great one-page theme, perfect for new business website. </p>
                    <a class="btn btn-action" href="#">Download Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="home home-3 slide-3">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase">A modern, clean and powerful one page Theme</h1>
                    <p class="title-small">A Great one-page theme, perfect for new business website. </p>
                    <a class="btn btn-action" href="#">Download Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home-->
<?php include_once('about_us.php');?>
<?php include_once('services.php');?>
<!-- START CALL TO ACTON -->
<div id="call-to-action-area" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="call-to-action-text text-center">
                    <h2> With OneBusiness everything is possible how you want. Enter anything you like here
                        add short codes, images, and much more!</h2>
                    <a  class="btn btn-action" href="#">Call to action</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CALL TO ACTON -->
<!-- START PORTFOLIO -->
<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">OUR PORTFOLIO</h2>
            <p >Describe something about your finished awesome works</p>
        </div>
        <!-- Filters -->
        <div class="row">
            <div class="portfolio-wrapper">
                <ul class="filter  text-center text-uppercase">
                    <li><a class="active" href="#" data-toggle="tooltip" title="6" data-filter="*">All</a></li>
                    <li><a href="#" data-toggle="tooltip" title="1" data-filter=".branding">Branding</a></li>
                    <li><a href="#" data-toggle="tooltip" title="3" data-filter=".design">Design</a></li>
                    <li><a href="#" data-toggle="tooltip" title=1 data-filter=".video">Video</a></li>
                    <li><a href="#" data-toggle="tooltip" title="1" data-filter=".audio">Audio</a></li>
                </ul><!--/#portfolio-filter-->
                <div class="portfolio-items">
                    <div class="col-md-4 col-sm-6 work-grid branding">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>New Envelop</h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#single-member-modal" ><i class="fa fa-search"></i></a>
                                        <a href="single-portfolio.html" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid design">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Happy man</h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#single-member-modal" ><i class="fa fa-search"></i></a>
                                        <a href="single-portfolio.html" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid design">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Environment</h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#single-member-modal" ><i class="fa fa-search"></i></a>
                                        <a href="single-portfolio.html" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid video">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Iconography</h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#single-member-modal" ><i class="fa fa-search"></i></a>
                                        <a href="single-portfolio.html" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid design">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Power of Space</h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#single-member-modal" ><i class="fa fa-search"></i></a>
                                        <a href="single-portfolio.html" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid audio">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Music Compose</h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#single-member-modal" ><i class="fa fa-search"></i></a>
                                        <a href="single-portfolio.html" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                </div>
            </div>
        </div>
        <div class="member-modal">
            <div class="modal modal-lg section-padding" id="single-member-modal" tabindex="-1" role="dialog"
                 aria-hidden="false">
                <!-- Modal Inner -->
                <div class="modal-inner t-center clearfix">
                    <!-- Modal Head -->
                    <div class="modal-head">
                        <!-- Close Button -->
                        <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                        <!-- Member Name -->
                        <div class="section-header text-center">
                            <!-- section title-->
                            <h2 class="text-uppercase">product title</h2>
                            <p> Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <!-- End Head -->
                    <!-- Modal Left -->
                    <div class="modal-left col-sm-6">
                        <!-- Img, Div -->
                        <div class="modal-img modal-carousel">
                            <!-- Member Image -->
                            <div class="items">
                                <img src="<?=base_url();?>assets/home2/images/portfolio-1.jpg" alt="">
                            </div>
                            <div class="items">
                                <img src="<?=base_url();?>assets/home2/images/portfolio-1.jpg" alt="">
                            </div>
                            <div class="items">
                                <img src="<?=base_url();?>assets/home2/images/portfolio-1.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- End Member Left -->
                    <!-- Modal Right -->
                    <div class="modal-right col-sm-6 text-left">
                        <div class="project-details">
                            <!-- Header -->
                            <h4 class="">
                                Project Details
                            </h4>
                            <!-- Description One -->
                            <p class="member-detail-one">
                                Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam
                                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                            </p>
                        </div>
                        <div class="client">
                            <h4 class="">
                                Client
                            </h4>
                            <p>Eye on the sky
                            </p>
                        </div>
                        <div class="skills">
                            <h4>Skills</h4>
                            <ul class="list-inline">
                                <li><a href="">Design</a></li>
                                <li><a href="">Photography</a></li>
                                <li><a href="">HTML & CSS</a></li>
                                <li><a href=""> jQuery</a></li>
                            </ul>
                        </div>
                        <div class="modal-btn">
                            <a href="" class="btn btn-active">Live preview</a>
                            <a href="#portfolio" class="btn btn-dark">Back to portfolio</a>
                        </div>
                    </div>
                    <!-- Modal Right -->
                </div><!-- End Modal Right -->
            </div>
        </div>
    </div>
</section>
<!--END PORTFOLIO -->

<!--START THE PROGRESS-->
<section id="process" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">The process we go</h2>
            <p >Describe something about your one business company</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="single-process"><!-- START SINGLE PROCESS-->
                    <div class="process-icon">

                        <div class="icon-container">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <h2 class="text-uppercase"> RESEARCH</h2>
                    <p>Mauris venenatis vulputate ligula eu finibus. Donec pretium libero lacus, vitae maximus
                        purus. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-process"><!-- START SINGLE PROCESS-->
                    <div class="process-icon">

                        <div class="icon-container">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <h2 class="text-uppercase">Concept</h2>
                    <p>Mauris venenatis vulputate ligula eu finibus. Donec pretium libero lacus, vitae maximus
                        purus. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-process"><!-- START SINGLE PROCESS-->
                    <div class="process-icon">
                        <div class="icon-container">
                            <i class="fa fa-code"></i>
                        </div>

                    </div>
                    <h2 class="text-uppercase">Develop</h2>
                    <p>Mauris venenatis vulputate ligula eu finibus. Donec pretium libero lacus, vitae maximus
                        purus. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-process"><!-- START SINGLE PROCESS-->
                    <div class="process-icon">

                        <div class="icon-container">
                            <i class="fa fa-paper-plane-o"></i>
                        </div>
                    </div>
                    <h2 class="text-uppercase">Test</h2>
                    <p>Mauris venenatis vulputate ligula eu finibus. Donec pretium libero lacus, vitae maximus
                        purus. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END THE PROGRESS-->
<!--START FUN FACT -->
<section  id="fun-fact">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="fact" data-perc="240">
                    <div class="fact-content">
                        <h2 class="factor">240</h2>
                        <h4>PROJECTS</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fact">
                    <div class="fact-content">
                        <h2>156</h2>
                        <h4>Happy CLIENTS</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fact">
                    <div class="fact-content">
                        <h2>32006</h2>
                        <h4>Email Reply</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fact">
                    <div class="fact-content">
                        <h2>288</h2>
                        <h4>Beer ordered</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END FUN FACT-->
<!-- START TESTIMONIAL-->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">Our Happy Clients</h2>
            <p >Describe something about your onebusiness company</p>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="slick-carousel-2">
                    <div class="item">
                        <div class="single-testimonial">
                            <h4 class="desc">Rosy is clean, simple, creative beautiful HTML5 Blog Template. This
                                template is
                                carefully
                                crafted with easy customization for blo gers in mind, impress your audience with smartly
                                clean,
                                and stately aesthetic modern blog look. You can showcase your content in an effortlessly
                                timeless style with this template.</h4>
                            <h2 class="person-name text-uppercase">Khalil Uddin - UPWORK, CLIENT</h2>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial">
                            <h4 class="desc">Rosy is clean, simple, creative beautiful HTML5 Blog Template. This
                                template is
                                carefully
                                crafted with easy customization for blo gers in mind, impress your audience with smartly
                                clean,
                                and stately aesthetic modern blog look. You can showcase your content in an effortlessly
                                timeless style with this template.</h4>
                            <h2 class="person-name text-uppercase">Khalil Uddin - UPWORK, CLIENT</h2>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial">
                            <h4 class="desc">Rosy is clean, simple, creative beautiful HTML5 Blog Template. This
                                template is
                                carefully
                                crafted with easy customization for blo gers in mind, impress your audience with smartly
                                clean,
                                and stately aesthetic modern blog look. You can showcase your content in an effortlessly
                                timeless style with this template.</h4>
                            <h2 class="person-name text-uppercase">Khalil Uddin - UPWORK, CLIENT</h2>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END TESTIMONIAL-->
<!--START LOGO AREA-->
<div id="logo-area" class="section-padding">
    <div class="container">
        <div class="logo-carousel">
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-5.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-5.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="<?=base_url();?>assets/home2/images/logo-5.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--END LOGO AREA-->
<!--START CONTACT-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase" >COMMUNICATE <span> SAY HELLO</span></h2>
            <p >Describe something about your onebusiness company</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-address text-right">
                    <h2>+011 (22) 456 789</h2>
                    <address>
                        239/2 Dhaka Cantonment, Dhaka <br>
                        Dhaka 1206, Bangladesh<br>
                    </address>
                    <a href="mailto:Support@wpexpand.com">Support@wpexpand.com</a>

                    <ul class="social-link">
                        <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">

                <form id="contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name" name="your-name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" required="required" placeholder="Email Id" name="your-email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Subject" name="subject">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="7"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <button type="reset" class="btn"><i class="fa fa-times"></i>Reset</button>
                        <button type="submit" class="btn"><i class="fa fa-check"></i>Send Message</button>
                        <span class="able-text">[Will be replied within 24 hours except sunday]</span>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!--END CONTACT-->
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
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBgdZe2H8dUadI-9HbatiJpIufY6oVWMf4"></script>
<!-- COMMON JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/scripts.js"></script>

</body>
</html>