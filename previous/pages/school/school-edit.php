<?php
include"connection.php";

if(isset($_POST['edit']))
{
$name=$_POST['name'];
$box=$_POST['box'];
$location=$_POST['location'];
$email=$_POST['email'];
$phone=$_POST['phone'];

//$updateschhol=mysqli_query($link,"INSERT INTO tbl_school(name,box,location,email,phone)VALUES('".$name."','".$box."','".$location."','".$email."','".$phone."')")or die (mysqli_error());
$updateschool=mysqli_query($link,"UPDATE tbl_school SET name='$name',box='$box',location='$location',email='$email',phone='$phone' WHERE id=3")or die (mysqli_error());

?>
<script>
window.location="index.php";
alert("School details have been succesfully added...");
</script>
<?php }else{ ?>
<script>
window.location="index.php";
alert("Error while updating School details. \n Try again");
</script>
<?php } ?>
