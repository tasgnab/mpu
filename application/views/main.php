<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php');?>
	
<body>
<?php include_once('banner.php');?>

<?php include_once('banner-bottom.php');?>
<!-- Stats -->
	<script src="<?=base_url();?>assets/js/waypoints.min.js"></script> 
	<script src="<?=base_url();?>assets/js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});
		});
	</script>
<!-- //Stats -->
<?php include_once('skills.php');?>
<?php include_once('work-process.php');?>
<?php include_once('testimonial.php');?>
<?php include_once('footer.php');?>
	<script type="text/javascript" src="<?=base_url();?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
	<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- carousal -->
	<script src="<?=base_url();?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- gauge-meter -->
	<script src="<?=base_url();?>assets/js/jquery.gauge.js"></script>
	<script>
		$(document).ready(function (){
			$("#gauge1").gauge(30,{color: "#fb5710",unit: " %",type: "halfcircle"});
			$("#gauge2").gauge(70, {color: "#a821e7", unit: " %",type: "halfcircle"});
			$("#gauge3").gauge(75, {color: "#fbb810",unit: " %",type: "halfcircle"});
			$("#gauge4").gauge(90, {color: "#21d0e7",unit: " %",type: "halfcircle"});
		});
	</script>
<!-- //gauge-meter -->

</body>
</html>