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
<?php include_once('nav_others_cn.php');?>
<div class="main-header text-left">
    <div class="container">
        <h2 class="main-title">博客</h2>
        <p><a href="">首页</a> / <span> 博客 </span></p>
    </div>
</div>
<div class="main-content">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog">
                    <?php foreach ($results as $data):?>
                    <div class="post-area">
                        <article class="post">
                            <div class="post-thumb">
                                <a href="#"><img src="<?php if ($data->image_url !== ''){echo $data->image_url;}else{echo base_url('assets/images/page-blog-1.jpg');}?>" alt=""></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-sm-1">
                                    <div class="date-container pull-left">
                                        <h2 class="post_date"><span><?=$data->day;?></span> <?=$data->month;?> <?=$data->year;?></h2>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-11">
                                    <div class="post-content text-left">
                                        <header class="entry-header text-uppercase">
                                            <h2 class="entry-title"><a href="<?=base_url('blog/single/').$data->id;?>"><?=$data->title_cn;?></a>
                                            </h2>
                                            <div class="post-meta text-capitalize">
                                                <span>By <?=$data->created_by;?></span> /
                                                <span><a href=""><i class="fa fa-comments"></i> 0 </a></span><!-- / -->
                                                <!-- <span><a href=""><i class="fa fa-folder-o"></i>travel</a> </span> -->
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <?=substr(strip_tags($data->body_cn,'<p>'),0,200);?>
                                            <div class="btn-continue-reading text-uppercase">
                                                <a class="btn btn-action" href="<?=base_url('blog/single/').$data->id;?>">继续</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php endforeach; ?>
                </div>
                <ul class="blog-pagination pagination">
                    <?php if (isset($links)) { ?>
                        <?php echo $links ?>
                    <?php } ?>
                </ul>
                
            </div>
            <!-- <div class="col-md-4">
                <div class="blog-sidebar">
                    <div class="bar search-bar">
                        <form class="search-form relative">
                            <input type="text" name="search" class="search" placeholder="Quick Search...">
                            <button class="search-button"><i class="fa fa-search"></i></button>
                        </form>
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
                        <h2 class="bar-head text-uppercase">
                            Tags
                        </h2>
                        <?php foreach($tags as $tag): ?>
                        <a href="#" class="tag">
                            <?=$tag->name;?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- footer -->
<?php include_once('footer_cn.php');?>
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