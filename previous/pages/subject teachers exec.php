<?php
include('connection.php');
include"header_scripts.php";
//if(isset($_POST['english'])){
$id=$_POST['id'];
$class=$_POST['class'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"UPDATE tbl_sbj_teachers SET teacher='$teacher[$i]' where id='$id[$i]'")or die(mysqli_error());
}
?>
 <script>
window.alert("Teachers details have been updated successfully\n You will be directed to the previous page.");
//window.confirm("sometext");
window.location="subject teachers.php?id=1";

//window.location="http://localhost/www.offlineschool.com/pages/view%20grade/view%20grade.php?id=1";
</script>