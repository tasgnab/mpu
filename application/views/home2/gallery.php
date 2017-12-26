<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- START PORTFOLIO -->
<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">OUR PORTFOLIO</h2>
            <p >Describe something about your finished awesome works</p>
        </div>
        <!-- Filters -->
        <div class="row">
            <div class="portfolio-wrapper">
                <ul class="filter  text-center text-uppercase">
                    <li><a class="active" href="#" data-toggle="tooltip" title="6" data-filter="*">All</a></li>
                    <li><a href="#" data-toggle="tooltip" title="1" data-filter=".branding">Branding</a></li>
                    <li><a href="#" data-toggle="tooltip" title="3" data-filter=".design">Design</a></li>
                    <li><a href="#" data-toggle="tooltip" title=1 data-filter=".video">Video</a></li>
                    <li><a href="#" data-toggle="tooltip" title="1" data-filter=".audio">Audio</a></li>
                </ul><!--/#portfolio-filter-->
                <div class="portfolio-items">
                    <div class="col-md-4 col-sm-6 work-grid branding">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/gallery-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>New Envelop</h2>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid design">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/gallery-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Happy man</h2>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid design">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/gallery-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Environment</h2>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid video">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/gallery-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Iconography</h2>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid design">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/gallery-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Power of Space</h2>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid audio">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>assets/home2/images/gallery-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2>Music Compose</h2>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--END PORTFOLIO -->