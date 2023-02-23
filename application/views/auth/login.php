<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Login</title>
	<meta name="description" content="Login Page" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/favicon/favicon.png"/>
	<meta name="application-name" content="&nbsp;" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?= base_url() ?>assets/img/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?= base_url() ?>assets/img/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?= base_url() ?>assets/img/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?= base_url() ?>assets/img/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?= base_url() ?>assets/img/favicon/mstile-310x310.png" />
	<!-- Favicon Tags End -->
	<!-- Font Tags Start -->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/font/CS-Interface/style.css" />
	<!-- Font Tags End -->
	<!-- Vendor Styles Start -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/vendor/OverlayScrollbars.min.css" />

	<!-- Vendor Styles End -->
	<!-- Template Base Styles Start -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css" />
	<!-- Template Base Styles End -->

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
	<script src="<?= base_url() ?>assets/js/base/loader.js"></script>
</head>

<body class="h-100">
	<div id="root" class="h-100">
		<!-- Background Start -->
		<div class="fixed-background"></div>
		<!-- Background End -->

		<div class="container-fluid p-0 h-100 position-relative">
			<div class="row g-0 h-100">
				<!-- Left Side Start -->
				<div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
					<div class="min-h-100 d-flex align-items-center">
						<div class="w-100 w-lg-75 w-xxl-50">
							<div>
								<div class="mb-2">
									<h1 class="display-2 text-white">SwiftDash</h1>
								</div>
								<hr>
								<p class="h6 text-white lh-1-5 mb-5">
								"Welcome to our exciting online world. Please login and have a different experience with us!"
								</p>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Left Side End -->

				<!-- Right Side Start -->
				<div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
					<div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
						<div class="sw-lg-50 px-5">
							<div class="sh-8">
								<a href="<?=base_url()?>">
									<img src="<?=base_url('assets/img/favicon/favicon.png')?>" style="width:40px" alt=""> <h2 style="display: inline;">SwiftDash</h2>
								</a>
							</div>
							<div class="mb-5">
								<h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
								<h2 class="cta-1 text-primary">let's get started!</h2>
							</div>
							<div class="mb-5">
								<p class="h6">Please use your credentials to login.</p>
								<p class="h6">
									If you are not a member, please
									<a href="<?= base_url('auth/registration') ?>">register</a>
									.
								</p>
							</div>
							<div>
							<?= $this->session->flashdata('message'); ?>
								<form id="loginForm" class="tooltip-end-bottom" action="<?= base_url('auth/index') ?>" method="post" novalidate>
									<div class="mb-3 filled form-group tooltip-end-top">
										<i data-cs-icon="email"></i>
										<input class="form-control" type="email"	 placeholder="Email" name="email" />
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
									</div>
									<div class="mb-3 filled form-group tooltip-end-top">
										<i data-cs-icon="lock-off"></i>
										<input class="form-control pe-7" name="password" type="password" placeholder="Password" />
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
									</div>
									<button type="submit" class="btn btn-lg btn-primary">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Right Side End -->
			</div>
		</div>
	</div>

	<!-- Theme Settings Modal Start -->
	