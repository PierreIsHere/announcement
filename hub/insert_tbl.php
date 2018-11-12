<?php
include "../includes/connectdb.php";
    //Retrieve the date and location information.
    $date = $_POST['date'];
    $club = $_POST['club'];
    $sponsor = $_POST['teacher'];
    $announcement = $_POST['announcement'];
    
$sql = "INSERT INTO announcement (date, club, sponsor, announcement)
VALUES ('$date', '$club', '$sponsor', '$announcement')";

if ($conn) {
  mysqli_query($conn, $sql);  
    header("Location: insert.php");

}
else{
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>