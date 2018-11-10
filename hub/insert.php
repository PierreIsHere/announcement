<!doctype html>

<html>
<head>
  <meta charset="utf-8">

  <title>Announcements</title>

</head>

<body>
<center>	
<form method="post"  action='insert_tbl.php'>
   Date <input type="date" size="60" name="date" value="<?php echo date('Y-m-d'); ?>">
	<br><br>
  <input type="text" name="club" placeholder="Name of Club">
    <br><br>
  <input type="text" name="teacher" placeholder="Staff Sponsor">
  <br><br>
  	<textarea rows="4" cols="50" name= "announcement" placeholder="Insert Announcement Here..."></textarea>
		<br><br>Reoccuring dates
		<input type="checkbox" name="date" value="monday">Mon	 
	 	<input type="checkbox" name="date" value="tuesday">Tues
		<input type="checkbox" name="date" value="wednesday">Wed
		<input type="checkbox" name="date" value="thursday">Thurs 
		<input type="checkbox" name="date" value="friday">Fri
 		<br><br>
 	<input type="submit" value="Submit">
 	<input type="reset" value="Clear" />
</form>
</center>
<?php

include "../includes/side_bar.html"

?>


</body>
</html>