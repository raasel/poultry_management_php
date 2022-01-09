<?php

// //Generate a random string.
include 'includes/sqldb.php';
// $token = openssl_random_pseudo_bytes(33);

// //Convert the binary data into hexadecimal representation.
// $token = bin2hex($token);

// //Print it out for example purposes.
// echo $token;
session_start();
$token=$_SESSION['lalatoken'];
$sql = "SELECT token FROM user WHERE token ='". $token. "'";
$result = mysqli_query($db, $sql);
$num = mysqli_num_rows($result);;
echo $num;

?>