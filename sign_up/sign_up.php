<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"
         type = "text/css" href = "../includes/register.css" />
</head>
<body background="../includes/background.png">
<center>
<form action="/action_page.php">
  <div class="container" style="background-color:#f1f1f1">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input type="text" placeholder="Enter Email" name="email" required>
    <br>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <br>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</center>
</body>
</html>
