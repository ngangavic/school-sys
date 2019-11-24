<?php
require ("connection.php");
include"header_scripts.php";
//Insert Member
if(isset($_POST['add'])){
	
	$class = filter_var($_POST['class'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$teacher = filter_var($_POST['teacher'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);	
	//see if that member is an identical match to another in the system
	 $sql = mysqli_query($link,"SELECT subject,class FROM tbl_sbj_teachers WHERE subject='".$subject."' AND class='".$class."'  LIMIT 1");
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match>0){
	
	echo '<div class="alert alert-danger">
              <strong>The subject teacher already exist.<a href="subject teachers.php?id=1" >Click here </a>to edit the subject teacher</strong> 
           </div>';

		}else{
		$sql = mysqli_query($link,"INSERT INTO tbl_sbj_teachers(class,subject,teacher) VALUES ('".$class."','".$subject."','".$teacher."' )")or die (mysqli_error());
		
		//header('location:login.php?success');
		//exit();	
?>
<script>
window.alert("Teacher has been successfully added \n ");
//window.confirm("sometext");
window.location="add subject teacher.php";
</script>
<?php		
		}
					
	}

?>