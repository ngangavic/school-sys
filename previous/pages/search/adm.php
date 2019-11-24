<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search using ADM
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="" method="post">
                            <table  class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        
                                        <th>ADM</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>	
                                    <tr class="odd gradeX">
                                        
                                        <td>
										<input name="adm" class="form-control" type="text"  placeholder="enter student adm" />
										</td>
                                       
                                    </tr>
                                </tbody>

                            </table>
							<button name="search" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="Search">Search</button>
							
                            <!-- /.table-responsive -->
							</form>
                        </div>
                        <!-- /.panel-body -->
						
						
						
						<div class="panel-body">
						  <form action="printsearch.php" method="post">
						  <?php
						if (isset($_POST['search'])){
                            $adm = $_POST['adm'];
							$query = mysqli_query($link, "select * from tbl_students where adm='".$adm."' ") or die(mysql_error());
								while($row = mysqli_fetch_array($query)){
								$adm=$row['adm'];
								$name=$row['name'];
								
						?>
                            <table  class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        
                                        <th>ADM</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>	
                                    <tr class="odd gradeX">
                                        
                                        <td>
										<?php echo $adm , $name;?>
										<input type="hidden" name="searchAdm" value="<?php echo $row['adm'];?>">
										<input type="hidden" name="searchName" value="<?php  echo $row['name'];?>">
										</td>
                                       
                                    </tr>
                                </tbody>

                            </table>
							<button name="print" onClick="myAlert" class="btn btn-success pull-right" type="submit" value="print">Print Results</button>
							</form>
                            <!-- /.table-responsive -->
                        </div>
						<?php } }?>
						
                    </div>
                    <!-- /.panel -->
                </div>