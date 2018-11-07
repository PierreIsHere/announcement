<?php

if(isset($_POST['insert'])){ 
	include "announce.html"; 
}
else if(isset($_POST['view'])) {
	include "report.php";
}

?>