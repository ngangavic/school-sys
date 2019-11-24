<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search using Name
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="add teacher exec.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>	
                                    <tr class="odd gradeX">
                                        
                                        <td>
										<input name="name" class="form-control" type="text"  placeholder="enter student name" />
										</td>
                                       
                                    </tr>
                                </tbody>

                            </table>
							<button name="add" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Search">Search</button>
							<script>
                                function myAlert(){
                                   alert("Data is being updated.It might take sometime.\n Please wait... ");
                                      }
                            </script>
                            <!-- /.table-responsive -->
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>