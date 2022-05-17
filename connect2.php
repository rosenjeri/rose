<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="williams";
//create a connection
$conn= new mysqli($servername,$username,$password,$database);
//check conn
if ($conn->connect_error){
    die("connection failed: ".$conn-> connect_error);
}
echo "connection successful";
?>
