<?php
include_once("connection.php");
session_start();
	global $link;

	if (isset($_POST["login"])) {
		$role = filter_var($_POST["role"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$username =filter_var($_POST["username"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$password = filter_var($_POST["password"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$pass=md5($password);
		


		$sql= mysqli_query($link, "SELECT * FROM tbl_users WHERE username ='".$username."' AND password='".$pass."' AND role='".$role."' AND status='active' LIMIT 1") or die(mysqli_error());

		//male sure the person exists
		$count= mysqli_num_rows($sql);
		$row=mysqli_fetch_array($sql);
		if ($count > 0) {
			$_SESSION['id']=$row['username'];
			$_SESSION['role']=$row['role'];
			$id=$row['id'];
			
			$username=$row['username'];
			$password=$row['password'];

			//$sql=mysqli_query($link, "INSERT INTO log_in_activity(userid,username,role,password,date) VALUES ('".$id."','".$username."','".$role."','".$password."',now())") or die (mysqli_error());

			if($_SESSION['role'] == "admin"){
				header("location: admin.php");
			}else{
			header("location: home.php");
			}

		}   
		else{
			//header("location: login.php");
			//echo'<div class="alert">Wrong passwod</div>';
		?>
		<?php //include"login_modal.php"; ?>
		<script>
		window.location="login.php";
		window.alert("wrong username or password\n Please enter correct details again");
		
		//$(document).ready(function(){
    //$("#myBtn").click(function(){
      //  $("#myModal").modal();
   // });
//});
		
		</script>
		
<?php 
		}

	}
	?>