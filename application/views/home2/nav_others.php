<!-- Start  Header -->
<header id="navigation" class="navbar-fixed-top">
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
                        <li><a class="smooth-scroll" href="<?=base_url();?>#home"> Home </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#about"> Profile </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#service"> Advantages </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url('blog');?>"> Blog </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#portfolio"> Gallery </a></li>
                        <li><a class="smooth-scroll" href="<?=base_url();?>#term"> Terms and Payments </a></li> 
                        <li><a class="smooth-scroll" href="<?=base_url();?>#contact"> Locations </a></li>  
                        <li><a class="smooth-scroll" href="<?=base_url('code');?>"> Check microchip no. </a></li>  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-gb"></span> English</a>
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