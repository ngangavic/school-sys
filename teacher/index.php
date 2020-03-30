<?php
session_start();

require_once "../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['school']) && isset($_SESSION['status']) && isset($_SESSION['phone']) && isset($_SESSION['id_no'])) {

    //get school name
    $stmt = $conn->prepare("SELECT name FROM tbl_school WHERE id=?");
    $stmt->bind_param("s", $_SESSION['school']);
    $stmt->execute();
    $school_row = $stmt->get_result()->fetch_array();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title><?php echo $school_row['name']; ?> | Teacher</title>
    </head>

    <body>
        <div class="header">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
                    <img src="logo.jpg" width="50" height="50" alt="School logo">
                    <?php
                    if($_SESSION['name']=='1'){

                    }else{
                        echo $_SESSION['name'];
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                if ($_SESSION['name'] == "1" || $_SESSION['phone'] == "1" || $_SESSION['id_no']=='1') {
                    //edit page
                ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-md-3">
                        <div class="alert alert-warning">
                            <strong>Please fill in the following details to use the system.</strong>
                        </div>
                        <form action="save-details.php" method="post">
                            <input type="hidden" name="teacher_id" value="<?php echo $_SESSION['id']; ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your name" required>
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone number" required>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" name="id_no" placeholder="ID number" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-sm btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                <?php
                } else {
                ?>

                    <div class="row" style="margin-top: 10px">

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-group">
                                        Your Profile
                                        <div class="card-img ml-auto">
                                            <i class="fa fa-1x fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#">Your Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-group">
                                        Log Out
                                        <div class="card-img ml-auto">
                                            <i class="fa fa-1x fa-lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="logout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px">
                    <div class="card">
                        <div class="card-header">
                            Classes Assigned
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $stmt=$conn->prepare("SELECT * FROM tbl_teachers_assigned WHERE teacher_id=?");
                                    $stmt->bind_param("s",$_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while($row=$result->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['class']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Enter results"><i class="fa fa-1x fa-table"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="View results"><i class="fa fa-1x fa-eye"></i></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px">
                    <div class="card">
                        <div class="card-header">
                            Exams lists
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Exam</th>
                                        <th>Class</th>
                                        <th>Term</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $stmt=$conn->prepare("SELECT * FROM tbl_exam WHERE school=? ORDER BY date DESC");
                                    $stmt->bind_param("s",$_SESSION['school']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while($row=$result->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['class']; ?></td>
                                        <td><?php echo $row['term']; ?></td>
                                        <td><?php echo $row['year']; ?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Enter results"><i class="fa fa-1x fa-table"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="View results"><i class="fa fa-1x fa-eye"></i></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        <?php } ?>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } else {
    header("location: ../index.php");
} ?>