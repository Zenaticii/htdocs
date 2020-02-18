<?php
$links='../../';

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".$links."login");
    exit;
}


include $links.'shortcuts/active-variables.php';
$active_profile_email_settings=$active_page_profile;
$current_page='Profile';
$previous_page='';
$title=' | Profile';
?>
<!DOCTYPE html>
<html>
<head>
	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="../../">
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

								<!--End:: App Aside Mobile Toggle-->

								<!--Begin:: App Aside-->
								<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

									<!--begin:: Widgets/Applications/User/Profile1-->
									<div class="kt-portlet kt-portlet--height-fluid-">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
													<i class="flaticon-more-1"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="../../services">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<?php
											include $links.'shortcuts/profile-header.php';
										?>
									</div>

									<!--end:: Widgets/Applications/User/Profile1-->
								</div>

								<!--End:: App Aside-->

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Email Notifications <small>control when and how often VirtualGrades sends emails to you</small></h3>
													</div>
												</div>
												<form class="kt-form kt-form--label-right">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
																	</div>
																</div>
																<div class="form-group form-group-sm row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
																	<div class="col-lg-9 col-xl-6">
																		<span class="kt-switch">
																			<label>
																				<input type="checkbox" checked="checked" name="email_notification_1">
																				<span></span>
																			</label>
																		</span>
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
																	<div class="col-lg-9 col-xl-6">
																		<span class="kt-switch">
																			<label>
																				<input type="checkbox" name="email_notification_2">
																				<span></span>
																			</label>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-list">
																			<label class="kt-checkbox">
																				<input type="checkbox"> You have new notifications.
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox"> You're sent a direct message
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox" checked="checked"> Someone adds you as a connection
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-list">
																			<label class="kt-checkbox kt-checkbox--brand">
																				<input type="checkbox"> Upon new order.
																				<span></span>
																			</label>
																			<label class="kt-checkbox kt-checkbox--brand">
																				<input type="checkbox"> New membership approval
																				<span></span>
																			</label>
																			<label class="kt-checkbox kt-checkbox--brand">
																				<input type="checkbox" checked="checked"> Member registration
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
		
													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<div class="row">
																<div class="col-lg-3 col-xl-3">
																</div>
																<div class="col-lg-9 col-xl-9">
																	<button type="reset" class="btn btn-brand btn-bold">Change Password</button>&nbsp;
																	<button type="reset" class="btn btn-secondary">Cancel</button>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
						</div>

						<!-- end:: Content -->

	<!--END::PAGE CONTENT -->
	<?php
	include $links.'shortcuts/globalconfig.php';
	?>

	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo12/pages/dashboard.js" type="text/javascript"></script>
	<script src="./assets/js/demo1/pages/custom/apps/user/profile.js" type="text/javascript"></script>
	<!--end::Page Scripts -->

	<?php
	include $links.'shortcuts/adfinder.php';
	?>

</body>
</html>