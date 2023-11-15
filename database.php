<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
// Create database
$sql = "CREATE DATABASE if not exists $dbname";

if ($conn->query($sql) === TRUE) {

    $conn->close();

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "CREATE TABLE IF NOT EXISTS `info`(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, firstname VARCHAR(255), middlename VARCHAR(255), lastname VARCHAR(255),address VARCHAR(255),age INT , contact INT ,email VARCHAR(255))";

    if ($conn->query($sql) === TRUE) {
       //"Successfully Created table";
    } else {
        echo "Error creating table: " . $conn->error;
    }

} else {
    echo "Error creating database: " . $conn->error;
}
 
 //$conn->close();

?>