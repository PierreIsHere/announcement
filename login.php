<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="pcss11.ico" type='image/x-icon'/>
        <title>
            Announcement
        </title>
        <meta name="google-signin-scope" content="profile email">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="380874212749-jurd79kcl3kkc1fss4efgt49rpibd3at.apps.googleusercontent.com">
    </head>
    <body>
        <form method=post action="
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="uname" placeholder="Username">
            <br>
            <input type="password" name="pass" placeholder="Password">
            <br>
            <br>
            <input type="submit" value="login">
            <input type="button" onclick="location.href='sign_up.php';" value="Sign Up" />
        </form>
        <br>
        <br>
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark">
        </div>

        <script>
            function onSignIn(googleUser) {
                // Useful data for your client-side scripts:
                var profile = googleUser.getBasicProfile();
                console.log("ID: " + profile.getId());
                // Don't send this directly to your server!
                console.log('Full Name: ' + profile.getName());
                console.log('Given Name: ' + profile.getGivenName());
                console.log('Family Name: ' + profile.getFamilyName());
                console.log("Image URL: " + profile.getImageUrl());
                console.log("Email: " + profile.getEmail());
                // The ID token you need to pass to your backend:
                var id_token = googleUser.getAuthResponse().id_token;
                console.log("ID Token: " + id_token);
            };
        </script>
        <?php
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
		    include "connectdb.php";
		    $uname = ($_POST['uname']);
		    $pass = ($_POST['pass']);
		    $sql = "SELECT pass FROM users WHERE uname = '$uname'";
		    $result = $conn->query($sql);
		    if ($result->num_rows > 0) {
		        while ($row = $result->fetch_assoc()) {
		            if ($pass == $row["pass"]) header("Location: hub.html");
		        }
		    } else {
		        echo "Wrong username or password <br>";
		        echo "<a href='forgot.php'>Forgot Password?</a>";
		    }
		}
        ?>
    </body>
</html>