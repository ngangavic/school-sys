<div class="panel panel-default">
                        <div class="panel-heading">
                            Form 3
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form action="grade3.php" method="post">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Eng</th>
                                        <th>Kis</th>
                                        <th>Mat</th>
										<th>Bio</th>
										<th>Chem</th>
										<th>Phy</th>
										<th>Geo</th>
										<th>His</th>
										<th>CRE</th>
										<th>Bus</th>
										<th>Agri</th>
										<th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
include"view3.php";
?>
                                    <tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=1; ?>" />
										<?php echo "A";?>
										</td>
                                        <td>
										<input class="form-control" name="englishA" type="text" value="<?php echo $engA; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliA" type="text" value="<?php echo $kisA; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsA" type="text" value="<?php echo $matA; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyA" type="text" value="<?php echo $bioA; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryA" type="text" value="<?php echo $chemA; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsA" type="text" value="<?php echo $phyA; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyA" type="text" value="<?php echo $geoA; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyA" type="text" value="<?php echo $hisA; ?>" />
										</td>
										<td>
										<input class="form-control" name="creA" type="text" value="<?php echo $creA; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessA" type="text" value="<?php echo $busA; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureA" type="text" value="<?php echo $agriA; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=2; ?>" />
										<?php echo "A-";?>
										</td>
                                        <td>
										<input class="form-control" name="englishA-" type="text" value="<?php echo $engAminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliA-" type="text" value="<?php echo $kisAminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsA-" type="text" value="<?php echo $matAminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyA-" type="text" value="<?php echo $bioAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryA-" type="text" value="<?php echo $chemAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsA-" type="text" value="<?php echo $phyAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyA-" type="text" value="<?php echo $geoAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyA-" type="text" value="<?php echo $hisAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creA-" type="text" value="<?php echo $creAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessA-" type="text" value="<?php echo $busAminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureA-" type="text" value="<?php echo $agriAminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=3; ?>" />
										<?php echo "B+";?>
										</td>
                                        <td>
										<input class="form-control" name="englishB+" type="text" value="<?php echo $engBplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliB+" type="text" value="<?php echo $kisBplus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsB+" type="text" value="<?php echo $matBplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyB+" type="text" value="<?php echo $bioBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryB+" type="text" value="<?php echo $chemBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsB+" type="text" value="<?php echo $phyBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyB+" type="text" value="<?php echo $geoBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyB+" type="text" value="<?php echo $hisBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creB+" type="text" value="<?php echo $creBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessB+" type="text" value="<?php echo $busBplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureB+" type="text" value="<?php echo $agriBplus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=4; ?>" />
										<?php echo "B";?>
										</td>
                                        <td>
										<input class="form-control" name="englishB" type="text" value="<?php echo $engB; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliB" type="text" value="<?php echo $kisB; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsB" type="text" value="<?php echo $matB; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyB" type="text" value="<?php echo $bioB; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryB" type="text" value="<?php echo $chemB; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsB" type="text" value="<?php echo $phyB; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyB" type="text" value="<?php echo $geoB; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyB" type="text" value="<?php echo $hisB; ?>" />
										</td>
										<td>
										<input class="form-control" name="creB" type="text" value="<?php echo $creB; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessB" type="text" value="<?php echo $busB; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureB" type="text" value="<?php echo $agriB; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=5; ?>" />
										<?php echo "B-";?>
										</td>
                                        <td>
										<input class="form-control" name="englishB-" type="text" value="<?php echo $engBminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliB-" type="text" value="<?php echo $kisBminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsB-" type="text" value="<?php echo $matBminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyB-" type="text" value="<?php echo $bioBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryB-" type="text" value="<?php echo $chemBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsB-" type="text" value="<?php echo $phyBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyB-" type="text" value="<?php echo $geoBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyB-" type="text" value="<?php echo $hisBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creB-" type="text" value="<?php echo $creBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessB-" type="text" value="<?php echo $busBminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureB-" type="text" value="<?php echo $agriBminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=6; ?>" />
										<?php echo "C+";?>
										</td>
                                        <td>
										<input class="form-control" name="englishC+" type="text" value="<?php echo $engCplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliC+" type="text" value="<?php echo $kisCplus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsC+" type="text" value="<?php echo $matCplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyC+" type="text" value="<?php echo $bioCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryC+" type="text" value="<?php echo $chemCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsC+" type="text" value="<?php echo $phyCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyC+" type="text" value="<?php echo $geoCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyC+" type="text" value="<?php echo $hisCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creC+" type="text" value="<?php echo $creCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessC+" type="text" value="<?php echo $busCplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureC+" type="text" value="<?php echo $agriCplus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=7; ?>" />
										<?php echo "C";?>
										</td>
                                        <td>
										<input class="form-control" name="englishC" type="text" value="<?php echo $engC; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliC" type="text" value="<?php echo $kisC; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsC" type="text" value="<?php echo $matC; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyC" type="text" value="<?php echo $bioC; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryC" type="text" value="<?php echo $chemC; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsC" type="text" value="<?php echo $phyC; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyC" type="text" value="<?php echo $geoC; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyC" type="text" value="<?php echo $hisC; ?>" />
										</td>
										<td>
										<input class="form-control" name="creC" type="text" value="<?php echo $creC; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessC" type="text" value="<?php echo $busC; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureC" type="text" value="<?php echo $agriC; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=8; ?>" />
										<?php echo "C-";?>
										</td>
                                        <td>
										<input class="form-control" name="englishC-" type="text" value="<?php echo $engCminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliC-" type="text" value="<?php echo $kisCminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsC-" type="text" value="<?php echo $matCminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyC-" type="text" value="<?php echo $bioCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryC-" type="text" value="<?php echo $chemCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsC-" type="text" value="<?php echo $phyCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyC-" type="text" value="<?php echo $geoCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyC-" type="text" value="<?php echo $hisCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creC-" type="text" value="<?php echo $creCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessC-" type="text" value="<?php echo $busCminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureC-" type="text" value="<?php echo $agriCminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=9; ?>" />
										<?php echo "D+";?>
										</td>
                                        <td>
										<input class="form-control" name="englishD+" type="text" value="<?php echo $engDplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliD+" type="text" value="<?php echo $kisDplus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsD+" type="text" value="<?php echo $matDplus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyD+" type="text" value="<?php echo $bioDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryD+" type="text" value="<?php echo $chemDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsD+" type="text" value="<?php echo $phyDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyD+" type="text" value="<?php echo $geoDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyD+" type="text" value="<?php echo $hisDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creD+" type="text" value="<?php echo $creDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessD+" type="text" value="<?php echo $busDplus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureD+" type="text" value="<?php echo $agriDplus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=10; ?>" />
										<?php echo "D";?>
										</td>
                                        <td>
										<input class="form-control" name="englishD" type="text" value="<?php echo $engD; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliD" type="text" value="<?php echo $kisD; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsD" type="text" value="<?php echo $matD; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyD" type="text" value="<?php echo $bioD; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryD" type="text" value="<?php echo $chemD; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsD" type="text" value="<?php echo $phyD; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyD" type="text" value="<?php echo $geoD; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyD" type="text" value="<?php echo $hisD; ?>" />
										</td>
										<td>
										<input class="form-control" name="creD" type="text" value="<?php echo $creD; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessD" type="text" value="<?php echo $busD; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureD" type="text" value="<?php echo $agriD; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=11; ?>" />
										<?php echo "D-";?>
										</td>
                                        <td>
										<input class="form-control" name="englishD-" type="text" value="<?php echo $engDminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliD-" type="text" value="<?php echo $kisDminus; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsD-" type="text" value="<?php echo $matDminus; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyD-" type="text" value="<?php echo $bioDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryD-" type="text" value="<?php echo $chemDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsD-" type="text" value="<?php echo $phyDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyD-" type="text" value="<?php echo $geoDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyD-" type="text" value="<?php echo $hisDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="creD-" type="text" value="<?php echo $creDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessD-" type="text" value="<?php echo $busDminus; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureD-" type="text" value="<?php echo $agriDminus; ?>" />
										</td>
										
                                    </tr>
									
									<tr class="odd gradeX">
                                        <td>
										<input name="id" type="hidden" value="<?php echo  $id=12; ?>" />
										<?php echo "E";?>
										</td>
                                        <td>
										<input class="form-control" name="englishE" type="text" value="<?php echo $engE; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="kiswahiliE" type="text" value="<?php echo $kisE; ?>" />
										</td>
                                        <td>
										<input   class="form-control" name="mathsE" type="text" value="<?php echo $matE; ?>" />
										</td>
                                        <td>
										<input class="form-control" name="biologyE" type="text" value="<?php echo $bioE; ?>" />
										</td>
										<td>
										<input class="form-control" name="chemistryE" type="text" value="<?php echo $chemE; ?>" />
										</td>
										<td>
										<input class="form-control" name="physicsE" type="text" value="<?php echo $phyE; ?>" />
										</td>
										<td>
										<input class="form-control" name="geographyE" type="text" value="<?php echo $geoE; ?>" />
										</td>
										<td>
										<input class="form-control" name="historyE" type="text" value="<?php echo $hisE; ?>" />
										</td>
										<td>
										<input class="form-control" name="creE" type="text" value="<?php echo $creE; ?>" />
										</td>
										<td>
										<input class="form-control" name="businessE" type="text" value="<?php echo $busE; ?>" />
										</td>
										<td>
										<input class="form-control" name="agricultureE" type="text" value="<?php echo $agriE; ?>" />
										</td>
										
                                    </tr>
                                        <?php //} ?>
                                </tbody>

                            </table>
							<button name="" onclick="myAlert()" class="btn btn-success pull-right" type="submit" value="Update">Update</button>
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