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
    <script type="text/javascript"> //<![CDATA[ 
        var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
        document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112156093-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112156093-1');
    </script>

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
<body class="blog">
<!-- preloader start -->
<div id="preloader">
    <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
</div>
<!-- /.end preloader -->
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
                <a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>assets/home2/images/logo-toro.png" alt=""></a>
            </div>

            <div id="myNavbar" class="navbar-collapse collapse">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="smooth-scroll" href="<?=base_url();?>#home"> Home </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#about"> Profile </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#service"> Advantages </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#portfolio"> Gallery </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#term"> Terms and Payments </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#contact"> Locations </a></li>  
                        <li><a class="smooth-scroll" href="<?=base_url('code');?>"> Check microchip no. </a></li>  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-gb"></span> English</a>
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
<div class="main-header text-left">
    <div class="container">
        <h2 class="main-title">Blog</h2>
        <p><a href="">Home</a> / <span> blog </span></p>
    </div>
</div>
<div class="main-content">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog">
                    <div class="post-area">
                        <article class="post">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="assets/images/page-blog-1.jpg" alt=""></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-sm-1">
                                    <div class="date-container pull-left">
                                        <h2 class="post_date"><span>23</span> Dec 2016</h2>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-11">
                                    <div class="post-content text-left">
                                        <header class="entry-header text-uppercase">
                                            <h2 class="entry-title"><a href="single-blog.html">SMALL WORK STATION</a>
                                            </h2>
                                            <div class="post-meta text-capitalize">
                                                <span>By <a href="#">Admin</a></span> /
                                                <span><a href=""><i class="fa fa-comments"></i> 0 </a></span>/
                                                <span><a href=""><i class="fa fa-folder-o"></i>travel</a> </span>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod
                                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                                eos
                                                et
                                                accusam et
                                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus
                                                est
                                                Lorem
                                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed
                                                diam
                                                nonumy
                                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam
                                                voluptua.
                                            </p>

                                            <div class="btn-continue-reading text-uppercase">
                                                <a class="btn btn-action" href="#">continue reading</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="post-area">
                        <article class="post">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="assets/images/page-blog-2.jpg" alt=""></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-sm-1">
                                    <div class="date-container pull-left">
                                        <h2 class="post_date"><span>23</span> Dec 2016</h2>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-11">
                                    <div class="post-content text-left">
                                        <header class="entry-header text-uppercase">
                                            <h2 class="entry-title"><a href="single-blog.html">Minimal Design Chairs</a>
                                            </h2>
                                            <div class="post-meta text-capitalize">
                                                <span>By <a href="#">Admin</a></span> /
                                                <span><a href=""><i class="fa fa-comments"></i> 0 </a></span>/
                                                <span><a href=""><i class="fa fa-folder-o"></i>travel</a> </span>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod
                                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                                eos
                                                et
                                                accusam et
                                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus
                                                est
                                                Lorem
                                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed
                                                diam
                                                nonumy
                                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam
                                                voluptua.
                                            </p>

                                            <div class="btn-continue-reading text-uppercase">
                                                <a class="btn btn-action" href="#">continue reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="post-area">
                        <article class="post">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="assets/images/page-blog-3.jpg" alt=""></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-sm-1">
                                    <div class="date-container pull-left">
                                        <h2 class="post_date"><span>23</span> Dec 2016</h2>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-11">
                                    <div class="post-content text-left">
                                        <header class="entry-header text-uppercase">
                                            <h2 class="entry-title"><a href="single-blog.html">Luxury Beds</a></h2>
                                            <div class="post-meta text-capitalize">
                                                <span>By <a href="#">Admin</a></span> /
                                                <span><a href=""><i class="fa fa-comments"></i> 0 </a></span>/
                                                <span><a href=""><i class="fa fa-folder-o"></i>travel</a> </span>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod
                                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                                eos
                                                et
                                                accusam et
                                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus
                                                est
                                                Lorem
                                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed
                                                diam
                                                nonumy
                                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam
                                                voluptua.
                                            </p>
                                            <div class="btn-continue-reading text-uppercase">
                                                <a class="btn btn-action" href="#">continue reading</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="post-area">
                        <article class="post no-border">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="assets/images/page-blog-4.jpg" alt=""></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-sm-1">
                                    <div class="date-container pull-left">
                                        <h2 class="post_date"><span>23</span> Dec 2016</h2>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-11">
                                    <div class="post-content text-left">
                                        <header class="entry-header text-uppercase">
                                            <h2 class="entry-title"><a href="single-blog.html">Living Room Sofa</a></h2>
                                            <div class="post-meta text-capitalize">
                                                <span>By <a href="#">Admin</a></span> /
                                                <span><a href=""><i class="fa fa-comments"></i> 0 </a></span>/
                                                <span><a href=""><i class="fa fa-folder-o"></i>travel</a> </span>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod
                                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                                eos
                                                et
                                                accusam et
                                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus
                                                est
                                                Lorem
                                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed
                                                diam
                                                nonumy
                                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam
                                                voluptua.
                                            </p>
                                            <div class="btn-continue-reading text-uppercase">
                                                <a class="btn btn-action" href="#">continue reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <ul class="blog-pagination pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="blog-sidebar">
                    <div class="bar search-bar">
                        <!-- Search Form -->
                        <form class="search-form relative">
                            <input type="text" name="search" class="search" placeholder="Quick Search...">
                            <button class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="bar text-left">
                        <!-- Head -->
                        <h2 class="bar-head  text-uppercase">
                            text widget
                        </h2>
                        <!-- Widget -->
                        <p class="bar-desc">
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page.
                        </p>
                    </div>
                    <div class="bar text-left">
                        <h2 class="bar-head">Recent Posts</h2>
                        <ul>
                            <li>
                                <a href="">Sales Home</a>
                            </li>
                            <li>
                                <a href="">Living Room Sofa</a>
                            </li>
                            <li>
                                <a href="">King Bed</a>
                            </li>
                            <li>
                                <a href="">Hotel Room</a>
                            </li>
                            <li>
                                <a href="">Luxury Beds</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bar text-left">
                        <!-- Head -->
                        <h2 class="bar-head text-uppercase">
                            Tags
                        </h2>
                        <!-- Bar -->
                        <a href="#" class="tag">
                            Design
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Photography
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            HTML
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Video
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Branding
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Wordpress
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Web Design
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Life Style
                        </a>
                        <!-- Tag -->
                        <a href="#" class="tag">
                            Northern
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBbJC1p09_Yfed8I7zZDnSJwcsr-A6QDZQ"></script>
<!-- COMMON JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/scripts.js"></script>
<?php include_once('map-footer-script.php');?>
</body>
</html>