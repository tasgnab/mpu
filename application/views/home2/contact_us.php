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
        <?php if($this->session->userdata('lang')=='cn'){include_once('location_cn.php');}else {include_once('location.php');;}?>
    </div>
</section>
<!--END CONTACT-->