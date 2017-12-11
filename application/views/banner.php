<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<?php include_once('nav.php');?>
			<div class="w3_agile_banner_info">
				<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p><?php if($this->session->userdata('lang')=='en') {echo "We are never afraid of technical challenges…";} else { echo "我们从不惧怕技术挑战";} ?></p>
										<h3><?php if($this->session->userdata('lang')=='en') {echo "Just see our most recent works projects!";} else { echo "只是看我们最近的工程项目";} ?></h3>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p><?php if($this->session->userdata('lang')=='en') {echo "We are never afraid of technical challenges…";} else { echo "我们从不惧怕技术挑战";} ?></p>
										<h3><?php if($this->session->userdata('lang')=='en') {echo "Just see our most recent works projects!";} else { echo "只是看我们最近的工程项目";} ?></h3>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p><?php if($this->session->userdata('lang')=='en') {echo "We are never afraid of technical challenges…";} else { echo "我们从不惧怕技术挑战";} ?></p>
										<h3><?php if($this->session->userdata('lang')=='en') {echo "Just see our most recent works projects!";} else { echo "只是看我们最近的工程项目";} ?></h3>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p><?php if($this->session->userdata('lang')=='en') {echo "We are never afraid of technical challenges…";} else { echo "我们从不惧怕技术挑战";} ?></p>
										<h3><?php if($this->session->userdata('lang')=='en') {echo "Just see our most recent works projects!";} else { echo "只是看我们最近的工程项目";} ?></h3>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script defer src="<?=base_url();?>assets/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
				
			</div>
			<div class="agile_banner_social">
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner -->