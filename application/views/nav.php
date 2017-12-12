<nav class="navbar navbar-default">
	<div class="navbar-header navbar-left">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<h1><a class="navbar-brand" href="index.html"><i class="fa fa-industry" aria-hidden="true"></i>Muntjul</a></h1>
	</div>
<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
		<nav class="link-effect-8" id="link-effect-8">
			<ul class="nav navbar-nav">
				<li <?php if(current_url()==base_url()) {echo "class=\"active\"";}?>><a href="<?=base_url();?>"><?php if($this->session->userdata('lang')=='en') {echo "Home";} else { echo "主页 ";} ?></a></li>
				<!--
				<li <?php if(current_url()==base_url("services")) {echo "class=\"active\"";} ?>><a href="<?=base_url();?>services"><?php if($this->session->userdata('lang')=='en') {echo "Services";} else { echo "服务 ";} ?></a></li>
				-->
				<li <?php if(current_url()==base_url("projects")) {echo "class=\"active\"";} ?>><a href="<?=base_url();?>projects"><?php if($this->session->userdata('lang')=='en') {echo "Gallery";} else { echo "画廊 ";} ?></a></li>
				<li <?php if(current_url()==base_url("code")) {echo "class=\"active\"";} ?>><a href="<?=base_url();?>code"><?php if($this->session->userdata('lang')=='en') {echo "Code";} else { echo "联系 ";} ?></a></li>
				<li <?php if(current_url()==base_url("contact")) {echo "class=\"active\"";} ?>><a href="<?=base_url();?>contact"><?php if($this->session->userdata('lang')=='en') {echo "Contact";} else { echo "联系 ";} ?></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($this->session->userdata('lang')=='en') {echo "English ";} else { echo "简体中文 ";} ?><b class="caret"></b></a>
					<ul class="dropdown-menu agile_short_dropdown">
						<li><a href="<?=base_url();?>language/en">English</a></li>
						<li><a href="<?=base_url();?>language/cn">简体中文</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</nav>