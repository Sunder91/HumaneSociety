<?php
session_start();
$servername = "localhost";
$username = "Adam";
$password = "Sund3r09!";
$dbname = "hsdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Checks Connection
//if (!$conn){
    //die("Connection Failed: ".mysqli_connect_error());
//}
//function logintrial(){
    if(isset($_POST['submit'])){
    $sql = "SELECT Uname, Pswrd FROM users";
    $Username = $_REQUEST['Uname'];
    $Password = $_REQUEST['Pswrd'];
    $ReqUsername = $_POST['Uname']; //added this to try new function
    $ReqPassword = $_POST['Pswrd']; //added this to try new function
        if ($Username === $ReqUsername && $Password === $ReqPassword){
            $_SESSION['login'] = true;
            header("Location:  AnimalForm.php");
            exit();
        } else {
            header("Location: Login.php");
            exit();
        }
    }
//}
        /*function(LoginFunction){
            if ($_POST['Uname'] === ($_REQUEST['Uname']) && ($_POST['Password'] === ($_REQUEST['Password'])){
            $_SESSION['login'] = true; header('LOCATION: AnimalForm.php'); die();
            else{
                echo="username and password do not match"; header('LOCATION: Login.php'); die;
            }
            }
        }*/
        ?>