<?php
include('connect.php');
if(isset($_POST['delete'])) {
$CatName = $_POST['CatName'];
//$sql = "DELETE FROM 'dogs' WHERE 'DogName' = '$DogName'";
//if($_POST['$DogName']) == ($_REQUEST['DogName']){
if(mysqli_query($conn, "DELETE FROM Cat WHERE CatName='$DogName' ")){                         
    echo "Record deleted successfully";
    header("Location:  CatForm.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
?>
