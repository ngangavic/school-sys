<?php include"connection.php";?>
<?php 
if(isset($_GET['delete_user'])){
	?>
<script>

    window.alert("Are you sure you want to delete the user!");
	
</script>
<?php
	$id_to_delete = $_GET['delete_user'];
	$sql = mysqli_query($link,"DELETE FROM tbl_users WHERE id='$id_to_delete' LIMIT 1") or die(mysqli_error());
	//$sql = mysqli_query($link,"UPDATE  tbl_school set status='active' WHERE id='".$active."' " );	
		//header("location: view_schools.php");
		//exit();
		?>
		<script>
		window.location="view users.php";
		</script>
		<?php
	}	
?>

<?php 
if(isset($_GET['activate'])){
	
	$active = $_GET['activate'];
	//$sql = mysql_query("DELETE FROM transaction WHERE id='$id_to_delete' LIMIT 1") or die(mysql_error);
	$sql = mysqli_query($link,"UPDATE  tbl_users set status='active' WHERE id='".$active."' " );	
		header("location: view users.php");
		//exit();
	}
?>

<?php 
if(isset($_GET['deactivate'])){
	
	$deactive = $_GET['deactivate'];
	//$sql = mysql_query("DELETE FROM transaction WHERE id='$id_to_delete' LIMIT 1") or die(mysql_error);
	$sql = mysqli_query($link,"UPDATE  tbl_users set status='deactive' WHERE id='".$deactive."' " );	
		header("location: view users.php");
		//exit();
	}
?>


<?php
if(isset($_POST['edit'])){
	
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$role=$_POST['role'];
	
	$sql1=mysqli_query($link,"UPDATE tbl_users SET username='$username' ,email='$email' ,phone='$phone' ,role='$role' WHERE id='$id' ") or die(mysqli_error());
	
?>
    <script>
	window.location="view users.php";
	</script>	
<?php	
}else{
?>	
<script>
    window.alert("Sorry! Data could not be updated....\n Try again...");
	window.location="edit users.php";
	</script>	
<?php	
}
?>