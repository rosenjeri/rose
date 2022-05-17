<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}
//sql to create table
$sql = "CREATE TABLE MyGuest(
    id I
)"
