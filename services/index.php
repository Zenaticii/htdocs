<?php
$links='../';
include $links.'shortcuts/active-variables.php';
$active_services=$active_page;
$current_page='Services';
$previous_page='Dashboard';
$title='';
?>
<!DOCTYPE html>
<html>
<head>
	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="../">
	<!--begin::Page Custom Styles(used by this page) -->
		<link href="./assets/css/demo1/pages/general/pricing/pricing-1.css" rel="stylesheet" type="text/css" />
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

		<!--begin::Pricing Tables Page - 3-->

		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="la la-puzzle-piece"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Services Table
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">
				<div class="kt-pricing-1 kt-pricing-1--fixed">
					<div class="kt-pricing-1__items row">
						<div class="kt-pricing-1__item col-lg-4">
							<div class="kt-pricing-1__visual">
								<div class="kt-pricing-1__hexagon1"></div>
								<div class="kt-pricing-1__hexagon2"></div>
								<span class="kt-pricing-1__icon kt-font-brand"><i class="fa flaticon-rocket"></i></span>
							</div>
							<span class="kt-pricing-1__price">Free</span>
							<span class="kt-pricing-1__description">
								<span>1 class</span>
								<span>Statistics</span>
								<span>ADs Free? NO</span>
							</span>
							<div class="kt-pricing-1__btn">
								<button type="button" class="btn btn-pill  btn-brand btn-wide btn-uppercase btn-bolder btn-sm">Get For Free</button>
							</div>
						</div>
						<div class="kt-pricing-1__item col-lg-4">
							<div class="kt-pricing-1__visual">
								<div class="kt-pricing-1__hexagon1"></div>
								<div class="kt-pricing-1__hexagon2"></div>
								<span class="kt-pricing-1__icon kt-font-brand"><i class="fa flaticon-piggy-bank"></i></span>
							</div>
							<span class="kt-pricing-1__price">3<span class="kt-pricing-1__label">USD</span></span>
							<h2 class="kt-pricing-1__subtitle">Business License</h2>
							<h2 class="kt-pricing-1__subtitle">Per Month (per student)</h2>
							<span class="kt-pricing-1__description">
								<span>UNLIMITED classes</span>
								<span>Accounts for every student/parent/teacher</span>
								<span>Statistics</span>
								<span>Technical support</span>
								<span>Teachers will upload the notes and absences<br>of the students on the site.</span>
								<span>ADs Free</span>
							</span>
							<div class="kt-pricing-1__btn">
								<button type="button" class="btn btn-pill  btn-brand btn-wide btn-uppercase btn-bolder btn-sm">Purchase</button>
							</div>
						</div>
						<div class="kt-pricing-1__item col-lg-4">
							<div class="kt-pricing-1__visual">
								<div class="kt-pricing-1__hexagon1"></div>
								<div class="kt-pricing-1__hexagon2"></div>
								<span class="kt-pricing-1__icon kt-font-brand"><i class="fa flaticon-gift"></i></span>
							</div>
							<span class="kt-pricing-1__price">5<span class="kt-pricing-1__label">USD</span></span>
							<h2 class="kt-pricing-1__subtitle">Enterprice License</h2>
							<h2 class="kt-pricing-1__subtitle">Per Month (per student)</h2>
							<span class="kt-pricing-1__description">
								<span>UNLIMITED classes</span>
								<span>Accounts for every student/parent/teacher</span>
								<span>Statistics</span>
								<span>Technical support</span>
								<span>We will send an employee who will upload your student notes and absences on the site.</span>
								<span>ADs Free</span>
								<br>
								<span>! It depends on the region !</span>
							</span>
							<div class="kt-pricing-1__btn">
								<button type="button" class="btn btn-pill  btn-brand btn-wide btn-uppercase btn-bolder btn-sm">Purchase</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end::Portlet-->

		<!--begin::Pricing Tables Page - 3-->
	</div>

	<!--END::PAGE CONTENT -->
	<?php
	include $links.'shortcuts/globalconfig.php';
	?>

	<?php
	include $links.'shortcuts/adfinder.php';
	?>

</body>
</html>