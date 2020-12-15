<?php
include('session.php');
include('connect.php');
//session_start();
?>
<!doctype html>
<!--Need to get the Ways to help page created. Gallery needs slideshow added to all animals pulled from database as well as get galleryfunction page updated, fine tuned and pulled from database.  Add pagination to gallery pages?  All around clean up site.  Start working on new logo for Humane Society?
Need to get dogform page to come back to dogform page after dog is added.  Clean up AnimalFormAction page.
-->
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
      <li><a href="ContactUs.html">Contact Us</a></li>
      <li><a href="AnimalForm.php">Animal Form</a></li>
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
<div class="sidebar1">
<span class="afbg">
      <span class=afdesc><h3>Welcome <?php echo $login_session; ?></h3></span>
    <form class="animalform" action="DogFormAction.php" method="post" enctype="multipart/form-data">
        Name:&nbsp;<input type="text" name="DogName" id="DogName" required></br>
        </br>&nbsp;&nbsp;&nbsp;Bio:&nbsp;&nbsp;<textarea name="DogBio" id="DogBio" rows="5" cols="40" required></textarea></br>
        Good with Dogs:<input type="radio" id="yes" name="GoodwDogs" value="yes" required>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwDogs" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwDogs" value="unknown">
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
        <input type="file" Name="DogPic" Id="DogPic" required></br>
        <!--need to get a function in place for automatic pricing-->
        <input class="button3" type="Submit" value="Submit">
</form> 
        <form action="logout.php" class="animalform">
        <!---would like to add something to confirm animal has been added around here like below
        <php echo $_POST["DogName"];?> has been added.</p>
-->
        <input class="button4" type="submit" value="Sign Out">
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
  include('connect.php');
  $sql = "SELECT DogName, DogBio FROM dogs ORDER BY ID Desc" ;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["DogName"]. " " . $row["DogBio"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</div>

<div class="sidebar2">
<!--Need to clean the delete form up to make it look more professional.  Maybe match the animal form?-->
<form action="DogDelete.php" class="afdesc" method="post">
<label>Select Dog</label><br>
    <select name="DogName">
    <option value="Initial" selected>Please Select</option>

      <?php
      include('Connect.php');
      $sql = mysqli_query($conn, "SELECT DogName FROM Dogs ORDER BY ID ASC");
      while ($row = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $row['DogName']; ?>"><?php echo $row['DogName']; ?></option>
      <?php }?>
    </select>
    <br>
<input class="button4" type="submit" name="delete" value="Delete">
</form>

</div>

      

      
        </br>
  <footer>
  </footer>
  <!-- end .container -->
</body>
</html>
