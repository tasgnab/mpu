<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- START PORTFOLIO -->
<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "照片";}else {echo "Gallery";}?></h2>
            <p><?php if($this->session->userdata('lang')=='cn'){echo "我们的产品图片和环境";}else {echo "Our product images and environment";}?></p>
        </div>
        <!-- Filters -->
        <div class="row">
            <div class="portfolio-wrapper">
                <ul class="filter  text-center text-uppercase">
                    <li><a class="active" href="#" data-toggle="tooltip" title="12" data-filter="*"><?php if($this->session->userdata('lang')=='cn'){echo "所有";}else {echo "All";}?></a></li>
                    <li><a href="#" data-toggle="tooltip" title="6" data-filter=".collection"><?php if($this->session->userdata('lang')=='cn'){echo "红龙鱼";}else {echo "Collection";}?></a></li>
                    <li><a href="#" data-toggle="tooltip" title="6" data-filter=".farm"><?php if($this->session->userdata('lang')=='cn'){echo "鱼场";}else {echo "Farm";}?></a></li>
                    <li><a href="#" data-toggle="tooltip" title="6" data-filter=".office"><?php if($this->session->userdata('lang')=='cn'){echo "办公室";}else {echo "Office";}?></a></li>
                </ul><!--/#portfolio-filter-->
                <div class="portfolio-items">
                    <div class="col-md-4 col-sm-6 work-grid collection">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/collection-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#collection-1-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>

                    <div class="col-md-4 col-sm-6 work-grid collection">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/collection-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#collection-2-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid collection">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/collection-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#collection-3-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                         </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid office">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/office-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#office-1-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                         </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid office">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/office-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#office-2-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                         </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid office">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/office-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#office-3-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                         </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid farm">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/farm-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo "隔离区";}else {echo "Quarantine Area";}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#farm-3-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid farm">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/farm-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo "在广州的展厅";}else {echo "Showroom in GuangZhou";}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#farm-4-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid farm">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/farm-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo "馈送";}else {echo "Feeding";}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#farm-5-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-12 col-sm-12 work-grid farm">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/farm-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo "养殖池塘";}else {echo "Breeding Ponds";}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#farm-1-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid collection">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/collection-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#collection-4-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid collection">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/collection-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#collection-5-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-4 col-sm-6 work-grid collection">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/collection-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#collection-6-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-12 col-sm-12 work-grid farm">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/farm-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo "水库";}else {echo "Water Reservoir";}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#farm-2-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <div class="col-md-12 col-sm-12 work-grid farm">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/gallery/farm-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo "水库";}else {echo "Water Reservoir";}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#farm-6-modal" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                </div>
            </div>
        </div>
        <div class="member-modal">
            <div class="modal modal-lg section-padding" id="office-1-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/office-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="office-2-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/office-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="office-3-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/office-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="collection-1-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/collection-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="collection-2-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/collection-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="collection-3-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/collection-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="collection-4-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/collection-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="collection-5-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/collection-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="collection-6-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/collection-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="farm-1-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/farm-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="farm-2-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/farm-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="farm-3-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/farm-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="farm-4-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/farm-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="farm-5-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/farm-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg section-padding" id="farm-6-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/gallery/farm-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--END PORTFOLIO -->