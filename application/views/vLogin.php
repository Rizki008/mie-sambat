<!DOCTYPE html>
<html lang="en">

<head>
	<title>MIE SAMBAT </title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="CodedThemes">
	<meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="CodedThemes">
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('asset/logo.jpg') ?>" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/guruable-master/') ?>assets/css/bootstrap/css/bootstrap.min.css">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/guruable-master/') ?>assets/icon/themify-icons/themify-icons.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/guruable-master/') ?>assets/icon/icofont/css/icofont.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/guruable-master/') ?>assets/css/style.css">
</head>

<body class="fix-menu">
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="ball-scale">
			<div class='contain'>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->

	<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- Authentication card start -->
					<div class="login-card card-block auth-body mr-auto ml-auto">
						<form method="POST" action="<?= base_url('cLogin') ?>" class="md-float-material">


							<div class="auth-box">
								<div class="row m-b-20">
									<div class="col-md-12">
										<div class="text-center">
											<img style="width: 130px;" src="<?= base_url('asset/logo.jpg') ?>" alt="logo.png">
											<h3 class="txt-primary">Sign In - Mie Sambat</h3>
										</div>

										<?php


										if ($this->session->userdata('success') != '') {
										?>
											<div class="alert alert-success" role="alert">
												<?= $this->session->userdata('success') ?>
											</div>
										<?php
										}
										?>
										<?php
										if ($this->session->userdata('error') != '') {
										?>
											<div class="alert alert-danger" role="alert">
												<?= $this->session->userdata('error') ?>
											</div>
										<?php
										}
										?>

									</div>

								</div>
								<hr />
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								<div class="input-group">
									<input type="text" name="username" class="form-control" placeholder="Username">
								</div>
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								<div class="input-group">
									<input type="password" name="password" class="form-control" placeholder="Password">
									<span class="md-line"></span>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
									</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-md-10">
										<p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
										<p class="text-inverse text-left"><b>Your Authentication Team</b></p>
										<p class="text-inverse text-left"><b>MIE SAMBAT - METODE EOQ</b></p>
									</div>

								</div>

							</div>
						</form>
						<!-- end of form -->
					</div>
					<!-- Authentication card end -->
				</div>
				<!-- end of col-sm-12 -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container-fluid -->
	</section>

	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/popper.js/popper.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/bootstrap/js/bootstrap.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- modernizr js -->
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/modernizr/css-scrollbars.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/common-pages.js"></script>
</body>

</html>