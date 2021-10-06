<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT. LAPRINT JAYA</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/'); ?>dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/template/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?php echo base_url('assets/template/'); ?>dist/img/AdminLTELogo.png"
				alt="AdminLTELogo" height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fa fa-user-circle"></i>
						Andika Candra Perdana
					</a>
					<!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">Options</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							Change Password
							<span class="float-right text-muted text-sm">
								<i class="fas fa-unlock-alt mr-2"></i>
							</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							Logout
							<span class="float-right text-muted text-sm">
								<i class="fas fa-sign-out-alt mr-2"></i>
							</span>
						</a>
					</div> -->
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="<?php echo base_url('assets/template/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Laprint Jaya</span>
			</a>

			<!-- Sidebar -->
			<?php $this->load->view('layouts/sidebar'); ?>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"><?php echo $title; ?></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<?php $this->load->view($content); ?>
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2021 <a href="#">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.2.0-rc
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- SweetAlert2 -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
	</script>
	<script
		src="<?php echo base_url('assets/template/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js">
	</script>
	<script
		src="<?php echo base_url('assets/template/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
	</script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js">
	</script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
	</script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/jszip/jszip.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js">
	</script>
	<!-- Select2 -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/select2/js/select2.full.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- InputMask -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script
		src="<?php echo base_url('assets/template/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
	</script>
	<!-- Summernote -->
	<script src="<?php echo base_url('assets/template/') ?>plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script
		src="<?php echo base_url('assets/template/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
	</script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/template/') ?>dist/js/adminlte.js"></script>

	<script>
		var site_url = "<?php echo site_url(); ?>";

		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});
	</script>

	<?php if($custom_js){ ?>
	<script src="<?php echo base_url('assets/custom_js/'.$custom_js.'.js?temp='.rand(1,1000)) ?>"></script>
	<?php } ?>
</body>

</html>
