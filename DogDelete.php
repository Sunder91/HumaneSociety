<?php
include('connect.php');
if(isset($_POST['delete'])) {
$DogName = $_POST['DogName'];
//$sql = "DELETE FROM 'dogs' WHERE 'DogName' = '$DogName'";
//if($_POST['$DogName']) == ($_REQUEST['DogName']){
if(mysqli_query($conn, "DELETE FROM Dogs WHERE DogName='$DogName' ")){                         
    echo "Record deleted successfully";
    header("Location:  DogForm.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
?>
