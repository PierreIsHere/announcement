<?php
   
    //Retrieve the date and location information.
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $conf_pass = $_POST['conf_pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

if ($pass != $conf_pass){
    echo "Passwords don't match!!";
    header("Location: sing_up.php");
}
else {
    include "../includes/connectdb.php";
    $sql = "INSERT INTO users (uname, pass, first, last, email)
    VALUES ('$uname', '$pass', '$fname', '$lname', '$email')";

    if ($conn) {           
      mysqli_query($conn, $sql);  
        header("Location: ../index.php");

    }
    else{
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($conn);
}
        ?>
