<?php
$links='../../';
include $links.'shortcuts/active-variables.php';
$active_dashboard=$active_page;
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
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-y">

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--user-profile-1">
												<div class="kt-widget__head">
													<div class="kt-widget__media">
														<img src="./assets/media/users/100_1.jpg" alt="image">
													</div>
													<div class="kt-widget__content">
														<div class="kt-widget__section">
															<a href="#" class="kt-widget__username">
																Jason Muller
																<i class="flaticon2-correct kt-font-success"></i>
															</a>
															<span class="kt-widget__subtitle">
																Head of Development
															</span>
														</div>
														<div class="kt-widget__action">
															<button type="button" class="btn btn-info btn-sm">chat</button>&nbsp;
															<button type="button" class="btn btn-success btn-sm">follow</button>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
													<div class="kt-widget__content">
														<div class="kt-widget__info">
															<span class="kt-widget__label">Email:</span>
															<a href="#" class="kt-widget__data">matt@fifestudios.com</a>
														</div>
														<div class="kt-widget__info">
															<span class="kt-widget__label">Phone:</span>
															<a href="#" class="kt-widget__data">44(76)34254578</a>
														</div>
														<div class="kt-widget__info">
															<span class="kt-widget__label">Location:</span>
															<span class="kt-widget__data">Melbourne</span>
														</div>
													</div>
													<div class="kt-widget__items">
														<a href="../profile/Overview" class="kt-widget__item ">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon id="Bound" points="0 0 24 0 24 24 0 24" />
																			<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero" />
																			<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Profile Overview
																</span>
															</span>
														</a>
														<a href="../profile/personal" class="kt-widget__item ">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Personal Information
																</span>
															</span>
														</a>
														<a href="../profile/account" class="kt-widget__item kt-widget__item--active">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24" />
																			<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																			<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Account Information
																</span>
																</spandiv>
														</a>
														<a href="../profile/change" class="kt-widget__item ">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24" />
																			<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3" />
																			<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3" />
																			<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Change Password
																</span>
															</span>
															<span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--rounded kt-badge--bolder">5</span>
														</a>
														<a href="../profile/email" class="kt-widget__item ">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24" />
																			<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																			<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Email settings
																</span>
															</span>
														</a>
														<a href="#" class="kt-widget__item" data-toggle="kt-tooltip" title="Coming soon..." data-placement="right">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24" />
																			<rect id="Rectangle-7-Copy" fill="#000000" x="2" y="5" width="19" height="4" rx="1" />
																			<rect id="Rectangle-7-Copy-4" fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Saved Credit Cards
																</span>
															</span>
														</a>
														<a href="#" class="kt-widget__item" data-toggle="kt-tooltip" title="Coming soon..." data-placement="right">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
																			<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
																			<rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
																		</g>
																	</svg> </span>
																<span href="#" class="kt-widget__desc">Tax information</span>
															</span>
															<span class="kt-badge kt-badge--unified-brand kt-badge--inline kt-badge--bolder">new</span>
														</a>
														<a href="#" class="kt-widget__item" data-toggle="kt-tooltip" title="Coming soon..." data-placement="right">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24" />
																			<rect id="Rectangle-20" fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
																			<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Statements
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									</div>

									<!--end:: Widgets/Applications/User/Profile1-->
								</div>

								<!--End:: App Aside-->

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Account Information <small>change your account settings</small></h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="kt-portlet__head-wrapper">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon2-console"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">Export Tools</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-text-o"></i>
																				<span class="kt-nav__link-text">CSV</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																				<span class="kt-nav__link-text">PDF</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<form class="kt-form kt-form--label-right">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Account:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Username</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
																			<input class="form-control" type="text" value="nick84">
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="input-group">
																			<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																			<input type="text" class="form-control" value="nick.watson@loop.com" placeholder="Email" aria-describedby="basic-addon1">
																		</div>
																		<span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Language</label>
																	<div class="col-lg-9 col-xl-6">
																		<select class="form-control">
																			<option>Select Language...</option>
																			<option value="id">Bahasa Indonesia - Indonesian</option>
																			<option value="msa">Bahasa Melayu - Malay</option>
																			<option value="ca">Català - Catalan</option>
																			<option value="cs">Čeština - Czech</option>
																			<option value="da">Dansk - Danish</option>
																			<option value="de">Deutsch - German</option>
																			<option value="en" selected="">English</option>
																			<option value="en-gb">English UK - British English</option>
																			<option value="es">Español - Spanish</option>
																			<option value="eu">Euskara - Basque (beta)</option>
																			<option value="fil">Filipino</option>
																			<option value="fr">Français - French</option>
																			<option value="ga">Gaeilge - Irish (beta)</option>
																			<option value="gl">Galego - Galician (beta)</option>
																			<option value="hr">Hrvatski - Croatian</option>
																			<option value="it">Italiano - Italian</option>
																			<option value="hu">Magyar - Hungarian</option>
																			<option value="nl">Nederlands - Dutch</option>
																			<option value="no">Norsk - Norwegian</option>
																			<option value="pl">Polski - Polish</option>
																			<option value="pt">Português - Portuguese</option>
																			<option value="ro">Română - Romanian</option>
																			<option value="sk">Slovenčina - Slovak</option>
																			<option value="fi">Suomi - Finnish</option>
																			<option value="sv">Svenska - Swedish</option>
																			<option value="vi">Tiếng Việt - Vietnamese</option>
																			<option value="tr">Türkçe - Turkish</option>
																			<option value="el">Ελληνικά - Greek</option>
																			<option value="bg">Български език - Bulgarian</option>
																			<option value="ru">Русский - Russian</option>
																			<option value="sr">Српски - Serbian</option>
																			<option value="uk">Українська мова - Ukrainian</option>
																			<option value="he">עִבְרִית - Hebrew</option>
																			<option value="ur">اردو - Urdu (beta)</option>
																			<option value="ar">العربية - Arabic</option>
																			<option value="fa">فارسی - Persian</option>
																			<option value="mr">मराठी - Marathi</option>
																			<option value="hi">हिन्दी - Hindi</option>
																			<option value="bn">বাংলা - Bangla</option>
																			<option value="gu">ગુજરાતી - Gujarati</option>
																			<option value="ta">தமிழ் - Tamil</option>
																			<option value="kn">ಕನ್ನಡ - Kannada</option>
																			<option value="th">ภาษาไทย - Thai</option>
																			<option value="ko">한국어 - Korean</option>
																			<option value="ja">日本語 - Japanese</option>
																			<option value="zh-cn">简体中文 - Simplified Chinese</option>
																			<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
																	<div class="col-lg-9 col-xl-6">
																		<select class="form-control">
																			<option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
																			<option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
																			<option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
																			<option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
																			<option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
																			<option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
																			<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
																			<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
																			<option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
																			<option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
																			<option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
																			<option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
																			<option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
																			<option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
																			<option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
																			<option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
																			<option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
																			<option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
																			<option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
																			<option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
																			<option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
																			<option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
																			<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
																			<option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
																			<option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
																			<option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
																			<option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
																			<option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
																			<option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
																			<option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
																			<option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
																			<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
																			<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
																			<option data-offset="0" value="Azores">(GMT) Azores</option>
																			<option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
																			<option data-offset="0" value="UTC">(GMT) UTC</option>
																			<option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
																			<option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
																			<option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
																			<option data-offset="3600" value="London">(GMT+01:00) London</option>
																			<option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
																			<option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
																			<option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
																			<option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
																			<option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
																			<option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
																			<option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
																			<option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
																			<option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
																			<option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
																			<option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
																			<option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
																			<option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
																			<option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
																			<option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
																			<option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
																			<option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
																			<option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
																			<option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
																			<option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
																			<option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
																			<option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
																			<option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
																			<option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
																			<option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
																			<option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
																			<option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
																			<option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
																			<option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
																			<option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
																			<option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
																			<option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
																			<option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
																			<option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
																			<option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
																			<option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
																			<option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
																			<option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
																			<option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
																			<option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
																			<option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
																			<option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
																			<option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
																			<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
																			<option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
																			<option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
																			<option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
																			<option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
																			<option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
																			<option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
																			<option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
																			<option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
																			<option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
																			<option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
																			<option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
																			<option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
																			<option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
																			<option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
																			<option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
																			<option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
																			<option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
																			<option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
																			<option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
																			<option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
																			<option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
																			<option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
																			<option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
																			<option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
																			<option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
																			<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																			<option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
																			<option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
																			<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
																			<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
																			<option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
																			<option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
																			<option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
																			<option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
																			<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
																			<option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
																			<option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
																			<option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
																			<option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
																			<option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
																			<option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
																			<option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
																			<option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
																			<option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
																			<option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
																			<option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
																			<option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
																			<option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
																			<option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
																			<option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
																			<option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
																			<option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
																			<option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
																			<option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
																			<option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
																			<option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
																			<option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
																			<option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
																			<option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
																		</select>
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-inline">
																			<label class="kt-checkbox">
																				<input type="checkbox" checked=""> Email
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox" checked=""> SMS
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox"> Phone
																				<span></span>
																			</label>
																		</div>
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
																		<h3 class="kt-section__title kt-section__title-sm">Security:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
																	<div class="col-lg-9 col-xl-6">
																		<button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
																		<span class="form-text text-muted">
																			After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																			<a href="#" class="kt-link">Learn more</a>.
																		</span>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-single">
																			<label class="kt-checkbox">
																				<input type="checkbox"> Require personal information to reset your password.
																				<span></span>
																			</label>
																		</div>
																		<span class="form-text text-muted">
																			For extra security, this requires you to confirm your email or phone number when you reset your password.
																			<a href="#" class="kt-link">Learn more</a>.
																		</span>
																	</div>
																</div>
																<div class="form-group row kt-margin-t-10 kt-margin-b-10">
																	<label class="col-xl-3 col-lg-3 col-form-label"></label>
																	<div class="col-lg-9 col-xl-6">
																		<button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
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
																	<button type="reset" class="btn btn-success">Submit</button>&nbsp;
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
	<script src="./assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
		<script src="./assets/js/demo1/pages/custom/apps/user/profile.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	<?php
	include $links.'shortcuts/adfinder.php';
	?>

</body>
</html>