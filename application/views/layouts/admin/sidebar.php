<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li>
				<a href="<?=site_url();?>admin/dashboard">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="treeview">
				<a href="javascrip:;">
					<i class="fa fa-cogs"></i> <span>Frontend Setup</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?=site_url();?>admin/carousel/index"><i class="fa fa-picture-o"></i> Carousel</a></li>
					<li><a href="<?=site_url();?>admin/about_us/index"><i class="fa fa-cog"></i> About Us</a></li>
					<li><a href="<?=site_url();?>admin/why_us/index"><i class="fa fa-cog"></i> Why Us</a></li>
					<li><a href="<?=site_url();?>admin/our_services/index"><i class="fa fa-cog"></i> Our Services</a></li>
					<li><a href="<?=site_url();?>admin/contact/index"><i class="fa fa-cog"></i> Contact</a></li>
				</ul>
			</li>

			<li class="header">UTILITY</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-users"></i> <span>Akun Management</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?=site_url();?>admin/account/create"><i class="fa fa-plus"></i> Tambah Akun</a>
					</li>
					<li>
						<a href="<?=site_url();?>admin/account/index"><i class="fa fa-table"></i> List Akun</a>
					</li>
				</ul>
			</li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>