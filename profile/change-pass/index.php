<?php
$links='../../';

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".$links."login");
    exit;
}
 
// Include config file
require_once $links.'shortcuts/conn-database.php';
 
// Define variables and initialize with empty values
$old_password = $new_password = $confirm_password = "";
$old_password_err = $new_password_err = $confirm_password_err = "";

//START reCaptcha
define('SITE_KEY','6Ldw7sUUAAAAAPTyOhVtmlqWsJuzLrPd2OmZRpVO');
define('SECRET_KEY','6Ldw7sUUAAAAALlzKt-m6yT4f9mE9gOt8CZMH2RW');

if($_POST){
	function getCaptcha($SecretKey){
		$Response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.SECRET_KEY.'$response={$SecretKey}');
		$Return = json_decode($Response);
		return $Return;
	}
	$Return = getCaptcha($_POST['g-recaptcha-response']);
	//var_dump($Return);
	if($Return->success == true && $Return->score > 0.5){
		//echo 'Success!';
	}else{
		//$recaptcha_err = 'Stop being a BOT!!';
	}
}
//END reCaptcha
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 	
 	//Validate old-password
 	// Check if password is empty
    if(empty(trim($_POST["old_password"]))){
        $old_password_err = "Please enter old password.";
    } else{
        $old_password = trim($_POST["old_password"]);
    }

    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password."; 
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    // Validate credentials
    $email = trim($_SESSION["email"]);
    if(empty($password_err)){
    	// Prepare a select statement
        $sql = "SELECT * FROM basic_users WHERE email = ?";
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if email exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id_unique, $id, $username, $email, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($old_password, $hashed_password)){
                        	$old_password_err = NULL;
                        }else{
                        	$old_password_err = "The password you entered was not valid.";
                        }
                    }
                }
            }
        }
        // Close statement
        $stmt->close();
    }

    // Check input errors before updating the database
    if(empty($old_password_err) && empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE basic_users SET password = ? WHERE id = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: ".$links."login");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}

include $links.'shortcuts/active-variables.php';
$active_profile_change_pass=$active_page_profile;
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
	<!--begin::reCaptcha -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
	<!--end::reCaptcha -->
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
									<h3 class="kt-portlet__head-title">Change Password<small>change your account password</small></h3>
								</div>
								<div class="kt-portlet__head-toolbar kt-hidden">
									<div class="kt-portlet__head-toolbar">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="la la-sellsy"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="kt-nav">
													<li class="kt-nav__section kt-nav__section--first">
														<span class="kt-nav__section-text">Quick Actions</span>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-graph-1"></i>
															<span class="kt-nav__link-text">Statistics</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
															<span class="kt-nav__link-text">Events</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-layers-1"></i>
															<span class="kt-nav__link-text">Reports</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-bell-1o"></i>
															<span class="kt-nav__link-text">Notifications</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-file-1"></i>
															<span class="kt-nav__link-text">Files</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<form class="kt-form kt-form--label-right" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<div class="kt-portlet__body">
									<div class="kt-section kt-section--first">
										<div class="kt-section__body">
											<!-- <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
												<div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
												<div class="alert-text">Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire, <br>or they might inadvertently get locked out of the system!</div>
												<div class="alert-close">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true"><i class="la la-close"></i></span>
													</button>
												</div>
											</div> -->
											<div class="row">
												<label class="col-xl-3"></label>
												<div class="col-lg-9 col-xl-6">
													<h3 class="kt-section__title kt-section__title-sm">Change Your Password:</h3>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
												<div class="col-lg-9 col-xl-6">
													<input type="password" name="old_password" class="form-control <?php echo (!empty($old_password_err)) ? 'is-invalid' : 'is-valid-'; ?>" value="<?php echo $old_password; ?>" placeholder="Current password">
													<div class="invalid-feedback"><?php echo $old_password_err; ?></div>
													<a href="<?php echo $links; ?>resspass" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Forgot password ?</a>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
												<div class="col-lg-9 col-xl-6">
													<input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : 'is-valid-'; ?>" value="<?php echo $new_password; ?>" placeholder="New password">
													<div class="invalid-feedback"><?php echo $new_password_err; ?></div>
												</div>
											</div>
											<div class="form-group form-group-last row">
												<label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
												<div class="col-lg-9 col-xl-6">
													<input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : 'is-valid-'; ?>" value="" placeholder="Verify password">
													<div class="invalid-feedback"><?php echo $confirm_password_err; ?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
								<div class="kt-portlet__foot">
									<div class="kt-form__actions">
										<div class="row">
											<div class="col-lg-3 col-xl-3">
											</div>
											<div class="col-lg-9 col-xl-9">
												<button type="submit" class="btn btn-brand btn-bold">Change Password</button>&nbsp;
												<button type="reset" class="btn btn-secondary">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</form>

							<script type="text/javascript">
								grecaptcha.ready(function(){
									grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
									.then(function(token){
										//console.log(token);
										document.getElementById('g-recaptcha-response').value=token;
									});
								});
							</script>

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