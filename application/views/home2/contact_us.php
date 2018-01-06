<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--START CONTACT-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "位置";}else {echo "Locations";}?></h2>
            <p><?php if($this->session->userdata('lang')=='cn'){echo "对于任何询问或谈判不要犹豫与我们联系。";}else {echo "For any inquiry or negotiation don't hesitate to contact us.";}?></p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-address text-right">
                    <address>
                        OFFICE : <br>
                        Jl. Pd. Rangon No. 63, Pd. Ranggon, Cipayung <br>
                        Kota Jakarta Timur 13860, Indonesia<br>
                    </address>
                    <a href="mailto:munjulprima@yahoo.com">munjulprima@yahoo.com</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget widget-map">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <!--
        <div class="row">
            <div class="col-md-8">
                <div class="widget widget-map">
                    <div id="map2"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-address text-left">
                    <address>
                        SHOWROOM : <br>
                        Jl. Pd. Rangon No. 63, Pd. Ranggon, Cipayung <br>
                        Kota Jakarta Timur 13860, Indonesia<br>
                    </address>
                    <a href="mailto:munjulprima@yahoo.com">munjulprima@yahoo.com</a>

                    <ul class="social-link">
                        <li><a href="https://www.instagram.com/ptmunjulprimautama" class="instagram" href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        -->
    </div>
</section>
<!--END CONTACT-->