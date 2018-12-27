<?php

	include_once "../session.php";
	
	if(isset($_SESSION['nick']))
		echo $_SESSION['nick'];
	else
		echo "fail";

?>
