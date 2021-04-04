<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../">
	<meta charset="utf-8" />
	<title>Fulfillment System | Join now!</title>
	<meta name="description" content="Login page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="<?php echo base_url('assets/backend/'); ?>css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="<?php echo base_url('assets/backend/'); ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/'); ?>plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/'); ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="<?php echo base_url('assets/backend/'); ?>css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/'); ?>css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/'); ?>css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/'); ?>css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url('assets/backend/'); ?>media/logos/logo-2new.png" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
			<!--begin::Aside-->
			<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #616161; background-image: url(assets/media/bg/join.jpg)">
				<!--begin::Aside Top-->
				<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
					<!--begin::Aside header-->
					<a href="javascript:;" class="text-center mb-15">
						<img src="<?php echo base_url('assets/backend/'); ?>media/logos/logo-1new.png" alt="logo" class="h-80px" />
					</a>
					<!--end::Aside header-->
					<!--begin::Aside tit  le-->
					<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">Discover Fulfillment System Amazing
						<br />Features &amp; Possibilites
					</h3>
					<!--end::Aside title-->
				</div>
				<!--end::Aside Top-->
			</div>
			<!--begin::Aside-->
			<!--begin::Content-->
			<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
				<!--begin::Content body-->
				<div class="d-flex flex-column-fluid flex-center">

					<!--begin::Signin-->
					<div class="login-form login-signin">
						<!--begin::Form-->
						<form class="form" method="post" action="<?php echo base_url('administrator/check_login'); ?>">
							<!--begin::Title-->
							<div class="pb-13 pt-lg-0 pt-5">
								<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to Fulfillment System</h3>
							</div>
							<?php if ($this->session->flashdata('success')) { ?>
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert">&times;</a>
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php } ?>
							<?php if ($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger">
									<a href="#" class="close" data-dismiss="alert">&times;</a>
									<?php echo $this->session->flashdata('error'); ?>
								</div>
							<?php } ?>
							<!--begin::Title-->
							<!--begin::Form group-->
							<div class="form-group">
								<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
								<input class="form-control form-control-solid h-auto p-6 rounded-lg" type="email" name="email" autocomplete="on" />
							</div>
							<!--end::Form group-->
							<!--begin::Form group-->
							<div class="form-group">
								<div class="d-flex justify-content-between mt-n5">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
									<!-- <a href="javascript:;" class="text-light-dark font-size-h6 font-weight-bolder text-hover-dark pt-5" data-toggle="modal" data-target="#kt_login_forgot">Forgot Password ?</a> -->
								</div>
								<input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password" name="password" autocomplete="on" />
							</div>
							<!--end::Form group-->
							<!--begin::Action-->
							<div class="pb-lg-0 pb-5">
								<input type="submit" name="" value="Login" class="btn btn-light-dark">

							</div>
							<!--end::Action-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Signin-->


					<!--begin::Forgot-->
					<div class="modal fade" id="kt_login_forgot" role="dialog">
						<!--begin::Form-->
						<!-- <form class="form" method="post" action="<?php echo base_url('administrator-login/check_login'); ?>"> -->
						<form class="form" method="post" action="<?php echo base_url('administrator/new-password'); ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<!-- <h5 class="modal-title" id="exampleModalLabel">Credit Status:</h5> -->
										<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<!--begin::Title-->
										<div class="pb-3 pt-lg-0 pt-5">
											<p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
										</div>
										<!--end::Title-->
										<!--begin::Form group-->
										<div class="form-group">
											<input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" id="email_forget" placeholder="Email" name="email_forget" autocomplete="off" />
											<div class="forget_msg"></div>
										</div>
										<!--end::Form group-->
										<!--begin::Form group-->
										<div class="form-group d-flex flex-wrap pb-lg-0">
											<input type="button" value="Submit" class="btn btn-primary reset_password">
										</div>

										<!--end::Form group-->
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Forgot-->
				</div>

			</div>
			<!--end::Content-->
		</div>
		<!--end::Login-->
	</div>
	<!--end::Main-->
	<script>
		var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1400
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#3E97FF",
						"secondary": "#E5EAEE",
						"success": "#08D1AD",
						"info": "#844AFF",
						"warning": "#F5CE01",
						"danger": "#FF3D60",
						"light": "#E4E6EF",
						"dark": "#181C32"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#DEEDFF",
						"secondary": "#EBEDF3",
						"success": "#D6FBF4",
						"info": "#6125E1",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#3F4254",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#EBEDF3",
					"gray-300": "#E4E6EF",
					"gray-400": "#D1D3E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#7E8299",
					"gray-700": "#5E6278",
					"gray-800": "#3F4254",
					"gray-900": "#181C32"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="<?php echo base_url('assets/backend/'); ?>plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo base_url('assets/backend/'); ?>plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="<?php echo base_url('assets/backend/'); ?>js/scripts.bundle.js"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::SubmitPage Scripts(used by this page)-->
	<script src="<?php echo base_url('assets/backend/'); ?>js/pages/custom/login/login.js"></script>
	<!--end::Page Scripts-->
	<script type="text/javascript">
		$('.reset_password').click(function() {
			var email = $("#email_forget").val();
			if (email != '') {
				$.ajax({
					type: "POST",
					url: "<?= base_url('Login_controller/reset_password') ?>",
					data: {
						email: email
					},
					cache: false,
					success: function(data) {
						$('.forget_msg').html('<div class="text-warning">' + data + '</div>');
					}
				});
			} else {
				$('.forget_msg').html('<div class="text-danger">Please fill the email</div>');
			}
		})

		$(".alert").delay(3000).fadeOut(800);
	</script>
</body>
<!--end::Body-->

</html>