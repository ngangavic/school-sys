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
		
		<select name="year" class="form-control">
		 <option>2017</option>
		 <option>2018</option>
		 <option>2019</option>
		 <option>2020</option>
		 <option>2021</option>
		 <option>2022</option>
		 <option>2023</option>
		 <option>2024</option>
		 <option>2025</option>
		 <option>2026</option>
		 <option>2027</option>
		 <option>2028</option>
		 <option>2029</option>
		 <option>2030</option>
		 <option>2031</option>
		 <option>2032</option>
		 <option>2033</option>
		 <option>2034</option>
		 <option>2035</option>
		 <option>2036</option>
		 <option>2037</option>
		 <option>2038</option>
		</select>
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






