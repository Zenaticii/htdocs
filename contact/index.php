 <?php
$links='../';
include $links.'shortcuts/active-variables.php';
$active_dashboard=$active_page;
$current_page='Contact Us';
$previous_page='';
$title=' | Contact Us';
?>
<!DOCTYPE html>
<html>
<head>
	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="../">
	<?php
	include $links.'shortcuts/head.php';
	?>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
	<?php
	include $links.'shortcuts/header.php';
	?>
	<!--begin::PAGE CONTENT -->
<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content"> 

							<!--Begin::App-->
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

								<!--Begin:: App Aside Mobile Toggle-->
								<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
									<i class="la la-close"></i>
								</button>
								<!--Nu ma ating mai jos-->

						<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet">

    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
				Send us your enquiries
			</h3>
        </div>
    </div>
    <!--begin::Form-->
    <form class="kt-form">
        <div class="kt-portlet__body">
			<div class="row">
				<div class="col-xl-3"></div>
				<div class="col-xl-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" aria-describedby="nameHelp" placeholder="Enter your name">
					</div>
					<div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" aria-describedby="nameHelp" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Your Message</label>
						<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
						<span class="form-text text-muted">We'll never share your email with anyone else.</span>
					</div>
				</div>
				<div class="col-xl-3"></div>
			</div>
		</div>
		
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
				<div class="row">
					<div class="col-xl-3"></div>
					<div class="col-xl-6">
						<button type="reset" class="btn btn-brand">Submit</button>&nbsp;
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
					<div class="col-xl-3"></div>
				</div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
													</div>
												</div>
											</div>
										
							<!--End::App-->
						</div>

						<!-- end:: Content -->
					</div>
	<!--END::PAGE CONTENT -->
	<?php
	include $links.'shortcuts/globalconfig.php';
	?>
	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
		<script src="./assets/js/demo1/pages/custom/apps/user/profile.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	<?php
	include $links.'shortcuts/adfinder.php';
	?>

</body>
</html>