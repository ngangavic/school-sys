<?php include"connection.php";?>
<?php include"../includes/session.php";?>
<ul class="nav" id="side-menu">
                        <?php if($_SESSION['role'] == "admin"){?>    
                        <li>
                            <a href="../home.php"><i class="fa fa-dashboard fa-fw"></i> Input Results</a>
                        </li>
						
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../add student.php">Add student</a>
                                </li>
                                <li>
                                    <a href="../edit student.php?id=1">Edit student</a>
                                </li>
								<li>
                                    <a href="../view grade/grade.php">View grade</a>
                                </li>
								<li>
                                    <a href="../subjects choices.php?id=1">Subject choices</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                        <li>
                            <a href="../Print.php"><i class="fa fa-table fa-fw"></i> Reports</a>
                        </li>
                        <li>
                            <a href="../view users.php"><i class="fa fa-edit fa-fw"></i>System Users</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Subject Teachers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../subject teachers.php?id=1">View/Edit</a>
                                </li>
                                <li>
                                    <a href="../add subject teacher.php">Add subject teacher</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Calculations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../total/home.php">Calculate Totals</a>
                                </li>
                                <li>
                                    <a href="index.php">Calculate Positions</a>
                                </li>
                          
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-home fa-fw"></i>Classes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../classavg/index.php?id=1">Class Averages</a>
                                </li>
                                <li>
                                    <a href="../update grade/class-grades.php">Class Grades</a>
                                </li>
                          
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-book fa-fw"></i>Subjects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../subjectavg/index.php?id=1">Subject Averages</a>
                                </li>
                                <li>
                                    <a href="../update grade/index.php?id=1">Edit Subject Grades</a>
                                </li>
                          
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="../admin.php"><i class="fa fa-dashboard fa-fw"></i>Admin Page</a>
                        </li>
						<li>
                            <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
						
<!--teachers-->				
                    <?php }else{?>
                        <li>
                            <a href="../home.php"><i class="fa fa-dashboard fa-fw"></i> Input Results</a>
                        </li>
						<li>
							<a href="#"><i class="fa fa-dashboard fa-fw"></i>View grade</a>
                        </li>
						<li>
							<a href="../search"><i class="fa fa-dashboard fa-fw"></i>Search Results</a>
                        </li>
						<li>
							<a href="../Print.php"><i class="fa fa-dashboard fa-fw"></i>View Results</a>
                        </li>
						<li>
							<a href="../subjectavg/index.php?id=1"><i class="fa fa-dashboard fa-fw"></i>Subjects Averages</a>
                        </li>
						<li>
							<a href="../classavg/index.php?id=1"><i class="fa fa-dashboard fa-fw"></i>Class Averages</a>
                        </li>
						<li>
                            <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
					<?php } ?>
                        
                    </ul>