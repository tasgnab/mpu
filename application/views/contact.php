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
<!-- contact -->
	<div class="contact">
		<div class="container">
			<h2 class="w3ls_head"><span>Cont</span>act</h2>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			<div class="map-grid">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74797.34511534027!2d-118.38309933569082!3d34.0539541803986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bbf84ceaa52d%3A0xbcf69dea3a7279a7!2sBarneys+New+York%2C+Beverly+Hills!5e0!3m2!1sen!2sin!4v1487836351924" class="map" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Address :</h4>
					<p>3481 Melrose Place<br>
						<span>Beverly Hills,</span>
						New York City 90210
					</p>	
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Phone :</h4>
					<p>+(000) 123 4565 32 </p>
					<p>+(010) 123 4565 35</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:example@email.com">mail@example.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--
			<div class="contact-form">
				<h4>Contact Form</h4>
				<div class="contact-form-grid">
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Full Name" required="">
								<label>Full Name</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Phone" required=""> 
								<label>Phone</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="Subject" required="">
								<label>Subject</label>
								<span></span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="styled-input textarea-grid">
							<textarea name="Message" required=""></textarea>
							<label>Message</label>
							<span></span>
						</div>	 
						<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			-->
		</div>
	</div>
	<!-- //contact -->
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
</body>
</html>