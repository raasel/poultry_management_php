<?php
    include 'includes/database.php';
    include 'includes/sqldb.php';
    session_start();
    // variable to store message
    $message = "";
    // check if login was clicked
    if(isset($_POST["login"])){
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
            $_SESSION["Username"] = $_POST["Username"];
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginStyles.css" />
    <title>PMS Login</title>
</head>
<body>
    <div class="login__container">
        <h1>PMS: Admin Login</h1>
        <?php
            // display error message
            if(isset($message)){
                echo '<label style="color: #ffff00;margin: 10px auto;opacity: .7;text-align: center;padding-left: 13%;">' . $message . '</label>';
            }
        ?>
        <form action="" method="post">
            <input style="color: #ffff" type="text" name="Username" placeholder="Username">
            <input type="password" name="Password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>   
</body>
</html>