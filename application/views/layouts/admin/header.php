<header class="main-header">
	<!-- Logo -->
	<a href="javascript:;" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><img src="<?=base_url();?>assets/img/lokalogo.jpg" width="50px"></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>LOKAMEDIA</b>CMS</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li>
					<a href="<?=site_url();?>" target="_blank"><i class="fa fa-home"></i> Lihat Web</a>
				</li>
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url();?>vendor/adminlte/img/user2-160x160.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs"><?=strtoupper($this->session->userdata(SESI.'username'));?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?=base_url();?>vendor/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
							<p>
								<?=strtoupper($this->session->userdata(SESI.'username'));?>
							</p>
						</li>
						<li class="user-footer">
							<a href="<?=site_url();?>logout/admin" class="btn btn-danger btn-block" style="color: #000 !important;"><i class="fa fa-sign-out"></i> Sign out</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>