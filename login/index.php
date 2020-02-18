<?php
$links = '../';

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ".$links."dashboard");
    exit;
}

// Include config file
require_once $links.'shortcuts/conn-database.php';
 
// Define variables and initialize with empty values
$email = $password = "";
$recaptcha_err = $email_err = $password_err = "";

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
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Enter a valid email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id_unique, id, username, email, password FROM basic_users WHERE email = ?";
        
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
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: ".$links."dashboard");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
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

	<!--begin::reCaptcha -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
	<!--end::reCaptcha -->
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

	<!--begin::PAGE CONTENT -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./img/bg/bg-1.jpg);">
				<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
					<div class="kt-login__container">
						<div class="kt-login__logo">
							<a href="<?php echo $links; ?>">
								<img src="./img/logos/logoArtboard 1@4x.png" style="height: 30%; width: 30%;">
							</a>
						</div>
						<div class="kt-login__signin">
							<div class="kt-login__head">
								<h3 class="kt-login__title">Sign In</h3>
							</div>
							<form class="kt-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<div class="input-group validated">
									<input id="kt_inputmask_9" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : 'is-valid'; ?>" type="text" placeholder="Email" name="email" autocomplete="on" value="<?php echo $email; ?>" im-insert="true">
									<div class="invalid-feedback"><?php echo $email_err; ?></div>
								</div>
								<div class="input-group validated">
									<input class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : 'is-valid'; ?>" type="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
									<div class="invalid-feedback"><?php echo $password_err; ?></div>
								</div>
								<div class="row kt-login__extra">
									<!-- <div class="col">
										<label class="kt-checkbox">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div> -->
									<div class="col kt-align-right">
										<a href="../resspass">Forget Your Password ?</a>
									</div>
								</div>
								<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
								<div class="kt-login__actions">
									<!--here-->
									<button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
								</div>
							</form>
						</div>

						<script type="text/javascript">
							grecaptcha.ready(function(){
								grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
								.then(function(token){
									//console.log(token);
									document.getElementById('g-recaptcha-response').value=token;
								});
							});
						</script>

						<div class="kt-login__account">
							<span class="kt-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="../signup" >Sign Up!</a>
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

	<script src="./assets/js/demo12/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>
	<!--end::Page Scripts -->

</body>

<!-- end::Body -->
</html>