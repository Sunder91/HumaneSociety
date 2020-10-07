<?php
session_start();
   
/*if (isset($_POST['submit'])) {
 
    $username = $_POST['Uname'];
    $password = $_POST['Password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:Uname");
    $query->bindParam("Uname", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 */
?>
<doctype html>
<header>

<meta charset ="utf-8">
<link href = "MainTemplate.css" rel="stylesheet" type="text/css">
<?php
//connects to server
$servername = "localhost";
$username = "Adam";
$password = "Sund3r09!";
$dbname = "hsdb";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("connection failed" .mysqli_connect_error());
}
?>
<?php /*
if(isset($_POST['Submit'])){
$Username = $_REQUEST['Uname'];
$Password = $_REQUEST['Password'];
$ReqUsername = $_POST['Uname']; //added this to try new function
$ReqPassword = $_POST['Password']; //added this to try new function

    if ($Username == $ReqUsername){
        echo 'Username is correct';
    } else {
       echo 'Username is wrong';
    }
    if($Password === $ReqPassword) {
        echo "Password is correct";
    } else {
        echo "Password in wrong";
    }
}   
    
    //if ($Username === ($_POST['Username']) && ($Password === $_POST['Password'])){  //was old function argument.  Login was allowing everything to pass
    $_SESSION['login'] = true;
    header('LOCATION: LoginCheck.php');
    die();
    } else{
      echo"username and password do not match"; 
      header('LOCATION: Login.php'); die;
    }
}*/
?>
<nav>
    <li><a href=Index.html>Home</a></li>
    <nav>
</header>
<body>
</body>
</html>