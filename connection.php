<?php  
$server = "localhost";
$username = "root";
$password = "";
$dbname ="gym";

// Create a database connection
$con = mysqli_connect($server, $username, $password,$dbname);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

?>