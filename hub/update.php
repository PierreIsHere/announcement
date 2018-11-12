<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel = "stylesheet"type = "text/css" href = "../includes/insert.css" />
</head>
<?php
include "../includes/side_bar.html";
include "../includes/connectdb.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM announcement WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $date = $row['date'];
    $club = $row['club'];
    $teacher = $row['sponsor'];
    $announcement = $row['announcement'];
    

?>
<body>
<div id="gradient">
         <center>
            
               <h2 style="color: white">Update</h2>
               <div class="container">
                  <form method="post" action="update_tbl.php">
                    <input type="date" size="60" name="date" value="<?php echo $date ?>" required>
                    <br><br>
                    <input type="text" name="club" value = '<?php echo $club; ?>' required>
                      <br><br>
                    <input type="text" name="teacher" value = '<?php echo $teacher; ?>' required>
                    <br><br>
                      <textarea  style="width: 480px;"rows="4" cols="50" name= "announcement" required><?php echo $announcement; ?></textarea>
                    <input type="hidden" id="id" name="id" value='<?php echo "$id"; ?>'>
                     
                      <br><br>
                    <input type="submit" value=" Submit ">
                    <input type="button" onclick="location.href='view.php';" value="Cancel" />
                  </form>
               </div>
               </div>
         </center>

</body>
</html>