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
<style>
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
	margin-top: 15px;
    font-size: 18px;
    border: 1px solid #777;
    border-radius: 5px;
    text-align: center;
    color: #f5232e;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}
</style>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<?php include_once('nav.php');?>
		</div>
	</div>
<!-- //banner -->	
<!-- projects -->
	<div class="gallery-grids">
		<div class="container">
		<h2 class="w3ls_head"><span>Gall</span>ery</h2>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			<div align="center">
				<button class="btn btn-default filter-button" data-filter="all">All</button>
				<button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
				<button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
				<button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
				<button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
			</div>
			<div class="show-reel">
				<div class="col-md-3 agile-gallery-grid filter irrigation" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s1.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s1.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter irrigation" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s2.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s2.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter irrigation" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s3.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s3.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter spray" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s4.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s4.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter spray" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s5.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s5.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter hdpe" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s6.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s6.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter sprinkle" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s7.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s7.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter sprinkle" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s8.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s8.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter hdpe" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s4.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s4.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter hdpe" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s8.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s8.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter hdpe" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s5.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s5.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid filter hdpe" style="padding-bottom: 15px;">
					<div class="agile-gallery">
						<a href="<?=base_url();?>assets/images/s9.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="<?=base_url();?>assets/images/s9.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Diligence</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script>
				$(window).load(function() {
				  $.fn.lightspeedBox();
				});

			</script>
		</div>
	</div>
	<!-- //projects -->

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
		$(document).ready(function(){

		$(".filter-button").click(function(){
			var value = $(this).attr('data-filter');
			
			if(value == "all")
			{
				//$('.filter').removeClass('hidden');
				$('.filter').show('1000');
			}
			else
			{
	//			$('.filter[filter-item="'+value+'"]').removeClass('hidden');
	//			$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
				$(".filter").not('.'+value).hide('3000');
				$('.filter').filter('.'+value).show('3000');
				
			}
		});
		
		if ($(".filter-button").removeClass("active")) {
	$(this).removeClass("active");
	}
	$(this).addClass("active");

	});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
	<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- lightspeedBox -->
	<script src="<?=base_url();?>assets/js/lsb.js"></script>
<!-- //lightspeedBox -->
</body>
</html>