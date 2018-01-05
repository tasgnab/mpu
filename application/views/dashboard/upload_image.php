<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$this->config->item('site_name');?></title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	   <!-- Dropzone.js -->
    <link href="<?=base_url();?>assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url();?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url();?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>assets/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include_once('sidebar.php');?>
        <?php include_once('top-nav.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Upload image for <?=$this->session->userdata('code');?></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form class="dropzone" action="<?=base_url('dashboard/code/doUploadImage'); ?>" id="myDropzoneContainer" enctype="multipart/form-data">
                      <div class="dz-message" data-dz-message><span>Click or drop your files here.<br>Max filesize 1 MB.</span></div>
                      <div class="fallback">
                        <input name="file" type="file">
                      </div>
                    </form>
                    <div class="ln_solid"></div>
                    
                    <a href="<?=base_url('dashboard/code');?>"><button style="float: right" type="submit" class="btn btn-success">Finish</button></a>
                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Dropzone.js -->
    <script src="<?=base_url();?>assets/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
    <script>
      Dropzone.options.myDropzoneContainer = { 
        method: "post", 
        maxFilesize: 10,
        acceptedFiles: "image/jpeg,image/jpg",
        parallelUploads: 1,
        autoProcessQueue: true
      };
    </script>
	 
  </body>
</html>
