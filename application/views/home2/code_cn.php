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
                <a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>assets/home2/images/logo-toro.png" alt=""></a>
            </div>

            <div id="myNavbar" class="navbar-collapse collapse">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="smooth-scroll" href="<?=base_url();?>#home"> 首页 </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#about"> 公司介绍 </a></li>
                        <!--<li><a class="smooth-scroll" href="<?=base_url();?>#service"> 我们的优势 </a></li> -->
                        <li><a class="smooth-scroll" href="<?=base_url();?>#portfolio"> 照片 </a></li>
                        <!--<li><a class="smooth-scroll" href="<?=base_url();?>#term"> 付款条件 </a></li> -->
                        <li><a class="smooth-scroll" href="<?=base_url();?>#contact"> 位置 </a></li>  
                        <li><a class="smooth-scroll" href="<?=base_url('code');?>"> 查芯片号码 </a></li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=\"flag-icon flag-icon-cn\"></span> 简体中文</a>
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
            <h2 class="main-title text-capitalize">查芯片号码</h2>
            <?php if ($this->session->flashdata('message')):?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong> <?=$this->session->flashdata('message'); ?>
            </div>
            <?php endif; ?>
            <div class="bar search-bar">
                <!-- Search Form -->
                <form class="search-form relative" action="<?=base_url('code');?>" method="post">
                    <input type="text" name="code" id="code" class="search" placeholder="搜索...">
                    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                </form>
            </div>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBbJC1p09_Yfed8I7zZDnSJwcsr-A6QDZQ"></script>
<!-- COMMON JS -->
<script type="text/javascript" src="<?=base_url();?>assets/home2/js/scripts.js"></script>
<?php include_once('map-footer-script.php');?>
</body>
</html>