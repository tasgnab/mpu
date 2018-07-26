<!-- Start  Header -->
<header id="navigation" class="home-ts-menu">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>assets/home2/images/logo-toro.png" alt=""></a>
            </div>

            <div id="myNavbar" class="navbar-collapse collapse">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="smooth-scroll" href="#home"> 首页 </a></li> 
                        <li><a class="smooth-scroll" href="#about"> 公司介绍 </a></li>
                        <!--<li><a class="smooth-scroll" href="#service"> 我们的优势 </a></li>-->
                        <li><a class="smooth-scroll" href="#blog"> Blog </a></li>
                        <li><a class="smooth-scroll" href="#portfolio"> 照片 </a></li>
                        <!--<li><a class="smooth-scroll" href="#term"> 付款条件 </a></li>-->
                        <li><a class="smooth-scroll" href="#contact"> 位置 </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url('code');?>"> 查芯片号码 </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-cn"></span> 简体中文</a>
                            <ul class="dropdown-menu text-capitalize">
                                <li><a href="<?=base_url();?>language/en"><span class="flag-icon flag-icon-gb"></span> English</a></li>
                                <li><a href="<?=base_url();?>language/cn"><span class="flag-icon flag-icon-cn"></span> 简体中文</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>
<!--End Header-->