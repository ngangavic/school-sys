<?php
session_start();
require_once "../../actions/database/connection.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

    if (isset($_POST['create'])) {
        $school = $_SESSION['id'];
        $name = $_POST['exam'];
        $year = $_POST['year'];
        $term = $_POST['term'];
        $class = $_POST['class'];

        //check if subject
        $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE name=? AND school=? AND class=? AND term=? AND year=? ");
        $stmt->bind_param("sssss", $name, $school, $class, $term, $year);
        $stmt->execute();

        if ($stmt->get_result()->num_rows > 0) {
            header("location:exams.php?msg=error");
        } else {
            $stmt = $conn->prepare("INSERT INTO tbl_exam(school,name,class,term,year,date) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP )");
            $stmt->bind_param("sssss", $school, $name, $class, $term, $year);
            if (!$stmt->execute()) {
                header("location:exams.php?msg=error");
            } else {
                header("location:exams.php?msg=success");
            }
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Exams</title>
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

                    <div style="background-color: #ffffff" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h5 style="color: #000000;padding: 5px;">Dashboard: Exam</h5>
                        <hr />
                    </div>

                    <a data-toggle="modal" href="#createExamModal" class="btn btn-group-sm btn-outline-secondary">Create
                        Exam</a>
                    <div class="class-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Exam name</th>
                                    <th>Class</th>
                                    <th>Term</th>
                                    <th>Year</th>
                                    <th>Date created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? AND status='active' ");
                                $stmt->bind_param("s", $_SESSION['id']);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['class']; ?></td>
                                        <td><?php echo $row['term']; ?></td>
                                        <td><?php echo $row['year']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td>
                                            <div class="btn btn-group btn-group-sm">
                                                <!--                                    <a href="#" class="btn btn-group-sm btn-outline-primary">View</a>-->
                                                <a href="action/delete-exam.php?id=<?php echo $row['id']; ?>" class="btn btn-group-sm btn-outline-danger">Delete</a>
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
        <!--    new UI end-->


        <!--    START modal create exam-->
        <div id="createExamModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Exam</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input class="form-control" name="exam" placeholder="Exam name" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="class" required>
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="term" required>
                                    <option value="Term 1">TERM 1</option>
                                    <option value="Term 2">TERM 2</option>
                                    <option value="Term 3">TERM 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="year" required>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-primary" name="create">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    END modal create exam-->

        <!--    [START]results modal-->
        <!-- Modal -->
        <div id="resultsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Results Setup</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="../results/" method="get">
                            <div class="form-group">
                                <select name="exam" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="class" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="term" class="form-control">
                                    <option value="Term 1">Term 1</option>
                                    <option value="Term 2">Term 2</option>
                                    <option value="Term 3">Term 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="year" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="subject" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">DONE</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!--[END]results modal-->

    </body>

    </html>
<?php } else {
    header("location:../../index.php");
} ?>