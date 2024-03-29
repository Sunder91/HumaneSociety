<!--used to have LoginAction.php code here-->
<doctype html>
    <html lang="en">
<header>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id = "theme" href = "MainTemplate.css" rel="stylesheet" type="text/css">
<title>Humane Society of Polk County Login Page</title>
<script src="DarkLightMode.js" type=text/javascript></script>
<label class="switch" for="checkbox">
  <input type="checkbox" id="checkbox" onclick="DarkLightMode()" />
  <div class="slider round"></div>
</label>
<nav role="main">
    <ul>
      <li><a href="Index.html">Home</a></li>
      <li><a href="Dogs.php">Dogs</a></li>
      <li><a href="Cats.html">Cats</a></li>      
      <li><a href="WaysToHelp.html">Ways To Help</a></li>
      <li><a href="Login.php">Login</a></li>
    </ul>
</nav>

<h3>Humane Society of Polk County Logo Here</h3>
<h4>Non-Profit/Non-Kill Animal Shelter</h4>
</header>
<body>
<div class="afsidebar">
<span class="lfbg">
        <form method="post" action="LoginAction.php" class="loginform" id="Login" style="display:block">
        <span class="lfdesc">Please login below</br>
        <span class="errormsg"><?php if(isset($_GET['errormsg'])){
            echo "Registration code is incorrect.";
        }
        if(isset($_GET['successmsg'])){
            echo "Registration Successful!";
        }
        if(isset($_GET['loginerror'])){
            echo "Login is incorrect.";
        }
         ?></span>
        </span>
        <pre>Username:<input type ="text" name="Uname" id="Uname" placeholder="Enter your Username" required ></pre>
        <pre>Password:<input type = "password" name="Pswrd" id="Pswrd" placeholder="Enter your Password" required></pre>
        <input class="button1" type="submit" value="submit" name="submit">
        <input class="button2" type="button" name="RegistryShow" value="New users click here" onclick="LoginRegistry()">
        </form>

        <form method="post" action="RegisterUser.php" class="Loginform" id="Registry" style="display:none">
        <span class="lfdesc">Please Register below</span>
        <pre> First Name:<input type="text" name="FName" id="FName" placeholder="First Name" required ></pre>
        <pre>  Last Name:<input type="text" name="LName" id="Lname" placeholder="Last Name" required ></pre>
        <pre>      Email:<input type="text" name="UEmail" id="UEmail" placeholder="Email" required ></pre>
        <pre>  User Name:<input type="text" name="Uname" id="Uname" placeholder="User Name" required ></pre>
        <pre>   Password:<input type="password" name="Pswrd" id="Pswrd" placeholder="Password" required ></pre>
        <br>Please enter the password given to you below to register.<br>
        <pre>Access Code:<input type="text" name="VPswrd" id="VPswrd" placeholder="Enter validation code" required ></pre>
        <input class="button1" type="submit" value="submit" name="submit">
        <input class="button2" type="button" value="Already Registered? Click Here!" onclick ="LoginRegistry()"><br>
        Use Register for code to create an account

<script>//want to get this to load from a seperate file on its own.
    function LoginRegistry(){
    var x = document.getElementById("Registry");
    var y = document.getElementById("Login");
    if(x.style.display === "none") {
        x.style.display = "block";
    }else{
        x.style.display = "none";
    }
    if(y.style.display === "block") {
        y.style.display = "none";
    }else{
        y.style.display = "block";
    }

    }
    </script>

        </form> 
        
</span>    
</div>
</body>
<footer>
    <div class="mainbody">
      <h6>phone:  (xxx)xxx-xxxx</h6><h6>email:  test@hotmail.com</h6></br><h6>find us on facebook and twitter</h6>
    </div>
    </footer>
</html>