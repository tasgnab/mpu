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
    
    <link rel="stylesheet" href="<?=base_url();?>assets/home2/css/flag-icon.css">
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
<header id="navigation" class="home-ts-menu">
<?php include_once('navbar.php');?>
</header>

<!-- Start Home-->
<div class="home-carousel  full-screen-slider" id="home">
    <div class="item">
        <div class="home home-3 slide-1">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "亚洲龙鱼世界上最好的出口商和俘虏饲养员";}else {echo "The world’s best exporter and captive breeder of asian arowana";}?></h1>
                    <p class="title-small">A Great one-page theme, perfect for new business website. </p>
                    
                </div>
            </div>

        </div>
    </div>
    <div class="item">
        <div class="home home-3 slide-2">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "自1990年起注册CITES";}else {echo "Registered CITES since 1990";}?></h1>
                    <p class="title-small">A Great one-page theme, perfect for new business website. </p>
                    
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home-->
<?php include_once('about_us.php');?>
<?php include_once('services.php');?>
<?php include_once('gallery.php');?>
<?php include_once('term.php');?>
<?php include_once('contact_us.php');?>
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