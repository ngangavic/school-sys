<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Year To Print</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
		<form action="class-avg.php" method="POST" >
		<select class="form-control col-lg-3" name="year" >
		<option>select year</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
		</select>
		</br></br>
		<!--<select class="form-control col-lg-3" name="class" >
		<option>select class</option>
		<option value="form1">FORM 1</option>
		<option value="form2">FORM 2</option>
		<option value="form3">FORM 3</option>
		<option value="form4">FORM 4</option>
		</select>-->
		
		<button type="submit"  class="btn btn-info" >Print</button>
		</form>
		
		
		
		
		
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>