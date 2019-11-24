<?php
include_once("connection.php");
session_start();
global $link;
//check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) ||(trim($_SESSION['id'])=='')) {
	?>
	<script>
		
		window.location="../login.php";
	</script>
	<?php
}
$session_id=$_SESSION['id'];
$query=mysqli_query($link, "select * from tbl_users where id='$session_id'");
$row=mysqli_fetch_array($query);
$username=$row['username'];
$role=$row['role'];
?>