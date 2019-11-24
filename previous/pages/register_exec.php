<?php
require ("connection.php");
include"header_scripts.php";
//Insert Member
if(isset($_POST['register'])){
	
	$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$role = filter_var($_POST['role'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$pass=md5($password);

	//see if that member is an identical match to another in the system
	 $sql = mysqli_query($link,"SELECT email FROM tbl_users WHERE email='".$email."'  LIMIT 1");
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match>0){
	
	echo '<div class="alert alert-success">
              <strong>You are already registered.<a href="login.php" >Click here to login</a></strong> 
           </div>';
	
		//header('location:signup.php?duplicate');
		//exit();
		
		}else{
		$sql = mysqli_query($link,"INSERT INTO tbl_users(username,email,phone,role,password,status,date) VALUES ('".$username."','".$email."','".$phone."','".$role."','".$pass."','active',now())")or die (mysqli_error());
		
		header('location:login.php?success');
		
		exit();	}
					
	}

?>