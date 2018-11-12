<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel = "stylesheet"
         type = "text/css" href = "../includes/insert.css" />
   </head>
   <body>
         <div id="gradient">
         <center>
            <div class="container" style="background-color:#f1f1f1" >
               <h2>Insert</h2>
               <div class="container">
                  <form method="post"  action='insert_tbl.php'>
                    <input type="date" size="60" name="date" value="<?php echo date('Y-m-d'); ?>" required>
                    <br><br>
                    <input type="text" name="club" placeholder="Name of Club"required>
                      <br><br>
                    <input type="text" name="teacher" placeholder="Staff Sponsor" required>
                    <br><br>
                      <textarea rows="4" cols="50" name= "announcement" placeholder=" Insert  Announcement  Here ..." required></textarea>
                    
                     
                      <br><br>
                    <input type="submit" value=" Submit ">
                    <input type="reset" value=" Clear " />
                  </form>
               </div>
               </div>
         </center>
         </div>

<?php

include "../includes/side_bar.html"

?>


</body>
</html>