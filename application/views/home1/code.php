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
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<?php include_once('nav.php');?>
		</div>
	</div>
<!-- //banner -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h2 class="w3ls_head"><span>Our </span>Services</h2>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			<div class="w3_newsletter_footer_grid_left" style="margin-top: 20px;margin-bottom: 20px;padding-bottom: 300px;">
				<form action="#" method="post">
					<input type="text" name="code" placeholder="Chip Code" required style="border: solid 1px #777;">
					<input type="submit" value="Send">
				</form>
				<div class="clearfix"> </div>
			</div>
	</div>
	<!-- //services -->
	
<?php include_once('footer.php');?>
<script type="text/javascript" src="<?=base_url();?>assets/home1/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/home1/js/easing.js"></script>
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
	<script src="<?=base_url();?>assets/home1/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>