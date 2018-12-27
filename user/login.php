<?php

include_once "../session.php";

	$id = $_POST['id'];
	$pw = $_POST['pw'];
	
	$conn = mysqli_connect("localhost", "root", "1234", "nalsaem_m");
	if(!$conn){
		print "Error - Could not connect to MySQL: ".mysqli_error();
		exit;
	}
	
	$sql = "SELECT * FROM `users_info` WHERE u_id = '".$id."'";
	$result = mysqli_query($conn, $sql);
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			if(isset($row['u_id']) && $row['u_id'] != ''){
				$pw = sha1("security".$pw);
				if($row['u_pw'] == $pw){
					$_SESSION['id'] = $row['u_id'];
					$_SESSION['nick'] = $row['u_nick'];

					echo json_encode(['login_res' => 1, 'id' => $id, 'nick' => $row['u_nick'], 'session_id' => session_id()]);
					exit;
				}
			}
		}
	}
	

	echo "fail";
	
?>
