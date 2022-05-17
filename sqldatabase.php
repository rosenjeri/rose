<?php
$servername = "localhost";
$username ="root";
$password ="";
//$database = "students";
//Create a connection
$conn = new mysqli($servername,$username,$password);
//Check conn
if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connection Successful";
//creating a database
$sql = "CREATE DATABASE rose";
if ($conn->query($sql) == TRUE){
    echo "database created successfully";
} else {
    echo "Error creating Database".$conn->error;
}
$conn->close();
