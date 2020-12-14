<!doctype html>
<html>
<header>
  <?php
  include('session.php');
  include('connect.php');
  //session_start();
  ?>  
<meta charset="utf-8">
<title>Humane Society of Crookston, MN</title>
<link href="MainTemplate.css" rel="stylesheet" type="text/css">
<nav role="main">
    <ul>
      <li><a href="Index.html">Home</a></li>
      <li><a href="Dogs.php">Dogs</a></li>
      <li><a href="Cats.html">Cats</a></li>      
      <li><a href="WaysToHelp.html">Ways To Help</a></li>
      <li><a href="Login.html">Login</a></li>
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
<script src="JS/galleryfunction.js" type="text/javascript"> 
</script>
<div class="gallery">
<?php
$image_name = '/Images/Shadow4.jpg';
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT DogName, DogBio, DogPic FROM dogs ORDER BY ID DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class=\"gallery\">";
        echo "<div class=\"gname\"> $row[DogName] </div> ";
        //echo "<img src ='$image_name' width='250' height='250' onclick='dogInfo();' />";    Need to get an if function to display an image if one isn't found
        echo ' <img src ="data:image/jpeg;base64,' .base64_encode($row['DogPic']).'" width="250" height="250" onclick="dogInfo();" />';
        echo "<div class=\"gdesc\"> $row[DogBio]. </div> ";
        echo "</div>";
    }

} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</div>
 <!--Need to add a way to get a small description added by using a dropdown. Using javascript function to open new window with all info and additional pics (want all this to load using php).  Want to add feature to have a slideshow of images playing.  Possibly just while animal has cursor hovered on it. Also need to add way to fix background image to fit the whole screen or maybe just remove it for gallery pages.-->
  <footer>
        <div class="mainbody">
          <h6>phone:  (xxx)xxx-xxxx</h6><h6>email:  test@hotmail.com</h6></br><h6>find us on facebook and twitter</h6>
        </div>
  </footer>
  </div><!-- end .container -->
</body>
</html>
