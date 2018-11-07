<?php

if(isset($_POST['insert'])){ 
	header("Location: insert/insert.html"); 
}
else if(isset($_POST['view'])) {
	include "report.php";
}


?>