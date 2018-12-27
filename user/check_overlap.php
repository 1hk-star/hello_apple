<?php

	include "../dbconnect.php";

        $check = $_POST['type'];


        if(!strcmp($check,"nick")){
		$input_nick = $_POST['input'];

                $sql = "select * from users_info where u_nick = '".$input_nick."'";
                $res = $dbconnect -> query($sql);
			
                if($res){
			
			while($row = mysqli_fetch_assoc($res)){
				if(isset($row['u_nick'])){
					echo "nick_overlap";
					exit;
				}
			}
		}
		echo "NickName OK";
		exit;
        }
	elseif(!strcmp($check,"id")){
		
		$input_id = $_POST['input'];

                $sql = "select * from users_info where u_id = '".$input_id."'";
                $res = $dbconnect -> query($sql);
                        
                if($res){
                        
                        while($row = mysqli_fetch_assoc($res)){
                                if(isset($row['u_id'])){
                                        echo "id_overlap";
                                        exit;
                                }
                        }
                }

                echo "id OK";
		exit;
	}
	elseif(!strcmp($check,"email")){

                $input_email = $_POST['input'];

                $sql = "select * from users_info where u_email = '".$input_email."'";
                $res = $dbconnect -> query($sql);

                if($res){

                        while($row = mysqli_fetch_assoc($res)){
                                if(isset($row['u_email'])){
                                        echo "email_overlap";
                                        exit;
                                }
                        }
                }
                echo "email OK";
		exit;

        } 
	elseif(!strcmp($check,"pw_check")){

                $input_pw = $_POST['pw'];
		$input_pw_check = $_POST['pw_check'];

                if(!strcmp($input_pw, $input_pw_check)){

                        echo "same password";
			exit;
                }
                else{
                        echo "different password";
			exit;
		}

        } 
	else {
		echo "no type";
		exit;
	}

	echo "z";

?>

