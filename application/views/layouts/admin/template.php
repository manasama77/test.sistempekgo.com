<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title;?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=base_url();?>vendor/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url();?>vendor/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url();?>vendor/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>vendor/adminlte/css/AdminLTE.min.css">

	<link rel="stylesheet" href="<?=base_url();?>vendor/adminlte/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?=base_url();?>vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<!-- HEADER -->
		<?php $this->load->view('layouts/admin/header'); ?>
		<!-- END HEADER -->

		<!-- SIDEBAR -->
		<?php $this->load->view('layouts/admin/sidebar'); ?>
		<!-- END SIDEBAR -->

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php $this->load->view('admin/'.$content); ?>
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 0.0.1
			</div>
			<strong>Copyright &copy; 2020 <a href=":;">LOKAMEDIA</a>.</strong>
		</footer>

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?=base_url();?>vendor/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?=base_url();?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="<?=base_url();?>vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?=base_url();?>vendor/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url();?>vendor/adminlte/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url();?>vendor/adminlte/js/demo.js"></script>
	<script src="<?=base_url();?>vendor/blockui/jquery.blockUI.js"></script>
	<script>
		let tree = $('.sidebar-menu').tree();
		var url = window.location;

		$('ul.sidebar-menu a').filter(function() {
			return this.href == url;
		}).parent().siblings().removeClass('active').end().addClass('active');

		$('ul.treeview-menu a').filter(function() {
			if(url == '<?=site_url();?>admin/survey/create_question'){ url = '<?=site_url();?>admin/survey/create/new'; }
			return this.href == url;
		}).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active').end().addClass('active');

	</script>
	<?php $this->load->view('admin/'.$vitamin); ?>
</body>
</html>
