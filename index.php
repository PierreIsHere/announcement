<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="includes/pcss.ico" type='image/x-icon'/>
        <title>
            Announcement
        </title>
        <h2>PCSS Announcements</h2>
    </head>
    <body background="includes/background.png">
        <form method=post action="
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="uname" placeholder="Username" required>
            <br>
            <input type="password" name="pass" placeholder="Password" required>
            <br>
            <br>
            <input type="submit" value="Login">
            <input type="button" onclick="location.href='sign_up/sign_up.php';" value="Sign Up" />
        </form>
        <br>
        <br>
        <?php
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
		    include "includes/connectdb.php";
		    $uname = ($_POST['uname']);
		    $pass = ($_POST['pass']);
		    $sql = "SELECT pass FROM users WHERE uname = '$uname'";
		    $result = $conn->query($sql);
		    if ($result->num_rows > 0) {
		        while ($row = $result->fetch_assoc()) {
		            if ($pass == $row["pass"]) header("Location: hub/hub.php");
		        }
		    } else {
		        echo "Wrong username or password <br>";
		        echo "<a href='forgot_pass/forgot.php'>Forgot Password?</a>";
		    }
		}
        ?>
    </body>
</html>
