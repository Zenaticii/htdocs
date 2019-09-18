<?php
$links='';
include $links.'shortcuts/active-variables.php';
$active_dashboard=$active_page;
$current_page='Dashboard';
$previous_page='';
$title='';
//test1
?>
<!DOCTYPE html>
<html>
<head>
	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="">
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

	<?php
	include $links.'shortcuts/adfinder.php';
	?>

</body>
</html>