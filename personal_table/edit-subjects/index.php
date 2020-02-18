<?php
$links='../';

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".$links."login");
    exit;
}

include $links.'shortcuts/active-variables.php';
$active_personal_table=$active_page;
$current_page='Personal Table';
$previous_page='Dashboard';
$title=' | Personal Table';
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
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<!--begin::Portlet-->
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon kt-hidden">
					<i class="la la-gear"></i>
				</span>
				<h3 class="kt-portlet__head-title">
					Form Repeater Example
				</h3>
			</div>
		</div>

		<!--begin::Form-->
		<form class="kt-form">
			<div class="kt-portlet__body">
				<div class="kt-form__section kt-form__section--first">
					<div class="form-group row">
						<label class="col-lg-2 col-form-label">Full Name:</label>
						<div class="col-lg-4">
							<input type="email" class="form-control" placeholder="Enter full name">
							<span class="form-text text-muted">Please enter your full name</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-2 col-form-label">Email address:</label>
						<div class="col-lg-4">
							<input type="email" class="form-control" placeholder="Enter email">
							<span class="form-text text-muted">We'll never share your email with anyone else</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-2 col-form-label">Contact</label>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
								<input type="text" class="form-control" placeholder="Phone number">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-2 col-form-label">Communication:</label>
						<div class="col-xl-8 col-lg-8 col-sm-12 col-md-12">
							<div class="kt-checkbox-inline">
								<label class="kt-checkbox">
									<input type="checkbox"> Email
									<span></span>
								</label>
								<label class="kt-checkbox">
									<input type="checkbox"> SMS
									<span></span>
								</label>
								<label class="kt-checkbox">
									<input type="checkbox"> Phone
									<span></span>
								</label>
							</div>
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
					<div id="kt_repeater_1">
						<div class="form-group form-group-last row" id="kt_repeater_1">
							<label class="col-lg-2 col-form-label">Contacts:</label>
							<div data-repeater-list="" class="col-lg-10">
								<div data-repeater-item class="form-group row align-items-center">
									<div class="col-md-3">
										<div class="kt-form__group--inline">
											<div class="kt-form__label">
												<label>Name:</label>
											</div>
											<div class="kt-form__control">
												<input type="email" class="form-control" placeholder="Enter full name">
											</div>
										</div>
										<div class="d-md-none kt-margin-b-10"></div>
									</div>
									<div class="col-md-3">
										<div class="kt-form__group--inline">
											<div class="kt-form__label">
												<label class="kt-label m-label--single">Number:</label>
											</div>
											<div class="kt-form__control">
												<input type="email" class="form-control" placeholder="Enter contact number">
											</div>
										</div>
										<div class="d-md-none kt-margin-b-10"></div>
									</div>
									<div class="col-md-2">
										<div class="kt-radio-inline">
											<label class="kt-checkbox kt-checkbox--state-success">
												<input type="checkbox"> Primary
												<span></span>
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
											<i class="la la-trash-o"></i>
											Delete
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-group-last row">
							<label class="col-lg-2 col-form-label"></label>
							<div class="col-lg-4">
								<a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
									<i class="la la-plus"></i> Add
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-2">
							<button type="reset" class="btn btn-success">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!--end::Form-->
	</div>
	<!--end::Portlet-->
	</div>
	<!--END::PAGE CONTENT -->
	<?php
	include $links.'shortcuts/globalconfig.php';
	?>
	
	<!--begin::Page Vendors(used by this page) -->
	<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo12/pages/dashboard.js" type="text/javascript"></script>

	<script src="./assets/js/demo1/pages/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>
	<!--end::Page Scripts -->

	<?php
	include $links.'shortcuts/adfinder.php';
	?>

</body>
</html>