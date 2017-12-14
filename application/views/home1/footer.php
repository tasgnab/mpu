<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<!--
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Latest Tweets</h3>
					<ul class="agile_footer_grid_list">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio 
							cumque nihil impedit. <span>1 day ago</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>
							cumque nihil impedit. <span>2 days ago</span></li>
					</ul>
				</div>
				-->
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="services.html">Services</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="projects.html">Projects</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Instagram Posts</h3>
					<div class="w3_agileits_footer_grid_left">
						<a href="#"><img src="<?=base_url();?>assets/home1/images/s6.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#"><img src="<?=base_url();?>assets/home1/images/s2.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#"><img src="<?=base_url();?>assets/home1/images/s1.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#"><img src="<?=base_url();?>assets/home1/images/s3.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#"><img src="<?=base_url();?>assets/home1/images/s4.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#"><img src="<?=base_url();?>assets/home1/images/s5.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_newsletter_footer_grids">
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>3481 Melrose Place, Beverly Hills, <span>New York City 90210.</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">info@example1.com</a> 
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>© 2017 Diligence. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<script type="text/javascript">
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.navbar-fixed-top').addClass('sticky');
		} else {
			$('.navbar-fixed-top').removeClass('sticky');
		}
	});
</script>