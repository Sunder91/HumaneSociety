<?php
include('session.php');
include('connect.php');
//session_start();
?>
<!doctype html>
<!--Need to get the Ways to help page created.  Need to start working on making forms with PHP to add data for animals.  Need to finish working on Gallery.  Gallery needs slideshow added to all animals pulled from database as well as get galleryfunction page updated, fine tuned and pulled from database.  Add pagination to gallery pages?  Need to create a login for users to login and submit data.  All around clean up site.  Start working on new logo for Humane Society?-->
<html>
<header>
<meta charset="utf-8">
<title>Humane Society of Crookston, MN</title>
<link id="theme" href="MainTemplate.css" rel="stylesheet" type="text/css">
<nav role="main">
    <ul>
      <li><a href="Index.html">Home</a></li>
      <li><a href="Dogs.php">Dogs</a></li>
      <li><a href="Cats.html">Cats</a></li>      
      <li><a href="WaysToHelp.html">Ways To Help</a></li>
    </ul>
</nav>
<script src="DarkLightMode.js" type=text/javascript></script>
<label class="switch" for="checkbox">
  <input type="checkbox" id="checkbox" onclick="DarkLightMode()" />
  <div class="slider round"></div>
</label>
<h3>Humane Society of Polk County Logo Here</h3>
<h4>Non-Profit/Non-Kill Animal Shelter</h4>
</header>
<body>
  <div class="afsidebar">
  <span class="lfbg" id="lfbg">
  <form action="logout.php" class="loginform">
  <span class="lfdesc" id="lfdesc"><br>
<h4>Hello,&nbsp;<span class="user" id="user"><?php echo $login_session; ?></span>&nbsp;What would you like to do?</h4>
  </span>
<span class="navlf">
<nav role="sub" id="subnav">
    <ul>
        <li><a href="DogForm.php">Edit Dogs</a></li>
        <li><a href="CatForm.php">Edit Cats</a></li>
        <li><a href="editpagedetails.php">Edit Page</a></li>
        Note: Edit page currently doesnt lead anywhere.
    </ul>
</nav></span><br>

  <!--<script src="ThemeChange.js" type="text/javascript">
        </script>
        <span class="affooter" id="affooter">-->
        <!--<input class="theme" type="button" value="" onclick="ThemeChange()">-->
        <input class="button4" type="submit" value="Sign Out">
        
        </form></span></div>
         

</span>

  <footer>
    <div class="mainbody">
      <h6>phone:  (xxx)xxx-xxxx</h6><h6>email:  test@hotmail.com</h6></br><h6>find us on facebook and twitter</h6>
    </div>
  </footer>
  
  <!-- end .container -->
</body>
</html>
