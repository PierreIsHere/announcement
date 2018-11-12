<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel = "stylesheet"
         type = "text/css" href = "includes/login.css" />
   </head>
   <body background="includes/background.png">
         <center>
            <div class="container" style="background-color:#f1f1f1">
               <h2>Login</h2>
               <div class="imgcontainer">
                  <img src="https://pbs.twimg.com/profile_images/939115738824085505/DLR6W-I__400x400.jpg" height="200" width="200">
               </div>
               <div class="container">
                  <form method="POST">
                  <label for="uname"><b>Username: </b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
                  <br>
                  <label for="pass"><b>Password: </b></label>
                  <input type="password" placeholder="Enter Password" name="pass" required>
                  <br>
                  <button type="submit" style="height: 50px; width: 100px" class="w3-btn w3-ripple w3-yellow w3-round-large">Login</button>
                  </form>
               </div>
               <div class="container" style="background-color:#f1f1f1">
                  <span class="pass"><a href="forgot.php">Forgot Password?</a></span>
                  <h4>OR</h4>
                  <input type="button" onclick="location.href='sign_up/sign_up.php';" value="Sign Up" />
               </div>
         </center>
         </div>
   <?php
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
          include "includes/connectdb.php";
          $uname = ($_POST['uname']);
          $pass = ($_POST['pass']);
          $sql = "SELECT pass FROM users WHERE uname = '$uname'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  if ($pass == $row["pass"]) header("Location: hub/view.php");
              }
          } else {
              echo "<script type='text/javascript'>alert('incorrect password');</script>";
          }
      }
        ?>
   </body>
</html>