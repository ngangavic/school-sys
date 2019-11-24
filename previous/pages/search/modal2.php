<!--<button type="button" class="btn btn-info btn-lg" style="background-color:yellow;color:#000000" data-toggle="modal" data-target="#myModal">NEWSLETTER</button>
-->
<?php //include"header_scripts.php";?>
<?php //$get_id = $_GET['id'];?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter Year</h4>
      </div>
      <div class="modal-body">
	  <?php 
      //if(isset($_POST['subscribe'])){	
	  //$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);	
	 // $sql = mysqli_query($link,"INSERT INTO tbl_subscription (email,new,date) VALUES ('".$email."','yes',now()) ");	
      ?>
     <script>
	// window.alert("You have subscribed to our newsletter");
	 </script>	  
	 <?php
	//}
     ?>
	  <form action="subjectavg/new_year.php" method="post" >
	  <div class="form-group">
		<input name="adm " class="form-control">
		
	  </div>
        
		<button type="submit" name="start year" class="btn btn-warning" >Start Year</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php //include"footer_scripts.php";?>