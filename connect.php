<?php
//Use this to connect to server
$servername = "localhost";
$username = "Adam";
$password = "Sund3r09!";
$dbname = "hsdb";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Checks Connection
if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
?>