<!doctype html>

<html>
<head>
  <meta charset="utf-8">

  <title>Announcements</title>

</head>

<body>
<center>
<DIV style="position: absolute; top:10px; left:425px; width:200px; height:25px"><h3>Password Edit:</h3></DIV>	
<br><br><br>
<form method="post"  action='insert_tbl.php'>
    <input type="Password" name="edit_uname" placeholder="New Password" required>
    <input type="checkbox" onclick="">Show Password
	<br><br>
    <input type="Password" name="edit_uname" placeholder="Re-enter Password" >
    <input type="checkbox" onclick="myFunction()">Show Password
    <br><br><br><br>
</form>
</center>
<?php

include "../includes/side_bar.html"

?>


</body>
</html>