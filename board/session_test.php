<?php

include_once "../session.php";

if($_SESSION['user']){
	echo "성공!";
	echo $_SESSION['user'].", ".$_SESSION['nickname'];
}
else
	echo "다시 시도해보세요!";

?>
