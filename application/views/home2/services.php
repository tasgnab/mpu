<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Start Service-->
<section id="service" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase"><?php if($this->session->userdata('lang')=='cn'){echo "我们的优势";}else {echo "Advantages";}?></h2>
            <p><?php if($this->session->userdata('lang')=='cn'){echo "为什么是我们？";}else {echo "Why Us?";}?></p>
        </div>
        <div  class="row">
            <div class="col-md-4">
                <div class="single-service text-center"><!-- START SINGLE SERVICE-->
                    <div class="service-icon">
                        <i class="fa fa-plane"></i>
                    </div>
                    <h2 class="text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "出口质量";}else {echo "Export Quality";}?></h2>
                    <p><?php if($this->session->userdata('lang')=='cn'){echo "我们是超级红龙鱼鱼出口的先驱。 自1985年以来，我们一直在出口我们的鱼，我们有如何处理它的经验。";}else {echo "We have been exporting our fish since 1985. We are experienced in handling the processes.";}?></p>
                </div><!-- END SINGLE SERVICE-->
            </div>
            <div class="col-md-4">
                <div class="single-service text-center"><!-- START SINGLE SERVICE-->
                    <div class="service-icon">
                        <i class="fa fa-archive"></i>
                    </div>
                    <h2 class="text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "包装质量";}else {echo "Packing Quality";}?></h2>
                    <p><?php if($this->session->userdata('lang')=='cn'){echo "我们的鱼类包装经历了每个过程完成之前和之后需要检查和确认的过程。 氧气水平，水位和高质量，所有这些都是彻底完成的，所以龙鱼鱼在交货时不会受到压力。";}else {echo "Our fish packaging undergoes processes in which need to be checked and confirmed before and after each process is done. Oxygen level, water level, and other things are thoroughly inspected so the Arowana Fish do not get stressed during delivery.";}?></p>
                </div><!-- END SINGLE SERVICE-->
            </div>
            <div class="col-md-4">
                <div class="single-service text-center"><!-- START SINGLE SERVICE-->
                    <div class="service-icon">
                        <i class="fa fa-tint"></i>
                    </div>
                    <h2 class="text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "水质";}else {echo "Water Quality";}?></h2>
                    <p><?php if($this->session->userdata('lang')=='cn'){echo "拥有我们自己的水库和相当大的水源，因为我们的水源确保了我们鱼类的高质量护理，因为我们更容易控制我们的水分养分。";}else {echo "Having our own reservoirs and a considerably big well as sources of our water ensures top quality care for our fish as it is easier for us to control our water nutrients.";}?></p>
                </div><!-- END SINGLE SERVICE-->
            </div>
        </div><!-- end row -->
        <div  class="row">
            <div class="col-md-4">
                <div class="single-service text-center"><!-- START SINGLE SERVICE-->
                    <div class="service-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <h2 class="text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "经验丰富的技术人员";}else {echo "Experienced and Skilled Staff";}?></h2>
                    <p><?php if($this->session->userdata('lang')=='cn'){echo "我们每个部门都有一个分部负责人，以确保始终如一的表现。 生产负责人，销售主管，质量控制部门和营销主管。";}else {echo "We have a group of experienced people to ensure top quality and performance at all times in these segments: Production, Sales, Quality Control, and Marketing.";}?></p>
                </div><!-- END SINGLE SERVICE-->
            </div>
            <div class="col-md-4">
                <div class="single-service text-center"><!-- START SINGLE SERVICE-->
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <h2 class="text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "农场声誉";}else {echo "Farm Reputation";}?></h2>
                    <p><?php if($this->session->userdata('lang')=='cn'){echo "我们的目标是成为最大的Arowana农场，位于Cibubur，不久将被移至Jonggol。 我们在广州花都还有1000个展厅。 世界各地的嗜好者和金鱼鱼代理人最有可能知道这些术语之一，Munjul F5或孟继儿。";}else {echo "We aim to be the greatest Arowana Farm. We are located in Cibubur and soon moving to Jonggol (16 hectares). We also have a 1000-aquarium showroom in Huadu, GuangZhou (China). Hobbyists and Arowana Fish Agents from all around the world most likely know either one of these terms, Munjul F5 or Meng Ji Er.";}?></p>
                </div><!-- END SINGLE SERVICE-->
            </div>
            <div class="col-md-4">
                <div class="single-service text-center"><!-- START SINGLE SERVICE-->
                    <div class="service-icon">
                        <i class="fa fa-certificate"></i>
                    </div>
                    <h2 class="text-uppercase"> <?php if($this->session->userdata('lang')=='cn'){echo "保证";}else {echo "Warranty";}?></h2>
                    <p> <?php if($this->session->userdata('lang')=='cn'){echo "只要买方能够证实和证明死鱼的微芯片数据和照片，我们对DOA就有一个相当慷慨的用语。";}else {echo "We have a reasonably generous term when it comes to DOA’s, as long as the buyer can confirm and prove the microchip data and photos of the dead fish.";}?></p>
                </div><!-- END SINGLE SERVICE-->
            </div>
        </div><!-- end row -->
    </div>
</section>
<!-- END SERVICE -->