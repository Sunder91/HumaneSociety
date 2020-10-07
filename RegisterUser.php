<?php       
include('connect.php');
$FName = ($_REQUEST['FName']);
$LName = ($_REQUEST['LName']);
$UEmail = ($_REQUEST['UEmail']);
$Uname = ($_REQUEST['Uname']);
$Pswrd = ($_REQUEST['Pswrd']);

$sql = "INSERT INTO users (FName, LName, UEmail, Uname, Pswrd)
VALUES ('$FName', '$LName', '$UEmail', '$Uname', '$Pswrd')";


    //header("Location:  Login.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $VPswrd = mysqli_real_escape_string($conn, $_POST['VPswrd']);
        $sql2 = "SELECT ID FROM adminpassword WHERE BINARY VPswrd = '$VPswrd'";
        $result = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count === 1) {
        }else{
            header("Location: Login.php?errormsg");
            die;
        }
        if(mysqli_multi_query($conn, $sql)) {
                header("Location: Login.php?successmsg");
       
        }
    }

mysqli_close($conn);
?>