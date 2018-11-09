<!DOCTYPE html>
<html>
<head>
	<title></title> 
<script type="text/javascript">
    document.getElementById("club_add").onclick = function() {
    var form = document.getElementById("add_club");
    var input = document.createElement("input");
    input.type = "text";
    var br = document.createElement("br");
    form.appendChild(input);
    form.appendChild(br);
}
</script>
</head>
<body>

<form method="post" action="su_insert.php">
                <input type="text" name="uname" placeholder="Username" required/>
                <br>
                <input type="Password" name="pass" placeholder="Password" required/>
                <br>
                <input type="Password" name="conf_pass" placeholder="Re-Enter Password" required/>
                <br>
                <input type="text" name="fname" placeholder="First Name"/>
                <br>
                <input type="text" name="lname" placeholder="Last Name"/>
                <br>
                <input type="text" name="email" placeholder="Email" required />
                <p />
            <input type="submit" name="submit" value="Submit" />
        </form>

<!-- <form method="post" action="su_insert.php" name="add_club" id="add_club">
                <input type="text" name="club" placeholder="Club Name" required/>
                <input type="button" name="club_add" value="Add Another Club" />

            <input type="submit" name="submit" value="Submit" />
        </form>
 -->
</body>
</html>