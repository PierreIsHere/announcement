<?php
include "../includes/connectdb.php";
    $id =$_POST['id'];
    $date=$_POST['date'];
    $club=$_POST['club'];
    $teacher=$_POST['teacher'];
    $announcement=$_POST['announcement'];

    $query1 = "UPDATE announcement SET date='$date',club='$club',sponsor='$teacher',announcement='$announcement' WHERE id='$id'";
    if(mysqli_query( $conn, $query1 )){
        header('location: view.php');
    } else {
        echo mysqli_error ($conn);
    }

?>