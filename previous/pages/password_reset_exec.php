<?php include"header_scripts.php";?>
<?php
include_once("connection.php");
	//global $link;

	if (isset($_POST["reset"])) {
		
		$role = filter_var($_POST["role"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$email =filter_var($_POST["email"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$phone =filter_var($_POST["phone"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$password =filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$pass=md5($password);
		
		$sql= mysqli_query($link, "SELECT * FROM tbl_users WHERE email='".$email."' AND phone='".$phone."' AND role='".$role."' AND status='active' LIMIT 1") or die(mysqli_error());

		//male sure the person exists
		$count= mysqli_num_rows($sql);
		$row=mysqli_fetch_array($sql);
		if ($count > 0) {
			$sql = mysqli_query($link,"UPDATE  tbl_users SET  password='$pass' WHERE email='".$email."' " );

			echo"<script>
	if(confirm('Password reset successfully...You will now be directed to login page')){
		window.location = 'login.php';
	}
	</script>";

		}   
		else{
		?>
		   <div class="alert alert-danger">
              <strong>Error while reseting password.<a href="forgot password.php" >Click here</a>to try again</strong> 
           </div>
<?php 
		}

	}
	?>