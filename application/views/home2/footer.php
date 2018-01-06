<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- footer -->
<footer>
    <div class="footer-widget section-padding text-left">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget widget-about">
                        <h2 class="widget-title text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "公司介绍";}else {echo "Profile";}?></h2>
                        <p><?php if($this->session->userdata('lang')=='cn'){echo "万吉红龙鱼场有限公司.";}else {echo "The world’s best exporter and captive breeder of asian arowana";}?></p>
                        <div class="address">
                            <h3> <?php if($this->session->userdata('lang')=='cn'){echo "营业时间";}else {echo "Business Hours";}?></h3>
                            <p><?php if($this->session->userdata('lang')=='cn'){echo "星期一";}else {echo "Mon.";}?> - <?php if($this->session->userdata('lang')=='cn'){echo "星期五";}else {echo "Fri.";}?> 8am to 5pm <br><?php if($this->session->userdata('lang')=='cn'){echo "星期六";}else {echo "Sat.";}?> 8am to 11am</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget widget-map">
                        <h2 class="widget-title text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "办公室地图";}else {echo "Office Map";}?></h2>
                        <div id="map3"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="copyright-text text-center">
        <p >&copy;2018 PT Munjul Prima Utama by <a href="">thopo.ma</a></p>
    </div>
</footer>