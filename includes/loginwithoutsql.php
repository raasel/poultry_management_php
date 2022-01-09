<?php
session_start();
include 'sqldb.php';
$userid = $_POST['Username'];
$password = $_POST['Password'];

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
	
}
else {
	
}

?>
