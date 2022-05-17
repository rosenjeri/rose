<?php
$servername = "localhost";
$username = "root";
$password ="";
$database ="students";
// Create a connection
$conn= new mysqli($servername,$username,$password,$database);
// Check conn
if ($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connection Successful";
?>
