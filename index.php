<?php
    // include 'includes/database.php';
    include 'includes/sqldb.php';
    session_start();
    // variable to store message
    $message = "";
    // check if login was clicked
    if(isset($_POST["login"])){
        $userid = $_POST['Username'];
        $password = md5($_POST['Password']);

        $sanitized_userid =
            mysqli_real_escape_string($db, $userid);
            
        $sanitized_password =
            mysqli_real_escape_string($db, $password);
            
        $sql = "SELECT * FROM user WHERE username = '"
            . $sanitized_userid . "' AND password = '"
            . $sanitized_password . "'";
            
        $result = mysqli_query($db, $sql)
            or die(mysqli_error($db));
            
        $num = mysqli_fetch_array($result);
            
        if($num > 0) {
			//Generate a random string.
			$token = openssl_random_pseudo_bytes(33);

			//Convert the binary data into hexadecimal representation.
			$token = bin2hex($token);
			$sql2 = "UPDATE user SET token='".$token."' WHERE username = '"
            . $sanitized_userid . "' AND password = '"
            . $sanitized_password . "'";
			$result = mysqli_query($db, $sql2)
            or die(mysqli_error($db));
            $_SESSION["lalatoken"] = $token;
            header("location: dashboard.php");
        }
        else {
            $message = "Wrong Username Or Password! Try Again.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Poultry Farm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>
                    <?php
            // display error message
            if(isset($message)){
                echo '<b style="color: red;margin: 10px auto;opacity: .7;text-align: center;padding-left: 13%;">' . $message . '</b>';
            }
        ?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="Username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="Password" placeholder="Type your password">
						<span class="focus-input100"  data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<!-- <a href="#">
							Forgot password?
						</a> -->
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="login" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>