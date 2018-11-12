<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link rel="icon" href="includes/pcss.ico" type='image/x-icon'/>
    </head>
<head>
<link rel = "stylesheet"
         type = "text/css" href = "../includes/register.css" />
</head>
<style>
#text {display:none;color:red}
</style>
<body background="../includes/background.png">
    <form method=post action="
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<center>
<form method="post" action="su_insert.php">
  <div class="container" style="background-color:#f1f1f1">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input id="uname" type="text" placeholder="Enter username" name="uname" required>
    <br>
    <input id="pass" type="password" placeholder="Enter Password" name="pass" required>
<br>
    <input id="conf_pass" type="password" placeholder="Repeat Password" name="conf_pass" required>
    <br>
    <input id="fname" type="text" placeholder="Enter First name" name="fname">
    <br>
    <input id="lname" type="text" placeholder="Enter Last name" name="lname" required>
    <br>
    <input id="email" type="text" placeholder="Enter Email" name="email" required>
    <br>
    <p id="text"><font color="red">WARNING! Caps lock is ON.</font></p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</center>
<script>
var input = document.getElementById("uname");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
<script>
var input = document.getElementById("pass");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
<script>
var input = document.getElementById("conf_pass");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
<script>
var input = document.getElementById("fname");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
<script>
var input = document.getElementById("lname");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
<script>
var input = document.getElementById("email");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
</body>
</html>

