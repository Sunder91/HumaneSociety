<?php
include('session.php');
include('connect.php');?>
<!doctype html>
<!--Need to get the Ways to help page created.  Need to start working on making forms with PHP to add data for animals.  Need to finish working on Gallery.  Gallery needs slideshow added to all animals pulled from database as well as get galleryfunction page updated, fine tuned and pulled from database.  Add pagination to gallery pages?  Need to create a login for users to login and submit data.  All around clean up site.  Start working on new logo for Humane Society?-->
<html>
<header>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Humane Society of Crookston, MN</title>
<link id="theme" href="MainTemplate.css" rel="stylesheet" type="text/css">
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
      <li><a href="AnimalForm.php">Animal Form</a></li>
    </ul>
</nav>

<h3>Humane Society of Polk County Logo Here</h3>
<h4>Non-Profit/Non-Kill Animal Shelter</h4>
</header>
<body>
<div class="afsidebar">
<span class="lfbg">
<form class="loginform" action="CatFormAction.php" method="post" enctype="multipart/form-data">
      <span class=lfdesc><h3>Welcome <?php echo $login_session; ?></h3></span>
        Name:&nbsp;<input type="text" name="CatName" id="CatName" required></br>
        </br>&nbsp;&nbsp;&nbsp;Bio:&nbsp;&nbsp;<textarea class="commentbox" name="CatBio" id="CatBio" rows="5" required></textarea></br>
        Good with Dogs:<input type="radio" id="yes" name="GoodwDogs" value="yes" required>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwDogs" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwCats" value="unknown">
        <label for="unknown">unknown</label></br>
        Good with Cats:<input type="radio" id="yes" name="GoodwCats" value="yes" required>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwCats" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwCats" value="unknown">
        <label for="unknown">unknown</label></br>
        Good with Kids:<input type="radio" id="yes" name="GoodwKids" value="yes" required>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwKids" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwKids" value="unknown">
        <label for="unknown">unknown</label></br>
        Select image to upload:
        <input type="file" Name="CatPic" Id="CatPic" required></br>
        <!--need to get a function in place for automatic pricing-->
        <input class="button3" type="Submit" value="Submit">
        <a href="logout.php" class="button4">Sign Out</a>

</form> 
        
        </span>
        <script>
        $(document).ready(function(){
          $('#insert').click(function(){
            var DogPic = $('#image').val();
            if(DogPic = '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
              var extension = $('#image').val().split('.').pop().toLowercase();
              if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
              {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
              }
            }
          });
        });
        </script>
        </div>
<div class="midbody"> 
  This is where the input data will go for now.<br>
  <?php
  //create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT CatName, CatBio FROM cats ORDER BY ID Desc" ;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["CatName"]. " " . $row["CatBio"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</div>
<div class="sidebar2">
<!--Need to clean the delete form up to make it look more professional.  Maybe match the animal form?-->
<form action="CatDelete.php" class="afdesc" method="post">
<label>Select Cat</label><br>
    <select name="CatName">
    <option value="Initial" selected>Please Select</option>

      <?php
      include('Connect.php');
      $sql = mysqli_query($conn, "SELECT CatName FROM Cats ORDER BY ID ASC");
      while ($row = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $row['CatName']; ?>"><?php echo $row['CatName']; ?></option>
      <?php }?>
    </select>
    <br>
<input class="button4" type="submit" name="delete" value="Delete">
</form>

</div>

      

      
        </br>
  <footer>
    <div class="mainbody">
      <h6>phone:  (xxx)xxx-xxxx</h6><h6>email:  test@hotmail.com</h6></br><h6>find us on facebook and twitter</h6>
    </div>
  </footer>
  <!-- end .container -->
</body>
</html>
