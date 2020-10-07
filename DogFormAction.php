<!---small images are working so far anything up to 461 kb is uploading.  Otherwise not loading.  Need to do more testing.-->
<!doctype html>
<!--Need to get the Ways to help page created.  Need to start working on making forms with PHP to add data for animals.  Need to finish working on Gallery.  Gallery needs slideshow added to all animals pulled from database as well as get galleryfunction page updated, fine tuned and pulled from database.  Add pagination to gallery pages?  Need to create a login for users to login and submit data.  All around clean up site.  Start working on new logo for Humane Society?-->
<html>
<header>
<?php
include('connect.php');

if(isset($_REQUEST["insert"])){ //this is currently working in its current form to add image.  Not after resubmitting form on formaction page.
  $file = addslashes(file_get_contents($_FILES["DogPic"]["tmp_name"]));
  $sql = "INSERT INTO dogs (DogPic) VALUES ('$file')";
  if(mysqli_query($connect, $sql)){
    //echo '<script>alert("Image Inserted into Database")</script>';
  }
}
  //inserts data into database
  $DogName = ($_REQUEST['DogName']);
  $DogBio = ($_REQUEST['DogBio']);
  $GoodwDogs = ($_REQUEST)['GoodwDogs'];
  $GoodwCats = ($_REQUEST)['GoodwCats'];
  $GoodwKids = ($_REQUEST)['GoodwKids'];
  $file = addslashes(file_get_contents($_FILES["DogPic"]["tmp_name"]));
  $sql = "INSERT INTO dogs (DogName, DogBio, DogPic, GoodwDogs, GoodwCats, GoodwKids)
  VALUES ('$DogName', '$DogBio', '$file', '$GoodwDogs', '$GoodwCats', '$GoodwKids')";
  if (mysqli_multi_query($conn, $sql)) {
    //echo "New records created successfully";
    Header("Location:  DogForm.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//checks if data went into database

mysqli_close($conn);
?>