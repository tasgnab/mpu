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
<?php include_once('nav_others.php');?>
<div class="main-content">
    <div class="main-header text-left">
        <div class="container">
            <h2 class="main-title text-capitalize">Check Microchip No.</h2>
            <div class="bar search-bar">
                <!-- Search Form -->
                <form class="search-form relative" action="<?=base_url('code');?>" method="post">
                    <input type="text" name="code" id="code" class="search" placeholder="Search...">
                    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container section-padding">
        <!-- Member Name -->
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">Code : <?=$code->code;?></h2>
            <p> <?=$code->type;?></p>
            <p> Date: <?=substr($code->sold_date,0,10);?></p>
        </div>
        <!-- End Head -->
        <div class="row">
            <!-- Modal Left -->
            <div class="col-sm-6">
                <!-- Img, Div -->
                <div class="modal-img">
                    <!-- Member Image -->
                    <?php if (isset($images)): ?>
                    <?php foreach($images as $image): ?>
                    <img src="<?=base_url('upload/code/'.$image->filename);?>" alt="" style="padding: 10px 0;">
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- End Member Left -->
            <!-- Modal Right -->
            <div class="col-sm-6 text-left">
                <div class="project-details">
                    <!-- Header -->
                    <h4 class="text-uppercase">
                        About <?=$code->type;?>
                    </h4>
                </div>
            <!--
                <div class="skills">
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width:<?=$spec['body'];?>%">
                            <span class="skill-value text-uppercase">Body <?=$spec['body'];?> / 100</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:<?=$spec['color'];?>%">
                            <span class="skill-value text-uppercase">Color <?=$spec['color'];?> / 100</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width: <?=$spec['fin'];?>%">
                            <span class="skill-value text-uppercase">Fin  <?=$spec['fin'];?> / 100</span>
                        </div>
                    </div>
                </div>
            -->
            <!--
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
            -->

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