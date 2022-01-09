<?php
    include 'includes/sqldb.php';
    session_start();
if (!isset($_SESSION['lalatoken'])) {
        header("Location: ../index.php");
        exit();
    }
    else{
        $token=$_SESSION['lalatoken'];
        $sql = "SELECT token FROM user WHERE token ='". $token. "'";
		$result = mysqli_query($db, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0) {
        header("Location: ./index.php");
        exit();
        }
    }
    ?>