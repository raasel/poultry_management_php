<?php     include 'includes/database.php';
             include 'includes/sqldb.php';
            include 'includes/action.php';
            include 'checkauth.php';
            // session_start();
            $query = "SELECT * FROM environment ORDER BY id DESC LIMIT 1";
    $result = $databaseObject->connect()->query($query);
    while($row = mysqli_fetch_assoc($result)){
        $temperature = $row['temperature'];
        $humidity = $row['humidity'];
        $light_intensity = $row['light_intensity'];
        $ammonia = $row['ammonia'];
        $noise = $row['noise'];
    }
    
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 1 DAY AND CURRENT_DATE()";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t1 = $row['temperature'];
        $h1 = $row['humidity'];
        $a1 = $row['ammonia'];
        $n1 = $row['noise'];
        $l1 = $row['light_intensity'];
    }
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 2 DAY AND CURRENT_DATE()-INTERVAL 1 DAY";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t2 = $row['temperature'];
        $h2 = $row['humidity'];
        $a2 = $row['ammonia'];
        $n2 = $row['noise'];
        $l2 = $row['light_intensity'];
    }
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 3 DAY AND CURRENT_DATE()-INTERVAL 2 DAY";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t3 = $row['temperature'];
        $h3 = $row['humidity'];
        $a3 = $row['ammonia'];
        $n3 = $row['noise'];
        $l3 = $row['light_intensity'];
    }
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 4 DAY AND CURRENT_DATE()-INTERVAL 3 DAY";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t4 = $row['temperature'];
        $h4 = $row['humidity'];
        $a4 = $row['ammonia'];
        $n4 = $row['noise'];
        $l4 = $row['light_intensity'];
    }
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 5 DAY AND CURRENT_DATE()-INTERVAL 4 DAY";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t5 = $row['temperature'];
        $h5 = $row['humidity'];
        $a5 = $row['ammonia'];
        $n5 = $row['noise'];
        $l5 = $row['light_intensity'];
    }
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 6 DAY AND CURRENT_DATE()-INTERVAL 5 DAY";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t6 = $row['temperature'];
        $h6 = $row['humidity'];
        $a6 = $row['ammonia'];
        $n6 = $row['noise'];
        $l6 = $row['light_intensity'];
    }
    $avgq="SELECT AVG(humidity)'humidity',AVG(temperature)'temperature' ,AVG(ammonia)'ammonia' ,AVG(noise)'noise',AVG(light_intensity)'light_intensity' FROM environment WHERE date BETWEEN CURRENT_DATE()-INTERVAL 7 DAY AND CURRENT_DATE()-INTERVAL 6 DAY";
    $avg = $databaseObject->connect()->query($avgq);
    while($row = mysqli_fetch_assoc($avg)){
        $t7 = $row['temperature'];
        $h7 = $row['humidity'];
        $a7 = $row['ammonia'];
        $n7 = $row['noise'];
        $l7 = $row['light_intensity'];
    }
 ?>