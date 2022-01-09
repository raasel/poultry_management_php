<?php

class Database{
    // Initializing 'epms_db' database variables
    private $servername;
    private $username;
    private $password;
    private $dbname;

    // Method to connecct to the database 'epms_db'
    public function connect(){
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'poultry2';
 
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        //   }
        //   else{
        //       echo 'Database connection successfull';
        //   }
        return $conn;
    }

}
?>

