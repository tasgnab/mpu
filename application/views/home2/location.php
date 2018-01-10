<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
                <div class="row">
            <div class="col-md-8">
                <div class="widget widget-map">
                    <div id="map2"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-address text-left">
                    <address>
                        <?php if($this->session->userdata('lang')=='cn'){echo "办公室";}else {echo "OFFICE";}?> : <br>
                        Huadu District, Guangzhou, Guangdong <br>
                    </address>
                    <a href="mailto:munjulprima@yahoo.com">munjulprima@yahoo.com</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-address text-right">
                    <address>
                        <?php if($this->session->userdata('lang')=='cn'){echo "鱼场";}else {echo "FARM";}?> : <br>
                        Jl. Pd. Rangon No. 63, Pd. Ranggon, Cipayung <br>
                        Kota Jakarta Timur 13860, Indonesia<br>
                    </address>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget widget-map">
                    <div id="map"></div>
                </div>
            </div>
        </div>
