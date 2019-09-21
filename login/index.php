<?php
$links='../';
include $links.'shortcuts/active-variables.php';
//$active_dashboard=$active_page;
//$current_page='Dashboard';
//$previous_page='';
$title=' | Login';
?>
<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="../">
	<?php
	include $links.'shortcuts/head.php';
	?>
	
	<!--begin::Page Custom Styles(used by this page) -->
	<link href="./assets/css/demo12/pages/general/login/login-3.css" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles -->	
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

	<!--begin::PAGE CONTENT -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./assets/media//bg/bg-3.jpg);">
				<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
					<div class="kt-login__container">
						<div class="kt-login__logo">
							<a href="#">
								<img src="./img/logos/logoArtboard 1@4x.png" style="height: 30%; width: 30%;">
							</a>
						</div>
						<div class="kt-login__signin">
							<div class="kt-login__head">
								<h3 class="kt-login__title">Sign In</h3>
							</div>
							<form class="kt-form" action="">
								<div class="input-group">
									<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="on">
								</div>
								<div class="input-group">
									<input class="form-control" type="password" placeholder="Password" name="password">
								</div>
								<div class="row kt-login__extra">
									<div class="col">
										<label class="kt-checkbox">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div>
									<div class="col kt-align-right">
										<a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Your Password ?</a>
									</div>
								</div>
								<div class="kt-login__actions">
									<!--here-->
									<button id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button> 
								</div>
							</form>
						</div>
						<div class="kt-login__signup">
							<div class="kt-login__head">
								<h3 class="kt-login__title">Sign Up</h3>
								<div class="kt-login__desc">Enter your details to create your account:</div>
							</div>
							<form class="kt-form" action="">
								<div class="input-group">
									<input class="form-control" type="text" placeholder="Fullname" name="fullname">
								</div>
								<div class="input-group">
									<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="input-group">
									<input class="form-control" type="password" placeholder="Password" name="password">
								</div>
								<div class="input-group">
									<input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
								</div>
								<div class="row kt-login__extra">
									<div class="col kt-align-left">
										<label class="kt-checkbox">
											<input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
											<span></span>
										</label>
										<span class="form-text text-muted"></span>
									</div>
								</div>
								<div class="kt-login__actions">
									<button id="kt_login_signup_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
									<button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
								</div>
							</form>
						</div>
						<div class="kt-login__forgot">
							<div class="kt-login__head">
								<h3 class="kt-login__title">Forgotten Password ?</h3>
								<div class="kt-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="kt-form" action="">
								<div class="input-group">
									<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
								</div>
								<div class="kt-login__actions">
									<button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
									<button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
								</div>
							</form>
						</div>
						<div class="kt-login__account">
							<span class="kt-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END::PAGE CONTENT -->
	<?php
	include $links.'shortcuts/globalconfig.php';
	?>

	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo12/pages/login/login-general.js" type="text/javascript"></script>
	<!--end::Page Scripts -->

</body>

<!-- end::Body -->
</html>