<?php

$confirm = "<script> window.confirm('Are you sure you want to delete?'); </script>";
echo $confirm;

if ($confirm == true) {
	
	$id = $_GET['id'];
	include "../includes/connectdb.php";

	$sql = "DELETE FROM announcement WHERE id = '$id'"; 

	if ($conn) {
	  mysqli_query($conn, $sql);  
	    header("Location: view.php");
	} else {
	    echo "Error deleting record";
	}

}else{
	header("Location: view.php");

}


?>