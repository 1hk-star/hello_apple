<?php
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	$nick = $_POST['nick'];
	$email = $_POST['email'];
	
	$conn = mysqli_connect("localhost", "root", "1234", "nalsaem_m");
	$conn->set_charset("utf8"); #한글 설정

	if(!$conn){
		print "Error - Could not connect to MySQL: ".mysqli_error();
		exit;
	}
	
	$sql = "SELECT * FROM `users_info` WHERE `u_id` = '".$id."'";
	$result = mysqli_query($conn, $sql);
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			if(isset($row['u_id']) && $row['u_id'] != ''){
				echo "이미 있는 아이디입니다!";
				exit;
			}
		}
	}
	
	
	$sql = "SELECT * FROM `users_info` WHERE `u_nick` = '".$nick."'";
	$result = mysqli_query($conn, $sql);
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			if(isset($row['u_nick']) && $row['u_nick'] != ''){
				echo "이미 있는 닉네임입니다!";
				exit;
			}
		}
	}
	
	$sql = "SELECT * FROM `users_info` WHERE `u_email` = '".$email."'";
        $result = mysqli_query($conn, $sql);
        if($result){
                while($row = mysqli_fetch_assoc($result)){
                        if(isset($row['u_email']) && $row['u_email'] != ''){
                                echo "이미 있는 이메일입니다!";
                                exit;
                        }
                }
        }


	$pw = sha1("security".$pw);
	//======INSERT INTO `users` (`_id`, `u_id`, `u_nick_name`, `u_password`) VALUES ('0', 'asd', 'asd', 'sad');
	$sql = "INSERT INTO `users_info` (`u_no`, `u_id`, `u_pw`, `u_nick`, `u_cheese`, `u_heart`, `u_email`) VALUES ('0', '".$id."', '".$pw."', '".$nick."', '0', '5','".$email."')";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo "ok";
	}
	else
		echo "fail";
	exit;
?>
