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