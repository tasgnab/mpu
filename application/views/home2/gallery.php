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

                <?php foreach ($count->result() as $category): ?>
                    <li><a href="#" data-toggle="tooltip" title="<?=$category->total;?>" data-filter="<?php if ($category->name=='All'){echo '*';} else {echo '.'.$category->name;}?>"><?php if($this->session->userdata('lang')=='cn'){echo $category->name_cn;}else {echo $category->name;}?></a></li>
                <?php endforeach; ?>
                    
                </ul><!--/#portfolio-filter-->
                <div class="portfolio-items">
                <?php foreach ($galleries_N as $gallery): ?>
                    <div class="col-md-4 col-sm-6 work-grid <?=$gallery->code;?>">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/code/<?=$gallery->filename;?>" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo $gallery->description_cn;}else {echo $gallery->description;}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#modal<?=$gallery->id;?>" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <?php endforeach; ?>
                    <?php foreach ($galleries_P as $gallery): ?>
                    <div class="col-md-12 col-sm-12 work-grid <?=$gallery->code;?>">
                        <div class="single-portfolio"><!--START SINGLE PORTFOLIO-->
                            <img src="<?=base_url();?>upload/code/<?=$gallery->filename;?>" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-text text-uppercase">
                                    <h2><?php if($this->session->userdata('lang')=='cn'){echo $gallery->description_cn;}else {echo $gallery->description;}?></h2>
                                    <div class="portfolio-link">
                                        <a href="" data-toggle="modal" data-target="#modal<?=$gallery->id;?>" ><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--END SINGLE PORTFOLIO-->
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="member-modal">
            <?php foreach ($galleries_N as $gallery): ?>
            <div class="modal modal-lg section-padding" id="modal<?=$gallery->id;?>" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/code/<?=$gallery->filename;?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php foreach ($galleries_P as $gallery): ?>
            <div class="modal modal-lg section-padding" id="modal<?=$gallery->id;?>" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-inner">
                    <div class="modal-left col-sm-12">
                        <div class="items">
                            <a class="close" data-dismiss="modal" aria-hidden="true">x</a>
                            <img src="<?=base_url();?>upload/code/<?=$gallery->filename;?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!--END PORTFOLIO -->