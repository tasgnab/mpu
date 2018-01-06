<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Start Home-->
<div class="home-carousel  full-screen-slider" id="home">
    <div class="item">
        <div class="home home-3 slide-1">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "万吉红龙鱼场有限公司.";}else {echo "The world’s best exporter and captive breeder of asian arowana";}?></h1>
                </div>
            </div>

        </div>
    </div>
    <div class="item">
        <div class="home home-3 slide-2">
            <div class="container-fluid">
                <div class="home-text text-center">
                    <h1 class="home-title text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "自1990年起注册CITES";}else {echo "Registered CITES since 1990";}?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="home home-3 slide-3">
            <div class="container-fluid">
                <div class="home-text text-center">
                     <h1 class="home-title text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "着名的农场爱好者之间";}else {echo "Well known farm among hobbyist";}?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home-->