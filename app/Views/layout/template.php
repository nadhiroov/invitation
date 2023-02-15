<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Avatars - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url(); ?>/template/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="<?= base_url(); ?>/template/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url(); ?>/template/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url(); ?>/template/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/template/css/atlantis.min.css">
	<!-- CSS per Page -->
	<?= $this->renderSection('css'); ?>
	<!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="../index.html" class="logo">
					<img src="<?= base_url(); ?>/template/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<?= $this->include('layout/navbar'); ?>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<?= $this->include('layout/sidebar'); ?>
		<div class="main-panel">
			<!-- content -->
			<?= $this->renderSection('content'); ?>

			<?= $this->include('layout/footer'); ?>
		</div>
	</div>
	
	<!--   Core JS Files   -->
	<script src="<?= base_url(); ?>/template/js/core/jquery.3.2.1.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
	<script src="<?= base_url(); ?>/template/js/core/popper.min.js"></script>
	<script src="<?= base_url(); ?>/template/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>/template/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/myscript.js"></script>
	<!-- jQuery UI -->
	<script src="<?= base_url(); ?>/template/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url(); ?>/template/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="<?= base_url(); ?>/template/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="<?= base_url(); ?>/template/js/atlantis.min.js"></script>
	<!-- JavaScript per page -->
    <?= $this->renderSection('js'); ?>
</body>
</html>