<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--START PRICING-->
<section id="term" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "条款和条件。";}else {echo "Terms and Conditions";}?></h2>
            <p><?php if($this->session->userdata('lang')=='cn'){echo "一般规则和付款方式。";}else {echo "General rules and method of payment";}?></p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="single-plan special">
                    <div class="plan-heading">
                        <h2><?php if($this->session->userdata('lang')=='cn'){echo "条款和条件。";}else {echo "Terms and Conditions";}?></h2>
                    </div>
                    <h3></h3>
                    <ul class="all-feature text-left">
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "F5 Ultra Red Arowana Fish的最小订购量为10条。";}else {echo "Min. Order: 10pcs of F5 Ultra Red Arowana Fish.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "出口尺寸为15-35厘米。";}else {echo "Export size is from 15-35 cm.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "发货前全额付款。";}else {echo "Full payment before shipping.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "应用CITES大约2-4周。";}else {echo "Applying CITES takes around 2-4 weeks.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "我们只能把鱼出口到不禁止进口的国家。";}else {echo "Only Export to allowed Country.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "下面请联系我们进行谈判。";}else {echo "Contact us for negotiation.";}?></li>
                    </ul>
                    <a href="" class="btn buy-btn text-uppercase">Purchase Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-plan">
                    <div class="plan-heading">
                        <h2><?php if($this->session->userdata('lang')=='cn'){echo "付款方式和运输。";}else {echo "Payment Methods and Shipping.";}?></h2>
                    </div>
                    <h3></h3>
                    <ul class="all-feature text-left">
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "我们通过电传/电汇接收付款。";}else {echo "We accept payment by telex/wire transfer.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "100％的金额必须在销售确认/合同上支付。";}else {echo "Full payment needed upon sales confirmation / contract.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "如果有DOA，需要照片和微芯片数据。";}else {echo "Should there be any DOA, photos and microchip data are needed.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "我们的包装方法是国际标准，包装中的水在任何包装操作之前都经过精心准备。";}else {echo "Our packaging method is International Standard and the water in the package was carefully prepared before any packaging operation.";}?></li>
                        <li><?php if($this->session->userdata('lang')=='cn'){echo "我们的超红龙在运送前至少需要1周进行清洗。";}else {echo "Our arowanas are selected at least 1 week before shipping for purging.";}?></li>
                    </ul>
                    <a href="" class="btn buy-btn text-uppercase">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END PRICING-->