<?php
session_start();
require_once "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Reports</title>
        <script rel="javascript" src="../../jquery/jquery-3.4.1.js"></script>
        <script rel="javascript" src="../../popper/popper.min.js"></script>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script rel="javascript" src="../../bootstrap/js/bootstrap.js"></script>
        <link href="../../css/custom.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
        <link href="../../fonts/css/all.css" rel="stylesheet">
    </head>

    <body>

        <?php include "../topbar.php"; ?>
        <!--    new UI start-->
        <div class="container-fluid">

            <div class="row">

                <?php include "../sidebar.php"; ?>

                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 main-content">
                    <div class="card" style="margin-top: 5px">
                        <div style="background-color: #ffffff" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h5 style="color: #000000;padding: 5px;">Dashboard: Reports</h5>
                        </div>
                    </div>

                    <div class="class-table" style="margin-top: 5px;">
                        <table class="table table-bordered">
                            <thead>
                                <th>Class</th>
                                <th>Name</th>
                                <th>Term</th>
                                <th>Year</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? ORDER BY date DESC ");
                                $stmt->bind_param("s", $_SESSION['id']);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['class']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['term']; ?></td>
                                        <td><?php echo $row['year']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td>
                                            <div class="btn btn-group btn-group-sm">
                                                <a href="#" class="btn btn-group-sm btn-outline-primary view">Classlist</a>
                                                <a href="#" class="btn btn-group-sm btn-outline-success assign">Report Forms</a>
                                                <a href="#" class="btn btn-group-sm btn-outline-danger">Post</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <?php include "../footer.php"; ?>
        <!--    new UI end-->

        <!--    [START]results modal-->
        <!-- Modal -->
        <?php include "../modals/results-modal.php"; ?>
        <!--[END]results modal-->

    </body>

    </html>
<?php } else {
    header("location:../../index.php");
} ?>