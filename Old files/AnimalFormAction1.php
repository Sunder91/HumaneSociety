<!--this is inserting all data into database except for the image-->

<!doctype html>
<!--Need to get the Ways to help page created.  Need to start working on making forms with PHP to add data for animals.  Need to finish working on Gallery.  Gallery needs slideshow added to all animals pulled from database as well as get galleryfunction page updated, fine tuned and pulled from database.  Add pagination to gallery pages?  Need to create a login for users to login and submit data.  All around clean up site.  Start working on new logo for Humane Society?-->
<html>
<header>
<?php
//Use this to connect to server
$servername = "localhost";
$username = "Adam";
$password = "Sund3r09!";
$dbname = "hsdb";
//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//if(isset($_REQUEST["insert"])){
//Checks Connection
  if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
  }
  //inserts data into database
  $DogName = ($_REQUEST['DogName']);
  $DogBio = ($_REQUEST['DogBio']);
  $GoodwDogs = ($_REQUEST)['GoodwDogs'];
  $GoodwCats = ($_REQUEST)['GoodwCats'];
  $GoodwKids = ($_REQUEST)['GoodwKids'];
  //if(isset($_REQUEST["insert"])){
    //$file = addslashes(file_get_contents($_FILES["DogPic"]["tmp_name"]));//"DogPic" used to be "image"
    //$file = ($_REQUEST['DogPic']);//insert used to be DogPic
    //$file = addslashes(file_get_contents($_FILES["DogPic"]["tmp_name"]));//"DogPic" used to be "image"
  $sql = "INSERT INTO dogs (DogName, DogBio, DogPic, GoodwDogs, GoodwCats, GoodwKids)
  VALUES ('$DogName', '$DogBio', '$file', '$GoodwDogs', '$GoodwCats', '$GoodwKids')";
  //if(mysqli_query($conn, $sql)){
    //echo '<script>alert("Image Inserted into Database")</script>';
  if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//}
//}

/*
$target_dir = "Images/";
  $target_file = $target_dir . basename($_FILES["DogPic"]["name"]);
  $uploadOK = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //check that image is real
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["DogPic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["DogPic"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["DogPic"]["name"]). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
}
  }
  */
  //$sql = "INSERT INTO dogs (DogPic) VALUES ('$file')";
//checks if data went into database

mysqli_close($conn);
?>
<meta charset="utf-8">
<title>Humane Society of Crookston, MN</title>
<link href="FormTemplate.css" rel="stylesheet" type="text/css">
<nav>
    <ul>
      <li><a href="Index.html">Home</a></li>
      <li><a href="Dogs.php">Dogs</a></li>
      <li><a href="Cats.html">Cats</a></li>      
      <li><a href="WaysToHelp.html">Ways To Help</a></li>
      <li><a href="ContactUs.html">Contact Us</a></li>
      <li><a href="AnimalForm.php">Animal Form</a></li>
    </ul>
</nav>
<h3>Humane Society of Polk County Logo Here</h3>
<h4>Non-Profit/Non-Kill Animal Shelter</h4>
</header>

<body>

<div class="sidebar1"> 
  This is where the input data will go for now.<br>
  <?php
  //create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT DogName, DogBio FROM dogs ORDER BY ID DESC";
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
  <p>This is a test to see how this looks and how the sidebars will effect the placement of the animal spotlight.</p>
</div>

<div class="container">
    <p>This is where the forms to input the data will go.</p>
    <form action="AnimalFormAction.php" method="post">
        Name:<input type="text" name="DogName" id="DogName"><br>
        Bio:<input type="text" name="DogBio" id="DogBio"><br>
        Good with Dogs:<input type="radio" id="yes" name="GoodwDogs" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwDogs" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwDogs" value="unknown">
        <label for="unknown">unknown</label></br>
        Good with Cats:<input type="radio" id="yes" name="GoodwCats" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwCats" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwCats" value="unknown">
        <label for="unknown">unknown</label></br>
        Good with Kids:<input type="radio" id="yes" name="GoodwKids" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="GoodwKids" value="no">
        <label for="no">no</label>
        <input type="radio" id="unknown" name="GoodwKids" value="unknown">
        <label for="unknown">unknown</label></br>
        Select image to upload:
        <input type="file" Name="DogPic" Id="DogPic"></br>
        <!--need to get a function in place for automatic pricing-->
        <input type="Submit" value="Submit">
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
    </form>
        <p>
        <?php echo $_POST["DogName"];?> has been added.</p>

 <div class="mainbody">
 
   <p><h3>"Saving one pet might not change the world, but for that one pet their world is changed forever." -unknown</h3></p>
</div>
<div> 
<div class="bottomtabsbg">
<div class="bottomtabs">
  <div class="bottomtabsdesc">adoptable dogs</div>
  <img src="Images/Shadow4.jpg" alt="" width="150" height="150">
</div>

<div class="bottomtabs">
  <div class="bottomtabsdesc">adoptable cats</div>
  <img src="Images/Shadow4.jpg" alt="" width="150" height="150">
</div>

<div class="bottomtabs">
  <div class="bottomtabsdesc">Other info</div>
  <img src="Images/Shadow4.jpg" alt="" width="150" height="150">
</div>
 </div>
  <footer>
  </footer>
  </div><!-- end .container -->
</body>
</html>
