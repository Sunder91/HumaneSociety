<?php
session_start();
include('connect.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = mysqli_real_escape_string($conn, $_POST['Uname']);
    $Password = mysqli_real_escape_string($conn, $_POST['Pswrd']);
    $sql = "SELECT UserID FROM users WHERE BINARY Uname = '$Username' and BINARY Pswrd = '$Password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1) {
        //session_register("Username");
         $_SESSION['login_user'] = $Username;
        header("Location:  AnimalForm.php");
    } else {
        echo header("Location: Login.php?loginerror");
    }
}
?>