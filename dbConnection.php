<?php
$host = 'crud-demo-db.cpk6qg6cy1xd.eu-north-1.rds.amazonaws.com'; // RDS endpoint
$user = 'Lavkesh';                 // Master username
$password = 'Bhadauriya98@';  // Master password
$database = 'assignment_php';      // Database name

// Open a new connection to the MySQL server
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>

