<?php
    include '../includes/sqldb.php';
    // variable to store message
//    $message = "";
    // check if login was clicked
    session_start();
    $_SESSION['counter'] = 1;
    $_SESSION["dfdsfdsfsdfsdf"]="";
    if(isset($_POST["productiondata"])){
        $amount_of_chicken = $_POST['amount_of_chicken'];
        $amount_of_feeding = $_POST['amount_of_feeding'];
        $egg = $_POST['egg'];
        $date = $_POST['date'];
        // $sanitized_userid =
        //     mysqli_real_escape_string($db, $production);
            
        // $sanitized_password =
        //     mysqli_real_escape_string($db, $date);
            
        $sql = "INSERT INTO production (amount_of_chicken,amount_of_feeding,egg,date) VALUES ('". $amount_of_chicken . "','". $amount_of_feeding . "','". $egg . "','". $date . "')";
            
        $results = mysqli_query($db, $sql)
            or die(mysqli_error($db));
        // $message = "Data Sucessfully Send To Server";
    
        echo $_SESSION["message"];
        $_SESSION["dfdsfdsfsdfsdf"]="Data Sucessfully Send To Server";
        // header("refresh:5; url=production.php"); 
        // sleep(10);
        header("location: ../production.php");
        // $num = mysqli_fetch_array($result);
            
        // if($num > 0) {
		// 	//Generate a random string.
		// 	$token = openssl_random_pseudo_bytes(33);

		// 	//Convert the binary data into hexadecimal representation.
		// 	$token = bin2hex($token);
		// 	$sql2 = "UPDATE user SET token='".$token."' WHERE username = '"
        //     . $sanitized_userid . "' AND password = '"
        //     . $sanitized_password . "'";
		// 	$result = mysqli_query($db, $sql2)
        //     or die(mysqli_error($db));
        //     $_SESSION["lalatoken"] = $token;
        //     header("location: dashboard.php");
        // }
        // else {
        //     $message = "Wrong Username Or Password! Try Again.";
        // }
    }
?>