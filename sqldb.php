<?php
$db = mysqli_connect("localhost","bdganjco_root","Chasarbari@123","bdganjco_chasarbari");
  
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " 
        . mysqli_connect_error();
}
?>