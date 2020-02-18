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
$id = $username = $email = $password = $confirm_password = "";
$id_err = $username_err = $email_err = $password_err = $confirm_password_err = "";

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
    $a = 0;
    // Validate ID
    while($a == 0){
        // Prepare a select statement
        $sql = "SELECT id FROM basic_users WHERE id = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_id);
            
            // Set parameters
            $param_id = mt_rand(100000,999999);
            
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // store result
            $stmt->store_result();
            if($stmt->num_rows == 1){
                $id_err = "This id is already used.";
            }else{
                $id = $param_id;
                $id_err = NULL;
                $a = 1;
            }

        }else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
        // Close statement
        $stmt->close();

 	// Validate Username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM basic_users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                }elseif(strlen($_POST["username"])<3){
                    $username_err = "The minimum string length is 3 characters.";
                }elseif(strlen($_POST["username"])>15){
                    $username_err = "The maximum length of the string is 15 characters.";
                }else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM basic_users WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $email_err = "This email is already taken.";
                } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $email_err = "Enter a valid email.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO basic_users (id, username, email, password) VALUES (?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_id, $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_id = $id;
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ".$links."login");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}

include $links.'shortcuts/active-variables.php';
$title=' | Signup';
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
						
						<div class="kt-login__account-link">
							<div class="kt-login__head">
								<h3 class="kt-login__title">Sign Up</h3>
								<div class="kt-login__desc">Enter your details to create your account:</div>
							</div>
							<form class="kt-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<div class="input-group validated">
										<input id="kt_maxlength_1" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : 'is-valid'; ?>" type="text" placeholder="Username" name="username" maxlength="15" value="<?php echo $username; ?>">
										<div class="invalid-feedback"><?php echo $username_err; ?></div>
									</div>
									<div class="input-group validated">
										<input id="kt_inputmask_9" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : 'is-valid'; ?>" type="text" placeholder="Email" name="email" autocomplete="off" value="<?php echo $email; ?>" im-insert="true">
										<div class="invalid-feedback"><?php echo $email_err; ?></div>
									</div>
									<div class="input-group validated">
										<input class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : 'is-valid'; ?>" type="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
										<div class="invalid-feedback"><?php echo $password_err; ?></div>
									</div>
									<div class="input-group validated">
										<input class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : 'is-valid'; ?>" type="password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $confirm_password; ?>">
										<div class="invalid-feedback"><?php echo $confirm_password_err; ?></div>
									</div>&nbsp;&nbsp;
                                    <center>
                                        <div class="g-recaptcha" data-sitekey="6LchjyoUAAAAAFneZAzVmtLAte_HTtzmFGv5nTd0"></div>
                                    </center>
									<!-- <div class="row kt-login__extra">
										<div class="col kt-align-left">
											<label class="kt-checkbox">
												<input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
												<span></span>
											</label>
											<span class="form-text text-muted"></span>
										</div>
									</div> -->
									<div class="row kt-login__extra">
										<div class="col kt-align-left">
											<center>
											<label>
												If you press 'Sign Up' you agree with <a href="../terms&conditions" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
											</label>
											</center>
										</div>
                                        <div class="col kt-align-left">
                                            <center>
                                            <label>
                                                Already have an account? <a href="../login" class="kt-link kt-login__link kt-font-bold">Login here</a>.
                                            </label>
                                            </center>
                                        </div>
                                    </div>
                                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
									<div class="kt-login__actions">
										<button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
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
		</div>
	</div>
	<!--END::PAGE CONTENT -->
	<?php
	include $links.'shortcuts/globalconfig.php';
	?>

	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo12/pages/login/login-general.js" type="text/javascript"></script>

    <script src="./assets/js/demo12/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>

    <script src="./assets/js/demo12/pages/crud/forms/widgets/bootstrap-maxlength.js" type="text/javascript"></script>
	<!--end::Page Scripts -->

</body>

<!-- end::Body -->
</html>