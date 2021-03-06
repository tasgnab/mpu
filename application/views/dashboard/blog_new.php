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
    <script type="text/javascript"> //<![CDATA[ 
      var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
      document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
      //]]>
    </script>
    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/vendors/selectize/css/selectize.bootstrap3.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?=base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src='<?=base_url();?>assets/vendors/tinymce/tinymce.min.js'></script>
    <script>
     tinymce.init({
      selector: '#body, #body_cn',
      theme: 'modern',
      height: 400,
      relative_urls : false,
      remove_script_host : false,
      convert_urls : true,
      menubar: false,
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons paste textcolor'
      ],
      toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview | emoticons',
      file_browser_callback_types: 'image',
      file_picker_types: 'image',
      images_upload_url: '<?=base_url('dashboard/blog/uploadImage');?>',
      automatic_uploads: true,
      images_upload_base_path: "<?=base_url('upload/blog/');?>",
      setup:function(ed) {
           ed.on('change', function(e) {
               jQuery("#draft").removeAttr('disabled');
           });
       }
     });
     
    </script>
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
                <h3>New Blog Post</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <ul class="nav nav-tabs">
                      <li class="active" id="en"><a href="#">English</a></li>
                      <li><a href="#" id="cn">Chinese</a></li>
                    </ul>
                    <br>
                    <form id="blog-form" data-parsley-validate class="form-horizontal form-label-left input_mask" method="post" action="<?=base_url('dashboard/blog/save');?>">
                      <?php if (isset($post)): ?>
                      <input type="hidden" id="id" name="id" value="<?=isset($post)?$post->id:'';?>">
                      <?php endif; ?>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="title" name="title" placeholder="Title" required="required" value="<?=isset($post)?$post->title:'';?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="title_cn" name="title_cn" placeholder="标题" value="<?=isset($post)?$post->title_cn:'';?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="tags" value="<?=isset($tags)?$tags:'';?>"name="tags" placeholder="Tags" required="required">
                        <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <textarea id="body" name="body"><?=isset($post)?$post->body:'';?></textarea>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <textarea id="body_cn" name="body_cn"><?=isset($post)?$post->body_cn:'';?></textarea>
                      </div>
                      <div class="form-group">
                        <div class="pull-right">
                          <button id="draft" type="submit" class="btn btn-info">Save Draft</button>
                        </div>
                      </div>
                    </form>
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
    <!-- Selectize -->
    <script src="<?=base_url();?>assets/vendors/microplugin/microplugin.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/selectize/js/standalone/selectize.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?=base_url();?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#title_cn').closest("div").hide();
        $('#body_cn').closest("div").hide();

        $('#tags').selectize({
          plugins: ['restore_on_backspace', 'remove_button'],
          delimiter: ',',
          persist: false,
          maxItems: 3,
          create: function(input) {
              return {
                  value: input,
                  text: input
              }
          }
        });
      });
    </script>
	
  </body>
</html>
